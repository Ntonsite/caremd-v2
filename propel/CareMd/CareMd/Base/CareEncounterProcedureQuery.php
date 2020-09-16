<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterProcedure as ChildCareEncounterProcedure;
use CareMd\CareMd\CareEncounterProcedureQuery as ChildCareEncounterProcedureQuery;
use CareMd\CareMd\Map\CareEncounterProcedureTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_procedure' table.
 *
 *
 *
 * @method     ChildCareEncounterProcedureQuery orderByProcedureNr($order = Criteria::ASC) Order by the procedure_nr column
 * @method     ChildCareEncounterProcedureQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterProcedureQuery orderByOpNr($order = Criteria::ASC) Order by the op_nr column
 * @method     ChildCareEncounterProcedureQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCareEncounterProcedureQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCareEncounterProcedureQuery orderByCodeParent($order = Criteria::ASC) Order by the code_parent column
 * @method     ChildCareEncounterProcedureQuery orderByGroupNr($order = Criteria::ASC) Order by the group_nr column
 * @method     ChildCareEncounterProcedureQuery orderByCodeVersion($order = Criteria::ASC) Order by the code_version column
 * @method     ChildCareEncounterProcedureQuery orderByLocalcode($order = Criteria::ASC) Order by the localcode column
 * @method     ChildCareEncounterProcedureQuery orderByCategoryNr($order = Criteria::ASC) Order by the category_nr column
 * @method     ChildCareEncounterProcedureQuery orderByLocalization($order = Criteria::ASC) Order by the localization column
 * @method     ChildCareEncounterProcedureQuery orderByResponsibleClinician($order = Criteria::ASC) Order by the responsible_clinician column
 * @method     ChildCareEncounterProcedureQuery orderByResponsibleDeptNr($order = Criteria::ASC) Order by the responsible_dept_nr column
 * @method     ChildCareEncounterProcedureQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterProcedureQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterProcedureQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterProcedureQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterProcedureQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterProcedureQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareEncounterProcedureQuery groupByProcedureNr() Group by the procedure_nr column
 * @method     ChildCareEncounterProcedureQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterProcedureQuery groupByOpNr() Group by the op_nr column
 * @method     ChildCareEncounterProcedureQuery groupByDate() Group by the date column
 * @method     ChildCareEncounterProcedureQuery groupByCode() Group by the code column
 * @method     ChildCareEncounterProcedureQuery groupByCodeParent() Group by the code_parent column
 * @method     ChildCareEncounterProcedureQuery groupByGroupNr() Group by the group_nr column
 * @method     ChildCareEncounterProcedureQuery groupByCodeVersion() Group by the code_version column
 * @method     ChildCareEncounterProcedureQuery groupByLocalcode() Group by the localcode column
 * @method     ChildCareEncounterProcedureQuery groupByCategoryNr() Group by the category_nr column
 * @method     ChildCareEncounterProcedureQuery groupByLocalization() Group by the localization column
 * @method     ChildCareEncounterProcedureQuery groupByResponsibleClinician() Group by the responsible_clinician column
 * @method     ChildCareEncounterProcedureQuery groupByResponsibleDeptNr() Group by the responsible_dept_nr column
 * @method     ChildCareEncounterProcedureQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterProcedureQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterProcedureQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterProcedureQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterProcedureQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterProcedureQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareEncounterProcedureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterProcedureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterProcedureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterProcedureQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterProcedureQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterProcedureQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterProcedure findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterProcedure matching the query
 * @method     ChildCareEncounterProcedure findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterProcedure matching the query, or a new ChildCareEncounterProcedure object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterProcedure findOneByProcedureNr(int $procedure_nr) Return the first ChildCareEncounterProcedure filtered by the procedure_nr column
 * @method     ChildCareEncounterProcedure findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterProcedure filtered by the encounter_nr column
 * @method     ChildCareEncounterProcedure findOneByOpNr(int $op_nr) Return the first ChildCareEncounterProcedure filtered by the op_nr column
 * @method     ChildCareEncounterProcedure findOneByDate(string $date) Return the first ChildCareEncounterProcedure filtered by the date column
 * @method     ChildCareEncounterProcedure findOneByCode(string $code) Return the first ChildCareEncounterProcedure filtered by the code column
 * @method     ChildCareEncounterProcedure findOneByCodeParent(string $code_parent) Return the first ChildCareEncounterProcedure filtered by the code_parent column
 * @method     ChildCareEncounterProcedure findOneByGroupNr(int $group_nr) Return the first ChildCareEncounterProcedure filtered by the group_nr column
 * @method     ChildCareEncounterProcedure findOneByCodeVersion(int $code_version) Return the first ChildCareEncounterProcedure filtered by the code_version column
 * @method     ChildCareEncounterProcedure findOneByLocalcode(string $localcode) Return the first ChildCareEncounterProcedure filtered by the localcode column
 * @method     ChildCareEncounterProcedure findOneByCategoryNr(int $category_nr) Return the first ChildCareEncounterProcedure filtered by the category_nr column
 * @method     ChildCareEncounterProcedure findOneByLocalization(string $localization) Return the first ChildCareEncounterProcedure filtered by the localization column
 * @method     ChildCareEncounterProcedure findOneByResponsibleClinician(string $responsible_clinician) Return the first ChildCareEncounterProcedure filtered by the responsible_clinician column
 * @method     ChildCareEncounterProcedure findOneByResponsibleDeptNr(int $responsible_dept_nr) Return the first ChildCareEncounterProcedure filtered by the responsible_dept_nr column
 * @method     ChildCareEncounterProcedure findOneByStatus(string $status) Return the first ChildCareEncounterProcedure filtered by the status column
 * @method     ChildCareEncounterProcedure findOneByHistory(string $history) Return the first ChildCareEncounterProcedure filtered by the history column
 * @method     ChildCareEncounterProcedure findOneByModifyId(string $modify_id) Return the first ChildCareEncounterProcedure filtered by the modify_id column
 * @method     ChildCareEncounterProcedure findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterProcedure filtered by the modify_time column
 * @method     ChildCareEncounterProcedure findOneByCreateId(string $create_id) Return the first ChildCareEncounterProcedure filtered by the create_id column
 * @method     ChildCareEncounterProcedure findOneByCreateTime(string $create_time) Return the first ChildCareEncounterProcedure filtered by the create_time column *

 * @method     ChildCareEncounterProcedure requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterProcedure by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterProcedure matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterProcedure requireOneByProcedureNr(int $procedure_nr) Return the first ChildCareEncounterProcedure filtered by the procedure_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterProcedure filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByOpNr(int $op_nr) Return the first ChildCareEncounterProcedure filtered by the op_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByDate(string $date) Return the first ChildCareEncounterProcedure filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByCode(string $code) Return the first ChildCareEncounterProcedure filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByCodeParent(string $code_parent) Return the first ChildCareEncounterProcedure filtered by the code_parent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByGroupNr(int $group_nr) Return the first ChildCareEncounterProcedure filtered by the group_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByCodeVersion(int $code_version) Return the first ChildCareEncounterProcedure filtered by the code_version column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByLocalcode(string $localcode) Return the first ChildCareEncounterProcedure filtered by the localcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByCategoryNr(int $category_nr) Return the first ChildCareEncounterProcedure filtered by the category_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByLocalization(string $localization) Return the first ChildCareEncounterProcedure filtered by the localization column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByResponsibleClinician(string $responsible_clinician) Return the first ChildCareEncounterProcedure filtered by the responsible_clinician column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByResponsibleDeptNr(int $responsible_dept_nr) Return the first ChildCareEncounterProcedure filtered by the responsible_dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByStatus(string $status) Return the first ChildCareEncounterProcedure filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByHistory(string $history) Return the first ChildCareEncounterProcedure filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterProcedure filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterProcedure filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByCreateId(string $create_id) Return the first ChildCareEncounterProcedure filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterProcedure requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterProcedure filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterProcedure[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterProcedure objects based on current ModelCriteria
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByProcedureNr(int $procedure_nr) Return ChildCareEncounterProcedure objects filtered by the procedure_nr column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterProcedure objects filtered by the encounter_nr column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByOpNr(int $op_nr) Return ChildCareEncounterProcedure objects filtered by the op_nr column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByDate(string $date) Return ChildCareEncounterProcedure objects filtered by the date column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByCode(string $code) Return ChildCareEncounterProcedure objects filtered by the code column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByCodeParent(string $code_parent) Return ChildCareEncounterProcedure objects filtered by the code_parent column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByGroupNr(int $group_nr) Return ChildCareEncounterProcedure objects filtered by the group_nr column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByCodeVersion(int $code_version) Return ChildCareEncounterProcedure objects filtered by the code_version column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByLocalcode(string $localcode) Return ChildCareEncounterProcedure objects filtered by the localcode column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByCategoryNr(int $category_nr) Return ChildCareEncounterProcedure objects filtered by the category_nr column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByLocalization(string $localization) Return ChildCareEncounterProcedure objects filtered by the localization column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByResponsibleClinician(string $responsible_clinician) Return ChildCareEncounterProcedure objects filtered by the responsible_clinician column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByResponsibleDeptNr(int $responsible_dept_nr) Return ChildCareEncounterProcedure objects filtered by the responsible_dept_nr column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterProcedure objects filtered by the status column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterProcedure objects filtered by the history column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterProcedure objects filtered by the modify_id column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterProcedure objects filtered by the modify_time column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterProcedure objects filtered by the create_id column
 * @method     ChildCareEncounterProcedure[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterProcedure objects filtered by the create_time column
 * @method     ChildCareEncounterProcedure[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterProcedureQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterProcedureQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterProcedure', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterProcedureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterProcedureQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterProcedureQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterProcedureQuery();
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
     * @return ChildCareEncounterProcedure|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterProcedureTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterProcedureTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterProcedure A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT procedure_nr, encounter_nr, op_nr, date, code, code_parent, group_nr, code_version, localcode, category_nr, localization, responsible_clinician, responsible_dept_nr, status, history, modify_id, modify_time, create_id, create_time FROM care_encounter_procedure WHERE procedure_nr = :p0';
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
            /** @var ChildCareEncounterProcedure $obj */
            $obj = new ChildCareEncounterProcedure();
            $obj->hydrate($row);
            CareEncounterProcedureTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterProcedure|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_PROCEDURE_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_PROCEDURE_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the procedure_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByProcedureNr(1234); // WHERE procedure_nr = 1234
     * $query->filterByProcedureNr(array(12, 34)); // WHERE procedure_nr IN (12, 34)
     * $query->filterByProcedureNr(array('min' => 12)); // WHERE procedure_nr > 12
     * </code>
     *
     * @param     mixed $procedureNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByProcedureNr($procedureNr = null, $comparison = null)
    {
        if (is_array($procedureNr)) {
            $useMinMax = false;
            if (isset($procedureNr['min'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_PROCEDURE_NR, $procedureNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($procedureNr['max'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_PROCEDURE_NR, $procedureNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_PROCEDURE_NR, $procedureNr, $comparison);
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
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
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
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByOpNr($opNr = null, $comparison = null)
    {
        if (is_array($opNr)) {
            $useMinMax = false;
            if (isset($opNr['min'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_OP_NR, $opNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opNr['max'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_OP_NR, $opNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_OP_NR, $opNr, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%', Criteria::LIKE); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_CODE, $code, $comparison);
    }

    /**
     * Filter the query on the code_parent column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeParent('fooValue');   // WHERE code_parent = 'fooValue'
     * $query->filterByCodeParent('%fooValue%', Criteria::LIKE); // WHERE code_parent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeParent The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByCodeParent($codeParent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeParent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_CODE_PARENT, $codeParent, $comparison);
    }

    /**
     * Filter the query on the group_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupNr(1234); // WHERE group_nr = 1234
     * $query->filterByGroupNr(array(12, 34)); // WHERE group_nr IN (12, 34)
     * $query->filterByGroupNr(array('min' => 12)); // WHERE group_nr > 12
     * </code>
     *
     * @param     mixed $groupNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByGroupNr($groupNr = null, $comparison = null)
    {
        if (is_array($groupNr)) {
            $useMinMax = false;
            if (isset($groupNr['min'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_GROUP_NR, $groupNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($groupNr['max'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_GROUP_NR, $groupNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_GROUP_NR, $groupNr, $comparison);
    }

    /**
     * Filter the query on the code_version column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeVersion(1234); // WHERE code_version = 1234
     * $query->filterByCodeVersion(array(12, 34)); // WHERE code_version IN (12, 34)
     * $query->filterByCodeVersion(array('min' => 12)); // WHERE code_version > 12
     * </code>
     *
     * @param     mixed $codeVersion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByCodeVersion($codeVersion = null, $comparison = null)
    {
        if (is_array($codeVersion)) {
            $useMinMax = false;
            if (isset($codeVersion['min'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_CODE_VERSION, $codeVersion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codeVersion['max'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_CODE_VERSION, $codeVersion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_CODE_VERSION, $codeVersion, $comparison);
    }

    /**
     * Filter the query on the localcode column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalcode('fooValue');   // WHERE localcode = 'fooValue'
     * $query->filterByLocalcode('%fooValue%', Criteria::LIKE); // WHERE localcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByLocalcode($localcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_LOCALCODE, $localcode, $comparison);
    }

    /**
     * Filter the query on the category_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoryNr(1234); // WHERE category_nr = 1234
     * $query->filterByCategoryNr(array(12, 34)); // WHERE category_nr IN (12, 34)
     * $query->filterByCategoryNr(array('min' => 12)); // WHERE category_nr > 12
     * </code>
     *
     * @param     mixed $categoryNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByCategoryNr($categoryNr = null, $comparison = null)
    {
        if (is_array($categoryNr)) {
            $useMinMax = false;
            if (isset($categoryNr['min'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_CATEGORY_NR, $categoryNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categoryNr['max'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_CATEGORY_NR, $categoryNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_CATEGORY_NR, $categoryNr, $comparison);
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
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByLocalization($localization = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localization)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_LOCALIZATION, $localization, $comparison);
    }

    /**
     * Filter the query on the responsible_clinician column
     *
     * Example usage:
     * <code>
     * $query->filterByResponsibleClinician('fooValue');   // WHERE responsible_clinician = 'fooValue'
     * $query->filterByResponsibleClinician('%fooValue%', Criteria::LIKE); // WHERE responsible_clinician LIKE '%fooValue%'
     * </code>
     *
     * @param     string $responsibleClinician The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByResponsibleClinician($responsibleClinician = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($responsibleClinician)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_RESPONSIBLE_CLINICIAN, $responsibleClinician, $comparison);
    }

    /**
     * Filter the query on the responsible_dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByResponsibleDeptNr(1234); // WHERE responsible_dept_nr = 1234
     * $query->filterByResponsibleDeptNr(array(12, 34)); // WHERE responsible_dept_nr IN (12, 34)
     * $query->filterByResponsibleDeptNr(array('min' => 12)); // WHERE responsible_dept_nr > 12
     * </code>
     *
     * @param     mixed $responsibleDeptNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByResponsibleDeptNr($responsibleDeptNr = null, $comparison = null)
    {
        if (is_array($responsibleDeptNr)) {
            $useMinMax = false;
            if (isset($responsibleDeptNr['min'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_RESPONSIBLE_DEPT_NR, $responsibleDeptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($responsibleDeptNr['max'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_RESPONSIBLE_DEPT_NR, $responsibleDeptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_RESPONSIBLE_DEPT_NR, $responsibleDeptNr, $comparison);
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
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterProcedureTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterProcedureTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterProcedure $careEncounterProcedure Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterProcedureQuery The current query, for fluid interface
     */
    public function prune($careEncounterProcedure = null)
    {
        if ($careEncounterProcedure) {
            $this->addUsingAlias(CareEncounterProcedureTableMap::COL_PROCEDURE_NR, $careEncounterProcedure->getProcedureNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_procedure table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterProcedureTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterProcedureTableMap::clearInstancePool();
            CareEncounterProcedureTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterProcedureTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterProcedureTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterProcedureTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterProcedureTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterProcedureQuery
