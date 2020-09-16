<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzHospitalRooms as ChildCareTzHospitalRooms;
use CareMd\CareMd\CareTzHospitalRoomsQuery as ChildCareTzHospitalRoomsQuery;
use CareMd\CareMd\Map\CareTzHospitalRoomsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_hospital_rooms' table.
 *
 *
 *
 * @method     ChildCareTzHospitalRoomsQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTzHospitalRoomsQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareTzHospitalRoomsQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method     ChildCareTzHospitalRoomsQuery orderByDpt($order = Criteria::ASC) Order by the dpt column
 * @method     ChildCareTzHospitalRoomsQuery orderByCreatedby($order = Criteria::ASC) Order by the createdby column
 * @method     ChildCareTzHospitalRoomsQuery orderByCreatedate($order = Criteria::ASC) Order by the createdate column
 *
 * @method     ChildCareTzHospitalRoomsQuery groupByName() Group by the name column
 * @method     ChildCareTzHospitalRoomsQuery groupByNotes() Group by the notes column
 * @method     ChildCareTzHospitalRoomsQuery groupByActive() Group by the active column
 * @method     ChildCareTzHospitalRoomsQuery groupByDpt() Group by the dpt column
 * @method     ChildCareTzHospitalRoomsQuery groupByCreatedby() Group by the createdby column
 * @method     ChildCareTzHospitalRoomsQuery groupByCreatedate() Group by the createdate column
 *
 * @method     ChildCareTzHospitalRoomsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzHospitalRoomsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzHospitalRoomsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzHospitalRoomsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzHospitalRoomsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzHospitalRoomsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzHospitalRooms findOne(ConnectionInterface $con = null) Return the first ChildCareTzHospitalRooms matching the query
 * @method     ChildCareTzHospitalRooms findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzHospitalRooms matching the query, or a new ChildCareTzHospitalRooms object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzHospitalRooms findOneByName(string $name) Return the first ChildCareTzHospitalRooms filtered by the name column
 * @method     ChildCareTzHospitalRooms findOneByNotes(string $notes) Return the first ChildCareTzHospitalRooms filtered by the notes column
 * @method     ChildCareTzHospitalRooms findOneByActive(int $active) Return the first ChildCareTzHospitalRooms filtered by the active column
 * @method     ChildCareTzHospitalRooms findOneByDpt(int $dpt) Return the first ChildCareTzHospitalRooms filtered by the dpt column
 * @method     ChildCareTzHospitalRooms findOneByCreatedby(string $createdby) Return the first ChildCareTzHospitalRooms filtered by the createdby column
 * @method     ChildCareTzHospitalRooms findOneByCreatedate(string $createdate) Return the first ChildCareTzHospitalRooms filtered by the createdate column *

 * @method     ChildCareTzHospitalRooms requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzHospitalRooms by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalRooms requireOne(ConnectionInterface $con = null) Return the first ChildCareTzHospitalRooms matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzHospitalRooms requireOneByName(string $name) Return the first ChildCareTzHospitalRooms filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalRooms requireOneByNotes(string $notes) Return the first ChildCareTzHospitalRooms filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalRooms requireOneByActive(int $active) Return the first ChildCareTzHospitalRooms filtered by the active column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalRooms requireOneByDpt(int $dpt) Return the first ChildCareTzHospitalRooms filtered by the dpt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalRooms requireOneByCreatedby(string $createdby) Return the first ChildCareTzHospitalRooms filtered by the createdby column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzHospitalRooms requireOneByCreatedate(string $createdate) Return the first ChildCareTzHospitalRooms filtered by the createdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzHospitalRooms[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzHospitalRooms objects based on current ModelCriteria
 * @method     ChildCareTzHospitalRooms[]|ObjectCollection findByName(string $name) Return ChildCareTzHospitalRooms objects filtered by the name column
 * @method     ChildCareTzHospitalRooms[]|ObjectCollection findByNotes(string $notes) Return ChildCareTzHospitalRooms objects filtered by the notes column
 * @method     ChildCareTzHospitalRooms[]|ObjectCollection findByActive(int $active) Return ChildCareTzHospitalRooms objects filtered by the active column
 * @method     ChildCareTzHospitalRooms[]|ObjectCollection findByDpt(int $dpt) Return ChildCareTzHospitalRooms objects filtered by the dpt column
 * @method     ChildCareTzHospitalRooms[]|ObjectCollection findByCreatedby(string $createdby) Return ChildCareTzHospitalRooms objects filtered by the createdby column
 * @method     ChildCareTzHospitalRooms[]|ObjectCollection findByCreatedate(string $createdate) Return ChildCareTzHospitalRooms objects filtered by the createdate column
 * @method     ChildCareTzHospitalRooms[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzHospitalRoomsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzHospitalRoomsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzHospitalRooms', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzHospitalRoomsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzHospitalRoomsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzHospitalRoomsQuery) {
            return $criteria;
        }
        $query = new ChildCareTzHospitalRoomsQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$name, $dpt] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCareTzHospitalRooms|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzHospitalRoomsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzHospitalRoomsTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCareTzHospitalRooms A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT name, notes, active, dpt, createdby, createdate FROM care_tz_hospital_rooms WHERE name = :p0 AND dpt = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCareTzHospitalRooms $obj */
            $obj = new ChildCareTzHospitalRooms();
            $obj->hydrate($row);
            CareTzHospitalRoomsTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCareTzHospitalRooms|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzHospitalRoomsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_NAME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_DPT, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzHospitalRoomsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CareTzHospitalRoomsTableMap::COL_NAME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CareTzHospitalRoomsTableMap::COL_DPT, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
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
     * @return $this|ChildCareTzHospitalRoomsQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the notes column
     *
     * Example usage:
     * <code>
     * $query->filterByNotes('fooValue');   // WHERE notes = 'fooValue'
     * $query->filterByNotes('%fooValue%', Criteria::LIKE); // WHERE notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalRoomsQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_NOTES, $notes, $comparison);
    }

    /**
     * Filter the query on the active column
     *
     * Example usage:
     * <code>
     * $query->filterByActive(1234); // WHERE active = 1234
     * $query->filterByActive(array(12, 34)); // WHERE active IN (12, 34)
     * $query->filterByActive(array('min' => 12)); // WHERE active > 12
     * </code>
     *
     * @param     mixed $active The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalRoomsQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (is_array($active)) {
            $useMinMax = false;
            if (isset($active['min'])) {
                $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_ACTIVE, $active['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($active['max'])) {
                $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_ACTIVE, $active['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_ACTIVE, $active, $comparison);
    }

    /**
     * Filter the query on the dpt column
     *
     * Example usage:
     * <code>
     * $query->filterByDpt(1234); // WHERE dpt = 1234
     * $query->filterByDpt(array(12, 34)); // WHERE dpt IN (12, 34)
     * $query->filterByDpt(array('min' => 12)); // WHERE dpt > 12
     * </code>
     *
     * @param     mixed $dpt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalRoomsQuery The current query, for fluid interface
     */
    public function filterByDpt($dpt = null, $comparison = null)
    {
        if (is_array($dpt)) {
            $useMinMax = false;
            if (isset($dpt['min'])) {
                $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_DPT, $dpt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dpt['max'])) {
                $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_DPT, $dpt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_DPT, $dpt, $comparison);
    }

    /**
     * Filter the query on the createdby column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedby('fooValue');   // WHERE createdby = 'fooValue'
     * $query->filterByCreatedby('%fooValue%', Criteria::LIKE); // WHERE createdby LIKE '%fooValue%'
     * </code>
     *
     * @param     string $createdby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalRoomsQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createdby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_CREATEDBY, $createdby, $comparison);
    }

    /**
     * Filter the query on the createdate column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedate('2011-03-14'); // WHERE createdate = '2011-03-14'
     * $query->filterByCreatedate('now'); // WHERE createdate = '2011-03-14'
     * $query->filterByCreatedate(array('max' => 'yesterday')); // WHERE createdate > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzHospitalRoomsQuery The current query, for fluid interface
     */
    public function filterByCreatedate($createdate = null, $comparison = null)
    {
        if (is_array($createdate)) {
            $useMinMax = false;
            if (isset($createdate['min'])) {
                $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_CREATEDATE, $createdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdate['max'])) {
                $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_CREATEDATE, $createdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzHospitalRoomsTableMap::COL_CREATEDATE, $createdate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzHospitalRooms $careTzHospitalRooms Object to remove from the list of results
     *
     * @return $this|ChildCareTzHospitalRoomsQuery The current query, for fluid interface
     */
    public function prune($careTzHospitalRooms = null)
    {
        if ($careTzHospitalRooms) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CareTzHospitalRoomsTableMap::COL_NAME), $careTzHospitalRooms->getName(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CareTzHospitalRoomsTableMap::COL_DPT), $careTzHospitalRooms->getDpt(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_hospital_rooms table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzHospitalRoomsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzHospitalRoomsTableMap::clearInstancePool();
            CareTzHospitalRoomsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzHospitalRoomsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzHospitalRoomsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzHospitalRoomsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzHospitalRoomsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzHospitalRoomsQuery
