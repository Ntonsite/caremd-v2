<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzBillingArchive as ChildCareTzBillingArchive;
use CareMd\CareMd\CareTzBillingArchiveQuery as ChildCareTzBillingArchiveQuery;
use CareMd\CareMd\Map\CareTzBillingArchiveTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_billing_archive' table.
 *
 *
 *
 * @method     ChildCareTzBillingArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareTzBillingArchiveQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareTzBillingArchiveQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareTzBillingArchiveQuery orderByFirstDate($order = Criteria::ASC) Order by the first_date column
 * @method     ChildCareTzBillingArchiveQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareTzBillingArchiveQuery orderByCreationDate($order = Criteria::ASC) Order by the creation_date column
 *
 * @method     ChildCareTzBillingArchiveQuery groupById() Group by the id column
 * @method     ChildCareTzBillingArchiveQuery groupByNr() Group by the nr column
 * @method     ChildCareTzBillingArchiveQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareTzBillingArchiveQuery groupByFirstDate() Group by the first_date column
 * @method     ChildCareTzBillingArchiveQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareTzBillingArchiveQuery groupByCreationDate() Group by the creation_date column
 *
 * @method     ChildCareTzBillingArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzBillingArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzBillingArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzBillingArchiveQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzBillingArchiveQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzBillingArchiveQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzBillingArchive findOne(ConnectionInterface $con = null) Return the first ChildCareTzBillingArchive matching the query
 * @method     ChildCareTzBillingArchive findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzBillingArchive matching the query, or a new ChildCareTzBillingArchive object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzBillingArchive findOneById(string $id) Return the first ChildCareTzBillingArchive filtered by the id column
 * @method     ChildCareTzBillingArchive findOneByNr(string $nr) Return the first ChildCareTzBillingArchive filtered by the nr column
 * @method     ChildCareTzBillingArchive findOneByEncounterNr(string $encounter_nr) Return the first ChildCareTzBillingArchive filtered by the encounter_nr column
 * @method     ChildCareTzBillingArchive findOneByFirstDate(string $first_date) Return the first ChildCareTzBillingArchive filtered by the first_date column
 * @method     ChildCareTzBillingArchive findOneByCreateId(string $create_id) Return the first ChildCareTzBillingArchive filtered by the create_id column
 * @method     ChildCareTzBillingArchive findOneByCreationDate(string $creation_date) Return the first ChildCareTzBillingArchive filtered by the creation_date column *

 * @method     ChildCareTzBillingArchive requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzBillingArchive by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchive requireOne(ConnectionInterface $con = null) Return the first ChildCareTzBillingArchive matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzBillingArchive requireOneById(string $id) Return the first ChildCareTzBillingArchive filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchive requireOneByNr(string $nr) Return the first ChildCareTzBillingArchive filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchive requireOneByEncounterNr(string $encounter_nr) Return the first ChildCareTzBillingArchive filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchive requireOneByFirstDate(string $first_date) Return the first ChildCareTzBillingArchive filtered by the first_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchive requireOneByCreateId(string $create_id) Return the first ChildCareTzBillingArchive filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzBillingArchive requireOneByCreationDate(string $creation_date) Return the first ChildCareTzBillingArchive filtered by the creation_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzBillingArchive[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzBillingArchive objects based on current ModelCriteria
 * @method     ChildCareTzBillingArchive[]|ObjectCollection findById(string $id) Return ChildCareTzBillingArchive objects filtered by the id column
 * @method     ChildCareTzBillingArchive[]|ObjectCollection findByNr(string $nr) Return ChildCareTzBillingArchive objects filtered by the nr column
 * @method     ChildCareTzBillingArchive[]|ObjectCollection findByEncounterNr(string $encounter_nr) Return ChildCareTzBillingArchive objects filtered by the encounter_nr column
 * @method     ChildCareTzBillingArchive[]|ObjectCollection findByFirstDate(string $first_date) Return ChildCareTzBillingArchive objects filtered by the first_date column
 * @method     ChildCareTzBillingArchive[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareTzBillingArchive objects filtered by the create_id column
 * @method     ChildCareTzBillingArchive[]|ObjectCollection findByCreationDate(string $creation_date) Return ChildCareTzBillingArchive objects filtered by the creation_date column
 * @method     ChildCareTzBillingArchive[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzBillingArchiveQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzBillingArchiveQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzBillingArchive', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzBillingArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzBillingArchiveQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzBillingArchiveQuery) {
            return $criteria;
        }
        $query = new ChildCareTzBillingArchiveQuery();
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
     * @return ChildCareTzBillingArchive|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzBillingArchiveTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzBillingArchiveTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzBillingArchive A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, nr, encounter_nr, first_date, create_id, creation_date FROM care_tz_billing_archive WHERE id = :p0';
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
            /** @var ChildCareTzBillingArchive $obj */
            $obj = new ChildCareTzBillingArchive();
            $obj->hydrate($row);
            CareTzBillingArchiveTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzBillingArchive|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildCareTzBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterNr(1234); // WHERE encounter_nr = 1234
     * $query->filterByEncounterNr(array(12, 34)); // WHERE encounter_nr IN (12, 34)
     * $query->filterByEncounterNr(array('min' => 12)); // WHERE encounter_nr > 12
     * </code>
     *
     * @param     mixed $encounterNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the first_date column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstDate(1234); // WHERE first_date = 1234
     * $query->filterByFirstDate(array(12, 34)); // WHERE first_date IN (12, 34)
     * $query->filterByFirstDate(array('min' => 12)); // WHERE first_date > 12
     * </code>
     *
     * @param     mixed $firstDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByFirstDate($firstDate = null, $comparison = null)
    {
        if (is_array($firstDate)) {
            $useMinMax = false;
            if (isset($firstDate['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_FIRST_DATE, $firstDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($firstDate['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_FIRST_DATE, $firstDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_FIRST_DATE, $firstDate, $comparison);
    }

    /**
     * Filter the query on the create_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateId('fooValue');   // WHERE create_id = 'fooValue'
     * $query->filterByCreateId('%fooValue%', Criteria::LIKE); // WHERE create_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $createId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_CREATE_ID, $createId, $comparison);
    }

    /**
     * Filter the query on the creation_date column
     *
     * Example usage:
     * <code>
     * $query->filterByCreationDate(1234); // WHERE creation_date = 1234
     * $query->filterByCreationDate(array(12, 34)); // WHERE creation_date IN (12, 34)
     * $query->filterByCreationDate(array('min' => 12)); // WHERE creation_date > 12
     * </code>
     *
     * @param     mixed $creationDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzBillingArchiveQuery The current query, for fluid interface
     */
    public function filterByCreationDate($creationDate = null, $comparison = null)
    {
        if (is_array($creationDate)) {
            $useMinMax = false;
            if (isset($creationDate['min'])) {
                $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_CREATION_DATE, $creationDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($creationDate['max'])) {
                $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_CREATION_DATE, $creationDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_CREATION_DATE, $creationDate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzBillingArchive $careTzBillingArchive Object to remove from the list of results
     *
     * @return $this|ChildCareTzBillingArchiveQuery The current query, for fluid interface
     */
    public function prune($careTzBillingArchive = null)
    {
        if ($careTzBillingArchive) {
            $this->addUsingAlias(CareTzBillingArchiveTableMap::COL_ID, $careTzBillingArchive->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_billing_archive table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingArchiveTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzBillingArchiveTableMap::clearInstancePool();
            CareTzBillingArchiveTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzBillingArchiveTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzBillingArchiveTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzBillingArchiveTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzBillingArchiveTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzBillingArchiveQuery
