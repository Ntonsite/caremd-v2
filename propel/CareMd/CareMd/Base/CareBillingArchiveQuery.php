<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareBillingArchive as ChildCareBillingArchive;
use CareMd\CareMd\CareBillingArchiveQuery as ChildCareBillingArchiveQuery;
use CareMd\CareMd\Map\CareBillingArchiveTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_billing_archive' table.
 *
 *
 *
 * @method     ChildCareBillingArchiveQuery orderByBillNo($order = Criteria::ASC) Order by the bill_no column
 * @method     ChildCareBillingArchiveQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareBillingArchiveQuery orderByPatientName($order = Criteria::ASC) Order by the patient_name column
 * @method     ChildCareBillingArchiveQuery orderByVorname($order = Criteria::ASC) Order by the vorname column
 * @method     ChildCareBillingArchiveQuery orderByBillDateTime($order = Criteria::ASC) Order by the bill_date_time column
 * @method     ChildCareBillingArchiveQuery orderByBillAmt($order = Criteria::ASC) Order by the bill_amt column
 * @method     ChildCareBillingArchiveQuery orderByPaymentDateTime($order = Criteria::ASC) Order by the payment_date_time column
 * @method     ChildCareBillingArchiveQuery orderByPaymentMode($order = Criteria::ASC) Order by the payment_mode column
 * @method     ChildCareBillingArchiveQuery orderByChequeNo($order = Criteria::ASC) Order by the cheque_no column
 * @method     ChildCareBillingArchiveQuery orderByCreditcardNo($order = Criteria::ASC) Order by the creditcard_no column
 * @method     ChildCareBillingArchiveQuery orderByPaidBy($order = Criteria::ASC) Order by the paid_by column
 *
 * @method     ChildCareBillingArchiveQuery groupByBillNo() Group by the bill_no column
 * @method     ChildCareBillingArchiveQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareBillingArchiveQuery groupByPatientName() Group by the patient_name column
 * @method     ChildCareBillingArchiveQuery groupByVorname() Group by the vorname column
 * @method     ChildCareBillingArchiveQuery groupByBillDateTime() Group by the bill_date_time column
 * @method     ChildCareBillingArchiveQuery groupByBillAmt() Group by the bill_amt column
 * @method     ChildCareBillingArchiveQuery groupByPaymentDateTime() Group by the payment_date_time column
 * @method     ChildCareBillingArchiveQuery groupByPaymentMode() Group by the payment_mode column
 * @method     ChildCareBillingArchiveQuery groupByChequeNo() Group by the cheque_no column
 * @method     ChildCareBillingArchiveQuery groupByCreditcardNo() Group by the creditcard_no column
 * @method     ChildCareBillingArchiveQuery groupByPaidBy() Group by the paid_by column
 *
 * @method     ChildCareBillingArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareBillingArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareBillingArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareBillingArchiveQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareBillingArchiveQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareBillingArchiveQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareBillingArchive findOne(ConnectionInterface $con = null) Return the first ChildCareBillingArchive matching the query
 * @method     ChildCareBillingArchive findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareBillingArchive matching the query, or a new ChildCareBillingArchive object populated from the query conditions when no match is found
 *
 * @method     ChildCareBillingArchive findOneByBillNo(string $bill_no) Return the first ChildCareBillingArchive filtered by the bill_no column
 * @method     ChildCareBillingArchive findOneByEncounterNr(int $encounter_nr) Return the first ChildCareBillingArchive filtered by the encounter_nr column
 * @method     ChildCareBillingArchive findOneByPatientName(string $patient_name) Return the first ChildCareBillingArchive filtered by the patient_name column
 * @method     ChildCareBillingArchive findOneByVorname(string $vorname) Return the first ChildCareBillingArchive filtered by the vorname column
 * @method     ChildCareBillingArchive findOneByBillDateTime(string $bill_date_time) Return the first ChildCareBillingArchive filtered by the bill_date_time column
 * @method     ChildCareBillingArchive findOneByBillAmt(double $bill_amt) Return the first ChildCareBillingArchive filtered by the bill_amt column
 * @method     ChildCareBillingArchive findOneByPaymentDateTime(string $payment_date_time) Return the first ChildCareBillingArchive filtered by the payment_date_time column
 * @method     ChildCareBillingArchive findOneByPaymentMode(string $payment_mode) Return the first ChildCareBillingArchive filtered by the payment_mode column
 * @method     ChildCareBillingArchive findOneByChequeNo(string $cheque_no) Return the first ChildCareBillingArchive filtered by the cheque_no column
 * @method     ChildCareBillingArchive findOneByCreditcardNo(string $creditcard_no) Return the first ChildCareBillingArchive filtered by the creditcard_no column
 * @method     ChildCareBillingArchive findOneByPaidBy(string $paid_by) Return the first ChildCareBillingArchive filtered by the paid_by column *

 * @method     ChildCareBillingArchive requirePk($key, ConnectionInterface $con = null) Return the ChildCareBillingArchive by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingArchive requireOne(ConnectionInterface $con = null) Return the first ChildCareBillingArchive matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareBillingArchive requireOneByBillNo(string $bill_no) Return the first ChildCareBillingArchive filtered by the bill_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingArchive requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareBillingArchive filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingArchive requireOneByPatientName(string $patient_name) Return the first ChildCareBillingArchive filtered by the patient_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingArchive requireOneByVorname(string $vorname) Return the first ChildCareBillingArchive filtered by the vorname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingArchive requireOneByBillDateTime(string $bill_date_time) Return the first ChildCareBillingArchive filtered by the bill_date_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingArchive requireOneByBillAmt(double $bill_amt) Return the first ChildCareBillingArchive filtered by the bill_amt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingArchive requireOneByPaymentDateTime(string $payment_date_time) Return the first ChildCareBillingArchive filtered by the payment_date_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingArchive requireOneByPaymentMode(string $payment_mode) Return the first ChildCareBillingArchive filtered by the payment_mode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingArchive requireOneByChequeNo(string $cheque_no) Return the first ChildCareBillingArchive filtered by the cheque_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingArchive requireOneByCreditcardNo(string $creditcard_no) Return the first ChildCareBillingArchive filtered by the creditcard_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingArchive requireOneByPaidBy(string $paid_by) Return the first ChildCareBillingArchive filtered by the paid_by column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareBillingArchive[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareBillingArchive objects based on current ModelCriteria
 * @method     ChildCareBillingArchive[]|ObjectCollection findByBillNo(string $bill_no) Return ChildCareBillingArchive objects filtered by the bill_no column
 * @method     ChildCareBillingArchive[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareBillingArchive objects filtered by the encounter_nr column
 * @method     ChildCareBillingArchive[]|ObjectCollection findByPatientName(string $patient_name) Return ChildCareBillingArchive objects filtered by the patient_name column
 * @method     ChildCareBillingArchive[]|ObjectCollection findByVorname(string $vorname) Return ChildCareBillingArchive objects filtered by the vorname column
 * @method     ChildCareBillingArchive[]|ObjectCollection findByBillDateTime(string $bill_date_time) Return ChildCareBillingArchive objects filtered by the bill_date_time column
 * @method     ChildCareBillingArchive[]|ObjectCollection findByBillAmt(double $bill_amt) Return ChildCareBillingArchive objects filtered by the bill_amt column
 * @method     ChildCareBillingArchive[]|ObjectCollection findByPaymentDateTime(string $payment_date_time) Return ChildCareBillingArchive objects filtered by the payment_date_time column
 * @method     ChildCareBillingArchive[]|ObjectCollection findByPaymentMode(string $payment_mode) Return ChildCareBillingArchive objects filtered by the payment_mode column
 * @method     ChildCareBillingArchive[]|ObjectCollection findByChequeNo(string $cheque_no) Return ChildCareBillingArchive objects filtered by the cheque_no column
 * @method     ChildCareBillingArchive[]|ObjectCollection findByCreditcardNo(string $creditcard_no) Return ChildCareBillingArchive objects filtered by the creditcard_no column
 * @method     ChildCareBillingArchive[]|ObjectCollection findByPaidBy(string $paid_by) Return ChildCareBillingArchive objects filtered by the paid_by column
 * @method     ChildCareBillingArchive[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareBillingArchiveQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareBillingArchiveQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareBillingArchive', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareBillingArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareBillingArchiveQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareBillingArchiveQuery) {
            return $criteria;
        }
        $query = new ChildCareBillingArchiveQuery();
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
     * @return ChildCareBillingArchive|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareBillingArchiveTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareBillingArchiveTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareBillingArchive A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT bill_no, encounter_nr, patient_name, vorname, bill_date_time, bill_amt, payment_date_time, payment_mode, cheque_no, creditcard_no, paid_by FROM care_billing_archive WHERE bill_no = :p0';
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
            /** @var ChildCareBillingArchive $obj */
            $obj = new ChildCareBillingArchive();
            $obj->hydrate($row);
            CareBillingArchiveTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareBillingArchive|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_BILL_NO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_BILL_NO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the bill_no column
     *
     * Example usage:
     * <code>
     * $query->filterByBillNo(1234); // WHERE bill_no = 1234
     * $query->filterByBillNo(array(12, 34)); // WHERE bill_no IN (12, 34)
     * $query->filterByBillNo(array('min' => 12)); // WHERE bill_no > 12
     * </code>
     *
     * @param     mixed $billNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByBillNo($billNo = null, $comparison = null)
    {
        if (is_array($billNo)) {
            $useMinMax = false;
            if (isset($billNo['min'])) {
                $this->addUsingAlias(CareBillingArchiveTableMap::COL_BILL_NO, $billNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billNo['max'])) {
                $this->addUsingAlias(CareBillingArchiveTableMap::COL_BILL_NO, $billNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_BILL_NO, $billNo, $comparison);
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
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareBillingArchiveTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareBillingArchiveTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the patient_name column
     *
     * Example usage:
     * <code>
     * $query->filterByPatientName('fooValue');   // WHERE patient_name = 'fooValue'
     * $query->filterByPatientName('%fooValue%', Criteria::LIKE); // WHERE patient_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $patientName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByPatientName($patientName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($patientName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_PATIENT_NAME, $patientName, $comparison);
    }

    /**
     * Filter the query on the vorname column
     *
     * Example usage:
     * <code>
     * $query->filterByVorname('fooValue');   // WHERE vorname = 'fooValue'
     * $query->filterByVorname('%fooValue%', Criteria::LIKE); // WHERE vorname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vorname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByVorname($vorname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vorname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_VORNAME, $vorname, $comparison);
    }

    /**
     * Filter the query on the bill_date_time column
     *
     * Example usage:
     * <code>
     * $query->filterByBillDateTime('2011-03-14'); // WHERE bill_date_time = '2011-03-14'
     * $query->filterByBillDateTime('now'); // WHERE bill_date_time = '2011-03-14'
     * $query->filterByBillDateTime(array('max' => 'yesterday')); // WHERE bill_date_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $billDateTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByBillDateTime($billDateTime = null, $comparison = null)
    {
        if (is_array($billDateTime)) {
            $useMinMax = false;
            if (isset($billDateTime['min'])) {
                $this->addUsingAlias(CareBillingArchiveTableMap::COL_BILL_DATE_TIME, $billDateTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billDateTime['max'])) {
                $this->addUsingAlias(CareBillingArchiveTableMap::COL_BILL_DATE_TIME, $billDateTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_BILL_DATE_TIME, $billDateTime, $comparison);
    }

    /**
     * Filter the query on the bill_amt column
     *
     * Example usage:
     * <code>
     * $query->filterByBillAmt(1234); // WHERE bill_amt = 1234
     * $query->filterByBillAmt(array(12, 34)); // WHERE bill_amt IN (12, 34)
     * $query->filterByBillAmt(array('min' => 12)); // WHERE bill_amt > 12
     * </code>
     *
     * @param     mixed $billAmt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByBillAmt($billAmt = null, $comparison = null)
    {
        if (is_array($billAmt)) {
            $useMinMax = false;
            if (isset($billAmt['min'])) {
                $this->addUsingAlias(CareBillingArchiveTableMap::COL_BILL_AMT, $billAmt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billAmt['max'])) {
                $this->addUsingAlias(CareBillingArchiveTableMap::COL_BILL_AMT, $billAmt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_BILL_AMT, $billAmt, $comparison);
    }

    /**
     * Filter the query on the payment_date_time column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentDateTime('2011-03-14'); // WHERE payment_date_time = '2011-03-14'
     * $query->filterByPaymentDateTime('now'); // WHERE payment_date_time = '2011-03-14'
     * $query->filterByPaymentDateTime(array('max' => 'yesterday')); // WHERE payment_date_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $paymentDateTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByPaymentDateTime($paymentDateTime = null, $comparison = null)
    {
        if (is_array($paymentDateTime)) {
            $useMinMax = false;
            if (isset($paymentDateTime['min'])) {
                $this->addUsingAlias(CareBillingArchiveTableMap::COL_PAYMENT_DATE_TIME, $paymentDateTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentDateTime['max'])) {
                $this->addUsingAlias(CareBillingArchiveTableMap::COL_PAYMENT_DATE_TIME, $paymentDateTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_PAYMENT_DATE_TIME, $paymentDateTime, $comparison);
    }

    /**
     * Filter the query on the payment_mode column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentMode('fooValue');   // WHERE payment_mode = 'fooValue'
     * $query->filterByPaymentMode('%fooValue%', Criteria::LIKE); // WHERE payment_mode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paymentMode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByPaymentMode($paymentMode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paymentMode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_PAYMENT_MODE, $paymentMode, $comparison);
    }

    /**
     * Filter the query on the cheque_no column
     *
     * Example usage:
     * <code>
     * $query->filterByChequeNo('fooValue');   // WHERE cheque_no = 'fooValue'
     * $query->filterByChequeNo('%fooValue%', Criteria::LIKE); // WHERE cheque_no LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chequeNo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByChequeNo($chequeNo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chequeNo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_CHEQUE_NO, $chequeNo, $comparison);
    }

    /**
     * Filter the query on the creditcard_no column
     *
     * Example usage:
     * <code>
     * $query->filterByCreditcardNo('fooValue');   // WHERE creditcard_no = 'fooValue'
     * $query->filterByCreditcardNo('%fooValue%', Criteria::LIKE); // WHERE creditcard_no LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creditcardNo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByCreditcardNo($creditcardNo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creditcardNo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_CREDITCARD_NO, $creditcardNo, $comparison);
    }

    /**
     * Filter the query on the paid_by column
     *
     * Example usage:
     * <code>
     * $query->filterByPaidBy('fooValue');   // WHERE paid_by = 'fooValue'
     * $query->filterByPaidBy('%fooValue%', Criteria::LIKE); // WHERE paid_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paidBy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByPaidBy($paidBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paidBy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingArchiveTableMap::COL_PAID_BY, $paidBy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareBillingArchive $careBillingArchive Object to remove from the list of results
     *
     * @return $this|ChildCareBillingArchiveQuery The current query, for fluid interface
     */
    public function prune($careBillingArchive = null)
    {
        if ($careBillingArchive) {
            $this->addUsingAlias(CareBillingArchiveTableMap::COL_BILL_NO, $careBillingArchive->getBillNo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_billing_archive table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingArchiveTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareBillingArchiveTableMap::clearInstancePool();
            CareBillingArchiveTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingArchiveTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareBillingArchiveTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareBillingArchiveTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareBillingArchiveTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareBillingArchiveQuery
