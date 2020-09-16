<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzHospitalRoomsConf as ChildCareTzHospitalRoomsConf;
use CareMd\CareMd\CareTzHospitalRoomsConfQuery as ChildCareTzHospitalRoomsConfQuery;
use CareMd\CareMd\Map\CareTzHospitalRoomsConfTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_hospital_rooms_conf' table.
 *
 *
 *
 * @method     ChildCareTzHospitalRoomsConfQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTzHospitalRoomsConfQuery orderByDpt($order = Criteria::ASC) Order by the dpt column
 * @method     ChildCareTzHospitalRoomsConfQuery orderByUsers($order = Criteria::ASC) Order by the users column
 * @method     ChildCareTzHospitalRoomsConfQuery orderByDate($order = Criteria::ASC) Order by the date column
 *
 * @method     ChildCareTzHospitalRoomsConfQuery groupByName() Group by the name column
 * @method     ChildCareTzHospitalRoomsConfQuery groupByDpt() Group by the dpt column
 * @method     ChildCareTzHospitalRoomsConfQuery groupByUsers() Group by the users column
 * @method     ChildCareTzHospitalRoomsConfQuery groupByDate() Group by the date column
 *
 * @method     ChildCareTzHospitalRoomsConfQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzHospitalRoomsConfQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzHospitalRoomsConfQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzHospitalRoomsConfQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzHospitalRoomsConfQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzHospitalRoomsConfQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzHospitalRoomsConf findOne(ConnectionInterface $con = null) Return the first ChildCareTzHospitalRoomsConf matching the query
 * @method     ChildCareTzHospitalRoomsConf findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzHospitalRoomsConf matching the query, or a new ChildCareTzHospitalRoomsConf object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzHospitalRoomsConf findOneByName(string $name) Return the first ChildCareTzHospitalRoomsConf filtered by the name column
 * @method     ChildCareTzHospitalRoomsConf findOneByDpt(string $dpt) Return the first ChildCareTzHospitalRoomsConf filtered by the dpt column
 * @method     ChildCareTzHospitalRoomsConf findOneByUsers(string $users) Return the first ChildCareTzHospitalRoomsConf filtered by the users column
 * @method     ChildCareTzHospitalRoomsConf findOneByDate(string $date) Return the first ChildCareTzHospitalRoomsConf filtered by the date column *

 * @method     ChildCareTzHospitalRoomsConf requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzHospitalRoomsConf by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalRoomsConf requireOne(ConnectionInterface $con = null) Return the first ChildCareTzHospitalRoomsConf matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzHospitalRoomsConf requireOneByName(string $name) Return the first ChildCareTzHospitalRoomsConf filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalRoomsConf requireOneByDpt(string $dpt) Return the first ChildCareTzHospitalRoomsConf filtered by the dpt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalRoomsConf requireOneByUsers(string $users) Return the first ChildCareTzHospitalRoomsConf filtered by the users column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalRoomsConf requireOneByDate(string $date) Return the first ChildCareTzHospitalRoomsConf filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzHospitalRoomsConf[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzHospitalRoomsConf objects based on current ModelCriteria
 * @method     ChildCareTzHospitalRoomsConf[]|ObjectCollection findByName(string $name) Return ChildCareTzHospitalRoomsConf objects filtered by the name column
 * @method     ChildCareTzHospitalRoomsConf[]|ObjectCollection findByDpt(string $dpt) Return ChildCareTzHospitalRoomsConf objects filtered by the dpt column
 * @method     ChildCareTzHospitalRoomsConf[]|ObjectCollection findByUsers(string $users) Return ChildCareTzHospitalRoomsConf objects filtered by the users column
 * @method     ChildCareTzHospitalRoomsConf[]|ObjectCollection findByDate(string $date) Return ChildCareTzHospitalRoomsConf objects filtered by the date column
 * @method     ChildCareTzHospitalRoomsConf[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzHospitalRoomsConfQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzHospitalRoomsConfQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzHospitalRoomsConf', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzHospitalRoomsConfQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzHospitalRoomsConfQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzHospitalRoomsConfQuery) {
            return $criteria;
        }
        $query = new ChildCareTzHospitalRoomsConfQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$name, $dpt, $date] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareTzHospitalRoomsConf|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzHospitalRoomsConfTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzHospitalRoomsConfTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildCareTzHospitalRoomsConf A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT name, dpt, users, date FROM care_tz_hospital_rooms_conf WHERE name = :p0 AND dpt = :p1 AND date = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2] ? $key[2]->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareTzHospitalRoomsConf $obj */
            $obj = new ChildCareTzHospitalRoomsConf();
            $obj->hydrate($row);
            CareTzHospitalRoomsConfTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildCareTzHospitalRoomsConf|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return $this|ChildCareTzHospitalRoomsConfQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTzHospitalRoomsConfTableMap::COL_NAME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTzHospitalRoomsConfTableMap::COL_DPT, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CareTzHospitalRoomsConfTableMap::COL_DATE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzHospitalRoomsConfQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTzHospitalRoomsConfTableMap::COL_NAME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTzHospitalRoomsConfTableMap::COL_DPT, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CareTzHospitalRoomsConfTableMap::COL_DATE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalRoomsConfQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalRoomsConfTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the dpt column
     *
     * Example usage:
     * <code>
     * $query->filterByDpt('fooValue');   // WHERE dpt = 'fooValue'
     * $query->filterByDpt('%fooValue%', Criteria::LIKE); // WHERE dpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dpt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalRoomsConfQuery The current query, for fluid interface
     */
    public function filterByDpt($dpt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dpt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalRoomsConfTableMap::COL_DPT, $dpt, $comparison);
    }

    /**
     * Filter the query on the users column
     *
     * Example usage:
     * <code>
     * $query->filterByUsers('fooValue');   // WHERE users = 'fooValue'
     * $query->filterByUsers('%fooValue%', Criteria::LIKE); // WHERE users LIKE '%fooValue%'
     * </code>
     *
     * @param     string $users The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalRoomsConfQuery The current query, for fluid interface
     */
    public function filterByUsers($users = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($users)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalRoomsConfTableMap::COL_USERS, $users, $comparison);
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
     * @return $this|ChildCareTzHospitalRoomsConfQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CareTzHospitalRoomsConfTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CareTzHospitalRoomsConfTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalRoomsConfTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzHospitalRoomsConf $careTzHospitalRoomsConf Object to remove from the list of results
     *
     * @return $this|ChildCareTzHospitalRoomsConfQuery The current query, for fluid interface
     */
    public function prune($careTzHospitalRoomsConf = null)
    {
        if ($careTzHospitalRoomsConf) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTzHospitalRoomsConfTableMap::COL_NAME), $careTzHospitalRoomsConf->getName(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTzHospitalRoomsConfTableMap::COL_DPT), $careTzHospitalRoomsConf->getDpt(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CareTzHospitalRoomsConfTableMap::COL_DATE), $careTzHospitalRoomsConf->getDate(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_hospital_rooms_conf table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzHospitalRoomsConfTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzHospitalRoomsConfTableMap::clearInstancePool();
            CareTzHospitalRoomsConfTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzHospitalRoomsConfTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzHospitalRoomsConfTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzHospitalRoomsConfTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzHospitalRoomsConfTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzHospitalRoomsConfQuery
