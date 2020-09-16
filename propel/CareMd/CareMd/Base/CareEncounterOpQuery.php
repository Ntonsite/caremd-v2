<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterOp as ChildCareEncounterOp;
use CareMd\CareMd\CareEncounterOpQuery as ChildCareEncounterOpQuery;
use CareMd\CareMd\Map\CareEncounterOpTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_op' table.
 *
 *
 *
 * @method     ChildCareEncounterOpQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareEncounterOpQuery orderByYear($order = Criteria::ASC) Order by the year column
 * @method     ChildCareEncounterOpQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareEncounterOpQuery orderByOpRoom($order = Criteria::ASC) Order by the op_room column
 * @method     ChildCareEncounterOpQuery orderByOpNr($order = Criteria::ASC) Order by the op_nr column
 * @method     ChildCareEncounterOpQuery orderByOpDate($order = Criteria::ASC) Order by the op_date column
 * @method     ChildCareEncounterOpQuery orderByOpSrcDate($order = Criteria::ASC) Order by the op_src_date column
 * @method     ChildCareEncounterOpQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterOpQuery orderByDiagnosis($order = Criteria::ASC) Order by the diagnosis column
 * @method     ChildCareEncounterOpQuery orderByOperator($order = Criteria::ASC) Order by the operator column
 * @method     ChildCareEncounterOpQuery orderByAssistant($order = Criteria::ASC) Order by the assistant column
 * @method     ChildCareEncounterOpQuery orderByScrubNurse($order = Criteria::ASC) Order by the scrub_nurse column
 * @method     ChildCareEncounterOpQuery orderByRotatingNurse($order = Criteria::ASC) Order by the rotating_nurse column
 * @method     ChildCareEncounterOpQuery orderByAnesthesia($order = Criteria::ASC) Order by the anesthesia column
 * @method     ChildCareEncounterOpQuery orderByAnDoctor($order = Criteria::ASC) Order by the an_doctor column
 * @method     ChildCareEncounterOpQuery orderByOpTherapy($order = Criteria::ASC) Order by the op_therapy column
 * @method     ChildCareEncounterOpQuery orderByResultInfo($order = Criteria::ASC) Order by the result_info column
 * @method     ChildCareEncounterOpQuery orderByEntryTime($order = Criteria::ASC) Order by the entry_time column
 * @method     ChildCareEncounterOpQuery orderByCutTime($order = Criteria::ASC) Order by the cut_time column
 * @method     ChildCareEncounterOpQuery orderByCloseTime($order = Criteria::ASC) Order by the close_time column
 * @method     ChildCareEncounterOpQuery orderByExitTime($order = Criteria::ASC) Order by the exit_time column
 * @method     ChildCareEncounterOpQuery orderByEntryOut($order = Criteria::ASC) Order by the entry_out column
 * @method     ChildCareEncounterOpQuery orderByCutClose($order = Criteria::ASC) Order by the cut_close column
 * @method     ChildCareEncounterOpQuery orderByWaitTime($order = Criteria::ASC) Order by the wait_time column
 * @method     ChildCareEncounterOpQuery orderByBandageTime($order = Criteria::ASC) Order by the bandage_time column
 * @method     ChildCareEncounterOpQuery orderByReposTime($order = Criteria::ASC) Order by the repos_time column
 * @method     ChildCareEncounterOpQuery orderByEncoding($order = Criteria::ASC) Order by the encoding column
 * @method     ChildCareEncounterOpQuery orderByDocDate($order = Criteria::ASC) Order by the doc_date column
 * @method     ChildCareEncounterOpQuery orderByDocTime($order = Criteria::ASC) Order by the doc_time column
 * @method     ChildCareEncounterOpQuery orderByDutyType($order = Criteria::ASC) Order by the duty_type column
 * @method     ChildCareEncounterOpQuery orderByMaterialCodedlist($order = Criteria::ASC) Order by the material_codedlist column
 * @method     ChildCareEncounterOpQuery orderByContainerCodedlist($order = Criteria::ASC) Order by the container_codedlist column
 * @method     ChildCareEncounterOpQuery orderByIcdCode($order = Criteria::ASC) Order by the icd_code column
 * @method     ChildCareEncounterOpQuery orderByOpsCode($order = Criteria::ASC) Order by the ops_code column
 * @method     ChildCareEncounterOpQuery orderByOpsInternCode($order = Criteria::ASC) Order by the ops_intern_code column
 * @method     ChildCareEncounterOpQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterOpQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterOpQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterOpQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterOpQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterOpQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareEncounterOpQuery groupByNr() Group by the nr column
 * @method     ChildCareEncounterOpQuery groupByYear() Group by the year column
 * @method     ChildCareEncounterOpQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareEncounterOpQuery groupByOpRoom() Group by the op_room column
 * @method     ChildCareEncounterOpQuery groupByOpNr() Group by the op_nr column
 * @method     ChildCareEncounterOpQuery groupByOpDate() Group by the op_date column
 * @method     ChildCareEncounterOpQuery groupByOpSrcDate() Group by the op_src_date column
 * @method     ChildCareEncounterOpQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterOpQuery groupByDiagnosis() Group by the diagnosis column
 * @method     ChildCareEncounterOpQuery groupByOperator() Group by the operator column
 * @method     ChildCareEncounterOpQuery groupByAssistant() Group by the assistant column
 * @method     ChildCareEncounterOpQuery groupByScrubNurse() Group by the scrub_nurse column
 * @method     ChildCareEncounterOpQuery groupByRotatingNurse() Group by the rotating_nurse column
 * @method     ChildCareEncounterOpQuery groupByAnesthesia() Group by the anesthesia column
 * @method     ChildCareEncounterOpQuery groupByAnDoctor() Group by the an_doctor column
 * @method     ChildCareEncounterOpQuery groupByOpTherapy() Group by the op_therapy column
 * @method     ChildCareEncounterOpQuery groupByResultInfo() Group by the result_info column
 * @method     ChildCareEncounterOpQuery groupByEntryTime() Group by the entry_time column
 * @method     ChildCareEncounterOpQuery groupByCutTime() Group by the cut_time column
 * @method     ChildCareEncounterOpQuery groupByCloseTime() Group by the close_time column
 * @method     ChildCareEncounterOpQuery groupByExitTime() Group by the exit_time column
 * @method     ChildCareEncounterOpQuery groupByEntryOut() Group by the entry_out column
 * @method     ChildCareEncounterOpQuery groupByCutClose() Group by the cut_close column
 * @method     ChildCareEncounterOpQuery groupByWaitTime() Group by the wait_time column
 * @method     ChildCareEncounterOpQuery groupByBandageTime() Group by the bandage_time column
 * @method     ChildCareEncounterOpQuery groupByReposTime() Group by the repos_time column
 * @method     ChildCareEncounterOpQuery groupByEncoding() Group by the encoding column
 * @method     ChildCareEncounterOpQuery groupByDocDate() Group by the doc_date column
 * @method     ChildCareEncounterOpQuery groupByDocTime() Group by the doc_time column
 * @method     ChildCareEncounterOpQuery groupByDutyType() Group by the duty_type column
 * @method     ChildCareEncounterOpQuery groupByMaterialCodedlist() Group by the material_codedlist column
 * @method     ChildCareEncounterOpQuery groupByContainerCodedlist() Group by the container_codedlist column
 * @method     ChildCareEncounterOpQuery groupByIcdCode() Group by the icd_code column
 * @method     ChildCareEncounterOpQuery groupByOpsCode() Group by the ops_code column
 * @method     ChildCareEncounterOpQuery groupByOpsInternCode() Group by the ops_intern_code column
 * @method     ChildCareEncounterOpQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterOpQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterOpQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterOpQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterOpQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterOpQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareEncounterOpQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterOpQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterOpQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterOpQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterOpQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterOpQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterOp findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterOp matching the query
 * @method     ChildCareEncounterOp findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterOp matching the query, or a new ChildCareEncounterOp object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterOp findOneByNr(int $nr) Return the first ChildCareEncounterOp filtered by the nr column
 * @method     ChildCareEncounterOp findOneByYear(string $year) Return the first ChildCareEncounterOp filtered by the year column
 * @method     ChildCareEncounterOp findOneByDeptNr(int $dept_nr) Return the first ChildCareEncounterOp filtered by the dept_nr column
 * @method     ChildCareEncounterOp findOneByOpRoom(string $op_room) Return the first ChildCareEncounterOp filtered by the op_room column
 * @method     ChildCareEncounterOp findOneByOpNr(int $op_nr) Return the first ChildCareEncounterOp filtered by the op_nr column
 * @method     ChildCareEncounterOp findOneByOpDate(string $op_date) Return the first ChildCareEncounterOp filtered by the op_date column
 * @method     ChildCareEncounterOp findOneByOpSrcDate(string $op_src_date) Return the first ChildCareEncounterOp filtered by the op_src_date column
 * @method     ChildCareEncounterOp findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterOp filtered by the encounter_nr column
 * @method     ChildCareEncounterOp findOneByDiagnosis(string $diagnosis) Return the first ChildCareEncounterOp filtered by the diagnosis column
 * @method     ChildCareEncounterOp findOneByOperator(string $operator) Return the first ChildCareEncounterOp filtered by the operator column
 * @method     ChildCareEncounterOp findOneByAssistant(string $assistant) Return the first ChildCareEncounterOp filtered by the assistant column
 * @method     ChildCareEncounterOp findOneByScrubNurse(string $scrub_nurse) Return the first ChildCareEncounterOp filtered by the scrub_nurse column
 * @method     ChildCareEncounterOp findOneByRotatingNurse(string $rotating_nurse) Return the first ChildCareEncounterOp filtered by the rotating_nurse column
 * @method     ChildCareEncounterOp findOneByAnesthesia(string $anesthesia) Return the first ChildCareEncounterOp filtered by the anesthesia column
 * @method     ChildCareEncounterOp findOneByAnDoctor(string $an_doctor) Return the first ChildCareEncounterOp filtered by the an_doctor column
 * @method     ChildCareEncounterOp findOneByOpTherapy(string $op_therapy) Return the first ChildCareEncounterOp filtered by the op_therapy column
 * @method     ChildCareEncounterOp findOneByResultInfo(string $result_info) Return the first ChildCareEncounterOp filtered by the result_info column
 * @method     ChildCareEncounterOp findOneByEntryTime(string $entry_time) Return the first ChildCareEncounterOp filtered by the entry_time column
 * @method     ChildCareEncounterOp findOneByCutTime(string $cut_time) Return the first ChildCareEncounterOp filtered by the cut_time column
 * @method     ChildCareEncounterOp findOneByCloseTime(string $close_time) Return the first ChildCareEncounterOp filtered by the close_time column
 * @method     ChildCareEncounterOp findOneByExitTime(string $exit_time) Return the first ChildCareEncounterOp filtered by the exit_time column
 * @method     ChildCareEncounterOp findOneByEntryOut(string $entry_out) Return the first ChildCareEncounterOp filtered by the entry_out column
 * @method     ChildCareEncounterOp findOneByCutClose(string $cut_close) Return the first ChildCareEncounterOp filtered by the cut_close column
 * @method     ChildCareEncounterOp findOneByWaitTime(string $wait_time) Return the first ChildCareEncounterOp filtered by the wait_time column
 * @method     ChildCareEncounterOp findOneByBandageTime(string $bandage_time) Return the first ChildCareEncounterOp filtered by the bandage_time column
 * @method     ChildCareEncounterOp findOneByReposTime(string $repos_time) Return the first ChildCareEncounterOp filtered by the repos_time column
 * @method     ChildCareEncounterOp findOneByEncoding(string $encoding) Return the first ChildCareEncounterOp filtered by the encoding column
 * @method     ChildCareEncounterOp findOneByDocDate(string $doc_date) Return the first ChildCareEncounterOp filtered by the doc_date column
 * @method     ChildCareEncounterOp findOneByDocTime(string $doc_time) Return the first ChildCareEncounterOp filtered by the doc_time column
 * @method     ChildCareEncounterOp findOneByDutyType(string $duty_type) Return the first ChildCareEncounterOp filtered by the duty_type column
 * @method     ChildCareEncounterOp findOneByMaterialCodedlist(string $material_codedlist) Return the first ChildCareEncounterOp filtered by the material_codedlist column
 * @method     ChildCareEncounterOp findOneByContainerCodedlist(string $container_codedlist) Return the first ChildCareEncounterOp filtered by the container_codedlist column
 * @method     ChildCareEncounterOp findOneByIcdCode(string $icd_code) Return the first ChildCareEncounterOp filtered by the icd_code column
 * @method     ChildCareEncounterOp findOneByOpsCode(string $ops_code) Return the first ChildCareEncounterOp filtered by the ops_code column
 * @method     ChildCareEncounterOp findOneByOpsInternCode(string $ops_intern_code) Return the first ChildCareEncounterOp filtered by the ops_intern_code column
 * @method     ChildCareEncounterOp findOneByStatus(string $status) Return the first ChildCareEncounterOp filtered by the status column
 * @method     ChildCareEncounterOp findOneByHistory(string $history) Return the first ChildCareEncounterOp filtered by the history column
 * @method     ChildCareEncounterOp findOneByModifyId(string $modify_id) Return the first ChildCareEncounterOp filtered by the modify_id column
 * @method     ChildCareEncounterOp findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterOp filtered by the modify_time column
 * @method     ChildCareEncounterOp findOneByCreateId(string $create_id) Return the first ChildCareEncounterOp filtered by the create_id column
 * @method     ChildCareEncounterOp findOneByCreateTime(string $create_time) Return the first ChildCareEncounterOp filtered by the create_time column *

 * @method     ChildCareEncounterOp requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterOp by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterOp matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterOp requireOneByNr(int $nr) Return the first ChildCareEncounterOp filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByYear(string $year) Return the first ChildCareEncounterOp filtered by the year column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByDeptNr(int $dept_nr) Return the first ChildCareEncounterOp filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByOpRoom(string $op_room) Return the first ChildCareEncounterOp filtered by the op_room column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByOpNr(int $op_nr) Return the first ChildCareEncounterOp filtered by the op_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByOpDate(string $op_date) Return the first ChildCareEncounterOp filtered by the op_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByOpSrcDate(string $op_src_date) Return the first ChildCareEncounterOp filtered by the op_src_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterOp filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByDiagnosis(string $diagnosis) Return the first ChildCareEncounterOp filtered by the diagnosis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByOperator(string $operator) Return the first ChildCareEncounterOp filtered by the operator column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByAssistant(string $assistant) Return the first ChildCareEncounterOp filtered by the assistant column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByScrubNurse(string $scrub_nurse) Return the first ChildCareEncounterOp filtered by the scrub_nurse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByRotatingNurse(string $rotating_nurse) Return the first ChildCareEncounterOp filtered by the rotating_nurse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByAnesthesia(string $anesthesia) Return the first ChildCareEncounterOp filtered by the anesthesia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByAnDoctor(string $an_doctor) Return the first ChildCareEncounterOp filtered by the an_doctor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByOpTherapy(string $op_therapy) Return the first ChildCareEncounterOp filtered by the op_therapy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByResultInfo(string $result_info) Return the first ChildCareEncounterOp filtered by the result_info column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByEntryTime(string $entry_time) Return the first ChildCareEncounterOp filtered by the entry_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByCutTime(string $cut_time) Return the first ChildCareEncounterOp filtered by the cut_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByCloseTime(string $close_time) Return the first ChildCareEncounterOp filtered by the close_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByExitTime(string $exit_time) Return the first ChildCareEncounterOp filtered by the exit_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByEntryOut(string $entry_out) Return the first ChildCareEncounterOp filtered by the entry_out column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByCutClose(string $cut_close) Return the first ChildCareEncounterOp filtered by the cut_close column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByWaitTime(string $wait_time) Return the first ChildCareEncounterOp filtered by the wait_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByBandageTime(string $bandage_time) Return the first ChildCareEncounterOp filtered by the bandage_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByReposTime(string $repos_time) Return the first ChildCareEncounterOp filtered by the repos_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByEncoding(string $encoding) Return the first ChildCareEncounterOp filtered by the encoding column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByDocDate(string $doc_date) Return the first ChildCareEncounterOp filtered by the doc_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByDocTime(string $doc_time) Return the first ChildCareEncounterOp filtered by the doc_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByDutyType(string $duty_type) Return the first ChildCareEncounterOp filtered by the duty_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByMaterialCodedlist(string $material_codedlist) Return the first ChildCareEncounterOp filtered by the material_codedlist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByContainerCodedlist(string $container_codedlist) Return the first ChildCareEncounterOp filtered by the container_codedlist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByIcdCode(string $icd_code) Return the first ChildCareEncounterOp filtered by the icd_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByOpsCode(string $ops_code) Return the first ChildCareEncounterOp filtered by the ops_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByOpsInternCode(string $ops_intern_code) Return the first ChildCareEncounterOp filtered by the ops_intern_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByStatus(string $status) Return the first ChildCareEncounterOp filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByHistory(string $history) Return the first ChildCareEncounterOp filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterOp filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterOp filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByCreateId(string $create_id) Return the first ChildCareEncounterOp filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterOp requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterOp filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterOp[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterOp objects based on current ModelCriteria
 * @method     ChildCareEncounterOp[]|ObjectCollection findByNr(int $nr) Return ChildCareEncounterOp objects filtered by the nr column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByYear(string $year) Return ChildCareEncounterOp objects filtered by the year column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareEncounterOp objects filtered by the dept_nr column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByOpRoom(string $op_room) Return ChildCareEncounterOp objects filtered by the op_room column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByOpNr(int $op_nr) Return ChildCareEncounterOp objects filtered by the op_nr column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByOpDate(string $op_date) Return ChildCareEncounterOp objects filtered by the op_date column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByOpSrcDate(string $op_src_date) Return ChildCareEncounterOp objects filtered by the op_src_date column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterOp objects filtered by the encounter_nr column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByDiagnosis(string $diagnosis) Return ChildCareEncounterOp objects filtered by the diagnosis column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByOperator(string $operator) Return ChildCareEncounterOp objects filtered by the operator column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByAssistant(string $assistant) Return ChildCareEncounterOp objects filtered by the assistant column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByScrubNurse(string $scrub_nurse) Return ChildCareEncounterOp objects filtered by the scrub_nurse column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByRotatingNurse(string $rotating_nurse) Return ChildCareEncounterOp objects filtered by the rotating_nurse column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByAnesthesia(string $anesthesia) Return ChildCareEncounterOp objects filtered by the anesthesia column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByAnDoctor(string $an_doctor) Return ChildCareEncounterOp objects filtered by the an_doctor column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByOpTherapy(string $op_therapy) Return ChildCareEncounterOp objects filtered by the op_therapy column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByResultInfo(string $result_info) Return ChildCareEncounterOp objects filtered by the result_info column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByEntryTime(string $entry_time) Return ChildCareEncounterOp objects filtered by the entry_time column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByCutTime(string $cut_time) Return ChildCareEncounterOp objects filtered by the cut_time column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByCloseTime(string $close_time) Return ChildCareEncounterOp objects filtered by the close_time column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByExitTime(string $exit_time) Return ChildCareEncounterOp objects filtered by the exit_time column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByEntryOut(string $entry_out) Return ChildCareEncounterOp objects filtered by the entry_out column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByCutClose(string $cut_close) Return ChildCareEncounterOp objects filtered by the cut_close column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByWaitTime(string $wait_time) Return ChildCareEncounterOp objects filtered by the wait_time column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByBandageTime(string $bandage_time) Return ChildCareEncounterOp objects filtered by the bandage_time column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByReposTime(string $repos_time) Return ChildCareEncounterOp objects filtered by the repos_time column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByEncoding(string $encoding) Return ChildCareEncounterOp objects filtered by the encoding column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByDocDate(string $doc_date) Return ChildCareEncounterOp objects filtered by the doc_date column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByDocTime(string $doc_time) Return ChildCareEncounterOp objects filtered by the doc_time column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByDutyType(string $duty_type) Return ChildCareEncounterOp objects filtered by the duty_type column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByMaterialCodedlist(string $material_codedlist) Return ChildCareEncounterOp objects filtered by the material_codedlist column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByContainerCodedlist(string $container_codedlist) Return ChildCareEncounterOp objects filtered by the container_codedlist column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByIcdCode(string $icd_code) Return ChildCareEncounterOp objects filtered by the icd_code column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByOpsCode(string $ops_code) Return ChildCareEncounterOp objects filtered by the ops_code column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByOpsInternCode(string $ops_intern_code) Return ChildCareEncounterOp objects filtered by the ops_intern_code column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterOp objects filtered by the status column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterOp objects filtered by the history column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterOp objects filtered by the modify_id column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterOp objects filtered by the modify_time column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterOp objects filtered by the create_id column
 * @method     ChildCareEncounterOp[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterOp objects filtered by the create_time column
 * @method     ChildCareEncounterOp[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterOpQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterOpQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterOp', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterOpQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterOpQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterOpQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterOpQuery();
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
     * @return ChildCareEncounterOp|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterOpTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterOpTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterOp A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, year, dept_nr, op_room, op_nr, op_date, op_src_date, encounter_nr, diagnosis, operator, assistant, scrub_nurse, rotating_nurse, anesthesia, an_doctor, op_therapy, result_info, entry_time, cut_time, close_time, exit_time, entry_out, cut_close, wait_time, bandage_time, repos_time, encoding, doc_date, doc_time, duty_type, material_codedlist, container_codedlist, icd_code, ops_code, ops_intern_code, status, history, modify_id, modify_time, create_id, create_time FROM care_encounter_op WHERE nr = :p0';
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
            /** @var ChildCareEncounterOp $obj */
            $obj = new ChildCareEncounterOp();
            $obj->hydrate($row);
            CareEncounterOpTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterOp|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear('fooValue');   // WHERE year = 'fooValue'
     * $query->filterByYear('%fooValue%', Criteria::LIKE); // WHERE year LIKE '%fooValue%'
     * </code>
     *
     * @param     string $year The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($year)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_YEAR, $year, $comparison);
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
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the op_room column
     *
     * Example usage:
     * <code>
     * $query->filterByOpRoom('fooValue');   // WHERE op_room = 'fooValue'
     * $query->filterByOpRoom('%fooValue%', Criteria::LIKE); // WHERE op_room LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opRoom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByOpRoom($opRoom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opRoom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_OP_ROOM, $opRoom, $comparison);
    }

    /**
     * Filter the query on the op_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByOpNr(1234); // WHERE op_nr = 1234
     * $query->filterByOpNr(array(12, 34)); // WHERE op_nr IN (12, 34)
     * $query->filterByOpNr(array('min' => 12)); // WHERE op_nr > 12
     * </code>
     *
     * @param     mixed $opNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByOpNr($opNr = null, $comparison = null)
    {
        if (is_array($opNr)) {
            $useMinMax = false;
            if (isset($opNr['min'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_OP_NR, $opNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opNr['max'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_OP_NR, $opNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_OP_NR, $opNr, $comparison);
    }

    /**
     * Filter the query on the op_date column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDate('2011-03-14'); // WHERE op_date = '2011-03-14'
     * $query->filterByOpDate('now'); // WHERE op_date = '2011-03-14'
     * $query->filterByOpDate(array('max' => 'yesterday')); // WHERE op_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $opDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByOpDate($opDate = null, $comparison = null)
    {
        if (is_array($opDate)) {
            $useMinMax = false;
            if (isset($opDate['min'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_OP_DATE, $opDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDate['max'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_OP_DATE, $opDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_OP_DATE, $opDate, $comparison);
    }

    /**
     * Filter the query on the op_src_date column
     *
     * Example usage:
     * <code>
     * $query->filterByOpSrcDate('fooValue');   // WHERE op_src_date = 'fooValue'
     * $query->filterByOpSrcDate('%fooValue%', Criteria::LIKE); // WHERE op_src_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opSrcDate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByOpSrcDate($opSrcDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opSrcDate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_OP_SRC_DATE, $opSrcDate, $comparison);
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
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the diagnosis column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosis('fooValue');   // WHERE diagnosis = 'fooValue'
     * $query->filterByDiagnosis('%fooValue%', Criteria::LIKE); // WHERE diagnosis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosis The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByDiagnosis($diagnosis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosis)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_DIAGNOSIS, $diagnosis, $comparison);
    }

    /**
     * Filter the query on the operator column
     *
     * Example usage:
     * <code>
     * $query->filterByOperator('fooValue');   // WHERE operator = 'fooValue'
     * $query->filterByOperator('%fooValue%', Criteria::LIKE); // WHERE operator LIKE '%fooValue%'
     * </code>
     *
     * @param     string $operator The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByOperator($operator = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($operator)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_OPERATOR, $operator, $comparison);
    }

    /**
     * Filter the query on the assistant column
     *
     * Example usage:
     * <code>
     * $query->filterByAssistant('fooValue');   // WHERE assistant = 'fooValue'
     * $query->filterByAssistant('%fooValue%', Criteria::LIKE); // WHERE assistant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $assistant The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByAssistant($assistant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($assistant)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_ASSISTANT, $assistant, $comparison);
    }

    /**
     * Filter the query on the scrub_nurse column
     *
     * Example usage:
     * <code>
     * $query->filterByScrubNurse('fooValue');   // WHERE scrub_nurse = 'fooValue'
     * $query->filterByScrubNurse('%fooValue%', Criteria::LIKE); // WHERE scrub_nurse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scrubNurse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByScrubNurse($scrubNurse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scrubNurse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_SCRUB_NURSE, $scrubNurse, $comparison);
    }

    /**
     * Filter the query on the rotating_nurse column
     *
     * Example usage:
     * <code>
     * $query->filterByRotatingNurse('fooValue');   // WHERE rotating_nurse = 'fooValue'
     * $query->filterByRotatingNurse('%fooValue%', Criteria::LIKE); // WHERE rotating_nurse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rotatingNurse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByRotatingNurse($rotatingNurse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rotatingNurse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_ROTATING_NURSE, $rotatingNurse, $comparison);
    }

    /**
     * Filter the query on the anesthesia column
     *
     * Example usage:
     * <code>
     * $query->filterByAnesthesia('fooValue');   // WHERE anesthesia = 'fooValue'
     * $query->filterByAnesthesia('%fooValue%', Criteria::LIKE); // WHERE anesthesia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anesthesia The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByAnesthesia($anesthesia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anesthesia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_ANESTHESIA, $anesthesia, $comparison);
    }

    /**
     * Filter the query on the an_doctor column
     *
     * Example usage:
     * <code>
     * $query->filterByAnDoctor('fooValue');   // WHERE an_doctor = 'fooValue'
     * $query->filterByAnDoctor('%fooValue%', Criteria::LIKE); // WHERE an_doctor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anDoctor The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByAnDoctor($anDoctor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anDoctor)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_AN_DOCTOR, $anDoctor, $comparison);
    }

    /**
     * Filter the query on the op_therapy column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTherapy('fooValue');   // WHERE op_therapy = 'fooValue'
     * $query->filterByOpTherapy('%fooValue%', Criteria::LIKE); // WHERE op_therapy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opTherapy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByOpTherapy($opTherapy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opTherapy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_OP_THERAPY, $opTherapy, $comparison);
    }

    /**
     * Filter the query on the result_info column
     *
     * Example usage:
     * <code>
     * $query->filterByResultInfo('fooValue');   // WHERE result_info = 'fooValue'
     * $query->filterByResultInfo('%fooValue%', Criteria::LIKE); // WHERE result_info LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resultInfo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByResultInfo($resultInfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resultInfo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_RESULT_INFO, $resultInfo, $comparison);
    }

    /**
     * Filter the query on the entry_time column
     *
     * Example usage:
     * <code>
     * $query->filterByEntryTime('fooValue');   // WHERE entry_time = 'fooValue'
     * $query->filterByEntryTime('%fooValue%', Criteria::LIKE); // WHERE entry_time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entryTime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByEntryTime($entryTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entryTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_ENTRY_TIME, $entryTime, $comparison);
    }

    /**
     * Filter the query on the cut_time column
     *
     * Example usage:
     * <code>
     * $query->filterByCutTime('fooValue');   // WHERE cut_time = 'fooValue'
     * $query->filterByCutTime('%fooValue%', Criteria::LIKE); // WHERE cut_time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cutTime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByCutTime($cutTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cutTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_CUT_TIME, $cutTime, $comparison);
    }

    /**
     * Filter the query on the close_time column
     *
     * Example usage:
     * <code>
     * $query->filterByCloseTime('fooValue');   // WHERE close_time = 'fooValue'
     * $query->filterByCloseTime('%fooValue%', Criteria::LIKE); // WHERE close_time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $closeTime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByCloseTime($closeTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($closeTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_CLOSE_TIME, $closeTime, $comparison);
    }

    /**
     * Filter the query on the exit_time column
     *
     * Example usage:
     * <code>
     * $query->filterByExitTime('fooValue');   // WHERE exit_time = 'fooValue'
     * $query->filterByExitTime('%fooValue%', Criteria::LIKE); // WHERE exit_time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $exitTime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByExitTime($exitTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exitTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_EXIT_TIME, $exitTime, $comparison);
    }

    /**
     * Filter the query on the entry_out column
     *
     * Example usage:
     * <code>
     * $query->filterByEntryOut('fooValue');   // WHERE entry_out = 'fooValue'
     * $query->filterByEntryOut('%fooValue%', Criteria::LIKE); // WHERE entry_out LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entryOut The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByEntryOut($entryOut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entryOut)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_ENTRY_OUT, $entryOut, $comparison);
    }

    /**
     * Filter the query on the cut_close column
     *
     * Example usage:
     * <code>
     * $query->filterByCutClose('fooValue');   // WHERE cut_close = 'fooValue'
     * $query->filterByCutClose('%fooValue%', Criteria::LIKE); // WHERE cut_close LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cutClose The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByCutClose($cutClose = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cutClose)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_CUT_CLOSE, $cutClose, $comparison);
    }

    /**
     * Filter the query on the wait_time column
     *
     * Example usage:
     * <code>
     * $query->filterByWaitTime('fooValue');   // WHERE wait_time = 'fooValue'
     * $query->filterByWaitTime('%fooValue%', Criteria::LIKE); // WHERE wait_time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $waitTime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByWaitTime($waitTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($waitTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_WAIT_TIME, $waitTime, $comparison);
    }

    /**
     * Filter the query on the bandage_time column
     *
     * Example usage:
     * <code>
     * $query->filterByBandageTime('fooValue');   // WHERE bandage_time = 'fooValue'
     * $query->filterByBandageTime('%fooValue%', Criteria::LIKE); // WHERE bandage_time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bandageTime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByBandageTime($bandageTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bandageTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_BANDAGE_TIME, $bandageTime, $comparison);
    }

    /**
     * Filter the query on the repos_time column
     *
     * Example usage:
     * <code>
     * $query->filterByReposTime('fooValue');   // WHERE repos_time = 'fooValue'
     * $query->filterByReposTime('%fooValue%', Criteria::LIKE); // WHERE repos_time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reposTime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByReposTime($reposTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reposTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_REPOS_TIME, $reposTime, $comparison);
    }

    /**
     * Filter the query on the encoding column
     *
     * Example usage:
     * <code>
     * $query->filterByEncoding('fooValue');   // WHERE encoding = 'fooValue'
     * $query->filterByEncoding('%fooValue%', Criteria::LIKE); // WHERE encoding LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encoding The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByEncoding($encoding = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encoding)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_ENCODING, $encoding, $comparison);
    }

    /**
     * Filter the query on the doc_date column
     *
     * Example usage:
     * <code>
     * $query->filterByDocDate('fooValue');   // WHERE doc_date = 'fooValue'
     * $query->filterByDocDate('%fooValue%', Criteria::LIKE); // WHERE doc_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docDate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByDocDate($docDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docDate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_DOC_DATE, $docDate, $comparison);
    }

    /**
     * Filter the query on the doc_time column
     *
     * Example usage:
     * <code>
     * $query->filterByDocTime('fooValue');   // WHERE doc_time = 'fooValue'
     * $query->filterByDocTime('%fooValue%', Criteria::LIKE); // WHERE doc_time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docTime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByDocTime($docTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_DOC_TIME, $docTime, $comparison);
    }

    /**
     * Filter the query on the duty_type column
     *
     * Example usage:
     * <code>
     * $query->filterByDutyType('fooValue');   // WHERE duty_type = 'fooValue'
     * $query->filterByDutyType('%fooValue%', Criteria::LIKE); // WHERE duty_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dutyType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByDutyType($dutyType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dutyType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_DUTY_TYPE, $dutyType, $comparison);
    }

    /**
     * Filter the query on the material_codedlist column
     *
     * Example usage:
     * <code>
     * $query->filterByMaterialCodedlist('fooValue');   // WHERE material_codedlist = 'fooValue'
     * $query->filterByMaterialCodedlist('%fooValue%', Criteria::LIKE); // WHERE material_codedlist LIKE '%fooValue%'
     * </code>
     *
     * @param     string $materialCodedlist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByMaterialCodedlist($materialCodedlist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($materialCodedlist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_MATERIAL_CODEDLIST, $materialCodedlist, $comparison);
    }

    /**
     * Filter the query on the container_codedlist column
     *
     * Example usage:
     * <code>
     * $query->filterByContainerCodedlist('fooValue');   // WHERE container_codedlist = 'fooValue'
     * $query->filterByContainerCodedlist('%fooValue%', Criteria::LIKE); // WHERE container_codedlist LIKE '%fooValue%'
     * </code>
     *
     * @param     string $containerCodedlist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByContainerCodedlist($containerCodedlist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($containerCodedlist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_CONTAINER_CODEDLIST, $containerCodedlist, $comparison);
    }

    /**
     * Filter the query on the icd_code column
     *
     * Example usage:
     * <code>
     * $query->filterByIcdCode('fooValue');   // WHERE icd_code = 'fooValue'
     * $query->filterByIcdCode('%fooValue%', Criteria::LIKE); // WHERE icd_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icdCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByIcdCode($icdCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icdCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_ICD_CODE, $icdCode, $comparison);
    }

    /**
     * Filter the query on the ops_code column
     *
     * Example usage:
     * <code>
     * $query->filterByOpsCode('fooValue');   // WHERE ops_code = 'fooValue'
     * $query->filterByOpsCode('%fooValue%', Criteria::LIKE); // WHERE ops_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opsCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByOpsCode($opsCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opsCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_OPS_CODE, $opsCode, $comparison);
    }

    /**
     * Filter the query on the ops_intern_code column
     *
     * Example usage:
     * <code>
     * $query->filterByOpsInternCode('fooValue');   // WHERE ops_intern_code = 'fooValue'
     * $query->filterByOpsInternCode('%fooValue%', Criteria::LIKE); // WHERE ops_intern_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opsInternCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByOpsInternCode($opsInternCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opsInternCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_OPS_INTERN_CODE, $opsInternCode, $comparison);
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
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterOpTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterOpTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterOp $careEncounterOp Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterOpQuery The current query, for fluid interface
     */
    public function prune($careEncounterOp = null)
    {
        if ($careEncounterOp) {
            $this->addUsingAlias(CareEncounterOpTableMap::COL_NR, $careEncounterOp->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_op table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterOpTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterOpTableMap::clearInstancePool();
            CareEncounterOpTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterOpTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterOpTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterOpTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterOpTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterOpQuery
