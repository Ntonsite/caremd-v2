<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\Locations as ChildLocations;
use CareMd\CareMd\LocationsQuery as ChildLocationsQuery;
use CareMd\CareMd\Map\LocationsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'locations' table.
 *
 *
 *
 * @method     ChildLocationsQuery orderByLoccode($order = Criteria::ASC) Order by the loccode column
 * @method     ChildLocationsQuery orderByLocationname($order = Criteria::ASC) Order by the locationname column
 * @method     ChildLocationsQuery orderByDeladd1($order = Criteria::ASC) Order by the deladd1 column
 * @method     ChildLocationsQuery orderByDeladd2($order = Criteria::ASC) Order by the deladd2 column
 * @method     ChildLocationsQuery orderByDeladd3($order = Criteria::ASC) Order by the deladd3 column
 * @method     ChildLocationsQuery orderByDeladd4($order = Criteria::ASC) Order by the deladd4 column
 * @method     ChildLocationsQuery orderByDeladd5($order = Criteria::ASC) Order by the deladd5 column
 * @method     ChildLocationsQuery orderByDeladd6($order = Criteria::ASC) Order by the deladd6 column
 * @method     ChildLocationsQuery orderByTel($order = Criteria::ASC) Order by the tel column
 * @method     ChildLocationsQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     ChildLocationsQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildLocationsQuery orderByContact($order = Criteria::ASC) Order by the contact column
 * @method     ChildLocationsQuery orderByTaxprovinceid($order = Criteria::ASC) Order by the taxprovinceid column
 * @method     ChildLocationsQuery orderByCashsalecustomer($order = Criteria::ASC) Order by the cashsalecustomer column
 * @method     ChildLocationsQuery orderByCashsalebranch($order = Criteria::ASC) Order by the cashsalebranch column
 * @method     ChildLocationsQuery orderByManaged($order = Criteria::ASC) Order by the managed column
 *
 * @method     ChildLocationsQuery groupByLoccode() Group by the loccode column
 * @method     ChildLocationsQuery groupByLocationname() Group by the locationname column
 * @method     ChildLocationsQuery groupByDeladd1() Group by the deladd1 column
 * @method     ChildLocationsQuery groupByDeladd2() Group by the deladd2 column
 * @method     ChildLocationsQuery groupByDeladd3() Group by the deladd3 column
 * @method     ChildLocationsQuery groupByDeladd4() Group by the deladd4 column
 * @method     ChildLocationsQuery groupByDeladd5() Group by the deladd5 column
 * @method     ChildLocationsQuery groupByDeladd6() Group by the deladd6 column
 * @method     ChildLocationsQuery groupByTel() Group by the tel column
 * @method     ChildLocationsQuery groupByFax() Group by the fax column
 * @method     ChildLocationsQuery groupByEmail() Group by the email column
 * @method     ChildLocationsQuery groupByContact() Group by the contact column
 * @method     ChildLocationsQuery groupByTaxprovinceid() Group by the taxprovinceid column
 * @method     ChildLocationsQuery groupByCashsalecustomer() Group by the cashsalecustomer column
 * @method     ChildLocationsQuery groupByCashsalebranch() Group by the cashsalebranch column
 * @method     ChildLocationsQuery groupByManaged() Group by the managed column
 *
 * @method     ChildLocationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildLocationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildLocationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildLocationsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildLocationsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildLocationsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildLocations findOne(ConnectionInterface $con = null) Return the first ChildLocations matching the query
 * @method     ChildLocations findOneOrCreate(ConnectionInterface $con = null) Return the first ChildLocations matching the query, or a new ChildLocations object populated from the query conditions when no match is found
 *
 * @method     ChildLocations findOneByLoccode(string $loccode) Return the first ChildLocations filtered by the loccode column
 * @method     ChildLocations findOneByLocationname(string $locationname) Return the first ChildLocations filtered by the locationname column
 * @method     ChildLocations findOneByDeladd1(string $deladd1) Return the first ChildLocations filtered by the deladd1 column
 * @method     ChildLocations findOneByDeladd2(string $deladd2) Return the first ChildLocations filtered by the deladd2 column
 * @method     ChildLocations findOneByDeladd3(string $deladd3) Return the first ChildLocations filtered by the deladd3 column
 * @method     ChildLocations findOneByDeladd4(string $deladd4) Return the first ChildLocations filtered by the deladd4 column
 * @method     ChildLocations findOneByDeladd5(string $deladd5) Return the first ChildLocations filtered by the deladd5 column
 * @method     ChildLocations findOneByDeladd6(string $deladd6) Return the first ChildLocations filtered by the deladd6 column
 * @method     ChildLocations findOneByTel(string $tel) Return the first ChildLocations filtered by the tel column
 * @method     ChildLocations findOneByFax(string $fax) Return the first ChildLocations filtered by the fax column
 * @method     ChildLocations findOneByEmail(string $email) Return the first ChildLocations filtered by the email column
 * @method     ChildLocations findOneByContact(string $contact) Return the first ChildLocations filtered by the contact column
 * @method     ChildLocations findOneByTaxprovinceid(int $taxprovinceid) Return the first ChildLocations filtered by the taxprovinceid column
 * @method     ChildLocations findOneByCashsalecustomer(string $cashsalecustomer) Return the first ChildLocations filtered by the cashsalecustomer column
 * @method     ChildLocations findOneByCashsalebranch(string $cashsalebranch) Return the first ChildLocations filtered by the cashsalebranch column
 * @method     ChildLocations findOneByManaged(int $managed) Return the first ChildLocations filtered by the managed column *

 * @method     ChildLocations requirePk($key, ConnectionInterface $con = null) Return the ChildLocations by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOne(ConnectionInterface $con = null) Return the first ChildLocations matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildLocations requireOneByLoccode(string $loccode) Return the first ChildLocations filtered by the loccode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByLocationname(string $locationname) Return the first ChildLocations filtered by the locationname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByDeladd1(string $deladd1) Return the first ChildLocations filtered by the deladd1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByDeladd2(string $deladd2) Return the first ChildLocations filtered by the deladd2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByDeladd3(string $deladd3) Return the first ChildLocations filtered by the deladd3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByDeladd4(string $deladd4) Return the first ChildLocations filtered by the deladd4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByDeladd5(string $deladd5) Return the first ChildLocations filtered by the deladd5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByDeladd6(string $deladd6) Return the first ChildLocations filtered by the deladd6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByTel(string $tel) Return the first ChildLocations filtered by the tel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByFax(string $fax) Return the first ChildLocations filtered by the fax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByEmail(string $email) Return the first ChildLocations filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByContact(string $contact) Return the first ChildLocations filtered by the contact column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByTaxprovinceid(int $taxprovinceid) Return the first ChildLocations filtered by the taxprovinceid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByCashsalecustomer(string $cashsalecustomer) Return the first ChildLocations filtered by the cashsalecustomer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByCashsalebranch(string $cashsalebranch) Return the first ChildLocations filtered by the cashsalebranch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLocations requireOneByManaged(int $managed) Return the first ChildLocations filtered by the managed column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildLocations[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildLocations objects based on current ModelCriteria
 * @method     ChildLocations[]|ObjectCollection findByLoccode(string $loccode) Return ChildLocations objects filtered by the loccode column
 * @method     ChildLocations[]|ObjectCollection findByLocationname(string $locationname) Return ChildLocations objects filtered by the locationname column
 * @method     ChildLocations[]|ObjectCollection findByDeladd1(string $deladd1) Return ChildLocations objects filtered by the deladd1 column
 * @method     ChildLocations[]|ObjectCollection findByDeladd2(string $deladd2) Return ChildLocations objects filtered by the deladd2 column
 * @method     ChildLocations[]|ObjectCollection findByDeladd3(string $deladd3) Return ChildLocations objects filtered by the deladd3 column
 * @method     ChildLocations[]|ObjectCollection findByDeladd4(string $deladd4) Return ChildLocations objects filtered by the deladd4 column
 * @method     ChildLocations[]|ObjectCollection findByDeladd5(string $deladd5) Return ChildLocations objects filtered by the deladd5 column
 * @method     ChildLocations[]|ObjectCollection findByDeladd6(string $deladd6) Return ChildLocations objects filtered by the deladd6 column
 * @method     ChildLocations[]|ObjectCollection findByTel(string $tel) Return ChildLocations objects filtered by the tel column
 * @method     ChildLocations[]|ObjectCollection findByFax(string $fax) Return ChildLocations objects filtered by the fax column
 * @method     ChildLocations[]|ObjectCollection findByEmail(string $email) Return ChildLocations objects filtered by the email column
 * @method     ChildLocations[]|ObjectCollection findByContact(string $contact) Return ChildLocations objects filtered by the contact column
 * @method     ChildLocations[]|ObjectCollection findByTaxprovinceid(int $taxprovinceid) Return ChildLocations objects filtered by the taxprovinceid column
 * @method     ChildLocations[]|ObjectCollection findByCashsalecustomer(string $cashsalecustomer) Return ChildLocations objects filtered by the cashsalecustomer column
 * @method     ChildLocations[]|ObjectCollection findByCashsalebranch(string $cashsalebranch) Return ChildLocations objects filtered by the cashsalebranch column
 * @method     ChildLocations[]|ObjectCollection findByManaged(int $managed) Return ChildLocations objects filtered by the managed column
 * @method     ChildLocations[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class LocationsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\LocationsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\Locations', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildLocationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildLocationsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildLocationsQuery) {
            return $criteria;
        }
        $query = new ChildLocationsQuery();
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
     * @return ChildLocations|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(LocationsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = LocationsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildLocations A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT loccode, locationname, deladd1, deladd2, deladd3, deladd4, deladd5, deladd6, tel, fax, email, contact, taxprovinceid, cashsalecustomer, cashsalebranch, managed FROM locations WHERE loccode = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildLocations $obj */
            $obj = new ChildLocations();
            $obj->hydrate($row);
            LocationsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildLocations|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LocationsTableMap::COL_LOCCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LocationsTableMap::COL_LOCCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the loccode column
     *
     * Example usage:
     * <code>
     * $query->filterByLoccode('fooValue');   // WHERE loccode = 'fooValue'
     * $query->filterByLoccode('%fooValue%', Criteria::LIKE); // WHERE loccode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loccode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByLoccode($loccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loccode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_LOCCODE, $loccode, $comparison);
    }

    /**
     * Filter the query on the locationname column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationname('fooValue');   // WHERE locationname = 'fooValue'
     * $query->filterByLocationname('%fooValue%', Criteria::LIKE); // WHERE locationname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locationname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByLocationname($locationname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locationname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_LOCATIONNAME, $locationname, $comparison);
    }

    /**
     * Filter the query on the deladd1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDeladd1('fooValue');   // WHERE deladd1 = 'fooValue'
     * $query->filterByDeladd1('%fooValue%', Criteria::LIKE); // WHERE deladd1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deladd1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByDeladd1($deladd1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deladd1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_DELADD1, $deladd1, $comparison);
    }

    /**
     * Filter the query on the deladd2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDeladd2('fooValue');   // WHERE deladd2 = 'fooValue'
     * $query->filterByDeladd2('%fooValue%', Criteria::LIKE); // WHERE deladd2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deladd2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByDeladd2($deladd2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deladd2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_DELADD2, $deladd2, $comparison);
    }

    /**
     * Filter the query on the deladd3 column
     *
     * Example usage:
     * <code>
     * $query->filterByDeladd3('fooValue');   // WHERE deladd3 = 'fooValue'
     * $query->filterByDeladd3('%fooValue%', Criteria::LIKE); // WHERE deladd3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deladd3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByDeladd3($deladd3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deladd3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_DELADD3, $deladd3, $comparison);
    }

    /**
     * Filter the query on the deladd4 column
     *
     * Example usage:
     * <code>
     * $query->filterByDeladd4('fooValue');   // WHERE deladd4 = 'fooValue'
     * $query->filterByDeladd4('%fooValue%', Criteria::LIKE); // WHERE deladd4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deladd4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByDeladd4($deladd4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deladd4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_DELADD4, $deladd4, $comparison);
    }

    /**
     * Filter the query on the deladd5 column
     *
     * Example usage:
     * <code>
     * $query->filterByDeladd5('fooValue');   // WHERE deladd5 = 'fooValue'
     * $query->filterByDeladd5('%fooValue%', Criteria::LIKE); // WHERE deladd5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deladd5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByDeladd5($deladd5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deladd5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_DELADD5, $deladd5, $comparison);
    }

    /**
     * Filter the query on the deladd6 column
     *
     * Example usage:
     * <code>
     * $query->filterByDeladd6('fooValue');   // WHERE deladd6 = 'fooValue'
     * $query->filterByDeladd6('%fooValue%', Criteria::LIKE); // WHERE deladd6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deladd6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByDeladd6($deladd6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deladd6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_DELADD6, $deladd6, $comparison);
    }

    /**
     * Filter the query on the tel column
     *
     * Example usage:
     * <code>
     * $query->filterByTel('fooValue');   // WHERE tel = 'fooValue'
     * $query->filterByTel('%fooValue%', Criteria::LIKE); // WHERE tel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByTel($tel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_TEL, $tel, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%', Criteria::LIKE); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_FAX, $fax, $comparison);
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
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_EMAIL, $email, $comparison);
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
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByContact($contact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contact)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_CONTACT, $contact, $comparison);
    }

    /**
     * Filter the query on the taxprovinceid column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxprovinceid(1234); // WHERE taxprovinceid = 1234
     * $query->filterByTaxprovinceid(array(12, 34)); // WHERE taxprovinceid IN (12, 34)
     * $query->filterByTaxprovinceid(array('min' => 12)); // WHERE taxprovinceid > 12
     * </code>
     *
     * @param     mixed $taxprovinceid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByTaxprovinceid($taxprovinceid = null, $comparison = null)
    {
        if (is_array($taxprovinceid)) {
            $useMinMax = false;
            if (isset($taxprovinceid['min'])) {
                $this->addUsingAlias(LocationsTableMap::COL_TAXPROVINCEID, $taxprovinceid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxprovinceid['max'])) {
                $this->addUsingAlias(LocationsTableMap::COL_TAXPROVINCEID, $taxprovinceid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_TAXPROVINCEID, $taxprovinceid, $comparison);
    }

    /**
     * Filter the query on the cashsalecustomer column
     *
     * Example usage:
     * <code>
     * $query->filterByCashsalecustomer('fooValue');   // WHERE cashsalecustomer = 'fooValue'
     * $query->filterByCashsalecustomer('%fooValue%', Criteria::LIKE); // WHERE cashsalecustomer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cashsalecustomer The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByCashsalecustomer($cashsalecustomer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cashsalecustomer)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_CASHSALECUSTOMER, $cashsalecustomer, $comparison);
    }

    /**
     * Filter the query on the cashsalebranch column
     *
     * Example usage:
     * <code>
     * $query->filterByCashsalebranch('fooValue');   // WHERE cashsalebranch = 'fooValue'
     * $query->filterByCashsalebranch('%fooValue%', Criteria::LIKE); // WHERE cashsalebranch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cashsalebranch The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByCashsalebranch($cashsalebranch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cashsalebranch)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_CASHSALEBRANCH, $cashsalebranch, $comparison);
    }

    /**
     * Filter the query on the managed column
     *
     * Example usage:
     * <code>
     * $query->filterByManaged(1234); // WHERE managed = 1234
     * $query->filterByManaged(array(12, 34)); // WHERE managed IN (12, 34)
     * $query->filterByManaged(array('min' => 12)); // WHERE managed > 12
     * </code>
     *
     * @param     mixed $managed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function filterByManaged($managed = null, $comparison = null)
    {
        if (is_array($managed)) {
            $useMinMax = false;
            if (isset($managed['min'])) {
                $this->addUsingAlias(LocationsTableMap::COL_MANAGED, $managed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($managed['max'])) {
                $this->addUsingAlias(LocationsTableMap::COL_MANAGED, $managed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocationsTableMap::COL_MANAGED, $managed, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildLocations $locations Object to remove from the list of results
     *
     * @return $this|ChildLocationsQuery The current query, for fluid interface
     */
    public function prune($locations = null)
    {
        if ($locations) {
            $this->addUsingAlias(LocationsTableMap::COL_LOCCODE, $locations->getLoccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the locations table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(LocationsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LocationsTableMap::clearInstancePool();
            LocationsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(LocationsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(LocationsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            LocationsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            LocationsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // LocationsQuery
