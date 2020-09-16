<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareMedOrdercatalog as ChildCareMedOrdercatalog;
use CareMd\CareMd\CareMedOrdercatalogQuery as ChildCareMedOrdercatalogQuery;
use CareMd\CareMd\Map\CareMedOrdercatalogTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_med_ordercatalog' table.
 *
 *
 *
 * @method     ChildCareMedOrdercatalogQuery orderByItemNo($order = Criteria::ASC) Order by the item_no column
 * @method     ChildCareMedOrdercatalogQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareMedOrdercatalogQuery orderByHit($order = Criteria::ASC) Order by the hit column
 * @method     ChildCareMedOrdercatalogQuery orderByArtikelname($order = Criteria::ASC) Order by the artikelname column
 * @method     ChildCareMedOrdercatalogQuery orderByBestellnum($order = Criteria::ASC) Order by the bestellnum column
 * @method     ChildCareMedOrdercatalogQuery orderByMinorder($order = Criteria::ASC) Order by the minorder column
 * @method     ChildCareMedOrdercatalogQuery orderByMaxorder($order = Criteria::ASC) Order by the maxorder column
 * @method     ChildCareMedOrdercatalogQuery orderByProorder($order = Criteria::ASC) Order by the proorder column
 *
 * @method     ChildCareMedOrdercatalogQuery groupByItemNo() Group by the item_no column
 * @method     ChildCareMedOrdercatalogQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareMedOrdercatalogQuery groupByHit() Group by the hit column
 * @method     ChildCareMedOrdercatalogQuery groupByArtikelname() Group by the artikelname column
 * @method     ChildCareMedOrdercatalogQuery groupByBestellnum() Group by the bestellnum column
 * @method     ChildCareMedOrdercatalogQuery groupByMinorder() Group by the minorder column
 * @method     ChildCareMedOrdercatalogQuery groupByMaxorder() Group by the maxorder column
 * @method     ChildCareMedOrdercatalogQuery groupByProorder() Group by the proorder column
 *
 * @method     ChildCareMedOrdercatalogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareMedOrdercatalogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareMedOrdercatalogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareMedOrdercatalogQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareMedOrdercatalogQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareMedOrdercatalogQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareMedOrdercatalog findOne(ConnectionInterface $con = null) Return the first ChildCareMedOrdercatalog matching the query
 * @method     ChildCareMedOrdercatalog findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareMedOrdercatalog matching the query, or a new ChildCareMedOrdercatalog object populated from the query conditions when no match is found
 *
 * @method     ChildCareMedOrdercatalog findOneByItemNo(int $item_no) Return the first ChildCareMedOrdercatalog filtered by the item_no column
 * @method     ChildCareMedOrdercatalog findOneByDeptNr(int $dept_nr) Return the first ChildCareMedOrdercatalog filtered by the dept_nr column
 * @method     ChildCareMedOrdercatalog findOneByHit(int $hit) Return the first ChildCareMedOrdercatalog filtered by the hit column
 * @method     ChildCareMedOrdercatalog findOneByArtikelname(string $artikelname) Return the first ChildCareMedOrdercatalog filtered by the artikelname column
 * @method     ChildCareMedOrdercatalog findOneByBestellnum(string $bestellnum) Return the first ChildCareMedOrdercatalog filtered by the bestellnum column
 * @method     ChildCareMedOrdercatalog findOneByMinorder(int $minorder) Return the first ChildCareMedOrdercatalog filtered by the minorder column
 * @method     ChildCareMedOrdercatalog findOneByMaxorder(int $maxorder) Return the first ChildCareMedOrdercatalog filtered by the maxorder column
 * @method     ChildCareMedOrdercatalog findOneByProorder(string $proorder) Return the first ChildCareMedOrdercatalog filtered by the proorder column *

 * @method     ChildCareMedOrdercatalog requirePk($key, ConnectionInterface $con = null) Return the ChildCareMedOrdercatalog by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrdercatalog requireOne(ConnectionInterface $con = null) Return the first ChildCareMedOrdercatalog matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMedOrdercatalog requireOneByItemNo(int $item_no) Return the first ChildCareMedOrdercatalog filtered by the item_no column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrdercatalog requireOneByDeptNr(int $dept_nr) Return the first ChildCareMedOrdercatalog filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrdercatalog requireOneByHit(int $hit) Return the first ChildCareMedOrdercatalog filtered by the hit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrdercatalog requireOneByArtikelname(string $artikelname) Return the first ChildCareMedOrdercatalog filtered by the artikelname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrdercatalog requireOneByBestellnum(string $bestellnum) Return the first ChildCareMedOrdercatalog filtered by the bestellnum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrdercatalog requireOneByMinorder(int $minorder) Return the first ChildCareMedOrdercatalog filtered by the minorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrdercatalog requireOneByMaxorder(int $maxorder) Return the first ChildCareMedOrdercatalog filtered by the maxorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedOrdercatalog requireOneByProorder(string $proorder) Return the first ChildCareMedOrdercatalog filtered by the proorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMedOrdercatalog[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareMedOrdercatalog objects based on current ModelCriteria
 * @method     ChildCareMedOrdercatalog[]|ObjectCollection findByItemNo(int $item_no) Return ChildCareMedOrdercatalog objects filtered by the item_no column
 * @method     ChildCareMedOrdercatalog[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareMedOrdercatalog objects filtered by the dept_nr column
 * @method     ChildCareMedOrdercatalog[]|ObjectCollection findByHit(int $hit) Return ChildCareMedOrdercatalog objects filtered by the hit column
 * @method     ChildCareMedOrdercatalog[]|ObjectCollection findByArtikelname(string $artikelname) Return ChildCareMedOrdercatalog objects filtered by the artikelname column
 * @method     ChildCareMedOrdercatalog[]|ObjectCollection findByBestellnum(string $bestellnum) Return ChildCareMedOrdercatalog objects filtered by the bestellnum column
 * @method     ChildCareMedOrdercatalog[]|ObjectCollection findByMinorder(int $minorder) Return ChildCareMedOrdercatalog objects filtered by the minorder column
 * @method     ChildCareMedOrdercatalog[]|ObjectCollection findByMaxorder(int $maxorder) Return ChildCareMedOrdercatalog objects filtered by the maxorder column
 * @method     ChildCareMedOrdercatalog[]|ObjectCollection findByProorder(string $proorder) Return ChildCareMedOrdercatalog objects filtered by the proorder column
 * @method     ChildCareMedOrdercatalog[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareMedOrdercatalogQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareMedOrdercatalogQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareMedOrdercatalog', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareMedOrdercatalogQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareMedOrdercatalogQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareMedOrdercatalogQuery) {
            return $criteria;
        }
        $query = new ChildCareMedOrdercatalogQuery();
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
     * @return ChildCareMedOrdercatalog|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareMedOrdercatalogTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareMedOrdercatalogTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareMedOrdercatalog A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT item_no, dept_nr, hit, artikelname, bestellnum, minorder, maxorder, proorder FROM care_med_ordercatalog WHERE item_no = :p0';
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
            /** @var ChildCareMedOrdercatalog $obj */
            $obj = new ChildCareMedOrdercatalog();
            $obj->hydrate($row);
            CareMedOrdercatalogTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareMedOrdercatalog|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareMedOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_ITEM_NO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareMedOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_ITEM_NO, $keys, Criteria::IN);
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
     * @return $this|ChildCareMedOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByItemNo($itemNo = null, $comparison = null)
    {
        if (is_array($itemNo)) {
            $useMinMax = false;
            if (isset($itemNo['min'])) {
                $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_ITEM_NO, $itemNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemNo['max'])) {
                $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_ITEM_NO, $itemNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_ITEM_NO, $itemNo, $comparison);
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
     * @return $this|ChildCareMedOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_DEPT_NR, $deptNr, $comparison);
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
     * @return $this|ChildCareMedOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByHit($hit = null, $comparison = null)
    {
        if (is_array($hit)) {
            $useMinMax = false;
            if (isset($hit['min'])) {
                $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_HIT, $hit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hit['max'])) {
                $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_HIT, $hit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_HIT, $hit, $comparison);
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
     * @return $this|ChildCareMedOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByArtikelname($artikelname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artikelname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_ARTIKELNAME, $artikelname, $comparison);
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
     * @return $this|ChildCareMedOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByBestellnum($bestellnum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bestellnum)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_BESTELLNUM, $bestellnum, $comparison);
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
     * @return $this|ChildCareMedOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByMinorder($minorder = null, $comparison = null)
    {
        if (is_array($minorder)) {
            $useMinMax = false;
            if (isset($minorder['min'])) {
                $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_MINORDER, $minorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minorder['max'])) {
                $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_MINORDER, $minorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_MINORDER, $minorder, $comparison);
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
     * @return $this|ChildCareMedOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByMaxorder($maxorder = null, $comparison = null)
    {
        if (is_array($maxorder)) {
            $useMinMax = false;
            if (isset($maxorder['min'])) {
                $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_MAXORDER, $maxorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxorder['max'])) {
                $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_MAXORDER, $maxorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_MAXORDER, $maxorder, $comparison);
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
     * @return $this|ChildCareMedOrdercatalogQuery The current query, for fluid interface
     */
    public function filterByProorder($proorder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proorder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_PROORDER, $proorder, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareMedOrdercatalog $careMedOrdercatalog Object to remove from the list of results
     *
     * @return $this|ChildCareMedOrdercatalogQuery The current query, for fluid interface
     */
    public function prune($careMedOrdercatalog = null)
    {
        if ($careMedOrdercatalog) {
            $this->addUsingAlias(CareMedOrdercatalogTableMap::COL_ITEM_NO, $careMedOrdercatalog->getItemNo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_med_ordercatalog table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedOrdercatalogTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareMedOrdercatalogTableMap::clearInstancePool();
            CareMedOrdercatalogTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedOrdercatalogTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareMedOrdercatalogTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareMedOrdercatalogTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareMedOrdercatalogTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareMedOrdercatalogQuery
