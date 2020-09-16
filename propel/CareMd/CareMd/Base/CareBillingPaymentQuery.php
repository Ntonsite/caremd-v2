<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareBillingPayment as ChildCareBillingPayment;
use CareMd\CareMd\CareBillingPaymentQuery as ChildCareBillingPaymentQuery;
use CareMd\CareMd\Map\CareBillingPaymentTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_billing_payment' table.
 *
 *
 *
 * @method     ChildCareBillingPaymentQuery orderByPaymentId($order = Criteria::ASC) Order by the payment_id column
 * @method     ChildCareBillingPaymentQuery orderByPaymentEncounterNr($order = Criteria::ASC) Order by the payment_encounter_nr column
 * @method     ChildCareBillingPaymentQuery orderByPaymentReceiptNo($order = Criteria::ASC) Order by the payment_receipt_no column
 * @method     ChildCareBillingPaymentQuery orderByPaymentDate($order = Criteria::ASC) Order by the payment_date column
 * @method     ChildCareBillingPaymentQuery orderByPaymentCashAmount($order = Criteria::ASC) Order by the payment_cash_amount column
 * @method     ChildCareBillingPaymentQuery orderByPaymentChequeNo($order = Criteria::ASC) Order by the payment_cheque_no column
 * @method     ChildCareBillingPaymentQuery orderByPaymentChequeAmount($order = Criteria::ASC) Order by the payment_cheque_amount column
 * @method     ChildCareBillingPaymentQuery orderByPaymentCreditcardNo($order = Criteria::ASC) Order by the payment_creditcard_no column
 * @method     ChildCareBillingPaymentQuery orderByPaymentCreditcardAmount($order = Criteria::ASC) Order by the payment_creditcard_amount column
 * @method     ChildCareBillingPaymentQuery orderByPaymentAmountTotal($order = Criteria::ASC) Order by the payment_amount_total column
 *
 * @method     ChildCareBillingPaymentQuery groupByPaymentId() Group by the payment_id column
 * @method     ChildCareBillingPaymentQuery groupByPaymentEncounterNr() Group by the payment_encounter_nr column
 * @method     ChildCareBillingPaymentQuery groupByPaymentReceiptNo() Group by the payment_receipt_no column
 * @method     ChildCareBillingPaymentQuery groupByPaymentDate() Group by the payment_date column
 * @method     ChildCareBillingPaymentQuery groupByPaymentCashAmount() Group by the payment_cash_amount column
 * @method     ChildCareBillingPaymentQuery groupByPaymentChequeNo() Group by the payment_cheque_no column
 * @method     ChildCareBillingPaymentQuery groupByPaymentChequeAmount() Group by the payment_cheque_amount column
 * @method     ChildCareBillingPaymentQuery groupByPaymentCreditcardNo() Group by the payment_creditcard_no column
 * @method     ChildCareBillingPaymentQuery groupByPaymentCreditcardAmount() Group by the payment_creditcard_amount column
 * @method     ChildCareBillingPaymentQuery groupByPaymentAmountTotal() Group by the payment_amount_total column
 *
 * @method     ChildCareBillingPaymentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareBillingPaymentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareBillingPaymentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareBillingPaymentQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareBillingPaymentQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareBillingPaymentQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareBillingPayment findOne(ConnectionInterface $con = null) Return the first ChildCareBillingPayment matching the query
 * @method     ChildCareBillingPayment findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareBillingPayment matching the query, or a new ChildCareBillingPayment object populated from the query conditions when no match is found
 *
 * @method     ChildCareBillingPayment findOneByPaymentId(int $payment_id) Return the first ChildCareBillingPayment filtered by the payment_id column
 * @method     ChildCareBillingPayment findOneByPaymentEncounterNr(int $payment_encounter_nr) Return the first ChildCareBillingPayment filtered by the payment_encounter_nr column
 * @method     ChildCareBillingPayment findOneByPaymentReceiptNo(int $payment_receipt_no) Return the first ChildCareBillingPayment filtered by the payment_receipt_no column
 * @method     ChildCareBillingPayment findOneByPaymentDate(string $payment_date) Return the first ChildCareBillingPayment filtered by the payment_date column
 * @method     ChildCareBillingPayment findOneByPaymentCashAmount(double $payment_cash_amount) Return the first ChildCareBillingPayment filtered by the payment_cash_amount column
 * @method     ChildCareBillingPayment findOneByPaymentChequeNo(int $payment_cheque_no) Return the first ChildCareBillingPayment filtered by the payment_cheque_no column
 * @method     ChildCareBillingPayment findOneByPaymentChequeAmount(double $payment_cheque_amount) Return the first ChildCareBillingPayment filtered by the payment_cheque_amount column
 * @method     ChildCareBillingPayment findOneByPaymentCreditcardNo(int $payment_creditcard_no) Return the first ChildCareBillingPayment filtered by the payment_creditcard_no column
 * @method     ChildCareBillingPayment findOneByPaymentCreditcardAmount(double $payment_creditcard_amount) Return the first ChildCareBillingPayment filtered by the payment_creditcard_amount column
 * @method     ChildCareBillingPayment findOneByPaymentAmountTotal(double $payment_amount_total) Return the first ChildCareBillingPayment filtered by the payment_amount_total column *

 * @method     ChildCareBillingPayment requirePk($key, ConnectionInterface $con = null) Return the ChildCareBillingPayment by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingPayment requireOne(ConnectionInterface $con = null) Return the first ChildCareBillingPayment matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareBillingPayment requireOneByPaymentId(int $payment_id) Return the first ChildCareBillingPayment filtered by the payment_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingPayment requireOneByPaymentEncounterNr(int $payment_encounter_nr) Return the first ChildCareBillingPayment filtered by the payment_encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingPayment requireOneByPaymentReceiptNo(int $payment_receipt_no) Return the first ChildCareBillingPayment filtered by the payment_receipt_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingPayment requireOneByPaymentDate(string $payment_date) Return the first ChildCareBillingPayment filtered by the payment_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingPayment requireOneByPaymentCashAmount(double $payment_cash_amount) Return the first ChildCareBillingPayment filtered by the payment_cash_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingPayment requireOneByPaymentChequeNo(int $payment_cheque_no) Return the first ChildCareBillingPayment filtered by the payment_cheque_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingPayment requireOneByPaymentChequeAmount(double $payment_cheque_amount) Return the first ChildCareBillingPayment filtered by the payment_cheque_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingPayment requireOneByPaymentCreditcardNo(int $payment_creditcard_no) Return the first ChildCareBillingPayment filtered by the payment_creditcard_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingPayment requireOneByPaymentCreditcardAmount(double $payment_creditcard_amount) Return the first ChildCareBillingPayment filtered by the payment_creditcard_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingPayment requireOneByPaymentAmountTotal(double $payment_amount_total) Return the first ChildCareBillingPayment filtered by the payment_amount_total column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareBillingPayment[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareBillingPayment objects based on current ModelCriteria
 * @method     ChildCareBillingPayment[]|ObjectCollection findByPaymentId(int $payment_id) Return ChildCareBillingPayment objects filtered by the payment_id column
 * @method     ChildCareBillingPayment[]|ObjectCollection findByPaymentEncounterNr(int $payment_encounter_nr) Return ChildCareBillingPayment objects filtered by the payment_encounter_nr column
 * @method     ChildCareBillingPayment[]|ObjectCollection findByPaymentReceiptNo(int $payment_receipt_no) Return ChildCareBillingPayment objects filtered by the payment_receipt_no column
 * @method     ChildCareBillingPayment[]|ObjectCollection findByPaymentDate(string $payment_date) Return ChildCareBillingPayment objects filtered by the payment_date column
 * @method     ChildCareBillingPayment[]|ObjectCollection findByPaymentCashAmount(double $payment_cash_amount) Return ChildCareBillingPayment objects filtered by the payment_cash_amount column
 * @method     ChildCareBillingPayment[]|ObjectCollection findByPaymentChequeNo(int $payment_cheque_no) Return ChildCareBillingPayment objects filtered by the payment_cheque_no column
 * @method     ChildCareBillingPayment[]|ObjectCollection findByPaymentChequeAmount(double $payment_cheque_amount) Return ChildCareBillingPayment objects filtered by the payment_cheque_amount column
 * @method     ChildCareBillingPayment[]|ObjectCollection findByPaymentCreditcardNo(int $payment_creditcard_no) Return ChildCareBillingPayment objects filtered by the payment_creditcard_no column
 * @method     ChildCareBillingPayment[]|ObjectCollection findByPaymentCreditcardAmount(double $payment_creditcard_amount) Return ChildCareBillingPayment objects filtered by the payment_creditcard_amount column
 * @method     ChildCareBillingPayment[]|ObjectCollection findByPaymentAmountTotal(double $payment_amount_total) Return ChildCareBillingPayment objects filtered by the payment_amount_total column
 * @method     ChildCareBillingPayment[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareBillingPaymentQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareBillingPaymentQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareBillingPayment', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareBillingPaymentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareBillingPaymentQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareBillingPaymentQuery) {
            return $criteria;
        }
        $query = new ChildCareBillingPaymentQuery();
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
     * @return ChildCareBillingPayment|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareBillingPaymentTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareBillingPaymentTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareBillingPayment A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT payment_id, payment_encounter_nr, payment_receipt_no, payment_date, payment_cash_amount, payment_cheque_no, payment_cheque_amount, payment_creditcard_no, payment_creditcard_amount, payment_amount_total FROM care_billing_payment WHERE payment_id = :p0';
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
            /** @var ChildCareBillingPayment $obj */
            $obj = new ChildCareBillingPayment();
            $obj->hydrate($row);
            CareBillingPaymentTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareBillingPayment|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the payment_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentId(1234); // WHERE payment_id = 1234
     * $query->filterByPaymentId(array(12, 34)); // WHERE payment_id IN (12, 34)
     * $query->filterByPaymentId(array('min' => 12)); // WHERE payment_id > 12
     * </code>
     *
     * @param     mixed $paymentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function filterByPaymentId($paymentId = null, $comparison = null)
    {
        if (is_array($paymentId)) {
            $useMinMax = false;
            if (isset($paymentId['min'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_ID, $paymentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentId['max'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_ID, $paymentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_ID, $paymentId, $comparison);
    }

    /**
     * Filter the query on the payment_encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentEncounterNr(1234); // WHERE payment_encounter_nr = 1234
     * $query->filterByPaymentEncounterNr(array(12, 34)); // WHERE payment_encounter_nr IN (12, 34)
     * $query->filterByPaymentEncounterNr(array('min' => 12)); // WHERE payment_encounter_nr > 12
     * </code>
     *
     * @param     mixed $paymentEncounterNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function filterByPaymentEncounterNr($paymentEncounterNr = null, $comparison = null)
    {
        if (is_array($paymentEncounterNr)) {
            $useMinMax = false;
            if (isset($paymentEncounterNr['min'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_ENCOUNTER_NR, $paymentEncounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentEncounterNr['max'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_ENCOUNTER_NR, $paymentEncounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_ENCOUNTER_NR, $paymentEncounterNr, $comparison);
    }

    /**
     * Filter the query on the payment_receipt_no column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentReceiptNo(1234); // WHERE payment_receipt_no = 1234
     * $query->filterByPaymentReceiptNo(array(12, 34)); // WHERE payment_receipt_no IN (12, 34)
     * $query->filterByPaymentReceiptNo(array('min' => 12)); // WHERE payment_receipt_no > 12
     * </code>
     *
     * @param     mixed $paymentReceiptNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function filterByPaymentReceiptNo($paymentReceiptNo = null, $comparison = null)
    {
        if (is_array($paymentReceiptNo)) {
            $useMinMax = false;
            if (isset($paymentReceiptNo['min'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_RECEIPT_NO, $paymentReceiptNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentReceiptNo['max'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_RECEIPT_NO, $paymentReceiptNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_RECEIPT_NO, $paymentReceiptNo, $comparison);
    }

    /**
     * Filter the query on the payment_date column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentDate('2011-03-14'); // WHERE payment_date = '2011-03-14'
     * $query->filterByPaymentDate('now'); // WHERE payment_date = '2011-03-14'
     * $query->filterByPaymentDate(array('max' => 'yesterday')); // WHERE payment_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $paymentDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function filterByPaymentDate($paymentDate = null, $comparison = null)
    {
        if (is_array($paymentDate)) {
            $useMinMax = false;
            if (isset($paymentDate['min'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_DATE, $paymentDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentDate['max'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_DATE, $paymentDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_DATE, $paymentDate, $comparison);
    }

    /**
     * Filter the query on the payment_cash_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentCashAmount(1234); // WHERE payment_cash_amount = 1234
     * $query->filterByPaymentCashAmount(array(12, 34)); // WHERE payment_cash_amount IN (12, 34)
     * $query->filterByPaymentCashAmount(array('min' => 12)); // WHERE payment_cash_amount > 12
     * </code>
     *
     * @param     mixed $paymentCashAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function filterByPaymentCashAmount($paymentCashAmount = null, $comparison = null)
    {
        if (is_array($paymentCashAmount)) {
            $useMinMax = false;
            if (isset($paymentCashAmount['min'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CASH_AMOUNT, $paymentCashAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentCashAmount['max'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CASH_AMOUNT, $paymentCashAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CASH_AMOUNT, $paymentCashAmount, $comparison);
    }

    /**
     * Filter the query on the payment_cheque_no column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentChequeNo(1234); // WHERE payment_cheque_no = 1234
     * $query->filterByPaymentChequeNo(array(12, 34)); // WHERE payment_cheque_no IN (12, 34)
     * $query->filterByPaymentChequeNo(array('min' => 12)); // WHERE payment_cheque_no > 12
     * </code>
     *
     * @param     mixed $paymentChequeNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function filterByPaymentChequeNo($paymentChequeNo = null, $comparison = null)
    {
        if (is_array($paymentChequeNo)) {
            $useMinMax = false;
            if (isset($paymentChequeNo['min'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CHEQUE_NO, $paymentChequeNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentChequeNo['max'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CHEQUE_NO, $paymentChequeNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CHEQUE_NO, $paymentChequeNo, $comparison);
    }

    /**
     * Filter the query on the payment_cheque_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentChequeAmount(1234); // WHERE payment_cheque_amount = 1234
     * $query->filterByPaymentChequeAmount(array(12, 34)); // WHERE payment_cheque_amount IN (12, 34)
     * $query->filterByPaymentChequeAmount(array('min' => 12)); // WHERE payment_cheque_amount > 12
     * </code>
     *
     * @param     mixed $paymentChequeAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function filterByPaymentChequeAmount($paymentChequeAmount = null, $comparison = null)
    {
        if (is_array($paymentChequeAmount)) {
            $useMinMax = false;
            if (isset($paymentChequeAmount['min'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CHEQUE_AMOUNT, $paymentChequeAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentChequeAmount['max'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CHEQUE_AMOUNT, $paymentChequeAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CHEQUE_AMOUNT, $paymentChequeAmount, $comparison);
    }

    /**
     * Filter the query on the payment_creditcard_no column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentCreditcardNo(1234); // WHERE payment_creditcard_no = 1234
     * $query->filterByPaymentCreditcardNo(array(12, 34)); // WHERE payment_creditcard_no IN (12, 34)
     * $query->filterByPaymentCreditcardNo(array('min' => 12)); // WHERE payment_creditcard_no > 12
     * </code>
     *
     * @param     mixed $paymentCreditcardNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function filterByPaymentCreditcardNo($paymentCreditcardNo = null, $comparison = null)
    {
        if (is_array($paymentCreditcardNo)) {
            $useMinMax = false;
            if (isset($paymentCreditcardNo['min'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CREDITCARD_NO, $paymentCreditcardNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentCreditcardNo['max'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CREDITCARD_NO, $paymentCreditcardNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CREDITCARD_NO, $paymentCreditcardNo, $comparison);
    }

    /**
     * Filter the query on the payment_creditcard_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentCreditcardAmount(1234); // WHERE payment_creditcard_amount = 1234
     * $query->filterByPaymentCreditcardAmount(array(12, 34)); // WHERE payment_creditcard_amount IN (12, 34)
     * $query->filterByPaymentCreditcardAmount(array('min' => 12)); // WHERE payment_creditcard_amount > 12
     * </code>
     *
     * @param     mixed $paymentCreditcardAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function filterByPaymentCreditcardAmount($paymentCreditcardAmount = null, $comparison = null)
    {
        if (is_array($paymentCreditcardAmount)) {
            $useMinMax = false;
            if (isset($paymentCreditcardAmount['min'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CREDITCARD_AMOUNT, $paymentCreditcardAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentCreditcardAmount['max'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CREDITCARD_AMOUNT, $paymentCreditcardAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_CREDITCARD_AMOUNT, $paymentCreditcardAmount, $comparison);
    }

    /**
     * Filter the query on the payment_amount_total column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentAmountTotal(1234); // WHERE payment_amount_total = 1234
     * $query->filterByPaymentAmountTotal(array(12, 34)); // WHERE payment_amount_total IN (12, 34)
     * $query->filterByPaymentAmountTotal(array('min' => 12)); // WHERE payment_amount_total > 12
     * </code>
     *
     * @param     mixed $paymentAmountTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function filterByPaymentAmountTotal($paymentAmountTotal = null, $comparison = null)
    {
        if (is_array($paymentAmountTotal)) {
            $useMinMax = false;
            if (isset($paymentAmountTotal['min'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_AMOUNT_TOTAL, $paymentAmountTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentAmountTotal['max'])) {
                $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_AMOUNT_TOTAL, $paymentAmountTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_AMOUNT_TOTAL, $paymentAmountTotal, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareBillingPayment $careBillingPayment Object to remove from the list of results
     *
     * @return $this|ChildCareBillingPaymentQuery The current query, for fluid interface
     */
    public function prune($careBillingPayment = null)
    {
        if ($careBillingPayment) {
            $this->addUsingAlias(CareBillingPaymentTableMap::COL_PAYMENT_ID, $careBillingPayment->getPaymentId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_billing_payment table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingPaymentTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareBillingPaymentTableMap::clearInstancePool();
            CareBillingPaymentTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingPaymentTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareBillingPaymentTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareBillingPaymentTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareBillingPaymentTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareBillingPaymentQuery
