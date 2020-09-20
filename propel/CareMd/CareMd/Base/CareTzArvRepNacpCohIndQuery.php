<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareTzArvRepNacpCohInd as ChildCareTzArvRepNacpCohInd;
use CareMd\CareMd\CareTzArvRepNacpCohIndQuery as ChildCareTzArvRepNacpCohIndQuery;
use CareMd\CareMd\Map\CareTzArvRepNacpCohIndTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_arv_rep_nacp_coh_ind' table.
 *
 *
 *
 * @method     ChildCareTzArvRepNacpCohIndQuery orderByIndicatorId($order = Criteria::ASC) Order by the indicator_id column
 * @method     ChildCareTzArvRepNacpCohIndQuery orderByIndicatorDescription($order = Criteria::ASC) Order by the indicator_description column
 * @method     ChildCareTzArvRepNacpCohIndQuery orderByNumeratorDescription($order = Criteria::ASC) Order by the numerator_description column
 * @method     ChildCareTzArvRepNacpCohIndQuery orderByDenominatorDescription($order = Criteria::ASC) Order by the denominator_description column
 * @method     ChildCareTzArvRepNacpCohIndQuery orderByNumeratorFormula($order = Criteria::ASC) Order by the numerator_formula column
 * @method     ChildCareTzArvRepNacpCohIndQuery orderByDenominatorFormula($order = Criteria::ASC) Order by the denominator_formula column
 * @method     ChildCareTzArvRepNacpCohIndQuery orderByAgeGroup($order = Criteria::ASC) Order by the age_group column
 *
 * @method     ChildCareTzArvRepNacpCohIndQuery groupByIndicatorId() Group by the indicator_id column
 * @method     ChildCareTzArvRepNacpCohIndQuery groupByIndicatorDescription() Group by the indicator_description column
 * @method     ChildCareTzArvRepNacpCohIndQuery groupByNumeratorDescription() Group by the numerator_description column
 * @method     ChildCareTzArvRepNacpCohIndQuery groupByDenominatorDescription() Group by the denominator_description column
 * @method     ChildCareTzArvRepNacpCohIndQuery groupByNumeratorFormula() Group by the numerator_formula column
 * @method     ChildCareTzArvRepNacpCohIndQuery groupByDenominatorFormula() Group by the denominator_formula column
 * @method     ChildCareTzArvRepNacpCohIndQuery groupByAgeGroup() Group by the age_group column
 *
 * @method     ChildCareTzArvRepNacpCohIndQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzArvRepNacpCohIndQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzArvRepNacpCohIndQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzArvRepNacpCohIndQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzArvRepNacpCohIndQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzArvRepNacpCohIndQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzArvRepNacpCohInd findOne(ConnectionInterface $con = null) Return the first ChildCareTzArvRepNacpCohInd matching the query
 * @method     ChildCareTzArvRepNacpCohInd findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzArvRepNacpCohInd matching the query, or a new ChildCareTzArvRepNacpCohInd object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzArvRepNacpCohInd findOneByIndicatorId(int $indicator_id) Return the first ChildCareTzArvRepNacpCohInd filtered by the indicator_id column
 * @method     ChildCareTzArvRepNacpCohInd findOneByIndicatorDescription(string $indicator_description) Return the first ChildCareTzArvRepNacpCohInd filtered by the indicator_description column
 * @method     ChildCareTzArvRepNacpCohInd findOneByNumeratorDescription(string $numerator_description) Return the first ChildCareTzArvRepNacpCohInd filtered by the numerator_description column
 * @method     ChildCareTzArvRepNacpCohInd findOneByDenominatorDescription(string $denominator_description) Return the first ChildCareTzArvRepNacpCohInd filtered by the denominator_description column
 * @method     ChildCareTzArvRepNacpCohInd findOneByNumeratorFormula(string $numerator_formula) Return the first ChildCareTzArvRepNacpCohInd filtered by the numerator_formula column
 * @method     ChildCareTzArvRepNacpCohInd findOneByDenominatorFormula(string $denominator_formula) Return the first ChildCareTzArvRepNacpCohInd filtered by the denominator_formula column
 * @method     ChildCareTzArvRepNacpCohInd findOneByAgeGroup(string $age_group) Return the first ChildCareTzArvRepNacpCohInd filtered by the age_group column *

 * @method     ChildCareTzArvRepNacpCohInd requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzArvRepNacpCohInd by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRepNacpCohInd requireOne(ConnectionInterface $con = null) Return the first ChildCareTzArvRepNacpCohInd matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvRepNacpCohInd requireOneByIndicatorId(int $indicator_id) Return the first ChildCareTzArvRepNacpCohInd filtered by the indicator_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRepNacpCohInd requireOneByIndicatorDescription(string $indicator_description) Return the first ChildCareTzArvRepNacpCohInd filtered by the indicator_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRepNacpCohInd requireOneByNumeratorDescription(string $numerator_description) Return the first ChildCareTzArvRepNacpCohInd filtered by the numerator_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRepNacpCohInd requireOneByDenominatorDescription(string $denominator_description) Return the first ChildCareTzArvRepNacpCohInd filtered by the denominator_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRepNacpCohInd requireOneByNumeratorFormula(string $numerator_formula) Return the first ChildCareTzArvRepNacpCohInd filtered by the numerator_formula column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRepNacpCohInd requireOneByDenominatorFormula(string $denominator_formula) Return the first ChildCareTzArvRepNacpCohInd filtered by the denominator_formula column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzArvRepNacpCohInd requireOneByAgeGroup(string $age_group) Return the first ChildCareTzArvRepNacpCohInd filtered by the age_group column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzArvRepNacpCohInd[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzArvRepNacpCohInd objects based on current ModelCriteria
 * @method     ChildCareTzArvRepNacpCohInd[]|ObjectCollection findByIndicatorId(int $indicator_id) Return ChildCareTzArvRepNacpCohInd objects filtered by the indicator_id column
 * @method     ChildCareTzArvRepNacpCohInd[]|ObjectCollection findByIndicatorDescription(string $indicator_description) Return ChildCareTzArvRepNacpCohInd objects filtered by the indicator_description column
 * @method     ChildCareTzArvRepNacpCohInd[]|ObjectCollection findByNumeratorDescription(string $numerator_description) Return ChildCareTzArvRepNacpCohInd objects filtered by the numerator_description column
 * @method     ChildCareTzArvRepNacpCohInd[]|ObjectCollection findByDenominatorDescription(string $denominator_description) Return ChildCareTzArvRepNacpCohInd objects filtered by the denominator_description column
 * @method     ChildCareTzArvRepNacpCohInd[]|ObjectCollection findByNumeratorFormula(string $numerator_formula) Return ChildCareTzArvRepNacpCohInd objects filtered by the numerator_formula column
 * @method     ChildCareTzArvRepNacpCohInd[]|ObjectCollection findByDenominatorFormula(string $denominator_formula) Return ChildCareTzArvRepNacpCohInd objects filtered by the denominator_formula column
 * @method     ChildCareTzArvRepNacpCohInd[]|ObjectCollection findByAgeGroup(string $age_group) Return ChildCareTzArvRepNacpCohInd objects filtered by the age_group column
 * @method     ChildCareTzArvRepNacpCohInd[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzArvRepNacpCohIndQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzArvRepNacpCohIndQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzArvRepNacpCohInd', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzArvRepNacpCohIndQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzArvRepNacpCohIndQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzArvRepNacpCohIndQuery) {
            return $criteria;
        }
        $query = new ChildCareTzArvRepNacpCohIndQuery();
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
     * @return ChildCareTzArvRepNacpCohInd|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareTzArvRepNacpCohInd object has no primary key');
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
        throw new LogicException('The CareTzArvRepNacpCohInd object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareTzArvRepNacpCohIndQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareTzArvRepNacpCohInd object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzArvRepNacpCohIndQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareTzArvRepNacpCohInd object has no primary key');
    }

    /**
     * Filter the query on the indicator_id column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicatorId(1234); // WHERE indicator_id = 1234
     * $query->filterByIndicatorId(array(12, 34)); // WHERE indicator_id IN (12, 34)
     * $query->filterByIndicatorId(array('min' => 12)); // WHERE indicator_id > 12
     * </code>
     *
     * @param     mixed $indicatorId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRepNacpCohIndQuery The current query, for fluid interface
     */
    public function filterByIndicatorId($indicatorId = null, $comparison = null)
    {
        if (is_array($indicatorId)) {
            $useMinMax = false;
            if (isset($indicatorId['min'])) {
                $this->addUsingAlias(CareTzArvRepNacpCohIndTableMap::COL_INDICATOR_ID, $indicatorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indicatorId['max'])) {
                $this->addUsingAlias(CareTzArvRepNacpCohIndTableMap::COL_INDICATOR_ID, $indicatorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRepNacpCohIndTableMap::COL_INDICATOR_ID, $indicatorId, $comparison);
    }

    /**
     * Filter the query on the indicator_description column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicatorDescription('fooValue');   // WHERE indicator_description = 'fooValue'
     * $query->filterByIndicatorDescription('%fooValue%', Criteria::LIKE); // WHERE indicator_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indicatorDescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRepNacpCohIndQuery The current query, for fluid interface
     */
    public function filterByIndicatorDescription($indicatorDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indicatorDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRepNacpCohIndTableMap::COL_INDICATOR_DESCRIPTION, $indicatorDescription, $comparison);
    }

    /**
     * Filter the query on the numerator_description column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeratorDescription('fooValue');   // WHERE numerator_description = 'fooValue'
     * $query->filterByNumeratorDescription('%fooValue%', Criteria::LIKE); // WHERE numerator_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeratorDescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRepNacpCohIndQuery The current query, for fluid interface
     */
    public function filterByNumeratorDescription($numeratorDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeratorDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRepNacpCohIndTableMap::COL_NUMERATOR_DESCRIPTION, $numeratorDescription, $comparison);
    }

    /**
     * Filter the query on the denominator_description column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominatorDescription('fooValue');   // WHERE denominator_description = 'fooValue'
     * $query->filterByDenominatorDescription('%fooValue%', Criteria::LIKE); // WHERE denominator_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominatorDescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRepNacpCohIndQuery The current query, for fluid interface
     */
    public function filterByDenominatorDescription($denominatorDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominatorDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRepNacpCohIndTableMap::COL_DENOMINATOR_DESCRIPTION, $denominatorDescription, $comparison);
    }

    /**
     * Filter the query on the numerator_formula column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeratorFormula('fooValue');   // WHERE numerator_formula = 'fooValue'
     * $query->filterByNumeratorFormula('%fooValue%', Criteria::LIKE); // WHERE numerator_formula LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeratorFormula The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRepNacpCohIndQuery The current query, for fluid interface
     */
    public function filterByNumeratorFormula($numeratorFormula = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeratorFormula)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRepNacpCohIndTableMap::COL_NUMERATOR_FORMULA, $numeratorFormula, $comparison);
    }

    /**
     * Filter the query on the denominator_formula column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominatorFormula('fooValue');   // WHERE denominator_formula = 'fooValue'
     * $query->filterByDenominatorFormula('%fooValue%', Criteria::LIKE); // WHERE denominator_formula LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominatorFormula The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRepNacpCohIndQuery The current query, for fluid interface
     */
    public function filterByDenominatorFormula($denominatorFormula = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominatorFormula)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRepNacpCohIndTableMap::COL_DENOMINATOR_FORMULA, $denominatorFormula, $comparison);
    }

    /**
     * Filter the query on the age_group column
     *
     * Example usage:
     * <code>
     * $query->filterByAgeGroup('fooValue');   // WHERE age_group = 'fooValue'
     * $query->filterByAgeGroup('%fooValue%', Criteria::LIKE); // WHERE age_group LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ageGroup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzArvRepNacpCohIndQuery The current query, for fluid interface
     */
    public function filterByAgeGroup($ageGroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ageGroup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzArvRepNacpCohIndTableMap::COL_AGE_GROUP, $ageGroup, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzArvRepNacpCohInd $careTzArvRepNacpCohInd Object to remove from the list of results
     *
     * @return $this|ChildCareTzArvRepNacpCohIndQuery The current query, for fluid interface
     */
    public function prune($careTzArvRepNacpCohInd = null)
    {
        if ($careTzArvRepNacpCohInd) {
            throw new LogicException('CareTzArvRepNacpCohInd object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_arv_rep_nacp_coh_ind table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRepNacpCohIndTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzArvRepNacpCohIndTableMap::clearInstancePool();
            CareTzArvRepNacpCohIndTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRepNacpCohIndTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzArvRepNacpCohIndTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzArvRepNacpCohIndTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzArvRepNacpCohIndTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzArvRepNacpCohIndQuery
