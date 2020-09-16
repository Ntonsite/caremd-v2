<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzDrugsReorderingLevel as ChildCareTzDrugsReorderingLevel;
use CareMd\CareMd\CareTzDrugsReorderingLevelQuery as ChildCareTzDrugsReorderingLevelQuery;
use CareMd\CareMd\Map\CareTzDrugsReorderingLevelTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_drugs_reordering_level' table.
 *
 *
 *
 * @method     ChildCareTzDrugsReorderingLevelQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     ChildCareTzDrugsReorderingLevelQuery orderByReorderingLevel($order = Criteria::ASC) Order by the reordering_level column
 *
 * @method     ChildCareTzDrugsReorderingLevelQuery groupByItemId() Group by the item_id column
 * @method     ChildCareTzDrugsReorderingLevelQuery groupByReorderingLevel() Group by the reordering_level column
 *
 * @method     ChildCareTzDrugsReorderingLevelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzDrugsReorderingLevelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzDrugsReorderingLevelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzDrugsReorderingLevelQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzDrugsReorderingLevelQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzDrugsReorderingLevelQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzDrugsReorderingLevel findOne(ConnectionInterface $con = null) Return the first ChildCareTzDrugsReorderingLevel matching the query
 * @method     ChildCareTzDrugsReorderingLevel findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzDrugsReorderingLevel matching the query, or a new ChildCareTzDrugsReorderingLevel object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzDrugsReorderingLevel findOneByItemId(int $item_id) Return the first ChildCareTzDrugsReorderingLevel filtered by the item_id column
 * @method     ChildCareTzDrugsReorderingLevel findOneByReorderingLevel(int $reordering_level) Return the first ChildCareTzDrugsReorderingLevel filtered by the reordering_level column *

 * @method     ChildCareTzDrugsReorderingLevel requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzDrugsReorderingLevel by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsReorderingLevel requireOne(ConnectionInterface $con = null) Return the first ChildCareTzDrugsReorderingLevel matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDrugsReorderingLevel requireOneByItemId(int $item_id) Return the first ChildCareTzDrugsReorderingLevel filtered by the item_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzDrugsReorderingLevel requireOneByReorderingLevel(int $reordering_level) Return the first ChildCareTzDrugsReorderingLevel filtered by the reordering_level column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzDrugsReorderingLevel[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzDrugsReorderingLevel objects based on current ModelCriteria
 * @method     ChildCareTzDrugsReorderingLevel[]|ObjectCollection findByItemId(int $item_id) Return ChildCareTzDrugsReorderingLevel objects filtered by the item_id column
 * @method     ChildCareTzDrugsReorderingLevel[]|ObjectCollection findByReorderingLevel(int $reordering_level) Return ChildCareTzDrugsReorderingLevel objects filtered by the reordering_level column
 * @method     ChildCareTzDrugsReorderingLevel[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzDrugsReorderingLevelQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzDrugsReorderingLevelQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzDrugsReorderingLevel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzDrugsReorderingLevelQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzDrugsReorderingLevelQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzDrugsReorderingLevelQuery) {
            return $criteria;
        }
        $query = new ChildCareTzDrugsReorderingLevelQuery();
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
     * @return ChildCareTzDrugsReorderingLevel|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzDrugsReorderingLevelTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzDrugsReorderingLevelTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzDrugsReorderingLevel A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT item_id, reordering_level FROM care_tz_drugs_reordering_level WHERE item_id = :p0';
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
            /** @var ChildCareTzDrugsReorderingLevel $obj */
            $obj = new ChildCareTzDrugsReorderingLevel();
            $obj->hydrate($row);
            CareTzDrugsReorderingLevelTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzDrugsReorderingLevel|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzDrugsReorderingLevelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzDrugsReorderingLevelTableMap::COL_ITEM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzDrugsReorderingLevelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzDrugsReorderingLevelTableMap::COL_ITEM_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByItemId(1234); // WHERE item_id = 1234
     * $query->filterByItemId(array(12, 34)); // WHERE item_id IN (12, 34)
     * $query->filterByItemId(array('min' => 12)); // WHERE item_id > 12
     * </code>
     *
     * @param     mixed $itemId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsReorderingLevelQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (is_array($itemId)) {
            $useMinMax = false;
            if (isset($itemId['min'])) {
                $this->addUsingAlias(CareTzDrugsReorderingLevelTableMap::COL_ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemId['max'])) {
                $this->addUsingAlias(CareTzDrugsReorderingLevelTableMap::COL_ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsReorderingLevelTableMap::COL_ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the reordering_level column
     *
     * Example usage:
     * <code>
     * $query->filterByReorderingLevel(1234); // WHERE reordering_level = 1234
     * $query->filterByReorderingLevel(array(12, 34)); // WHERE reordering_level IN (12, 34)
     * $query->filterByReorderingLevel(array('min' => 12)); // WHERE reordering_level > 12
     * </code>
     *
     * @param     mixed $reorderingLevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzDrugsReorderingLevelQuery The current query, for fluid interface
     */
    public function filterByReorderingLevel($reorderingLevel = null, $comparison = null)
    {
        if (is_array($reorderingLevel)) {
            $useMinMax = false;
            if (isset($reorderingLevel['min'])) {
                $this->addUsingAlias(CareTzDrugsReorderingLevelTableMap::COL_REORDERING_LEVEL, $reorderingLevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reorderingLevel['max'])) {
                $this->addUsingAlias(CareTzDrugsReorderingLevelTableMap::COL_REORDERING_LEVEL, $reorderingLevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzDrugsReorderingLevelTableMap::COL_REORDERING_LEVEL, $reorderingLevel, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzDrugsReorderingLevel $careTzDrugsReorderingLevel Object to remove from the list of results
     *
     * @return $this|ChildCareTzDrugsReorderingLevelQuery The current query, for fluid interface
     */
    public function prune($careTzDrugsReorderingLevel = null)
    {
        if ($careTzDrugsReorderingLevel) {
            $this->addUsingAlias(CareTzDrugsReorderingLevelTableMap::COL_ITEM_ID, $careTzDrugsReorderingLevel->getItemId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_drugs_reordering_level table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsReorderingLevelTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzDrugsReorderingLevelTableMap::clearInstancePool();
            CareTzDrugsReorderingLevelTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzDrugsReorderingLevelTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzDrugsReorderingLevelTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzDrugsReorderingLevelTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzDrugsReorderingLevelTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzDrugsReorderingLevelQuery
