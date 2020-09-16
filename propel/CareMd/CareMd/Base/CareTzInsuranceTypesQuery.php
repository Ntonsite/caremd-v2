<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzInsuranceTypes as ChildCareTzInsuranceTypes;
use CareMd\CareMd\CareTzInsuranceTypesQuery as ChildCareTzInsuranceTypesQuery;
use CareMd\CareMd\Map\CareTzInsuranceTypesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_insurance_types' table.
 *
 *
 *
 * @method     ChildCareTzInsuranceTypesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTzInsuranceTypesQuery orderByCeiling($order = Criteria::ASC) Order by the ceiling column
 * @method     ChildCareTzInsuranceTypesQuery orderByPrepaidAmount($order = Criteria::ASC) Order by the prepaid_amount column
 * @method     ChildCareTzInsuranceTypesQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTzInsuranceTypesQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     ChildCareTzInsuranceTypesQuery orderByIsDisabled($order = Criteria::ASC) Order by the is_disabled column
 *
 * @method     ChildCareTzInsuranceTypesQuery groupById() Group by the id column
 * @method     ChildCareTzInsuranceTypesQuery groupByCeiling() Group by the ceiling column
 * @method     ChildCareTzInsuranceTypesQuery groupByPrepaidAmount() Group by the prepaid_amount column
 * @method     ChildCareTzInsuranceTypesQuery groupByName() Group by the name column
 * @method     ChildCareTzInsuranceTypesQuery groupByComment() Group by the comment column
 * @method     ChildCareTzInsuranceTypesQuery groupByIsDisabled() Group by the is_disabled column
 *
 * @method     ChildCareTzInsuranceTypesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzInsuranceTypesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzInsuranceTypesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzInsuranceTypesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzInsuranceTypesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzInsuranceTypesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzInsuranceTypes findOne(ConnectionInterface $con = null) Return the first ChildCareTzInsuranceTypes matching the query
 * @method     ChildCareTzInsuranceTypes findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzInsuranceTypes matching the query, or a new ChildCareTzInsuranceTypes object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzInsuranceTypes findOneById(string $id) Return the first ChildCareTzInsuranceTypes filtered by the id column
 * @method     ChildCareTzInsuranceTypes findOneByCeiling(string $ceiling) Return the first ChildCareTzInsuranceTypes filtered by the ceiling column
 * @method     ChildCareTzInsuranceTypes findOneByPrepaidAmount(int $prepaid_amount) Return the first ChildCareTzInsuranceTypes filtered by the prepaid_amount column
 * @method     ChildCareTzInsuranceTypes findOneByName(string $name) Return the first ChildCareTzInsuranceTypes filtered by the name column
 * @method     ChildCareTzInsuranceTypes findOneByComment(string $comment) Return the first ChildCareTzInsuranceTypes filtered by the comment column
 * @method     ChildCareTzInsuranceTypes findOneByIsDisabled(int $is_disabled) Return the first ChildCareTzInsuranceTypes filtered by the is_disabled column *

 * @method     ChildCareTzInsuranceTypes requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzInsuranceTypes by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsuranceTypes requireOne(ConnectionInterface $con = null) Return the first ChildCareTzInsuranceTypes matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzInsuranceTypes requireOneById(string $id) Return the first ChildCareTzInsuranceTypes filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsuranceTypes requireOneByCeiling(string $ceiling) Return the first ChildCareTzInsuranceTypes filtered by the ceiling column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsuranceTypes requireOneByPrepaidAmount(int $prepaid_amount) Return the first ChildCareTzInsuranceTypes filtered by the prepaid_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsuranceTypes requireOneByName(string $name) Return the first ChildCareTzInsuranceTypes filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsuranceTypes requireOneByComment(string $comment) Return the first ChildCareTzInsuranceTypes filtered by the comment column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsuranceTypes requireOneByIsDisabled(int $is_disabled) Return the first ChildCareTzInsuranceTypes filtered by the is_disabled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzInsuranceTypes[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzInsuranceTypes objects based on current ModelCriteria
 * @method     ChildCareTzInsuranceTypes[]|ObjectCollection findById(string $id) Return ChildCareTzInsuranceTypes objects filtered by the id column
 * @method     ChildCareTzInsuranceTypes[]|ObjectCollection findByCeiling(string $ceiling) Return ChildCareTzInsuranceTypes objects filtered by the ceiling column
 * @method     ChildCareTzInsuranceTypes[]|ObjectCollection findByPrepaidAmount(int $prepaid_amount) Return ChildCareTzInsuranceTypes objects filtered by the prepaid_amount column
 * @method     ChildCareTzInsuranceTypes[]|ObjectCollection findByName(string $name) Return ChildCareTzInsuranceTypes objects filtered by the name column
 * @method     ChildCareTzInsuranceTypes[]|ObjectCollection findByComment(string $comment) Return ChildCareTzInsuranceTypes objects filtered by the comment column
 * @method     ChildCareTzInsuranceTypes[]|ObjectCollection findByIsDisabled(int $is_disabled) Return ChildCareTzInsuranceTypes objects filtered by the is_disabled column
 * @method     ChildCareTzInsuranceTypes[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzInsuranceTypesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzInsuranceTypesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzInsuranceTypes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzInsuranceTypesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzInsuranceTypesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzInsuranceTypesQuery) {
            return $criteria;
        }
        $query = new ChildCareTzInsuranceTypesQuery();
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
     * @return ChildCareTzInsuranceTypes|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzInsuranceTypesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzInsuranceTypesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzInsuranceTypes A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, ceiling, prepaid_amount, name, comment, is_disabled FROM care_tz_insurance_types WHERE id = :p0';
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
            /** @var ChildCareTzInsuranceTypes $obj */
            $obj = new ChildCareTzInsuranceTypes();
            $obj->hydrate($row);
            CareTzInsuranceTypesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzInsuranceTypes|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzInsuranceTypesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzInsuranceTypesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzInsuranceTypesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the ceiling column
     *
     * Example usage:
     * <code>
     * $query->filterByCeiling('fooValue');   // WHERE ceiling = 'fooValue'
     * $query->filterByCeiling('%fooValue%', Criteria::LIKE); // WHERE ceiling LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ceiling The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceTypesQuery The current query, for fluid interface
     */
    public function filterByCeiling($ceiling = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ceiling)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_CEILING, $ceiling, $comparison);
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
     * @return $this|ChildCareTzInsuranceTypesQuery The current query, for fluid interface
     */
    public function filterByPrepaidAmount($prepaidAmount = null, $comparison = null)
    {
        if (is_array($prepaidAmount)) {
            $useMinMax = false;
            if (isset($prepaidAmount['min'])) {
                $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_PREPAID_AMOUNT, $prepaidAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prepaidAmount['max'])) {
                $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_PREPAID_AMOUNT, $prepaidAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_PREPAID_AMOUNT, $prepaidAmount, $comparison);
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
     * @return $this|ChildCareTzInsuranceTypesQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE comment = 'fooValue'
     * $query->filterByComment('%fooValue%', Criteria::LIKE); // WHERE comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceTypesQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the is_disabled column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDisabled(1234); // WHERE is_disabled = 1234
     * $query->filterByIsDisabled(array(12, 34)); // WHERE is_disabled IN (12, 34)
     * $query->filterByIsDisabled(array('min' => 12)); // WHERE is_disabled > 12
     * </code>
     *
     * @param     mixed $isDisabled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsuranceTypesQuery The current query, for fluid interface
     */
    public function filterByIsDisabled($isDisabled = null, $comparison = null)
    {
        if (is_array($isDisabled)) {
            $useMinMax = false;
            if (isset($isDisabled['min'])) {
                $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_IS_DISABLED, $isDisabled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isDisabled['max'])) {
                $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_IS_DISABLED, $isDisabled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_IS_DISABLED, $isDisabled, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzInsuranceTypes $careTzInsuranceTypes Object to remove from the list of results
     *
     * @return $this|ChildCareTzInsuranceTypesQuery The current query, for fluid interface
     */
    public function prune($careTzInsuranceTypes = null)
    {
        if ($careTzInsuranceTypes) {
            $this->addUsingAlias(CareTzInsuranceTypesTableMap::COL_ID, $careTzInsuranceTypes->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_insurance_types table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzInsuranceTypesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzInsuranceTypesTableMap::clearInstancePool();
            CareTzInsuranceTypesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzInsuranceTypesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzInsuranceTypesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzInsuranceTypesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzInsuranceTypesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzInsuranceTypesQuery
