<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvEventsCode as ChildCareTzArvEventsCode;
use CareMd\CareMd\CareTzArvEventsCodeQuery as ChildCareTzArvEventsCodeQuery;
use CareMd\CareMd\Map\CareTzArvEventsCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_events_code' table.
 *
 *
 *
 * @method     ChildCareTzArvEventsCodeQuery orderByCareTzArvEventsCodeId($order = Criteria::ASC) Order by the care_tz_arv_events_code_id column
 * @method     ChildCareTzArvEventsCodeQuery orderByWhoCode($order = Criteria::ASC) Order by the who_code column
 * @method     ChildCareTzArvEventsCodeQuery orderByWhoCodeText($order = Criteria::ASC) Order by the who_code_text column
 * @method     ChildCareTzArvEventsCodeQuery orderByParent($order = Criteria::ASC) Order by the parent column
 *
 * @method     ChildCareTzArvEventsCodeQuery groupByCareTzArvEventsCodeId() Group by the care_tz_arv_events_code_id column
 * @method     ChildCareTzArvEventsCodeQuery groupByWhoCode() Group by the who_code column
 * @method     ChildCareTzArvEventsCodeQuery groupByWhoCodeText() Group by the who_code_text column
 * @method     ChildCareTzArvEventsCodeQuery groupByParent() Group by the parent column
 *
 * @method     ChildCareTzArvEventsCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvEventsCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvEventsCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvEventsCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvEventsCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvEventsCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvEventsCode findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvEventsCode matching the query
 * @method     ChildCareTzArvEventsCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvEventsCode matching the query, or a new ChildCareTzArvEventsCode object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvEventsCode findOneByCareTzArvEventsCodeId(string $care_tz_arv_events_code_id) Return the first ChildCareTzArvEventsCode filtered by the care_tz_arv_events_code_id column
 * @method     ChildCareTzArvEventsCode findOneByWhoCode(int $who_code) Return the first ChildCareTzArvEventsCode filtered by the who_code column
 * @method     ChildCareTzArvEventsCode findOneByWhoCodeText(string $who_code_text) Return the first ChildCareTzArvEventsCode filtered by the who_code_text column
 * @method     ChildCareTzArvEventsCode findOneByParent(int $parent) Return the first ChildCareTzArvEventsCode filtered by the parent column *

 * @method     ChildCareTzArvEventsCode requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvEventsCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEventsCode requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvEventsCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvEventsCode requireOneByCareTzArvEventsCodeId(string $care_tz_arv_events_code_id) Return the first ChildCareTzArvEventsCode filtered by the care_tz_arv_events_code_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEventsCode requireOneByWhoCode(int $who_code) Return the first ChildCareTzArvEventsCode filtered by the who_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEventsCode requireOneByWhoCodeText(string $who_code_text) Return the first ChildCareTzArvEventsCode filtered by the who_code_text column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvEventsCode requireOneByParent(int $parent) Return the first ChildCareTzArvEventsCode filtered by the parent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvEventsCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvEventsCode objects based on current ModelCriteria
 * @method     ChildCareTzArvEventsCode[]|ObjectCollection findByCareTzArvEventsCodeId(string $care_tz_arv_events_code_id) Return ChildCareTzArvEventsCode objects filtered by the care_tz_arv_events_code_id column
 * @method     ChildCareTzArvEventsCode[]|ObjectCollection findByWhoCode(int $who_code) Return ChildCareTzArvEventsCode objects filtered by the who_code column
 * @method     ChildCareTzArvEventsCode[]|ObjectCollection findByWhoCodeText(string $who_code_text) Return ChildCareTzArvEventsCode objects filtered by the who_code_text column
 * @method     ChildCareTzArvEventsCode[]|ObjectCollection findByParent(int $parent) Return ChildCareTzArvEventsCode objects filtered by the parent column
 * @method     ChildCareTzArvEventsCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvEventsCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvEventsCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvEventsCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvEventsCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvEventsCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvEventsCodeQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvEventsCodeQuery();
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
     * @return ChildCareTzArvEventsCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvEventsCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvEventsCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvEventsCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_events_code_id, who_code, who_code_text, parent FROM care_tz_arv_events_code WHERE care_tz_arv_events_code_id = :p0';
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
            /** @var ChildCareTzArvEventsCode $obj */
            $obj = new ChildCareTzArvEventsCode();
            $obj->hydrate($row);
            CareTzArvEventsCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvEventsCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvEventsCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_CARE_TZ_ARV_EVENTS_CODE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvEventsCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_CARE_TZ_ARV_EVENTS_CODE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_events_code_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvEventsCodeId(1234); // WHERE care_tz_arv_events_code_id = 1234
     * $query->filterByCareTzArvEventsCodeId(array(12, 34)); // WHERE care_tz_arv_events_code_id IN (12, 34)
     * $query->filterByCareTzArvEventsCodeId(array('min' => 12)); // WHERE care_tz_arv_events_code_id > 12
     * </code>
     *
     * @param     mixed $careTzArvEventsCodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEventsCodeQuery The current query, for fluid interface
     */
    public function filterByCareTzArvEventsCodeId($careTzArvEventsCodeId = null, $comparison = null)
    {
        if (is_array($careTzArvEventsCodeId)) {
            $useMinMax = false;
            if (isset($careTzArvEventsCodeId['min'])) {
                $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_CARE_TZ_ARV_EVENTS_CODE_ID, $careTzArvEventsCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvEventsCodeId['max'])) {
                $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_CARE_TZ_ARV_EVENTS_CODE_ID, $careTzArvEventsCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_CARE_TZ_ARV_EVENTS_CODE_ID, $careTzArvEventsCodeId, $comparison);
    }

    /**
     * Filter the query on the who_code column
     *
     * Example usage:
     * <code>
     * $query->filterByWhoCode(1234); // WHERE who_code = 1234
     * $query->filterByWhoCode(array(12, 34)); // WHERE who_code IN (12, 34)
     * $query->filterByWhoCode(array('min' => 12)); // WHERE who_code > 12
     * </code>
     *
     * @param     mixed $whoCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEventsCodeQuery The current query, for fluid interface
     */
    public function filterByWhoCode($whoCode = null, $comparison = null)
    {
        if (is_array($whoCode)) {
            $useMinMax = false;
            if (isset($whoCode['min'])) {
                $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_WHO_CODE, $whoCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($whoCode['max'])) {
                $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_WHO_CODE, $whoCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_WHO_CODE, $whoCode, $comparison);
    }

    /**
     * Filter the query on the who_code_text column
     *
     * Example usage:
     * <code>
     * $query->filterByWhoCodeText('fooValue');   // WHERE who_code_text = 'fooValue'
     * $query->filterByWhoCodeText('%fooValue%', Criteria::LIKE); // WHERE who_code_text LIKE '%fooValue%'
     * </code>
     *
     * @param     string $whoCodeText The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEventsCodeQuery The current query, for fluid interface
     */
    public function filterByWhoCodeText($whoCodeText = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($whoCodeText)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_WHO_CODE_TEXT, $whoCodeText, $comparison);
    }

    /**
     * Filter the query on the parent column
     *
     * Example usage:
     * <code>
     * $query->filterByParent(1234); // WHERE parent = 1234
     * $query->filterByParent(array(12, 34)); // WHERE parent IN (12, 34)
     * $query->filterByParent(array('min' => 12)); // WHERE parent > 12
     * </code>
     *
     * @param     mixed $parent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvEventsCodeQuery The current query, for fluid interface
     */
    public function filterByParent($parent = null, $comparison = null)
    {
        if (is_array($parent)) {
            $useMinMax = false;
            if (isset($parent['min'])) {
                $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_PARENT, $parent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parent['max'])) {
                $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_PARENT, $parent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_PARENT, $parent, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvEventsCode $careTzArvEventsCode Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvEventsCodeQuery The current query, for fluid interface
     */
    public function prune($careTzArvEventsCode = null)
    {
        if ($careTzArvEventsCode) {
            $this->addUsingAlias(CareTzArvEventsCodeTableMap::COL_CARE_TZ_ARV_EVENTS_CODE_ID, $careTzArvEventsCode->getCareTzArvEventsCodeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_events_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvEventsCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvEventsCodeTableMap::clearInstancePool();
            CareTzArvEventsCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvEventsCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvEventsCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvEventsCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvEventsCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvEventsCodeQuery
