<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareBillingBill as ChildCareBillingBill;
use CareMd\CareMd\CareBillingBillQuery as ChildCareBillingBillQuery;
use CareMd\CareMd\Map\CareBillingBillTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_billing_bill' table.
 *
 *
 *
 * @method     ChildCareBillingBillQuery orderByBillBillNo($order = Criteria::ASC) Order by the bill_bill_no column
 * @method     ChildCareBillingBillQuery orderByBillEncounterNr($order = Criteria::ASC) Order by the bill_encounter_nr column
 * @method     ChildCareBillingBillQuery orderByBillDateTime($order = Criteria::ASC) Order by the bill_date_time column
 * @method     ChildCareBillingBillQuery orderByBillAmount($order = Criteria::ASC) Order by the bill_amount column
 * @method     ChildCareBillingBillQuery orderByBillOutstanding($order = Criteria::ASC) Order by the bill_outstanding column
 *
 * @method     ChildCareBillingBillQuery groupByBillBillNo() Group by the bill_bill_no column
 * @method     ChildCareBillingBillQuery groupByBillEncounterNr() Group by the bill_encounter_nr column
 * @method     ChildCareBillingBillQuery groupByBillDateTime() Group by the bill_date_time column
 * @method     ChildCareBillingBillQuery groupByBillAmount() Group by the bill_amount column
 * @method     ChildCareBillingBillQuery groupByBillOutstanding() Group by the bill_outstanding column
 *
 * @method     ChildCareBillingBillQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareBillingBillQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareBillingBillQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareBillingBillQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareBillingBillQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareBillingBillQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareBillingBill findOne(ConnectionInterface $con = null) Return the first ChildCareBillingBill matching the query
 * @method     ChildCareBillingBill findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareBillingBill matching the query, or a new ChildCareBillingBill object populated from the query conditions when no match is found
 *
 * @method     ChildCareBillingBill findOneByBillBillNo(string $bill_bill_no) Return the first ChildCareBillingBill filtered by the bill_bill_no column
 * @method     ChildCareBillingBill findOneByBillEncounterNr(int $bill_encounter_nr) Return the first ChildCareBillingBill filtered by the bill_encounter_nr column
 * @method     ChildCareBillingBill findOneByBillDateTime(string $bill_date_time) Return the first ChildCareBillingBill filtered by the bill_date_time column
 * @method     ChildCareBillingBill findOneByBillAmount(double $bill_amount) Return the first ChildCareBillingBill filtered by the bill_amount column
 * @method     ChildCareBillingBill findOneByBillOutstanding(double $bill_outstanding) Return the first ChildCareBillingBill filtered by the bill_outstanding column *

 * @method     ChildCareBillingBill requirePk($key, ConnectionInterface $con = null) Return the ChildCareBillingBill by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBill requireOne(ConnectionInterface $con = null) Return the first ChildCareBillingBill matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareBillingBill requireOneByBillBillNo(string $bill_bill_no) Return the first ChildCareBillingBill filtered by the bill_bill_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBill requireOneByBillEncounterNr(int $bill_encounter_nr) Return the first ChildCareBillingBill filtered by the bill_encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBill requireOneByBillDateTime(string $bill_date_time) Return the first ChildCareBillingBill filtered by the bill_date_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBill requireOneByBillAmount(double $bill_amount) Return the first ChildCareBillingBill filtered by the bill_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareBillingBill requireOneByBillOutstanding(double $bill_outstanding) Return the first ChildCareBillingBill filtered by the bill_outstanding column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareBillingBill[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareBillingBill objects based on current ModelCriteria
 * @method     ChildCareBillingBill[]|ObjectCollection findByBillBillNo(string $bill_bill_no) Return ChildCareBillingBill objects filtered by the bill_bill_no column
 * @method     ChildCareBillingBill[]|ObjectCollection findByBillEncounterNr(int $bill_encounter_nr) Return ChildCareBillingBill objects filtered by the bill_encounter_nr column
 * @method     ChildCareBillingBill[]|ObjectCollection findByBillDateTime(string $bill_date_time) Return ChildCareBillingBill objects filtered by the bill_date_time column
 * @method     ChildCareBillingBill[]|ObjectCollection findByBillAmount(double $bill_amount) Return ChildCareBillingBill objects filtered by the bill_amount column
 * @method     ChildCareBillingBill[]|ObjectCollection findByBillOutstanding(double $bill_outstanding) Return ChildCareBillingBill objects filtered by the bill_outstanding column
 * @method     ChildCareBillingBill[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareBillingBillQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareBillingBillQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareBillingBill', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareBillingBillQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareBillingBillQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareBillingBillQuery) {
            return $criteria;
        }
        $query = new ChildCareBillingBillQuery();
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
     * @return ChildCareBillingBill|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareBillingBillTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareBillingBillTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareBillingBill A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT bill_bill_no, bill_encounter_nr, bill_date_time, bill_amount, bill_outstanding FROM care_billing_bill WHERE bill_bill_no = :p0';
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
            /** @var ChildCareBillingBill $obj */
            $obj = new ChildCareBillingBill();
            $obj->hydrate($row);
            CareBillingBillTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareBillingBill|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareBillingBillQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_BILL_NO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareBillingBillQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_BILL_NO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the bill_bill_no column
     *
     * Example usage:
     * <code>
     * $query->filterByBillBillNo(1234); // WHERE bill_bill_no = 1234
     * $query->filterByBillBillNo(array(12, 34)); // WHERE bill_bill_no IN (12, 34)
     * $query->filterByBillBillNo(array('min' => 12)); // WHERE bill_bill_no > 12
     * </code>
     *
     * @param     mixed $billBillNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillQuery The current query, for fluid interface
     */
    public function filterByBillBillNo($billBillNo = null, $comparison = null)
    {
        if (is_array($billBillNo)) {
            $useMinMax = false;
            if (isset($billBillNo['min'])) {
                $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_BILL_NO, $billBillNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billBillNo['max'])) {
                $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_BILL_NO, $billBillNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_BILL_NO, $billBillNo, $comparison);
    }

    /**
     * Filter the query on the bill_encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByBillEncounterNr(1234); // WHERE bill_encounter_nr = 1234
     * $query->filterByBillEncounterNr(array(12, 34)); // WHERE bill_encounter_nr IN (12, 34)
     * $query->filterByBillEncounterNr(array('min' => 12)); // WHERE bill_encounter_nr > 12
     * </code>
     *
     * @param     mixed $billEncounterNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillQuery The current query, for fluid interface
     */
    public function filterByBillEncounterNr($billEncounterNr = null, $comparison = null)
    {
        if (is_array($billEncounterNr)) {
            $useMinMax = false;
            if (isset($billEncounterNr['min'])) {
                $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_ENCOUNTER_NR, $billEncounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billEncounterNr['max'])) {
                $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_ENCOUNTER_NR, $billEncounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_ENCOUNTER_NR, $billEncounterNr, $comparison);
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
     * @return $this|ChildCareBillingBillQuery The current query, for fluid interface
     */
    public function filterByBillDateTime($billDateTime = null, $comparison = null)
    {
        if (is_array($billDateTime)) {
            $useMinMax = false;
            if (isset($billDateTime['min'])) {
                $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_DATE_TIME, $billDateTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billDateTime['max'])) {
                $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_DATE_TIME, $billDateTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_DATE_TIME, $billDateTime, $comparison);
    }

    /**
     * Filter the query on the bill_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByBillAmount(1234); // WHERE bill_amount = 1234
     * $query->filterByBillAmount(array(12, 34)); // WHERE bill_amount IN (12, 34)
     * $query->filterByBillAmount(array('min' => 12)); // WHERE bill_amount > 12
     * </code>
     *
     * @param     mixed $billAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillQuery The current query, for fluid interface
     */
    public function filterByBillAmount($billAmount = null, $comparison = null)
    {
        if (is_array($billAmount)) {
            $useMinMax = false;
            if (isset($billAmount['min'])) {
                $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_AMOUNT, $billAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billAmount['max'])) {
                $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_AMOUNT, $billAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_AMOUNT, $billAmount, $comparison);
    }

    /**
     * Filter the query on the bill_outstanding column
     *
     * Example usage:
     * <code>
     * $query->filterByBillOutstanding(1234); // WHERE bill_outstanding = 1234
     * $query->filterByBillOutstanding(array(12, 34)); // WHERE bill_outstanding IN (12, 34)
     * $query->filterByBillOutstanding(array('min' => 12)); // WHERE bill_outstanding > 12
     * </code>
     *
     * @param     mixed $billOutstanding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareBillingBillQuery The current query, for fluid interface
     */
    public function filterByBillOutstanding($billOutstanding = null, $comparison = null)
    {
        if (is_array($billOutstanding)) {
            $useMinMax = false;
            if (isset($billOutstanding['min'])) {
                $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_OUTSTANDING, $billOutstanding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billOutstanding['max'])) {
                $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_OUTSTANDING, $billOutstanding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_OUTSTANDING, $billOutstanding, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareBillingBill $careBillingBill Object to remove from the list of results
     *
     * @return $this|ChildCareBillingBillQuery The current query, for fluid interface
     */
    public function prune($careBillingBill = null)
    {
        if ($careBillingBill) {
            $this->addUsingAlias(CareBillingBillTableMap::COL_BILL_BILL_NO, $careBillingBill->getBillBillNo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_billing_bill table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingBillTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareBillingBillTableMap::clearInstancePool();
            CareBillingBillTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareBillingBillTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareBillingBillTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareBillingBillTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareBillingBillTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareBillingBillQuery
