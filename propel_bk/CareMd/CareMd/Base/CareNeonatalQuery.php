<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareNeonatal as ChildCareNeonatal;
use CareMd\CareMd\CareNeonatalQuery as ChildCareNeonatalQuery;
use CareMd\CareMd\Map\CareNeonatalTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_neonatal' table.
 *
 *
 *
 * @method     ChildCareNeonatalQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareNeonatalQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCareNeonatalQuery orderByDeliveryDate($order = Criteria::ASC) Order by the delivery_date column
 * @method     ChildCareNeonatalQuery orderByParentEncounterNr($order = Criteria::ASC) Order by the parent_encounter_nr column
 * @method     ChildCareNeonatalQuery orderByDeliveryNr($order = Criteria::ASC) Order by the delivery_nr column
 * @method     ChildCareNeonatalQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareNeonatalQuery orderByDeliveryPlace($order = Criteria::ASC) Order by the delivery_place column
 * @method     ChildCareNeonatalQuery orderByDeliveryMode($order = Criteria::ASC) Order by the delivery_mode column
 * @method     ChildCareNeonatalQuery orderByCSReason($order = Criteria::ASC) Order by the c_s_reason column
 * @method     ChildCareNeonatalQuery orderByBornBeforeArrival($order = Criteria::ASC) Order by the born_before_arrival column
 * @method     ChildCareNeonatalQuery orderByFacePresentation($order = Criteria::ASC) Order by the face_presentation column
 * @method     ChildCareNeonatalQuery orderByPosterioOccipitalPosition($order = Criteria::ASC) Order by the posterio_occipital_position column
 * @method     ChildCareNeonatalQuery orderByDeliveryRank($order = Criteria::ASC) Order by the delivery_rank column
 * @method     ChildCareNeonatalQuery orderByApgar1Min($order = Criteria::ASC) Order by the apgar_1_min column
 * @method     ChildCareNeonatalQuery orderByApgar5Min($order = Criteria::ASC) Order by the apgar_5_min column
 * @method     ChildCareNeonatalQuery orderByApgar10Min($order = Criteria::ASC) Order by the apgar_10_min column
 * @method     ChildCareNeonatalQuery orderByTimeToSpontResp($order = Criteria::ASC) Order by the time_to_spont_resp column
 * @method     ChildCareNeonatalQuery orderByCondition($order = Criteria::ASC) Order by the condition column
 * @method     ChildCareNeonatalQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method     ChildCareNeonatalQuery orderByLength($order = Criteria::ASC) Order by the length column
 * @method     ChildCareNeonatalQuery orderByHeadCircumference($order = Criteria::ASC) Order by the head_circumference column
 * @method     ChildCareNeonatalQuery orderByScoredGestationalAge($order = Criteria::ASC) Order by the scored_gestational_age column
 * @method     ChildCareNeonatalQuery orderByFeeding($order = Criteria::ASC) Order by the feeding column
 * @method     ChildCareNeonatalQuery orderByCongenitalAbnormality($order = Criteria::ASC) Order by the congenital_abnormality column
 * @method     ChildCareNeonatalQuery orderByClassification($order = Criteria::ASC) Order by the classification column
 * @method     ChildCareNeonatalQuery orderByDiseaseCategory($order = Criteria::ASC) Order by the disease_category column
 * @method     ChildCareNeonatalQuery orderByOutcome($order = Criteria::ASC) Order by the outcome column
 * @method     ChildCareNeonatalQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareNeonatalQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareNeonatalQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareNeonatalQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareNeonatalQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareNeonatalQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareNeonatalQuery groupByNr() Group by the nr column
 * @method     ChildCareNeonatalQuery groupByPid() Group by the pid column
 * @method     ChildCareNeonatalQuery groupByDeliveryDate() Group by the delivery_date column
 * @method     ChildCareNeonatalQuery groupByParentEncounterNr() Group by the parent_encounter_nr column
 * @method     ChildCareNeonatalQuery groupByDeliveryNr() Group by the delivery_nr column
 * @method     ChildCareNeonatalQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareNeonatalQuery groupByDeliveryPlace() Group by the delivery_place column
 * @method     ChildCareNeonatalQuery groupByDeliveryMode() Group by the delivery_mode column
 * @method     ChildCareNeonatalQuery groupByCSReason() Group by the c_s_reason column
 * @method     ChildCareNeonatalQuery groupByBornBeforeArrival() Group by the born_before_arrival column
 * @method     ChildCareNeonatalQuery groupByFacePresentation() Group by the face_presentation column
 * @method     ChildCareNeonatalQuery groupByPosterioOccipitalPosition() Group by the posterio_occipital_position column
 * @method     ChildCareNeonatalQuery groupByDeliveryRank() Group by the delivery_rank column
 * @method     ChildCareNeonatalQuery groupByApgar1Min() Group by the apgar_1_min column
 * @method     ChildCareNeonatalQuery groupByApgar5Min() Group by the apgar_5_min column
 * @method     ChildCareNeonatalQuery groupByApgar10Min() Group by the apgar_10_min column
 * @method     ChildCareNeonatalQuery groupByTimeToSpontResp() Group by the time_to_spont_resp column
 * @method     ChildCareNeonatalQuery groupByCondition() Group by the condition column
 * @method     ChildCareNeonatalQuery groupByWeight() Group by the weight column
 * @method     ChildCareNeonatalQuery groupByLength() Group by the length column
 * @method     ChildCareNeonatalQuery groupByHeadCircumference() Group by the head_circumference column
 * @method     ChildCareNeonatalQuery groupByScoredGestationalAge() Group by the scored_gestational_age column
 * @method     ChildCareNeonatalQuery groupByFeeding() Group by the feeding column
 * @method     ChildCareNeonatalQuery groupByCongenitalAbnormality() Group by the congenital_abnormality column
 * @method     ChildCareNeonatalQuery groupByClassification() Group by the classification column
 * @method     ChildCareNeonatalQuery groupByDiseaseCategory() Group by the disease_category column
 * @method     ChildCareNeonatalQuery groupByOutcome() Group by the outcome column
 * @method     ChildCareNeonatalQuery groupByStatus() Group by the status column
 * @method     ChildCareNeonatalQuery groupByHistory() Group by the history column
 * @method     ChildCareNeonatalQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareNeonatalQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareNeonatalQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareNeonatalQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareNeonatalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareNeonatalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareNeonatalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareNeonatalQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareNeonatalQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareNeonatalQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareNeonatal findOne(ConnectionInterface $con = null) Return the first ChildCareNeonatal matching the query
 * @method     ChildCareNeonatal findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareNeonatal matching the query, or a new ChildCareNeonatal object populated from the query conditions when no match is found
 *
 * @method     ChildCareNeonatal findOneByNr(int $nr) Return the first ChildCareNeonatal filtered by the nr column
 * @method     ChildCareNeonatal findOneByPid(int $pid) Return the first ChildCareNeonatal filtered by the pid column
 * @method     ChildCareNeonatal findOneByDeliveryDate(string $delivery_date) Return the first ChildCareNeonatal filtered by the delivery_date column
 * @method     ChildCareNeonatal findOneByParentEncounterNr(int $parent_encounter_nr) Return the first ChildCareNeonatal filtered by the parent_encounter_nr column
 * @method     ChildCareNeonatal findOneByDeliveryNr(int $delivery_nr) Return the first ChildCareNeonatal filtered by the delivery_nr column
 * @method     ChildCareNeonatal findOneByEncounterNr(int $encounter_nr) Return the first ChildCareNeonatal filtered by the encounter_nr column
 * @method     ChildCareNeonatal findOneByDeliveryPlace(string $delivery_place) Return the first ChildCareNeonatal filtered by the delivery_place column
 * @method     ChildCareNeonatal findOneByDeliveryMode(int $delivery_mode) Return the first ChildCareNeonatal filtered by the delivery_mode column
 * @method     ChildCareNeonatal findOneByCSReason(string $c_s_reason) Return the first ChildCareNeonatal filtered by the c_s_reason column
 * @method     ChildCareNeonatal findOneByBornBeforeArrival(boolean $born_before_arrival) Return the first ChildCareNeonatal filtered by the born_before_arrival column
 * @method     ChildCareNeonatal findOneByFacePresentation(boolean $face_presentation) Return the first ChildCareNeonatal filtered by the face_presentation column
 * @method     ChildCareNeonatal findOneByPosterioOccipitalPosition(boolean $posterio_occipital_position) Return the first ChildCareNeonatal filtered by the posterio_occipital_position column
 * @method     ChildCareNeonatal findOneByDeliveryRank(int $delivery_rank) Return the first ChildCareNeonatal filtered by the delivery_rank column
 * @method     ChildCareNeonatal findOneByApgar1Min(int $apgar_1_min) Return the first ChildCareNeonatal filtered by the apgar_1_min column
 * @method     ChildCareNeonatal findOneByApgar5Min(int $apgar_5_min) Return the first ChildCareNeonatal filtered by the apgar_5_min column
 * @method     ChildCareNeonatal findOneByApgar10Min(int $apgar_10_min) Return the first ChildCareNeonatal filtered by the apgar_10_min column
 * @method     ChildCareNeonatal findOneByTimeToSpontResp(int $time_to_spont_resp) Return the first ChildCareNeonatal filtered by the time_to_spont_resp column
 * @method     ChildCareNeonatal findOneByCondition(string $condition) Return the first ChildCareNeonatal filtered by the condition column
 * @method     ChildCareNeonatal findOneByWeight(double $weight) Return the first ChildCareNeonatal filtered by the weight column
 * @method     ChildCareNeonatal findOneByLength(double $length) Return the first ChildCareNeonatal filtered by the length column
 * @method     ChildCareNeonatal findOneByHeadCircumference(double $head_circumference) Return the first ChildCareNeonatal filtered by the head_circumference column
 * @method     ChildCareNeonatal findOneByScoredGestationalAge(double $scored_gestational_age) Return the first ChildCareNeonatal filtered by the scored_gestational_age column
 * @method     ChildCareNeonatal findOneByFeeding(int $feeding) Return the first ChildCareNeonatal filtered by the feeding column
 * @method     ChildCareNeonatal findOneByCongenitalAbnormality(string $congenital_abnormality) Return the first ChildCareNeonatal filtered by the congenital_abnormality column
 * @method     ChildCareNeonatal findOneByClassification(string $classification) Return the first ChildCareNeonatal filtered by the classification column
 * @method     ChildCareNeonatal findOneByDiseaseCategory(int $disease_category) Return the first ChildCareNeonatal filtered by the disease_category column
 * @method     ChildCareNeonatal findOneByOutcome(int $outcome) Return the first ChildCareNeonatal filtered by the outcome column
 * @method     ChildCareNeonatal findOneByStatus(string $status) Return the first ChildCareNeonatal filtered by the status column
 * @method     ChildCareNeonatal findOneByHistory(string $history) Return the first ChildCareNeonatal filtered by the history column
 * @method     ChildCareNeonatal findOneByModifyId(string $modify_id) Return the first ChildCareNeonatal filtered by the modify_id column
 * @method     ChildCareNeonatal findOneByModifyTime(string $modify_time) Return the first ChildCareNeonatal filtered by the modify_time column
 * @method     ChildCareNeonatal findOneByCreateId(string $create_id) Return the first ChildCareNeonatal filtered by the create_id column
 * @method     ChildCareNeonatal findOneByCreateTime(string $create_time) Return the first ChildCareNeonatal filtered by the create_time column *

 * @method     ChildCareNeonatal requirePk($key, ConnectionInterface $con = null) Return the ChildCareNeonatal by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOne(ConnectionInterface $con = null) Return the first ChildCareNeonatal matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareNeonatal requireOneByNr(int $nr) Return the first ChildCareNeonatal filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByPid(int $pid) Return the first ChildCareNeonatal filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByDeliveryDate(string $delivery_date) Return the first ChildCareNeonatal filtered by the delivery_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByParentEncounterNr(int $parent_encounter_nr) Return the first ChildCareNeonatal filtered by the parent_encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByDeliveryNr(int $delivery_nr) Return the first ChildCareNeonatal filtered by the delivery_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareNeonatal filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByDeliveryPlace(string $delivery_place) Return the first ChildCareNeonatal filtered by the delivery_place column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByDeliveryMode(int $delivery_mode) Return the first ChildCareNeonatal filtered by the delivery_mode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByCSReason(string $c_s_reason) Return the first ChildCareNeonatal filtered by the c_s_reason column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByBornBeforeArrival(boolean $born_before_arrival) Return the first ChildCareNeonatal filtered by the born_before_arrival column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByFacePresentation(boolean $face_presentation) Return the first ChildCareNeonatal filtered by the face_presentation column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByPosterioOccipitalPosition(boolean $posterio_occipital_position) Return the first ChildCareNeonatal filtered by the posterio_occipital_position column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByDeliveryRank(int $delivery_rank) Return the first ChildCareNeonatal filtered by the delivery_rank column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByApgar1Min(int $apgar_1_min) Return the first ChildCareNeonatal filtered by the apgar_1_min column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByApgar5Min(int $apgar_5_min) Return the first ChildCareNeonatal filtered by the apgar_5_min column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByApgar10Min(int $apgar_10_min) Return the first ChildCareNeonatal filtered by the apgar_10_min column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByTimeToSpontResp(int $time_to_spont_resp) Return the first ChildCareNeonatal filtered by the time_to_spont_resp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByCondition(string $condition) Return the first ChildCareNeonatal filtered by the condition column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByWeight(double $weight) Return the first ChildCareNeonatal filtered by the weight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByLength(double $length) Return the first ChildCareNeonatal filtered by the length column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByHeadCircumference(double $head_circumference) Return the first ChildCareNeonatal filtered by the head_circumference column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByScoredGestationalAge(double $scored_gestational_age) Return the first ChildCareNeonatal filtered by the scored_gestational_age column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByFeeding(int $feeding) Return the first ChildCareNeonatal filtered by the feeding column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByCongenitalAbnormality(string $congenital_abnormality) Return the first ChildCareNeonatal filtered by the congenital_abnormality column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByClassification(string $classification) Return the first ChildCareNeonatal filtered by the classification column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByDiseaseCategory(int $disease_category) Return the first ChildCareNeonatal filtered by the disease_category column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByOutcome(int $outcome) Return the first ChildCareNeonatal filtered by the outcome column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByStatus(string $status) Return the first ChildCareNeonatal filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByHistory(string $history) Return the first ChildCareNeonatal filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByModifyId(string $modify_id) Return the first ChildCareNeonatal filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByModifyTime(string $modify_time) Return the first ChildCareNeonatal filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByCreateId(string $create_id) Return the first ChildCareNeonatal filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNeonatal requireOneByCreateTime(string $create_time) Return the first ChildCareNeonatal filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareNeonatal[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareNeonatal objects based on current ModelCriteria
 * @method     ChildCareNeonatal[]|ObjectCollection findByNr(int $nr) Return ChildCareNeonatal objects filtered by the nr column
 * @method     ChildCareNeonatal[]|ObjectCollection findByPid(int $pid) Return ChildCareNeonatal objects filtered by the pid column
 * @method     ChildCareNeonatal[]|ObjectCollection findByDeliveryDate(string $delivery_date) Return ChildCareNeonatal objects filtered by the delivery_date column
 * @method     ChildCareNeonatal[]|ObjectCollection findByParentEncounterNr(int $parent_encounter_nr) Return ChildCareNeonatal objects filtered by the parent_encounter_nr column
 * @method     ChildCareNeonatal[]|ObjectCollection findByDeliveryNr(int $delivery_nr) Return ChildCareNeonatal objects filtered by the delivery_nr column
 * @method     ChildCareNeonatal[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareNeonatal objects filtered by the encounter_nr column
 * @method     ChildCareNeonatal[]|ObjectCollection findByDeliveryPlace(string $delivery_place) Return ChildCareNeonatal objects filtered by the delivery_place column
 * @method     ChildCareNeonatal[]|ObjectCollection findByDeliveryMode(int $delivery_mode) Return ChildCareNeonatal objects filtered by the delivery_mode column
 * @method     ChildCareNeonatal[]|ObjectCollection findByCSReason(string $c_s_reason) Return ChildCareNeonatal objects filtered by the c_s_reason column
 * @method     ChildCareNeonatal[]|ObjectCollection findByBornBeforeArrival(boolean $born_before_arrival) Return ChildCareNeonatal objects filtered by the born_before_arrival column
 * @method     ChildCareNeonatal[]|ObjectCollection findByFacePresentation(boolean $face_presentation) Return ChildCareNeonatal objects filtered by the face_presentation column
 * @method     ChildCareNeonatal[]|ObjectCollection findByPosterioOccipitalPosition(boolean $posterio_occipital_position) Return ChildCareNeonatal objects filtered by the posterio_occipital_position column
 * @method     ChildCareNeonatal[]|ObjectCollection findByDeliveryRank(int $delivery_rank) Return ChildCareNeonatal objects filtered by the delivery_rank column
 * @method     ChildCareNeonatal[]|ObjectCollection findByApgar1Min(int $apgar_1_min) Return ChildCareNeonatal objects filtered by the apgar_1_min column
 * @method     ChildCareNeonatal[]|ObjectCollection findByApgar5Min(int $apgar_5_min) Return ChildCareNeonatal objects filtered by the apgar_5_min column
 * @method     ChildCareNeonatal[]|ObjectCollection findByApgar10Min(int $apgar_10_min) Return ChildCareNeonatal objects filtered by the apgar_10_min column
 * @method     ChildCareNeonatal[]|ObjectCollection findByTimeToSpontResp(int $time_to_spont_resp) Return ChildCareNeonatal objects filtered by the time_to_spont_resp column
 * @method     ChildCareNeonatal[]|ObjectCollection findByCondition(string $condition) Return ChildCareNeonatal objects filtered by the condition column
 * @method     ChildCareNeonatal[]|ObjectCollection findByWeight(double $weight) Return ChildCareNeonatal objects filtered by the weight column
 * @method     ChildCareNeonatal[]|ObjectCollection findByLength(double $length) Return ChildCareNeonatal objects filtered by the length column
 * @method     ChildCareNeonatal[]|ObjectCollection findByHeadCircumference(double $head_circumference) Return ChildCareNeonatal objects filtered by the head_circumference column
 * @method     ChildCareNeonatal[]|ObjectCollection findByScoredGestationalAge(double $scored_gestational_age) Return ChildCareNeonatal objects filtered by the scored_gestational_age column
 * @method     ChildCareNeonatal[]|ObjectCollection findByFeeding(int $feeding) Return ChildCareNeonatal objects filtered by the feeding column
 * @method     ChildCareNeonatal[]|ObjectCollection findByCongenitalAbnormality(string $congenital_abnormality) Return ChildCareNeonatal objects filtered by the congenital_abnormality column
 * @method     ChildCareNeonatal[]|ObjectCollection findByClassification(string $classification) Return ChildCareNeonatal objects filtered by the classification column
 * @method     ChildCareNeonatal[]|ObjectCollection findByDiseaseCategory(int $disease_category) Return ChildCareNeonatal objects filtered by the disease_category column
 * @method     ChildCareNeonatal[]|ObjectCollection findByOutcome(int $outcome) Return ChildCareNeonatal objects filtered by the outcome column
 * @method     ChildCareNeonatal[]|ObjectCollection findByStatus(string $status) Return ChildCareNeonatal objects filtered by the status column
 * @method     ChildCareNeonatal[]|ObjectCollection findByHistory(string $history) Return ChildCareNeonatal objects filtered by the history column
 * @method     ChildCareNeonatal[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareNeonatal objects filtered by the modify_id column
 * @method     ChildCareNeonatal[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareNeonatal objects filtered by the modify_time column
 * @method     ChildCareNeonatal[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareNeonatal objects filtered by the create_id column
 * @method     ChildCareNeonatal[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareNeonatal objects filtered by the create_time column
 * @method     ChildCareNeonatal[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareNeonatalQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareNeonatalQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareNeonatal', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareNeonatalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareNeonatalQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareNeonatalQuery) {
            return $criteria;
        }
        $query = new ChildCareNeonatalQuery();
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
     * @return ChildCareNeonatal|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareNeonatalTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareNeonatalTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareNeonatal A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, pid, delivery_date, parent_encounter_nr, delivery_nr, encounter_nr, delivery_place, delivery_mode, c_s_reason, born_before_arrival, face_presentation, posterio_occipital_position, delivery_rank, apgar_1_min, apgar_5_min, apgar_10_min, time_to_spont_resp, condition, weight, length, head_circumference, scored_gestational_age, feeding, congenital_abnormality, classification, disease_category, outcome, status, history, modify_id, modify_time, create_id, create_time FROM care_neonatal WHERE nr = :p0';
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
            /** @var ChildCareNeonatal $obj */
            $obj = new ChildCareNeonatal();
            $obj->hydrate($row);
            CareNeonatalTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareNeonatal|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareNeonatalTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareNeonatalTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the pid column
     *
     * Example usage:
     * <code>
     * $query->filterByPid(1234); // WHERE pid = 1234
     * $query->filterByPid(array(12, 34)); // WHERE pid IN (12, 34)
     * $query->filterByPid(array('min' => 12)); // WHERE pid > 12
     * </code>
     *
     * @param     mixed $pid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_PID, $pid, $comparison);
    }

    /**
     * Filter the query on the delivery_date column
     *
     * Example usage:
     * <code>
     * $query->filterByDeliveryDate('2011-03-14'); // WHERE delivery_date = '2011-03-14'
     * $query->filterByDeliveryDate('now'); // WHERE delivery_date = '2011-03-14'
     * $query->filterByDeliveryDate(array('max' => 'yesterday')); // WHERE delivery_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $deliveryDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByDeliveryDate($deliveryDate = null, $comparison = null)
    {
        if (is_array($deliveryDate)) {
            $useMinMax = false;
            if (isset($deliveryDate['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_DATE, $deliveryDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deliveryDate['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_DATE, $deliveryDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_DATE, $deliveryDate, $comparison);
    }

    /**
     * Filter the query on the parent_encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByParentEncounterNr(1234); // WHERE parent_encounter_nr = 1234
     * $query->filterByParentEncounterNr(array(12, 34)); // WHERE parent_encounter_nr IN (12, 34)
     * $query->filterByParentEncounterNr(array('min' => 12)); // WHERE parent_encounter_nr > 12
     * </code>
     *
     * @param     mixed $parentEncounterNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByParentEncounterNr($parentEncounterNr = null, $comparison = null)
    {
        if (is_array($parentEncounterNr)) {
            $useMinMax = false;
            if (isset($parentEncounterNr['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_PARENT_ENCOUNTER_NR, $parentEncounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parentEncounterNr['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_PARENT_ENCOUNTER_NR, $parentEncounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_PARENT_ENCOUNTER_NR, $parentEncounterNr, $comparison);
    }

    /**
     * Filter the query on the delivery_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByDeliveryNr(1234); // WHERE delivery_nr = 1234
     * $query->filterByDeliveryNr(array(12, 34)); // WHERE delivery_nr IN (12, 34)
     * $query->filterByDeliveryNr(array('min' => 12)); // WHERE delivery_nr > 12
     * </code>
     *
     * @param     mixed $deliveryNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByDeliveryNr($deliveryNr = null, $comparison = null)
    {
        if (is_array($deliveryNr)) {
            $useMinMax = false;
            if (isset($deliveryNr['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_NR, $deliveryNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deliveryNr['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_NR, $deliveryNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_NR, $deliveryNr, $comparison);
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
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the delivery_place column
     *
     * Example usage:
     * <code>
     * $query->filterByDeliveryPlace('fooValue');   // WHERE delivery_place = 'fooValue'
     * $query->filterByDeliveryPlace('%fooValue%', Criteria::LIKE); // WHERE delivery_place LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deliveryPlace The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByDeliveryPlace($deliveryPlace = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deliveryPlace)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_PLACE, $deliveryPlace, $comparison);
    }

    /**
     * Filter the query on the delivery_mode column
     *
     * Example usage:
     * <code>
     * $query->filterByDeliveryMode(1234); // WHERE delivery_mode = 1234
     * $query->filterByDeliveryMode(array(12, 34)); // WHERE delivery_mode IN (12, 34)
     * $query->filterByDeliveryMode(array('min' => 12)); // WHERE delivery_mode > 12
     * </code>
     *
     * @param     mixed $deliveryMode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByDeliveryMode($deliveryMode = null, $comparison = null)
    {
        if (is_array($deliveryMode)) {
            $useMinMax = false;
            if (isset($deliveryMode['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_MODE, $deliveryMode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deliveryMode['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_MODE, $deliveryMode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_MODE, $deliveryMode, $comparison);
    }

    /**
     * Filter the query on the c_s_reason column
     *
     * Example usage:
     * <code>
     * $query->filterByCSReason('fooValue');   // WHERE c_s_reason = 'fooValue'
     * $query->filterByCSReason('%fooValue%', Criteria::LIKE); // WHERE c_s_reason LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cSReason The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByCSReason($cSReason = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cSReason)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_C_S_REASON, $cSReason, $comparison);
    }

    /**
     * Filter the query on the born_before_arrival column
     *
     * Example usage:
     * <code>
     * $query->filterByBornBeforeArrival(true); // WHERE born_before_arrival = true
     * $query->filterByBornBeforeArrival('yes'); // WHERE born_before_arrival = true
     * </code>
     *
     * @param     boolean|string $bornBeforeArrival The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByBornBeforeArrival($bornBeforeArrival = null, $comparison = null)
    {
        if (is_string($bornBeforeArrival)) {
            $bornBeforeArrival = in_array(strtolower($bornBeforeArrival), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_BORN_BEFORE_ARRIVAL, $bornBeforeArrival, $comparison);
    }

    /**
     * Filter the query on the face_presentation column
     *
     * Example usage:
     * <code>
     * $query->filterByFacePresentation(true); // WHERE face_presentation = true
     * $query->filterByFacePresentation('yes'); // WHERE face_presentation = true
     * </code>
     *
     * @param     boolean|string $facePresentation The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByFacePresentation($facePresentation = null, $comparison = null)
    {
        if (is_string($facePresentation)) {
            $facePresentation = in_array(strtolower($facePresentation), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_FACE_PRESENTATION, $facePresentation, $comparison);
    }

    /**
     * Filter the query on the posterio_occipital_position column
     *
     * Example usage:
     * <code>
     * $query->filterByPosterioOccipitalPosition(true); // WHERE posterio_occipital_position = true
     * $query->filterByPosterioOccipitalPosition('yes'); // WHERE posterio_occipital_position = true
     * </code>
     *
     * @param     boolean|string $posterioOccipitalPosition The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByPosterioOccipitalPosition($posterioOccipitalPosition = null, $comparison = null)
    {
        if (is_string($posterioOccipitalPosition)) {
            $posterioOccipitalPosition = in_array(strtolower($posterioOccipitalPosition), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_POSTERIO_OCCIPITAL_POSITION, $posterioOccipitalPosition, $comparison);
    }

    /**
     * Filter the query on the delivery_rank column
     *
     * Example usage:
     * <code>
     * $query->filterByDeliveryRank(1234); // WHERE delivery_rank = 1234
     * $query->filterByDeliveryRank(array(12, 34)); // WHERE delivery_rank IN (12, 34)
     * $query->filterByDeliveryRank(array('min' => 12)); // WHERE delivery_rank > 12
     * </code>
     *
     * @param     mixed $deliveryRank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByDeliveryRank($deliveryRank = null, $comparison = null)
    {
        if (is_array($deliveryRank)) {
            $useMinMax = false;
            if (isset($deliveryRank['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_RANK, $deliveryRank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deliveryRank['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_RANK, $deliveryRank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_DELIVERY_RANK, $deliveryRank, $comparison);
    }

    /**
     * Filter the query on the apgar_1_min column
     *
     * Example usage:
     * <code>
     * $query->filterByApgar1Min(1234); // WHERE apgar_1_min = 1234
     * $query->filterByApgar1Min(array(12, 34)); // WHERE apgar_1_min IN (12, 34)
     * $query->filterByApgar1Min(array('min' => 12)); // WHERE apgar_1_min > 12
     * </code>
     *
     * @param     mixed $apgar1Min The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByApgar1Min($apgar1Min = null, $comparison = null)
    {
        if (is_array($apgar1Min)) {
            $useMinMax = false;
            if (isset($apgar1Min['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_APGAR_1_MIN, $apgar1Min['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apgar1Min['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_APGAR_1_MIN, $apgar1Min['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_APGAR_1_MIN, $apgar1Min, $comparison);
    }

    /**
     * Filter the query on the apgar_5_min column
     *
     * Example usage:
     * <code>
     * $query->filterByApgar5Min(1234); // WHERE apgar_5_min = 1234
     * $query->filterByApgar5Min(array(12, 34)); // WHERE apgar_5_min IN (12, 34)
     * $query->filterByApgar5Min(array('min' => 12)); // WHERE apgar_5_min > 12
     * </code>
     *
     * @param     mixed $apgar5Min The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByApgar5Min($apgar5Min = null, $comparison = null)
    {
        if (is_array($apgar5Min)) {
            $useMinMax = false;
            if (isset($apgar5Min['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_APGAR_5_MIN, $apgar5Min['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apgar5Min['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_APGAR_5_MIN, $apgar5Min['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_APGAR_5_MIN, $apgar5Min, $comparison);
    }

    /**
     * Filter the query on the apgar_10_min column
     *
     * Example usage:
     * <code>
     * $query->filterByApgar10Min(1234); // WHERE apgar_10_min = 1234
     * $query->filterByApgar10Min(array(12, 34)); // WHERE apgar_10_min IN (12, 34)
     * $query->filterByApgar10Min(array('min' => 12)); // WHERE apgar_10_min > 12
     * </code>
     *
     * @param     mixed $apgar10Min The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByApgar10Min($apgar10Min = null, $comparison = null)
    {
        if (is_array($apgar10Min)) {
            $useMinMax = false;
            if (isset($apgar10Min['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_APGAR_10_MIN, $apgar10Min['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apgar10Min['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_APGAR_10_MIN, $apgar10Min['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_APGAR_10_MIN, $apgar10Min, $comparison);
    }

    /**
     * Filter the query on the time_to_spont_resp column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeToSpontResp(1234); // WHERE time_to_spont_resp = 1234
     * $query->filterByTimeToSpontResp(array(12, 34)); // WHERE time_to_spont_resp IN (12, 34)
     * $query->filterByTimeToSpontResp(array('min' => 12)); // WHERE time_to_spont_resp > 12
     * </code>
     *
     * @param     mixed $timeToSpontResp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByTimeToSpontResp($timeToSpontResp = null, $comparison = null)
    {
        if (is_array($timeToSpontResp)) {
            $useMinMax = false;
            if (isset($timeToSpontResp['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_TIME_TO_SPONT_RESP, $timeToSpontResp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeToSpontResp['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_TIME_TO_SPONT_RESP, $timeToSpontResp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_TIME_TO_SPONT_RESP, $timeToSpontResp, $comparison);
    }

    /**
     * Filter the query on the condition column
     *
     * Example usage:
     * <code>
     * $query->filterByCondition('fooValue');   // WHERE condition = 'fooValue'
     * $query->filterByCondition('%fooValue%', Criteria::LIKE); // WHERE condition LIKE '%fooValue%'
     * </code>
     *
     * @param     string $condition The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByCondition($condition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($condition)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_CONDITION, $condition, $comparison);
    }

    /**
     * Filter the query on the weight column
     *
     * Example usage:
     * <code>
     * $query->filterByWeight(1234); // WHERE weight = 1234
     * $query->filterByWeight(array(12, 34)); // WHERE weight IN (12, 34)
     * $query->filterByWeight(array('min' => 12)); // WHERE weight > 12
     * </code>
     *
     * @param     mixed $weight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByWeight($weight = null, $comparison = null)
    {
        if (is_array($weight)) {
            $useMinMax = false;
            if (isset($weight['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weight['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_WEIGHT, $weight, $comparison);
    }

    /**
     * Filter the query on the length column
     *
     * Example usage:
     * <code>
     * $query->filterByLength(1234); // WHERE length = 1234
     * $query->filterByLength(array(12, 34)); // WHERE length IN (12, 34)
     * $query->filterByLength(array('min' => 12)); // WHERE length > 12
     * </code>
     *
     * @param     mixed $length The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByLength($length = null, $comparison = null)
    {
        if (is_array($length)) {
            $useMinMax = false;
            if (isset($length['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_LENGTH, $length['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($length['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_LENGTH, $length['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_LENGTH, $length, $comparison);
    }

    /**
     * Filter the query on the head_circumference column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadCircumference(1234); // WHERE head_circumference = 1234
     * $query->filterByHeadCircumference(array(12, 34)); // WHERE head_circumference IN (12, 34)
     * $query->filterByHeadCircumference(array('min' => 12)); // WHERE head_circumference > 12
     * </code>
     *
     * @param     mixed $headCircumference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByHeadCircumference($headCircumference = null, $comparison = null)
    {
        if (is_array($headCircumference)) {
            $useMinMax = false;
            if (isset($headCircumference['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_HEAD_CIRCUMFERENCE, $headCircumference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headCircumference['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_HEAD_CIRCUMFERENCE, $headCircumference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_HEAD_CIRCUMFERENCE, $headCircumference, $comparison);
    }

    /**
     * Filter the query on the scored_gestational_age column
     *
     * Example usage:
     * <code>
     * $query->filterByScoredGestationalAge(1234); // WHERE scored_gestational_age = 1234
     * $query->filterByScoredGestationalAge(array(12, 34)); // WHERE scored_gestational_age IN (12, 34)
     * $query->filterByScoredGestationalAge(array('min' => 12)); // WHERE scored_gestational_age > 12
     * </code>
     *
     * @param     mixed $scoredGestationalAge The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByScoredGestationalAge($scoredGestationalAge = null, $comparison = null)
    {
        if (is_array($scoredGestationalAge)) {
            $useMinMax = false;
            if (isset($scoredGestationalAge['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_SCORED_GESTATIONAL_AGE, $scoredGestationalAge['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scoredGestationalAge['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_SCORED_GESTATIONAL_AGE, $scoredGestationalAge['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_SCORED_GESTATIONAL_AGE, $scoredGestationalAge, $comparison);
    }

    /**
     * Filter the query on the feeding column
     *
     * Example usage:
     * <code>
     * $query->filterByFeeding(1234); // WHERE feeding = 1234
     * $query->filterByFeeding(array(12, 34)); // WHERE feeding IN (12, 34)
     * $query->filterByFeeding(array('min' => 12)); // WHERE feeding > 12
     * </code>
     *
     * @param     mixed $feeding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByFeeding($feeding = null, $comparison = null)
    {
        if (is_array($feeding)) {
            $useMinMax = false;
            if (isset($feeding['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_FEEDING, $feeding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feeding['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_FEEDING, $feeding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_FEEDING, $feeding, $comparison);
    }

    /**
     * Filter the query on the congenital_abnormality column
     *
     * Example usage:
     * <code>
     * $query->filterByCongenitalAbnormality('fooValue');   // WHERE congenital_abnormality = 'fooValue'
     * $query->filterByCongenitalAbnormality('%fooValue%', Criteria::LIKE); // WHERE congenital_abnormality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $congenitalAbnormality The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByCongenitalAbnormality($congenitalAbnormality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($congenitalAbnormality)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_CONGENITAL_ABNORMALITY, $congenitalAbnormality, $comparison);
    }

    /**
     * Filter the query on the classification column
     *
     * Example usage:
     * <code>
     * $query->filterByClassification('fooValue');   // WHERE classification = 'fooValue'
     * $query->filterByClassification('%fooValue%', Criteria::LIKE); // WHERE classification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $classification The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByClassification($classification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($classification)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_CLASSIFICATION, $classification, $comparison);
    }

    /**
     * Filter the query on the disease_category column
     *
     * Example usage:
     * <code>
     * $query->filterByDiseaseCategory(1234); // WHERE disease_category = 1234
     * $query->filterByDiseaseCategory(array(12, 34)); // WHERE disease_category IN (12, 34)
     * $query->filterByDiseaseCategory(array('min' => 12)); // WHERE disease_category > 12
     * </code>
     *
     * @param     mixed $diseaseCategory The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByDiseaseCategory($diseaseCategory = null, $comparison = null)
    {
        if (is_array($diseaseCategory)) {
            $useMinMax = false;
            if (isset($diseaseCategory['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_DISEASE_CATEGORY, $diseaseCategory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diseaseCategory['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_DISEASE_CATEGORY, $diseaseCategory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_DISEASE_CATEGORY, $diseaseCategory, $comparison);
    }

    /**
     * Filter the query on the outcome column
     *
     * Example usage:
     * <code>
     * $query->filterByOutcome(1234); // WHERE outcome = 1234
     * $query->filterByOutcome(array(12, 34)); // WHERE outcome IN (12, 34)
     * $query->filterByOutcome(array('min' => 12)); // WHERE outcome > 12
     * </code>
     *
     * @param     mixed $outcome The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByOutcome($outcome = null, $comparison = null)
    {
        if (is_array($outcome)) {
            $useMinMax = false;
            if (isset($outcome['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_OUTCOME, $outcome['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($outcome['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_OUTCOME, $outcome['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_OUTCOME, $outcome, $comparison);
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
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareNeonatalTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNeonatalTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareNeonatal $careNeonatal Object to remove from the list of results
     *
     * @return $this|ChildCareNeonatalQuery The current query, for fluid interface
     */
    public function prune($careNeonatal = null)
    {
        if ($careNeonatal) {
            $this->addUsingAlias(CareNeonatalTableMap::COL_NR, $careNeonatal->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_neonatal table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareNeonatalTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareNeonatalTableMap::clearInstancePool();
            CareNeonatalTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareNeonatalTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareNeonatalTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareNeonatalTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareNeonatalTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareNeonatalQuery
