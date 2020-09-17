<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzBillingSpecial as ChildCareTzBillingSpecial;
use CareMd\CareMd\CareTzBillingSpecialQuery as ChildCareTzBillingSpecialQuery;
use CareMd\CareMd\Map\CareTzBillingSpecialTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_billing_special' table.
 *
 *
 *
 * @method     ChildCareTzBillingSpecialQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTzBillingSpecialQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTzBillingSpecialQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCareTzBillingSpecialQuery orderByFullname($order = Criteria::ASC) Order by the fullname column
 * @method     ChildCareTzBillingSpecialQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareTzBillingSpecialQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCareTzBillingSpecialQuery orderByRemain($order = Criteria::ASC) Order by the remain column
 * @method     ChildCareTzBillingSpecialQuery orderByTotal($order = Criteria::ASC) Order by the total column
 * @method     ChildCareTzBillingSpecialQuery orderByBillno($order = Criteria::ASC) Order by the billno column
 * @method     ChildCareTzBillingSpecialQuery orderByPaid($order = Criteria::ASC) Order by the paid column
 *
 * @method     ChildCareTzBillingSpecialQuery groupById() Group by the id column
 * @method     ChildCareTzBillingSpecialQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTzBillingSpecialQuery groupByDate() Group by the date column
 * @method     ChildCareTzBillingSpecialQuery groupByFullname() Group by the fullname column
 * @method     ChildCareTzBillingSpecialQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareTzBillingSpecialQuery groupByType() Group by the type column
 * @method     ChildCareTzBillingSpecialQuery groupByRemain() Group by the remain column
 * @method     ChildCareTzBillingSpecialQuery groupByTotal() Group by the total column
 * @method     ChildCareTzBillingSpecialQuery groupByBillno() Group by the billno column
 * @method     ChildCareTzBillingSpecialQuery groupByPaid() Group by the paid column
 *
 * @method     ChildCareTzBillingSpecialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzBillingSpecialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzBillingSpecialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzBillingSpecialQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzBillingSpecialQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzBillingSpecialQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzBillingSpecial findOne(ConnectionInterface $con = null) Return the first ChildCareTzBillingSpecial matching the query
 * @method     ChildCareTzBillingSpecial findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzBillingSpecial matching the query, or a new ChildCareTzBillingSpecial object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzBillingSpecial findOneById(int $id) Return the first ChildCareTzBillingSpecial filtered by the id column
 * @method     ChildCareTzBillingSpecial findOneByEncounterNr(string $encounter_nr) Return the first ChildCareTzBillingSpecial filtered by the encounter_nr column
 * @method     ChildCareTzBillingSpecial findOneByDate(string $date) Return the first ChildCareTzBillingSpecial filtered by the date column
 * @method     ChildCareTzBillingSpecial findOneByFullname(string $fullname) Return the first ChildCareTzBillingSpecial filtered by the fullname column
 * @method     ChildCareTzBillingSpecial findOneByDeptNr(string $dept_nr) Return the first ChildCareTzBillingSpecial filtered by the dept_nr column
 * @method     ChildCareTzBillingSpecial findOneByType(string $type) Return the first ChildCareTzBillingSpecial filtered by the type column
 * @method     ChildCareTzBillingSpecial findOneByRemain(double $remain) Return the first ChildCareTzBillingSpecial filtered by the remain column
 * @method     ChildCareTzBillingSpecial findOneByTotal(double $total) Return the first ChildCareTzBillingSpecial filtered by the total column
 * @method     ChildCareTzBillingSpecial findOneByBillno(string $billno) Return the first ChildCareTzBillingSpecial filtered by the billno column
 * @method     ChildCareTzBillingSpecial findOneByPaid(double $paid) Return the first ChildCareTzBillingSpecial filtered by the paid column *

 * @method     ChildCareTzBillingSpecial requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzBillingSpecial by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingSpecial requireOne(ConnectionInterface $con = null) Return the first ChildCareTzBillingSpecial matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzBillingSpecial requireOneById(int $id) Return the first ChildCareTzBillingSpecial filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingSpecial requireOneByEncounterNr(string $encounter_nr) Return the first ChildCareTzBillingSpecial filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingSpecial requireOneByDate(string $date) Return the first ChildCareTzBillingSpecial filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingSpecial requireOneByFullname(string $fullname) Return the first ChildCareTzBillingSpecial filtered by the fullname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingSpecial requireOneByDeptNr(string $dept_nr) Return the first ChildCareTzBillingSpecial filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingSpecial requireOneByType(string $type) Return the first ChildCareTzBillingSpecial filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingSpecial requireOneByRemain(double $remain) Return the first ChildCareTzBillingSpecial filtered by the remain column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingSpecial requireOneByTotal(double $total) Return the first ChildCareTzBillingSpecial filtered by the total column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingSpecial requireOneByBillno(string $billno) Return the first ChildCareTzBillingSpecial filtered by the billno column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingSpecial requireOneByPaid(double $paid) Return the first ChildCareTzBillingSpecial filtered by the paid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzBillingSpecial[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzBillingSpecial objects based on current ModelCriteria
 * @method     ChildCareTzBillingSpecial[]|ObjectCollection findById(int $id) Return ChildCareTzBillingSpecial objects filtered by the id column
 * @method     ChildCareTzBillingSpecial[]|ObjectCollection findByEncounterNr(string $encounter_nr) Return ChildCareTzBillingSpecial objects filtered by the encounter_nr column
 * @method     ChildCareTzBillingSpecial[]|ObjectCollection findByDate(string $date) Return ChildCareTzBillingSpecial objects filtered by the date column
 * @method     ChildCareTzBillingSpecial[]|ObjectCollection findByFullname(string $fullname) Return ChildCareTzBillingSpecial objects filtered by the fullname column
 * @method     ChildCareTzBillingSpecial[]|ObjectCollection findByDeptNr(string $dept_nr) Return ChildCareTzBillingSpecial objects filtered by the dept_nr column
 * @method     ChildCareTzBillingSpecial[]|ObjectCollection findByType(string $type) Return ChildCareTzBillingSpecial objects filtered by the type column
 * @method     ChildCareTzBillingSpecial[]|ObjectCollection findByRemain(double $remain) Return ChildCareTzBillingSpecial objects filtered by the remain column
 * @method     ChildCareTzBillingSpecial[]|ObjectCollection findByTotal(double $total) Return ChildCareTzBillingSpecial objects filtered by the total column
 * @method     ChildCareTzBillingSpecial[]|ObjectCollection findByBillno(string $billno) Return ChildCareTzBillingSpecial objects filtered by the billno column
 * @method     ChildCareTzBillingSpecial[]|ObjectCollection findByPaid(double $paid) Return ChildCareTzBillingSpecial objects filtered by the paid column
 * @method     ChildCareTzBillingSpecial[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzBillingSpecialQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzBillingSpecialQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzBillingSpecial', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzBillingSpecialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzBillingSpecialQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzBillingSpecialQuery) {
            return $criteria;
        }
        $query = new ChildCareTzBillingSpecialQuery();
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
     * @return ChildCareTzBillingSpecial|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzBillingSpecialTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzBillingSpecialTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzBillingSpecial A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, encounter_nr, date, fullname, dept_nr, type, remain, total, billno, paid FROM care_tz_billing_special WHERE id = :p0';
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
            /** @var ChildCareTzBillingSpecial $obj */
            $obj = new ChildCareTzBillingSpecial();
            $obj->hydrate($row);
            CareTzBillingSpecialTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzBillingSpecial|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterNr('fooValue');   // WHERE encounter_nr = 'fooValue'
     * $query->filterByEncounterNr('%fooValue%', Criteria::LIKE); // WHERE encounter_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encounterNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encounterNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
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
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the fullname column
     *
     * Example usage:
     * <code>
     * $query->filterByFullname('fooValue');   // WHERE fullname = 'fooValue'
     * $query->filterByFullname('%fooValue%', Criteria::LIKE); // WHERE fullname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fullname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function filterByFullname($fullname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fullname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_FULLNAME, $fullname, $comparison);
    }

    /**
     * Filter the query on the dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptNr('fooValue');   // WHERE dept_nr = 'fooValue'
     * $query->filterByDeptNr('%fooValue%', Criteria::LIKE); // WHERE dept_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deptNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deptNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_DEPT_NR, $deptNr, $comparison);
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
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the remain column
     *
     * Example usage:
     * <code>
     * $query->filterByRemain(1234); // WHERE remain = 1234
     * $query->filterByRemain(array(12, 34)); // WHERE remain IN (12, 34)
     * $query->filterByRemain(array('min' => 12)); // WHERE remain > 12
     * </code>
     *
     * @param     mixed $remain The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function filterByRemain($remain = null, $comparison = null)
    {
        if (is_array($remain)) {
            $useMinMax = false;
            if (isset($remain['min'])) {
                $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_REMAIN, $remain['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($remain['max'])) {
                $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_REMAIN, $remain['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_REMAIN, $remain, $comparison);
    }

    /**
     * Filter the query on the total column
     *
     * Example usage:
     * <code>
     * $query->filterByTotal(1234); // WHERE total = 1234
     * $query->filterByTotal(array(12, 34)); // WHERE total IN (12, 34)
     * $query->filterByTotal(array('min' => 12)); // WHERE total > 12
     * </code>
     *
     * @param     mixed $total The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function filterByTotal($total = null, $comparison = null)
    {
        if (is_array($total)) {
            $useMinMax = false;
            if (isset($total['min'])) {
                $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_TOTAL, $total['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($total['max'])) {
                $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_TOTAL, $total['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_TOTAL, $total, $comparison);
    }

    /**
     * Filter the query on the billno column
     *
     * Example usage:
     * <code>
     * $query->filterByBillno(1234); // WHERE billno = 1234
     * $query->filterByBillno(array(12, 34)); // WHERE billno IN (12, 34)
     * $query->filterByBillno(array('min' => 12)); // WHERE billno > 12
     * </code>
     *
     * @param     mixed $billno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function filterByBillno($billno = null, $comparison = null)
    {
        if (is_array($billno)) {
            $useMinMax = false;
            if (isset($billno['min'])) {
                $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_BILLNO, $billno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billno['max'])) {
                $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_BILLNO, $billno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_BILLNO, $billno, $comparison);
    }

    /**
     * Filter the query on the paid column
     *
     * Example usage:
     * <code>
     * $query->filterByPaid(1234); // WHERE paid = 1234
     * $query->filterByPaid(array(12, 34)); // WHERE paid IN (12, 34)
     * $query->filterByPaid(array('min' => 12)); // WHERE paid > 12
     * </code>
     *
     * @param     mixed $paid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function filterByPaid($paid = null, $comparison = null)
    {
        if (is_array($paid)) {
            $useMinMax = false;
            if (isset($paid['min'])) {
                $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_PAID, $paid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paid['max'])) {
                $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_PAID, $paid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_PAID, $paid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzBillingSpecial $careTzBillingSpecial Object to remove from the list of results
     *
     * @return $this|ChildCareTzBillingSpecialQuery The current query, for fluid interface
     */
    public function prune($careTzBillingSpecial = null)
    {
        if ($careTzBillingSpecial) {
            $this->addUsingAlias(CareTzBillingSpecialTableMap::COL_ID, $careTzBillingSpecial->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_billing_special table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingSpecialTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzBillingSpecialTableMap::clearInstancePool();
            CareTzBillingSpecialTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingSpecialTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzBillingSpecialTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzBillingSpecialTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzBillingSpecialTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzBillingSpecialQuery
