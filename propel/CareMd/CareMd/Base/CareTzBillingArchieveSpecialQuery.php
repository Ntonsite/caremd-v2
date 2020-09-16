<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzBillingArchieveSpecial as ChildCareTzBillingArchieveSpecial;
use CareMd\CareMd\CareTzBillingArchieveSpecialQuery as ChildCareTzBillingArchieveSpecialQuery;
use CareMd\CareMd\Map\CareTzBillingArchieveSpecialTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_billing_archieve_special' table.
 *
 *
 *
 * @method     ChildCareTzBillingArchieveSpecialQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTzBillingArchieveSpecialQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTzBillingArchieveSpecialQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCareTzBillingArchieveSpecialQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareTzBillingArchieveSpecialQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCareTzBillingArchieveSpecialQuery orderByPaid($order = Criteria::ASC) Order by the paid column
 *
 * @method     ChildCareTzBillingArchieveSpecialQuery groupById() Group by the id column
 * @method     ChildCareTzBillingArchieveSpecialQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTzBillingArchieveSpecialQuery groupByDate() Group by the date column
 * @method     ChildCareTzBillingArchieveSpecialQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareTzBillingArchieveSpecialQuery groupByType() Group by the type column
 * @method     ChildCareTzBillingArchieveSpecialQuery groupByPaid() Group by the paid column
 *
 * @method     ChildCareTzBillingArchieveSpecialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzBillingArchieveSpecialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzBillingArchieveSpecialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzBillingArchieveSpecialQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzBillingArchieveSpecialQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzBillingArchieveSpecialQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzBillingArchieveSpecial findOne(ConnectionInterface $con = null) Return the first ChildCareTzBillingArchieveSpecial matching the query
 * @method     ChildCareTzBillingArchieveSpecial findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzBillingArchieveSpecial matching the query, or a new ChildCareTzBillingArchieveSpecial object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzBillingArchieveSpecial findOneById(int $id) Return the first ChildCareTzBillingArchieveSpecial filtered by the id column
 * @method     ChildCareTzBillingArchieveSpecial findOneByEncounterNr(string $encounter_nr) Return the first ChildCareTzBillingArchieveSpecial filtered by the encounter_nr column
 * @method     ChildCareTzBillingArchieveSpecial findOneByDate(string $date) Return the first ChildCareTzBillingArchieveSpecial filtered by the date column
 * @method     ChildCareTzBillingArchieveSpecial findOneByDeptNr(string $dept_nr) Return the first ChildCareTzBillingArchieveSpecial filtered by the dept_nr column
 * @method     ChildCareTzBillingArchieveSpecial findOneByType(string $type) Return the first ChildCareTzBillingArchieveSpecial filtered by the type column
 * @method     ChildCareTzBillingArchieveSpecial findOneByPaid(double $paid) Return the first ChildCareTzBillingArchieveSpecial filtered by the paid column *

 * @method     ChildCareTzBillingArchieveSpecial requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzBillingArchieveSpecial by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchieveSpecial requireOne(ConnectionInterface $con = null) Return the first ChildCareTzBillingArchieveSpecial matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzBillingArchieveSpecial requireOneById(int $id) Return the first ChildCareTzBillingArchieveSpecial filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchieveSpecial requireOneByEncounterNr(string $encounter_nr) Return the first ChildCareTzBillingArchieveSpecial filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchieveSpecial requireOneByDate(string $date) Return the first ChildCareTzBillingArchieveSpecial filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchieveSpecial requireOneByDeptNr(string $dept_nr) Return the first ChildCareTzBillingArchieveSpecial filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchieveSpecial requireOneByType(string $type) Return the first ChildCareTzBillingArchieveSpecial filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchieveSpecial requireOneByPaid(double $paid) Return the first ChildCareTzBillingArchieveSpecial filtered by the paid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzBillingArchieveSpecial[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzBillingArchieveSpecial objects based on current ModelCriteria
 * @method     ChildCareTzBillingArchieveSpecial[]|ObjectCollection findById(int $id) Return ChildCareTzBillingArchieveSpecial objects filtered by the id column
 * @method     ChildCareTzBillingArchieveSpecial[]|ObjectCollection findByEncounterNr(string $encounter_nr) Return ChildCareTzBillingArchieveSpecial objects filtered by the encounter_nr column
 * @method     ChildCareTzBillingArchieveSpecial[]|ObjectCollection findByDate(string $date) Return ChildCareTzBillingArchieveSpecial objects filtered by the date column
 * @method     ChildCareTzBillingArchieveSpecial[]|ObjectCollection findByDeptNr(string $dept_nr) Return ChildCareTzBillingArchieveSpecial objects filtered by the dept_nr column
 * @method     ChildCareTzBillingArchieveSpecial[]|ObjectCollection findByType(string $type) Return ChildCareTzBillingArchieveSpecial objects filtered by the type column
 * @method     ChildCareTzBillingArchieveSpecial[]|ObjectCollection findByPaid(double $paid) Return ChildCareTzBillingArchieveSpecial objects filtered by the paid column
 * @method     ChildCareTzBillingArchieveSpecial[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzBillingArchieveSpecialQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzBillingArchieveSpecialQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzBillingArchieveSpecial', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzBillingArchieveSpecialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzBillingArchieveSpecialQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzBillingArchieveSpecialQuery) {
            return $criteria;
        }
        $query = new ChildCareTzBillingArchieveSpecialQuery();
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
     * @return ChildCareTzBillingArchieveSpecial|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzBillingArchieveSpecialTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzBillingArchieveSpecialTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzBillingArchieveSpecial A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, encounter_nr, date, dept_nr, type, paid FROM care_tz_billing_archieve_special WHERE id = :p0';
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
            /** @var ChildCareTzBillingArchieveSpecial $obj */
            $obj = new ChildCareTzBillingArchieveSpecial();
            $obj->hydrate($row);
            CareTzBillingArchieveSpecialTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzBillingArchieveSpecial|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzBillingArchieveSpecialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzBillingArchieveSpecialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCareTzBillingArchieveSpecialQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterNr('fooValue');   // WHERE encounter_nr = 'fooValue'
     * $query->filterByEncounterNr('%fooValue%', Criteria::LIKE); // WHERE encounter_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encounterNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchieveSpecialQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encounterNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchieveSpecialQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptNr('fooValue');   // WHERE dept_nr = 'fooValue'
     * $query->filterByDeptNr('%fooValue%', Criteria::LIKE); // WHERE dept_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deptNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchieveSpecialQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deptNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%', Criteria::LIKE); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchieveSpecialQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the paid column
     *
     * Example usage:
     * <code>
     * $query->filterByPaid(1234); // WHERE paid = 1234
     * $query->filterByPaid(array(12, 34)); // WHERE paid IN (12, 34)
     * $query->filterByPaid(array('min' => 12)); // WHERE paid > 12
     * </code>
     *
     * @param     mixed $paid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchieveSpecialQuery The current query, for fluid interface
     */
    public function filterByPaid($paid = null, $comparison = null)
    {
        if (is_array($paid)) {
            $useMinMax = false;
            if (isset($paid['min'])) {
                $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_PAID, $paid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paid['max'])) {
                $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_PAID, $paid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_PAID, $paid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzBillingArchieveSpecial $careTzBillingArchieveSpecial Object to remove from the list of results
     *
     * @return $this|ChildCareTzBillingArchieveSpecialQuery The current query, for fluid interface
     */
    public function prune($careTzBillingArchieveSpecial = null)
    {
        if ($careTzBillingArchieveSpecial) {
            $this->addUsingAlias(CareTzBillingArchieveSpecialTableMap::COL_ID, $careTzBillingArchieveSpecial->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_billing_archieve_special table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingArchieveSpecialTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzBillingArchieveSpecialTableMap::clearInstancePool();
            CareTzBillingArchieveSpecialTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingArchieveSpecialTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzBillingArchieveSpecialTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzBillingArchieveSpecialTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzBillingArchieveSpecialTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzBillingArchieveSpecialQuery
