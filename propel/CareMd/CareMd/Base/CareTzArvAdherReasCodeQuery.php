<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvAdherReasCode as ChildCareTzArvAdherReasCode;
use CareMd\CareMd\CareTzArvAdherReasCodeQuery as ChildCareTzArvAdherReasCodeQuery;
use CareMd\CareMd\Map\CareTzArvAdherReasCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_adher_reas_code' table.
 *
 *
 *
 * @method     ChildCareTzArvAdherReasCodeQuery orderByCareTzArvAdherReasCodeId($order = Criteria::ASC) Order by the care_tz_arv_adher_reas_code_id column
 * @method     ChildCareTzArvAdherReasCodeQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCareTzArvAdherReasCodeQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareTzArvAdherReasCodeQuery orderByOther($order = Criteria::ASC) Order by the other column
 *
 * @method     ChildCareTzArvAdherReasCodeQuery groupByCareTzArvAdherReasCodeId() Group by the care_tz_arv_adher_reas_code_id column
 * @method     ChildCareTzArvAdherReasCodeQuery groupByCode() Group by the code column
 * @method     ChildCareTzArvAdherReasCodeQuery groupByDescription() Group by the description column
 * @method     ChildCareTzArvAdherReasCodeQuery groupByOther() Group by the other column
 *
 * @method     ChildCareTzArvAdherReasCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvAdherReasCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvAdherReasCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvAdherReasCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvAdherReasCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvAdherReasCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvAdherReasCode findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvAdherReasCode matching the query
 * @method     ChildCareTzArvAdherReasCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvAdherReasCode matching the query, or a new ChildCareTzArvAdherReasCode object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvAdherReasCode findOneByCareTzArvAdherReasCodeId(int $care_tz_arv_adher_reas_code_id) Return the first ChildCareTzArvAdherReasCode filtered by the care_tz_arv_adher_reas_code_id column
 * @method     ChildCareTzArvAdherReasCode findOneByCode(int $code) Return the first ChildCareTzArvAdherReasCode filtered by the code column
 * @method     ChildCareTzArvAdherReasCode findOneByDescription(string $description) Return the first ChildCareTzArvAdherReasCode filtered by the description column
 * @method     ChildCareTzArvAdherReasCode findOneByOther(boolean $other) Return the first ChildCareTzArvAdherReasCode filtered by the other column *

 * @method     ChildCareTzArvAdherReasCode requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvAdherReasCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvAdherReasCode requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvAdherReasCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvAdherReasCode requireOneByCareTzArvAdherReasCodeId(int $care_tz_arv_adher_reas_code_id) Return the first ChildCareTzArvAdherReasCode filtered by the care_tz_arv_adher_reas_code_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvAdherReasCode requireOneByCode(int $code) Return the first ChildCareTzArvAdherReasCode filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvAdherReasCode requireOneByDescription(string $description) Return the first ChildCareTzArvAdherReasCode filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvAdherReasCode requireOneByOther(boolean $other) Return the first ChildCareTzArvAdherReasCode filtered by the other column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvAdherReasCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvAdherReasCode objects based on current ModelCriteria
 * @method     ChildCareTzArvAdherReasCode[]|ObjectCollection findByCareTzArvAdherReasCodeId(int $care_tz_arv_adher_reas_code_id) Return ChildCareTzArvAdherReasCode objects filtered by the care_tz_arv_adher_reas_code_id column
 * @method     ChildCareTzArvAdherReasCode[]|ObjectCollection findByCode(int $code) Return ChildCareTzArvAdherReasCode objects filtered by the code column
 * @method     ChildCareTzArvAdherReasCode[]|ObjectCollection findByDescription(string $description) Return ChildCareTzArvAdherReasCode objects filtered by the description column
 * @method     ChildCareTzArvAdherReasCode[]|ObjectCollection findByOther(boolean $other) Return ChildCareTzArvAdherReasCode objects filtered by the other column
 * @method     ChildCareTzArvAdherReasCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvAdherReasCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvAdherReasCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvAdherReasCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvAdherReasCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvAdherReasCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvAdherReasCodeQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvAdherReasCodeQuery();
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
     * @return ChildCareTzArvAdherReasCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvAdherReasCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvAdherReasCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvAdherReasCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_adher_reas_code_id, code, description, other FROM care_tz_arv_adher_reas_code WHERE care_tz_arv_adher_reas_code_id = :p0';
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
            /** @var ChildCareTzArvAdherReasCode $obj */
            $obj = new ChildCareTzArvAdherReasCode();
            $obj->hydrate($row);
            CareTzArvAdherReasCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvAdherReasCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvAdherReasCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvAdherReasCodeTableMap::COL_CARE_TZ_ARV_ADHER_REAS_CODE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvAdherReasCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvAdherReasCodeTableMap::COL_CARE_TZ_ARV_ADHER_REAS_CODE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_adher_reas_code_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvAdherReasCodeId(1234); // WHERE care_tz_arv_adher_reas_code_id = 1234
     * $query->filterByCareTzArvAdherReasCodeId(array(12, 34)); // WHERE care_tz_arv_adher_reas_code_id IN (12, 34)
     * $query->filterByCareTzArvAdherReasCodeId(array('min' => 12)); // WHERE care_tz_arv_adher_reas_code_id > 12
     * </code>
     *
     * @param     mixed $careTzArvAdherReasCodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvAdherReasCodeQuery The current query, for fluid interface
     */
    public function filterByCareTzArvAdherReasCodeId($careTzArvAdherReasCodeId = null, $comparison = null)
    {
        if (is_array($careTzArvAdherReasCodeId)) {
            $useMinMax = false;
            if (isset($careTzArvAdherReasCodeId['min'])) {
                $this->addUsingAlias(CareTzArvAdherReasCodeTableMap::COL_CARE_TZ_ARV_ADHER_REAS_CODE_ID, $careTzArvAdherReasCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvAdherReasCodeId['max'])) {
                $this->addUsingAlias(CareTzArvAdherReasCodeTableMap::COL_CARE_TZ_ARV_ADHER_REAS_CODE_ID, $careTzArvAdherReasCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvAdherReasCodeTableMap::COL_CARE_TZ_ARV_ADHER_REAS_CODE_ID, $careTzArvAdherReasCodeId, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode(1234); // WHERE code = 1234
     * $query->filterByCode(array(12, 34)); // WHERE code IN (12, 34)
     * $query->filterByCode(array('min' => 12)); // WHERE code > 12
     * </code>
     *
     * @param     mixed $code The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvAdherReasCodeQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (is_array($code)) {
            $useMinMax = false;
            if (isset($code['min'])) {
                $this->addUsingAlias(CareTzArvAdherReasCodeTableMap::COL_CODE, $code['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($code['max'])) {
                $this->addUsingAlias(CareTzArvAdherReasCodeTableMap::COL_CODE, $code['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvAdherReasCodeTableMap::COL_CODE, $code, $comparison);
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
     * @return $this|ChildCareTzArvAdherReasCodeQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvAdherReasCodeTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the other column
     *
     * Example usage:
     * <code>
     * $query->filterByOther(true); // WHERE other = true
     * $query->filterByOther('yes'); // WHERE other = true
     * </code>
     *
     * @param     boolean|string $other The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvAdherReasCodeQuery The current query, for fluid interface
     */
    public function filterByOther($other = null, $comparison = null)
    {
        if (is_string($other)) {
            $other = in_array(strtolower($other), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzArvAdherReasCodeTableMap::COL_OTHER, $other, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvAdherReasCode $careTzArvAdherReasCode Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvAdherReasCodeQuery The current query, for fluid interface
     */
    public function prune($careTzArvAdherReasCode = null)
    {
        if ($careTzArvAdherReasCode) {
            $this->addUsingAlias(CareTzArvAdherReasCodeTableMap::COL_CARE_TZ_ARV_ADHER_REAS_CODE_ID, $careTzArvAdherReasCode->getCareTzArvAdherReasCodeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_adher_reas_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvAdherReasCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvAdherReasCodeTableMap::clearInstancePool();
            CareTzArvAdherReasCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvAdherReasCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvAdherReasCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvAdherReasCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvAdherReasCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvAdherReasCodeQuery
