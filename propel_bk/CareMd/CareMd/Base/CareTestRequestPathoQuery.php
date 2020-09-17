<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestRequestPatho as ChildCareTestRequestPatho;
use CareMd\CareMd\CareTestRequestPathoQuery as ChildCareTestRequestPathoQuery;
use CareMd\CareMd\Map\CareTestRequestPathoTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_request_patho' table.
 *
 *
 *
 * @method     ChildCareTestRequestPathoQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTestRequestPathoQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTestRequestPathoQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareTestRequestPathoQuery orderByQuickCut($order = Criteria::ASC) Order by the quick_cut column
 * @method     ChildCareTestRequestPathoQuery orderByQcPhone($order = Criteria::ASC) Order by the qc_phone column
 * @method     ChildCareTestRequestPathoQuery orderByQuickDiagnosis($order = Criteria::ASC) Order by the quick_diagnosis column
 * @method     ChildCareTestRequestPathoQuery orderByQdPhone($order = Criteria::ASC) Order by the qd_phone column
 * @method     ChildCareTestRequestPathoQuery orderByMaterialType($order = Criteria::ASC) Order by the material_type column
 * @method     ChildCareTestRequestPathoQuery orderByMaterialDesc($order = Criteria::ASC) Order by the material_desc column
 * @method     ChildCareTestRequestPathoQuery orderByLocalization($order = Criteria::ASC) Order by the localization column
 * @method     ChildCareTestRequestPathoQuery orderByClinicalNote($order = Criteria::ASC) Order by the clinical_note column
 * @method     ChildCareTestRequestPathoQuery orderByExtraNote($order = Criteria::ASC) Order by the extra_note column
 * @method     ChildCareTestRequestPathoQuery orderByRepeatNote($order = Criteria::ASC) Order by the repeat_note column
 * @method     ChildCareTestRequestPathoQuery orderByGynLastPeriod($order = Criteria::ASC) Order by the gyn_last_period column
 * @method     ChildCareTestRequestPathoQuery orderByGynPeriodType($order = Criteria::ASC) Order by the gyn_period_type column
 * @method     ChildCareTestRequestPathoQuery orderByGynGravida($order = Criteria::ASC) Order by the gyn_gravida column
 * @method     ChildCareTestRequestPathoQuery orderByGynMenopauseSince($order = Criteria::ASC) Order by the gyn_menopause_since column
 * @method     ChildCareTestRequestPathoQuery orderByGynHysterectomy($order = Criteria::ASC) Order by the gyn_hysterectomy column
 * @method     ChildCareTestRequestPathoQuery orderByGynContraceptive($order = Criteria::ASC) Order by the gyn_contraceptive column
 * @method     ChildCareTestRequestPathoQuery orderByGynIud($order = Criteria::ASC) Order by the gyn_iud column
 * @method     ChildCareTestRequestPathoQuery orderByGynHormoneTherapy($order = Criteria::ASC) Order by the gyn_hormone_therapy column
 * @method     ChildCareTestRequestPathoQuery orderByDoctorSign($order = Criteria::ASC) Order by the doctor_sign column
 * @method     ChildCareTestRequestPathoQuery orderByOpDate($order = Criteria::ASC) Order by the op_date column
 * @method     ChildCareTestRequestPathoQuery orderBySendDate($order = Criteria::ASC) Order by the send_date column
 * @method     ChildCareTestRequestPathoQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestRequestPathoQuery orderByEntryDate($order = Criteria::ASC) Order by the entry_date column
 * @method     ChildCareTestRequestPathoQuery orderByJournalNr($order = Criteria::ASC) Order by the journal_nr column
 * @method     ChildCareTestRequestPathoQuery orderByBlocksNr($order = Criteria::ASC) Order by the blocks_nr column
 * @method     ChildCareTestRequestPathoQuery orderByDeepCuts($order = Criteria::ASC) Order by the deep_cuts column
 * @method     ChildCareTestRequestPathoQuery orderBySpecialDye($order = Criteria::ASC) Order by the special_dye column
 * @method     ChildCareTestRequestPathoQuery orderByImmuneHistochem($order = Criteria::ASC) Order by the immune_histochem column
 * @method     ChildCareTestRequestPathoQuery orderByHormoneReceptors($order = Criteria::ASC) Order by the hormone_receptors column
 * @method     ChildCareTestRequestPathoQuery orderBySpecials($order = Criteria::ASC) Order by the specials column
 * @method     ChildCareTestRequestPathoQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestRequestPathoQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestRequestPathoQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestRequestPathoQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestRequestPathoQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCareTestRequestPathoQuery orderByProcessId($order = Criteria::ASC) Order by the process_id column
 * @method     ChildCareTestRequestPathoQuery orderByProcessTime($order = Criteria::ASC) Order by the process_time column
 *
 * @method     ChildCareTestRequestPathoQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTestRequestPathoQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTestRequestPathoQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareTestRequestPathoQuery groupByQuickCut() Group by the quick_cut column
 * @method     ChildCareTestRequestPathoQuery groupByQcPhone() Group by the qc_phone column
 * @method     ChildCareTestRequestPathoQuery groupByQuickDiagnosis() Group by the quick_diagnosis column
 * @method     ChildCareTestRequestPathoQuery groupByQdPhone() Group by the qd_phone column
 * @method     ChildCareTestRequestPathoQuery groupByMaterialType() Group by the material_type column
 * @method     ChildCareTestRequestPathoQuery groupByMaterialDesc() Group by the material_desc column
 * @method     ChildCareTestRequestPathoQuery groupByLocalization() Group by the localization column
 * @method     ChildCareTestRequestPathoQuery groupByClinicalNote() Group by the clinical_note column
 * @method     ChildCareTestRequestPathoQuery groupByExtraNote() Group by the extra_note column
 * @method     ChildCareTestRequestPathoQuery groupByRepeatNote() Group by the repeat_note column
 * @method     ChildCareTestRequestPathoQuery groupByGynLastPeriod() Group by the gyn_last_period column
 * @method     ChildCareTestRequestPathoQuery groupByGynPeriodType() Group by the gyn_period_type column
 * @method     ChildCareTestRequestPathoQuery groupByGynGravida() Group by the gyn_gravida column
 * @method     ChildCareTestRequestPathoQuery groupByGynMenopauseSince() Group by the gyn_menopause_since column
 * @method     ChildCareTestRequestPathoQuery groupByGynHysterectomy() Group by the gyn_hysterectomy column
 * @method     ChildCareTestRequestPathoQuery groupByGynContraceptive() Group by the gyn_contraceptive column
 * @method     ChildCareTestRequestPathoQuery groupByGynIud() Group by the gyn_iud column
 * @method     ChildCareTestRequestPathoQuery groupByGynHormoneTherapy() Group by the gyn_hormone_therapy column
 * @method     ChildCareTestRequestPathoQuery groupByDoctorSign() Group by the doctor_sign column
 * @method     ChildCareTestRequestPathoQuery groupByOpDate() Group by the op_date column
 * @method     ChildCareTestRequestPathoQuery groupBySendDate() Group by the send_date column
 * @method     ChildCareTestRequestPathoQuery groupByStatus() Group by the status column
 * @method     ChildCareTestRequestPathoQuery groupByEntryDate() Group by the entry_date column
 * @method     ChildCareTestRequestPathoQuery groupByJournalNr() Group by the journal_nr column
 * @method     ChildCareTestRequestPathoQuery groupByBlocksNr() Group by the blocks_nr column
 * @method     ChildCareTestRequestPathoQuery groupByDeepCuts() Group by the deep_cuts column
 * @method     ChildCareTestRequestPathoQuery groupBySpecialDye() Group by the special_dye column
 * @method     ChildCareTestRequestPathoQuery groupByImmuneHistochem() Group by the immune_histochem column
 * @method     ChildCareTestRequestPathoQuery groupByHormoneReceptors() Group by the hormone_receptors column
 * @method     ChildCareTestRequestPathoQuery groupBySpecials() Group by the specials column
 * @method     ChildCareTestRequestPathoQuery groupByHistory() Group by the history column
 * @method     ChildCareTestRequestPathoQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestRequestPathoQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestRequestPathoQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestRequestPathoQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCareTestRequestPathoQuery groupByProcessId() Group by the process_id column
 * @method     ChildCareTestRequestPathoQuery groupByProcessTime() Group by the process_time column
 *
 * @method     ChildCareTestRequestPathoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestRequestPathoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestRequestPathoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestRequestPathoQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestRequestPathoQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestRequestPathoQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestRequestPatho findOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestPatho matching the query
 * @method     ChildCareTestRequestPatho findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestRequestPatho matching the query, or a new ChildCareTestRequestPatho object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestRequestPatho findOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestPatho filtered by the batch_nr column
 * @method     ChildCareTestRequestPatho findOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestPatho filtered by the encounter_nr column
 * @method     ChildCareTestRequestPatho findOneByDeptNr(int $dept_nr) Return the first ChildCareTestRequestPatho filtered by the dept_nr column
 * @method     ChildCareTestRequestPatho findOneByQuickCut(int $quick_cut) Return the first ChildCareTestRequestPatho filtered by the quick_cut column
 * @method     ChildCareTestRequestPatho findOneByQcPhone(string $qc_phone) Return the first ChildCareTestRequestPatho filtered by the qc_phone column
 * @method     ChildCareTestRequestPatho findOneByQuickDiagnosis(int $quick_diagnosis) Return the first ChildCareTestRequestPatho filtered by the quick_diagnosis column
 * @method     ChildCareTestRequestPatho findOneByQdPhone(string $qd_phone) Return the first ChildCareTestRequestPatho filtered by the qd_phone column
 * @method     ChildCareTestRequestPatho findOneByMaterialType(string $material_type) Return the first ChildCareTestRequestPatho filtered by the material_type column
 * @method     ChildCareTestRequestPatho findOneByMaterialDesc(string $material_desc) Return the first ChildCareTestRequestPatho filtered by the material_desc column
 * @method     ChildCareTestRequestPatho findOneByLocalization(string $localization) Return the first ChildCareTestRequestPatho filtered by the localization column
 * @method     ChildCareTestRequestPatho findOneByClinicalNote(string $clinical_note) Return the first ChildCareTestRequestPatho filtered by the clinical_note column
 * @method     ChildCareTestRequestPatho findOneByExtraNote(string $extra_note) Return the first ChildCareTestRequestPatho filtered by the extra_note column
 * @method     ChildCareTestRequestPatho findOneByRepeatNote(string $repeat_note) Return the first ChildCareTestRequestPatho filtered by the repeat_note column
 * @method     ChildCareTestRequestPatho findOneByGynLastPeriod(string $gyn_last_period) Return the first ChildCareTestRequestPatho filtered by the gyn_last_period column
 * @method     ChildCareTestRequestPatho findOneByGynPeriodType(string $gyn_period_type) Return the first ChildCareTestRequestPatho filtered by the gyn_period_type column
 * @method     ChildCareTestRequestPatho findOneByGynGravida(string $gyn_gravida) Return the first ChildCareTestRequestPatho filtered by the gyn_gravida column
 * @method     ChildCareTestRequestPatho findOneByGynMenopauseSince(string $gyn_menopause_since) Return the first ChildCareTestRequestPatho filtered by the gyn_menopause_since column
 * @method     ChildCareTestRequestPatho findOneByGynHysterectomy(string $gyn_hysterectomy) Return the first ChildCareTestRequestPatho filtered by the gyn_hysterectomy column
 * @method     ChildCareTestRequestPatho findOneByGynContraceptive(string $gyn_contraceptive) Return the first ChildCareTestRequestPatho filtered by the gyn_contraceptive column
 * @method     ChildCareTestRequestPatho findOneByGynIud(string $gyn_iud) Return the first ChildCareTestRequestPatho filtered by the gyn_iud column
 * @method     ChildCareTestRequestPatho findOneByGynHormoneTherapy(string $gyn_hormone_therapy) Return the first ChildCareTestRequestPatho filtered by the gyn_hormone_therapy column
 * @method     ChildCareTestRequestPatho findOneByDoctorSign(string $doctor_sign) Return the first ChildCareTestRequestPatho filtered by the doctor_sign column
 * @method     ChildCareTestRequestPatho findOneByOpDate(string $op_date) Return the first ChildCareTestRequestPatho filtered by the op_date column
 * @method     ChildCareTestRequestPatho findOneBySendDate(string $send_date) Return the first ChildCareTestRequestPatho filtered by the send_date column
 * @method     ChildCareTestRequestPatho findOneByStatus(string $status) Return the first ChildCareTestRequestPatho filtered by the status column
 * @method     ChildCareTestRequestPatho findOneByEntryDate(string $entry_date) Return the first ChildCareTestRequestPatho filtered by the entry_date column
 * @method     ChildCareTestRequestPatho findOneByJournalNr(string $journal_nr) Return the first ChildCareTestRequestPatho filtered by the journal_nr column
 * @method     ChildCareTestRequestPatho findOneByBlocksNr(int $blocks_nr) Return the first ChildCareTestRequestPatho filtered by the blocks_nr column
 * @method     ChildCareTestRequestPatho findOneByDeepCuts(int $deep_cuts) Return the first ChildCareTestRequestPatho filtered by the deep_cuts column
 * @method     ChildCareTestRequestPatho findOneBySpecialDye(string $special_dye) Return the first ChildCareTestRequestPatho filtered by the special_dye column
 * @method     ChildCareTestRequestPatho findOneByImmuneHistochem(string $immune_histochem) Return the first ChildCareTestRequestPatho filtered by the immune_histochem column
 * @method     ChildCareTestRequestPatho findOneByHormoneReceptors(string $hormone_receptors) Return the first ChildCareTestRequestPatho filtered by the hormone_receptors column
 * @method     ChildCareTestRequestPatho findOneBySpecials(string $specials) Return the first ChildCareTestRequestPatho filtered by the specials column
 * @method     ChildCareTestRequestPatho findOneByHistory(string $history) Return the first ChildCareTestRequestPatho filtered by the history column
 * @method     ChildCareTestRequestPatho findOneByModifyId(string $modify_id) Return the first ChildCareTestRequestPatho filtered by the modify_id column
 * @method     ChildCareTestRequestPatho findOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestPatho filtered by the modify_time column
 * @method     ChildCareTestRequestPatho findOneByCreateId(string $create_id) Return the first ChildCareTestRequestPatho filtered by the create_id column
 * @method     ChildCareTestRequestPatho findOneByCreateTime(string $create_time) Return the first ChildCareTestRequestPatho filtered by the create_time column
 * @method     ChildCareTestRequestPatho findOneByProcessId(string $process_id) Return the first ChildCareTestRequestPatho filtered by the process_id column
 * @method     ChildCareTestRequestPatho findOneByProcessTime(string $process_time) Return the first ChildCareTestRequestPatho filtered by the process_time column *

 * @method     ChildCareTestRequestPatho requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestRequestPatho by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestPatho matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestPatho requireOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestPatho filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestPatho filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByDeptNr(int $dept_nr) Return the first ChildCareTestRequestPatho filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByQuickCut(int $quick_cut) Return the first ChildCareTestRequestPatho filtered by the quick_cut column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByQcPhone(string $qc_phone) Return the first ChildCareTestRequestPatho filtered by the qc_phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByQuickDiagnosis(int $quick_diagnosis) Return the first ChildCareTestRequestPatho filtered by the quick_diagnosis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByQdPhone(string $qd_phone) Return the first ChildCareTestRequestPatho filtered by the qd_phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByMaterialType(string $material_type) Return the first ChildCareTestRequestPatho filtered by the material_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByMaterialDesc(string $material_desc) Return the first ChildCareTestRequestPatho filtered by the material_desc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByLocalization(string $localization) Return the first ChildCareTestRequestPatho filtered by the localization column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByClinicalNote(string $clinical_note) Return the first ChildCareTestRequestPatho filtered by the clinical_note column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByExtraNote(string $extra_note) Return the first ChildCareTestRequestPatho filtered by the extra_note column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByRepeatNote(string $repeat_note) Return the first ChildCareTestRequestPatho filtered by the repeat_note column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByGynLastPeriod(string $gyn_last_period) Return the first ChildCareTestRequestPatho filtered by the gyn_last_period column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByGynPeriodType(string $gyn_period_type) Return the first ChildCareTestRequestPatho filtered by the gyn_period_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByGynGravida(string $gyn_gravida) Return the first ChildCareTestRequestPatho filtered by the gyn_gravida column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByGynMenopauseSince(string $gyn_menopause_since) Return the first ChildCareTestRequestPatho filtered by the gyn_menopause_since column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByGynHysterectomy(string $gyn_hysterectomy) Return the first ChildCareTestRequestPatho filtered by the gyn_hysterectomy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByGynContraceptive(string $gyn_contraceptive) Return the first ChildCareTestRequestPatho filtered by the gyn_contraceptive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByGynIud(string $gyn_iud) Return the first ChildCareTestRequestPatho filtered by the gyn_iud column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByGynHormoneTherapy(string $gyn_hormone_therapy) Return the first ChildCareTestRequestPatho filtered by the gyn_hormone_therapy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByDoctorSign(string $doctor_sign) Return the first ChildCareTestRequestPatho filtered by the doctor_sign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByOpDate(string $op_date) Return the first ChildCareTestRequestPatho filtered by the op_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneBySendDate(string $send_date) Return the first ChildCareTestRequestPatho filtered by the send_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByStatus(string $status) Return the first ChildCareTestRequestPatho filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByEntryDate(string $entry_date) Return the first ChildCareTestRequestPatho filtered by the entry_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByJournalNr(string $journal_nr) Return the first ChildCareTestRequestPatho filtered by the journal_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByBlocksNr(int $blocks_nr) Return the first ChildCareTestRequestPatho filtered by the blocks_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByDeepCuts(int $deep_cuts) Return the first ChildCareTestRequestPatho filtered by the deep_cuts column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneBySpecialDye(string $special_dye) Return the first ChildCareTestRequestPatho filtered by the special_dye column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByImmuneHistochem(string $immune_histochem) Return the first ChildCareTestRequestPatho filtered by the immune_histochem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByHormoneReceptors(string $hormone_receptors) Return the first ChildCareTestRequestPatho filtered by the hormone_receptors column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneBySpecials(string $specials) Return the first ChildCareTestRequestPatho filtered by the specials column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByHistory(string $history) Return the first ChildCareTestRequestPatho filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByModifyId(string $modify_id) Return the first ChildCareTestRequestPatho filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestPatho filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByCreateId(string $create_id) Return the first ChildCareTestRequestPatho filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByCreateTime(string $create_time) Return the first ChildCareTestRequestPatho filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByProcessId(string $process_id) Return the first ChildCareTestRequestPatho filtered by the process_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestPatho requireOneByProcessTime(string $process_time) Return the first ChildCareTestRequestPatho filtered by the process_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestPatho[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestRequestPatho objects based on current ModelCriteria
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTestRequestPatho objects filtered by the batch_nr column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareTestRequestPatho objects filtered by the encounter_nr column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareTestRequestPatho objects filtered by the dept_nr column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByQuickCut(int $quick_cut) Return ChildCareTestRequestPatho objects filtered by the quick_cut column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByQcPhone(string $qc_phone) Return ChildCareTestRequestPatho objects filtered by the qc_phone column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByQuickDiagnosis(int $quick_diagnosis) Return ChildCareTestRequestPatho objects filtered by the quick_diagnosis column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByQdPhone(string $qd_phone) Return ChildCareTestRequestPatho objects filtered by the qd_phone column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByMaterialType(string $material_type) Return ChildCareTestRequestPatho objects filtered by the material_type column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByMaterialDesc(string $material_desc) Return ChildCareTestRequestPatho objects filtered by the material_desc column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByLocalization(string $localization) Return ChildCareTestRequestPatho objects filtered by the localization column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByClinicalNote(string $clinical_note) Return ChildCareTestRequestPatho objects filtered by the clinical_note column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByExtraNote(string $extra_note) Return ChildCareTestRequestPatho objects filtered by the extra_note column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByRepeatNote(string $repeat_note) Return ChildCareTestRequestPatho objects filtered by the repeat_note column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByGynLastPeriod(string $gyn_last_period) Return ChildCareTestRequestPatho objects filtered by the gyn_last_period column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByGynPeriodType(string $gyn_period_type) Return ChildCareTestRequestPatho objects filtered by the gyn_period_type column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByGynGravida(string $gyn_gravida) Return ChildCareTestRequestPatho objects filtered by the gyn_gravida column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByGynMenopauseSince(string $gyn_menopause_since) Return ChildCareTestRequestPatho objects filtered by the gyn_menopause_since column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByGynHysterectomy(string $gyn_hysterectomy) Return ChildCareTestRequestPatho objects filtered by the gyn_hysterectomy column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByGynContraceptive(string $gyn_contraceptive) Return ChildCareTestRequestPatho objects filtered by the gyn_contraceptive column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByGynIud(string $gyn_iud) Return ChildCareTestRequestPatho objects filtered by the gyn_iud column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByGynHormoneTherapy(string $gyn_hormone_therapy) Return ChildCareTestRequestPatho objects filtered by the gyn_hormone_therapy column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByDoctorSign(string $doctor_sign) Return ChildCareTestRequestPatho objects filtered by the doctor_sign column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByOpDate(string $op_date) Return ChildCareTestRequestPatho objects filtered by the op_date column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findBySendDate(string $send_date) Return ChildCareTestRequestPatho objects filtered by the send_date column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByStatus(string $status) Return ChildCareTestRequestPatho objects filtered by the status column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByEntryDate(string $entry_date) Return ChildCareTestRequestPatho objects filtered by the entry_date column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByJournalNr(string $journal_nr) Return ChildCareTestRequestPatho objects filtered by the journal_nr column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByBlocksNr(int $blocks_nr) Return ChildCareTestRequestPatho objects filtered by the blocks_nr column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByDeepCuts(int $deep_cuts) Return ChildCareTestRequestPatho objects filtered by the deep_cuts column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findBySpecialDye(string $special_dye) Return ChildCareTestRequestPatho objects filtered by the special_dye column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByImmuneHistochem(string $immune_histochem) Return ChildCareTestRequestPatho objects filtered by the immune_histochem column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByHormoneReceptors(string $hormone_receptors) Return ChildCareTestRequestPatho objects filtered by the hormone_receptors column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findBySpecials(string $specials) Return ChildCareTestRequestPatho objects filtered by the specials column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByHistory(string $history) Return ChildCareTestRequestPatho objects filtered by the history column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestRequestPatho objects filtered by the modify_id column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestRequestPatho objects filtered by the modify_time column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestRequestPatho objects filtered by the create_id column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestRequestPatho objects filtered by the create_time column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByProcessId(string $process_id) Return ChildCareTestRequestPatho objects filtered by the process_id column
 * @method     ChildCareTestRequestPatho[]|ObjectCollection findByProcessTime(string $process_time) Return ChildCareTestRequestPatho objects filtered by the process_time column
 * @method     ChildCareTestRequestPatho[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestRequestPathoQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestRequestPathoQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestRequestPatho', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestRequestPathoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestRequestPathoQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestRequestPathoQuery) {
            return $criteria;
        }
        $query = new ChildCareTestRequestPathoQuery();
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
     * @return ChildCareTestRequestPatho|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestRequestPathoTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestRequestPathoTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTestRequestPatho A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, encounter_nr, dept_nr, quick_cut, qc_phone, quick_diagnosis, qd_phone, material_type, material_desc, localization, clinical_note, extra_note, repeat_note, gyn_last_period, gyn_period_type, gyn_gravida, gyn_menopause_since, gyn_hysterectomy, gyn_contraceptive, gyn_iud, gyn_hormone_therapy, doctor_sign, op_date, send_date, status, entry_date, journal_nr, blocks_nr, deep_cuts, special_dye, immune_histochem, hormone_receptors, specials, history, modify_id, modify_time, create_id, create_time, process_id, process_time FROM care_test_request_patho WHERE batch_nr = :p0';
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
            /** @var ChildCareTestRequestPatho $obj */
            $obj = new ChildCareTestRequestPatho();
            $obj->hydrate($row);
            CareTestRequestPathoTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTestRequestPatho|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_BATCH_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_BATCH_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_BATCH_NR, $batchNr, $comparison);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the quick_cut column
     *
     * Example usage:
     * <code>
     * $query->filterByQuickCut(1234); // WHERE quick_cut = 1234
     * $query->filterByQuickCut(array(12, 34)); // WHERE quick_cut IN (12, 34)
     * $query->filterByQuickCut(array('min' => 12)); // WHERE quick_cut > 12
     * </code>
     *
     * @param     mixed $quickCut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByQuickCut($quickCut = null, $comparison = null)
    {
        if (is_array($quickCut)) {
            $useMinMax = false;
            if (isset($quickCut['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_QUICK_CUT, $quickCut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quickCut['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_QUICK_CUT, $quickCut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_QUICK_CUT, $quickCut, $comparison);
    }

    /**
     * Filter the query on the qc_phone column
     *
     * Example usage:
     * <code>
     * $query->filterByQcPhone('fooValue');   // WHERE qc_phone = 'fooValue'
     * $query->filterByQcPhone('%fooValue%', Criteria::LIKE); // WHERE qc_phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qcPhone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByQcPhone($qcPhone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qcPhone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_QC_PHONE, $qcPhone, $comparison);
    }

    /**
     * Filter the query on the quick_diagnosis column
     *
     * Example usage:
     * <code>
     * $query->filterByQuickDiagnosis(1234); // WHERE quick_diagnosis = 1234
     * $query->filterByQuickDiagnosis(array(12, 34)); // WHERE quick_diagnosis IN (12, 34)
     * $query->filterByQuickDiagnosis(array('min' => 12)); // WHERE quick_diagnosis > 12
     * </code>
     *
     * @param     mixed $quickDiagnosis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByQuickDiagnosis($quickDiagnosis = null, $comparison = null)
    {
        if (is_array($quickDiagnosis)) {
            $useMinMax = false;
            if (isset($quickDiagnosis['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_QUICK_DIAGNOSIS, $quickDiagnosis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quickDiagnosis['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_QUICK_DIAGNOSIS, $quickDiagnosis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_QUICK_DIAGNOSIS, $quickDiagnosis, $comparison);
    }

    /**
     * Filter the query on the qd_phone column
     *
     * Example usage:
     * <code>
     * $query->filterByQdPhone('fooValue');   // WHERE qd_phone = 'fooValue'
     * $query->filterByQdPhone('%fooValue%', Criteria::LIKE); // WHERE qd_phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qdPhone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByQdPhone($qdPhone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qdPhone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_QD_PHONE, $qdPhone, $comparison);
    }

    /**
     * Filter the query on the material_type column
     *
     * Example usage:
     * <code>
     * $query->filterByMaterialType('fooValue');   // WHERE material_type = 'fooValue'
     * $query->filterByMaterialType('%fooValue%', Criteria::LIKE); // WHERE material_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $materialType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByMaterialType($materialType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($materialType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_MATERIAL_TYPE, $materialType, $comparison);
    }

    /**
     * Filter the query on the material_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByMaterialDesc('fooValue');   // WHERE material_desc = 'fooValue'
     * $query->filterByMaterialDesc('%fooValue%', Criteria::LIKE); // WHERE material_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $materialDesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByMaterialDesc($materialDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($materialDesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_MATERIAL_DESC, $materialDesc, $comparison);
    }

    /**
     * Filter the query on the localization column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalization('fooValue');   // WHERE localization = 'fooValue'
     * $query->filterByLocalization('%fooValue%', Criteria::LIKE); // WHERE localization LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localization The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByLocalization($localization = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localization)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_LOCALIZATION, $localization, $comparison);
    }

    /**
     * Filter the query on the clinical_note column
     *
     * Example usage:
     * <code>
     * $query->filterByClinicalNote('fooValue');   // WHERE clinical_note = 'fooValue'
     * $query->filterByClinicalNote('%fooValue%', Criteria::LIKE); // WHERE clinical_note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clinicalNote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByClinicalNote($clinicalNote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clinicalNote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_CLINICAL_NOTE, $clinicalNote, $comparison);
    }

    /**
     * Filter the query on the extra_note column
     *
     * Example usage:
     * <code>
     * $query->filterByExtraNote('fooValue');   // WHERE extra_note = 'fooValue'
     * $query->filterByExtraNote('%fooValue%', Criteria::LIKE); // WHERE extra_note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extraNote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByExtraNote($extraNote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extraNote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_EXTRA_NOTE, $extraNote, $comparison);
    }

    /**
     * Filter the query on the repeat_note column
     *
     * Example usage:
     * <code>
     * $query->filterByRepeatNote('fooValue');   // WHERE repeat_note = 'fooValue'
     * $query->filterByRepeatNote('%fooValue%', Criteria::LIKE); // WHERE repeat_note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repeatNote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByRepeatNote($repeatNote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repeatNote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_REPEAT_NOTE, $repeatNote, $comparison);
    }

    /**
     * Filter the query on the gyn_last_period column
     *
     * Example usage:
     * <code>
     * $query->filterByGynLastPeriod('fooValue');   // WHERE gyn_last_period = 'fooValue'
     * $query->filterByGynLastPeriod('%fooValue%', Criteria::LIKE); // WHERE gyn_last_period LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gynLastPeriod The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByGynLastPeriod($gynLastPeriod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gynLastPeriod)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_GYN_LAST_PERIOD, $gynLastPeriod, $comparison);
    }

    /**
     * Filter the query on the gyn_period_type column
     *
     * Example usage:
     * <code>
     * $query->filterByGynPeriodType('fooValue');   // WHERE gyn_period_type = 'fooValue'
     * $query->filterByGynPeriodType('%fooValue%', Criteria::LIKE); // WHERE gyn_period_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gynPeriodType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByGynPeriodType($gynPeriodType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gynPeriodType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_GYN_PERIOD_TYPE, $gynPeriodType, $comparison);
    }

    /**
     * Filter the query on the gyn_gravida column
     *
     * Example usage:
     * <code>
     * $query->filterByGynGravida('fooValue');   // WHERE gyn_gravida = 'fooValue'
     * $query->filterByGynGravida('%fooValue%', Criteria::LIKE); // WHERE gyn_gravida LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gynGravida The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByGynGravida($gynGravida = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gynGravida)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_GYN_GRAVIDA, $gynGravida, $comparison);
    }

    /**
     * Filter the query on the gyn_menopause_since column
     *
     * Example usage:
     * <code>
     * $query->filterByGynMenopauseSince('fooValue');   // WHERE gyn_menopause_since = 'fooValue'
     * $query->filterByGynMenopauseSince('%fooValue%', Criteria::LIKE); // WHERE gyn_menopause_since LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gynMenopauseSince The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByGynMenopauseSince($gynMenopauseSince = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gynMenopauseSince)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_GYN_MENOPAUSE_SINCE, $gynMenopauseSince, $comparison);
    }

    /**
     * Filter the query on the gyn_hysterectomy column
     *
     * Example usage:
     * <code>
     * $query->filterByGynHysterectomy('fooValue');   // WHERE gyn_hysterectomy = 'fooValue'
     * $query->filterByGynHysterectomy('%fooValue%', Criteria::LIKE); // WHERE gyn_hysterectomy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gynHysterectomy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByGynHysterectomy($gynHysterectomy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gynHysterectomy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_GYN_HYSTERECTOMY, $gynHysterectomy, $comparison);
    }

    /**
     * Filter the query on the gyn_contraceptive column
     *
     * Example usage:
     * <code>
     * $query->filterByGynContraceptive('fooValue');   // WHERE gyn_contraceptive = 'fooValue'
     * $query->filterByGynContraceptive('%fooValue%', Criteria::LIKE); // WHERE gyn_contraceptive LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gynContraceptive The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByGynContraceptive($gynContraceptive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gynContraceptive)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_GYN_CONTRACEPTIVE, $gynContraceptive, $comparison);
    }

    /**
     * Filter the query on the gyn_iud column
     *
     * Example usage:
     * <code>
     * $query->filterByGynIud('fooValue');   // WHERE gyn_iud = 'fooValue'
     * $query->filterByGynIud('%fooValue%', Criteria::LIKE); // WHERE gyn_iud LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gynIud The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByGynIud($gynIud = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gynIud)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_GYN_IUD, $gynIud, $comparison);
    }

    /**
     * Filter the query on the gyn_hormone_therapy column
     *
     * Example usage:
     * <code>
     * $query->filterByGynHormoneTherapy('fooValue');   // WHERE gyn_hormone_therapy = 'fooValue'
     * $query->filterByGynHormoneTherapy('%fooValue%', Criteria::LIKE); // WHERE gyn_hormone_therapy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gynHormoneTherapy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByGynHormoneTherapy($gynHormoneTherapy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gynHormoneTherapy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_GYN_HORMONE_THERAPY, $gynHormoneTherapy, $comparison);
    }

    /**
     * Filter the query on the doctor_sign column
     *
     * Example usage:
     * <code>
     * $query->filterByDoctorSign('fooValue');   // WHERE doctor_sign = 'fooValue'
     * $query->filterByDoctorSign('%fooValue%', Criteria::LIKE); // WHERE doctor_sign LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doctorSign The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByDoctorSign($doctorSign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doctorSign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_DOCTOR_SIGN, $doctorSign, $comparison);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByOpDate($opDate = null, $comparison = null)
    {
        if (is_array($opDate)) {
            $useMinMax = false;
            if (isset($opDate['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_OP_DATE, $opDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDate['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_OP_DATE, $opDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_OP_DATE, $opDate, $comparison);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterBySendDate($sendDate = null, $comparison = null)
    {
        if (is_array($sendDate)) {
            $useMinMax = false;
            if (isset($sendDate['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_SEND_DATE, $sendDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendDate['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_SEND_DATE, $sendDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_SEND_DATE, $sendDate, $comparison);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the entry_date column
     *
     * Example usage:
     * <code>
     * $query->filterByEntryDate('2011-03-14'); // WHERE entry_date = '2011-03-14'
     * $query->filterByEntryDate('now'); // WHERE entry_date = '2011-03-14'
     * $query->filterByEntryDate(array('max' => 'yesterday')); // WHERE entry_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $entryDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByEntryDate($entryDate = null, $comparison = null)
    {
        if (is_array($entryDate)) {
            $useMinMax = false;
            if (isset($entryDate['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_ENTRY_DATE, $entryDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entryDate['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_ENTRY_DATE, $entryDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_ENTRY_DATE, $entryDate, $comparison);
    }

    /**
     * Filter the query on the journal_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByJournalNr('fooValue');   // WHERE journal_nr = 'fooValue'
     * $query->filterByJournalNr('%fooValue%', Criteria::LIKE); // WHERE journal_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $journalNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByJournalNr($journalNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($journalNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_JOURNAL_NR, $journalNr, $comparison);
    }

    /**
     * Filter the query on the blocks_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByBlocksNr(1234); // WHERE blocks_nr = 1234
     * $query->filterByBlocksNr(array(12, 34)); // WHERE blocks_nr IN (12, 34)
     * $query->filterByBlocksNr(array('min' => 12)); // WHERE blocks_nr > 12
     * </code>
     *
     * @param     mixed $blocksNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByBlocksNr($blocksNr = null, $comparison = null)
    {
        if (is_array($blocksNr)) {
            $useMinMax = false;
            if (isset($blocksNr['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_BLOCKS_NR, $blocksNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($blocksNr['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_BLOCKS_NR, $blocksNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_BLOCKS_NR, $blocksNr, $comparison);
    }

    /**
     * Filter the query on the deep_cuts column
     *
     * Example usage:
     * <code>
     * $query->filterByDeepCuts(1234); // WHERE deep_cuts = 1234
     * $query->filterByDeepCuts(array(12, 34)); // WHERE deep_cuts IN (12, 34)
     * $query->filterByDeepCuts(array('min' => 12)); // WHERE deep_cuts > 12
     * </code>
     *
     * @param     mixed $deepCuts The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByDeepCuts($deepCuts = null, $comparison = null)
    {
        if (is_array($deepCuts)) {
            $useMinMax = false;
            if (isset($deepCuts['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_DEEP_CUTS, $deepCuts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deepCuts['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_DEEP_CUTS, $deepCuts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_DEEP_CUTS, $deepCuts, $comparison);
    }

    /**
     * Filter the query on the special_dye column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecialDye('fooValue');   // WHERE special_dye = 'fooValue'
     * $query->filterBySpecialDye('%fooValue%', Criteria::LIKE); // WHERE special_dye LIKE '%fooValue%'
     * </code>
     *
     * @param     string $specialDye The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterBySpecialDye($specialDye = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($specialDye)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_SPECIAL_DYE, $specialDye, $comparison);
    }

    /**
     * Filter the query on the immune_histochem column
     *
     * Example usage:
     * <code>
     * $query->filterByImmuneHistochem('fooValue');   // WHERE immune_histochem = 'fooValue'
     * $query->filterByImmuneHistochem('%fooValue%', Criteria::LIKE); // WHERE immune_histochem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $immuneHistochem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByImmuneHistochem($immuneHistochem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($immuneHistochem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_IMMUNE_HISTOCHEM, $immuneHistochem, $comparison);
    }

    /**
     * Filter the query on the hormone_receptors column
     *
     * Example usage:
     * <code>
     * $query->filterByHormoneReceptors('fooValue');   // WHERE hormone_receptors = 'fooValue'
     * $query->filterByHormoneReceptors('%fooValue%', Criteria::LIKE); // WHERE hormone_receptors LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hormoneReceptors The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByHormoneReceptors($hormoneReceptors = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hormoneReceptors)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_HORMONE_RECEPTORS, $hormoneReceptors, $comparison);
    }

    /**
     * Filter the query on the specials column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecials('fooValue');   // WHERE specials = 'fooValue'
     * $query->filterBySpecials('%fooValue%', Criteria::LIKE); // WHERE specials LIKE '%fooValue%'
     * </code>
     *
     * @param     string $specials The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterBySpecials($specials = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($specials)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_SPECIALS, $specials, $comparison);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_CREATE_TIME, $createTime, $comparison);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByProcessId($processId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($processId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_PROCESS_ID, $processId, $comparison);
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
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function filterByProcessTime($processTime = null, $comparison = null)
    {
        if (is_array($processTime)) {
            $useMinMax = false;
            if (isset($processTime['min'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_PROCESS_TIME, $processTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($processTime['max'])) {
                $this->addUsingAlias(CareTestRequestPathoTableMap::COL_PROCESS_TIME, $processTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestPathoTableMap::COL_PROCESS_TIME, $processTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestRequestPatho $careTestRequestPatho Object to remove from the list of results
     *
     * @return $this|ChildCareTestRequestPathoQuery The current query, for fluid interface
     */
    public function prune($careTestRequestPatho = null)
    {
        if ($careTestRequestPatho) {
            $this->addUsingAlias(CareTestRequestPathoTableMap::COL_BATCH_NR, $careTestRequestPatho->getBatchNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_request_patho table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestPathoTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestRequestPathoTableMap::clearInstancePool();
            CareTestRequestPathoTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestPathoTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestRequestPathoTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestRequestPathoTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestRequestPathoTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestRequestPathoQuery
