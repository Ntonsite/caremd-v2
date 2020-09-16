<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\HisSwelabAlfa as ChildHisSwelabAlfa;
use CareMd\CareMd\HisSwelabAlfaQuery as ChildHisSwelabAlfaQuery;
use CareMd\CareMd\Map\HisSwelabAlfaTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'his_swelab_alfa' table.
 *
 *
 *
 * @method     ChildHisSwelabAlfaQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildHisSwelabAlfaQuery orderBySampleid($order = Criteria::ASC) Order by the SampleID column
 * @method     ChildHisSwelabAlfaQuery orderByDatentime($order = Criteria::ASC) Order by the DateNTime column
 * @method     ChildHisSwelabAlfaQuery orderByWbc($order = Criteria::ASC) Order by the WBC column
 * @method     ChildHisSwelabAlfaQuery orderByLym($order = Criteria::ASC) Order by the LYM column
 * @method     ChildHisSwelabAlfaQuery orderByLympa($order = Criteria::ASC) Order by the LYMPa column
 * @method     ChildHisSwelabAlfaQuery orderByMid($order = Criteria::ASC) Order by the MID column
 * @method     ChildHisSwelabAlfaQuery orderByMidpa($order = Criteria::ASC) Order by the MIDPa column
 * @method     ChildHisSwelabAlfaQuery orderByGra($order = Criteria::ASC) Order by the GRA column
 * @method     ChildHisSwelabAlfaQuery orderByGrapa($order = Criteria::ASC) Order by the GRAPa column
 * @method     ChildHisSwelabAlfaQuery orderByHgb($order = Criteria::ASC) Order by the HGB column
 * @method     ChildHisSwelabAlfaQuery orderByMch($order = Criteria::ASC) Order by the MCH column
 * @method     ChildHisSwelabAlfaQuery orderByMchc($order = Criteria::ASC) Order by the MCHC column
 * @method     ChildHisSwelabAlfaQuery orderByRbc($order = Criteria::ASC) Order by the RBC column
 * @method     ChildHisSwelabAlfaQuery orderByMcv($order = Criteria::ASC) Order by the MCV column
 * @method     ChildHisSwelabAlfaQuery orderByHct($order = Criteria::ASC) Order by the HCT column
 * @method     ChildHisSwelabAlfaQuery orderByRdwa($order = Criteria::ASC) Order by the RDWa column
 * @method     ChildHisSwelabAlfaQuery orderByRdw($order = Criteria::ASC) Order by the RDW column
 * @method     ChildHisSwelabAlfaQuery orderByPlt($order = Criteria::ASC) Order by the PLT column
 * @method     ChildHisSwelabAlfaQuery orderByMpv($order = Criteria::ASC) Order by the MPV column
 * @method     ChildHisSwelabAlfaQuery orderByPdw($order = Criteria::ASC) Order by the PDW column
 * @method     ChildHisSwelabAlfaQuery orderByPct($order = Criteria::ASC) Order by the PCT column
 * @method     ChildHisSwelabAlfaQuery orderByLpcr($order = Criteria::ASC) Order by the LPCR column
 *
 * @method     ChildHisSwelabAlfaQuery groupById() Group by the ID column
 * @method     ChildHisSwelabAlfaQuery groupBySampleid() Group by the SampleID column
 * @method     ChildHisSwelabAlfaQuery groupByDatentime() Group by the DateNTime column
 * @method     ChildHisSwelabAlfaQuery groupByWbc() Group by the WBC column
 * @method     ChildHisSwelabAlfaQuery groupByLym() Group by the LYM column
 * @method     ChildHisSwelabAlfaQuery groupByLympa() Group by the LYMPa column
 * @method     ChildHisSwelabAlfaQuery groupByMid() Group by the MID column
 * @method     ChildHisSwelabAlfaQuery groupByMidpa() Group by the MIDPa column
 * @method     ChildHisSwelabAlfaQuery groupByGra() Group by the GRA column
 * @method     ChildHisSwelabAlfaQuery groupByGrapa() Group by the GRAPa column
 * @method     ChildHisSwelabAlfaQuery groupByHgb() Group by the HGB column
 * @method     ChildHisSwelabAlfaQuery groupByMch() Group by the MCH column
 * @method     ChildHisSwelabAlfaQuery groupByMchc() Group by the MCHC column
 * @method     ChildHisSwelabAlfaQuery groupByRbc() Group by the RBC column
 * @method     ChildHisSwelabAlfaQuery groupByMcv() Group by the MCV column
 * @method     ChildHisSwelabAlfaQuery groupByHct() Group by the HCT column
 * @method     ChildHisSwelabAlfaQuery groupByRdwa() Group by the RDWa column
 * @method     ChildHisSwelabAlfaQuery groupByRdw() Group by the RDW column
 * @method     ChildHisSwelabAlfaQuery groupByPlt() Group by the PLT column
 * @method     ChildHisSwelabAlfaQuery groupByMpv() Group by the MPV column
 * @method     ChildHisSwelabAlfaQuery groupByPdw() Group by the PDW column
 * @method     ChildHisSwelabAlfaQuery groupByPct() Group by the PCT column
 * @method     ChildHisSwelabAlfaQuery groupByLpcr() Group by the LPCR column
 *
 * @method     ChildHisSwelabAlfaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildHisSwelabAlfaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildHisSwelabAlfaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildHisSwelabAlfaQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildHisSwelabAlfaQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildHisSwelabAlfaQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildHisSwelabAlfa findOne(ConnectionInterface $con = null) Return the first ChildHisSwelabAlfa matching the query
 * @method     ChildHisSwelabAlfa findOneOrCreate(ConnectionInterface $con = null) Return the first ChildHisSwelabAlfa matching the query, or a new ChildHisSwelabAlfa object populated from the query conditions when no match is found
 *
 * @method     ChildHisSwelabAlfa findOneById(int $ID) Return the first ChildHisSwelabAlfa filtered by the ID column
 * @method     ChildHisSwelabAlfa findOneBySampleid(string $SampleID) Return the first ChildHisSwelabAlfa filtered by the SampleID column
 * @method     ChildHisSwelabAlfa findOneByDatentime(string $DateNTime) Return the first ChildHisSwelabAlfa filtered by the DateNTime column
 * @method     ChildHisSwelabAlfa findOneByWbc(string $WBC) Return the first ChildHisSwelabAlfa filtered by the WBC column
 * @method     ChildHisSwelabAlfa findOneByLym(string $LYM) Return the first ChildHisSwelabAlfa filtered by the LYM column
 * @method     ChildHisSwelabAlfa findOneByLympa(string $LYMPa) Return the first ChildHisSwelabAlfa filtered by the LYMPa column
 * @method     ChildHisSwelabAlfa findOneByMid(string $MID) Return the first ChildHisSwelabAlfa filtered by the MID column
 * @method     ChildHisSwelabAlfa findOneByMidpa(string $MIDPa) Return the first ChildHisSwelabAlfa filtered by the MIDPa column
 * @method     ChildHisSwelabAlfa findOneByGra(string $GRA) Return the first ChildHisSwelabAlfa filtered by the GRA column
 * @method     ChildHisSwelabAlfa findOneByGrapa(string $GRAPa) Return the first ChildHisSwelabAlfa filtered by the GRAPa column
 * @method     ChildHisSwelabAlfa findOneByHgb(string $HGB) Return the first ChildHisSwelabAlfa filtered by the HGB column
 * @method     ChildHisSwelabAlfa findOneByMch(string $MCH) Return the first ChildHisSwelabAlfa filtered by the MCH column
 * @method     ChildHisSwelabAlfa findOneByMchc(string $MCHC) Return the first ChildHisSwelabAlfa filtered by the MCHC column
 * @method     ChildHisSwelabAlfa findOneByRbc(string $RBC) Return the first ChildHisSwelabAlfa filtered by the RBC column
 * @method     ChildHisSwelabAlfa findOneByMcv(string $MCV) Return the first ChildHisSwelabAlfa filtered by the MCV column
 * @method     ChildHisSwelabAlfa findOneByHct(string $HCT) Return the first ChildHisSwelabAlfa filtered by the HCT column
 * @method     ChildHisSwelabAlfa findOneByRdwa(string $RDWa) Return the first ChildHisSwelabAlfa filtered by the RDWa column
 * @method     ChildHisSwelabAlfa findOneByRdw(string $RDW) Return the first ChildHisSwelabAlfa filtered by the RDW column
 * @method     ChildHisSwelabAlfa findOneByPlt(int $PLT) Return the first ChildHisSwelabAlfa filtered by the PLT column
 * @method     ChildHisSwelabAlfa findOneByMpv(string $MPV) Return the first ChildHisSwelabAlfa filtered by the MPV column
 * @method     ChildHisSwelabAlfa findOneByPdw(string $PDW) Return the first ChildHisSwelabAlfa filtered by the PDW column
 * @method     ChildHisSwelabAlfa findOneByPct(string $PCT) Return the first ChildHisSwelabAlfa filtered by the PCT column
 * @method     ChildHisSwelabAlfa findOneByLpcr(string $LPCR) Return the first ChildHisSwelabAlfa filtered by the LPCR column *

 * @method     ChildHisSwelabAlfa requirePk($key, ConnectionInterface $con = null) Return the ChildHisSwelabAlfa by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOne(ConnectionInterface $con = null) Return the first ChildHisSwelabAlfa matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildHisSwelabAlfa requireOneById(int $ID) Return the first ChildHisSwelabAlfa filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneBySampleid(string $SampleID) Return the first ChildHisSwelabAlfa filtered by the SampleID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByDatentime(string $DateNTime) Return the first ChildHisSwelabAlfa filtered by the DateNTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByWbc(string $WBC) Return the first ChildHisSwelabAlfa filtered by the WBC column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByLym(string $LYM) Return the first ChildHisSwelabAlfa filtered by the LYM column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByLympa(string $LYMPa) Return the first ChildHisSwelabAlfa filtered by the LYMPa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByMid(string $MID) Return the first ChildHisSwelabAlfa filtered by the MID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByMidpa(string $MIDPa) Return the first ChildHisSwelabAlfa filtered by the MIDPa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByGra(string $GRA) Return the first ChildHisSwelabAlfa filtered by the GRA column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByGrapa(string $GRAPa) Return the first ChildHisSwelabAlfa filtered by the GRAPa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByHgb(string $HGB) Return the first ChildHisSwelabAlfa filtered by the HGB column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByMch(string $MCH) Return the first ChildHisSwelabAlfa filtered by the MCH column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByMchc(string $MCHC) Return the first ChildHisSwelabAlfa filtered by the MCHC column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByRbc(string $RBC) Return the first ChildHisSwelabAlfa filtered by the RBC column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByMcv(string $MCV) Return the first ChildHisSwelabAlfa filtered by the MCV column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByHct(string $HCT) Return the first ChildHisSwelabAlfa filtered by the HCT column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByRdwa(string $RDWa) Return the first ChildHisSwelabAlfa filtered by the RDWa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByRdw(string $RDW) Return the first ChildHisSwelabAlfa filtered by the RDW column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByPlt(int $PLT) Return the first ChildHisSwelabAlfa filtered by the PLT column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByMpv(string $MPV) Return the first ChildHisSwelabAlfa filtered by the MPV column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByPdw(string $PDW) Return the first ChildHisSwelabAlfa filtered by the PDW column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByPct(string $PCT) Return the first ChildHisSwelabAlfa filtered by the PCT column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildHisSwelabAlfa requireOneByLpcr(string $LPCR) Return the first ChildHisSwelabAlfa filtered by the LPCR column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildHisSwelabAlfa[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildHisSwelabAlfa objects based on current ModelCriteria
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findById(int $ID) Return ChildHisSwelabAlfa objects filtered by the ID column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findBySampleid(string $SampleID) Return ChildHisSwelabAlfa objects filtered by the SampleID column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByDatentime(string $DateNTime) Return ChildHisSwelabAlfa objects filtered by the DateNTime column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByWbc(string $WBC) Return ChildHisSwelabAlfa objects filtered by the WBC column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByLym(string $LYM) Return ChildHisSwelabAlfa objects filtered by the LYM column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByLympa(string $LYMPa) Return ChildHisSwelabAlfa objects filtered by the LYMPa column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByMid(string $MID) Return ChildHisSwelabAlfa objects filtered by the MID column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByMidpa(string $MIDPa) Return ChildHisSwelabAlfa objects filtered by the MIDPa column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByGra(string $GRA) Return ChildHisSwelabAlfa objects filtered by the GRA column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByGrapa(string $GRAPa) Return ChildHisSwelabAlfa objects filtered by the GRAPa column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByHgb(string $HGB) Return ChildHisSwelabAlfa objects filtered by the HGB column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByMch(string $MCH) Return ChildHisSwelabAlfa objects filtered by the MCH column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByMchc(string $MCHC) Return ChildHisSwelabAlfa objects filtered by the MCHC column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByRbc(string $RBC) Return ChildHisSwelabAlfa objects filtered by the RBC column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByMcv(string $MCV) Return ChildHisSwelabAlfa objects filtered by the MCV column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByHct(string $HCT) Return ChildHisSwelabAlfa objects filtered by the HCT column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByRdwa(string $RDWa) Return ChildHisSwelabAlfa objects filtered by the RDWa column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByRdw(string $RDW) Return ChildHisSwelabAlfa objects filtered by the RDW column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByPlt(int $PLT) Return ChildHisSwelabAlfa objects filtered by the PLT column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByMpv(string $MPV) Return ChildHisSwelabAlfa objects filtered by the MPV column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByPdw(string $PDW) Return ChildHisSwelabAlfa objects filtered by the PDW column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByPct(string $PCT) Return ChildHisSwelabAlfa objects filtered by the PCT column
 * @method     ChildHisSwelabAlfa[]|ObjectCollection findByLpcr(string $LPCR) Return ChildHisSwelabAlfa objects filtered by the LPCR column
 * @method     ChildHisSwelabAlfa[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class HisSwelabAlfaQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\HisSwelabAlfaQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\HisSwelabAlfa', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildHisSwelabAlfaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildHisSwelabAlfaQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildHisSwelabAlfaQuery) {
            return $criteria;
        }
        $query = new ChildHisSwelabAlfaQuery();
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
     * @return ChildHisSwelabAlfa|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(HisSwelabAlfaTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = HisSwelabAlfaTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildHisSwelabAlfa A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, SampleID, DateNTime, WBC, LYM, LYMPa, MID, MIDPa, GRA, GRAPa, HGB, MCH, MCHC, RBC, MCV, HCT, RDWa, RDW, PLT, MPV, PDW, PCT, LPCR FROM his_swelab_alfa WHERE ID = :p0';
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
            /** @var ChildHisSwelabAlfa $obj */
            $obj = new ChildHisSwelabAlfa();
            $obj->hydrate($row);
            HisSwelabAlfaTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildHisSwelabAlfa|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterBySampleid($sampleid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sampleid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_SAMPLEID, $sampleid, $comparison);
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
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByDatentime($datentime = null, $comparison = null)
    {
        if (is_array($datentime)) {
            $useMinMax = false;
            if (isset($datentime['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_DATENTIME, $datentime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datentime['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_DATENTIME, $datentime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_DATENTIME, $datentime, $comparison);
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
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByWbc($wbc = null, $comparison = null)
    {
        if (is_array($wbc)) {
            $useMinMax = false;
            if (isset($wbc['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_WBC, $wbc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wbc['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_WBC, $wbc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_WBC, $wbc, $comparison);
    }

    /**
     * Filter the query on the LYM column
     *
     * Example usage:
     * <code>
     * $query->filterByLym(1234); // WHERE LYM = 1234
     * $query->filterByLym(array(12, 34)); // WHERE LYM IN (12, 34)
     * $query->filterByLym(array('min' => 12)); // WHERE LYM > 12
     * </code>
     *
     * @param     mixed $lym The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByLym($lym = null, $comparison = null)
    {
        if (is_array($lym)) {
            $useMinMax = false;
            if (isset($lym['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_LYM, $lym['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lym['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_LYM, $lym['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_LYM, $lym, $comparison);
    }

    /**
     * Filter the query on the LYMPa column
     *
     * Example usage:
     * <code>
     * $query->filterByLympa(1234); // WHERE LYMPa = 1234
     * $query->filterByLympa(array(12, 34)); // WHERE LYMPa IN (12, 34)
     * $query->filterByLympa(array('min' => 12)); // WHERE LYMPa > 12
     * </code>
     *
     * @param     mixed $lympa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByLympa($lympa = null, $comparison = null)
    {
        if (is_array($lympa)) {
            $useMinMax = false;
            if (isset($lympa['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_LYMPA, $lympa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lympa['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_LYMPA, $lympa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_LYMPA, $lympa, $comparison);
    }

    /**
     * Filter the query on the MID column
     *
     * Example usage:
     * <code>
     * $query->filterByMid(1234); // WHERE MID = 1234
     * $query->filterByMid(array(12, 34)); // WHERE MID IN (12, 34)
     * $query->filterByMid(array('min' => 12)); // WHERE MID > 12
     * </code>
     *
     * @param     mixed $mid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByMid($mid = null, $comparison = null)
    {
        if (is_array($mid)) {
            $useMinMax = false;
            if (isset($mid['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MID, $mid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mid['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MID, $mid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MID, $mid, $comparison);
    }

    /**
     * Filter the query on the MIDPa column
     *
     * Example usage:
     * <code>
     * $query->filterByMidpa(1234); // WHERE MIDPa = 1234
     * $query->filterByMidpa(array(12, 34)); // WHERE MIDPa IN (12, 34)
     * $query->filterByMidpa(array('min' => 12)); // WHERE MIDPa > 12
     * </code>
     *
     * @param     mixed $midpa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByMidpa($midpa = null, $comparison = null)
    {
        if (is_array($midpa)) {
            $useMinMax = false;
            if (isset($midpa['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MIDPA, $midpa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($midpa['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MIDPA, $midpa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MIDPA, $midpa, $comparison);
    }

    /**
     * Filter the query on the GRA column
     *
     * Example usage:
     * <code>
     * $query->filterByGra(1234); // WHERE GRA = 1234
     * $query->filterByGra(array(12, 34)); // WHERE GRA IN (12, 34)
     * $query->filterByGra(array('min' => 12)); // WHERE GRA > 12
     * </code>
     *
     * @param     mixed $gra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByGra($gra = null, $comparison = null)
    {
        if (is_array($gra)) {
            $useMinMax = false;
            if (isset($gra['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_GRA, $gra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gra['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_GRA, $gra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_GRA, $gra, $comparison);
    }

    /**
     * Filter the query on the GRAPa column
     *
     * Example usage:
     * <code>
     * $query->filterByGrapa(1234); // WHERE GRAPa = 1234
     * $query->filterByGrapa(array(12, 34)); // WHERE GRAPa IN (12, 34)
     * $query->filterByGrapa(array('min' => 12)); // WHERE GRAPa > 12
     * </code>
     *
     * @param     mixed $grapa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByGrapa($grapa = null, $comparison = null)
    {
        if (is_array($grapa)) {
            $useMinMax = false;
            if (isset($grapa['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_GRAPA, $grapa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($grapa['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_GRAPA, $grapa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_GRAPA, $grapa, $comparison);
    }

    /**
     * Filter the query on the HGB column
     *
     * Example usage:
     * <code>
     * $query->filterByHgb(1234); // WHERE HGB = 1234
     * $query->filterByHgb(array(12, 34)); // WHERE HGB IN (12, 34)
     * $query->filterByHgb(array('min' => 12)); // WHERE HGB > 12
     * </code>
     *
     * @param     mixed $hgb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByHgb($hgb = null, $comparison = null)
    {
        if (is_array($hgb)) {
            $useMinMax = false;
            if (isset($hgb['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_HGB, $hgb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hgb['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_HGB, $hgb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_HGB, $hgb, $comparison);
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
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByMch($mch = null, $comparison = null)
    {
        if (is_array($mch)) {
            $useMinMax = false;
            if (isset($mch['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MCH, $mch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mch['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MCH, $mch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MCH, $mch, $comparison);
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
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByMchc($mchc = null, $comparison = null)
    {
        if (is_array($mchc)) {
            $useMinMax = false;
            if (isset($mchc['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MCHC, $mchc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mchc['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MCHC, $mchc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MCHC, $mchc, $comparison);
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
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByRbc($rbc = null, $comparison = null)
    {
        if (is_array($rbc)) {
            $useMinMax = false;
            if (isset($rbc['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_RBC, $rbc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rbc['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_RBC, $rbc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_RBC, $rbc, $comparison);
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
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByMcv($mcv = null, $comparison = null)
    {
        if (is_array($mcv)) {
            $useMinMax = false;
            if (isset($mcv['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MCV, $mcv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mcv['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MCV, $mcv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MCV, $mcv, $comparison);
    }

    /**
     * Filter the query on the HCT column
     *
     * Example usage:
     * <code>
     * $query->filterByHct(1234); // WHERE HCT = 1234
     * $query->filterByHct(array(12, 34)); // WHERE HCT IN (12, 34)
     * $query->filterByHct(array('min' => 12)); // WHERE HCT > 12
     * </code>
     *
     * @param     mixed $hct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByHct($hct = null, $comparison = null)
    {
        if (is_array($hct)) {
            $useMinMax = false;
            if (isset($hct['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_HCT, $hct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hct['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_HCT, $hct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_HCT, $hct, $comparison);
    }

    /**
     * Filter the query on the RDWa column
     *
     * Example usage:
     * <code>
     * $query->filterByRdwa(1234); // WHERE RDWa = 1234
     * $query->filterByRdwa(array(12, 34)); // WHERE RDWa IN (12, 34)
     * $query->filterByRdwa(array('min' => 12)); // WHERE RDWa > 12
     * </code>
     *
     * @param     mixed $rdwa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByRdwa($rdwa = null, $comparison = null)
    {
        if (is_array($rdwa)) {
            $useMinMax = false;
            if (isset($rdwa['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_RDWA, $rdwa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rdwa['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_RDWA, $rdwa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_RDWA, $rdwa, $comparison);
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
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByRdw($rdw = null, $comparison = null)
    {
        if (is_array($rdw)) {
            $useMinMax = false;
            if (isset($rdw['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_RDW, $rdw['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rdw['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_RDW, $rdw['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_RDW, $rdw, $comparison);
    }

    /**
     * Filter the query on the PLT column
     *
     * Example usage:
     * <code>
     * $query->filterByPlt(1234); // WHERE PLT = 1234
     * $query->filterByPlt(array(12, 34)); // WHERE PLT IN (12, 34)
     * $query->filterByPlt(array('min' => 12)); // WHERE PLT > 12
     * </code>
     *
     * @param     mixed $plt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByPlt($plt = null, $comparison = null)
    {
        if (is_array($plt)) {
            $useMinMax = false;
            if (isset($plt['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_PLT, $plt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($plt['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_PLT, $plt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_PLT, $plt, $comparison);
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
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByMpv($mpv = null, $comparison = null)
    {
        if (is_array($mpv)) {
            $useMinMax = false;
            if (isset($mpv['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MPV, $mpv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mpv['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MPV, $mpv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_MPV, $mpv, $comparison);
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
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByPdw($pdw = null, $comparison = null)
    {
        if (is_array($pdw)) {
            $useMinMax = false;
            if (isset($pdw['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_PDW, $pdw['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pdw['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_PDW, $pdw['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_PDW, $pdw, $comparison);
    }

    /**
     * Filter the query on the PCT column
     *
     * Example usage:
     * <code>
     * $query->filterByPct(1234); // WHERE PCT = 1234
     * $query->filterByPct(array(12, 34)); // WHERE PCT IN (12, 34)
     * $query->filterByPct(array('min' => 12)); // WHERE PCT > 12
     * </code>
     *
     * @param     mixed $pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByPct($pct = null, $comparison = null)
    {
        if (is_array($pct)) {
            $useMinMax = false;
            if (isset($pct['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_PCT, $pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pct['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_PCT, $pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_PCT, $pct, $comparison);
    }

    /**
     * Filter the query on the LPCR column
     *
     * Example usage:
     * <code>
     * $query->filterByLpcr(1234); // WHERE LPCR = 1234
     * $query->filterByLpcr(array(12, 34)); // WHERE LPCR IN (12, 34)
     * $query->filterByLpcr(array('min' => 12)); // WHERE LPCR > 12
     * </code>
     *
     * @param     mixed $lpcr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function filterByLpcr($lpcr = null, $comparison = null)
    {
        if (is_array($lpcr)) {
            $useMinMax = false;
            if (isset($lpcr['min'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_LPCR, $lpcr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lpcr['max'])) {
                $this->addUsingAlias(HisSwelabAlfaTableMap::COL_LPCR, $lpcr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HisSwelabAlfaTableMap::COL_LPCR, $lpcr, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildHisSwelabAlfa $hisSwelabAlfa Object to remove from the list of results
     *
     * @return $this|ChildHisSwelabAlfaQuery The current query, for fluid interface
     */
    public function prune($hisSwelabAlfa = null)
    {
        if ($hisSwelabAlfa) {
            $this->addUsingAlias(HisSwelabAlfaTableMap::COL_ID, $hisSwelabAlfa->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the his_swelab_alfa table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(HisSwelabAlfaTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            HisSwelabAlfaTableMap::clearInstancePool();
            HisSwelabAlfaTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(HisSwelabAlfaTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(HisSwelabAlfaTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            HisSwelabAlfaTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            HisSwelabAlfaTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // HisSwelabAlfaQuery
