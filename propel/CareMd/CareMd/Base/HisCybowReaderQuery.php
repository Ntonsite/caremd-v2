<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\HisCybowReader as ChildHisCybowReader;
use CareMd\CareMd\HisCybowReaderQuery as ChildHisCybowReaderQuery;
use CareMd\CareMd\Map\HisCybowReaderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'his_cybow_reader' table.
 *
 *
 *
 * @method     ChildHisCybowReaderQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildHisCybowReaderQuery orderBySampleid($order = Criteria::ASC) Order by the SampleID column
 * @method     ChildHisCybowReaderQuery orderByDatentime($order = Criteria::ASC) Order by the DateNTime column
 * @method     ChildHisCybowReaderQuery orderByUro($order = Criteria::ASC) Order by the URO column
 * @method     ChildHisCybowReaderQuery orderByGlu($order = Criteria::ASC) Order by the GLU column
 * @method     ChildHisCybowReaderQuery orderByBil($order = Criteria::ASC) Order by the BIL column
 * @method     ChildHisCybowReaderQuery orderByKet($order = Criteria::ASC) Order by the KET column
 * @method     ChildHisCybowReaderQuery orderBySg($order = Criteria::ASC) Order by the SG column
 * @method     ChildHisCybowReaderQuery orderByBld($order = Criteria::ASC) Order by the BLD column
 * @method     ChildHisCybowReaderQuery orderByPh($order = Criteria::ASC) Order by the pH column
 * @method     ChildHisCybowReaderQuery orderByPro($order = Criteria::ASC) Order by the PRO column
 * @method     ChildHisCybowReaderQuery orderByNit($order = Criteria::ASC) Order by the NIT column
 * @method     ChildHisCybowReaderQuery orderByLeu($order = Criteria::ASC) Order by the LEU column
 *
 * @method     ChildHisCybowReaderQuery groupById() Group by the ID column
 * @method     ChildHisCybowReaderQuery groupBySampleid() Group by the SampleID column
 * @method     ChildHisCybowReaderQuery groupByDatentime() Group by the DateNTime column
 * @method     ChildHisCybowReaderQuery groupByUro() Group by the URO column
 * @method     ChildHisCybowReaderQuery groupByGlu() Group by the GLU column
 * @method     ChildHisCybowReaderQuery groupByBil() Group by the BIL column
 * @method     ChildHisCybowReaderQuery groupByKet() Group by the KET column
 * @method     ChildHisCybowReaderQuery groupBySg() Group by the SG column
 * @method     ChildHisCybowReaderQuery groupByBld() Group by the BLD column
 * @method     ChildHisCybowReaderQuery groupByPh() Group by the pH column
 * @method     ChildHisCybowReaderQuery groupByPro() Group by the PRO column
 * @method     ChildHisCybowReaderQuery groupByNit() Group by the NIT column
 * @method     ChildHisCybowReaderQuery groupByLeu() Group by the LEU column
 *
 * @method     ChildHisCybowReaderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildHisCybowReaderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildHisCybowReaderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildHisCybowReaderQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildHisCybowReaderQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildHisCybowReaderQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildHisCybowReader findOne(ConnectionInterface $con = null) Return the first ChildHisCybowReader matching the query
 * @method     ChildHisCybowReader findOneOrCreate(ConnectionInterface $con = null) Return the first ChildHisCybowReader matching the query, or a new ChildHisCybowReader object populated from the query conditions when no match is found
 *
 * @method     ChildHisCybowReader findOneById(int $ID) Return the first ChildHisCybowReader filtered by the ID column
 * @method     ChildHisCybowReader findOneBySampleid(string $SampleID) Return the first ChildHisCybowReader filtered by the SampleID column
 * @method     ChildHisCybowReader findOneByDatentime(string $DateNTime) Return the first ChildHisCybowReader filtered by the DateNTime column
 * @method     ChildHisCybowReader findOneByUro(string $URO) Return the first ChildHisCybowReader filtered by the URO column
 * @method     ChildHisCybowReader findOneByGlu(string $GLU) Return the first ChildHisCybowReader filtered by the GLU column
 * @method     ChildHisCybowReader findOneByBil(string $BIL) Return the first ChildHisCybowReader filtered by the BIL column
 * @method     ChildHisCybowReader findOneByKet(string $KET) Return the first ChildHisCybowReader filtered by the KET column
 * @method     ChildHisCybowReader findOneBySg(string $SG) Return the first ChildHisCybowReader filtered by the SG column
 * @method     ChildHisCybowReader findOneByBld(string $BLD) Return the first ChildHisCybowReader filtered by the BLD column
 * @method     ChildHisCybowReader findOneByPh(string $pH) Return the first ChildHisCybowReader filtered by the pH column
 * @method     ChildHisCybowReader findOneByPro(string $PRO) Return the first ChildHisCybowReader filtered by the PRO column
 * @method     ChildHisCybowReader findOneByNit(string $NIT) Return the first ChildHisCybowReader filtered by the NIT column
 * @method     ChildHisCybowReader findOneByLeu(string $LEU) Return the first ChildHisCybowReader filtered by the LEU column *

 * @method     ChildHisCybowReader requirePk($key, ConnectionInterface $con = null) Return the ChildHisCybowReader by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOne(ConnectionInterface $con = null) Return the first ChildHisCybowReader matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildHisCybowReader requireOneById(int $ID) Return the first ChildHisCybowReader filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOneBySampleid(string $SampleID) Return the first ChildHisCybowReader filtered by the SampleID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOneByDatentime(string $DateNTime) Return the first ChildHisCybowReader filtered by the DateNTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOneByUro(string $URO) Return the first ChildHisCybowReader filtered by the URO column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOneByGlu(string $GLU) Return the first ChildHisCybowReader filtered by the GLU column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOneByBil(string $BIL) Return the first ChildHisCybowReader filtered by the BIL column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOneByKet(string $KET) Return the first ChildHisCybowReader filtered by the KET column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOneBySg(string $SG) Return the first ChildHisCybowReader filtered by the SG column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOneByBld(string $BLD) Return the first ChildHisCybowReader filtered by the BLD column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOneByPh(string $pH) Return the first ChildHisCybowReader filtered by the pH column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOneByPro(string $PRO) Return the first ChildHisCybowReader filtered by the PRO column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOneByNit(string $NIT) Return the first ChildHisCybowReader filtered by the NIT column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisCybowReader requireOneByLeu(string $LEU) Return the first ChildHisCybowReader filtered by the LEU column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildHisCybowReader[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildHisCybowReader objects based on current ModelCriteria
 * @method     ChildHisCybowReader[]|ObjectCollection findById(int $ID) Return ChildHisCybowReader objects filtered by the ID column
 * @method     ChildHisCybowReader[]|ObjectCollection findBySampleid(string $SampleID) Return ChildHisCybowReader objects filtered by the SampleID column
 * @method     ChildHisCybowReader[]|ObjectCollection findByDatentime(string $DateNTime) Return ChildHisCybowReader objects filtered by the DateNTime column
 * @method     ChildHisCybowReader[]|ObjectCollection findByUro(string $URO) Return ChildHisCybowReader objects filtered by the URO column
 * @method     ChildHisCybowReader[]|ObjectCollection findByGlu(string $GLU) Return ChildHisCybowReader objects filtered by the GLU column
 * @method     ChildHisCybowReader[]|ObjectCollection findByBil(string $BIL) Return ChildHisCybowReader objects filtered by the BIL column
 * @method     ChildHisCybowReader[]|ObjectCollection findByKet(string $KET) Return ChildHisCybowReader objects filtered by the KET column
 * @method     ChildHisCybowReader[]|ObjectCollection findBySg(string $SG) Return ChildHisCybowReader objects filtered by the SG column
 * @method     ChildHisCybowReader[]|ObjectCollection findByBld(string $BLD) Return ChildHisCybowReader objects filtered by the BLD column
 * @method     ChildHisCybowReader[]|ObjectCollection findByPh(string $pH) Return ChildHisCybowReader objects filtered by the pH column
 * @method     ChildHisCybowReader[]|ObjectCollection findByPro(string $PRO) Return ChildHisCybowReader objects filtered by the PRO column
 * @method     ChildHisCybowReader[]|ObjectCollection findByNit(string $NIT) Return ChildHisCybowReader objects filtered by the NIT column
 * @method     ChildHisCybowReader[]|ObjectCollection findByLeu(string $LEU) Return ChildHisCybowReader objects filtered by the LEU column
 * @method     ChildHisCybowReader[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class HisCybowReaderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\HisCybowReaderQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\HisCybowReader', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildHisCybowReaderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildHisCybowReaderQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildHisCybowReaderQuery) {
            return $criteria;
        }
        $query = new ChildHisCybowReaderQuery();
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
     * @return ChildHisCybowReader|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(HisCybowReaderTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = HisCybowReaderTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildHisCybowReader A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, SampleID, DateNTime, URO, GLU, BIL, KET, SG, BLD, pH, PRO, NIT, LEU FROM his_cybow_reader WHERE ID = :p0';
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
            /** @var ChildHisCybowReader $obj */
            $obj = new ChildHisCybowReader();
            $obj->hydrate($row);
            HisCybowReaderTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildHisCybowReader|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(HisCybowReaderTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(HisCybowReaderTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the SampleID column
     *
     * Example usage:
     * <code>
     * $query->filterBySampleid('fooValue');   // WHERE SampleID = 'fooValue'
     * $query->filterBySampleid('%fooValue%', Criteria::LIKE); // WHERE SampleID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sampleid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterBySampleid($sampleid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sampleid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_SAMPLEID, $sampleid, $comparison);
    }

    /**
     * Filter the query on the DateNTime column
     *
     * Example usage:
     * <code>
     * $query->filterByDatentime('2011-03-14'); // WHERE DateNTime = '2011-03-14'
     * $query->filterByDatentime('now'); // WHERE DateNTime = '2011-03-14'
     * $query->filterByDatentime(array('max' => 'yesterday')); // WHERE DateNTime > '2011-03-13'
     * </code>
     *
     * @param     mixed $datentime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterByDatentime($datentime = null, $comparison = null)
    {
        if (is_array($datentime)) {
            $useMinMax = false;
            if (isset($datentime['min'])) {
                $this->addUsingAlias(HisCybowReaderTableMap::COL_DATENTIME, $datentime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datentime['max'])) {
                $this->addUsingAlias(HisCybowReaderTableMap::COL_DATENTIME, $datentime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_DATENTIME, $datentime, $comparison);
    }

    /**
     * Filter the query on the URO column
     *
     * Example usage:
     * <code>
     * $query->filterByUro('fooValue');   // WHERE URO = 'fooValue'
     * $query->filterByUro('%fooValue%', Criteria::LIKE); // WHERE URO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uro The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterByUro($uro = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uro)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_URO, $uro, $comparison);
    }

    /**
     * Filter the query on the GLU column
     *
     * Example usage:
     * <code>
     * $query->filterByGlu('fooValue');   // WHERE GLU = 'fooValue'
     * $query->filterByGlu('%fooValue%', Criteria::LIKE); // WHERE GLU LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glu The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterByGlu($glu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glu)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_GLU, $glu, $comparison);
    }

    /**
     * Filter the query on the BIL column
     *
     * Example usage:
     * <code>
     * $query->filterByBil('fooValue');   // WHERE BIL = 'fooValue'
     * $query->filterByBil('%fooValue%', Criteria::LIKE); // WHERE BIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bil The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterByBil($bil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bil)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_BIL, $bil, $comparison);
    }

    /**
     * Filter the query on the KET column
     *
     * Example usage:
     * <code>
     * $query->filterByKet('fooValue');   // WHERE KET = 'fooValue'
     * $query->filterByKet('%fooValue%', Criteria::LIKE); // WHERE KET LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ket The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterByKet($ket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_KET, $ket, $comparison);
    }

    /**
     * Filter the query on the SG column
     *
     * Example usage:
     * <code>
     * $query->filterBySg('fooValue');   // WHERE SG = 'fooValue'
     * $query->filterBySg('%fooValue%', Criteria::LIKE); // WHERE SG LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterBySg($sg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_SG, $sg, $comparison);
    }

    /**
     * Filter the query on the BLD column
     *
     * Example usage:
     * <code>
     * $query->filterByBld('fooValue');   // WHERE BLD = 'fooValue'
     * $query->filterByBld('%fooValue%', Criteria::LIKE); // WHERE BLD LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bld The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterByBld($bld = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bld)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_BLD, $bld, $comparison);
    }

    /**
     * Filter the query on the pH column
     *
     * Example usage:
     * <code>
     * $query->filterByPh('fooValue');   // WHERE pH = 'fooValue'
     * $query->filterByPh('%fooValue%', Criteria::LIKE); // WHERE pH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ph The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterByPh($ph = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ph)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_PH, $ph, $comparison);
    }

    /**
     * Filter the query on the PRO column
     *
     * Example usage:
     * <code>
     * $query->filterByPro('fooValue');   // WHERE PRO = 'fooValue'
     * $query->filterByPro('%fooValue%', Criteria::LIKE); // WHERE PRO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pro The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterByPro($pro = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pro)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_PRO, $pro, $comparison);
    }

    /**
     * Filter the query on the NIT column
     *
     * Example usage:
     * <code>
     * $query->filterByNit('fooValue');   // WHERE NIT = 'fooValue'
     * $query->filterByNit('%fooValue%', Criteria::LIKE); // WHERE NIT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterByNit($nit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_NIT, $nit, $comparison);
    }

    /**
     * Filter the query on the LEU column
     *
     * Example usage:
     * <code>
     * $query->filterByLeu('fooValue');   // WHERE LEU = 'fooValue'
     * $query->filterByLeu('%fooValue%', Criteria::LIKE); // WHERE LEU LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leu The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function filterByLeu($leu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leu)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisCybowReaderTableMap::COL_LEU, $leu, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildHisCybowReader $hisCybowReader Object to remove from the list of results
     *
     * @return $this|ChildHisCybowReaderQuery The current query, for fluid interface
     */
    public function prune($hisCybowReader = null)
    {
        if ($hisCybowReader) {
            $this->addUsingAlias(HisCybowReaderTableMap::COL_ID, $hisCybowReader->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the his_cybow_reader table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(HisCybowReaderTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            HisCybowReaderTableMap::clearInstancePool();
            HisCybowReaderTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(HisCybowReaderTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(HisCybowReaderTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            HisCybowReaderTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            HisCybowReaderTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // HisCybowReaderQuery
