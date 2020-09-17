<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareBillingFinal as ChildCareBillingFinal;
use CareMd\CareMd\CareBillingFinalQuery as ChildCareBillingFinalQuery;
use CareMd\CareMd\Map\CareBillingFinalTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_billing_final' table.
 *
 *
 *
 * @method     ChildCareBillingFinalQuery orderByFinalId($order = Criteria::ASC) Order by the final_id column
 * @method     ChildCareBillingFinalQuery orderByFinalEncounterNr($order = Criteria::ASC) Order by the final_encounter_nr column
 * @method     ChildCareBillingFinalQuery orderByFinalBillNo($order = Criteria::ASC) Order by the final_bill_no column
 * @method     ChildCareBillingFinalQuery orderByFinalDate($order = Criteria::ASC) Order by the final_date column
 * @method     ChildCareBillingFinalQuery orderByFinalTotalBillAmount($order = Criteria::ASC) Order by the final_total_bill_amount column
 * @method     ChildCareBillingFinalQuery orderByFinalDiscount($order = Criteria::ASC) Order by the final_discount column
 * @method     ChildCareBillingFinalQuery orderByFinalTotalReceiptAmount($order = Criteria::ASC) Order by the final_total_receipt_amount column
 * @method     ChildCareBillingFinalQuery orderByFinalAmountDue($order = Criteria::ASC) Order by the final_amount_due column
 * @method     ChildCareBillingFinalQuery orderByFinalAmountRecieved($order = Criteria::ASC) Order by the final_amount_recieved column
 *
 * @method     ChildCareBillingFinalQuery groupByFinalId() Group by the final_id column
 * @method     ChildCareBillingFinalQuery groupByFinalEncounterNr() Group by the final_encounter_nr column
 * @method     ChildCareBillingFinalQuery groupByFinalBillNo() Group by the final_bill_no column
 * @method     ChildCareBillingFinalQuery groupByFinalDate() Group by the final_date column
 * @method     ChildCareBillingFinalQuery groupByFinalTotalBillAmount() Group by the final_total_bill_amount column
 * @method     ChildCareBillingFinalQuery groupByFinalDiscount() Group by the final_discount column
 * @method     ChildCareBillingFinalQuery groupByFinalTotalReceiptAmount() Group by the final_total_receipt_amount column
 * @method     ChildCareBillingFinalQuery groupByFinalAmountDue() Group by the final_amount_due column
 * @method     ChildCareBillingFinalQuery groupByFinalAmountRecieved() Group by the final_amount_recieved column
 *
 * @method     ChildCareBillingFinalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareBillingFinalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareBillingFinalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareBillingFinalQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareBillingFinalQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareBillingFinalQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareBillingFinal findOne(ConnectionInterface $con = null) Return the first ChildCareBillingFinal matching the query
 * @method     ChildCareBillingFinal findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareBillingFinal matching the query, or a new ChildCareBillingFinal object populated from the query conditions when no match is found
 *
 * @method     ChildCareBillingFinal findOneByFinalId(int $final_id) Return the first ChildCareBillingFinal filtered by the final_id column
 * @method     ChildCareBillingFinal findOneByFinalEncounterNr(int $final_encounter_nr) Return the first ChildCareBillingFinal filtered by the final_encounter_nr column
 * @method     ChildCareBillingFinal findOneByFinalBillNo(int $final_bill_no) Return the first ChildCareBillingFinal filtered by the final_bill_no column
 * @method     ChildCareBillingFinal findOneByFinalDate(string $final_date) Return the first ChildCareBillingFinal filtered by the final_date column
 * @method     ChildCareBillingFinal findOneByFinalTotalBillAmount(double $final_total_bill_amount) Return the first ChildCareBillingFinal filtered by the final_total_bill_amount column
 * @method     ChildCareBillingFinal findOneByFinalDiscount(int $final_discount) Return the first ChildCareBillingFinal filtered by the final_discount column
 * @method     ChildCareBillingFinal findOneByFinalTotalReceiptAmount(double $final_total_receipt_amount) Return the first ChildCareBillingFinal filtered by the final_total_receipt_amount column
 * @method     ChildCareBillingFinal findOneByFinalAmountDue(double $final_amount_due) Return the first ChildCareBillingFinal filtered by the final_amount_due column
 * @method     ChildCareBillingFinal findOneByFinalAmountRecieved(double $final_amount_recieved) Return the first ChildCareBillingFinal filtered by the final_amount_recieved column *

 * @method     ChildCareBillingFinal requirePk($key, ConnectionInterface $con = null) Return the ChildCareBillingFinal by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingFinal requireOne(ConnectionInterface $con = null) Return the first ChildCareBillingFinal matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareBillingFinal requireOneByFinalId(int $final_id) Return the first ChildCareBillingFinal filtered by the final_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingFinal requireOneByFinalEncounterNr(int $final_encounter_nr) Return the first ChildCareBillingFinal filtered by the final_encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingFinal requireOneByFinalBillNo(int $final_bill_no) Return the first ChildCareBillingFinal filtered by the final_bill_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingFinal requireOneByFinalDate(string $final_date) Return the first ChildCareBillingFinal filtered by the final_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingFinal requireOneByFinalTotalBillAmount(double $final_total_bill_amount) Return the first ChildCareBillingFinal filtered by the final_total_bill_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingFinal requireOneByFinalDiscount(int $final_discount) Return the first ChildCareBillingFinal filtered by the final_discount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingFinal requireOneByFinalTotalReceiptAmount(double $final_total_receipt_amount) Return the first ChildCareBillingFinal filtered by the final_total_receipt_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingFinal requireOneByFinalAmountDue(double $final_amount_due) Return the first ChildCareBillingFinal filtered by the final_amount_due column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingFinal requireOneByFinalAmountRecieved(double $final_amount_recieved) Return the first ChildCareBillingFinal filtered by the final_amount_recieved column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareBillingFinal[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareBillingFinal objects based on current ModelCriteria
 * @method     ChildCareBillingFinal[]|ObjectCollection findByFinalId(int $final_id) Return ChildCareBillingFinal objects filtered by the final_id column
 * @method     ChildCareBillingFinal[]|ObjectCollection findByFinalEncounterNr(int $final_encounter_nr) Return ChildCareBillingFinal objects filtered by the final_encounter_nr column
 * @method     ChildCareBillingFinal[]|ObjectCollection findByFinalBillNo(int $final_bill_no) Return ChildCareBillingFinal objects filtered by the final_bill_no column
 * @method     ChildCareBillingFinal[]|ObjectCollection findByFinalDate(string $final_date) Return ChildCareBillingFinal objects filtered by the final_date column
 * @method     ChildCareBillingFinal[]|ObjectCollection findByFinalTotalBillAmount(double $final_total_bill_amount) Return ChildCareBillingFinal objects filtered by the final_total_bill_amount column
 * @method     ChildCareBillingFinal[]|ObjectCollection findByFinalDiscount(int $final_discount) Return ChildCareBillingFinal objects filtered by the final_discount column
 * @method     ChildCareBillingFinal[]|ObjectCollection findByFinalTotalReceiptAmount(double $final_total_receipt_amount) Return ChildCareBillingFinal objects filtered by the final_total_receipt_amount column
 * @method     ChildCareBillingFinal[]|ObjectCollection findByFinalAmountDue(double $final_amount_due) Return ChildCareBillingFinal objects filtered by the final_amount_due column
 * @method     ChildCareBillingFinal[]|ObjectCollection findByFinalAmountRecieved(double $final_amount_recieved) Return ChildCareBillingFinal objects filtered by the final_amount_recieved column
 * @method     ChildCareBillingFinal[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareBillingFinalQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareBillingFinalQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareBillingFinal', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareBillingFinalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareBillingFinalQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareBillingFinalQuery) {
            return $criteria;
        }
        $query = new ChildCareBillingFinalQuery();
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
     * @return ChildCareBillingFinal|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareBillingFinalTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareBillingFinalTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareBillingFinal A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT final_id, final_encounter_nr, final_bill_no, final_date, final_total_bill_amount, final_discount, final_total_receipt_amount, final_amount_due, final_amount_recieved FROM care_billing_final WHERE final_id = :p0';
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
            /** @var ChildCareBillingFinal $obj */
            $obj = new ChildCareBillingFinal();
            $obj->hydrate($row);
            CareBillingFinalTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareBillingFinal|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareBillingFinalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareBillingFinalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the final_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFinalId(1234); // WHERE final_id = 1234
     * $query->filterByFinalId(array(12, 34)); // WHERE final_id IN (12, 34)
     * $query->filterByFinalId(array('min' => 12)); // WHERE final_id > 12
     * </code>
     *
     * @param     mixed $finalId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingFinalQuery The current query, for fluid interface
     */
    public function filterByFinalId($finalId = null, $comparison = null)
    {
        if (is_array($finalId)) {
            $useMinMax = false;
            if (isset($finalId['min'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_ID, $finalId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finalId['max'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_ID, $finalId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_ID, $finalId, $comparison);
    }

    /**
     * Filter the query on the final_encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByFinalEncounterNr(1234); // WHERE final_encounter_nr = 1234
     * $query->filterByFinalEncounterNr(array(12, 34)); // WHERE final_encounter_nr IN (12, 34)
     * $query->filterByFinalEncounterNr(array('min' => 12)); // WHERE final_encounter_nr > 12
     * </code>
     *
     * @param     mixed $finalEncounterNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingFinalQuery The current query, for fluid interface
     */
    public function filterByFinalEncounterNr($finalEncounterNr = null, $comparison = null)
    {
        if (is_array($finalEncounterNr)) {
            $useMinMax = false;
            if (isset($finalEncounterNr['min'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_ENCOUNTER_NR, $finalEncounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finalEncounterNr['max'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_ENCOUNTER_NR, $finalEncounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_ENCOUNTER_NR, $finalEncounterNr, $comparison);
    }

    /**
     * Filter the query on the final_bill_no column
     *
     * Example usage:
     * <code>
     * $query->filterByFinalBillNo(1234); // WHERE final_bill_no = 1234
     * $query->filterByFinalBillNo(array(12, 34)); // WHERE final_bill_no IN (12, 34)
     * $query->filterByFinalBillNo(array('min' => 12)); // WHERE final_bill_no > 12
     * </code>
     *
     * @param     mixed $finalBillNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingFinalQuery The current query, for fluid interface
     */
    public function filterByFinalBillNo($finalBillNo = null, $comparison = null)
    {
        if (is_array($finalBillNo)) {
            $useMinMax = false;
            if (isset($finalBillNo['min'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_BILL_NO, $finalBillNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finalBillNo['max'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_BILL_NO, $finalBillNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_BILL_NO, $finalBillNo, $comparison);
    }

    /**
     * Filter the query on the final_date column
     *
     * Example usage:
     * <code>
     * $query->filterByFinalDate('2011-03-14'); // WHERE final_date = '2011-03-14'
     * $query->filterByFinalDate('now'); // WHERE final_date = '2011-03-14'
     * $query->filterByFinalDate(array('max' => 'yesterday')); // WHERE final_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $finalDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingFinalQuery The current query, for fluid interface
     */
    public function filterByFinalDate($finalDate = null, $comparison = null)
    {
        if (is_array($finalDate)) {
            $useMinMax = false;
            if (isset($finalDate['min'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_DATE, $finalDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finalDate['max'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_DATE, $finalDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_DATE, $finalDate, $comparison);
    }

    /**
     * Filter the query on the final_total_bill_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByFinalTotalBillAmount(1234); // WHERE final_total_bill_amount = 1234
     * $query->filterByFinalTotalBillAmount(array(12, 34)); // WHERE final_total_bill_amount IN (12, 34)
     * $query->filterByFinalTotalBillAmount(array('min' => 12)); // WHERE final_total_bill_amount > 12
     * </code>
     *
     * @param     mixed $finalTotalBillAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingFinalQuery The current query, for fluid interface
     */
    public function filterByFinalTotalBillAmount($finalTotalBillAmount = null, $comparison = null)
    {
        if (is_array($finalTotalBillAmount)) {
            $useMinMax = false;
            if (isset($finalTotalBillAmount['min'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_TOTAL_BILL_AMOUNT, $finalTotalBillAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finalTotalBillAmount['max'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_TOTAL_BILL_AMOUNT, $finalTotalBillAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_TOTAL_BILL_AMOUNT, $finalTotalBillAmount, $comparison);
    }

    /**
     * Filter the query on the final_discount column
     *
     * Example usage:
     * <code>
     * $query->filterByFinalDiscount(1234); // WHERE final_discount = 1234
     * $query->filterByFinalDiscount(array(12, 34)); // WHERE final_discount IN (12, 34)
     * $query->filterByFinalDiscount(array('min' => 12)); // WHERE final_discount > 12
     * </code>
     *
     * @param     mixed $finalDiscount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingFinalQuery The current query, for fluid interface
     */
    public function filterByFinalDiscount($finalDiscount = null, $comparison = null)
    {
        if (is_array($finalDiscount)) {
            $useMinMax = false;
            if (isset($finalDiscount['min'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_DISCOUNT, $finalDiscount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finalDiscount['max'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_DISCOUNT, $finalDiscount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_DISCOUNT, $finalDiscount, $comparison);
    }

    /**
     * Filter the query on the final_total_receipt_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByFinalTotalReceiptAmount(1234); // WHERE final_total_receipt_amount = 1234
     * $query->filterByFinalTotalReceiptAmount(array(12, 34)); // WHERE final_total_receipt_amount IN (12, 34)
     * $query->filterByFinalTotalReceiptAmount(array('min' => 12)); // WHERE final_total_receipt_amount > 12
     * </code>
     *
     * @param     mixed $finalTotalReceiptAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingFinalQuery The current query, for fluid interface
     */
    public function filterByFinalTotalReceiptAmount($finalTotalReceiptAmount = null, $comparison = null)
    {
        if (is_array($finalTotalReceiptAmount)) {
            $useMinMax = false;
            if (isset($finalTotalReceiptAmount['min'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_TOTAL_RECEIPT_AMOUNT, $finalTotalReceiptAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finalTotalReceiptAmount['max'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_TOTAL_RECEIPT_AMOUNT, $finalTotalReceiptAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_TOTAL_RECEIPT_AMOUNT, $finalTotalReceiptAmount, $comparison);
    }

    /**
     * Filter the query on the final_amount_due column
     *
     * Example usage:
     * <code>
     * $query->filterByFinalAmountDue(1234); // WHERE final_amount_due = 1234
     * $query->filterByFinalAmountDue(array(12, 34)); // WHERE final_amount_due IN (12, 34)
     * $query->filterByFinalAmountDue(array('min' => 12)); // WHERE final_amount_due > 12
     * </code>
     *
     * @param     mixed $finalAmountDue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingFinalQuery The current query, for fluid interface
     */
    public function filterByFinalAmountDue($finalAmountDue = null, $comparison = null)
    {
        if (is_array($finalAmountDue)) {
            $useMinMax = false;
            if (isset($finalAmountDue['min'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_AMOUNT_DUE, $finalAmountDue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finalAmountDue['max'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_AMOUNT_DUE, $finalAmountDue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_AMOUNT_DUE, $finalAmountDue, $comparison);
    }

    /**
     * Filter the query on the final_amount_recieved column
     *
     * Example usage:
     * <code>
     * $query->filterByFinalAmountRecieved(1234); // WHERE final_amount_recieved = 1234
     * $query->filterByFinalAmountRecieved(array(12, 34)); // WHERE final_amount_recieved IN (12, 34)
     * $query->filterByFinalAmountRecieved(array('min' => 12)); // WHERE final_amount_recieved > 12
     * </code>
     *
     * @param     mixed $finalAmountRecieved The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingFinalQuery The current query, for fluid interface
     */
    public function filterByFinalAmountRecieved($finalAmountRecieved = null, $comparison = null)
    {
        if (is_array($finalAmountRecieved)) {
            $useMinMax = false;
            if (isset($finalAmountRecieved['min'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_AMOUNT_RECIEVED, $finalAmountRecieved['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finalAmountRecieved['max'])) {
                $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_AMOUNT_RECIEVED, $finalAmountRecieved['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_AMOUNT_RECIEVED, $finalAmountRecieved, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareBillingFinal $careBillingFinal Object to remove from the list of results
     *
     * @return $this|ChildCareBillingFinalQuery The current query, for fluid interface
     */
    public function prune($careBillingFinal = null)
    {
        if ($careBillingFinal) {
            $this->addUsingAlias(CareBillingFinalTableMap::COL_FINAL_ID, $careBillingFinal->getFinalId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_billing_final table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingFinalTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareBillingFinalTableMap::clearInstancePool();
            CareBillingFinalTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingFinalTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareBillingFinalTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareBillingFinalTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareBillingFinalTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareBillingFinalQuery
