<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzArvCoMedications as ChildCareTzArvCoMedications;
use CareMd\CareMd\CareTzArvCoMedicationsQuery as ChildCareTzArvCoMedicationsQuery;
use CareMd\CareMd\Map\CareTzArvCoMedicationsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_co_medications' table.
 *
 *
 *
 * @method     ChildCareTzArvCoMedicationsQuery orderByArvVisitCoMedicationsId($order = Criteria::ASC) Order by the arv_visit_co_medications_id column
 * @method     ChildCareTzArvCoMedicationsQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildCareTzArvCoMedicationsQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method     ChildCareTzArvCoMedicationsQuery groupByArvVisitCoMedicationsId() Group by the arv_visit_co_medications_id column
 * @method     ChildCareTzArvCoMedicationsQuery groupByCode() Group by the code column
 * @method     ChildCareTzArvCoMedicationsQuery groupByDescription() Group by the description column
 *
 * @method     ChildCareTzArvCoMedicationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvCoMedicationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvCoMedicationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvCoMedicationsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvCoMedicationsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvCoMedicationsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvCoMedications findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvCoMedications matching the query
 * @method     ChildCareTzArvCoMedications findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvCoMedications matching the query, or a new ChildCareTzArvCoMedications object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvCoMedications findOneByArvVisitCoMedicationsId(int $arv_visit_co_medications_id) Return the first ChildCareTzArvCoMedications filtered by the arv_visit_co_medications_id column
 * @method     ChildCareTzArvCoMedications findOneByCode(int $code) Return the first ChildCareTzArvCoMedications filtered by the code column
 * @method     ChildCareTzArvCoMedications findOneByDescription(string $description) Return the first ChildCareTzArvCoMedications filtered by the description column *

 * @method     ChildCareTzArvCoMedications requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvCoMedications by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCoMedications requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvCoMedications matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvCoMedications requireOneByArvVisitCoMedicationsId(int $arv_visit_co_medications_id) Return the first ChildCareTzArvCoMedications filtered by the arv_visit_co_medications_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCoMedications requireOneByCode(int $code) Return the first ChildCareTzArvCoMedications filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvCoMedications requireOneByDescription(string $description) Return the first ChildCareTzArvCoMedications filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvCoMedications[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvCoMedications objects based on current ModelCriteria
 * @method     ChildCareTzArvCoMedications[]|ObjectCollection findByArvVisitCoMedicationsId(int $arv_visit_co_medications_id) Return ChildCareTzArvCoMedications objects filtered by the arv_visit_co_medications_id column
 * @method     ChildCareTzArvCoMedications[]|ObjectCollection findByCode(int $code) Return ChildCareTzArvCoMedications objects filtered by the code column
 * @method     ChildCareTzArvCoMedications[]|ObjectCollection findByDescription(string $description) Return ChildCareTzArvCoMedications objects filtered by the description column
 * @method     ChildCareTzArvCoMedications[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvCoMedicationsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvCoMedicationsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvCoMedications', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvCoMedicationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvCoMedicationsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvCoMedicationsQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvCoMedicationsQuery();
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
     * @return ChildCareTzArvCoMedications|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzArvCoMedicationsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzArvCoMedicationsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzArvCoMedications A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT arv_visit_co_medications_id, code, description FROM care_tz_arv_co_medications WHERE arv_visit_co_medications_id = :p0';
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
            /** @var ChildCareTzArvCoMedications $obj */
            $obj = new ChildCareTzArvCoMedications();
            $obj->hydrate($row);
            CareTzArvCoMedicationsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzArvCoMedications|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzArvCoMedicationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzArvCoMedicationsTableMap::COL_ARV_VISIT_CO_MEDICATIONS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvCoMedicationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzArvCoMedicationsTableMap::COL_ARV_VISIT_CO_MEDICATIONS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the arv_visit_co_medications_id column
     *
     * Example usage:
     * <code>
     * $query->filterByArvVisitCoMedicationsId(1234); // WHERE arv_visit_co_medications_id = 1234
     * $query->filterByArvVisitCoMedicationsId(array(12, 34)); // WHERE arv_visit_co_medications_id IN (12, 34)
     * $query->filterByArvVisitCoMedicationsId(array('min' => 12)); // WHERE arv_visit_co_medications_id > 12
     * </code>
     *
     * @param     mixed $arvVisitCoMedicationsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvCoMedicationsQuery The current query, for fluid interface
     */
    public function filterByArvVisitCoMedicationsId($arvVisitCoMedicationsId = null, $comparison = null)
    {
        if (is_array($arvVisitCoMedicationsId)) {
            $useMinMax = false;
            if (isset($arvVisitCoMedicationsId['min'])) {
                $this->addUsingAlias(CareTzArvCoMedicationsTableMap::COL_ARV_VISIT_CO_MEDICATIONS_ID, $arvVisitCoMedicationsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arvVisitCoMedicationsId['max'])) {
                $this->addUsingAlias(CareTzArvCoMedicationsTableMap::COL_ARV_VISIT_CO_MEDICATIONS_ID, $arvVisitCoMedicationsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCoMedicationsTableMap::COL_ARV_VISIT_CO_MEDICATIONS_ID, $arvVisitCoMedicationsId, $comparison);
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
     * @return $this|ChildCareTzArvCoMedicationsQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (is_array($code)) {
            $useMinMax = false;
            if (isset($code['min'])) {
                $this->addUsingAlias(CareTzArvCoMedicationsTableMap::COL_CODE, $code['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($code['max'])) {
                $this->addUsingAlias(CareTzArvCoMedicationsTableMap::COL_CODE, $code['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCoMedicationsTableMap::COL_CODE, $code, $comparison);
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
     * @return $this|ChildCareTzArvCoMedicationsQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvCoMedicationsTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvCoMedications $careTzArvCoMedications Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvCoMedicationsQuery The current query, for fluid interface
     */
    public function prune($careTzArvCoMedications = null)
    {
        if ($careTzArvCoMedications) {
            $this->addUsingAlias(CareTzArvCoMedicationsTableMap::COL_ARV_VISIT_CO_MEDICATIONS_ID, $careTzArvCoMedications->getArvVisitCoMedicationsId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_co_medications table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvCoMedicationsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvCoMedicationsTableMap::clearInstancePool();
            CareTzArvCoMedicationsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvCoMedicationsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvCoMedicationsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvCoMedicationsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvCoMedicationsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvCoMedicationsQuery
