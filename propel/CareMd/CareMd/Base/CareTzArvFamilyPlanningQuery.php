<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvFamilyPlanning as ChildCareTzArvFamilyPlanning;
use CareMd\CareMd\CareTzArvFamilyPlanningQuery as ChildCareTzArvFamilyPlanningQuery;
use CareMd\CareMd\Map\CareTzArvFamilyPlanningTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_family_planning' table.
 *
 *
 *
 * @method     ChildCareTzArvFamilyPlanningQuery orderByArvVisitFamilyPlanningId($order = Criteria::ASC) Order by the arv_visit_family_planning_id column
 * @method     ChildCareTzArvFamilyPlanningQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCareTzArvFamilyPlanningQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method     ChildCareTzArvFamilyPlanningQuery groupByArvVisitFamilyPlanningId() Group by the arv_visit_family_planning_id column
 * @method     ChildCareTzArvFamilyPlanningQuery groupByCode() Group by the code column
 * @method     ChildCareTzArvFamilyPlanningQuery groupByDescription() Group by the description column
 *
 * @method     ChildCareTzArvFamilyPlanningQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvFamilyPlanningQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvFamilyPlanningQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvFamilyPlanningQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvFamilyPlanningQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvFamilyPlanningQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvFamilyPlanning findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvFamilyPlanning matching the query
 * @method     ChildCareTzArvFamilyPlanning findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvFamilyPlanning matching the query, or a new ChildCareTzArvFamilyPlanning object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvFamilyPlanning findOneByArvVisitFamilyPlanningId(int $arv_visit_family_planning_id) Return the first ChildCareTzArvFamilyPlanning filtered by the arv_visit_family_planning_id column
 * @method     ChildCareTzArvFamilyPlanning findOneByCode(string $code) Return the first ChildCareTzArvFamilyPlanning filtered by the code column
 * @method     ChildCareTzArvFamilyPlanning findOneByDescription(string $description) Return the first ChildCareTzArvFamilyPlanning filtered by the description column *

 * @method     ChildCareTzArvFamilyPlanning requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvFamilyPlanning by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvFamilyPlanning requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvFamilyPlanning matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvFamilyPlanning requireOneByArvVisitFamilyPlanningId(int $arv_visit_family_planning_id) Return the first ChildCareTzArvFamilyPlanning filtered by the arv_visit_family_planning_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvFamilyPlanning requireOneByCode(string $code) Return the first ChildCareTzArvFamilyPlanning filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvFamilyPlanning requireOneByDescription(string $description) Return the first ChildCareTzArvFamilyPlanning filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvFamilyPlanning[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvFamilyPlanning objects based on current ModelCriteria
 * @method     ChildCareTzArvFamilyPlanning[]|ObjectCollection findByArvVisitFamilyPlanningId(int $arv_visit_family_planning_id) Return ChildCareTzArvFamilyPlanning objects filtered by the arv_visit_family_planning_id column
 * @method     ChildCareTzArvFamilyPlanning[]|ObjectCollection findByCode(string $code) Return ChildCareTzArvFamilyPlanning objects filtered by the code column
 * @method     ChildCareTzArvFamilyPlanning[]|ObjectCollection findByDescription(string $description) Return ChildCareTzArvFamilyPlanning objects filtered by the description column
 * @method     ChildCareTzArvFamilyPlanning[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvFamilyPlanningQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvFamilyPlanningQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvFamilyPlanning', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvFamilyPlanningQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvFamilyPlanningQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvFamilyPlanningQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvFamilyPlanningQuery();
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
     * @return ChildCareTzArvFamilyPlanning|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvFamilyPlanningTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvFamilyPlanningTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvFamilyPlanning A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT arv_visit_family_planning_id, code, description FROM care_tz_arv_family_planning WHERE arv_visit_family_planning_id = :p0';
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
            /** @var ChildCareTzArvFamilyPlanning $obj */
            $obj = new ChildCareTzArvFamilyPlanning();
            $obj->hydrate($row);
            CareTzArvFamilyPlanningTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvFamilyPlanning|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvFamilyPlanningQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvFamilyPlanningTableMap::COL_ARV_VISIT_FAMILY_PLANNING_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvFamilyPlanningQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvFamilyPlanningTableMap::COL_ARV_VISIT_FAMILY_PLANNING_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the arv_visit_family_planning_id column
     *
     * Example usage:
     * <code>
     * $query->filterByArvVisitFamilyPlanningId(1234); // WHERE arv_visit_family_planning_id = 1234
     * $query->filterByArvVisitFamilyPlanningId(array(12, 34)); // WHERE arv_visit_family_planning_id IN (12, 34)
     * $query->filterByArvVisitFamilyPlanningId(array('min' => 12)); // WHERE arv_visit_family_planning_id > 12
     * </code>
     *
     * @param     mixed $arvVisitFamilyPlanningId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvFamilyPlanningQuery The current query, for fluid interface
     */
    public function filterByArvVisitFamilyPlanningId($arvVisitFamilyPlanningId = null, $comparison = null)
    {
        if (is_array($arvVisitFamilyPlanningId)) {
            $useMinMax = false;
            if (isset($arvVisitFamilyPlanningId['min'])) {
                $this->addUsingAlias(CareTzArvFamilyPlanningTableMap::COL_ARV_VISIT_FAMILY_PLANNING_ID, $arvVisitFamilyPlanningId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arvVisitFamilyPlanningId['max'])) {
                $this->addUsingAlias(CareTzArvFamilyPlanningTableMap::COL_ARV_VISIT_FAMILY_PLANNING_ID, $arvVisitFamilyPlanningId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvFamilyPlanningTableMap::COL_ARV_VISIT_FAMILY_PLANNING_ID, $arvVisitFamilyPlanningId, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%', Criteria::LIKE); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvFamilyPlanningQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvFamilyPlanningTableMap::COL_CODE, $code, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvFamilyPlanningQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvFamilyPlanningTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvFamilyPlanning $careTzArvFamilyPlanning Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvFamilyPlanningQuery The current query, for fluid interface
     */
    public function prune($careTzArvFamilyPlanning = null)
    {
        if ($careTzArvFamilyPlanning) {
            $this->addUsingAlias(CareTzArvFamilyPlanningTableMap::COL_ARV_VISIT_FAMILY_PLANNING_ID, $careTzArvFamilyPlanning->getArvVisitFamilyPlanningId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_family_planning table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvFamilyPlanningTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvFamilyPlanningTableMap::clearInstancePool();
            CareTzArvFamilyPlanningTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvFamilyPlanningTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvFamilyPlanningTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvFamilyPlanningTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvFamilyPlanningTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvFamilyPlanningQuery
