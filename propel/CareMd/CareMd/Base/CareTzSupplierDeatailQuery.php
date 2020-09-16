<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzSupplierDeatail as ChildCareTzSupplierDeatail;
use CareMd\CareMd\CareTzSupplierDeatailQuery as ChildCareTzSupplierDeatailQuery;
use CareMd\CareMd\Map\CareTzSupplierDeatailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_supplier_deatail' table.
 *
 *
 *
 * @method     ChildCareTzSupplierDeatailQuery orderBySuplierId($order = Criteria::ASC) Order by the Suplier_id column
 * @method     ChildCareTzSupplierDeatailQuery orderByCompanyName($order = Criteria::ASC) Order by the Company_Name column
 * @method     ChildCareTzSupplierDeatailQuery orderByContactPerson($order = Criteria::ASC) Order by the Contact_Person column
 * @method     ChildCareTzSupplierDeatailQuery orderByAddress1($order = Criteria::ASC) Order by the Address1 column
 * @method     ChildCareTzSupplierDeatailQuery orderByAddress2($order = Criteria::ASC) Order by the Address2 column
 * @method     ChildCareTzSupplierDeatailQuery orderByPhone1($order = Criteria::ASC) Order by the Phone1 column
 * @method     ChildCareTzSupplierDeatailQuery orderByPhone2($order = Criteria::ASC) Order by the Phone2 column
 * @method     ChildCareTzSupplierDeatailQuery orderByCell1($order = Criteria::ASC) Order by the Cell1 column
 * @method     ChildCareTzSupplierDeatailQuery orderByCell2($order = Criteria::ASC) Order by the Cell2 column
 * @method     ChildCareTzSupplierDeatailQuery orderByEmail($order = Criteria::ASC) Order by the Email column
 * @method     ChildCareTzSupplierDeatailQuery orderByFax($order = Criteria::ASC) Order by the Fax column
 * @method     ChildCareTzSupplierDeatailQuery orderByBanker($order = Criteria::ASC) Order by the Banker column
 * @method     ChildCareTzSupplierDeatailQuery orderByBankDetails($order = Criteria::ASC) Order by the Bank_Details column
 * @method     ChildCareTzSupplierDeatailQuery orderByAccountNo($order = Criteria::ASC) Order by the Account_no column
 * @method     ChildCareTzSupplierDeatailQuery orderByCreditLimit($order = Criteria::ASC) Order by the Credit_Limit column
 * @method     ChildCareTzSupplierDeatailQuery orderByCreditPeriod($order = Criteria::ASC) Order by the Credit_Period column
 *
 * @method     ChildCareTzSupplierDeatailQuery groupBySuplierId() Group by the Suplier_id column
 * @method     ChildCareTzSupplierDeatailQuery groupByCompanyName() Group by the Company_Name column
 * @method     ChildCareTzSupplierDeatailQuery groupByContactPerson() Group by the Contact_Person column
 * @method     ChildCareTzSupplierDeatailQuery groupByAddress1() Group by the Address1 column
 * @method     ChildCareTzSupplierDeatailQuery groupByAddress2() Group by the Address2 column
 * @method     ChildCareTzSupplierDeatailQuery groupByPhone1() Group by the Phone1 column
 * @method     ChildCareTzSupplierDeatailQuery groupByPhone2() Group by the Phone2 column
 * @method     ChildCareTzSupplierDeatailQuery groupByCell1() Group by the Cell1 column
 * @method     ChildCareTzSupplierDeatailQuery groupByCell2() Group by the Cell2 column
 * @method     ChildCareTzSupplierDeatailQuery groupByEmail() Group by the Email column
 * @method     ChildCareTzSupplierDeatailQuery groupByFax() Group by the Fax column
 * @method     ChildCareTzSupplierDeatailQuery groupByBanker() Group by the Banker column
 * @method     ChildCareTzSupplierDeatailQuery groupByBankDetails() Group by the Bank_Details column
 * @method     ChildCareTzSupplierDeatailQuery groupByAccountNo() Group by the Account_no column
 * @method     ChildCareTzSupplierDeatailQuery groupByCreditLimit() Group by the Credit_Limit column
 * @method     ChildCareTzSupplierDeatailQuery groupByCreditPeriod() Group by the Credit_Period column
 *
 * @method     ChildCareTzSupplierDeatailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzSupplierDeatailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzSupplierDeatailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzSupplierDeatailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzSupplierDeatailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzSupplierDeatailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzSupplierDeatail findOne(ConnectionInterface $con = null) Return the first ChildCareTzSupplierDeatail matching the query
 * @method     ChildCareTzSupplierDeatail findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzSupplierDeatail matching the query, or a new ChildCareTzSupplierDeatail object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzSupplierDeatail findOneBySuplierId(int $Suplier_id) Return the first ChildCareTzSupplierDeatail filtered by the Suplier_id column
 * @method     ChildCareTzSupplierDeatail findOneByCompanyName(string $Company_Name) Return the first ChildCareTzSupplierDeatail filtered by the Company_Name column
 * @method     ChildCareTzSupplierDeatail findOneByContactPerson(string $Contact_Person) Return the first ChildCareTzSupplierDeatail filtered by the Contact_Person column
 * @method     ChildCareTzSupplierDeatail findOneByAddress1(string $Address1) Return the first ChildCareTzSupplierDeatail filtered by the Address1 column
 * @method     ChildCareTzSupplierDeatail findOneByAddress2(string $Address2) Return the first ChildCareTzSupplierDeatail filtered by the Address2 column
 * @method     ChildCareTzSupplierDeatail findOneByPhone1(string $Phone1) Return the first ChildCareTzSupplierDeatail filtered by the Phone1 column
 * @method     ChildCareTzSupplierDeatail findOneByPhone2(string $Phone2) Return the first ChildCareTzSupplierDeatail filtered by the Phone2 column
 * @method     ChildCareTzSupplierDeatail findOneByCell1(string $Cell1) Return the first ChildCareTzSupplierDeatail filtered by the Cell1 column
 * @method     ChildCareTzSupplierDeatail findOneByCell2(string $Cell2) Return the first ChildCareTzSupplierDeatail filtered by the Cell2 column
 * @method     ChildCareTzSupplierDeatail findOneByEmail(string $Email) Return the first ChildCareTzSupplierDeatail filtered by the Email column
 * @method     ChildCareTzSupplierDeatail findOneByFax(string $Fax) Return the first ChildCareTzSupplierDeatail filtered by the Fax column
 * @method     ChildCareTzSupplierDeatail findOneByBanker(string $Banker) Return the first ChildCareTzSupplierDeatail filtered by the Banker column
 * @method     ChildCareTzSupplierDeatail findOneByBankDetails(string $Bank_Details) Return the first ChildCareTzSupplierDeatail filtered by the Bank_Details column
 * @method     ChildCareTzSupplierDeatail findOneByAccountNo(string $Account_no) Return the first ChildCareTzSupplierDeatail filtered by the Account_no column
 * @method     ChildCareTzSupplierDeatail findOneByCreditLimit(string $Credit_Limit) Return the first ChildCareTzSupplierDeatail filtered by the Credit_Limit column
 * @method     ChildCareTzSupplierDeatail findOneByCreditPeriod(string $Credit_Period) Return the first ChildCareTzSupplierDeatail filtered by the Credit_Period column *

 * @method     ChildCareTzSupplierDeatail requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzSupplierDeatail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOne(ConnectionInterface $con = null) Return the first ChildCareTzSupplierDeatail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzSupplierDeatail requireOneBySuplierId(int $Suplier_id) Return the first ChildCareTzSupplierDeatail filtered by the Suplier_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByCompanyName(string $Company_Name) Return the first ChildCareTzSupplierDeatail filtered by the Company_Name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByContactPerson(string $Contact_Person) Return the first ChildCareTzSupplierDeatail filtered by the Contact_Person column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByAddress1(string $Address1) Return the first ChildCareTzSupplierDeatail filtered by the Address1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByAddress2(string $Address2) Return the first ChildCareTzSupplierDeatail filtered by the Address2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByPhone1(string $Phone1) Return the first ChildCareTzSupplierDeatail filtered by the Phone1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByPhone2(string $Phone2) Return the first ChildCareTzSupplierDeatail filtered by the Phone2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByCell1(string $Cell1) Return the first ChildCareTzSupplierDeatail filtered by the Cell1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByCell2(string $Cell2) Return the first ChildCareTzSupplierDeatail filtered by the Cell2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByEmail(string $Email) Return the first ChildCareTzSupplierDeatail filtered by the Email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByFax(string $Fax) Return the first ChildCareTzSupplierDeatail filtered by the Fax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByBanker(string $Banker) Return the first ChildCareTzSupplierDeatail filtered by the Banker column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByBankDetails(string $Bank_Details) Return the first ChildCareTzSupplierDeatail filtered by the Bank_Details column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByAccountNo(string $Account_no) Return the first ChildCareTzSupplierDeatail filtered by the Account_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByCreditLimit(string $Credit_Limit) Return the first ChildCareTzSupplierDeatail filtered by the Credit_Limit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzSupplierDeatail requireOneByCreditPeriod(string $Credit_Period) Return the first ChildCareTzSupplierDeatail filtered by the Credit_Period column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzSupplierDeatail objects based on current ModelCriteria
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findBySuplierId(int $Suplier_id) Return ChildCareTzSupplierDeatail objects filtered by the Suplier_id column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByCompanyName(string $Company_Name) Return ChildCareTzSupplierDeatail objects filtered by the Company_Name column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByContactPerson(string $Contact_Person) Return ChildCareTzSupplierDeatail objects filtered by the Contact_Person column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByAddress1(string $Address1) Return ChildCareTzSupplierDeatail objects filtered by the Address1 column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByAddress2(string $Address2) Return ChildCareTzSupplierDeatail objects filtered by the Address2 column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByPhone1(string $Phone1) Return ChildCareTzSupplierDeatail objects filtered by the Phone1 column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByPhone2(string $Phone2) Return ChildCareTzSupplierDeatail objects filtered by the Phone2 column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByCell1(string $Cell1) Return ChildCareTzSupplierDeatail objects filtered by the Cell1 column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByCell2(string $Cell2) Return ChildCareTzSupplierDeatail objects filtered by the Cell2 column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByEmail(string $Email) Return ChildCareTzSupplierDeatail objects filtered by the Email column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByFax(string $Fax) Return ChildCareTzSupplierDeatail objects filtered by the Fax column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByBanker(string $Banker) Return ChildCareTzSupplierDeatail objects filtered by the Banker column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByBankDetails(string $Bank_Details) Return ChildCareTzSupplierDeatail objects filtered by the Bank_Details column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByAccountNo(string $Account_no) Return ChildCareTzSupplierDeatail objects filtered by the Account_no column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByCreditLimit(string $Credit_Limit) Return ChildCareTzSupplierDeatail objects filtered by the Credit_Limit column
 * @method     ChildCareTzSupplierDeatail[]|ObjectCollection findByCreditPeriod(string $Credit_Period) Return ChildCareTzSupplierDeatail objects filtered by the Credit_Period column
 * @method     ChildCareTzSupplierDeatail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzSupplierDeatailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzSupplierDeatailQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzSupplierDeatail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzSupplierDeatailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzSupplierDeatailQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzSupplierDeatailQuery) {
            return $criteria;
        }
        $query = new ChildCareTzSupplierDeatailQuery();
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
     * @return ChildCareTzSupplierDeatail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzSupplierDeatailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzSupplierDeatailTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzSupplierDeatail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT Suplier_id, Company_Name, Contact_Person, Address1, Address2, Phone1, Phone2, Cell1, Cell2, Email, Fax, Banker, Bank_Details, Account_no, Credit_Limit, Credit_Period FROM care_tz_supplier_deatail WHERE Suplier_id = :p0';
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
            /** @var ChildCareTzSupplierDeatail $obj */
            $obj = new ChildCareTzSupplierDeatail();
            $obj->hydrate($row);
            CareTzSupplierDeatailTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzSupplierDeatail|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_SUPLIER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_SUPLIER_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Suplier_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySuplierId(1234); // WHERE Suplier_id = 1234
     * $query->filterBySuplierId(array(12, 34)); // WHERE Suplier_id IN (12, 34)
     * $query->filterBySuplierId(array('min' => 12)); // WHERE Suplier_id > 12
     * </code>
     *
     * @param     mixed $suplierId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterBySuplierId($suplierId = null, $comparison = null)
    {
        if (is_array($suplierId)) {
            $useMinMax = false;
            if (isset($suplierId['min'])) {
                $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_SUPLIER_ID, $suplierId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($suplierId['max'])) {
                $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_SUPLIER_ID, $suplierId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_SUPLIER_ID, $suplierId, $comparison);
    }

    /**
     * Filter the query on the Company_Name column
     *
     * Example usage:
     * <code>
     * $query->filterByCompanyName('fooValue');   // WHERE Company_Name = 'fooValue'
     * $query->filterByCompanyName('%fooValue%', Criteria::LIKE); // WHERE Company_Name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $companyName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByCompanyName($companyName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($companyName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_COMPANY_NAME, $companyName, $comparison);
    }

    /**
     * Filter the query on the Contact_Person column
     *
     * Example usage:
     * <code>
     * $query->filterByContactPerson('fooValue');   // WHERE Contact_Person = 'fooValue'
     * $query->filterByContactPerson('%fooValue%', Criteria::LIKE); // WHERE Contact_Person LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactPerson The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByContactPerson($contactPerson = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactPerson)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_CONTACT_PERSON, $contactPerson, $comparison);
    }

    /**
     * Filter the query on the Address1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress1('fooValue');   // WHERE Address1 = 'fooValue'
     * $query->filterByAddress1('%fooValue%', Criteria::LIKE); // WHERE Address1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByAddress1($address1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_ADDRESS1, $address1, $comparison);
    }

    /**
     * Filter the query on the Address2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress2('fooValue');   // WHERE Address2 = 'fooValue'
     * $query->filterByAddress2('%fooValue%', Criteria::LIKE); // WHERE Address2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByAddress2($address2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_ADDRESS2, $address2, $comparison);
    }

    /**
     * Filter the query on the Phone1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone1('fooValue');   // WHERE Phone1 = 'fooValue'
     * $query->filterByPhone1('%fooValue%', Criteria::LIKE); // WHERE Phone1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByPhone1($phone1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_PHONE1, $phone1, $comparison);
    }

    /**
     * Filter the query on the Phone2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone2('fooValue');   // WHERE Phone2 = 'fooValue'
     * $query->filterByPhone2('%fooValue%', Criteria::LIKE); // WHERE Phone2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByPhone2($phone2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_PHONE2, $phone2, $comparison);
    }

    /**
     * Filter the query on the Cell1 column
     *
     * Example usage:
     * <code>
     * $query->filterByCell1('fooValue');   // WHERE Cell1 = 'fooValue'
     * $query->filterByCell1('%fooValue%', Criteria::LIKE); // WHERE Cell1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cell1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByCell1($cell1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cell1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_CELL1, $cell1, $comparison);
    }

    /**
     * Filter the query on the Cell2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCell2('fooValue');   // WHERE Cell2 = 'fooValue'
     * $query->filterByCell2('%fooValue%', Criteria::LIKE); // WHERE Cell2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cell2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByCell2($cell2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cell2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_CELL2, $cell2, $comparison);
    }

    /**
     * Filter the query on the Email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE Email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE Email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the Fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE Fax = 'fooValue'
     * $query->filterByFax('%fooValue%', Criteria::LIKE); // WHERE Fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the Banker column
     *
     * Example usage:
     * <code>
     * $query->filterByBanker('fooValue');   // WHERE Banker = 'fooValue'
     * $query->filterByBanker('%fooValue%', Criteria::LIKE); // WHERE Banker LIKE '%fooValue%'
     * </code>
     *
     * @param     string $banker The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByBanker($banker = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($banker)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_BANKER, $banker, $comparison);
    }

    /**
     * Filter the query on the Bank_Details column
     *
     * Example usage:
     * <code>
     * $query->filterByBankDetails('fooValue');   // WHERE Bank_Details = 'fooValue'
     * $query->filterByBankDetails('%fooValue%', Criteria::LIKE); // WHERE Bank_Details LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bankDetails The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByBankDetails($bankDetails = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bankDetails)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_BANK_DETAILS, $bankDetails, $comparison);
    }

    /**
     * Filter the query on the Account_no column
     *
     * Example usage:
     * <code>
     * $query->filterByAccountNo('fooValue');   // WHERE Account_no = 'fooValue'
     * $query->filterByAccountNo('%fooValue%', Criteria::LIKE); // WHERE Account_no LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accountNo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByAccountNo($accountNo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accountNo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_ACCOUNT_NO, $accountNo, $comparison);
    }

    /**
     * Filter the query on the Credit_Limit column
     *
     * Example usage:
     * <code>
     * $query->filterByCreditLimit('fooValue');   // WHERE Credit_Limit = 'fooValue'
     * $query->filterByCreditLimit('%fooValue%', Criteria::LIKE); // WHERE Credit_Limit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creditLimit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByCreditLimit($creditLimit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creditLimit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_CREDIT_LIMIT, $creditLimit, $comparison);
    }

    /**
     * Filter the query on the Credit_Period column
     *
     * Example usage:
     * <code>
     * $query->filterByCreditPeriod('fooValue');   // WHERE Credit_Period = 'fooValue'
     * $query->filterByCreditPeriod('%fooValue%', Criteria::LIKE); // WHERE Credit_Period LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creditPeriod The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function filterByCreditPeriod($creditPeriod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creditPeriod)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_CREDIT_PERIOD, $creditPeriod, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzSupplierDeatail $careTzSupplierDeatail Object to remove from the list of results
     *
     * @return $this|ChildCareTzSupplierDeatailQuery The current query, for fluid interface
     */
    public function prune($careTzSupplierDeatail = null)
    {
        if ($careTzSupplierDeatail) {
            $this->addUsingAlias(CareTzSupplierDeatailTableMap::COL_SUPLIER_ID, $careTzSupplierDeatail->getSuplierId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_supplier_deatail table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzSupplierDeatailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzSupplierDeatailTableMap::clearInstancePool();
            CareTzSupplierDeatailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzSupplierDeatailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzSupplierDeatailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzSupplierDeatailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzSupplierDeatailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzSupplierDeatailQuery
