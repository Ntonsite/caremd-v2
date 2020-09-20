<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzPersonInsurance as ChildCareTzPersonInsurance;
use CareMd\CareMd\CareTzPersonInsuranceQuery as ChildCareTzPersonInsuranceQuery;
use CareMd\CareMd\Map\CareTzPersonInsuranceTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_person_insurance' table.
 *
 *
 *
 * @method     ChildCareTzPersonInsuranceQuery orderByPersonInsuranceId($order = Criteria::ASC) Order by the person_insurance_id column
 * @method     ChildCareTzPersonInsuranceQuery orderByInsurance($order = Criteria::ASC) Order by the insurance column
 * @method     ChildCareTzPersonInsuranceQuery orderByPerson($order = Criteria::ASC) Order by the person column
 *
 * @method     ChildCareTzPersonInsuranceQuery groupByPersonInsuranceId() Group by the person_insurance_id column
 * @method     ChildCareTzPersonInsuranceQuery groupByInsurance() Group by the insurance column
 * @method     ChildCareTzPersonInsuranceQuery groupByPerson() Group by the person column
 *
 * @method     ChildCareTzPersonInsuranceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzPersonInsuranceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzPersonInsuranceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzPersonInsuranceQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzPersonInsuranceQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzPersonInsuranceQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzPersonInsurance findOne(ConnectionInterface $con = null) Return the first ChildCareTzPersonInsurance matching the query
 * @method     ChildCareTzPersonInsurance findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzPersonInsurance matching the query, or a new ChildCareTzPersonInsurance object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzPersonInsurance findOneByPersonInsuranceId(string $person_insurance_id) Return the first ChildCareTzPersonInsurance filtered by the person_insurance_id column
 * @method     ChildCareTzPersonInsurance findOneByInsurance(int $insurance) Return the first ChildCareTzPersonInsurance filtered by the insurance column
 * @method     ChildCareTzPersonInsurance findOneByPerson(int $person) Return the first ChildCareTzPersonInsurance filtered by the person column *

 * @method     ChildCareTzPersonInsurance requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzPersonInsurance by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzPersonInsurance requireOne(ConnectionInterface $con = null) Return the first ChildCareTzPersonInsurance matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzPersonInsurance requireOneByPersonInsuranceId(string $person_insurance_id) Return the first ChildCareTzPersonInsurance filtered by the person_insurance_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzPersonInsurance requireOneByInsurance(int $insurance) Return the first ChildCareTzPersonInsurance filtered by the insurance column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzPersonInsurance requireOneByPerson(int $person) Return the first ChildCareTzPersonInsurance filtered by the person column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzPersonInsurance[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzPersonInsurance objects based on current ModelCriteria
 * @method     ChildCareTzPersonInsurance[]|ObjectCollection findByPersonInsuranceId(string $person_insurance_id) Return ChildCareTzPersonInsurance objects filtered by the person_insurance_id column
 * @method     ChildCareTzPersonInsurance[]|ObjectCollection findByInsurance(int $insurance) Return ChildCareTzPersonInsurance objects filtered by the insurance column
 * @method     ChildCareTzPersonInsurance[]|ObjectCollection findByPerson(int $person) Return ChildCareTzPersonInsurance objects filtered by the person column
 * @method     ChildCareTzPersonInsurance[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzPersonInsuranceQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzPersonInsuranceQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzPersonInsurance', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzPersonInsuranceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzPersonInsuranceQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzPersonInsuranceQuery) {
            return $criteria;
        }
        $query = new ChildCareTzPersonInsuranceQuery();
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
     * @return ChildCareTzPersonInsurance|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzPersonInsuranceTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzPersonInsuranceTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzPersonInsurance A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT person_insurance_id, insurance, person FROM care_tz_person_insurance WHERE person_insurance_id = :p0';
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
            /** @var ChildCareTzPersonInsurance $obj */
            $obj = new ChildCareTzPersonInsurance();
            $obj->hydrate($row);
            CareTzPersonInsuranceTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzPersonInsurance|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzPersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzPersonInsuranceTableMap::COL_PERSON_INSURANCE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzPersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzPersonInsuranceTableMap::COL_PERSON_INSURANCE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the person_insurance_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonInsuranceId(1234); // WHERE person_insurance_id = 1234
     * $query->filterByPersonInsuranceId(array(12, 34)); // WHERE person_insurance_id IN (12, 34)
     * $query->filterByPersonInsuranceId(array('min' => 12)); // WHERE person_insurance_id > 12
     * </code>
     *
     * @param     mixed $personInsuranceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzPersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByPersonInsuranceId($personInsuranceId = null, $comparison = null)
    {
        if (is_array($personInsuranceId)) {
            $useMinMax = false;
            if (isset($personInsuranceId['min'])) {
                $this->addUsingAlias(CareTzPersonInsuranceTableMap::COL_PERSON_INSURANCE_ID, $personInsuranceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personInsuranceId['max'])) {
                $this->addUsingAlias(CareTzPersonInsuranceTableMap::COL_PERSON_INSURANCE_ID, $personInsuranceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzPersonInsuranceTableMap::COL_PERSON_INSURANCE_ID, $personInsuranceId, $comparison);
    }

    /**
     * Filter the query on the insurance column
     *
     * Example usage:
     * <code>
     * $query->filterByInsurance(1234); // WHERE insurance = 1234
     * $query->filterByInsurance(array(12, 34)); // WHERE insurance IN (12, 34)
     * $query->filterByInsurance(array('min' => 12)); // WHERE insurance > 12
     * </code>
     *
     * @param     mixed $insurance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzPersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByInsurance($insurance = null, $comparison = null)
    {
        if (is_array($insurance)) {
            $useMinMax = false;
            if (isset($insurance['min'])) {
                $this->addUsingAlias(CareTzPersonInsuranceTableMap::COL_INSURANCE, $insurance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insurance['max'])) {
                $this->addUsingAlias(CareTzPersonInsuranceTableMap::COL_INSURANCE, $insurance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzPersonInsuranceTableMap::COL_INSURANCE, $insurance, $comparison);
    }

    /**
     * Filter the query on the person column
     *
     * Example usage:
     * <code>
     * $query->filterByPerson(1234); // WHERE person = 1234
     * $query->filterByPerson(array(12, 34)); // WHERE person IN (12, 34)
     * $query->filterByPerson(array('min' => 12)); // WHERE person > 12
     * </code>
     *
     * @param     mixed $person The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzPersonInsuranceQuery The current query, for fluid interface
     */
    public function filterByPerson($person = null, $comparison = null)
    {
        if (is_array($person)) {
            $useMinMax = false;
            if (isset($person['min'])) {
                $this->addUsingAlias(CareTzPersonInsuranceTableMap::COL_PERSON, $person['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($person['max'])) {
                $this->addUsingAlias(CareTzPersonInsuranceTableMap::COL_PERSON, $person['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzPersonInsuranceTableMap::COL_PERSON, $person, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzPersonInsurance $careTzPersonInsurance Object to remove from the list of results
     *
     * @return $this|ChildCareTzPersonInsuranceQuery The current query, for fluid interface
     */
    public function prune($careTzPersonInsurance = null)
    {
        if ($careTzPersonInsurance) {
            $this->addUsingAlias(CareTzPersonInsuranceTableMap::COL_PERSON_INSURANCE_ID, $careTzPersonInsurance->getPersonInsuranceId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_person_insurance table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzPersonInsuranceTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzPersonInsuranceTableMap::clearInstancePool();
            CareTzPersonInsuranceTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzPersonInsuranceTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzPersonInsuranceTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzPersonInsuranceTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzPersonInsuranceTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzPersonInsuranceQuery
