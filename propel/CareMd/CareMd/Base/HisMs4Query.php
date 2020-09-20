<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\HisMs4 as ChildHisMs4;
use CareMd\CareMd\HisMs4Query as ChildHisMs4Query;
use CareMd\CareMd\Map\HisMs4TableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'his_ms4' table.
 *
 *
 *
 * @method     ChildHisMs4Query orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildHisMs4Query orderBySampleid($order = Criteria::ASC) Order by the SampleID column
 * @method     ChildHisMs4Query orderByDatentime($order = Criteria::ASC) Order by the DateNTime column
 * @method     ChildHisMs4Query orderByWbc($order = Criteria::ASC) Order by the WBC column
 * @method     ChildHisMs4Query orderByLym($order = Criteria::ASC) Order by the Lym column
 * @method     ChildHisMs4Query orderByMon($order = Criteria::ASC) Order by the Mon column
 * @method     ChildHisMs4Query orderByNeu($order = Criteria::ASC) Order by the Neu column
 * @method     ChildHisMs4Query orderByEo($order = Criteria::ASC) Order by the Eo column
 * @method     ChildHisMs4Query orderByBa($order = Criteria::ASC) Order by the Ba column
 * @method     ChildHisMs4Query orderByRbc($order = Criteria::ASC) Order by the RBC column
 * @method     ChildHisMs4Query orderByMcv($order = Criteria::ASC) Order by the MCV column
 * @method     ChildHisMs4Query orderByHct($order = Criteria::ASC) Order by the Hct column
 * @method     ChildHisMs4Query orderByMch($order = Criteria::ASC) Order by the MCH column
 * @method     ChildHisMs4Query orderByMchc($order = Criteria::ASC) Order by the MCHC column
 * @method     ChildHisMs4Query orderByRdw($order = Criteria::ASC) Order by the RDW column
 * @method     ChildHisMs4Query orderByHb($order = Criteria::ASC) Order by the Hb column
 * @method     ChildHisMs4Query orderByThr($order = Criteria::ASC) Order by the THR column
 * @method     ChildHisMs4Query orderByMpv($order = Criteria::ASC) Order by the MPV column
 * @method     ChildHisMs4Query orderByPct($order = Criteria::ASC) Order by the Pct column
 * @method     ChildHisMs4Query orderByPdw($order = Criteria::ASC) Order by the PDW column
 *
 * @method     ChildHisMs4Query groupById() Group by the ID column
 * @method     ChildHisMs4Query groupBySampleid() Group by the SampleID column
 * @method     ChildHisMs4Query groupByDatentime() Group by the DateNTime column
 * @method     ChildHisMs4Query groupByWbc() Group by the WBC column
 * @method     ChildHisMs4Query groupByLym() Group by the Lym column
 * @method     ChildHisMs4Query groupByMon() Group by the Mon column
 * @method     ChildHisMs4Query groupByNeu() Group by the Neu column
 * @method     ChildHisMs4Query groupByEo() Group by the Eo column
 * @method     ChildHisMs4Query groupByBa() Group by the Ba column
 * @method     ChildHisMs4Query groupByRbc() Group by the RBC column
 * @method     ChildHisMs4Query groupByMcv() Group by the MCV column
 * @method     ChildHisMs4Query groupByHct() Group by the Hct column
 * @method     ChildHisMs4Query groupByMch() Group by the MCH column
 * @method     ChildHisMs4Query groupByMchc() Group by the MCHC column
 * @method     ChildHisMs4Query groupByRdw() Group by the RDW column
 * @method     ChildHisMs4Query groupByHb() Group by the Hb column
 * @method     ChildHisMs4Query groupByThr() Group by the THR column
 * @method     ChildHisMs4Query groupByMpv() Group by the MPV column
 * @method     ChildHisMs4Query groupByPct() Group by the Pct column
 * @method     ChildHisMs4Query groupByPdw() Group by the PDW column
 *
 * @method     ChildHisMs4Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildHisMs4Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildHisMs4Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildHisMs4Query leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildHisMs4Query rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildHisMs4Query innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildHisMs4 findOne(ConnectionInterface $con = null) Return the first ChildHisMs4 matching the query
 * @method     ChildHisMs4 findOneOrCreate(ConnectionInterface $con = null) Return the first ChildHisMs4 matching the query, or a new ChildHisMs4 object populated from the query conditions when no match is found
 *
 * @method     ChildHisMs4 findOneById(int $ID) Return the first ChildHisMs4 filtered by the ID column
 * @method     ChildHisMs4 findOneBySampleid(string $SampleID) Return the first ChildHisMs4 filtered by the SampleID column
 * @method     ChildHisMs4 findOneByDatentime(string $DateNTime) Return the first ChildHisMs4 filtered by the DateNTime column
 * @method     ChildHisMs4 findOneByWbc(string $WBC) Return the first ChildHisMs4 filtered by the WBC column
 * @method     ChildHisMs4 findOneByLym(string $Lym) Return the first ChildHisMs4 filtered by the Lym column
 * @method     ChildHisMs4 findOneByMon(string $Mon) Return the first ChildHisMs4 filtered by the Mon column
 * @method     ChildHisMs4 findOneByNeu(string $Neu) Return the first ChildHisMs4 filtered by the Neu column
 * @method     ChildHisMs4 findOneByEo(string $Eo) Return the first ChildHisMs4 filtered by the Eo column
 * @method     ChildHisMs4 findOneByBa(string $Ba) Return the first ChildHisMs4 filtered by the Ba column
 * @method     ChildHisMs4 findOneByRbc(string $RBC) Return the first ChildHisMs4 filtered by the RBC column
 * @method     ChildHisMs4 findOneByMcv(string $MCV) Return the first ChildHisMs4 filtered by the MCV column
 * @method     ChildHisMs4 findOneByHct(string $Hct) Return the first ChildHisMs4 filtered by the Hct column
 * @method     ChildHisMs4 findOneByMch(string $MCH) Return the first ChildHisMs4 filtered by the MCH column
 * @method     ChildHisMs4 findOneByMchc(string $MCHC) Return the first ChildHisMs4 filtered by the MCHC column
 * @method     ChildHisMs4 findOneByRdw(string $RDW) Return the first ChildHisMs4 filtered by the RDW column
 * @method     ChildHisMs4 findOneByHb(string $Hb) Return the first ChildHisMs4 filtered by the Hb column
 * @method     ChildHisMs4 findOneByThr(int $THR) Return the first ChildHisMs4 filtered by the THR column
 * @method     ChildHisMs4 findOneByMpv(string $MPV) Return the first ChildHisMs4 filtered by the MPV column
 * @method     ChildHisMs4 findOneByPct(string $Pct) Return the first ChildHisMs4 filtered by the Pct column
 * @method     ChildHisMs4 findOneByPdw(string $PDW) Return the first ChildHisMs4 filtered by the PDW column *

 * @method     ChildHisMs4 requirePk($key, ConnectionInterface $con = null) Return the ChildHisMs4 by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOne(ConnectionInterface $con = null) Return the first ChildHisMs4 matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildHisMs4 requireOneById(int $ID) Return the first ChildHisMs4 filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneBySampleid(string $SampleID) Return the first ChildHisMs4 filtered by the SampleID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByDatentime(string $DateNTime) Return the first ChildHisMs4 filtered by the DateNTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByWbc(string $WBC) Return the first ChildHisMs4 filtered by the WBC column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByLym(string $Lym) Return the first ChildHisMs4 filtered by the Lym column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByMon(string $Mon) Return the first ChildHisMs4 filtered by the Mon column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByNeu(string $Neu) Return the first ChildHisMs4 filtered by the Neu column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByEo(string $Eo) Return the first ChildHisMs4 filtered by the Eo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByBa(string $Ba) Return the first ChildHisMs4 filtered by the Ba column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByRbc(string $RBC) Return the first ChildHisMs4 filtered by the RBC column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByMcv(string $MCV) Return the first ChildHisMs4 filtered by the MCV column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByHct(string $Hct) Return the first ChildHisMs4 filtered by the Hct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByMch(string $MCH) Return the first ChildHisMs4 filtered by the MCH column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByMchc(string $MCHC) Return the first ChildHisMs4 filtered by the MCHC column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByRdw(string $RDW) Return the first ChildHisMs4 filtered by the RDW column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByHb(string $Hb) Return the first ChildHisMs4 filtered by the Hb column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByThr(int $THR) Return the first ChildHisMs4 filtered by the THR column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByMpv(string $MPV) Return the first ChildHisMs4 filtered by the MPV column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByPct(string $Pct) Return the first ChildHisMs4 filtered by the Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisMs4 requireOneByPdw(string $PDW) Return the first ChildHisMs4 filtered by the PDW column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildHisMs4[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildHisMs4 objects based on current ModelCriteria
 * @method     ChildHisMs4[]|ObjectCollection findById(int $ID) Return ChildHisMs4 objects filtered by the ID column
 * @method     ChildHisMs4[]|ObjectCollection findBySampleid(string $SampleID) Return ChildHisMs4 objects filtered by the SampleID column
 * @method     ChildHisMs4[]|ObjectCollection findByDatentime(string $DateNTime) Return ChildHisMs4 objects filtered by the DateNTime column
 * @method     ChildHisMs4[]|ObjectCollection findByWbc(string $WBC) Return ChildHisMs4 objects filtered by the WBC column
 * @method     ChildHisMs4[]|ObjectCollection findByLym(string $Lym) Return ChildHisMs4 objects filtered by the Lym column
 * @method     ChildHisMs4[]|ObjectCollection findByMon(string $Mon) Return ChildHisMs4 objects filtered by the Mon column
 * @method     ChildHisMs4[]|ObjectCollection findByNeu(string $Neu) Return ChildHisMs4 objects filtered by the Neu column
 * @method     ChildHisMs4[]|ObjectCollection findByEo(string $Eo) Return ChildHisMs4 objects filtered by the Eo column
 * @method     ChildHisMs4[]|ObjectCollection findByBa(string $Ba) Return ChildHisMs4 objects filtered by the Ba column
 * @method     ChildHisMs4[]|ObjectCollection findByRbc(string $RBC) Return ChildHisMs4 objects filtered by the RBC column
 * @method     ChildHisMs4[]|ObjectCollection findByMcv(string $MCV) Return ChildHisMs4 objects filtered by the MCV column
 * @method     ChildHisMs4[]|ObjectCollection findByHct(string $Hct) Return ChildHisMs4 objects filtered by the Hct column
 * @method     ChildHisMs4[]|ObjectCollection findByMch(string $MCH) Return ChildHisMs4 objects filtered by the MCH column
 * @method     ChildHisMs4[]|ObjectCollection findByMchc(string $MCHC) Return ChildHisMs4 objects filtered by the MCHC column
 * @method     ChildHisMs4[]|ObjectCollection findByRdw(string $RDW) Return ChildHisMs4 objects filtered by the RDW column
 * @method     ChildHisMs4[]|ObjectCollection findByHb(string $Hb) Return ChildHisMs4 objects filtered by the Hb column
 * @method     ChildHisMs4[]|ObjectCollection findByThr(int $THR) Return ChildHisMs4 objects filtered by the THR column
 * @method     ChildHisMs4[]|ObjectCollection findByMpv(string $MPV) Return ChildHisMs4 objects filtered by the MPV column
 * @method     ChildHisMs4[]|ObjectCollection findByPct(string $Pct) Return ChildHisMs4 objects filtered by the Pct column
 * @method     ChildHisMs4[]|ObjectCollection findByPdw(string $PDW) Return ChildHisMs4 objects filtered by the PDW column
 * @method     ChildHisMs4[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class HisMs4Query extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\HisMs4Query object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\HisMs4', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildHisMs4Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildHisMs4Query
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildHisMs4Query) {
            return $criteria;
        }
        $query = new ChildHisMs4Query();
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
     * @return ChildHisMs4|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(HisMs4TableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = HisMs4TableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildHisMs4 A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, SampleID, DateNTime, WBC, Lym, Mon, Neu, Eo, Ba, RBC, MCV, Hct, MCH, MCHC, RDW, Hb, THR, MPV, Pct, PDW FROM his_ms4 WHERE ID = :p0';
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
            /** @var ChildHisMs4 $obj */
            $obj = new ChildHisMs4();
            $obj->hydrate($row);
            HisMs4TableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildHisMs4|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(HisMs4TableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(HisMs4TableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterBySampleid($sampleid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sampleid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_SAMPLEID, $sampleid, $comparison);
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
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByDatentime($datentime = null, $comparison = null)
    {
        if (is_array($datentime)) {
            $useMinMax = false;
            if (isset($datentime['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_DATENTIME, $datentime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datentime['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_DATENTIME, $datentime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_DATENTIME, $datentime, $comparison);
    }

    /**
     * Filter the query on the WBC column
     *
     * Example usage:
     * <code>
     * $query->filterByWbc(1234); // WHERE WBC = 1234
     * $query->filterByWbc(array(12, 34)); // WHERE WBC IN (12, 34)
     * $query->filterByWbc(array('min' => 12)); // WHERE WBC > 12
     * </code>
     *
     * @param     mixed $wbc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByWbc($wbc = null, $comparison = null)
    {
        if (is_array($wbc)) {
            $useMinMax = false;
            if (isset($wbc['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_WBC, $wbc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wbc['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_WBC, $wbc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_WBC, $wbc, $comparison);
    }

    /**
     * Filter the query on the Lym column
     *
     * Example usage:
     * <code>
     * $query->filterByLym(1234); // WHERE Lym = 1234
     * $query->filterByLym(array(12, 34)); // WHERE Lym IN (12, 34)
     * $query->filterByLym(array('min' => 12)); // WHERE Lym > 12
     * </code>
     *
     * @param     mixed $lym The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByLym($lym = null, $comparison = null)
    {
        if (is_array($lym)) {
            $useMinMax = false;
            if (isset($lym['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_LYM, $lym['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lym['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_LYM, $lym['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_LYM, $lym, $comparison);
    }

    /**
     * Filter the query on the Mon column
     *
     * Example usage:
     * <code>
     * $query->filterByMon(1234); // WHERE Mon = 1234
     * $query->filterByMon(array(12, 34)); // WHERE Mon IN (12, 34)
     * $query->filterByMon(array('min' => 12)); // WHERE Mon > 12
     * </code>
     *
     * @param     mixed $mon The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByMon($mon = null, $comparison = null)
    {
        if (is_array($mon)) {
            $useMinMax = false;
            if (isset($mon['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_MON, $mon['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mon['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_MON, $mon['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_MON, $mon, $comparison);
    }

    /**
     * Filter the query on the Neu column
     *
     * Example usage:
     * <code>
     * $query->filterByNeu(1234); // WHERE Neu = 1234
     * $query->filterByNeu(array(12, 34)); // WHERE Neu IN (12, 34)
     * $query->filterByNeu(array('min' => 12)); // WHERE Neu > 12
     * </code>
     *
     * @param     mixed $neu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByNeu($neu = null, $comparison = null)
    {
        if (is_array($neu)) {
            $useMinMax = false;
            if (isset($neu['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_NEU, $neu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($neu['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_NEU, $neu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_NEU, $neu, $comparison);
    }

    /**
     * Filter the query on the Eo column
     *
     * Example usage:
     * <code>
     * $query->filterByEo(1234); // WHERE Eo = 1234
     * $query->filterByEo(array(12, 34)); // WHERE Eo IN (12, 34)
     * $query->filterByEo(array('min' => 12)); // WHERE Eo > 12
     * </code>
     *
     * @param     mixed $eo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByEo($eo = null, $comparison = null)
    {
        if (is_array($eo)) {
            $useMinMax = false;
            if (isset($eo['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_EO, $eo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eo['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_EO, $eo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_EO, $eo, $comparison);
    }

    /**
     * Filter the query on the Ba column
     *
     * Example usage:
     * <code>
     * $query->filterByBa(1234); // WHERE Ba = 1234
     * $query->filterByBa(array(12, 34)); // WHERE Ba IN (12, 34)
     * $query->filterByBa(array('min' => 12)); // WHERE Ba > 12
     * </code>
     *
     * @param     mixed $ba The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByBa($ba = null, $comparison = null)
    {
        if (is_array($ba)) {
            $useMinMax = false;
            if (isset($ba['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_BA, $ba['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ba['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_BA, $ba['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_BA, $ba, $comparison);
    }

    /**
     * Filter the query on the RBC column
     *
     * Example usage:
     * <code>
     * $query->filterByRbc(1234); // WHERE RBC = 1234
     * $query->filterByRbc(array(12, 34)); // WHERE RBC IN (12, 34)
     * $query->filterByRbc(array('min' => 12)); // WHERE RBC > 12
     * </code>
     *
     * @param     mixed $rbc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByRbc($rbc = null, $comparison = null)
    {
        if (is_array($rbc)) {
            $useMinMax = false;
            if (isset($rbc['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_RBC, $rbc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rbc['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_RBC, $rbc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_RBC, $rbc, $comparison);
    }

    /**
     * Filter the query on the MCV column
     *
     * Example usage:
     * <code>
     * $query->filterByMcv(1234); // WHERE MCV = 1234
     * $query->filterByMcv(array(12, 34)); // WHERE MCV IN (12, 34)
     * $query->filterByMcv(array('min' => 12)); // WHERE MCV > 12
     * </code>
     *
     * @param     mixed $mcv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByMcv($mcv = null, $comparison = null)
    {
        if (is_array($mcv)) {
            $useMinMax = false;
            if (isset($mcv['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_MCV, $mcv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mcv['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_MCV, $mcv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_MCV, $mcv, $comparison);
    }

    /**
     * Filter the query on the Hct column
     *
     * Example usage:
     * <code>
     * $query->filterByHct(1234); // WHERE Hct = 1234
     * $query->filterByHct(array(12, 34)); // WHERE Hct IN (12, 34)
     * $query->filterByHct(array('min' => 12)); // WHERE Hct > 12
     * </code>
     *
     * @param     mixed $hct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByHct($hct = null, $comparison = null)
    {
        if (is_array($hct)) {
            $useMinMax = false;
            if (isset($hct['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_HCT, $hct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hct['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_HCT, $hct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_HCT, $hct, $comparison);
    }

    /**
     * Filter the query on the MCH column
     *
     * Example usage:
     * <code>
     * $query->filterByMch(1234); // WHERE MCH = 1234
     * $query->filterByMch(array(12, 34)); // WHERE MCH IN (12, 34)
     * $query->filterByMch(array('min' => 12)); // WHERE MCH > 12
     * </code>
     *
     * @param     mixed $mch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByMch($mch = null, $comparison = null)
    {
        if (is_array($mch)) {
            $useMinMax = false;
            if (isset($mch['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_MCH, $mch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mch['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_MCH, $mch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_MCH, $mch, $comparison);
    }

    /**
     * Filter the query on the MCHC column
     *
     * Example usage:
     * <code>
     * $query->filterByMchc(1234); // WHERE MCHC = 1234
     * $query->filterByMchc(array(12, 34)); // WHERE MCHC IN (12, 34)
     * $query->filterByMchc(array('min' => 12)); // WHERE MCHC > 12
     * </code>
     *
     * @param     mixed $mchc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByMchc($mchc = null, $comparison = null)
    {
        if (is_array($mchc)) {
            $useMinMax = false;
            if (isset($mchc['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_MCHC, $mchc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mchc['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_MCHC, $mchc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_MCHC, $mchc, $comparison);
    }

    /**
     * Filter the query on the RDW column
     *
     * Example usage:
     * <code>
     * $query->filterByRdw(1234); // WHERE RDW = 1234
     * $query->filterByRdw(array(12, 34)); // WHERE RDW IN (12, 34)
     * $query->filterByRdw(array('min' => 12)); // WHERE RDW > 12
     * </code>
     *
     * @param     mixed $rdw The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByRdw($rdw = null, $comparison = null)
    {
        if (is_array($rdw)) {
            $useMinMax = false;
            if (isset($rdw['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_RDW, $rdw['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rdw['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_RDW, $rdw['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_RDW, $rdw, $comparison);
    }

    /**
     * Filter the query on the Hb column
     *
     * Example usage:
     * <code>
     * $query->filterByHb(1234); // WHERE Hb = 1234
     * $query->filterByHb(array(12, 34)); // WHERE Hb IN (12, 34)
     * $query->filterByHb(array('min' => 12)); // WHERE Hb > 12
     * </code>
     *
     * @param     mixed $hb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByHb($hb = null, $comparison = null)
    {
        if (is_array($hb)) {
            $useMinMax = false;
            if (isset($hb['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_HB, $hb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hb['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_HB, $hb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_HB, $hb, $comparison);
    }

    /**
     * Filter the query on the THR column
     *
     * Example usage:
     * <code>
     * $query->filterByThr(1234); // WHERE THR = 1234
     * $query->filterByThr(array(12, 34)); // WHERE THR IN (12, 34)
     * $query->filterByThr(array('min' => 12)); // WHERE THR > 12
     * </code>
     *
     * @param     mixed $thr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByThr($thr = null, $comparison = null)
    {
        if (is_array($thr)) {
            $useMinMax = false;
            if (isset($thr['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_THR, $thr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thr['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_THR, $thr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_THR, $thr, $comparison);
    }

    /**
     * Filter the query on the MPV column
     *
     * Example usage:
     * <code>
     * $query->filterByMpv(1234); // WHERE MPV = 1234
     * $query->filterByMpv(array(12, 34)); // WHERE MPV IN (12, 34)
     * $query->filterByMpv(array('min' => 12)); // WHERE MPV > 12
     * </code>
     *
     * @param     mixed $mpv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByMpv($mpv = null, $comparison = null)
    {
        if (is_array($mpv)) {
            $useMinMax = false;
            if (isset($mpv['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_MPV, $mpv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mpv['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_MPV, $mpv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_MPV, $mpv, $comparison);
    }

    /**
     * Filter the query on the Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByPct(1234); // WHERE Pct = 1234
     * $query->filterByPct(array(12, 34)); // WHERE Pct IN (12, 34)
     * $query->filterByPct(array('min' => 12)); // WHERE Pct > 12
     * </code>
     *
     * @param     mixed $pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByPct($pct = null, $comparison = null)
    {
        if (is_array($pct)) {
            $useMinMax = false;
            if (isset($pct['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_PCT, $pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pct['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_PCT, $pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_PCT, $pct, $comparison);
    }

    /**
     * Filter the query on the PDW column
     *
     * Example usage:
     * <code>
     * $query->filterByPdw(1234); // WHERE PDW = 1234
     * $query->filterByPdw(array(12, 34)); // WHERE PDW IN (12, 34)
     * $query->filterByPdw(array('min' => 12)); // WHERE PDW > 12
     * </code>
     *
     * @param     mixed $pdw The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function filterByPdw($pdw = null, $comparison = null)
    {
        if (is_array($pdw)) {
            $useMinMax = false;
            if (isset($pdw['min'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_PDW, $pdw['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pdw['max'])) {
                $this->addUsingAlias(HisMs4TableMap::COL_PDW, $pdw['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisMs4TableMap::COL_PDW, $pdw, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildHisMs4 $hisMs4 Object to remove from the list of results
     *
     * @return $this|ChildHisMs4Query The current query, for fluid interface
     */
    public function prune($hisMs4 = null)
    {
        if ($hisMs4) {
            $this->addUsingAlias(HisMs4TableMap::COL_ID, $hisMs4->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the his_ms4 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(HisMs4TableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            HisMs4TableMap::clearInstancePool();
            HisMs4TableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(HisMs4TableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(HisMs4TableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            HisMs4TableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            HisMs4TableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // HisMs4Query
