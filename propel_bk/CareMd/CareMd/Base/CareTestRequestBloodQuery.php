<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTestRequestBlood as ChildCareTestRequestBlood;
use CareMd\CareMd\CareTestRequestBloodQuery as ChildCareTestRequestBloodQuery;
use CareMd\CareMd\Map\CareTestRequestBloodTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_test_request_blood' table.
 *
 *
 *
 * @method     ChildCareTestRequestBloodQuery orderByBatchNr($order = Criteria::ASC) Order by the batch_nr column
 * @method     ChildCareTestRequestBloodQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTestRequestBloodQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareTestRequestBloodQuery orderByBloodGroup($order = Criteria::ASC) Order by the blood_group column
 * @method     ChildCareTestRequestBloodQuery orderByRhFactor($order = Criteria::ASC) Order by the rh_factor column
 * @method     ChildCareTestRequestBloodQuery orderByKell($order = Criteria::ASC) Order by the kell column
 * @method     ChildCareTestRequestBloodQuery orderByDateProtocNr($order = Criteria::ASC) Order by the date_protoc_nr column
 * @method     ChildCareTestRequestBloodQuery orderByPureBlood($order = Criteria::ASC) Order by the pure_blood column
 * @method     ChildCareTestRequestBloodQuery orderByRedBlood($order = Criteria::ASC) Order by the red_blood column
 * @method     ChildCareTestRequestBloodQuery orderByLeukolessBlood($order = Criteria::ASC) Order by the leukoless_blood column
 * @method     ChildCareTestRequestBloodQuery orderByWashedBlood($order = Criteria::ASC) Order by the washed_blood column
 * @method     ChildCareTestRequestBloodQuery orderByPrpBlood($order = Criteria::ASC) Order by the prp_blood column
 * @method     ChildCareTestRequestBloodQuery orderByThromboCon($order = Criteria::ASC) Order by the thrombo_con column
 * @method     ChildCareTestRequestBloodQuery orderByFfpPlasma($order = Criteria::ASC) Order by the ffp_plasma column
 * @method     ChildCareTestRequestBloodQuery orderByTransfusionDev($order = Criteria::ASC) Order by the transfusion_dev column
 * @method     ChildCareTestRequestBloodQuery orderByMatchSample($order = Criteria::ASC) Order by the match_sample column
 * @method     ChildCareTestRequestBloodQuery orderByTransfusionDate($order = Criteria::ASC) Order by the transfusion_date column
 * @method     ChildCareTestRequestBloodQuery orderByDiagnosis($order = Criteria::ASC) Order by the diagnosis column
 * @method     ChildCareTestRequestBloodQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareTestRequestBloodQuery orderBySendDate($order = Criteria::ASC) Order by the send_date column
 * @method     ChildCareTestRequestBloodQuery orderByDoctor($order = Criteria::ASC) Order by the doctor column
 * @method     ChildCareTestRequestBloodQuery orderByPhoneNr($order = Criteria::ASC) Order by the phone_nr column
 * @method     ChildCareTestRequestBloodQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTestRequestBloodQuery orderByBloodPb($order = Criteria::ASC) Order by the blood_pb column
 * @method     ChildCareTestRequestBloodQuery orderByBloodRb($order = Criteria::ASC) Order by the blood_rb column
 * @method     ChildCareTestRequestBloodQuery orderByBloodLlrb($order = Criteria::ASC) Order by the blood_llrb column
 * @method     ChildCareTestRequestBloodQuery orderByBloodWrb($order = Criteria::ASC) Order by the blood_wrb column
 * @method     ChildCareTestRequestBloodQuery orderByBloodPrp($order = Criteria::ASC) Order by the blood_prp column
 * @method     ChildCareTestRequestBloodQuery orderByBloodTc($order = Criteria::ASC) Order by the blood_tc column
 * @method     ChildCareTestRequestBloodQuery orderByBloodFfp($order = Criteria::ASC) Order by the blood_ffp column
 * @method     ChildCareTestRequestBloodQuery orderByBGroupCount($order = Criteria::ASC) Order by the b_group_count column
 * @method     ChildCareTestRequestBloodQuery orderByBGroupPrice($order = Criteria::ASC) Order by the b_group_price column
 * @method     ChildCareTestRequestBloodQuery orderByASubgroupCount($order = Criteria::ASC) Order by the a_subgroup_count column
 * @method     ChildCareTestRequestBloodQuery orderByASubgroupPrice($order = Criteria::ASC) Order by the a_subgroup_price column
 * @method     ChildCareTestRequestBloodQuery orderByExtraFactorsCount($order = Criteria::ASC) Order by the extra_factors_count column
 * @method     ChildCareTestRequestBloodQuery orderByExtraFactorsPrice($order = Criteria::ASC) Order by the extra_factors_price column
 * @method     ChildCareTestRequestBloodQuery orderByCoombsCount($order = Criteria::ASC) Order by the coombs_count column
 * @method     ChildCareTestRequestBloodQuery orderByCoombsPrice($order = Criteria::ASC) Order by the coombs_price column
 * @method     ChildCareTestRequestBloodQuery orderByAbTestCount($order = Criteria::ASC) Order by the ab_test_count column
 * @method     ChildCareTestRequestBloodQuery orderByAbTestPrice($order = Criteria::ASC) Order by the ab_test_price column
 * @method     ChildCareTestRequestBloodQuery orderByCrosstestCount($order = Criteria::ASC) Order by the crosstest_count column
 * @method     ChildCareTestRequestBloodQuery orderByCrosstestPrice($order = Criteria::ASC) Order by the crosstest_price column
 * @method     ChildCareTestRequestBloodQuery orderByAbDiffCount($order = Criteria::ASC) Order by the ab_diff_count column
 * @method     ChildCareTestRequestBloodQuery orderByAbDiffPrice($order = Criteria::ASC) Order by the ab_diff_price column
 * @method     ChildCareTestRequestBloodQuery orderByXTest1Code($order = Criteria::ASC) Order by the x_test_1_code column
 * @method     ChildCareTestRequestBloodQuery orderByXTest1Name($order = Criteria::ASC) Order by the x_test_1_name column
 * @method     ChildCareTestRequestBloodQuery orderByXTest1Count($order = Criteria::ASC) Order by the x_test_1_count column
 * @method     ChildCareTestRequestBloodQuery orderByXTest1Price($order = Criteria::ASC) Order by the x_test_1_price column
 * @method     ChildCareTestRequestBloodQuery orderByXTest2Code($order = Criteria::ASC) Order by the x_test_2_code column
 * @method     ChildCareTestRequestBloodQuery orderByXTest2Name($order = Criteria::ASC) Order by the x_test_2_name column
 * @method     ChildCareTestRequestBloodQuery orderByXTest2Count($order = Criteria::ASC) Order by the x_test_2_count column
 * @method     ChildCareTestRequestBloodQuery orderByXTest2Price($order = Criteria::ASC) Order by the x_test_2_price column
 * @method     ChildCareTestRequestBloodQuery orderByXTest3Code($order = Criteria::ASC) Order by the x_test_3_code column
 * @method     ChildCareTestRequestBloodQuery orderByXTest3Name($order = Criteria::ASC) Order by the x_test_3_name column
 * @method     ChildCareTestRequestBloodQuery orderByXTest3Count($order = Criteria::ASC) Order by the x_test_3_count column
 * @method     ChildCareTestRequestBloodQuery orderByXTest3Price($order = Criteria::ASC) Order by the x_test_3_price column
 * @method     ChildCareTestRequestBloodQuery orderByLabStamp($order = Criteria::ASC) Order by the lab_stamp column
 * @method     ChildCareTestRequestBloodQuery orderByReleaseVia($order = Criteria::ASC) Order by the release_via column
 * @method     ChildCareTestRequestBloodQuery orderByReceiptAck($order = Criteria::ASC) Order by the receipt_ack column
 * @method     ChildCareTestRequestBloodQuery orderByMainlogNr($order = Criteria::ASC) Order by the mainlog_nr column
 * @method     ChildCareTestRequestBloodQuery orderByLabNr($order = Criteria::ASC) Order by the lab_nr column
 * @method     ChildCareTestRequestBloodQuery orderByMainlogDate($order = Criteria::ASC) Order by the mainlog_date column
 * @method     ChildCareTestRequestBloodQuery orderByLabDate($order = Criteria::ASC) Order by the lab_date column
 * @method     ChildCareTestRequestBloodQuery orderByMainlogSign($order = Criteria::ASC) Order by the mainlog_sign column
 * @method     ChildCareTestRequestBloodQuery orderByLabSign($order = Criteria::ASC) Order by the lab_sign column
 * @method     ChildCareTestRequestBloodQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTestRequestBloodQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTestRequestBloodQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTestRequestBloodQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTestRequestBloodQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTestRequestBloodQuery groupByBatchNr() Group by the batch_nr column
 * @method     ChildCareTestRequestBloodQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTestRequestBloodQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareTestRequestBloodQuery groupByBloodGroup() Group by the blood_group column
 * @method     ChildCareTestRequestBloodQuery groupByRhFactor() Group by the rh_factor column
 * @method     ChildCareTestRequestBloodQuery groupByKell() Group by the kell column
 * @method     ChildCareTestRequestBloodQuery groupByDateProtocNr() Group by the date_protoc_nr column
 * @method     ChildCareTestRequestBloodQuery groupByPureBlood() Group by the pure_blood column
 * @method     ChildCareTestRequestBloodQuery groupByRedBlood() Group by the red_blood column
 * @method     ChildCareTestRequestBloodQuery groupByLeukolessBlood() Group by the leukoless_blood column
 * @method     ChildCareTestRequestBloodQuery groupByWashedBlood() Group by the washed_blood column
 * @method     ChildCareTestRequestBloodQuery groupByPrpBlood() Group by the prp_blood column
 * @method     ChildCareTestRequestBloodQuery groupByThromboCon() Group by the thrombo_con column
 * @method     ChildCareTestRequestBloodQuery groupByFfpPlasma() Group by the ffp_plasma column
 * @method     ChildCareTestRequestBloodQuery groupByTransfusionDev() Group by the transfusion_dev column
 * @method     ChildCareTestRequestBloodQuery groupByMatchSample() Group by the match_sample column
 * @method     ChildCareTestRequestBloodQuery groupByTransfusionDate() Group by the transfusion_date column
 * @method     ChildCareTestRequestBloodQuery groupByDiagnosis() Group by the diagnosis column
 * @method     ChildCareTestRequestBloodQuery groupByNotes() Group by the notes column
 * @method     ChildCareTestRequestBloodQuery groupBySendDate() Group by the send_date column
 * @method     ChildCareTestRequestBloodQuery groupByDoctor() Group by the doctor column
 * @method     ChildCareTestRequestBloodQuery groupByPhoneNr() Group by the phone_nr column
 * @method     ChildCareTestRequestBloodQuery groupByStatus() Group by the status column
 * @method     ChildCareTestRequestBloodQuery groupByBloodPb() Group by the blood_pb column
 * @method     ChildCareTestRequestBloodQuery groupByBloodRb() Group by the blood_rb column
 * @method     ChildCareTestRequestBloodQuery groupByBloodLlrb() Group by the blood_llrb column
 * @method     ChildCareTestRequestBloodQuery groupByBloodWrb() Group by the blood_wrb column
 * @method     ChildCareTestRequestBloodQuery groupByBloodPrp() Group by the blood_prp column
 * @method     ChildCareTestRequestBloodQuery groupByBloodTc() Group by the blood_tc column
 * @method     ChildCareTestRequestBloodQuery groupByBloodFfp() Group by the blood_ffp column
 * @method     ChildCareTestRequestBloodQuery groupByBGroupCount() Group by the b_group_count column
 * @method     ChildCareTestRequestBloodQuery groupByBGroupPrice() Group by the b_group_price column
 * @method     ChildCareTestRequestBloodQuery groupByASubgroupCount() Group by the a_subgroup_count column
 * @method     ChildCareTestRequestBloodQuery groupByASubgroupPrice() Group by the a_subgroup_price column
 * @method     ChildCareTestRequestBloodQuery groupByExtraFactorsCount() Group by the extra_factors_count column
 * @method     ChildCareTestRequestBloodQuery groupByExtraFactorsPrice() Group by the extra_factors_price column
 * @method     ChildCareTestRequestBloodQuery groupByCoombsCount() Group by the coombs_count column
 * @method     ChildCareTestRequestBloodQuery groupByCoombsPrice() Group by the coombs_price column
 * @method     ChildCareTestRequestBloodQuery groupByAbTestCount() Group by the ab_test_count column
 * @method     ChildCareTestRequestBloodQuery groupByAbTestPrice() Group by the ab_test_price column
 * @method     ChildCareTestRequestBloodQuery groupByCrosstestCount() Group by the crosstest_count column
 * @method     ChildCareTestRequestBloodQuery groupByCrosstestPrice() Group by the crosstest_price column
 * @method     ChildCareTestRequestBloodQuery groupByAbDiffCount() Group by the ab_diff_count column
 * @method     ChildCareTestRequestBloodQuery groupByAbDiffPrice() Group by the ab_diff_price column
 * @method     ChildCareTestRequestBloodQuery groupByXTest1Code() Group by the x_test_1_code column
 * @method     ChildCareTestRequestBloodQuery groupByXTest1Name() Group by the x_test_1_name column
 * @method     ChildCareTestRequestBloodQuery groupByXTest1Count() Group by the x_test_1_count column
 * @method     ChildCareTestRequestBloodQuery groupByXTest1Price() Group by the x_test_1_price column
 * @method     ChildCareTestRequestBloodQuery groupByXTest2Code() Group by the x_test_2_code column
 * @method     ChildCareTestRequestBloodQuery groupByXTest2Name() Group by the x_test_2_name column
 * @method     ChildCareTestRequestBloodQuery groupByXTest2Count() Group by the x_test_2_count column
 * @method     ChildCareTestRequestBloodQuery groupByXTest2Price() Group by the x_test_2_price column
 * @method     ChildCareTestRequestBloodQuery groupByXTest3Code() Group by the x_test_3_code column
 * @method     ChildCareTestRequestBloodQuery groupByXTest3Name() Group by the x_test_3_name column
 * @method     ChildCareTestRequestBloodQuery groupByXTest3Count() Group by the x_test_3_count column
 * @method     ChildCareTestRequestBloodQuery groupByXTest3Price() Group by the x_test_3_price column
 * @method     ChildCareTestRequestBloodQuery groupByLabStamp() Group by the lab_stamp column
 * @method     ChildCareTestRequestBloodQuery groupByReleaseVia() Group by the release_via column
 * @method     ChildCareTestRequestBloodQuery groupByReceiptAck() Group by the receipt_ack column
 * @method     ChildCareTestRequestBloodQuery groupByMainlogNr() Group by the mainlog_nr column
 * @method     ChildCareTestRequestBloodQuery groupByLabNr() Group by the lab_nr column
 * @method     ChildCareTestRequestBloodQuery groupByMainlogDate() Group by the mainlog_date column
 * @method     ChildCareTestRequestBloodQuery groupByLabDate() Group by the lab_date column
 * @method     ChildCareTestRequestBloodQuery groupByMainlogSign() Group by the mainlog_sign column
 * @method     ChildCareTestRequestBloodQuery groupByLabSign() Group by the lab_sign column
 * @method     ChildCareTestRequestBloodQuery groupByHistory() Group by the history column
 * @method     ChildCareTestRequestBloodQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTestRequestBloodQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTestRequestBloodQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTestRequestBloodQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTestRequestBloodQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTestRequestBloodQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTestRequestBloodQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTestRequestBloodQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTestRequestBloodQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTestRequestBloodQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTestRequestBlood findOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestBlood matching the query
 * @method     ChildCareTestRequestBlood findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTestRequestBlood matching the query, or a new ChildCareTestRequestBlood object populated from the query conditions when no match is found
 *
 * @method     ChildCareTestRequestBlood findOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestBlood filtered by the batch_nr column
 * @method     ChildCareTestRequestBlood findOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestBlood filtered by the encounter_nr column
 * @method     ChildCareTestRequestBlood findOneByDeptNr(int $dept_nr) Return the first ChildCareTestRequestBlood filtered by the dept_nr column
 * @method     ChildCareTestRequestBlood findOneByBloodGroup(string $blood_group) Return the first ChildCareTestRequestBlood filtered by the blood_group column
 * @method     ChildCareTestRequestBlood findOneByRhFactor(string $rh_factor) Return the first ChildCareTestRequestBlood filtered by the rh_factor column
 * @method     ChildCareTestRequestBlood findOneByKell(string $kell) Return the first ChildCareTestRequestBlood filtered by the kell column
 * @method     ChildCareTestRequestBlood findOneByDateProtocNr(string $date_protoc_nr) Return the first ChildCareTestRequestBlood filtered by the date_protoc_nr column
 * @method     ChildCareTestRequestBlood findOneByPureBlood(string $pure_blood) Return the first ChildCareTestRequestBlood filtered by the pure_blood column
 * @method     ChildCareTestRequestBlood findOneByRedBlood(string $red_blood) Return the first ChildCareTestRequestBlood filtered by the red_blood column
 * @method     ChildCareTestRequestBlood findOneByLeukolessBlood(string $leukoless_blood) Return the first ChildCareTestRequestBlood filtered by the leukoless_blood column
 * @method     ChildCareTestRequestBlood findOneByWashedBlood(string $washed_blood) Return the first ChildCareTestRequestBlood filtered by the washed_blood column
 * @method     ChildCareTestRequestBlood findOneByPrpBlood(string $prp_blood) Return the first ChildCareTestRequestBlood filtered by the prp_blood column
 * @method     ChildCareTestRequestBlood findOneByThromboCon(string $thrombo_con) Return the first ChildCareTestRequestBlood filtered by the thrombo_con column
 * @method     ChildCareTestRequestBlood findOneByFfpPlasma(string $ffp_plasma) Return the first ChildCareTestRequestBlood filtered by the ffp_plasma column
 * @method     ChildCareTestRequestBlood findOneByTransfusionDev(string $transfusion_dev) Return the first ChildCareTestRequestBlood filtered by the transfusion_dev column
 * @method     ChildCareTestRequestBlood findOneByMatchSample(int $match_sample) Return the first ChildCareTestRequestBlood filtered by the match_sample column
 * @method     ChildCareTestRequestBlood findOneByTransfusionDate(string $transfusion_date) Return the first ChildCareTestRequestBlood filtered by the transfusion_date column
 * @method     ChildCareTestRequestBlood findOneByDiagnosis(string $diagnosis) Return the first ChildCareTestRequestBlood filtered by the diagnosis column
 * @method     ChildCareTestRequestBlood findOneByNotes(string $notes) Return the first ChildCareTestRequestBlood filtered by the notes column
 * @method     ChildCareTestRequestBlood findOneBySendDate(string $send_date) Return the first ChildCareTestRequestBlood filtered by the send_date column
 * @method     ChildCareTestRequestBlood findOneByDoctor(string $doctor) Return the first ChildCareTestRequestBlood filtered by the doctor column
 * @method     ChildCareTestRequestBlood findOneByPhoneNr(string $phone_nr) Return the first ChildCareTestRequestBlood filtered by the phone_nr column
 * @method     ChildCareTestRequestBlood findOneByStatus(string $status) Return the first ChildCareTestRequestBlood filtered by the status column
 * @method     ChildCareTestRequestBlood findOneByBloodPb(string $blood_pb) Return the first ChildCareTestRequestBlood filtered by the blood_pb column
 * @method     ChildCareTestRequestBlood findOneByBloodRb(string $blood_rb) Return the first ChildCareTestRequestBlood filtered by the blood_rb column
 * @method     ChildCareTestRequestBlood findOneByBloodLlrb(string $blood_llrb) Return the first ChildCareTestRequestBlood filtered by the blood_llrb column
 * @method     ChildCareTestRequestBlood findOneByBloodWrb(string $blood_wrb) Return the first ChildCareTestRequestBlood filtered by the blood_wrb column
 * @method     ChildCareTestRequestBlood findOneByBloodPrp(string $blood_prp) Return the first ChildCareTestRequestBlood filtered by the blood_prp column
 * @method     ChildCareTestRequestBlood findOneByBloodTc(string $blood_tc) Return the first ChildCareTestRequestBlood filtered by the blood_tc column
 * @method     ChildCareTestRequestBlood findOneByBloodFfp(string $blood_ffp) Return the first ChildCareTestRequestBlood filtered by the blood_ffp column
 * @method     ChildCareTestRequestBlood findOneByBGroupCount(int $b_group_count) Return the first ChildCareTestRequestBlood filtered by the b_group_count column
 * @method     ChildCareTestRequestBlood findOneByBGroupPrice(double $b_group_price) Return the first ChildCareTestRequestBlood filtered by the b_group_price column
 * @method     ChildCareTestRequestBlood findOneByASubgroupCount(int $a_subgroup_count) Return the first ChildCareTestRequestBlood filtered by the a_subgroup_count column
 * @method     ChildCareTestRequestBlood findOneByASubgroupPrice(double $a_subgroup_price) Return the first ChildCareTestRequestBlood filtered by the a_subgroup_price column
 * @method     ChildCareTestRequestBlood findOneByExtraFactorsCount(int $extra_factors_count) Return the first ChildCareTestRequestBlood filtered by the extra_factors_count column
 * @method     ChildCareTestRequestBlood findOneByExtraFactorsPrice(double $extra_factors_price) Return the first ChildCareTestRequestBlood filtered by the extra_factors_price column
 * @method     ChildCareTestRequestBlood findOneByCoombsCount(int $coombs_count) Return the first ChildCareTestRequestBlood filtered by the coombs_count column
 * @method     ChildCareTestRequestBlood findOneByCoombsPrice(double $coombs_price) Return the first ChildCareTestRequestBlood filtered by the coombs_price column
 * @method     ChildCareTestRequestBlood findOneByAbTestCount(int $ab_test_count) Return the first ChildCareTestRequestBlood filtered by the ab_test_count column
 * @method     ChildCareTestRequestBlood findOneByAbTestPrice(double $ab_test_price) Return the first ChildCareTestRequestBlood filtered by the ab_test_price column
 * @method     ChildCareTestRequestBlood findOneByCrosstestCount(int $crosstest_count) Return the first ChildCareTestRequestBlood filtered by the crosstest_count column
 * @method     ChildCareTestRequestBlood findOneByCrosstestPrice(double $crosstest_price) Return the first ChildCareTestRequestBlood filtered by the crosstest_price column
 * @method     ChildCareTestRequestBlood findOneByAbDiffCount(int $ab_diff_count) Return the first ChildCareTestRequestBlood filtered by the ab_diff_count column
 * @method     ChildCareTestRequestBlood findOneByAbDiffPrice(double $ab_diff_price) Return the first ChildCareTestRequestBlood filtered by the ab_diff_price column
 * @method     ChildCareTestRequestBlood findOneByXTest1Code(int $x_test_1_code) Return the first ChildCareTestRequestBlood filtered by the x_test_1_code column
 * @method     ChildCareTestRequestBlood findOneByXTest1Name(string $x_test_1_name) Return the first ChildCareTestRequestBlood filtered by the x_test_1_name column
 * @method     ChildCareTestRequestBlood findOneByXTest1Count(int $x_test_1_count) Return the first ChildCareTestRequestBlood filtered by the x_test_1_count column
 * @method     ChildCareTestRequestBlood findOneByXTest1Price(double $x_test_1_price) Return the first ChildCareTestRequestBlood filtered by the x_test_1_price column
 * @method     ChildCareTestRequestBlood findOneByXTest2Code(int $x_test_2_code) Return the first ChildCareTestRequestBlood filtered by the x_test_2_code column
 * @method     ChildCareTestRequestBlood findOneByXTest2Name(string $x_test_2_name) Return the first ChildCareTestRequestBlood filtered by the x_test_2_name column
 * @method     ChildCareTestRequestBlood findOneByXTest2Count(int $x_test_2_count) Return the first ChildCareTestRequestBlood filtered by the x_test_2_count column
 * @method     ChildCareTestRequestBlood findOneByXTest2Price(double $x_test_2_price) Return the first ChildCareTestRequestBlood filtered by the x_test_2_price column
 * @method     ChildCareTestRequestBlood findOneByXTest3Code(int $x_test_3_code) Return the first ChildCareTestRequestBlood filtered by the x_test_3_code column
 * @method     ChildCareTestRequestBlood findOneByXTest3Name(string $x_test_3_name) Return the first ChildCareTestRequestBlood filtered by the x_test_3_name column
 * @method     ChildCareTestRequestBlood findOneByXTest3Count(int $x_test_3_count) Return the first ChildCareTestRequestBlood filtered by the x_test_3_count column
 * @method     ChildCareTestRequestBlood findOneByXTest3Price(double $x_test_3_price) Return the first ChildCareTestRequestBlood filtered by the x_test_3_price column
 * @method     ChildCareTestRequestBlood findOneByLabStamp(string $lab_stamp) Return the first ChildCareTestRequestBlood filtered by the lab_stamp column
 * @method     ChildCareTestRequestBlood findOneByReleaseVia(string $release_via) Return the first ChildCareTestRequestBlood filtered by the release_via column
 * @method     ChildCareTestRequestBlood findOneByReceiptAck(string $receipt_ack) Return the first ChildCareTestRequestBlood filtered by the receipt_ack column
 * @method     ChildCareTestRequestBlood findOneByMainlogNr(string $mainlog_nr) Return the first ChildCareTestRequestBlood filtered by the mainlog_nr column
 * @method     ChildCareTestRequestBlood findOneByLabNr(string $lab_nr) Return the first ChildCareTestRequestBlood filtered by the lab_nr column
 * @method     ChildCareTestRequestBlood findOneByMainlogDate(string $mainlog_date) Return the first ChildCareTestRequestBlood filtered by the mainlog_date column
 * @method     ChildCareTestRequestBlood findOneByLabDate(string $lab_date) Return the first ChildCareTestRequestBlood filtered by the lab_date column
 * @method     ChildCareTestRequestBlood findOneByMainlogSign(string $mainlog_sign) Return the first ChildCareTestRequestBlood filtered by the mainlog_sign column
 * @method     ChildCareTestRequestBlood findOneByLabSign(string $lab_sign) Return the first ChildCareTestRequestBlood filtered by the lab_sign column
 * @method     ChildCareTestRequestBlood findOneByHistory(string $history) Return the first ChildCareTestRequestBlood filtered by the history column
 * @method     ChildCareTestRequestBlood findOneByModifyId(string $modify_id) Return the first ChildCareTestRequestBlood filtered by the modify_id column
 * @method     ChildCareTestRequestBlood findOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestBlood filtered by the modify_time column
 * @method     ChildCareTestRequestBlood findOneByCreateId(string $create_id) Return the first ChildCareTestRequestBlood filtered by the create_id column
 * @method     ChildCareTestRequestBlood findOneByCreateTime(string $create_time) Return the first ChildCareTestRequestBlood filtered by the create_time column *

 * @method     ChildCareTestRequestBlood requirePk($key, ConnectionInterface $con = null) Return the ChildCareTestRequestBlood by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOne(ConnectionInterface $con = null) Return the first ChildCareTestRequestBlood matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestBlood requireOneByBatchNr(int $batch_nr) Return the first ChildCareTestRequestBlood filtered by the batch_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareTestRequestBlood filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByDeptNr(int $dept_nr) Return the first ChildCareTestRequestBlood filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByBloodGroup(string $blood_group) Return the first ChildCareTestRequestBlood filtered by the blood_group column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByRhFactor(string $rh_factor) Return the first ChildCareTestRequestBlood filtered by the rh_factor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByKell(string $kell) Return the first ChildCareTestRequestBlood filtered by the kell column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByDateProtocNr(string $date_protoc_nr) Return the first ChildCareTestRequestBlood filtered by the date_protoc_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByPureBlood(string $pure_blood) Return the first ChildCareTestRequestBlood filtered by the pure_blood column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByRedBlood(string $red_blood) Return the first ChildCareTestRequestBlood filtered by the red_blood column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByLeukolessBlood(string $leukoless_blood) Return the first ChildCareTestRequestBlood filtered by the leukoless_blood column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByWashedBlood(string $washed_blood) Return the first ChildCareTestRequestBlood filtered by the washed_blood column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByPrpBlood(string $prp_blood) Return the first ChildCareTestRequestBlood filtered by the prp_blood column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByThromboCon(string $thrombo_con) Return the first ChildCareTestRequestBlood filtered by the thrombo_con column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByFfpPlasma(string $ffp_plasma) Return the first ChildCareTestRequestBlood filtered by the ffp_plasma column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByTransfusionDev(string $transfusion_dev) Return the first ChildCareTestRequestBlood filtered by the transfusion_dev column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByMatchSample(int $match_sample) Return the first ChildCareTestRequestBlood filtered by the match_sample column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByTransfusionDate(string $transfusion_date) Return the first ChildCareTestRequestBlood filtered by the transfusion_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByDiagnosis(string $diagnosis) Return the first ChildCareTestRequestBlood filtered by the diagnosis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByNotes(string $notes) Return the first ChildCareTestRequestBlood filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneBySendDate(string $send_date) Return the first ChildCareTestRequestBlood filtered by the send_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByDoctor(string $doctor) Return the first ChildCareTestRequestBlood filtered by the doctor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByPhoneNr(string $phone_nr) Return the first ChildCareTestRequestBlood filtered by the phone_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByStatus(string $status) Return the first ChildCareTestRequestBlood filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByBloodPb(string $blood_pb) Return the first ChildCareTestRequestBlood filtered by the blood_pb column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByBloodRb(string $blood_rb) Return the first ChildCareTestRequestBlood filtered by the blood_rb column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByBloodLlrb(string $blood_llrb) Return the first ChildCareTestRequestBlood filtered by the blood_llrb column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByBloodWrb(string $blood_wrb) Return the first ChildCareTestRequestBlood filtered by the blood_wrb column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByBloodPrp(string $blood_prp) Return the first ChildCareTestRequestBlood filtered by the blood_prp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByBloodTc(string $blood_tc) Return the first ChildCareTestRequestBlood filtered by the blood_tc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByBloodFfp(string $blood_ffp) Return the first ChildCareTestRequestBlood filtered by the blood_ffp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByBGroupCount(int $b_group_count) Return the first ChildCareTestRequestBlood filtered by the b_group_count column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByBGroupPrice(double $b_group_price) Return the first ChildCareTestRequestBlood filtered by the b_group_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByASubgroupCount(int $a_subgroup_count) Return the first ChildCareTestRequestBlood filtered by the a_subgroup_count column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByASubgroupPrice(double $a_subgroup_price) Return the first ChildCareTestRequestBlood filtered by the a_subgroup_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByExtraFactorsCount(int $extra_factors_count) Return the first ChildCareTestRequestBlood filtered by the extra_factors_count column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByExtraFactorsPrice(double $extra_factors_price) Return the first ChildCareTestRequestBlood filtered by the extra_factors_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByCoombsCount(int $coombs_count) Return the first ChildCareTestRequestBlood filtered by the coombs_count column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByCoombsPrice(double $coombs_price) Return the first ChildCareTestRequestBlood filtered by the coombs_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByAbTestCount(int $ab_test_count) Return the first ChildCareTestRequestBlood filtered by the ab_test_count column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByAbTestPrice(double $ab_test_price) Return the first ChildCareTestRequestBlood filtered by the ab_test_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByCrosstestCount(int $crosstest_count) Return the first ChildCareTestRequestBlood filtered by the crosstest_count column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByCrosstestPrice(double $crosstest_price) Return the first ChildCareTestRequestBlood filtered by the crosstest_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByAbDiffCount(int $ab_diff_count) Return the first ChildCareTestRequestBlood filtered by the ab_diff_count column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByAbDiffPrice(double $ab_diff_price) Return the first ChildCareTestRequestBlood filtered by the ab_diff_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByXTest1Code(int $x_test_1_code) Return the first ChildCareTestRequestBlood filtered by the x_test_1_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByXTest1Name(string $x_test_1_name) Return the first ChildCareTestRequestBlood filtered by the x_test_1_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByXTest1Count(int $x_test_1_count) Return the first ChildCareTestRequestBlood filtered by the x_test_1_count column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByXTest1Price(double $x_test_1_price) Return the first ChildCareTestRequestBlood filtered by the x_test_1_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByXTest2Code(int $x_test_2_code) Return the first ChildCareTestRequestBlood filtered by the x_test_2_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByXTest2Name(string $x_test_2_name) Return the first ChildCareTestRequestBlood filtered by the x_test_2_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByXTest2Count(int $x_test_2_count) Return the first ChildCareTestRequestBlood filtered by the x_test_2_count column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByXTest2Price(double $x_test_2_price) Return the first ChildCareTestRequestBlood filtered by the x_test_2_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByXTest3Code(int $x_test_3_code) Return the first ChildCareTestRequestBlood filtered by the x_test_3_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByXTest3Name(string $x_test_3_name) Return the first ChildCareTestRequestBlood filtered by the x_test_3_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByXTest3Count(int $x_test_3_count) Return the first ChildCareTestRequestBlood filtered by the x_test_3_count column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByXTest3Price(double $x_test_3_price) Return the first ChildCareTestRequestBlood filtered by the x_test_3_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByLabStamp(string $lab_stamp) Return the first ChildCareTestRequestBlood filtered by the lab_stamp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByReleaseVia(string $release_via) Return the first ChildCareTestRequestBlood filtered by the release_via column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByReceiptAck(string $receipt_ack) Return the first ChildCareTestRequestBlood filtered by the receipt_ack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByMainlogNr(string $mainlog_nr) Return the first ChildCareTestRequestBlood filtered by the mainlog_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByLabNr(string $lab_nr) Return the first ChildCareTestRequestBlood filtered by the lab_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByMainlogDate(string $mainlog_date) Return the first ChildCareTestRequestBlood filtered by the mainlog_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByLabDate(string $lab_date) Return the first ChildCareTestRequestBlood filtered by the lab_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByMainlogSign(string $mainlog_sign) Return the first ChildCareTestRequestBlood filtered by the mainlog_sign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByLabSign(string $lab_sign) Return the first ChildCareTestRequestBlood filtered by the lab_sign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByHistory(string $history) Return the first ChildCareTestRequestBlood filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByModifyId(string $modify_id) Return the first ChildCareTestRequestBlood filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByModifyTime(string $modify_time) Return the first ChildCareTestRequestBlood filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByCreateId(string $create_id) Return the first ChildCareTestRequestBlood filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTestRequestBlood requireOneByCreateTime(string $create_time) Return the first ChildCareTestRequestBlood filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTestRequestBlood[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTestRequestBlood objects based on current ModelCriteria
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByBatchNr(int $batch_nr) Return ChildCareTestRequestBlood objects filtered by the batch_nr column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareTestRequestBlood objects filtered by the encounter_nr column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareTestRequestBlood objects filtered by the dept_nr column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByBloodGroup(string $blood_group) Return ChildCareTestRequestBlood objects filtered by the blood_group column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByRhFactor(string $rh_factor) Return ChildCareTestRequestBlood objects filtered by the rh_factor column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByKell(string $kell) Return ChildCareTestRequestBlood objects filtered by the kell column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByDateProtocNr(string $date_protoc_nr) Return ChildCareTestRequestBlood objects filtered by the date_protoc_nr column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByPureBlood(string $pure_blood) Return ChildCareTestRequestBlood objects filtered by the pure_blood column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByRedBlood(string $red_blood) Return ChildCareTestRequestBlood objects filtered by the red_blood column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByLeukolessBlood(string $leukoless_blood) Return ChildCareTestRequestBlood objects filtered by the leukoless_blood column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByWashedBlood(string $washed_blood) Return ChildCareTestRequestBlood objects filtered by the washed_blood column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByPrpBlood(string $prp_blood) Return ChildCareTestRequestBlood objects filtered by the prp_blood column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByThromboCon(string $thrombo_con) Return ChildCareTestRequestBlood objects filtered by the thrombo_con column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByFfpPlasma(string $ffp_plasma) Return ChildCareTestRequestBlood objects filtered by the ffp_plasma column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByTransfusionDev(string $transfusion_dev) Return ChildCareTestRequestBlood objects filtered by the transfusion_dev column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByMatchSample(int $match_sample) Return ChildCareTestRequestBlood objects filtered by the match_sample column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByTransfusionDate(string $transfusion_date) Return ChildCareTestRequestBlood objects filtered by the transfusion_date column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByDiagnosis(string $diagnosis) Return ChildCareTestRequestBlood objects filtered by the diagnosis column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByNotes(string $notes) Return ChildCareTestRequestBlood objects filtered by the notes column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findBySendDate(string $send_date) Return ChildCareTestRequestBlood objects filtered by the send_date column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByDoctor(string $doctor) Return ChildCareTestRequestBlood objects filtered by the doctor column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByPhoneNr(string $phone_nr) Return ChildCareTestRequestBlood objects filtered by the phone_nr column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByStatus(string $status) Return ChildCareTestRequestBlood objects filtered by the status column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByBloodPb(string $blood_pb) Return ChildCareTestRequestBlood objects filtered by the blood_pb column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByBloodRb(string $blood_rb) Return ChildCareTestRequestBlood objects filtered by the blood_rb column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByBloodLlrb(string $blood_llrb) Return ChildCareTestRequestBlood objects filtered by the blood_llrb column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByBloodWrb(string $blood_wrb) Return ChildCareTestRequestBlood objects filtered by the blood_wrb column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByBloodPrp(string $blood_prp) Return ChildCareTestRequestBlood objects filtered by the blood_prp column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByBloodTc(string $blood_tc) Return ChildCareTestRequestBlood objects filtered by the blood_tc column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByBloodFfp(string $blood_ffp) Return ChildCareTestRequestBlood objects filtered by the blood_ffp column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByBGroupCount(int $b_group_count) Return ChildCareTestRequestBlood objects filtered by the b_group_count column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByBGroupPrice(double $b_group_price) Return ChildCareTestRequestBlood objects filtered by the b_group_price column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByASubgroupCount(int $a_subgroup_count) Return ChildCareTestRequestBlood objects filtered by the a_subgroup_count column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByASubgroupPrice(double $a_subgroup_price) Return ChildCareTestRequestBlood objects filtered by the a_subgroup_price column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByExtraFactorsCount(int $extra_factors_count) Return ChildCareTestRequestBlood objects filtered by the extra_factors_count column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByExtraFactorsPrice(double $extra_factors_price) Return ChildCareTestRequestBlood objects filtered by the extra_factors_price column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByCoombsCount(int $coombs_count) Return ChildCareTestRequestBlood objects filtered by the coombs_count column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByCoombsPrice(double $coombs_price) Return ChildCareTestRequestBlood objects filtered by the coombs_price column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByAbTestCount(int $ab_test_count) Return ChildCareTestRequestBlood objects filtered by the ab_test_count column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByAbTestPrice(double $ab_test_price) Return ChildCareTestRequestBlood objects filtered by the ab_test_price column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByCrosstestCount(int $crosstest_count) Return ChildCareTestRequestBlood objects filtered by the crosstest_count column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByCrosstestPrice(double $crosstest_price) Return ChildCareTestRequestBlood objects filtered by the crosstest_price column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByAbDiffCount(int $ab_diff_count) Return ChildCareTestRequestBlood objects filtered by the ab_diff_count column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByAbDiffPrice(double $ab_diff_price) Return ChildCareTestRequestBlood objects filtered by the ab_diff_price column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByXTest1Code(int $x_test_1_code) Return ChildCareTestRequestBlood objects filtered by the x_test_1_code column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByXTest1Name(string $x_test_1_name) Return ChildCareTestRequestBlood objects filtered by the x_test_1_name column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByXTest1Count(int $x_test_1_count) Return ChildCareTestRequestBlood objects filtered by the x_test_1_count column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByXTest1Price(double $x_test_1_price) Return ChildCareTestRequestBlood objects filtered by the x_test_1_price column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByXTest2Code(int $x_test_2_code) Return ChildCareTestRequestBlood objects filtered by the x_test_2_code column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByXTest2Name(string $x_test_2_name) Return ChildCareTestRequestBlood objects filtered by the x_test_2_name column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByXTest2Count(int $x_test_2_count) Return ChildCareTestRequestBlood objects filtered by the x_test_2_count column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByXTest2Price(double $x_test_2_price) Return ChildCareTestRequestBlood objects filtered by the x_test_2_price column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByXTest3Code(int $x_test_3_code) Return ChildCareTestRequestBlood objects filtered by the x_test_3_code column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByXTest3Name(string $x_test_3_name) Return ChildCareTestRequestBlood objects filtered by the x_test_3_name column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByXTest3Count(int $x_test_3_count) Return ChildCareTestRequestBlood objects filtered by the x_test_3_count column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByXTest3Price(double $x_test_3_price) Return ChildCareTestRequestBlood objects filtered by the x_test_3_price column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByLabStamp(string $lab_stamp) Return ChildCareTestRequestBlood objects filtered by the lab_stamp column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByReleaseVia(string $release_via) Return ChildCareTestRequestBlood objects filtered by the release_via column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByReceiptAck(string $receipt_ack) Return ChildCareTestRequestBlood objects filtered by the receipt_ack column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByMainlogNr(string $mainlog_nr) Return ChildCareTestRequestBlood objects filtered by the mainlog_nr column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByLabNr(string $lab_nr) Return ChildCareTestRequestBlood objects filtered by the lab_nr column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByMainlogDate(string $mainlog_date) Return ChildCareTestRequestBlood objects filtered by the mainlog_date column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByLabDate(string $lab_date) Return ChildCareTestRequestBlood objects filtered by the lab_date column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByMainlogSign(string $mainlog_sign) Return ChildCareTestRequestBlood objects filtered by the mainlog_sign column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByLabSign(string $lab_sign) Return ChildCareTestRequestBlood objects filtered by the lab_sign column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByHistory(string $history) Return ChildCareTestRequestBlood objects filtered by the history column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTestRequestBlood objects filtered by the modify_id column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTestRequestBlood objects filtered by the modify_time column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTestRequestBlood objects filtered by the create_id column
 * @method     ChildCareTestRequestBlood[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTestRequestBlood objects filtered by the create_time column
 * @method     ChildCareTestRequestBlood[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTestRequestBloodQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTestRequestBloodQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTestRequestBlood', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTestRequestBloodQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTestRequestBloodQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTestRequestBloodQuery) {
            return $criteria;
        }
        $query = new ChildCareTestRequestBloodQuery();
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
     * @return ChildCareTestRequestBlood|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTestRequestBloodTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTestRequestBloodTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTestRequestBlood A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT batch_nr, encounter_nr, dept_nr, blood_group, rh_factor, kell, date_protoc_nr, pure_blood, red_blood, leukoless_blood, washed_blood, prp_blood, thrombo_con, ffp_plasma, transfusion_dev, match_sample, transfusion_date, diagnosis, notes, send_date, doctor, phone_nr, status, blood_pb, blood_rb, blood_llrb, blood_wrb, blood_prp, blood_tc, blood_ffp, b_group_count, b_group_price, a_subgroup_count, a_subgroup_price, extra_factors_count, extra_factors_price, coombs_count, coombs_price, ab_test_count, ab_test_price, crosstest_count, crosstest_price, ab_diff_count, ab_diff_price, x_test_1_code, x_test_1_name, x_test_1_count, x_test_1_price, x_test_2_code, x_test_2_name, x_test_2_count, x_test_2_price, x_test_3_code, x_test_3_name, x_test_3_count, x_test_3_price, lab_stamp, release_via, receipt_ack, mainlog_nr, lab_nr, mainlog_date, lab_date, mainlog_sign, lab_sign, history, modify_id, modify_time, create_id, create_time FROM care_test_request_blood WHERE batch_nr = :p0';
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
            /** @var ChildCareTestRequestBlood $obj */
            $obj = new ChildCareTestRequestBlood();
            $obj->hydrate($row);
            CareTestRequestBloodTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTestRequestBlood|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BATCH_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BATCH_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByBatchNr($batchNr = null, $comparison = null)
    {
        if (is_array($batchNr)) {
            $useMinMax = false;
            if (isset($batchNr['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BATCH_NR, $batchNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNr['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BATCH_NR, $batchNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BATCH_NR, $batchNr, $comparison);
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the blood_group column
     *
     * Example usage:
     * <code>
     * $query->filterByBloodGroup('fooValue');   // WHERE blood_group = 'fooValue'
     * $query->filterByBloodGroup('%fooValue%', Criteria::LIKE); // WHERE blood_group LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloodGroup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByBloodGroup($bloodGroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloodGroup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BLOOD_GROUP, $bloodGroup, $comparison);
    }

    /**
     * Filter the query on the rh_factor column
     *
     * Example usage:
     * <code>
     * $query->filterByRhFactor('fooValue');   // WHERE rh_factor = 'fooValue'
     * $query->filterByRhFactor('%fooValue%', Criteria::LIKE); // WHERE rh_factor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rhFactor The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByRhFactor($rhFactor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rhFactor)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_RH_FACTOR, $rhFactor, $comparison);
    }

    /**
     * Filter the query on the kell column
     *
     * Example usage:
     * <code>
     * $query->filterByKell('fooValue');   // WHERE kell = 'fooValue'
     * $query->filterByKell('%fooValue%', Criteria::LIKE); // WHERE kell LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kell The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByKell($kell = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kell)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_KELL, $kell, $comparison);
    }

    /**
     * Filter the query on the date_protoc_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByDateProtocNr('fooValue');   // WHERE date_protoc_nr = 'fooValue'
     * $query->filterByDateProtocNr('%fooValue%', Criteria::LIKE); // WHERE date_protoc_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateProtocNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByDateProtocNr($dateProtocNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateProtocNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_DATE_PROTOC_NR, $dateProtocNr, $comparison);
    }

    /**
     * Filter the query on the pure_blood column
     *
     * Example usage:
     * <code>
     * $query->filterByPureBlood('fooValue');   // WHERE pure_blood = 'fooValue'
     * $query->filterByPureBlood('%fooValue%', Criteria::LIKE); // WHERE pure_blood LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pureBlood The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByPureBlood($pureBlood = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pureBlood)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_PURE_BLOOD, $pureBlood, $comparison);
    }

    /**
     * Filter the query on the red_blood column
     *
     * Example usage:
     * <code>
     * $query->filterByRedBlood('fooValue');   // WHERE red_blood = 'fooValue'
     * $query->filterByRedBlood('%fooValue%', Criteria::LIKE); // WHERE red_blood LIKE '%fooValue%'
     * </code>
     *
     * @param     string $redBlood The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByRedBlood($redBlood = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($redBlood)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_RED_BLOOD, $redBlood, $comparison);
    }

    /**
     * Filter the query on the leukoless_blood column
     *
     * Example usage:
     * <code>
     * $query->filterByLeukolessBlood('fooValue');   // WHERE leukoless_blood = 'fooValue'
     * $query->filterByLeukolessBlood('%fooValue%', Criteria::LIKE); // WHERE leukoless_blood LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leukolessBlood The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByLeukolessBlood($leukolessBlood = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leukolessBlood)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_LEUKOLESS_BLOOD, $leukolessBlood, $comparison);
    }

    /**
     * Filter the query on the washed_blood column
     *
     * Example usage:
     * <code>
     * $query->filterByWashedBlood('fooValue');   // WHERE washed_blood = 'fooValue'
     * $query->filterByWashedBlood('%fooValue%', Criteria::LIKE); // WHERE washed_blood LIKE '%fooValue%'
     * </code>
     *
     * @param     string $washedBlood The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByWashedBlood($washedBlood = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($washedBlood)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_WASHED_BLOOD, $washedBlood, $comparison);
    }

    /**
     * Filter the query on the prp_blood column
     *
     * Example usage:
     * <code>
     * $query->filterByPrpBlood('fooValue');   // WHERE prp_blood = 'fooValue'
     * $query->filterByPrpBlood('%fooValue%', Criteria::LIKE); // WHERE prp_blood LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prpBlood The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByPrpBlood($prpBlood = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prpBlood)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_PRP_BLOOD, $prpBlood, $comparison);
    }

    /**
     * Filter the query on the thrombo_con column
     *
     * Example usage:
     * <code>
     * $query->filterByThromboCon('fooValue');   // WHERE thrombo_con = 'fooValue'
     * $query->filterByThromboCon('%fooValue%', Criteria::LIKE); // WHERE thrombo_con LIKE '%fooValue%'
     * </code>
     *
     * @param     string $thromboCon The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByThromboCon($thromboCon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($thromboCon)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_THROMBO_CON, $thromboCon, $comparison);
    }

    /**
     * Filter the query on the ffp_plasma column
     *
     * Example usage:
     * <code>
     * $query->filterByFfpPlasma('fooValue');   // WHERE ffp_plasma = 'fooValue'
     * $query->filterByFfpPlasma('%fooValue%', Criteria::LIKE); // WHERE ffp_plasma LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ffpPlasma The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByFfpPlasma($ffpPlasma = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ffpPlasma)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_FFP_PLASMA, $ffpPlasma, $comparison);
    }

    /**
     * Filter the query on the transfusion_dev column
     *
     * Example usage:
     * <code>
     * $query->filterByTransfusionDev('fooValue');   // WHERE transfusion_dev = 'fooValue'
     * $query->filterByTransfusionDev('%fooValue%', Criteria::LIKE); // WHERE transfusion_dev LIKE '%fooValue%'
     * </code>
     *
     * @param     string $transfusionDev The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByTransfusionDev($transfusionDev = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($transfusionDev)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_TRANSFUSION_DEV, $transfusionDev, $comparison);
    }

    /**
     * Filter the query on the match_sample column
     *
     * Example usage:
     * <code>
     * $query->filterByMatchSample(1234); // WHERE match_sample = 1234
     * $query->filterByMatchSample(array(12, 34)); // WHERE match_sample IN (12, 34)
     * $query->filterByMatchSample(array('min' => 12)); // WHERE match_sample > 12
     * </code>
     *
     * @param     mixed $matchSample The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByMatchSample($matchSample = null, $comparison = null)
    {
        if (is_array($matchSample)) {
            $useMinMax = false;
            if (isset($matchSample['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_MATCH_SAMPLE, $matchSample['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($matchSample['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_MATCH_SAMPLE, $matchSample['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_MATCH_SAMPLE, $matchSample, $comparison);
    }

    /**
     * Filter the query on the transfusion_date column
     *
     * Example usage:
     * <code>
     * $query->filterByTransfusionDate('2011-03-14'); // WHERE transfusion_date = '2011-03-14'
     * $query->filterByTransfusionDate('now'); // WHERE transfusion_date = '2011-03-14'
     * $query->filterByTransfusionDate(array('max' => 'yesterday')); // WHERE transfusion_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $transfusionDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByTransfusionDate($transfusionDate = null, $comparison = null)
    {
        if (is_array($transfusionDate)) {
            $useMinMax = false;
            if (isset($transfusionDate['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_TRANSFUSION_DATE, $transfusionDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($transfusionDate['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_TRANSFUSION_DATE, $transfusionDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_TRANSFUSION_DATE, $transfusionDate, $comparison);
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByDiagnosis($diagnosis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosis)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_DIAGNOSIS, $diagnosis, $comparison);
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_NOTES, $notes, $comparison);
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterBySendDate($sendDate = null, $comparison = null)
    {
        if (is_array($sendDate)) {
            $useMinMax = false;
            if (isset($sendDate['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_SEND_DATE, $sendDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sendDate['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_SEND_DATE, $sendDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_SEND_DATE, $sendDate, $comparison);
    }

    /**
     * Filter the query on the doctor column
     *
     * Example usage:
     * <code>
     * $query->filterByDoctor('fooValue');   // WHERE doctor = 'fooValue'
     * $query->filterByDoctor('%fooValue%', Criteria::LIKE); // WHERE doctor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doctor The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByDoctor($doctor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doctor)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_DOCTOR, $doctor, $comparison);
    }

    /**
     * Filter the query on the phone_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhoneNr('fooValue');   // WHERE phone_nr = 'fooValue'
     * $query->filterByPhoneNr('%fooValue%', Criteria::LIKE); // WHERE phone_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phoneNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByPhoneNr($phoneNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phoneNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_PHONE_NR, $phoneNr, $comparison);
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the blood_pb column
     *
     * Example usage:
     * <code>
     * $query->filterByBloodPb('fooValue');   // WHERE blood_pb = 'fooValue'
     * $query->filterByBloodPb('%fooValue%', Criteria::LIKE); // WHERE blood_pb LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloodPb The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByBloodPb($bloodPb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloodPb)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BLOOD_PB, $bloodPb, $comparison);
    }

    /**
     * Filter the query on the blood_rb column
     *
     * Example usage:
     * <code>
     * $query->filterByBloodRb('fooValue');   // WHERE blood_rb = 'fooValue'
     * $query->filterByBloodRb('%fooValue%', Criteria::LIKE); // WHERE blood_rb LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloodRb The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByBloodRb($bloodRb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloodRb)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BLOOD_RB, $bloodRb, $comparison);
    }

    /**
     * Filter the query on the blood_llrb column
     *
     * Example usage:
     * <code>
     * $query->filterByBloodLlrb('fooValue');   // WHERE blood_llrb = 'fooValue'
     * $query->filterByBloodLlrb('%fooValue%', Criteria::LIKE); // WHERE blood_llrb LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloodLlrb The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByBloodLlrb($bloodLlrb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloodLlrb)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BLOOD_LLRB, $bloodLlrb, $comparison);
    }

    /**
     * Filter the query on the blood_wrb column
     *
     * Example usage:
     * <code>
     * $query->filterByBloodWrb('fooValue');   // WHERE blood_wrb = 'fooValue'
     * $query->filterByBloodWrb('%fooValue%', Criteria::LIKE); // WHERE blood_wrb LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloodWrb The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByBloodWrb($bloodWrb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloodWrb)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BLOOD_WRB, $bloodWrb, $comparison);
    }

    /**
     * Filter the query on the blood_prp column
     *
     * @param     mixed $bloodPrp The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByBloodPrp($bloodPrp = null, $comparison = null)
    {

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BLOOD_PRP, $bloodPrp, $comparison);
    }

    /**
     * Filter the query on the blood_tc column
     *
     * Example usage:
     * <code>
     * $query->filterByBloodTc('fooValue');   // WHERE blood_tc = 'fooValue'
     * $query->filterByBloodTc('%fooValue%', Criteria::LIKE); // WHERE blood_tc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloodTc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByBloodTc($bloodTc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloodTc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BLOOD_TC, $bloodTc, $comparison);
    }

    /**
     * Filter the query on the blood_ffp column
     *
     * Example usage:
     * <code>
     * $query->filterByBloodFfp('fooValue');   // WHERE blood_ffp = 'fooValue'
     * $query->filterByBloodFfp('%fooValue%', Criteria::LIKE); // WHERE blood_ffp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloodFfp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByBloodFfp($bloodFfp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloodFfp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BLOOD_FFP, $bloodFfp, $comparison);
    }

    /**
     * Filter the query on the b_group_count column
     *
     * Example usage:
     * <code>
     * $query->filterByBGroupCount(1234); // WHERE b_group_count = 1234
     * $query->filterByBGroupCount(array(12, 34)); // WHERE b_group_count IN (12, 34)
     * $query->filterByBGroupCount(array('min' => 12)); // WHERE b_group_count > 12
     * </code>
     *
     * @param     mixed $bGroupCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByBGroupCount($bGroupCount = null, $comparison = null)
    {
        if (is_array($bGroupCount)) {
            $useMinMax = false;
            if (isset($bGroupCount['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_B_GROUP_COUNT, $bGroupCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bGroupCount['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_B_GROUP_COUNT, $bGroupCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_B_GROUP_COUNT, $bGroupCount, $comparison);
    }

    /**
     * Filter the query on the b_group_price column
     *
     * Example usage:
     * <code>
     * $query->filterByBGroupPrice(1234); // WHERE b_group_price = 1234
     * $query->filterByBGroupPrice(array(12, 34)); // WHERE b_group_price IN (12, 34)
     * $query->filterByBGroupPrice(array('min' => 12)); // WHERE b_group_price > 12
     * </code>
     *
     * @param     mixed $bGroupPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByBGroupPrice($bGroupPrice = null, $comparison = null)
    {
        if (is_array($bGroupPrice)) {
            $useMinMax = false;
            if (isset($bGroupPrice['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_B_GROUP_PRICE, $bGroupPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bGroupPrice['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_B_GROUP_PRICE, $bGroupPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_B_GROUP_PRICE, $bGroupPrice, $comparison);
    }

    /**
     * Filter the query on the a_subgroup_count column
     *
     * Example usage:
     * <code>
     * $query->filterByASubgroupCount(1234); // WHERE a_subgroup_count = 1234
     * $query->filterByASubgroupCount(array(12, 34)); // WHERE a_subgroup_count IN (12, 34)
     * $query->filterByASubgroupCount(array('min' => 12)); // WHERE a_subgroup_count > 12
     * </code>
     *
     * @param     mixed $aSubgroupCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByASubgroupCount($aSubgroupCount = null, $comparison = null)
    {
        if (is_array($aSubgroupCount)) {
            $useMinMax = false;
            if (isset($aSubgroupCount['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_A_SUBGROUP_COUNT, $aSubgroupCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aSubgroupCount['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_A_SUBGROUP_COUNT, $aSubgroupCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_A_SUBGROUP_COUNT, $aSubgroupCount, $comparison);
    }

    /**
     * Filter the query on the a_subgroup_price column
     *
     * Example usage:
     * <code>
     * $query->filterByASubgroupPrice(1234); // WHERE a_subgroup_price = 1234
     * $query->filterByASubgroupPrice(array(12, 34)); // WHERE a_subgroup_price IN (12, 34)
     * $query->filterByASubgroupPrice(array('min' => 12)); // WHERE a_subgroup_price > 12
     * </code>
     *
     * @param     mixed $aSubgroupPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByASubgroupPrice($aSubgroupPrice = null, $comparison = null)
    {
        if (is_array($aSubgroupPrice)) {
            $useMinMax = false;
            if (isset($aSubgroupPrice['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_A_SUBGROUP_PRICE, $aSubgroupPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aSubgroupPrice['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_A_SUBGROUP_PRICE, $aSubgroupPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_A_SUBGROUP_PRICE, $aSubgroupPrice, $comparison);
    }

    /**
     * Filter the query on the extra_factors_count column
     *
     * Example usage:
     * <code>
     * $query->filterByExtraFactorsCount(1234); // WHERE extra_factors_count = 1234
     * $query->filterByExtraFactorsCount(array(12, 34)); // WHERE extra_factors_count IN (12, 34)
     * $query->filterByExtraFactorsCount(array('min' => 12)); // WHERE extra_factors_count > 12
     * </code>
     *
     * @param     mixed $extraFactorsCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByExtraFactorsCount($extraFactorsCount = null, $comparison = null)
    {
        if (is_array($extraFactorsCount)) {
            $useMinMax = false;
            if (isset($extraFactorsCount['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_COUNT, $extraFactorsCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($extraFactorsCount['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_COUNT, $extraFactorsCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_COUNT, $extraFactorsCount, $comparison);
    }

    /**
     * Filter the query on the extra_factors_price column
     *
     * Example usage:
     * <code>
     * $query->filterByExtraFactorsPrice(1234); // WHERE extra_factors_price = 1234
     * $query->filterByExtraFactorsPrice(array(12, 34)); // WHERE extra_factors_price IN (12, 34)
     * $query->filterByExtraFactorsPrice(array('min' => 12)); // WHERE extra_factors_price > 12
     * </code>
     *
     * @param     mixed $extraFactorsPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByExtraFactorsPrice($extraFactorsPrice = null, $comparison = null)
    {
        if (is_array($extraFactorsPrice)) {
            $useMinMax = false;
            if (isset($extraFactorsPrice['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_PRICE, $extraFactorsPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($extraFactorsPrice['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_PRICE, $extraFactorsPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_EXTRA_FACTORS_PRICE, $extraFactorsPrice, $comparison);
    }

    /**
     * Filter the query on the coombs_count column
     *
     * Example usage:
     * <code>
     * $query->filterByCoombsCount(1234); // WHERE coombs_count = 1234
     * $query->filterByCoombsCount(array(12, 34)); // WHERE coombs_count IN (12, 34)
     * $query->filterByCoombsCount(array('min' => 12)); // WHERE coombs_count > 12
     * </code>
     *
     * @param     mixed $coombsCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByCoombsCount($coombsCount = null, $comparison = null)
    {
        if (is_array($coombsCount)) {
            $useMinMax = false;
            if (isset($coombsCount['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_COOMBS_COUNT, $coombsCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coombsCount['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_COOMBS_COUNT, $coombsCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_COOMBS_COUNT, $coombsCount, $comparison);
    }

    /**
     * Filter the query on the coombs_price column
     *
     * Example usage:
     * <code>
     * $query->filterByCoombsPrice(1234); // WHERE coombs_price = 1234
     * $query->filterByCoombsPrice(array(12, 34)); // WHERE coombs_price IN (12, 34)
     * $query->filterByCoombsPrice(array('min' => 12)); // WHERE coombs_price > 12
     * </code>
     *
     * @param     mixed $coombsPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByCoombsPrice($coombsPrice = null, $comparison = null)
    {
        if (is_array($coombsPrice)) {
            $useMinMax = false;
            if (isset($coombsPrice['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_COOMBS_PRICE, $coombsPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coombsPrice['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_COOMBS_PRICE, $coombsPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_COOMBS_PRICE, $coombsPrice, $comparison);
    }

    /**
     * Filter the query on the ab_test_count column
     *
     * Example usage:
     * <code>
     * $query->filterByAbTestCount(1234); // WHERE ab_test_count = 1234
     * $query->filterByAbTestCount(array(12, 34)); // WHERE ab_test_count IN (12, 34)
     * $query->filterByAbTestCount(array('min' => 12)); // WHERE ab_test_count > 12
     * </code>
     *
     * @param     mixed $abTestCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByAbTestCount($abTestCount = null, $comparison = null)
    {
        if (is_array($abTestCount)) {
            $useMinMax = false;
            if (isset($abTestCount['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_AB_TEST_COUNT, $abTestCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abTestCount['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_AB_TEST_COUNT, $abTestCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_AB_TEST_COUNT, $abTestCount, $comparison);
    }

    /**
     * Filter the query on the ab_test_price column
     *
     * Example usage:
     * <code>
     * $query->filterByAbTestPrice(1234); // WHERE ab_test_price = 1234
     * $query->filterByAbTestPrice(array(12, 34)); // WHERE ab_test_price IN (12, 34)
     * $query->filterByAbTestPrice(array('min' => 12)); // WHERE ab_test_price > 12
     * </code>
     *
     * @param     mixed $abTestPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByAbTestPrice($abTestPrice = null, $comparison = null)
    {
        if (is_array($abTestPrice)) {
            $useMinMax = false;
            if (isset($abTestPrice['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_AB_TEST_PRICE, $abTestPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abTestPrice['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_AB_TEST_PRICE, $abTestPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_AB_TEST_PRICE, $abTestPrice, $comparison);
    }

    /**
     * Filter the query on the crosstest_count column
     *
     * Example usage:
     * <code>
     * $query->filterByCrosstestCount(1234); // WHERE crosstest_count = 1234
     * $query->filterByCrosstestCount(array(12, 34)); // WHERE crosstest_count IN (12, 34)
     * $query->filterByCrosstestCount(array('min' => 12)); // WHERE crosstest_count > 12
     * </code>
     *
     * @param     mixed $crosstestCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByCrosstestCount($crosstestCount = null, $comparison = null)
    {
        if (is_array($crosstestCount)) {
            $useMinMax = false;
            if (isset($crosstestCount['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_CROSSTEST_COUNT, $crosstestCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crosstestCount['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_CROSSTEST_COUNT, $crosstestCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_CROSSTEST_COUNT, $crosstestCount, $comparison);
    }

    /**
     * Filter the query on the crosstest_price column
     *
     * Example usage:
     * <code>
     * $query->filterByCrosstestPrice(1234); // WHERE crosstest_price = 1234
     * $query->filterByCrosstestPrice(array(12, 34)); // WHERE crosstest_price IN (12, 34)
     * $query->filterByCrosstestPrice(array('min' => 12)); // WHERE crosstest_price > 12
     * </code>
     *
     * @param     mixed $crosstestPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByCrosstestPrice($crosstestPrice = null, $comparison = null)
    {
        if (is_array($crosstestPrice)) {
            $useMinMax = false;
            if (isset($crosstestPrice['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_CROSSTEST_PRICE, $crosstestPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crosstestPrice['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_CROSSTEST_PRICE, $crosstestPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_CROSSTEST_PRICE, $crosstestPrice, $comparison);
    }

    /**
     * Filter the query on the ab_diff_count column
     *
     * Example usage:
     * <code>
     * $query->filterByAbDiffCount(1234); // WHERE ab_diff_count = 1234
     * $query->filterByAbDiffCount(array(12, 34)); // WHERE ab_diff_count IN (12, 34)
     * $query->filterByAbDiffCount(array('min' => 12)); // WHERE ab_diff_count > 12
     * </code>
     *
     * @param     mixed $abDiffCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByAbDiffCount($abDiffCount = null, $comparison = null)
    {
        if (is_array($abDiffCount)) {
            $useMinMax = false;
            if (isset($abDiffCount['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_AB_DIFF_COUNT, $abDiffCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abDiffCount['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_AB_DIFF_COUNT, $abDiffCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_AB_DIFF_COUNT, $abDiffCount, $comparison);
    }

    /**
     * Filter the query on the ab_diff_price column
     *
     * Example usage:
     * <code>
     * $query->filterByAbDiffPrice(1234); // WHERE ab_diff_price = 1234
     * $query->filterByAbDiffPrice(array(12, 34)); // WHERE ab_diff_price IN (12, 34)
     * $query->filterByAbDiffPrice(array('min' => 12)); // WHERE ab_diff_price > 12
     * </code>
     *
     * @param     mixed $abDiffPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByAbDiffPrice($abDiffPrice = null, $comparison = null)
    {
        if (is_array($abDiffPrice)) {
            $useMinMax = false;
            if (isset($abDiffPrice['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_AB_DIFF_PRICE, $abDiffPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abDiffPrice['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_AB_DIFF_PRICE, $abDiffPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_AB_DIFF_PRICE, $abDiffPrice, $comparison);
    }

    /**
     * Filter the query on the x_test_1_code column
     *
     * Example usage:
     * <code>
     * $query->filterByXTest1Code(1234); // WHERE x_test_1_code = 1234
     * $query->filterByXTest1Code(array(12, 34)); // WHERE x_test_1_code IN (12, 34)
     * $query->filterByXTest1Code(array('min' => 12)); // WHERE x_test_1_code > 12
     * </code>
     *
     * @param     mixed $xTest1Code The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByXTest1Code($xTest1Code = null, $comparison = null)
    {
        if (is_array($xTest1Code)) {
            $useMinMax = false;
            if (isset($xTest1Code['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_1_CODE, $xTest1Code['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($xTest1Code['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_1_CODE, $xTest1Code['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_1_CODE, $xTest1Code, $comparison);
    }

    /**
     * Filter the query on the x_test_1_name column
     *
     * Example usage:
     * <code>
     * $query->filterByXTest1Name('fooValue');   // WHERE x_test_1_name = 'fooValue'
     * $query->filterByXTest1Name('%fooValue%', Criteria::LIKE); // WHERE x_test_1_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xTest1Name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByXTest1Name($xTest1Name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xTest1Name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_1_NAME, $xTest1Name, $comparison);
    }

    /**
     * Filter the query on the x_test_1_count column
     *
     * Example usage:
     * <code>
     * $query->filterByXTest1Count(1234); // WHERE x_test_1_count = 1234
     * $query->filterByXTest1Count(array(12, 34)); // WHERE x_test_1_count IN (12, 34)
     * $query->filterByXTest1Count(array('min' => 12)); // WHERE x_test_1_count > 12
     * </code>
     *
     * @param     mixed $xTest1Count The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByXTest1Count($xTest1Count = null, $comparison = null)
    {
        if (is_array($xTest1Count)) {
            $useMinMax = false;
            if (isset($xTest1Count['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_1_COUNT, $xTest1Count['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($xTest1Count['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_1_COUNT, $xTest1Count['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_1_COUNT, $xTest1Count, $comparison);
    }

    /**
     * Filter the query on the x_test_1_price column
     *
     * Example usage:
     * <code>
     * $query->filterByXTest1Price(1234); // WHERE x_test_1_price = 1234
     * $query->filterByXTest1Price(array(12, 34)); // WHERE x_test_1_price IN (12, 34)
     * $query->filterByXTest1Price(array('min' => 12)); // WHERE x_test_1_price > 12
     * </code>
     *
     * @param     mixed $xTest1Price The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByXTest1Price($xTest1Price = null, $comparison = null)
    {
        if (is_array($xTest1Price)) {
            $useMinMax = false;
            if (isset($xTest1Price['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_1_PRICE, $xTest1Price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($xTest1Price['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_1_PRICE, $xTest1Price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_1_PRICE, $xTest1Price, $comparison);
    }

    /**
     * Filter the query on the x_test_2_code column
     *
     * Example usage:
     * <code>
     * $query->filterByXTest2Code(1234); // WHERE x_test_2_code = 1234
     * $query->filterByXTest2Code(array(12, 34)); // WHERE x_test_2_code IN (12, 34)
     * $query->filterByXTest2Code(array('min' => 12)); // WHERE x_test_2_code > 12
     * </code>
     *
     * @param     mixed $xTest2Code The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByXTest2Code($xTest2Code = null, $comparison = null)
    {
        if (is_array($xTest2Code)) {
            $useMinMax = false;
            if (isset($xTest2Code['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_2_CODE, $xTest2Code['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($xTest2Code['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_2_CODE, $xTest2Code['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_2_CODE, $xTest2Code, $comparison);
    }

    /**
     * Filter the query on the x_test_2_name column
     *
     * Example usage:
     * <code>
     * $query->filterByXTest2Name('fooValue');   // WHERE x_test_2_name = 'fooValue'
     * $query->filterByXTest2Name('%fooValue%', Criteria::LIKE); // WHERE x_test_2_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xTest2Name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByXTest2Name($xTest2Name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xTest2Name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_2_NAME, $xTest2Name, $comparison);
    }

    /**
     * Filter the query on the x_test_2_count column
     *
     * Example usage:
     * <code>
     * $query->filterByXTest2Count(1234); // WHERE x_test_2_count = 1234
     * $query->filterByXTest2Count(array(12, 34)); // WHERE x_test_2_count IN (12, 34)
     * $query->filterByXTest2Count(array('min' => 12)); // WHERE x_test_2_count > 12
     * </code>
     *
     * @param     mixed $xTest2Count The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByXTest2Count($xTest2Count = null, $comparison = null)
    {
        if (is_array($xTest2Count)) {
            $useMinMax = false;
            if (isset($xTest2Count['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_2_COUNT, $xTest2Count['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($xTest2Count['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_2_COUNT, $xTest2Count['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_2_COUNT, $xTest2Count, $comparison);
    }

    /**
     * Filter the query on the x_test_2_price column
     *
     * Example usage:
     * <code>
     * $query->filterByXTest2Price(1234); // WHERE x_test_2_price = 1234
     * $query->filterByXTest2Price(array(12, 34)); // WHERE x_test_2_price IN (12, 34)
     * $query->filterByXTest2Price(array('min' => 12)); // WHERE x_test_2_price > 12
     * </code>
     *
     * @param     mixed $xTest2Price The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByXTest2Price($xTest2Price = null, $comparison = null)
    {
        if (is_array($xTest2Price)) {
            $useMinMax = false;
            if (isset($xTest2Price['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_2_PRICE, $xTest2Price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($xTest2Price['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_2_PRICE, $xTest2Price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_2_PRICE, $xTest2Price, $comparison);
    }

    /**
     * Filter the query on the x_test_3_code column
     *
     * Example usage:
     * <code>
     * $query->filterByXTest3Code(1234); // WHERE x_test_3_code = 1234
     * $query->filterByXTest3Code(array(12, 34)); // WHERE x_test_3_code IN (12, 34)
     * $query->filterByXTest3Code(array('min' => 12)); // WHERE x_test_3_code > 12
     * </code>
     *
     * @param     mixed $xTest3Code The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByXTest3Code($xTest3Code = null, $comparison = null)
    {
        if (is_array($xTest3Code)) {
            $useMinMax = false;
            if (isset($xTest3Code['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_3_CODE, $xTest3Code['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($xTest3Code['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_3_CODE, $xTest3Code['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_3_CODE, $xTest3Code, $comparison);
    }

    /**
     * Filter the query on the x_test_3_name column
     *
     * Example usage:
     * <code>
     * $query->filterByXTest3Name('fooValue');   // WHERE x_test_3_name = 'fooValue'
     * $query->filterByXTest3Name('%fooValue%', Criteria::LIKE); // WHERE x_test_3_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xTest3Name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByXTest3Name($xTest3Name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xTest3Name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_3_NAME, $xTest3Name, $comparison);
    }

    /**
     * Filter the query on the x_test_3_count column
     *
     * Example usage:
     * <code>
     * $query->filterByXTest3Count(1234); // WHERE x_test_3_count = 1234
     * $query->filterByXTest3Count(array(12, 34)); // WHERE x_test_3_count IN (12, 34)
     * $query->filterByXTest3Count(array('min' => 12)); // WHERE x_test_3_count > 12
     * </code>
     *
     * @param     mixed $xTest3Count The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByXTest3Count($xTest3Count = null, $comparison = null)
    {
        if (is_array($xTest3Count)) {
            $useMinMax = false;
            if (isset($xTest3Count['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_3_COUNT, $xTest3Count['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($xTest3Count['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_3_COUNT, $xTest3Count['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_3_COUNT, $xTest3Count, $comparison);
    }

    /**
     * Filter the query on the x_test_3_price column
     *
     * Example usage:
     * <code>
     * $query->filterByXTest3Price(1234); // WHERE x_test_3_price = 1234
     * $query->filterByXTest3Price(array(12, 34)); // WHERE x_test_3_price IN (12, 34)
     * $query->filterByXTest3Price(array('min' => 12)); // WHERE x_test_3_price > 12
     * </code>
     *
     * @param     mixed $xTest3Price The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByXTest3Price($xTest3Price = null, $comparison = null)
    {
        if (is_array($xTest3Price)) {
            $useMinMax = false;
            if (isset($xTest3Price['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_3_PRICE, $xTest3Price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($xTest3Price['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_3_PRICE, $xTest3Price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_X_TEST_3_PRICE, $xTest3Price, $comparison);
    }

    /**
     * Filter the query on the lab_stamp column
     *
     * Example usage:
     * <code>
     * $query->filterByLabStamp('2011-03-14'); // WHERE lab_stamp = '2011-03-14'
     * $query->filterByLabStamp('now'); // WHERE lab_stamp = '2011-03-14'
     * $query->filterByLabStamp(array('max' => 'yesterday')); // WHERE lab_stamp > '2011-03-13'
     * </code>
     *
     * @param     mixed $labStamp The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByLabStamp($labStamp = null, $comparison = null)
    {
        if (is_array($labStamp)) {
            $useMinMax = false;
            if (isset($labStamp['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_LAB_STAMP, $labStamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($labStamp['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_LAB_STAMP, $labStamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_LAB_STAMP, $labStamp, $comparison);
    }

    /**
     * Filter the query on the release_via column
     *
     * Example usage:
     * <code>
     * $query->filterByReleaseVia('fooValue');   // WHERE release_via = 'fooValue'
     * $query->filterByReleaseVia('%fooValue%', Criteria::LIKE); // WHERE release_via LIKE '%fooValue%'
     * </code>
     *
     * @param     string $releaseVia The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByReleaseVia($releaseVia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($releaseVia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_RELEASE_VIA, $releaseVia, $comparison);
    }

    /**
     * Filter the query on the receipt_ack column
     *
     * Example usage:
     * <code>
     * $query->filterByReceiptAck('fooValue');   // WHERE receipt_ack = 'fooValue'
     * $query->filterByReceiptAck('%fooValue%', Criteria::LIKE); // WHERE receipt_ack LIKE '%fooValue%'
     * </code>
     *
     * @param     string $receiptAck The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByReceiptAck($receiptAck = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($receiptAck)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_RECEIPT_ACK, $receiptAck, $comparison);
    }

    /**
     * Filter the query on the mainlog_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByMainlogNr('fooValue');   // WHERE mainlog_nr = 'fooValue'
     * $query->filterByMainlogNr('%fooValue%', Criteria::LIKE); // WHERE mainlog_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mainlogNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByMainlogNr($mainlogNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mainlogNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_MAINLOG_NR, $mainlogNr, $comparison);
    }

    /**
     * Filter the query on the lab_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByLabNr('fooValue');   // WHERE lab_nr = 'fooValue'
     * $query->filterByLabNr('%fooValue%', Criteria::LIKE); // WHERE lab_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByLabNr($labNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_LAB_NR, $labNr, $comparison);
    }

    /**
     * Filter the query on the mainlog_date column
     *
     * Example usage:
     * <code>
     * $query->filterByMainlogDate('2011-03-14'); // WHERE mainlog_date = '2011-03-14'
     * $query->filterByMainlogDate('now'); // WHERE mainlog_date = '2011-03-14'
     * $query->filterByMainlogDate(array('max' => 'yesterday')); // WHERE mainlog_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $mainlogDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByMainlogDate($mainlogDate = null, $comparison = null)
    {
        if (is_array($mainlogDate)) {
            $useMinMax = false;
            if (isset($mainlogDate['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_MAINLOG_DATE, $mainlogDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mainlogDate['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_MAINLOG_DATE, $mainlogDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_MAINLOG_DATE, $mainlogDate, $comparison);
    }

    /**
     * Filter the query on the lab_date column
     *
     * Example usage:
     * <code>
     * $query->filterByLabDate('2011-03-14'); // WHERE lab_date = '2011-03-14'
     * $query->filterByLabDate('now'); // WHERE lab_date = '2011-03-14'
     * $query->filterByLabDate(array('max' => 'yesterday')); // WHERE lab_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $labDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByLabDate($labDate = null, $comparison = null)
    {
        if (is_array($labDate)) {
            $useMinMax = false;
            if (isset($labDate['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_LAB_DATE, $labDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($labDate['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_LAB_DATE, $labDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_LAB_DATE, $labDate, $comparison);
    }

    /**
     * Filter the query on the mainlog_sign column
     *
     * Example usage:
     * <code>
     * $query->filterByMainlogSign('fooValue');   // WHERE mainlog_sign = 'fooValue'
     * $query->filterByMainlogSign('%fooValue%', Criteria::LIKE); // WHERE mainlog_sign LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mainlogSign The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByMainlogSign($mainlogSign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mainlogSign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_MAINLOG_SIGN, $mainlogSign, $comparison);
    }

    /**
     * Filter the query on the lab_sign column
     *
     * Example usage:
     * <code>
     * $query->filterByLabSign('fooValue');   // WHERE lab_sign = 'fooValue'
     * $query->filterByLabSign('%fooValue%', Criteria::LIKE); // WHERE lab_sign LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labSign The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByLabSign($labSign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labSign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_LAB_SIGN, $labSign, $comparison);
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTestRequestBloodTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTestRequestBloodTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTestRequestBlood $careTestRequestBlood Object to remove from the list of results
     *
     * @return $this|ChildCareTestRequestBloodQuery The current query, for fluid interface
     */
    public function prune($careTestRequestBlood = null)
    {
        if ($careTestRequestBlood) {
            $this->addUsingAlias(CareTestRequestBloodTableMap::COL_BATCH_NR, $careTestRequestBlood->getBatchNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_test_request_blood table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestBloodTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTestRequestBloodTableMap::clearInstancePool();
            CareTestRequestBloodTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTestRequestBloodTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTestRequestBloodTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTestRequestBloodTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTestRequestBloodTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTestRequestBloodQuery
