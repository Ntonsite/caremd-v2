<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTypeImmunization as ChildCareTypeImmunization;
use CareMd\CareMd\CareTypeImmunizationQuery as ChildCareTypeImmunizationQuery;
use CareMd\CareMd\Map\CareTypeImmunizationTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_type_immunization' table.
 *
 *
 *
 * @method     ChildCareTypeImmunizationQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareTypeImmunizationQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCareTypeImmunizationQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTypeImmunizationQuery orderByLdVar($order = Criteria::ASC) Order by the LD_var column
 * @method     ChildCareTypeImmunizationQuery orderByPeriod($order = Criteria::ASC) Order by the period column
 * @method     ChildCareTypeImmunizationQuery orderByTolerance($order = Criteria::ASC) Order by the tolerance column
 * @method     ChildCareTypeImmunizationQuery orderByDosage($order = Criteria::ASC) Order by the dosage column
 * @method     ChildCareTypeImmunizationQuery orderByMedicine($order = Criteria::ASC) Order by the medicine column
 * @method     ChildCareTypeImmunizationQuery orderByTiter($order = Criteria::ASC) Order by the titer column
 * @method     ChildCareTypeImmunizationQuery orderByNote($order = Criteria::ASC) Order by the note column
 * @method     ChildCareTypeImmunizationQuery orderByApplication($order = Criteria::ASC) Order by the application column
 * @method     ChildCareTypeImmunizationQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareTypeImmunizationQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareTypeImmunizationQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTypeImmunizationQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareTypeImmunizationQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTypeImmunizationQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareTypeImmunizationQuery groupByNr() Group by the nr column
 * @method     ChildCareTypeImmunizationQuery groupByType() Group by the type column
 * @method     ChildCareTypeImmunizationQuery groupByName() Group by the name column
 * @method     ChildCareTypeImmunizationQuery groupByLdVar() Group by the LD_var column
 * @method     ChildCareTypeImmunizationQuery groupByPeriod() Group by the period column
 * @method     ChildCareTypeImmunizationQuery groupByTolerance() Group by the tolerance column
 * @method     ChildCareTypeImmunizationQuery groupByDosage() Group by the dosage column
 * @method     ChildCareTypeImmunizationQuery groupByMedicine() Group by the medicine column
 * @method     ChildCareTypeImmunizationQuery groupByTiter() Group by the titer column
 * @method     ChildCareTypeImmunizationQuery groupByNote() Group by the note column
 * @method     ChildCareTypeImmunizationQuery groupByApplication() Group by the application column
 * @method     ChildCareTypeImmunizationQuery groupByStatus() Group by the status column
 * @method     ChildCareTypeImmunizationQuery groupByHistory() Group by the history column
 * @method     ChildCareTypeImmunizationQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTypeImmunizationQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareTypeImmunizationQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTypeImmunizationQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareTypeImmunizationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTypeImmunizationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTypeImmunizationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTypeImmunizationQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTypeImmunizationQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTypeImmunizationQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTypeImmunization findOne(ConnectionInterface $con = null) Return the first ChildCareTypeImmunization matching the query
 * @method     ChildCareTypeImmunization findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTypeImmunization matching the query, or a new ChildCareTypeImmunization object populated from the query conditions when no match is found
 *
 * @method     ChildCareTypeImmunization findOneByNr(int $nr) Return the first ChildCareTypeImmunization filtered by the nr column
 * @method     ChildCareTypeImmunization findOneByType(string $type) Return the first ChildCareTypeImmunization filtered by the type column
 * @method     ChildCareTypeImmunization findOneByName(string $name) Return the first ChildCareTypeImmunization filtered by the name column
 * @method     ChildCareTypeImmunization findOneByLdVar(string $LD_var) Return the first ChildCareTypeImmunization filtered by the LD_var column
 * @method     ChildCareTypeImmunization findOneByPeriod(int $period) Return the first ChildCareTypeImmunization filtered by the period column
 * @method     ChildCareTypeImmunization findOneByTolerance(int $tolerance) Return the first ChildCareTypeImmunization filtered by the tolerance column
 * @method     ChildCareTypeImmunization findOneByDosage(string $dosage) Return the first ChildCareTypeImmunization filtered by the dosage column
 * @method     ChildCareTypeImmunization findOneByMedicine(string $medicine) Return the first ChildCareTypeImmunization filtered by the medicine column
 * @method     ChildCareTypeImmunization findOneByTiter(string $titer) Return the first ChildCareTypeImmunization filtered by the titer column
 * @method     ChildCareTypeImmunization findOneByNote(string $note) Return the first ChildCareTypeImmunization filtered by the note column
 * @method     ChildCareTypeImmunization findOneByApplication(int $application) Return the first ChildCareTypeImmunization filtered by the application column
 * @method     ChildCareTypeImmunization findOneByStatus(string $status) Return the first ChildCareTypeImmunization filtered by the status column
 * @method     ChildCareTypeImmunization findOneByHistory(string $history) Return the first ChildCareTypeImmunization filtered by the history column
 * @method     ChildCareTypeImmunization findOneByModifyId(string $modify_id) Return the first ChildCareTypeImmunization filtered by the modify_id column
 * @method     ChildCareTypeImmunization findOneByModifyTime(string $modify_time) Return the first ChildCareTypeImmunization filtered by the modify_time column
 * @method     ChildCareTypeImmunization findOneByCreateId(string $create_id) Return the first ChildCareTypeImmunization filtered by the create_id column
 * @method     ChildCareTypeImmunization findOneByCreateTime(string $create_time) Return the first ChildCareTypeImmunization filtered by the create_time column *

 * @method     ChildCareTypeImmunization requirePk($key, ConnectionInterface $con = null) Return the ChildCareTypeImmunization by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOne(ConnectionInterface $con = null) Return the first ChildCareTypeImmunization matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTypeImmunization requireOneByNr(int $nr) Return the first ChildCareTypeImmunization filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByType(string $type) Return the first ChildCareTypeImmunization filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByName(string $name) Return the first ChildCareTypeImmunization filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByLdVar(string $LD_var) Return the first ChildCareTypeImmunization filtered by the LD_var column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByPeriod(int $period) Return the first ChildCareTypeImmunization filtered by the period column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByTolerance(int $tolerance) Return the first ChildCareTypeImmunization filtered by the tolerance column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByDosage(string $dosage) Return the first ChildCareTypeImmunization filtered by the dosage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByMedicine(string $medicine) Return the first ChildCareTypeImmunization filtered by the medicine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByTiter(string $titer) Return the first ChildCareTypeImmunization filtered by the titer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByNote(string $note) Return the first ChildCareTypeImmunization filtered by the note column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByApplication(int $application) Return the first ChildCareTypeImmunization filtered by the application column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByStatus(string $status) Return the first ChildCareTypeImmunization filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByHistory(string $history) Return the first ChildCareTypeImmunization filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByModifyId(string $modify_id) Return the first ChildCareTypeImmunization filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByModifyTime(string $modify_time) Return the first ChildCareTypeImmunization filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByCreateId(string $create_id) Return the first ChildCareTypeImmunization filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTypeImmunization requireOneByCreateTime(string $create_time) Return the first ChildCareTypeImmunization filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTypeImmunization[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTypeImmunization objects based on current ModelCriteria
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByNr(int $nr) Return ChildCareTypeImmunization objects filtered by the nr column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByType(string $type) Return ChildCareTypeImmunization objects filtered by the type column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByName(string $name) Return ChildCareTypeImmunization objects filtered by the name column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByLdVar(string $LD_var) Return ChildCareTypeImmunization objects filtered by the LD_var column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByPeriod(int $period) Return ChildCareTypeImmunization objects filtered by the period column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByTolerance(int $tolerance) Return ChildCareTypeImmunization objects filtered by the tolerance column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByDosage(string $dosage) Return ChildCareTypeImmunization objects filtered by the dosage column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByMedicine(string $medicine) Return ChildCareTypeImmunization objects filtered by the medicine column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByTiter(string $titer) Return ChildCareTypeImmunization objects filtered by the titer column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByNote(string $note) Return ChildCareTypeImmunization objects filtered by the note column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByApplication(int $application) Return ChildCareTypeImmunization objects filtered by the application column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByStatus(string $status) Return ChildCareTypeImmunization objects filtered by the status column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByHistory(string $history) Return ChildCareTypeImmunization objects filtered by the history column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTypeImmunization objects filtered by the modify_id column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareTypeImmunization objects filtered by the modify_time column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTypeImmunization objects filtered by the create_id column
 * @method     ChildCareTypeImmunization[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareTypeImmunization objects filtered by the create_time column
 * @method     ChildCareTypeImmunization[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTypeImmunizationQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTypeImmunizationQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTypeImmunization', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTypeImmunizationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTypeImmunizationQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTypeImmunizationQuery) {
            return $criteria;
        }
        $query = new ChildCareTypeImmunizationQuery();
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
     * @return ChildCareTypeImmunization|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTypeImmunizationTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTypeImmunizationTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTypeImmunization A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, type, name, LD_var, period, tolerance, dosage, medicine, titer, note, application, status, history, modify_id, modify_time, create_id, create_time FROM care_type_immunization WHERE nr = :p0';
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
            /** @var ChildCareTypeImmunization $obj */
            $obj = new ChildCareTypeImmunization();
            $obj->hydrate($row);
            CareTypeImmunizationTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTypeImmunization|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareTypeImmunizationTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareTypeImmunizationTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%', Criteria::LIKE); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_TYPE, $type, $comparison);
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
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the LD_var column
     *
     * Example usage:
     * <code>
     * $query->filterByLdVar('fooValue');   // WHERE LD_var = 'fooValue'
     * $query->filterByLdVar('%fooValue%', Criteria::LIKE); // WHERE LD_var LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ldVar The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByLdVar($ldVar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ldVar)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_LD_VAR, $ldVar, $comparison);
    }

    /**
     * Filter the query on the period column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriod(1234); // WHERE period = 1234
     * $query->filterByPeriod(array(12, 34)); // WHERE period IN (12, 34)
     * $query->filterByPeriod(array('min' => 12)); // WHERE period > 12
     * </code>
     *
     * @param     mixed $period The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByPeriod($period = null, $comparison = null)
    {
        if (is_array($period)) {
            $useMinMax = false;
            if (isset($period['min'])) {
                $this->addUsingAlias(CareTypeImmunizationTableMap::COL_PERIOD, $period['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($period['max'])) {
                $this->addUsingAlias(CareTypeImmunizationTableMap::COL_PERIOD, $period['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_PERIOD, $period, $comparison);
    }

    /**
     * Filter the query on the tolerance column
     *
     * Example usage:
     * <code>
     * $query->filterByTolerance(1234); // WHERE tolerance = 1234
     * $query->filterByTolerance(array(12, 34)); // WHERE tolerance IN (12, 34)
     * $query->filterByTolerance(array('min' => 12)); // WHERE tolerance > 12
     * </code>
     *
     * @param     mixed $tolerance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByTolerance($tolerance = null, $comparison = null)
    {
        if (is_array($tolerance)) {
            $useMinMax = false;
            if (isset($tolerance['min'])) {
                $this->addUsingAlias(CareTypeImmunizationTableMap::COL_TOLERANCE, $tolerance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tolerance['max'])) {
                $this->addUsingAlias(CareTypeImmunizationTableMap::COL_TOLERANCE, $tolerance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_TOLERANCE, $tolerance, $comparison);
    }

    /**
     * Filter the query on the dosage column
     *
     * Example usage:
     * <code>
     * $query->filterByDosage('fooValue');   // WHERE dosage = 'fooValue'
     * $query->filterByDosage('%fooValue%', Criteria::LIKE); // WHERE dosage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dosage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByDosage($dosage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dosage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_DOSAGE, $dosage, $comparison);
    }

    /**
     * Filter the query on the medicine column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicine('fooValue');   // WHERE medicine = 'fooValue'
     * $query->filterByMedicine('%fooValue%', Criteria::LIKE); // WHERE medicine LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicine The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByMedicine($medicine = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicine)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_MEDICINE, $medicine, $comparison);
    }

    /**
     * Filter the query on the titer column
     *
     * Example usage:
     * <code>
     * $query->filterByTiter('fooValue');   // WHERE titer = 'fooValue'
     * $query->filterByTiter('%fooValue%', Criteria::LIKE); // WHERE titer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titer The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByTiter($titer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titer)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_TITER, $titer, $comparison);
    }

    /**
     * Filter the query on the note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote('fooValue');   // WHERE note = 'fooValue'
     * $query->filterByNote('%fooValue%', Criteria::LIKE); // WHERE note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $note The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByNote($note = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($note)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_NOTE, $note, $comparison);
    }

    /**
     * Filter the query on the application column
     *
     * Example usage:
     * <code>
     * $query->filterByApplication(1234); // WHERE application = 1234
     * $query->filterByApplication(array(12, 34)); // WHERE application IN (12, 34)
     * $query->filterByApplication(array('min' => 12)); // WHERE application > 12
     * </code>
     *
     * @param     mixed $application The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByApplication($application = null, $comparison = null)
    {
        if (is_array($application)) {
            $useMinMax = false;
            if (isset($application['min'])) {
                $this->addUsingAlias(CareTypeImmunizationTableMap::COL_APPLICATION, $application['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($application['max'])) {
                $this->addUsingAlias(CareTypeImmunizationTableMap::COL_APPLICATION, $application['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_APPLICATION, $application, $comparison);
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
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareTypeImmunizationTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareTypeImmunizationTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareTypeImmunizationTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareTypeImmunizationTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTypeImmunizationTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTypeImmunization $careTypeImmunization Object to remove from the list of results
     *
     * @return $this|ChildCareTypeImmunizationQuery The current query, for fluid interface
     */
    public function prune($careTypeImmunization = null)
    {
        if ($careTypeImmunization) {
            $this->addUsingAlias(CareTypeImmunizationTableMap::COL_NR, $careTypeImmunization->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_type_immunization table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTypeImmunizationTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTypeImmunizationTableMap::clearInstancePool();
            CareTypeImmunizationTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTypeImmunizationTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTypeImmunizationTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTypeImmunizationTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTypeImmunizationTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTypeImmunizationQuery
