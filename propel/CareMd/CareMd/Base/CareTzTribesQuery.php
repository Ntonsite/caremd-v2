<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzTribes as ChildCareTzTribes;
use CareMd\CareMd\CareTzTribesQuery as ChildCareTzTribesQuery;
use CareMd\CareMd\Map\CareTzTribesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_tribes' table.
 *
 *
 *
 * @method     ChildCareTzTribesQuery orderByTribeId($order = Criteria::ASC) Order by the tribe_id column
 * @method     ChildCareTzTribesQuery orderByTribeCode($order = Criteria::ASC) Order by the tribe_code column
 * @method     ChildCareTzTribesQuery orderByTribeName($order = Criteria::ASC) Order by the tribe_name column
 * @method     ChildCareTzTribesQuery orderByIsAdditional($order = Criteria::ASC) Order by the is_additional column
 *
 * @method     ChildCareTzTribesQuery groupByTribeId() Group by the tribe_id column
 * @method     ChildCareTzTribesQuery groupByTribeCode() Group by the tribe_code column
 * @method     ChildCareTzTribesQuery groupByTribeName() Group by the tribe_name column
 * @method     ChildCareTzTribesQuery groupByIsAdditional() Group by the is_additional column
 *
 * @method     ChildCareTzTribesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzTribesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzTribesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzTribesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzTribesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzTribesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzTribes findOne(ConnectionInterface $con = null) Return the first ChildCareTzTribes matching the query
 * @method     ChildCareTzTribes findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzTribes matching the query, or a new ChildCareTzTribes object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzTribes findOneByTribeId(string $tribe_id) Return the first ChildCareTzTribes filtered by the tribe_id column
 * @method     ChildCareTzTribes findOneByTribeCode(string $tribe_code) Return the first ChildCareTzTribes filtered by the tribe_code column
 * @method     ChildCareTzTribes findOneByTribeName(string $tribe_name) Return the first ChildCareTzTribes filtered by the tribe_name column
 * @method     ChildCareTzTribes findOneByIsAdditional(int $is_additional) Return the first ChildCareTzTribes filtered by the is_additional column *

 * @method     ChildCareTzTribes requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzTribes by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTribes requireOne(ConnectionInterface $con = null) Return the first ChildCareTzTribes matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzTribes requireOneByTribeId(string $tribe_id) Return the first ChildCareTzTribes filtered by the tribe_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTribes requireOneByTribeCode(string $tribe_code) Return the first ChildCareTzTribes filtered by the tribe_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTribes requireOneByTribeName(string $tribe_name) Return the first ChildCareTzTribes filtered by the tribe_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzTribes requireOneByIsAdditional(int $is_additional) Return the first ChildCareTzTribes filtered by the is_additional column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzTribes[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzTribes objects based on current ModelCriteria
 * @method     ChildCareTzTribes[]|ObjectCollection findByTribeId(string $tribe_id) Return ChildCareTzTribes objects filtered by the tribe_id column
 * @method     ChildCareTzTribes[]|ObjectCollection findByTribeCode(string $tribe_code) Return ChildCareTzTribes objects filtered by the tribe_code column
 * @method     ChildCareTzTribes[]|ObjectCollection findByTribeName(string $tribe_name) Return ChildCareTzTribes objects filtered by the tribe_name column
 * @method     ChildCareTzTribes[]|ObjectCollection findByIsAdditional(int $is_additional) Return ChildCareTzTribes objects filtered by the is_additional column
 * @method     ChildCareTzTribes[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzTribesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzTribesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzTribes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzTribesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzTribesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzTribesQuery) {
            return $criteria;
        }
        $query = new ChildCareTzTribesQuery();
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
     * @return ChildCareTzTribes|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzTribesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzTribesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzTribes A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT tribe_id, tribe_code, tribe_name, is_additional FROM care_tz_tribes WHERE tribe_id = :p0';
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
            /** @var ChildCareTzTribes $obj */
            $obj = new ChildCareTzTribes();
            $obj->hydrate($row);
            CareTzTribesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzTribes|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzTribesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzTribesTableMap::COL_TRIBE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzTribesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzTribesTableMap::COL_TRIBE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the tribe_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTribeId(1234); // WHERE tribe_id = 1234
     * $query->filterByTribeId(array(12, 34)); // WHERE tribe_id IN (12, 34)
     * $query->filterByTribeId(array('min' => 12)); // WHERE tribe_id > 12
     * </code>
     *
     * @param     mixed $tribeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTribesQuery The current query, for fluid interface
     */
    public function filterByTribeId($tribeId = null, $comparison = null)
    {
        if (is_array($tribeId)) {
            $useMinMax = false;
            if (isset($tribeId['min'])) {
                $this->addUsingAlias(CareTzTribesTableMap::COL_TRIBE_ID, $tribeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tribeId['max'])) {
                $this->addUsingAlias(CareTzTribesTableMap::COL_TRIBE_ID, $tribeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTribesTableMap::COL_TRIBE_ID, $tribeId, $comparison);
    }

    /**
     * Filter the query on the tribe_code column
     *
     * Example usage:
     * <code>
     * $query->filterByTribeCode('fooValue');   // WHERE tribe_code = 'fooValue'
     * $query->filterByTribeCode('%fooValue%', Criteria::LIKE); // WHERE tribe_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tribeCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTribesQuery The current query, for fluid interface
     */
    public function filterByTribeCode($tribeCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tribeCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTribesTableMap::COL_TRIBE_CODE, $tribeCode, $comparison);
    }

    /**
     * Filter the query on the tribe_name column
     *
     * Example usage:
     * <code>
     * $query->filterByTribeName('fooValue');   // WHERE tribe_name = 'fooValue'
     * $query->filterByTribeName('%fooValue%', Criteria::LIKE); // WHERE tribe_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tribeName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTribesQuery The current query, for fluid interface
     */
    public function filterByTribeName($tribeName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tribeName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTribesTableMap::COL_TRIBE_NAME, $tribeName, $comparison);
    }

    /**
     * Filter the query on the is_additional column
     *
     * Example usage:
     * <code>
     * $query->filterByIsAdditional(1234); // WHERE is_additional = 1234
     * $query->filterByIsAdditional(array(12, 34)); // WHERE is_additional IN (12, 34)
     * $query->filterByIsAdditional(array('min' => 12)); // WHERE is_additional > 12
     * </code>
     *
     * @param     mixed $isAdditional The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzTribesQuery The current query, for fluid interface
     */
    public function filterByIsAdditional($isAdditional = null, $comparison = null)
    {
        if (is_array($isAdditional)) {
            $useMinMax = false;
            if (isset($isAdditional['min'])) {
                $this->addUsingAlias(CareTzTribesTableMap::COL_IS_ADDITIONAL, $isAdditional['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isAdditional['max'])) {
                $this->addUsingAlias(CareTzTribesTableMap::COL_IS_ADDITIONAL, $isAdditional['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzTribesTableMap::COL_IS_ADDITIONAL, $isAdditional, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzTribes $careTzTribes Object to remove from the list of results
     *
     * @return $this|ChildCareTzTribesQuery The current query, for fluid interface
     */
    public function prune($careTzTribes = null)
    {
        if ($careTzTribes) {
            $this->addUsingAlias(CareTzTribesTableMap::COL_TRIBE_ID, $careTzTribes->getTribeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_tribes table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzTribesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzTribesTableMap::clearInstancePool();
            CareTzTribesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzTribesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzTribesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzTribesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzTribesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzTribesQuery
