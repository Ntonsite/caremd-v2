<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzIcd10Quicklist as ChildCareTzIcd10Quicklist;
use CareMd\CareMd\CareTzIcd10QuicklistQuery as ChildCareTzIcd10QuicklistQuery;
use CareMd\CareMd\Map\CareTzIcd10QuicklistTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_icd10_quicklist' table.
 *
 *
 *
 * @method     ChildCareTzIcd10QuicklistQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildCareTzIcd10QuicklistQuery orderByParent($order = Criteria::ASC) Order by the parent column
 * @method     ChildCareTzIcd10QuicklistQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareTzIcd10QuicklistQuery orderByDiagnosisCode($order = Criteria::ASC) Order by the diagnosis_code column
 *
 * @method     ChildCareTzIcd10QuicklistQuery groupById() Group by the ID column
 * @method     ChildCareTzIcd10QuicklistQuery groupByParent() Group by the parent column
 * @method     ChildCareTzIcd10QuicklistQuery groupByDescription() Group by the description column
 * @method     ChildCareTzIcd10QuicklistQuery groupByDiagnosisCode() Group by the diagnosis_code column
 *
 * @method     ChildCareTzIcd10QuicklistQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzIcd10QuicklistQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzIcd10QuicklistQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzIcd10QuicklistQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzIcd10QuicklistQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzIcd10QuicklistQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzIcd10Quicklist findOne(ConnectionInterface $con = null) Return the first ChildCareTzIcd10Quicklist matching the query
 * @method     ChildCareTzIcd10Quicklist findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzIcd10Quicklist matching the query, or a new ChildCareTzIcd10Quicklist object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzIcd10Quicklist findOneById(string $ID) Return the first ChildCareTzIcd10Quicklist filtered by the ID column
 * @method     ChildCareTzIcd10Quicklist findOneByParent(string $parent) Return the first ChildCareTzIcd10Quicklist filtered by the parent column
 * @method     ChildCareTzIcd10Quicklist findOneByDescription(string $description) Return the first ChildCareTzIcd10Quicklist filtered by the description column
 * @method     ChildCareTzIcd10Quicklist findOneByDiagnosisCode(string $diagnosis_code) Return the first ChildCareTzIcd10Quicklist filtered by the diagnosis_code column *

 * @method     ChildCareTzIcd10Quicklist requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzIcd10Quicklist by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzIcd10Quicklist requireOne(ConnectionInterface $con = null) Return the first ChildCareTzIcd10Quicklist matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzIcd10Quicklist requireOneById(string $ID) Return the first ChildCareTzIcd10Quicklist filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzIcd10Quicklist requireOneByParent(string $parent) Return the first ChildCareTzIcd10Quicklist filtered by the parent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzIcd10Quicklist requireOneByDescription(string $description) Return the first ChildCareTzIcd10Quicklist filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzIcd10Quicklist requireOneByDiagnosisCode(string $diagnosis_code) Return the first ChildCareTzIcd10Quicklist filtered by the diagnosis_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzIcd10Quicklist[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzIcd10Quicklist objects based on current ModelCriteria
 * @method     ChildCareTzIcd10Quicklist[]|ObjectCollection findById(string $ID) Return ChildCareTzIcd10Quicklist objects filtered by the ID column
 * @method     ChildCareTzIcd10Quicklist[]|ObjectCollection findByParent(string $parent) Return ChildCareTzIcd10Quicklist objects filtered by the parent column
 * @method     ChildCareTzIcd10Quicklist[]|ObjectCollection findByDescription(string $description) Return ChildCareTzIcd10Quicklist objects filtered by the description column
 * @method     ChildCareTzIcd10Quicklist[]|ObjectCollection findByDiagnosisCode(string $diagnosis_code) Return ChildCareTzIcd10Quicklist objects filtered by the diagnosis_code column
 * @method     ChildCareTzIcd10Quicklist[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzIcd10QuicklistQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzIcd10QuicklistQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzIcd10Quicklist', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzIcd10QuicklistQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzIcd10QuicklistQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzIcd10QuicklistQuery) {
            return $criteria;
        }
        $query = new ChildCareTzIcd10QuicklistQuery();
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
     * @return ChildCareTzIcd10Quicklist|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzIcd10QuicklistTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzIcd10QuicklistTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzIcd10Quicklist A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, parent, description, diagnosis_code FROM care_tz_icd10_quicklist WHERE ID = :p0';
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
            /** @var ChildCareTzIcd10Quicklist $obj */
            $obj = new ChildCareTzIcd10Quicklist();
            $obj->hydrate($row);
            CareTzIcd10QuicklistTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzIcd10Quicklist|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzIcd10QuicklistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzIcd10QuicklistTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzIcd10QuicklistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzIcd10QuicklistTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzIcd10QuicklistQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CareTzIcd10QuicklistTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CareTzIcd10QuicklistTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzIcd10QuicklistTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildCareTzIcd10QuicklistQuery The current query, for fluid interface
     */
    public function filterByParent($parent = null, $comparison = null)
    {
        if (is_array($parent)) {
            $useMinMax = false;
            if (isset($parent['min'])) {
                $this->addUsingAlias(CareTzIcd10QuicklistTableMap::COL_PARENT, $parent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parent['max'])) {
                $this->addUsingAlias(CareTzIcd10QuicklistTableMap::COL_PARENT, $parent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzIcd10QuicklistTableMap::COL_PARENT, $parent, $comparison);
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
     * @return $this|ChildCareTzIcd10QuicklistQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzIcd10QuicklistTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the diagnosis_code column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosisCode('fooValue');   // WHERE diagnosis_code = 'fooValue'
     * $query->filterByDiagnosisCode('%fooValue%', Criteria::LIKE); // WHERE diagnosis_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosisCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzIcd10QuicklistQuery The current query, for fluid interface
     */
    public function filterByDiagnosisCode($diagnosisCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosisCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzIcd10QuicklistTableMap::COL_DIAGNOSIS_CODE, $diagnosisCode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzIcd10Quicklist $careTzIcd10Quicklist Object to remove from the list of results
     *
     * @return $this|ChildCareTzIcd10QuicklistQuery The current query, for fluid interface
     */
    public function prune($careTzIcd10Quicklist = null)
    {
        if ($careTzIcd10Quicklist) {
            $this->addUsingAlias(CareTzIcd10QuicklistTableMap::COL_ID, $careTzIcd10Quicklist->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_icd10_quicklist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzIcd10QuicklistTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzIcd10QuicklistTableMap::clearInstancePool();
            CareTzIcd10QuicklistTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzIcd10QuicklistTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzIcd10QuicklistTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzIcd10QuicklistTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzIcd10QuicklistTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzIcd10QuicklistQuery
