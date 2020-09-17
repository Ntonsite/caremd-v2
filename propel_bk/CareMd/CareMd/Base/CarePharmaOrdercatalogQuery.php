<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CarePharmaOrdercatalog as ChildCarePharmaOrdercatalog;
use CareMd\CareMd\CarePharmaOrdercatalogQuery as ChildCarePharmaOrdercatalogQuery;
use CareMd\CareMd\Map\CarePharmaOrdercatalogTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_pharma_ordercatalog' table.
 *
 *
 *
 * @method     ChildCarePharmaOrdercatalogQuery orderByItemNo($order = Criteria::ASC) Order by the item_no column
 * @method     ChildCarePharmaOrdercatalogQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCarePharmaOrdercatalogQuery orderByHit($order = Criteria::ASC) Order by the hit column
 * @method     ChildCarePharmaOrdercatalogQuery orderByArtikelname($order = Criteria::ASC) Order by the artikelname column
 * @method     ChildCarePharmaOrdercatalogQuery orderByBestellnum($order = Criteria::ASC) Order by the bestellnum column
 * @method     ChildCarePharmaOrdercatalogQuery orderByMinorder($order = Criteria::ASC) Order by the minorder column
 * @method     ChildCarePharmaOrdercatalogQuery orderByMaxorder($order = Criteria::ASC) Order by the maxorder column
 * @method     ChildCarePharmaOrdercatalogQuery orderByProorder($order = Criteria::ASC) Order by the proorder column
 *
 * @method     ChildCarePharmaOrdercatalogQuery groupByItemNo() Group by the item_no column
 * @method     ChildCarePharmaOrdercatalogQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCarePharmaOrdercatalogQuery groupByHit() Group by the hit column
 * @method     ChildCarePharmaOrdercatalogQuery groupByArtikelname() Group by the artikelname column
 * @method     ChildCarePharmaOrdercatalogQuery groupByBestellnum() Group by the bestellnum column
 * @method     ChildCarePharmaOrdercatalogQuery groupByMinorder() Group by the minorder column
 * @method     ChildCarePharmaOrdercatalogQuery groupByMaxorder() Group by the maxorder column
 * @method     ChildCarePharmaOrdercatalogQuery groupByProorder() Group by the proorder column
 *
 * @method     ChildCarePharmaOrdercatalogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCarePharmaOrdercatalogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCarePharmaOrdercatalogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCarePharmaOrdercatalogQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCarePharmaOrdercatalogQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCarePharmaOrdercatalogQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCarePharmaOrdercatalog findOne(ConnectionInterface $con = null) Return the first ChildCarePharmaOrdercatalog matching the query
 * @method     ChildCarePharmaOrdercatalog findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCarePharmaOrdercatalog matching the query, or a new ChildCarePharmaOrdercatalog object populated from the query conditions when no match is found
 *
 * @method     ChildCarePharmaOrdercatalog findOneByItemNo(int $item_no) Return the first ChildCarePharmaOrdercatalog filtered by the item_no column
 * @method     ChildCarePharmaOrdercatalog findOneByDeptNr(int $dept_nr) Return the first ChildCarePharmaOrdercatalog filtered by the dept_nr column
 * @method     ChildCarePharmaOrdercatalog findOneByHit(int $hit) Return the first ChildCarePharmaOrdercatalog filtered by the hit column
 * @method     ChildCarePharmaOrdercatalog findOneByArtikelname(string $artikelname) Return the first ChildCarePharmaOrdercatalog filtered by the artikelname column
 * @method     ChildCarePharmaOrdercatalog findOneByBestellnum(string $bestellnum) Return the first ChildCarePharmaOrdercatalog filtered by the bestellnum column
 * @method     ChildCarePharmaOrdercatalog findOneByMinorder(int $minorder) Return the first ChildCarePharmaOrdercatalog filtered by the minorder column
 * @method     ChildCarePharmaOrdercatalog findOneByMaxorder(int $maxorder) Return the first ChildCarePharmaOrdercatalog filtered by the maxorder column
 * @method     ChildCarePharmaOrdercatalog findOneByProorder(string $proorder) Return the first ChildCarePharmaOrdercatalog filtered by the proorder column *

 * @method     ChildCarePharmaOrdercatalog requirePk($key, ConnectionInterface $con = null) Return the ChildCarePharmaOrdercatalog by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaOrdercatalog requireOne(ConnectionInterface $con = null) Return the first ChildCarePharmaOrdercatalog matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePharmaOrdercatalog requireOneByItemNo(int $item_no) Return the first ChildCarePharmaOrdercatalog filtered by the item_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaOrdercatalog requireOneByDeptNr(int $dept_nr) Return the first ChildCarePharmaOrdercatalog filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaOrdercatalog requireOneByHit(int $hit) Return the first ChildCarePharmaOrdercatalog filtered by the hit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaOrdercatalog requireOneByArtikelname(string $artikelname) Return the first ChildCarePharmaOrdercatalog filtered by the artikelname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaOrdercatalog requireOneByBestellnum(string $bestellnum) Return the first ChildCarePharmaOrdercatalog filtered by the bestellnum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaOrdercatalog requireOneByMinorder(int $minorder) Return the first ChildCarePharmaOrdercatalog filtered by the minorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaOrdercatalog requireOneByMaxorder(int $maxorder) Return the first ChildCarePharmaOrdercatalog filtered by the maxorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaOrdercatalog requireOneByProorder(string $proorder) Return the first ChildCarePharmaOrdercatalog filtered by the proorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePharmaOrdercatalog[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCarePharmaOrdercatalog objects based on current ModelCriteria
 * @method     ChildCarePharmaOrdercatalog[]|ObjectCollection findByItemNo(int $item_no) Return ChildCarePharmaOrdercatalog objects filtered by the item_no column
 * @method     ChildCarePharmaOrdercatalog[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCarePharmaOrdercatalog objects filtered by the dept_nr column
 * @method     ChildCarePharmaOrdercatalog[]|ObjectCollection findByHit(int $hit) Return ChildCarePharmaOrdercatalog objects filtered by the hit column
 * @method     ChildCarePharmaOrdercatalog[]|ObjectCollection findByArtikelname(string $artikelname) Return ChildCarePharmaOrdercatalog objects filtered by the artikelname column
 * @method     ChildCarePharmaOrdercatalog[]|ObjectCollection findByBestellnum(string $bestellnum) Return ChildCarePharmaOrdercatalog objects filtered by the bestellnum column
 * @method     ChildCarePharmaOrdercatalog[]|ObjectCollection findByMinorder(int $minorder) Return ChildCarePharmaOrdercatalog objects filtered by the minorder column
 * @method     ChildCarePharmaOrdercatalog[]|ObjectCollection findByMaxorder(int $maxorder) Return ChildCarePharmaOrdercatalog objects filtered by the maxorder column
 * @method     ChildCarePharmaOrdercatalog[]|ObjectCollection findByProorder(string $proorder) Return ChildCarePharmaOrdercatalog objects filtered by the proorder column
 * @method     ChildCarePharmaOrdercatalog[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CarePharmaOrdercatalogQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CarePharmaOrdercatalogQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CarePharmaOrdercatalog', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCarePharmaOrdercatalogQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCarePharmaOrdercatalogQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCarePharmaOrdercatalogQuery) {
            return $criteria;
        }
        $query = new ChildCarePharmaOrdercatalogQuery();
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
     * @return ChildCarePharmaOrdercatalog|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CarePharmaOrdercatalog object has no primary key');
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
        throw new LogicException('The CarePharmaOrdercatalog object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCarePharmaOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CarePharmaOrdercatalog object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCarePharmaOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CarePharmaOrdercatalog object has no primary key');
    }

    /**
     * Filter the query on the item_no column
     *
     * Example usage:
     * <code>
     * $query->filterByItemNo(1234); // WHERE item_no = 1234
     * $query->filterByItemNo(array(12, 34)); // WHERE item_no IN (12, 34)
     * $query->filterByItemNo(array('min' => 12)); // WHERE item_no > 12
     * </code>
     *
     * @param     mixed $itemNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByItemNo($itemNo = null, $comparison = null)
    {
        if (is_array($itemNo)) {
            $useMinMax = false;
            if (isset($itemNo['min'])) {
                $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_ITEM_NO, $itemNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemNo['max'])) {
                $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_ITEM_NO, $itemNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_ITEM_NO, $itemNo, $comparison);
    }

    /**
     * Filter the query on the dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptNr(1234); // WHERE dept_nr = 1234
     * $query->filterByDeptNr(array(12, 34)); // WHERE dept_nr IN (12, 34)
     * $query->filterByDeptNr(array('min' => 12)); // WHERE dept_nr > 12
     * </code>
     *
     * @param     mixed $deptNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the hit column
     *
     * Example usage:
     * <code>
     * $query->filterByHit(1234); // WHERE hit = 1234
     * $query->filterByHit(array(12, 34)); // WHERE hit IN (12, 34)
     * $query->filterByHit(array('min' => 12)); // WHERE hit > 12
     * </code>
     *
     * @param     mixed $hit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByHit($hit = null, $comparison = null)
    {
        if (is_array($hit)) {
            $useMinMax = false;
            if (isset($hit['min'])) {
                $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_HIT, $hit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hit['max'])) {
                $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_HIT, $hit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_HIT, $hit, $comparison);
    }

    /**
     * Filter the query on the artikelname column
     *
     * Example usage:
     * <code>
     * $query->filterByArtikelname('fooValue');   // WHERE artikelname = 'fooValue'
     * $query->filterByArtikelname('%fooValue%', Criteria::LIKE); // WHERE artikelname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artikelname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByArtikelname($artikelname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artikelname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_ARTIKELNAME, $artikelname, $comparison);
    }

    /**
     * Filter the query on the bestellnum column
     *
     * Example usage:
     * <code>
     * $query->filterByBestellnum('fooValue');   // WHERE bestellnum = 'fooValue'
     * $query->filterByBestellnum('%fooValue%', Criteria::LIKE); // WHERE bestellnum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bestellnum The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByBestellnum($bestellnum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bestellnum)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_BESTELLNUM, $bestellnum, $comparison);
    }

    /**
     * Filter the query on the minorder column
     *
     * Example usage:
     * <code>
     * $query->filterByMinorder(1234); // WHERE minorder = 1234
     * $query->filterByMinorder(array(12, 34)); // WHERE minorder IN (12, 34)
     * $query->filterByMinorder(array('min' => 12)); // WHERE minorder > 12
     * </code>
     *
     * @param     mixed $minorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByMinorder($minorder = null, $comparison = null)
    {
        if (is_array($minorder)) {
            $useMinMax = false;
            if (isset($minorder['min'])) {
                $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_MINORDER, $minorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minorder['max'])) {
                $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_MINORDER, $minorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_MINORDER, $minorder, $comparison);
    }

    /**
     * Filter the query on the maxorder column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxorder(1234); // WHERE maxorder = 1234
     * $query->filterByMaxorder(array(12, 34)); // WHERE maxorder IN (12, 34)
     * $query->filterByMaxorder(array('min' => 12)); // WHERE maxorder > 12
     * </code>
     *
     * @param     mixed $maxorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByMaxorder($maxorder = null, $comparison = null)
    {
        if (is_array($maxorder)) {
            $useMinMax = false;
            if (isset($maxorder['min'])) {
                $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_MAXORDER, $maxorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxorder['max'])) {
                $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_MAXORDER, $maxorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_MAXORDER, $maxorder, $comparison);
    }

    /**
     * Filter the query on the proorder column
     *
     * Example usage:
     * <code>
     * $query->filterByProorder('fooValue');   // WHERE proorder = 'fooValue'
     * $query->filterByProorder('%fooValue%', Criteria::LIKE); // WHERE proorder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proorder The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByProorder($proorder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proorder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaOrdercatalogTableMap::COL_PROORDER, $proorder, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCarePharmaOrdercatalog $carePharmaOrdercatalog Object to remove from the list of results
     *
     * @return $this|ChildCarePharmaOrdercatalogQuery The current query, for fluid interface
     */
    public function prune($carePharmaOrdercatalog = null)
    {
        if ($carePharmaOrdercatalog) {
            throw new LogicException('CarePharmaOrdercatalog object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_pharma_ordercatalog table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePharmaOrdercatalogTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CarePharmaOrdercatalogTableMap::clearInstancePool();
            CarePharmaOrdercatalogTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePharmaOrdercatalogTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CarePharmaOrdercatalogTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CarePharmaOrdercatalogTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CarePharmaOrdercatalogTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CarePharmaOrdercatalogQuery
