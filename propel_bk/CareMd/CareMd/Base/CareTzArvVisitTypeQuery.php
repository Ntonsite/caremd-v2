<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvVisitType as ChildCareTzArvVisitType;
use CareMd\CareMd\CareTzArvVisitTypeQuery as ChildCareTzArvVisitTypeQuery;
use CareMd\CareMd\Map\CareTzArvVisitTypeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_visit_type' table.
 *
 *
 *
 * @method     ChildCareTzArvVisitTypeQuery orderByCareTzArvVisitTypeId($order = Criteria::ASC) Order by the care_tz_arv_visit_type_id column
 * @method     ChildCareTzArvVisitTypeQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCareTzArvVisitTypeQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method     ChildCareTzArvVisitTypeQuery groupByCareTzArvVisitTypeId() Group by the care_tz_arv_visit_type_id column
 * @method     ChildCareTzArvVisitTypeQuery groupByCode() Group by the code column
 * @method     ChildCareTzArvVisitTypeQuery groupByDescription() Group by the description column
 *
 * @method     ChildCareTzArvVisitTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvVisitTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvVisitTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvVisitTypeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvVisitTypeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvVisitTypeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvVisitType findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvVisitType matching the query
 * @method     ChildCareTzArvVisitType findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvVisitType matching the query, or a new ChildCareTzArvVisitType object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvVisitType findOneByCareTzArvVisitTypeId(int $care_tz_arv_visit_type_id) Return the first ChildCareTzArvVisitType filtered by the care_tz_arv_visit_type_id column
 * @method     ChildCareTzArvVisitType findOneByCode(string $code) Return the first ChildCareTzArvVisitType filtered by the code column
 * @method     ChildCareTzArvVisitType findOneByDescription(string $description) Return the first ChildCareTzArvVisitType filtered by the description column *

 * @method     ChildCareTzArvVisitType requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvVisitType by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisitType requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvVisitType matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvVisitType requireOneByCareTzArvVisitTypeId(int $care_tz_arv_visit_type_id) Return the first ChildCareTzArvVisitType filtered by the care_tz_arv_visit_type_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisitType requireOneByCode(string $code) Return the first ChildCareTzArvVisitType filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvVisitType requireOneByDescription(string $description) Return the first ChildCareTzArvVisitType filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvVisitType[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvVisitType objects based on current ModelCriteria
 * @method     ChildCareTzArvVisitType[]|ObjectCollection findByCareTzArvVisitTypeId(int $care_tz_arv_visit_type_id) Return ChildCareTzArvVisitType objects filtered by the care_tz_arv_visit_type_id column
 * @method     ChildCareTzArvVisitType[]|ObjectCollection findByCode(string $code) Return ChildCareTzArvVisitType objects filtered by the code column
 * @method     ChildCareTzArvVisitType[]|ObjectCollection findByDescription(string $description) Return ChildCareTzArvVisitType objects filtered by the description column
 * @method     ChildCareTzArvVisitType[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvVisitTypeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvVisitTypeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvVisitType', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvVisitTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvVisitTypeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvVisitTypeQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvVisitTypeQuery();
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
     * @return ChildCareTzArvVisitType|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvVisitTypeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvVisitTypeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvVisitType A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_visit_type_id, code, description FROM care_tz_arv_visit_type WHERE care_tz_arv_visit_type_id = :p0';
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
            /** @var ChildCareTzArvVisitType $obj */
            $obj = new ChildCareTzArvVisitType();
            $obj->hydrate($row);
            CareTzArvVisitTypeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvVisitType|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvVisitTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvVisitTypeTableMap::COL_CARE_TZ_ARV_VISIT_TYPE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvVisitTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvVisitTypeTableMap::COL_CARE_TZ_ARV_VISIT_TYPE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_visit_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvVisitTypeId(1234); // WHERE care_tz_arv_visit_type_id = 1234
     * $query->filterByCareTzArvVisitTypeId(array(12, 34)); // WHERE care_tz_arv_visit_type_id IN (12, 34)
     * $query->filterByCareTzArvVisitTypeId(array('min' => 12)); // WHERE care_tz_arv_visit_type_id > 12
     * </code>
     *
     * @param     mixed $careTzArvVisitTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvVisitTypeQuery The current query, for fluid interface
     */
    public function filterByCareTzArvVisitTypeId($careTzArvVisitTypeId = null, $comparison = null)
    {
        if (is_array($careTzArvVisitTypeId)) {
            $useMinMax = false;
            if (isset($careTzArvVisitTypeId['min'])) {
                $this->addUsingAlias(CareTzArvVisitTypeTableMap::COL_CARE_TZ_ARV_VISIT_TYPE_ID, $careTzArvVisitTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvVisitTypeId['max'])) {
                $this->addUsingAlias(CareTzArvVisitTypeTableMap::COL_CARE_TZ_ARV_VISIT_TYPE_ID, $careTzArvVisitTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTypeTableMap::COL_CARE_TZ_ARV_VISIT_TYPE_ID, $careTzArvVisitTypeId, $comparison);
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
     * @return $this|ChildCareTzArvVisitTypeQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTypeTableMap::COL_CODE, $code, $comparison);
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
     * @return $this|ChildCareTzArvVisitTypeQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvVisitTypeTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvVisitType $careTzArvVisitType Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvVisitTypeQuery The current query, for fluid interface
     */
    public function prune($careTzArvVisitType = null)
    {
        if ($careTzArvVisitType) {
            $this->addUsingAlias(CareTzArvVisitTypeTableMap::COL_CARE_TZ_ARV_VISIT_TYPE_ID, $careTzArvVisitType->getCareTzArvVisitTypeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_visit_type table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvVisitTypeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvVisitTypeTableMap::clearInstancePool();
            CareTzArvVisitTypeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvVisitTypeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvVisitTypeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvVisitTypeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvVisitTypeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvVisitTypeQuery
