<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzCompany as ChildCareTzCompany;
use CareMd\CareMd\CareTzCompanyQuery as ChildCareTzCompanyQuery;
use CareMd\CareMd\Map\CareTzCompanyTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_company' table.
 *
 *
 *
 * @method     ChildCareTzCompanyQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTzCompanyQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTzCompanyQuery orderByContact($order = Criteria::ASC) Order by the contact column
 * @method     ChildCareTzCompanyQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildCareTzCompanyQuery orderByPhoneCode($order = Criteria::ASC) Order by the phone_code column
 * @method     ChildCareTzCompanyQuery orderByPhoneNr($order = Criteria::ASC) Order by the phone_nr column
 * @method     ChildCareTzCompanyQuery orderByPoBox($order = Criteria::ASC) Order by the po_box column
 * @method     ChildCareTzCompanyQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     ChildCareTzCompanyQuery orderByStartDate($order = Criteria::ASC) Order by the start_date column
 * @method     ChildCareTzCompanyQuery orderByEndDate($order = Criteria::ASC) Order by the end_date column
 * @method     ChildCareTzCompanyQuery orderByInvoiceFlag($order = Criteria::ASC) Order by the invoice_flag column
 * @method     ChildCareTzCompanyQuery orderByCreditPreselectionFlag($order = Criteria::ASC) Order by the credit_preselection_flag column
 * @method     ChildCareTzCompanyQuery orderByHideCompanyFlag($order = Criteria::ASC) Order by the hide_company_flag column
 * @method     ChildCareTzCompanyQuery orderByPrepaidAmount($order = Criteria::ASC) Order by the prepaid_amount column
 * @method     ChildCareTzCompanyQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareTzCompanyQuery orderByEnableMemberExpiry($order = Criteria::ASC) Order by the enable_member_expiry column
 * @method     ChildCareTzCompanyQuery orderByCompanyCode($order = Criteria::ASC) Order by the company_code column
 *
 * @method     ChildCareTzCompanyQuery groupById() Group by the id column
 * @method     ChildCareTzCompanyQuery groupByName() Group by the name column
 * @method     ChildCareTzCompanyQuery groupByContact() Group by the contact column
 * @method     ChildCareTzCompanyQuery groupByEmail() Group by the email column
 * @method     ChildCareTzCompanyQuery groupByPhoneCode() Group by the phone_code column
 * @method     ChildCareTzCompanyQuery groupByPhoneNr() Group by the phone_nr column
 * @method     ChildCareTzCompanyQuery groupByPoBox() Group by the po_box column
 * @method     ChildCareTzCompanyQuery groupByCity() Group by the city column
 * @method     ChildCareTzCompanyQuery groupByStartDate() Group by the start_date column
 * @method     ChildCareTzCompanyQuery groupByEndDate() Group by the end_date column
 * @method     ChildCareTzCompanyQuery groupByInvoiceFlag() Group by the invoice_flag column
 * @method     ChildCareTzCompanyQuery groupByCreditPreselectionFlag() Group by the credit_preselection_flag column
 * @method     ChildCareTzCompanyQuery groupByHideCompanyFlag() Group by the hide_company_flag column
 * @method     ChildCareTzCompanyQuery groupByPrepaidAmount() Group by the prepaid_amount column
 * @method     ChildCareTzCompanyQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareTzCompanyQuery groupByEnableMemberExpiry() Group by the enable_member_expiry column
 * @method     ChildCareTzCompanyQuery groupByCompanyCode() Group by the company_code column
 *
 * @method     ChildCareTzCompanyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzCompanyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzCompanyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzCompanyQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzCompanyQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzCompanyQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzCompany findOne(ConnectionInterface $con = null) Return the first ChildCareTzCompany matching the query
 * @method     ChildCareTzCompany findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzCompany matching the query, or a new ChildCareTzCompany object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzCompany findOneById(string $id) Return the first ChildCareTzCompany filtered by the id column
 * @method     ChildCareTzCompany findOneByName(string $name) Return the first ChildCareTzCompany filtered by the name column
 * @method     ChildCareTzCompany findOneByContact(string $contact) Return the first ChildCareTzCompany filtered by the contact column
 * @method     ChildCareTzCompany findOneByEmail(string $email) Return the first ChildCareTzCompany filtered by the email column
 * @method     ChildCareTzCompany findOneByPhoneCode(int $phone_code) Return the first ChildCareTzCompany filtered by the phone_code column
 * @method     ChildCareTzCompany findOneByPhoneNr(string $phone_nr) Return the first ChildCareTzCompany filtered by the phone_nr column
 * @method     ChildCareTzCompany findOneByPoBox(string $po_box) Return the first ChildCareTzCompany filtered by the po_box column
 * @method     ChildCareTzCompany findOneByCity(string $city) Return the first ChildCareTzCompany filtered by the city column
 * @method     ChildCareTzCompany findOneByStartDate(string $start_date) Return the first ChildCareTzCompany filtered by the start_date column
 * @method     ChildCareTzCompany findOneByEndDate(string $end_date) Return the first ChildCareTzCompany filtered by the end_date column
 * @method     ChildCareTzCompany findOneByInvoiceFlag(int $invoice_flag) Return the first ChildCareTzCompany filtered by the invoice_flag column
 * @method     ChildCareTzCompany findOneByCreditPreselectionFlag(int $credit_preselection_flag) Return the first ChildCareTzCompany filtered by the credit_preselection_flag column
 * @method     ChildCareTzCompany findOneByHideCompanyFlag(int $hide_company_flag) Return the first ChildCareTzCompany filtered by the hide_company_flag column
 * @method     ChildCareTzCompany findOneByPrepaidAmount(int $prepaid_amount) Return the first ChildCareTzCompany filtered by the prepaid_amount column
 * @method     ChildCareTzCompany findOneByModifyId(string $modify_id) Return the first ChildCareTzCompany filtered by the modify_id column
 * @method     ChildCareTzCompany findOneByEnableMemberExpiry(int $enable_member_expiry) Return the first ChildCareTzCompany filtered by the enable_member_expiry column
 * @method     ChildCareTzCompany findOneByCompanyCode(string $company_code) Return the first ChildCareTzCompany filtered by the company_code column *

 * @method     ChildCareTzCompany requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzCompany by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOne(ConnectionInterface $con = null) Return the first ChildCareTzCompany matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzCompany requireOneById(string $id) Return the first ChildCareTzCompany filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByName(string $name) Return the first ChildCareTzCompany filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByContact(string $contact) Return the first ChildCareTzCompany filtered by the contact column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByEmail(string $email) Return the first ChildCareTzCompany filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByPhoneCode(int $phone_code) Return the first ChildCareTzCompany filtered by the phone_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByPhoneNr(string $phone_nr) Return the first ChildCareTzCompany filtered by the phone_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByPoBox(string $po_box) Return the first ChildCareTzCompany filtered by the po_box column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByCity(string $city) Return the first ChildCareTzCompany filtered by the city column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByStartDate(string $start_date) Return the first ChildCareTzCompany filtered by the start_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByEndDate(string $end_date) Return the first ChildCareTzCompany filtered by the end_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByInvoiceFlag(int $invoice_flag) Return the first ChildCareTzCompany filtered by the invoice_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByCreditPreselectionFlag(int $credit_preselection_flag) Return the first ChildCareTzCompany filtered by the credit_preselection_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByHideCompanyFlag(int $hide_company_flag) Return the first ChildCareTzCompany filtered by the hide_company_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByPrepaidAmount(int $prepaid_amount) Return the first ChildCareTzCompany filtered by the prepaid_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByModifyId(string $modify_id) Return the first ChildCareTzCompany filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByEnableMemberExpiry(int $enable_member_expiry) Return the first ChildCareTzCompany filtered by the enable_member_expiry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzCompany requireOneByCompanyCode(string $company_code) Return the first ChildCareTzCompany filtered by the company_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzCompany[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzCompany objects based on current ModelCriteria
 * @method     ChildCareTzCompany[]|ObjectCollection findById(string $id) Return ChildCareTzCompany objects filtered by the id column
 * @method     ChildCareTzCompany[]|ObjectCollection findByName(string $name) Return ChildCareTzCompany objects filtered by the name column
 * @method     ChildCareTzCompany[]|ObjectCollection findByContact(string $contact) Return ChildCareTzCompany objects filtered by the contact column
 * @method     ChildCareTzCompany[]|ObjectCollection findByEmail(string $email) Return ChildCareTzCompany objects filtered by the email column
 * @method     ChildCareTzCompany[]|ObjectCollection findByPhoneCode(int $phone_code) Return ChildCareTzCompany objects filtered by the phone_code column
 * @method     ChildCareTzCompany[]|ObjectCollection findByPhoneNr(string $phone_nr) Return ChildCareTzCompany objects filtered by the phone_nr column
 * @method     ChildCareTzCompany[]|ObjectCollection findByPoBox(string $po_box) Return ChildCareTzCompany objects filtered by the po_box column
 * @method     ChildCareTzCompany[]|ObjectCollection findByCity(string $city) Return ChildCareTzCompany objects filtered by the city column
 * @method     ChildCareTzCompany[]|ObjectCollection findByStartDate(string $start_date) Return ChildCareTzCompany objects filtered by the start_date column
 * @method     ChildCareTzCompany[]|ObjectCollection findByEndDate(string $end_date) Return ChildCareTzCompany objects filtered by the end_date column
 * @method     ChildCareTzCompany[]|ObjectCollection findByInvoiceFlag(int $invoice_flag) Return ChildCareTzCompany objects filtered by the invoice_flag column
 * @method     ChildCareTzCompany[]|ObjectCollection findByCreditPreselectionFlag(int $credit_preselection_flag) Return ChildCareTzCompany objects filtered by the credit_preselection_flag column
 * @method     ChildCareTzCompany[]|ObjectCollection findByHideCompanyFlag(int $hide_company_flag) Return ChildCareTzCompany objects filtered by the hide_company_flag column
 * @method     ChildCareTzCompany[]|ObjectCollection findByPrepaidAmount(int $prepaid_amount) Return ChildCareTzCompany objects filtered by the prepaid_amount column
 * @method     ChildCareTzCompany[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareTzCompany objects filtered by the modify_id column
 * @method     ChildCareTzCompany[]|ObjectCollection findByEnableMemberExpiry(int $enable_member_expiry) Return ChildCareTzCompany objects filtered by the enable_member_expiry column
 * @method     ChildCareTzCompany[]|ObjectCollection findByCompanyCode(string $company_code) Return ChildCareTzCompany objects filtered by the company_code column
 * @method     ChildCareTzCompany[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzCompanyQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzCompanyQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzCompany', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzCompanyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzCompanyQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzCompanyQuery) {
            return $criteria;
        }
        $query = new ChildCareTzCompanyQuery();
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
     * @return ChildCareTzCompany|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzCompanyTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzCompanyTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzCompany A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, name, contact, email, phone_code, phone_nr, po_box, city, start_date, end_date, invoice_flag, credit_preselection_flag, hide_company_flag, prepaid_amount, modify_id, enable_member_expiry, company_code FROM care_tz_company WHERE id = :p0';
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
            /** @var ChildCareTzCompany $obj */
            $obj = new ChildCareTzCompany();
            $obj->hydrate($row);
            CareTzCompanyTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzCompany|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the contact column
     *
     * Example usage:
     * <code>
     * $query->filterByContact('fooValue');   // WHERE contact = 'fooValue'
     * $query->filterByContact('%fooValue%', Criteria::LIKE); // WHERE contact LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contact The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByContact($contact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contact)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_CONTACT, $contact, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the phone_code column
     *
     * Example usage:
     * <code>
     * $query->filterByPhoneCode(1234); // WHERE phone_code = 1234
     * $query->filterByPhoneCode(array(12, 34)); // WHERE phone_code IN (12, 34)
     * $query->filterByPhoneCode(array('min' => 12)); // WHERE phone_code > 12
     * </code>
     *
     * @param     mixed $phoneCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByPhoneCode($phoneCode = null, $comparison = null)
    {
        if (is_array($phoneCode)) {
            $useMinMax = false;
            if (isset($phoneCode['min'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_PHONE_CODE, $phoneCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phoneCode['max'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_PHONE_CODE, $phoneCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_PHONE_CODE, $phoneCode, $comparison);
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
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByPhoneNr($phoneNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phoneNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_PHONE_NR, $phoneNr, $comparison);
    }

    /**
     * Filter the query on the po_box column
     *
     * Example usage:
     * <code>
     * $query->filterByPoBox('fooValue');   // WHERE po_box = 'fooValue'
     * $query->filterByPoBox('%fooValue%', Criteria::LIKE); // WHERE po_box LIKE '%fooValue%'
     * </code>
     *
     * @param     string $poBox The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByPoBox($poBox = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($poBox)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_PO_BOX, $poBox, $comparison);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%', Criteria::LIKE); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_CITY, $city, $comparison);
    }

    /**
     * Filter the query on the start_date column
     *
     * Example usage:
     * <code>
     * $query->filterByStartDate(1234); // WHERE start_date = 1234
     * $query->filterByStartDate(array(12, 34)); // WHERE start_date IN (12, 34)
     * $query->filterByStartDate(array('min' => 12)); // WHERE start_date > 12
     * </code>
     *
     * @param     mixed $startDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByStartDate($startDate = null, $comparison = null)
    {
        if (is_array($startDate)) {
            $useMinMax = false;
            if (isset($startDate['min'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_START_DATE, $startDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startDate['max'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_START_DATE, $startDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_START_DATE, $startDate, $comparison);
    }

    /**
     * Filter the query on the end_date column
     *
     * Example usage:
     * <code>
     * $query->filterByEndDate(1234); // WHERE end_date = 1234
     * $query->filterByEndDate(array(12, 34)); // WHERE end_date IN (12, 34)
     * $query->filterByEndDate(array('min' => 12)); // WHERE end_date > 12
     * </code>
     *
     * @param     mixed $endDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByEndDate($endDate = null, $comparison = null)
    {
        if (is_array($endDate)) {
            $useMinMax = false;
            if (isset($endDate['min'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_END_DATE, $endDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($endDate['max'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_END_DATE, $endDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_END_DATE, $endDate, $comparison);
    }

    /**
     * Filter the query on the invoice_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByInvoiceFlag(1234); // WHERE invoice_flag = 1234
     * $query->filterByInvoiceFlag(array(12, 34)); // WHERE invoice_flag IN (12, 34)
     * $query->filterByInvoiceFlag(array('min' => 12)); // WHERE invoice_flag > 12
     * </code>
     *
     * @param     mixed $invoiceFlag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByInvoiceFlag($invoiceFlag = null, $comparison = null)
    {
        if (is_array($invoiceFlag)) {
            $useMinMax = false;
            if (isset($invoiceFlag['min'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_INVOICE_FLAG, $invoiceFlag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invoiceFlag['max'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_INVOICE_FLAG, $invoiceFlag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_INVOICE_FLAG, $invoiceFlag, $comparison);
    }

    /**
     * Filter the query on the credit_preselection_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByCreditPreselectionFlag(1234); // WHERE credit_preselection_flag = 1234
     * $query->filterByCreditPreselectionFlag(array(12, 34)); // WHERE credit_preselection_flag IN (12, 34)
     * $query->filterByCreditPreselectionFlag(array('min' => 12)); // WHERE credit_preselection_flag > 12
     * </code>
     *
     * @param     mixed $creditPreselectionFlag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByCreditPreselectionFlag($creditPreselectionFlag = null, $comparison = null)
    {
        if (is_array($creditPreselectionFlag)) {
            $useMinMax = false;
            if (isset($creditPreselectionFlag['min'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_CREDIT_PRESELECTION_FLAG, $creditPreselectionFlag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($creditPreselectionFlag['max'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_CREDIT_PRESELECTION_FLAG, $creditPreselectionFlag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_CREDIT_PRESELECTION_FLAG, $creditPreselectionFlag, $comparison);
    }

    /**
     * Filter the query on the hide_company_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByHideCompanyFlag(1234); // WHERE hide_company_flag = 1234
     * $query->filterByHideCompanyFlag(array(12, 34)); // WHERE hide_company_flag IN (12, 34)
     * $query->filterByHideCompanyFlag(array('min' => 12)); // WHERE hide_company_flag > 12
     * </code>
     *
     * @param     mixed $hideCompanyFlag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByHideCompanyFlag($hideCompanyFlag = null, $comparison = null)
    {
        if (is_array($hideCompanyFlag)) {
            $useMinMax = false;
            if (isset($hideCompanyFlag['min'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_HIDE_COMPANY_FLAG, $hideCompanyFlag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hideCompanyFlag['max'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_HIDE_COMPANY_FLAG, $hideCompanyFlag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_HIDE_COMPANY_FLAG, $hideCompanyFlag, $comparison);
    }

    /**
     * Filter the query on the prepaid_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByPrepaidAmount(1234); // WHERE prepaid_amount = 1234
     * $query->filterByPrepaidAmount(array(12, 34)); // WHERE prepaid_amount IN (12, 34)
     * $query->filterByPrepaidAmount(array('min' => 12)); // WHERE prepaid_amount > 12
     * </code>
     *
     * @param     mixed $prepaidAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByPrepaidAmount($prepaidAmount = null, $comparison = null)
    {
        if (is_array($prepaidAmount)) {
            $useMinMax = false;
            if (isset($prepaidAmount['min'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_PREPAID_AMOUNT, $prepaidAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prepaidAmount['max'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_PREPAID_AMOUNT, $prepaidAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_PREPAID_AMOUNT, $prepaidAmount, $comparison);
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
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_MODIFY_ID, $modifyId, $comparison);
    }

    /**
     * Filter the query on the enable_member_expiry column
     *
     * Example usage:
     * <code>
     * $query->filterByEnableMemberExpiry(1234); // WHERE enable_member_expiry = 1234
     * $query->filterByEnableMemberExpiry(array(12, 34)); // WHERE enable_member_expiry IN (12, 34)
     * $query->filterByEnableMemberExpiry(array('min' => 12)); // WHERE enable_member_expiry > 12
     * </code>
     *
     * @param     mixed $enableMemberExpiry The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByEnableMemberExpiry($enableMemberExpiry = null, $comparison = null)
    {
        if (is_array($enableMemberExpiry)) {
            $useMinMax = false;
            if (isset($enableMemberExpiry['min'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_ENABLE_MEMBER_EXPIRY, $enableMemberExpiry['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enableMemberExpiry['max'])) {
                $this->addUsingAlias(CareTzCompanyTableMap::COL_ENABLE_MEMBER_EXPIRY, $enableMemberExpiry['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_ENABLE_MEMBER_EXPIRY, $enableMemberExpiry, $comparison);
    }

    /**
     * Filter the query on the company_code column
     *
     * Example usage:
     * <code>
     * $query->filterByCompanyCode('fooValue');   // WHERE company_code = 'fooValue'
     * $query->filterByCompanyCode('%fooValue%', Criteria::LIKE); // WHERE company_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $companyCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function filterByCompanyCode($companyCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($companyCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzCompanyTableMap::COL_COMPANY_CODE, $companyCode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzCompany $careTzCompany Object to remove from the list of results
     *
     * @return $this|ChildCareTzCompanyQuery The current query, for fluid interface
     */
    public function prune($careTzCompany = null)
    {
        if ($careTzCompany) {
            $this->addUsingAlias(CareTzCompanyTableMap::COL_ID, $careTzCompany->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_company table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzCompanyTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzCompanyTableMap::clearInstancePool();
            CareTzCompanyTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzCompanyTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzCompanyTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzCompanyTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzCompanyTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzCompanyQuery
