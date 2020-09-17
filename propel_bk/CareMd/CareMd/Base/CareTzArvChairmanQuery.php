<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvChairman as ChildCareTzArvChairman;
use CareMd\CareMd\CareTzArvChairmanQuery as ChildCareTzArvChairmanQuery;
use CareMd\CareMd\Map\CareTzArvChairmanTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_chairman' table.
 *
 *
 *
 * @method     ChildCareTzArvChairmanQuery orderByCareTzArvChairmanId($order = Criteria::ASC) Order by the care_tz_arv_chairman_id column
 * @method     ChildCareTzArvChairmanQuery orderByCareTzArvRegistrationId($order = Criteria::ASC) Order by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvChairmanQuery orderByVname($order = Criteria::ASC) Order by the vname column
 * @method     ChildCareTzArvChairmanQuery orderByNname($order = Criteria::ASC) Order by the nname column
 * @method     ChildCareTzArvChairmanQuery orderByStreet($order = Criteria::ASC) Order by the street column
 * @method     ChildCareTzArvChairmanQuery orderByVillage($order = Criteria::ASC) Order by the village column
 * @method     ChildCareTzArvChairmanQuery orderByHamlet($order = Criteria::ASC) Order by the hamlet column
 *
 * @method     ChildCareTzArvChairmanQuery groupByCareTzArvChairmanId() Group by the care_tz_arv_chairman_id column
 * @method     ChildCareTzArvChairmanQuery groupByCareTzArvRegistrationId() Group by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvChairmanQuery groupByVname() Group by the vname column
 * @method     ChildCareTzArvChairmanQuery groupByNname() Group by the nname column
 * @method     ChildCareTzArvChairmanQuery groupByStreet() Group by the street column
 * @method     ChildCareTzArvChairmanQuery groupByVillage() Group by the village column
 * @method     ChildCareTzArvChairmanQuery groupByHamlet() Group by the hamlet column
 *
 * @method     ChildCareTzArvChairmanQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvChairmanQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvChairmanQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvChairmanQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvChairmanQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvChairmanQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvChairman findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvChairman matching the query
 * @method     ChildCareTzArvChairman findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvChairman matching the query, or a new ChildCareTzArvChairman object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvChairman findOneByCareTzArvChairmanId(int $care_tz_arv_chairman_id) Return the first ChildCareTzArvChairman filtered by the care_tz_arv_chairman_id column
 * @method     ChildCareTzArvChairman findOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvChairman filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvChairman findOneByVname(string $vname) Return the first ChildCareTzArvChairman filtered by the vname column
 * @method     ChildCareTzArvChairman findOneByNname(string $nname) Return the first ChildCareTzArvChairman filtered by the nname column
 * @method     ChildCareTzArvChairman findOneByStreet(string $street) Return the first ChildCareTzArvChairman filtered by the street column
 * @method     ChildCareTzArvChairman findOneByVillage(string $village) Return the first ChildCareTzArvChairman filtered by the village column
 * @method     ChildCareTzArvChairman findOneByHamlet(string $hamlet) Return the first ChildCareTzArvChairman filtered by the hamlet column *

 * @method     ChildCareTzArvChairman requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvChairman by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvChairman requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvChairman matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvChairman requireOneByCareTzArvChairmanId(int $care_tz_arv_chairman_id) Return the first ChildCareTzArvChairman filtered by the care_tz_arv_chairman_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvChairman requireOneByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return the first ChildCareTzArvChairman filtered by the care_tz_arv_registration_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvChairman requireOneByVname(string $vname) Return the first ChildCareTzArvChairman filtered by the vname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvChairman requireOneByNname(string $nname) Return the first ChildCareTzArvChairman filtered by the nname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvChairman requireOneByStreet(string $street) Return the first ChildCareTzArvChairman filtered by the street column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvChairman requireOneByVillage(string $village) Return the first ChildCareTzArvChairman filtered by the village column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvChairman requireOneByHamlet(string $hamlet) Return the first ChildCareTzArvChairman filtered by the hamlet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvChairman[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvChairman objects based on current ModelCriteria
 * @method     ChildCareTzArvChairman[]|ObjectCollection findByCareTzArvChairmanId(int $care_tz_arv_chairman_id) Return ChildCareTzArvChairman objects filtered by the care_tz_arv_chairman_id column
 * @method     ChildCareTzArvChairman[]|ObjectCollection findByCareTzArvRegistrationId(string $care_tz_arv_registration_id) Return ChildCareTzArvChairman objects filtered by the care_tz_arv_registration_id column
 * @method     ChildCareTzArvChairman[]|ObjectCollection findByVname(string $vname) Return ChildCareTzArvChairman objects filtered by the vname column
 * @method     ChildCareTzArvChairman[]|ObjectCollection findByNname(string $nname) Return ChildCareTzArvChairman objects filtered by the nname column
 * @method     ChildCareTzArvChairman[]|ObjectCollection findByStreet(string $street) Return ChildCareTzArvChairman objects filtered by the street column
 * @method     ChildCareTzArvChairman[]|ObjectCollection findByVillage(string $village) Return ChildCareTzArvChairman objects filtered by the village column
 * @method     ChildCareTzArvChairman[]|ObjectCollection findByHamlet(string $hamlet) Return ChildCareTzArvChairman objects filtered by the hamlet column
 * @method     ChildCareTzArvChairman[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvChairmanQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvChairmanQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvChairman', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvChairmanQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvChairmanQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvChairmanQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvChairmanQuery();
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
     * @return ChildCareTzArvChairman|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvChairmanTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvChairmanTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvChairman A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT care_tz_arv_chairman_id, care_tz_arv_registration_id, vname, nname, street, village, hamlet FROM care_tz_arv_chairman WHERE care_tz_arv_chairman_id = :p0';
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
            /** @var ChildCareTzArvChairman $obj */
            $obj = new ChildCareTzArvChairman();
            $obj->hydrate($row);
            CareTzArvChairmanTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvChairman|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvChairmanQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvChairmanTableMap::COL_CARE_TZ_ARV_CHAIRMAN_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvChairmanQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvChairmanTableMap::COL_CARE_TZ_ARV_CHAIRMAN_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the care_tz_arv_chairman_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvChairmanId(1234); // WHERE care_tz_arv_chairman_id = 1234
     * $query->filterByCareTzArvChairmanId(array(12, 34)); // WHERE care_tz_arv_chairman_id IN (12, 34)
     * $query->filterByCareTzArvChairmanId(array('min' => 12)); // WHERE care_tz_arv_chairman_id > 12
     * </code>
     *
     * @param     mixed $careTzArvChairmanId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvChairmanQuery The current query, for fluid interface
     */
    public function filterByCareTzArvChairmanId($careTzArvChairmanId = null, $comparison = null)
    {
        if (is_array($careTzArvChairmanId)) {
            $useMinMax = false;
            if (isset($careTzArvChairmanId['min'])) {
                $this->addUsingAlias(CareTzArvChairmanTableMap::COL_CARE_TZ_ARV_CHAIRMAN_ID, $careTzArvChairmanId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvChairmanId['max'])) {
                $this->addUsingAlias(CareTzArvChairmanTableMap::COL_CARE_TZ_ARV_CHAIRMAN_ID, $careTzArvChairmanId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvChairmanTableMap::COL_CARE_TZ_ARV_CHAIRMAN_ID, $careTzArvChairmanId, $comparison);
    }

    /**
     * Filter the query on the care_tz_arv_registration_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCareTzArvRegistrationId(1234); // WHERE care_tz_arv_registration_id = 1234
     * $query->filterByCareTzArvRegistrationId(array(12, 34)); // WHERE care_tz_arv_registration_id IN (12, 34)
     * $query->filterByCareTzArvRegistrationId(array('min' => 12)); // WHERE care_tz_arv_registration_id > 12
     * </code>
     *
     * @param     mixed $careTzArvRegistrationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvChairmanQuery The current query, for fluid interface
     */
    public function filterByCareTzArvRegistrationId($careTzArvRegistrationId = null, $comparison = null)
    {
        if (is_array($careTzArvRegistrationId)) {
            $useMinMax = false;
            if (isset($careTzArvRegistrationId['min'])) {
                $this->addUsingAlias(CareTzArvChairmanTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($careTzArvRegistrationId['max'])) {
                $this->addUsingAlias(CareTzArvChairmanTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvChairmanTableMap::COL_CARE_TZ_ARV_REGISTRATION_ID, $careTzArvRegistrationId, $comparison);
    }

    /**
     * Filter the query on the vname column
     *
     * Example usage:
     * <code>
     * $query->filterByVname('fooValue');   // WHERE vname = 'fooValue'
     * $query->filterByVname('%fooValue%', Criteria::LIKE); // WHERE vname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvChairmanQuery The current query, for fluid interface
     */
    public function filterByVname($vname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvChairmanTableMap::COL_VNAME, $vname, $comparison);
    }

    /**
     * Filter the query on the nname column
     *
     * Example usage:
     * <code>
     * $query->filterByNname('fooValue');   // WHERE nname = 'fooValue'
     * $query->filterByNname('%fooValue%', Criteria::LIKE); // WHERE nname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvChairmanQuery The current query, for fluid interface
     */
    public function filterByNname($nname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvChairmanTableMap::COL_NNAME, $nname, $comparison);
    }

    /**
     * Filter the query on the street column
     *
     * Example usage:
     * <code>
     * $query->filterByStreet('fooValue');   // WHERE street = 'fooValue'
     * $query->filterByStreet('%fooValue%', Criteria::LIKE); // WHERE street LIKE '%fooValue%'
     * </code>
     *
     * @param     string $street The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvChairmanQuery The current query, for fluid interface
     */
    public function filterByStreet($street = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($street)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvChairmanTableMap::COL_STREET, $street, $comparison);
    }

    /**
     * Filter the query on the village column
     *
     * Example usage:
     * <code>
     * $query->filterByVillage('fooValue');   // WHERE village = 'fooValue'
     * $query->filterByVillage('%fooValue%', Criteria::LIKE); // WHERE village LIKE '%fooValue%'
     * </code>
     *
     * @param     string $village The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvChairmanQuery The current query, for fluid interface
     */
    public function filterByVillage($village = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($village)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvChairmanTableMap::COL_VILLAGE, $village, $comparison);
    }

    /**
     * Filter the query on the hamlet column
     *
     * Example usage:
     * <code>
     * $query->filterByHamlet('fooValue');   // WHERE hamlet = 'fooValue'
     * $query->filterByHamlet('%fooValue%', Criteria::LIKE); // WHERE hamlet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hamlet The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvChairmanQuery The current query, for fluid interface
     */
    public function filterByHamlet($hamlet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hamlet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvChairmanTableMap::COL_HAMLET, $hamlet, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvChairman $careTzArvChairman Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvChairmanQuery The current query, for fluid interface
     */
    public function prune($careTzArvChairman = null)
    {
        if ($careTzArvChairman) {
            $this->addUsingAlias(CareTzArvChairmanTableMap::COL_CARE_TZ_ARV_CHAIRMAN_ID, $careTzArvChairman->getCareTzArvChairmanId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_chairman table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvChairmanTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvChairmanTableMap::clearInstancePool();
            CareTzArvChairmanTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvChairmanTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvChairmanTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvChairmanTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvChairmanTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvChairmanQuery
