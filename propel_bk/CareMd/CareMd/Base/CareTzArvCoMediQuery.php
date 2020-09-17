<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvCoMedi as ChildCareTzArvCoMedi;
use CareMd\CareMd\CareTzArvCoMediQuery as ChildCareTzArvCoMediQuery;
use CareMd\CareMd\Map\CareTzArvCoMediTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_co_medi' table.
 *
 *
 *
 * @method     ChildCareTzArvCoMediQuery orderByCareTzArvCoMediId($order = Criteria::ASC) Order by the care_tz_arv_co_medi_id column
 * @method     ChildCareTzArvCoMediQuery orderByCareTzArvCoMediOtherId($order = Criteria::ASC) Order by the care_tz_arv_co_medi_other_id column
 * @method     ChildCareTzArvCoMediQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     ChildCareTzArvCoMediQuery orderByCareTzArvVisit2Id($order = Criteria::ASC) Order by the care_tz_arv_visit_2_id column
 *
 * @method     ChildCareTzArvCoMediQuery groupByCareTzArvCoMediId() Group by the care_tz_arv_co_medi_id column
 * @method     ChildCareTzArvCoMediQuery groupByCareTzArvCoMediOtherId() Group by the care_tz_arv_co_medi_other_id column
 * @method     ChildCareTzArvCoMediQuery groupByItemId() Group by the item_id column
 * @method     ChildCareTzArvCoMediQuery groupByCareTzArvVisit2Id() Group by the care_tz_arv_visit_2_id column
 *
 * @method     ChildCareTzArvCoMediQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvCoMediQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvCoMediQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvCoMediQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvCoMediQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvCoMediQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvCoMedi findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvCoMedi matching the query
 * @method     ChildCareTzArvCoMedi findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvCoMedi matching the query, or a new ChildCareTzArvCoMedi object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvCoMedi findOneByCareTzArvCoMediId(int $care_tz_arv_co_medi_id) Return the first ChildCareTzArvCoMedi filtered by the care_tz_arv_co_medi_id column
 * @method     ChildCareTzArvCoMedi findOneByCareTzArvCoMediOtherId(int $care_tz_arv_co_medi_other_id) Return the first ChildCareTzArvCoMedi filtered by the care_tz_arv_co_medi_other_id column
 * @method     ChildCareTzArvCoMedi findOneByItemId(string $item_id) Return the first ChildCareTzArvCoMedi filtered by the item_id column
 * @method     ChildCareTzArvCoMedi findOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvCoMedi filtered by the care_tz_arv_visit_2_id column *

 * @method     ChildCareTzArvCoMedi requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvCoMedi by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCoMedi requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvCoMedi matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvCoMedi requireOneByCareTzArvCoMediId(int $care_tz_arv_co_medi_id) Return the first ChildCareTzArvCoMedi filtered by the care_tz_arv_co_medi_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCoMedi requireOneByCareTzArvCoMediOtherId(int $care_tz_arv_co_medi_other_id) Return the first ChildCareTzArvCoMedi filtered by the care_tz_arv_co_medi_other_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCoMedi requireOneByItemId(string $item_id) Return the first ChildCareTzArvCoMedi filtered by the item_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCoMedi requireOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvCoMedi filtered by the care_tz_arv_visit_2_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvCoMedi[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvCoMedi objects based on current ModelCriteria
 * @method     ChildCareTzArvCoMedi[]|ObjectCollection findByCareTzArvCoMediId(int $care_tz_arv_co_medi_id) Return ChildCareTzArvCoMedi objects filtered by the care_tz_arv_co_medi_id column
 * @method     ChildCareTzArvCoMedi[]|ObjectCollection findByCareTzArvCoMediOtherId(int $care_tz_arv_co_medi_other_id) Return ChildCareTzArvCoMedi objects filtered by the care_tz_arv_co_medi_other_id column
 * @method     ChildCareTzArvCoMedi[]|ObjectCollection findByItemId(string $item_id) Return ChildCareTzArvCoMedi objects filtered by the item_id column
 * @method     ChildCareTzArvCoMedi[]|ObjectCollection findByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return ChildCareTzArvCoMedi objects filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvCoMedi[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvCoMediQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvCoMediQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvCoMedi', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvCoMediQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvCoMediQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvCoMediQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvCoMediQuery();
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
     * @return ChildCareTzArvCoMedi|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvCoMediTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvCoMediTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvCoMedi A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_co_medi_id, care_tz_arv_co_medi_other_id, item_id, care_tz_arv_visit_2_id FROM care_tz_arv_co_medi WHERE care_tz_arv_co_medi_id = :p0';
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
            /** @var ChildCareTzArvCoMedi $obj */
            $obj = new ChildCareTzArvCoMedi();
            $obj->hydrate($row);
            CareTzArvCoMediTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvCoMedi|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvCoMediQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvCoMediTableMap::COL_CARE_TZ_ARV_CO_MEDI_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvCoMediQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvCoMediTableMap::COL_CARE_TZ_ARV_CO_MEDI_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_co_medi_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvCoMediId(1234); // WHERE care_tz_arv_co_medi_id = 1234
     * $query->filterByCareTzArvCoMediId(array(12, 34)); // WHERE care_tz_arv_co_medi_id IN (12, 34)
     * $query->filterByCareTzArvCoMediId(array('min' => 12)); // WHERE care_tz_arv_co_medi_id > 12
     * </code>
     *
     * @param     mixed $careTzArvCoMediId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCoMediQuery The current query, for fluid interface
     */
    public function filterByCareTzArvCoMediId($careTzArvCoMediId = null, $comparison = null)
    {
        if (is_array($careTzArvCoMediId)) {
            $useMinMax = false;
            if (isset($careTzArvCoMediId['min'])) {
                $this->addUsingAlias(CareTzArvCoMediTableMap::COL_CARE_TZ_ARV_CO_MEDI_ID, $careTzArvCoMediId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvCoMediId['max'])) {
                $this->addUsingAlias(CareTzArvCoMediTableMap::COL_CARE_TZ_ARV_CO_MEDI_ID, $careTzArvCoMediId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCoMediTableMap::COL_CARE_TZ_ARV_CO_MEDI_ID, $careTzArvCoMediId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_co_medi_other_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvCoMediOtherId(1234); // WHERE care_tz_arv_co_medi_other_id = 1234
     * $query->filterByCareTzArvCoMediOtherId(array(12, 34)); // WHERE care_tz_arv_co_medi_other_id IN (12, 34)
     * $query->filterByCareTzArvCoMediOtherId(array('min' => 12)); // WHERE care_tz_arv_co_medi_other_id > 12
     * </code>
     *
     * @param     mixed $careTzArvCoMediOtherId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCoMediQuery The current query, for fluid interface
     */
    public function filterByCareTzArvCoMediOtherId($careTzArvCoMediOtherId = null, $comparison = null)
    {
        if (is_array($careTzArvCoMediOtherId)) {
            $useMinMax = false;
            if (isset($careTzArvCoMediOtherId['min'])) {
                $this->addUsingAlias(CareTzArvCoMediTableMap::COL_CARE_TZ_ARV_CO_MEDI_OTHER_ID, $careTzArvCoMediOtherId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvCoMediOtherId['max'])) {
                $this->addUsingAlias(CareTzArvCoMediTableMap::COL_CARE_TZ_ARV_CO_MEDI_OTHER_ID, $careTzArvCoMediOtherId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCoMediTableMap::COL_CARE_TZ_ARV_CO_MEDI_OTHER_ID, $careTzArvCoMediOtherId, $comparison);
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
     * @return $this|ChildCareTzArvCoMediQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (is_array($itemId)) {
            $useMinMax = false;
            if (isset($itemId['min'])) {
                $this->addUsingAlias(CareTzArvCoMediTableMap::COL_ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemId['max'])) {
                $this->addUsingAlias(CareTzArvCoMediTableMap::COL_ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCoMediTableMap::COL_ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_visit_2_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvVisit2Id(1234); // WHERE care_tz_arv_visit_2_id = 1234
     * $query->filterByCareTzArvVisit2Id(array(12, 34)); // WHERE care_tz_arv_visit_2_id IN (12, 34)
     * $query->filterByCareTzArvVisit2Id(array('min' => 12)); // WHERE care_tz_arv_visit_2_id > 12
     * </code>
     *
     * @param     mixed $careTzArvVisit2Id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCoMediQuery The current query, for fluid interface
     */
    public function filterByCareTzArvVisit2Id($careTzArvVisit2Id = null, $comparison = null)
    {
        if (is_array($careTzArvVisit2Id)) {
            $useMinMax = false;
            if (isset($careTzArvVisit2Id['min'])) {
                $this->addUsingAlias(CareTzArvCoMediTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvVisit2Id['max'])) {
                $this->addUsingAlias(CareTzArvCoMediTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCoMediTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvCoMedi $careTzArvCoMedi Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvCoMediQuery The current query, for fluid interface
     */
    public function prune($careTzArvCoMedi = null)
    {
        if ($careTzArvCoMedi) {
            $this->addUsingAlias(CareTzArvCoMediTableMap::COL_CARE_TZ_ARV_CO_MEDI_ID, $careTzArvCoMedi->getCareTzArvCoMediId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_co_medi table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvCoMediTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvCoMediTableMap::clearInstancePool();
            CareTzArvCoMediTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvCoMediTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvCoMediTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvCoMediTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvCoMediTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvCoMediQuery
