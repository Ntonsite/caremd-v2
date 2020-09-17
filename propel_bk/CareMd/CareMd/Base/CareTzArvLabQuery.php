<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvLab as ChildCareTzArvLab;
use CareMd\CareMd\CareTzArvLabQuery as ChildCareTzArvLabQuery;
use CareMd\CareMd\Map\CareTzArvLabTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_lab' table.
 *
 *
 *
 * @method     ChildCareTzArvLabQuery orderByCareTzArvLabId($order = Criteria::ASC) Order by the care_tz_arv_lab_id column
 * @method     ChildCareTzArvLabQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareTzArvLabQuery orderByCareTzArvVisit2Id($order = Criteria::ASC) Order by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvLabQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     ChildCareTzArvLabQuery orderByDateAnalyse($order = Criteria::ASC) Order by the date_analyse column
 *
 * @method     ChildCareTzArvLabQuery groupByCareTzArvLabId() Group by the care_tz_arv_lab_id column
 * @method     ChildCareTzArvLabQuery groupByNr() Group by the nr column
 * @method     ChildCareTzArvLabQuery groupByCareTzArvVisit2Id() Group by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvLabQuery groupByValue() Group by the value column
 * @method     ChildCareTzArvLabQuery groupByDateAnalyse() Group by the date_analyse column
 *
 * @method     ChildCareTzArvLabQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvLabQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvLabQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvLabQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvLabQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvLabQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvLab findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvLab matching the query
 * @method     ChildCareTzArvLab findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvLab matching the query, or a new ChildCareTzArvLab object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvLab findOneByCareTzArvLabId(string $care_tz_arv_lab_id) Return the first ChildCareTzArvLab filtered by the care_tz_arv_lab_id column
 * @method     ChildCareTzArvLab findOneByNr(string $nr) Return the first ChildCareTzArvLab filtered by the nr column
 * @method     ChildCareTzArvLab findOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvLab filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvLab findOneByValue(string $value) Return the first ChildCareTzArvLab filtered by the value column
 * @method     ChildCareTzArvLab findOneByDateAnalyse(int $date_analyse) Return the first ChildCareTzArvLab filtered by the date_analyse column *

 * @method     ChildCareTzArvLab requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvLab by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvLab requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvLab matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvLab requireOneByCareTzArvLabId(string $care_tz_arv_lab_id) Return the first ChildCareTzArvLab filtered by the care_tz_arv_lab_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvLab requireOneByNr(string $nr) Return the first ChildCareTzArvLab filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvLab requireOneByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return the first ChildCareTzArvLab filtered by the care_tz_arv_visit_2_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvLab requireOneByValue(string $value) Return the first ChildCareTzArvLab filtered by the value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvLab requireOneByDateAnalyse(int $date_analyse) Return the first ChildCareTzArvLab filtered by the date_analyse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvLab[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvLab objects based on current ModelCriteria
 * @method     ChildCareTzArvLab[]|ObjectCollection findByCareTzArvLabId(string $care_tz_arv_lab_id) Return ChildCareTzArvLab objects filtered by the care_tz_arv_lab_id column
 * @method     ChildCareTzArvLab[]|ObjectCollection findByNr(string $nr) Return ChildCareTzArvLab objects filtered by the nr column
 * @method     ChildCareTzArvLab[]|ObjectCollection findByCareTzArvVisit2Id(string $care_tz_arv_visit_2_id) Return ChildCareTzArvLab objects filtered by the care_tz_arv_visit_2_id column
 * @method     ChildCareTzArvLab[]|ObjectCollection findByValue(string $value) Return ChildCareTzArvLab objects filtered by the value column
 * @method     ChildCareTzArvLab[]|ObjectCollection findByDateAnalyse(int $date_analyse) Return ChildCareTzArvLab objects filtered by the date_analyse column
 * @method     ChildCareTzArvLab[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvLabQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvLabQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvLab', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvLabQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvLabQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvLabQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvLabQuery();
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
     * @return ChildCareTzArvLab|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvLabTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvLabTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvLab A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_lab_id, nr, care_tz_arv_visit_2_id, value, date_analyse FROM care_tz_arv_lab WHERE care_tz_arv_lab_id = :p0';
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
            /** @var ChildCareTzArvLab $obj */
            $obj = new ChildCareTzArvLab();
            $obj->hydrate($row);
            CareTzArvLabTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvLab|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvLabQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvLabQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_lab_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvLabId(1234); // WHERE care_tz_arv_lab_id = 1234
     * $query->filterByCareTzArvLabId(array(12, 34)); // WHERE care_tz_arv_lab_id IN (12, 34)
     * $query->filterByCareTzArvLabId(array('min' => 12)); // WHERE care_tz_arv_lab_id > 12
     * </code>
     *
     * @param     mixed $careTzArvLabId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvLabQuery The current query, for fluid interface
     */
    public function filterByCareTzArvLabId($careTzArvLabId = null, $comparison = null)
    {
        if (is_array($careTzArvLabId)) {
            $useMinMax = false;
            if (isset($careTzArvLabId['min'])) {
                $this->addUsingAlias(CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID, $careTzArvLabId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvLabId['max'])) {
                $this->addUsingAlias(CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID, $careTzArvLabId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID, $careTzArvLabId, $comparison);
    }

    /**
     * Filter the query on the nr column
     *
     * Example usage:
     * <code>
     * $query->filterByNr(1234); // WHERE nr = 1234
     * $query->filterByNr(array(12, 34)); // WHERE nr IN (12, 34)
     * $query->filterByNr(array('min' => 12)); // WHERE nr > 12
     * </code>
     *
     * @param     mixed $nr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvLabQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareTzArvLabTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareTzArvLabTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvLabTableMap::COL_NR, $nr, $comparison);
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
     * @return $this|ChildCareTzArvLabQuery The current query, for fluid interface
     */
    public function filterByCareTzArvVisit2Id($careTzArvVisit2Id = null, $comparison = null)
    {
        if (is_array($careTzArvVisit2Id)) {
            $useMinMax = false;
            if (isset($careTzArvVisit2Id['min'])) {
                $this->addUsingAlias(CareTzArvLabTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvVisit2Id['max'])) {
                $this->addUsingAlias(CareTzArvLabTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvLabTableMap::COL_CARE_TZ_ARV_VISIT_2_ID, $careTzArvVisit2Id, $comparison);
    }

    /**
     * Filter the query on the value column
     *
     * Example usage:
     * <code>
     * $query->filterByValue('fooValue');   // WHERE value = 'fooValue'
     * $query->filterByValue('%fooValue%', Criteria::LIKE); // WHERE value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $value The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvLabQuery The current query, for fluid interface
     */
    public function filterByValue($value = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($value)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvLabTableMap::COL_VALUE, $value, $comparison);
    }

    /**
     * Filter the query on the date_analyse column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAnalyse(1234); // WHERE date_analyse = 1234
     * $query->filterByDateAnalyse(array(12, 34)); // WHERE date_analyse IN (12, 34)
     * $query->filterByDateAnalyse(array('min' => 12)); // WHERE date_analyse > 12
     * </code>
     *
     * @param     mixed $dateAnalyse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvLabQuery The current query, for fluid interface
     */
    public function filterByDateAnalyse($dateAnalyse = null, $comparison = null)
    {
        if (is_array($dateAnalyse)) {
            $useMinMax = false;
            if (isset($dateAnalyse['min'])) {
                $this->addUsingAlias(CareTzArvLabTableMap::COL_DATE_ANALYSE, $dateAnalyse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateAnalyse['max'])) {
                $this->addUsingAlias(CareTzArvLabTableMap::COL_DATE_ANALYSE, $dateAnalyse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvLabTableMap::COL_DATE_ANALYSE, $dateAnalyse, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvLab $careTzArvLab Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvLabQuery The current query, for fluid interface
     */
    public function prune($careTzArvLab = null)
    {
        if ($careTzArvLab) {
            $this->addUsingAlias(CareTzArvLabTableMap::COL_CARE_TZ_ARV_LAB_ID, $careTzArvLab->getCareTzArvLabId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_lab table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvLabTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvLabTableMap::clearInstancePool();
            CareTzArvLabTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvLabTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvLabTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvLabTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvLabTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvLabQuery
