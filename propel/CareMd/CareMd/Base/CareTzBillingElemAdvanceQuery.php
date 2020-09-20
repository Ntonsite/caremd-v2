<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzBillingElemAdvance as ChildCareTzBillingElemAdvance;
use CareMd\CareMd\CareTzBillingElemAdvanceQuery as ChildCareTzBillingElemAdvanceQuery;
use CareMd\CareMd\Map\CareTzBillingElemAdvanceTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_billing_elem_advance' table.
 *
 *
 *
 * @method     ChildCareTzBillingElemAdvanceQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByDateChange($order = Criteria::ASC) Order by the date_change column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByIsLabtest($order = Criteria::ASC) Order by the is_labtest column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByIsMedicine($order = Criteria::ASC) Order by the is_medicine column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByIsRadioTest($order = Criteria::ASC) Order by the is_radio_test column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByIsComment($order = Criteria::ASC) Order by the is_comment column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByIsPaid($order = Criteria::ASC) Order by the is_paid column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByAmountDoc($order = Criteria::ASC) Order by the amount_doc column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByTimesPerDay($order = Criteria::ASC) Order by the times_per_day column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByDays($order = Criteria::ASC) Order by the days column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByBalancedInsurance($order = Criteria::ASC) Order by the balanced_insurance column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByInsuranceId($order = Criteria::ASC) Order by the insurance_id column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByItemNumber($order = Criteria::ASC) Order by the item_number column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByPrescriptionsNr($order = Criteria::ASC) Order by the prescriptions_nr column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByIsDepositItem($order = Criteria::ASC) Order by the is_deposit_item column
 * @method     ChildCareTzBillingElemAdvanceQuery orderByUserId($order = Criteria::ASC) Order by the User_Id column
 *
 * @method     ChildCareTzBillingElemAdvanceQuery groupById() Group by the ID column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByNr() Group by the nr column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByDateChange() Group by the date_change column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByIsLabtest() Group by the is_labtest column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByIsMedicine() Group by the is_medicine column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByIsRadioTest() Group by the is_radio_test column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByIsComment() Group by the is_comment column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByIsPaid() Group by the is_paid column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByAmount() Group by the amount column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByAmountDoc() Group by the amount_doc column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByTimesPerDay() Group by the times_per_day column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByDays() Group by the days column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByPrice() Group by the price column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByBalancedInsurance() Group by the balanced_insurance column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByInsuranceId() Group by the insurance_id column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByDescription() Group by the description column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByNotes() Group by the notes column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByItemNumber() Group by the item_number column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByPrescriptionsNr() Group by the prescriptions_nr column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByIsDepositItem() Group by the is_deposit_item column
 * @method     ChildCareTzBillingElemAdvanceQuery groupByUserId() Group by the User_Id column
 *
 * @method     ChildCareTzBillingElemAdvanceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzBillingElemAdvanceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzBillingElemAdvanceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzBillingElemAdvanceQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzBillingElemAdvanceQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzBillingElemAdvanceQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzBillingElemAdvance findOne(ConnectionInterface $con = null) Return the first ChildCareTzBillingElemAdvance matching the query
 * @method     ChildCareTzBillingElemAdvance findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzBillingElemAdvance matching the query, or a new ChildCareTzBillingElemAdvance object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzBillingElemAdvance findOneById(string $ID) Return the first ChildCareTzBillingElemAdvance filtered by the ID column
 * @method     ChildCareTzBillingElemAdvance findOneByNr(string $nr) Return the first ChildCareTzBillingElemAdvance filtered by the nr column
 * @method     ChildCareTzBillingElemAdvance findOneByDateChange(string $date_change) Return the first ChildCareTzBillingElemAdvance filtered by the date_change column
 * @method     ChildCareTzBillingElemAdvance findOneByIsLabtest(int $is_labtest) Return the first ChildCareTzBillingElemAdvance filtered by the is_labtest column
 * @method     ChildCareTzBillingElemAdvance findOneByIsMedicine(int $is_medicine) Return the first ChildCareTzBillingElemAdvance filtered by the is_medicine column
 * @method     ChildCareTzBillingElemAdvance findOneByIsRadioTest(int $is_radio_test) Return the first ChildCareTzBillingElemAdvance filtered by the is_radio_test column
 * @method     ChildCareTzBillingElemAdvance findOneByIsComment(int $is_comment) Return the first ChildCareTzBillingElemAdvance filtered by the is_comment column
 * @method     ChildCareTzBillingElemAdvance findOneByIsPaid(int $is_paid) Return the first ChildCareTzBillingElemAdvance filtered by the is_paid column
 * @method     ChildCareTzBillingElemAdvance findOneByAmount(string $amount) Return the first ChildCareTzBillingElemAdvance filtered by the amount column
 * @method     ChildCareTzBillingElemAdvance findOneByAmountDoc(string $amount_doc) Return the first ChildCareTzBillingElemAdvance filtered by the amount_doc column
 * @method     ChildCareTzBillingElemAdvance findOneByTimesPerDay(int $times_per_day) Return the first ChildCareTzBillingElemAdvance filtered by the times_per_day column
 * @method     ChildCareTzBillingElemAdvance findOneByDays(int $days) Return the first ChildCareTzBillingElemAdvance filtered by the days column
 * @method     ChildCareTzBillingElemAdvance findOneByPrice(string $price) Return the first ChildCareTzBillingElemAdvance filtered by the price column
 * @method     ChildCareTzBillingElemAdvance findOneByBalancedInsurance(string $balanced_insurance) Return the first ChildCareTzBillingElemAdvance filtered by the balanced_insurance column
 * @method     ChildCareTzBillingElemAdvance findOneByInsuranceId(string $insurance_id) Return the first ChildCareTzBillingElemAdvance filtered by the insurance_id column
 * @method     ChildCareTzBillingElemAdvance findOneByDescription(string $description) Return the first ChildCareTzBillingElemAdvance filtered by the description column
 * @method     ChildCareTzBillingElemAdvance findOneByNotes(string $notes) Return the first ChildCareTzBillingElemAdvance filtered by the notes column
 * @method     ChildCareTzBillingElemAdvance findOneByItemNumber(string $item_number) Return the first ChildCareTzBillingElemAdvance filtered by the item_number column
 * @method     ChildCareTzBillingElemAdvance findOneByPrescriptionsNr(string $prescriptions_nr) Return the first ChildCareTzBillingElemAdvance filtered by the prescriptions_nr column
 * @method     ChildCareTzBillingElemAdvance findOneByIsDepositItem(boolean $is_deposit_item) Return the first ChildCareTzBillingElemAdvance filtered by the is_deposit_item column
 * @method     ChildCareTzBillingElemAdvance findOneByUserId(string $User_Id) Return the first ChildCareTzBillingElemAdvance filtered by the User_Id column *

 * @method     ChildCareTzBillingElemAdvance requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzBillingElemAdvance by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOne(ConnectionInterface $con = null) Return the first ChildCareTzBillingElemAdvance matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzBillingElemAdvance requireOneById(string $ID) Return the first ChildCareTzBillingElemAdvance filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByNr(string $nr) Return the first ChildCareTzBillingElemAdvance filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByDateChange(string $date_change) Return the first ChildCareTzBillingElemAdvance filtered by the date_change column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByIsLabtest(int $is_labtest) Return the first ChildCareTzBillingElemAdvance filtered by the is_labtest column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByIsMedicine(int $is_medicine) Return the first ChildCareTzBillingElemAdvance filtered by the is_medicine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByIsRadioTest(int $is_radio_test) Return the first ChildCareTzBillingElemAdvance filtered by the is_radio_test column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByIsComment(int $is_comment) Return the first ChildCareTzBillingElemAdvance filtered by the is_comment column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByIsPaid(int $is_paid) Return the first ChildCareTzBillingElemAdvance filtered by the is_paid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByAmount(string $amount) Return the first ChildCareTzBillingElemAdvance filtered by the amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByAmountDoc(string $amount_doc) Return the first ChildCareTzBillingElemAdvance filtered by the amount_doc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByTimesPerDay(int $times_per_day) Return the first ChildCareTzBillingElemAdvance filtered by the times_per_day column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByDays(int $days) Return the first ChildCareTzBillingElemAdvance filtered by the days column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByPrice(string $price) Return the first ChildCareTzBillingElemAdvance filtered by the price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByBalancedInsurance(string $balanced_insurance) Return the first ChildCareTzBillingElemAdvance filtered by the balanced_insurance column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByInsuranceId(string $insurance_id) Return the first ChildCareTzBillingElemAdvance filtered by the insurance_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByDescription(string $description) Return the first ChildCareTzBillingElemAdvance filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByNotes(string $notes) Return the first ChildCareTzBillingElemAdvance filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByItemNumber(string $item_number) Return the first ChildCareTzBillingElemAdvance filtered by the item_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByPrescriptionsNr(string $prescriptions_nr) Return the first ChildCareTzBillingElemAdvance filtered by the prescriptions_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByIsDepositItem(boolean $is_deposit_item) Return the first ChildCareTzBillingElemAdvance filtered by the is_deposit_item column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingElemAdvance requireOneByUserId(string $User_Id) Return the first ChildCareTzBillingElemAdvance filtered by the User_Id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzBillingElemAdvance objects based on current ModelCriteria
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findById(string $ID) Return ChildCareTzBillingElemAdvance objects filtered by the ID column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByNr(string $nr) Return ChildCareTzBillingElemAdvance objects filtered by the nr column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByDateChange(string $date_change) Return ChildCareTzBillingElemAdvance objects filtered by the date_change column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByIsLabtest(int $is_labtest) Return ChildCareTzBillingElemAdvance objects filtered by the is_labtest column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByIsMedicine(int $is_medicine) Return ChildCareTzBillingElemAdvance objects filtered by the is_medicine column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByIsRadioTest(int $is_radio_test) Return ChildCareTzBillingElemAdvance objects filtered by the is_radio_test column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByIsComment(int $is_comment) Return ChildCareTzBillingElemAdvance objects filtered by the is_comment column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByIsPaid(int $is_paid) Return ChildCareTzBillingElemAdvance objects filtered by the is_paid column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByAmount(string $amount) Return ChildCareTzBillingElemAdvance objects filtered by the amount column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByAmountDoc(string $amount_doc) Return ChildCareTzBillingElemAdvance objects filtered by the amount_doc column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByTimesPerDay(int $times_per_day) Return ChildCareTzBillingElemAdvance objects filtered by the times_per_day column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByDays(int $days) Return ChildCareTzBillingElemAdvance objects filtered by the days column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByPrice(string $price) Return ChildCareTzBillingElemAdvance objects filtered by the price column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByBalancedInsurance(string $balanced_insurance) Return ChildCareTzBillingElemAdvance objects filtered by the balanced_insurance column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByInsuranceId(string $insurance_id) Return ChildCareTzBillingElemAdvance objects filtered by the insurance_id column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByDescription(string $description) Return ChildCareTzBillingElemAdvance objects filtered by the description column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByNotes(string $notes) Return ChildCareTzBillingElemAdvance objects filtered by the notes column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByItemNumber(string $item_number) Return ChildCareTzBillingElemAdvance objects filtered by the item_number column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByPrescriptionsNr(string $prescriptions_nr) Return ChildCareTzBillingElemAdvance objects filtered by the prescriptions_nr column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByIsDepositItem(boolean $is_deposit_item) Return ChildCareTzBillingElemAdvance objects filtered by the is_deposit_item column
 * @method     ChildCareTzBillingElemAdvance[]|ObjectCollection findByUserId(string $User_Id) Return ChildCareTzBillingElemAdvance objects filtered by the User_Id column
 * @method     ChildCareTzBillingElemAdvance[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzBillingElemAdvanceQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzBillingElemAdvanceQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzBillingElemAdvance', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzBillingElemAdvanceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzBillingElemAdvanceQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzBillingElemAdvanceQuery) {
            return $criteria;
        }
        $query = new ChildCareTzBillingElemAdvanceQuery();
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
     * @return ChildCareTzBillingElemAdvance|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzBillingElemAdvanceTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzBillingElemAdvanceTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzBillingElemAdvance A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, nr, date_change, is_labtest, is_medicine, is_radio_test, is_comment, is_paid, amount, amount_doc, times_per_day, days, price, balanced_insurance, insurance_id, description, notes, item_number, prescriptions_nr, is_deposit_item, User_Id FROM care_tz_billing_elem_advance WHERE ID = :p0';
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
            /** @var ChildCareTzBillingElemAdvance $obj */
            $obj = new ChildCareTzBillingElemAdvance();
            $obj->hydrate($row);
            CareTzBillingElemAdvanceTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzBillingElemAdvance|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the date_change column
     *
     * Example usage:
     * <code>
     * $query->filterByDateChange(1234); // WHERE date_change = 1234
     * $query->filterByDateChange(array(12, 34)); // WHERE date_change IN (12, 34)
     * $query->filterByDateChange(array('min' => 12)); // WHERE date_change > 12
     * </code>
     *
     * @param     mixed $dateChange The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByDateChange($dateChange = null, $comparison = null)
    {
        if (is_array($dateChange)) {
            $useMinMax = false;
            if (isset($dateChange['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_DATE_CHANGE, $dateChange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateChange['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_DATE_CHANGE, $dateChange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_DATE_CHANGE, $dateChange, $comparison);
    }

    /**
     * Filter the query on the is_labtest column
     *
     * Example usage:
     * <code>
     * $query->filterByIsLabtest(1234); // WHERE is_labtest = 1234
     * $query->filterByIsLabtest(array(12, 34)); // WHERE is_labtest IN (12, 34)
     * $query->filterByIsLabtest(array('min' => 12)); // WHERE is_labtest > 12
     * </code>
     *
     * @param     mixed $isLabtest The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByIsLabtest($isLabtest = null, $comparison = null)
    {
        if (is_array($isLabtest)) {
            $useMinMax = false;
            if (isset($isLabtest['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_LABTEST, $isLabtest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isLabtest['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_LABTEST, $isLabtest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_LABTEST, $isLabtest, $comparison);
    }

    /**
     * Filter the query on the is_medicine column
     *
     * Example usage:
     * <code>
     * $query->filterByIsMedicine(1234); // WHERE is_medicine = 1234
     * $query->filterByIsMedicine(array(12, 34)); // WHERE is_medicine IN (12, 34)
     * $query->filterByIsMedicine(array('min' => 12)); // WHERE is_medicine > 12
     * </code>
     *
     * @param     mixed $isMedicine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByIsMedicine($isMedicine = null, $comparison = null)
    {
        if (is_array($isMedicine)) {
            $useMinMax = false;
            if (isset($isMedicine['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_MEDICINE, $isMedicine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isMedicine['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_MEDICINE, $isMedicine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_MEDICINE, $isMedicine, $comparison);
    }

    /**
     * Filter the query on the is_radio_test column
     *
     * Example usage:
     * <code>
     * $query->filterByIsRadioTest(1234); // WHERE is_radio_test = 1234
     * $query->filterByIsRadioTest(array(12, 34)); // WHERE is_radio_test IN (12, 34)
     * $query->filterByIsRadioTest(array('min' => 12)); // WHERE is_radio_test > 12
     * </code>
     *
     * @param     mixed $isRadioTest The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByIsRadioTest($isRadioTest = null, $comparison = null)
    {
        if (is_array($isRadioTest)) {
            $useMinMax = false;
            if (isset($isRadioTest['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_RADIO_TEST, $isRadioTest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isRadioTest['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_RADIO_TEST, $isRadioTest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_RADIO_TEST, $isRadioTest, $comparison);
    }

    /**
     * Filter the query on the is_comment column
     *
     * Example usage:
     * <code>
     * $query->filterByIsComment(1234); // WHERE is_comment = 1234
     * $query->filterByIsComment(array(12, 34)); // WHERE is_comment IN (12, 34)
     * $query->filterByIsComment(array('min' => 12)); // WHERE is_comment > 12
     * </code>
     *
     * @param     mixed $isComment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByIsComment($isComment = null, $comparison = null)
    {
        if (is_array($isComment)) {
            $useMinMax = false;
            if (isset($isComment['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_COMMENT, $isComment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isComment['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_COMMENT, $isComment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_COMMENT, $isComment, $comparison);
    }

    /**
     * Filter the query on the is_paid column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPaid(1234); // WHERE is_paid = 1234
     * $query->filterByIsPaid(array(12, 34)); // WHERE is_paid IN (12, 34)
     * $query->filterByIsPaid(array('min' => 12)); // WHERE is_paid > 12
     * </code>
     *
     * @param     mixed $isPaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByIsPaid($isPaid = null, $comparison = null)
    {
        if (is_array($isPaid)) {
            $useMinMax = false;
            if (isset($isPaid['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_PAID, $isPaid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isPaid['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_PAID, $isPaid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_PAID, $isPaid, $comparison);
    }

    /**
     * Filter the query on the amount column
     *
     * Example usage:
     * <code>
     * $query->filterByAmount(1234); // WHERE amount = 1234
     * $query->filterByAmount(array(12, 34)); // WHERE amount IN (12, 34)
     * $query->filterByAmount(array('min' => 12)); // WHERE amount > 12
     * </code>
     *
     * @param     mixed $amount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByAmount($amount = null, $comparison = null)
    {
        if (is_array($amount)) {
            $useMinMax = false;
            if (isset($amount['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amount['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_AMOUNT, $amount, $comparison);
    }

    /**
     * Filter the query on the amount_doc column
     *
     * Example usage:
     * <code>
     * $query->filterByAmountDoc(1234); // WHERE amount_doc = 1234
     * $query->filterByAmountDoc(array(12, 34)); // WHERE amount_doc IN (12, 34)
     * $query->filterByAmountDoc(array('min' => 12)); // WHERE amount_doc > 12
     * </code>
     *
     * @param     mixed $amountDoc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByAmountDoc($amountDoc = null, $comparison = null)
    {
        if (is_array($amountDoc)) {
            $useMinMax = false;
            if (isset($amountDoc['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_AMOUNT_DOC, $amountDoc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amountDoc['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_AMOUNT_DOC, $amountDoc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_AMOUNT_DOC, $amountDoc, $comparison);
    }

    /**
     * Filter the query on the times_per_day column
     *
     * Example usage:
     * <code>
     * $query->filterByTimesPerDay(1234); // WHERE times_per_day = 1234
     * $query->filterByTimesPerDay(array(12, 34)); // WHERE times_per_day IN (12, 34)
     * $query->filterByTimesPerDay(array('min' => 12)); // WHERE times_per_day > 12
     * </code>
     *
     * @param     mixed $timesPerDay The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByTimesPerDay($timesPerDay = null, $comparison = null)
    {
        if (is_array($timesPerDay)) {
            $useMinMax = false;
            if (isset($timesPerDay['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_TIMES_PER_DAY, $timesPerDay['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timesPerDay['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_TIMES_PER_DAY, $timesPerDay['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_TIMES_PER_DAY, $timesPerDay, $comparison);
    }

    /**
     * Filter the query on the days column
     *
     * Example usage:
     * <code>
     * $query->filterByDays(1234); // WHERE days = 1234
     * $query->filterByDays(array(12, 34)); // WHERE days IN (12, 34)
     * $query->filterByDays(array('min' => 12)); // WHERE days > 12
     * </code>
     *
     * @param     mixed $days The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByDays($days = null, $comparison = null)
    {
        if (is_array($days)) {
            $useMinMax = false;
            if (isset($days['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_DAYS, $days['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($days['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_DAYS, $days['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_DAYS, $days, $comparison);
    }

    /**
     * Filter the query on the price column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice('fooValue');   // WHERE price = 'fooValue'
     * $query->filterByPrice('%fooValue%', Criteria::LIKE); // WHERE price LIKE '%fooValue%'
     * </code>
     *
     * @param     string $price The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($price)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the balanced_insurance column
     *
     * Example usage:
     * <code>
     * $query->filterByBalancedInsurance('fooValue');   // WHERE balanced_insurance = 'fooValue'
     * $query->filterByBalancedInsurance('%fooValue%', Criteria::LIKE); // WHERE balanced_insurance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $balancedInsurance The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByBalancedInsurance($balancedInsurance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($balancedInsurance)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_BALANCED_INSURANCE, $balancedInsurance, $comparison);
    }

    /**
     * Filter the query on the insurance_id column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceId(1234); // WHERE insurance_id = 1234
     * $query->filterByInsuranceId(array(12, 34)); // WHERE insurance_id IN (12, 34)
     * $query->filterByInsuranceId(array('min' => 12)); // WHERE insurance_id > 12
     * </code>
     *
     * @param     mixed $insuranceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByInsuranceId($insuranceId = null, $comparison = null)
    {
        if (is_array($insuranceId)) {
            $useMinMax = false;
            if (isset($insuranceId['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_INSURANCE_ID, $insuranceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceId['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_INSURANCE_ID, $insuranceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_INSURANCE_ID, $insuranceId, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_DESCRIPTION, $description, $comparison);
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
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_NOTES, $notes, $comparison);
    }

    /**
     * Filter the query on the item_number column
     *
     * Example usage:
     * <code>
     * $query->filterByItemNumber(1234); // WHERE item_number = 1234
     * $query->filterByItemNumber(array(12, 34)); // WHERE item_number IN (12, 34)
     * $query->filterByItemNumber(array('min' => 12)); // WHERE item_number > 12
     * </code>
     *
     * @param     mixed $itemNumber The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByItemNumber($itemNumber = null, $comparison = null)
    {
        if (is_array($itemNumber)) {
            $useMinMax = false;
            if (isset($itemNumber['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_ITEM_NUMBER, $itemNumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemNumber['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_ITEM_NUMBER, $itemNumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_ITEM_NUMBER, $itemNumber, $comparison);
    }

    /**
     * Filter the query on the prescriptions_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPrescriptionsNr(1234); // WHERE prescriptions_nr = 1234
     * $query->filterByPrescriptionsNr(array(12, 34)); // WHERE prescriptions_nr IN (12, 34)
     * $query->filterByPrescriptionsNr(array('min' => 12)); // WHERE prescriptions_nr > 12
     * </code>
     *
     * @param     mixed $prescriptionsNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByPrescriptionsNr($prescriptionsNr = null, $comparison = null)
    {
        if (is_array($prescriptionsNr)) {
            $useMinMax = false;
            if (isset($prescriptionsNr['min'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_PRESCRIPTIONS_NR, $prescriptionsNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prescriptionsNr['max'])) {
                $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_PRESCRIPTIONS_NR, $prescriptionsNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_PRESCRIPTIONS_NR, $prescriptionsNr, $comparison);
    }

    /**
     * Filter the query on the is_deposit_item column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDepositItem(true); // WHERE is_deposit_item = true
     * $query->filterByIsDepositItem('yes'); // WHERE is_deposit_item = true
     * </code>
     *
     * @param     boolean|string $isDepositItem The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByIsDepositItem($isDepositItem = null, $comparison = null)
    {
        if (is_string($isDepositItem)) {
            $isDepositItem = in_array(strtolower($isDepositItem), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_IS_DEPOSIT_ITEM, $isDepositItem, $comparison);
    }

    /**
     * Filter the query on the User_Id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId('fooValue');   // WHERE User_Id = 'fooValue'
     * $query->filterByUserId('%fooValue%', Criteria::LIKE); // WHERE User_Id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_USER_ID, $userId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzBillingElemAdvance $careTzBillingElemAdvance Object to remove from the list of results
     *
     * @return $this|ChildCareTzBillingElemAdvanceQuery The current query, for fluid interface
     */
    public function prune($careTzBillingElemAdvance = null)
    {
        if ($careTzBillingElemAdvance) {
            $this->addUsingAlias(CareTzBillingElemAdvanceTableMap::COL_ID, $careTzBillingElemAdvance->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_billing_elem_advance table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingElemAdvanceTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzBillingElemAdvanceTableMap::clearInstancePool();
            CareTzBillingElemAdvanceTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingElemAdvanceTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzBillingElemAdvanceTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzBillingElemAdvanceTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzBillingElemAdvanceTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzBillingElemAdvanceQuery
