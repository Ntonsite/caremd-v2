<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzDrugsandservicesDescription as ChildCareTzDrugsandservicesDescription;
use CareMd\CareMd\CareTzDrugsandservicesDescriptionQuery as ChildCareTzDrugsandservicesDescriptionQuery;
use CareMd\CareMd\Map\CareTzDrugsandservicesDescriptionTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_drugsandservices_description' table.
 *
 *
 *
 * @method     ChildCareTzDrugsandservicesDescriptionQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildCareTzDrugsandservicesDescriptionQuery orderByLastChange($order = Criteria::ASC) Order by the last_change column
 * @method     ChildCareTzDrugsandservicesDescriptionQuery orderByUid($order = Criteria::ASC) Order by the UID column
 * @method     ChildCareTzDrugsandservicesDescriptionQuery orderByFieldname($order = Criteria::ASC) Order by the Fieldname column
 * @method     ChildCareTzDrugsandservicesDescriptionQuery orderByShowdescription($order = Criteria::ASC) Order by the ShowDescription column
 * @method     ChildCareTzDrugsandservicesDescriptionQuery orderByFulldescription($order = Criteria::ASC) Order by the FullDescription column
 * @method     ChildCareTzDrugsandservicesDescriptionQuery orderByIsInsurancePrice($order = Criteria::ASC) Order by the is_insurance_price column
 *
 * @method     ChildCareTzDrugsandservicesDescriptionQuery groupById() Group by the ID column
 * @method     ChildCareTzDrugsandservicesDescriptionQuery groupByLastChange() Group by the last_change column
 * @method     ChildCareTzDrugsandservicesDescriptionQuery groupByUid() Group by the UID column
 * @method     ChildCareTzDrugsandservicesDescriptionQuery groupByFieldname() Group by the Fieldname column
 * @method     ChildCareTzDrugsandservicesDescriptionQuery groupByShowdescription() Group by the ShowDescription column
 * @method     ChildCareTzDrugsandservicesDescriptionQuery groupByFulldescription() Group by the FullDescription column
 * @method     ChildCareTzDrugsandservicesDescriptionQuery groupByIsInsurancePrice() Group by the is_insurance_price column
 *
 * @method     ChildCareTzDrugsandservicesDescriptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzDrugsandservicesDescriptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzDrugsandservicesDescriptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzDrugsandservicesDescriptionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzDrugsandservicesDescriptionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzDrugsandservicesDescriptionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzDrugsandservicesDescription findOne(ConnectionInterface $con = null) Return the first ChildCareTzDrugsandservicesDescription matching the query
 * @method     ChildCareTzDrugsandservicesDescription findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzDrugsandservicesDescription matching the query, or a new ChildCareTzDrugsandservicesDescription object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzDrugsandservicesDescription findOneById(string $ID) Return the first ChildCareTzDrugsandservicesDescription filtered by the ID column
 * @method     ChildCareTzDrugsandservicesDescription findOneByLastChange(string $last_change) Return the first ChildCareTzDrugsandservicesDescription filtered by the last_change column
 * @method     ChildCareTzDrugsandservicesDescription findOneByUid(string $UID) Return the first ChildCareTzDrugsandservicesDescription filtered by the UID column
 * @method     ChildCareTzDrugsandservicesDescription findOneByFieldname(string $Fieldname) Return the first ChildCareTzDrugsandservicesDescription filtered by the Fieldname column
 * @method     ChildCareTzDrugsandservicesDescription findOneByShowdescription(string $ShowDescription) Return the first ChildCareTzDrugsandservicesDescription filtered by the ShowDescription column
 * @method     ChildCareTzDrugsandservicesDescription findOneByFulldescription(string $FullDescription) Return the first ChildCareTzDrugsandservicesDescription filtered by the FullDescription column
 * @method     ChildCareTzDrugsandservicesDescription findOneByIsInsurancePrice(int $is_insurance_price) Return the first ChildCareTzDrugsandservicesDescription filtered by the is_insurance_price column *

 * @method     ChildCareTzDrugsandservicesDescription requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzDrugsandservicesDescription by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesDescription requireOne(ConnectionInterface $con = null) Return the first ChildCareTzDrugsandservicesDescription matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDrugsandservicesDescription requireOneById(string $ID) Return the first ChildCareTzDrugsandservicesDescription filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesDescription requireOneByLastChange(string $last_change) Return the first ChildCareTzDrugsandservicesDescription filtered by the last_change column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesDescription requireOneByUid(string $UID) Return the first ChildCareTzDrugsandservicesDescription filtered by the UID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesDescription requireOneByFieldname(string $Fieldname) Return the first ChildCareTzDrugsandservicesDescription filtered by the Fieldname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesDescription requireOneByShowdescription(string $ShowDescription) Return the first ChildCareTzDrugsandservicesDescription filtered by the ShowDescription column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesDescription requireOneByFulldescription(string $FullDescription) Return the first ChildCareTzDrugsandservicesDescription filtered by the FullDescription column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsandservicesDescription requireOneByIsInsurancePrice(int $is_insurance_price) Return the first ChildCareTzDrugsandservicesDescription filtered by the is_insurance_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDrugsandservicesDescription[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzDrugsandservicesDescription objects based on current ModelCriteria
 * @method     ChildCareTzDrugsandservicesDescription[]|ObjectCollection findById(string $ID) Return ChildCareTzDrugsandservicesDescription objects filtered by the ID column
 * @method     ChildCareTzDrugsandservicesDescription[]|ObjectCollection findByLastChange(string $last_change) Return ChildCareTzDrugsandservicesDescription objects filtered by the last_change column
 * @method     ChildCareTzDrugsandservicesDescription[]|ObjectCollection findByUid(string $UID) Return ChildCareTzDrugsandservicesDescription objects filtered by the UID column
 * @method     ChildCareTzDrugsandservicesDescription[]|ObjectCollection findByFieldname(string $Fieldname) Return ChildCareTzDrugsandservicesDescription objects filtered by the Fieldname column
 * @method     ChildCareTzDrugsandservicesDescription[]|ObjectCollection findByShowdescription(string $ShowDescription) Return ChildCareTzDrugsandservicesDescription objects filtered by the ShowDescription column
 * @method     ChildCareTzDrugsandservicesDescription[]|ObjectCollection findByFulldescription(string $FullDescription) Return ChildCareTzDrugsandservicesDescription objects filtered by the FullDescription column
 * @method     ChildCareTzDrugsandservicesDescription[]|ObjectCollection findByIsInsurancePrice(int $is_insurance_price) Return ChildCareTzDrugsandservicesDescription objects filtered by the is_insurance_price column
 * @method     ChildCareTzDrugsandservicesDescription[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzDrugsandservicesDescriptionQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzDrugsandservicesDescriptionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzDrugsandservicesDescription', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzDrugsandservicesDescriptionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzDrugsandservicesDescriptionQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzDrugsandservicesDescriptionQuery) {
            return $criteria;
        }
        $query = new ChildCareTzDrugsandservicesDescriptionQuery();
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
     * @return ChildCareTzDrugsandservicesDescription|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzDrugsandservicesDescriptionTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzDrugsandservicesDescriptionTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzDrugsandservicesDescription A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, last_change, UID, Fieldname, ShowDescription, FullDescription, is_insurance_price FROM care_tz_drugsandservices_description WHERE ID = :p0';
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
            /** @var ChildCareTzDrugsandservicesDescription $obj */
            $obj = new ChildCareTzDrugsandservicesDescription();
            $obj->hydrate($row);
            CareTzDrugsandservicesDescriptionTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzDrugsandservicesDescription|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzDrugsandservicesDescriptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzDrugsandservicesDescriptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzDrugsandservicesDescriptionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the last_change column
     *
     * Example usage:
     * <code>
     * $query->filterByLastChange(1234); // WHERE last_change = 1234
     * $query->filterByLastChange(array(12, 34)); // WHERE last_change IN (12, 34)
     * $query->filterByLastChange(array('min' => 12)); // WHERE last_change > 12
     * </code>
     *
     * @param     mixed $lastChange The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesDescriptionQuery The current query, for fluid interface
     */
    public function filterByLastChange($lastChange = null, $comparison = null)
    {
        if (is_array($lastChange)) {
            $useMinMax = false;
            if (isset($lastChange['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_LAST_CHANGE, $lastChange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastChange['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_LAST_CHANGE, $lastChange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_LAST_CHANGE, $lastChange, $comparison);
    }

    /**
     * Filter the query on the UID column
     *
     * Example usage:
     * <code>
     * $query->filterByUid('fooValue');   // WHERE UID = 'fooValue'
     * $query->filterByUid('%fooValue%', Criteria::LIKE); // WHERE UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesDescriptionQuery The current query, for fluid interface
     */
    public function filterByUid($uid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_UID, $uid, $comparison);
    }

    /**
     * Filter the query on the Fieldname column
     *
     * Example usage:
     * <code>
     * $query->filterByFieldname('fooValue');   // WHERE Fieldname = 'fooValue'
     * $query->filterByFieldname('%fooValue%', Criteria::LIKE); // WHERE Fieldname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fieldname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesDescriptionQuery The current query, for fluid interface
     */
    public function filterByFieldname($fieldname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fieldname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_FIELDNAME, $fieldname, $comparison);
    }

    /**
     * Filter the query on the ShowDescription column
     *
     * Example usage:
     * <code>
     * $query->filterByShowdescription('fooValue');   // WHERE ShowDescription = 'fooValue'
     * $query->filterByShowdescription('%fooValue%', Criteria::LIKE); // WHERE ShowDescription LIKE '%fooValue%'
     * </code>
     *
     * @param     string $showdescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesDescriptionQuery The current query, for fluid interface
     */
    public function filterByShowdescription($showdescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($showdescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_SHOWDESCRIPTION, $showdescription, $comparison);
    }

    /**
     * Filter the query on the FullDescription column
     *
     * Example usage:
     * <code>
     * $query->filterByFulldescription('fooValue');   // WHERE FullDescription = 'fooValue'
     * $query->filterByFulldescription('%fooValue%', Criteria::LIKE); // WHERE FullDescription LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fulldescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesDescriptionQuery The current query, for fluid interface
     */
    public function filterByFulldescription($fulldescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fulldescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_FULLDESCRIPTION, $fulldescription, $comparison);
    }

    /**
     * Filter the query on the is_insurance_price column
     *
     * Example usage:
     * <code>
     * $query->filterByIsInsurancePrice(1234); // WHERE is_insurance_price = 1234
     * $query->filterByIsInsurancePrice(array(12, 34)); // WHERE is_insurance_price IN (12, 34)
     * $query->filterByIsInsurancePrice(array('min' => 12)); // WHERE is_insurance_price > 12
     * </code>
     *
     * @param     mixed $isInsurancePrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsandservicesDescriptionQuery The current query, for fluid interface
     */
    public function filterByIsInsurancePrice($isInsurancePrice = null, $comparison = null)
    {
        if (is_array($isInsurancePrice)) {
            $useMinMax = false;
            if (isset($isInsurancePrice['min'])) {
                $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_IS_INSURANCE_PRICE, $isInsurancePrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isInsurancePrice['max'])) {
                $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_IS_INSURANCE_PRICE, $isInsurancePrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_IS_INSURANCE_PRICE, $isInsurancePrice, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzDrugsandservicesDescription $careTzDrugsandservicesDescription Object to remove from the list of results
     *
     * @return $this|ChildCareTzDrugsandservicesDescriptionQuery The current query, for fluid interface
     */
    public function prune($careTzDrugsandservicesDescription = null)
    {
        if ($careTzDrugsandservicesDescription) {
            $this->addUsingAlias(CareTzDrugsandservicesDescriptionTableMap::COL_ID, $careTzDrugsandservicesDescription->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_drugsandservices_description table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesDescriptionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzDrugsandservicesDescriptionTableMap::clearInstancePool();
            CareTzDrugsandservicesDescriptionTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsandservicesDescriptionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzDrugsandservicesDescriptionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzDrugsandservicesDescriptionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzDrugsandservicesDescriptionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzDrugsandservicesDescriptionQuery
