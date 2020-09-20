<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CarePharmaProductsMain as ChildCarePharmaProductsMain;
use CareMd\CareMd\CarePharmaProductsMainQuery as ChildCarePharmaProductsMainQuery;
use CareMd\CareMd\Map\CarePharmaProductsMainTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_pharma_products_main' table.
 *
 *
 *
 * @method     ChildCarePharmaProductsMainQuery orderByBestellnum($order = Criteria::ASC) Order by the bestellnum column
 * @method     ChildCarePharmaProductsMainQuery orderByArtikelnum($order = Criteria::ASC) Order by the artikelnum column
 * @method     ChildCarePharmaProductsMainQuery orderByIndustrynum($order = Criteria::ASC) Order by the industrynum column
 * @method     ChildCarePharmaProductsMainQuery orderByArtikelname($order = Criteria::ASC) Order by the artikelname column
 * @method     ChildCarePharmaProductsMainQuery orderByGeneric($order = Criteria::ASC) Order by the generic column
 * @method     ChildCarePharmaProductsMainQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCarePharmaProductsMainQuery orderByPacking($order = Criteria::ASC) Order by the packing column
 * @method     ChildCarePharmaProductsMainQuery orderByMinorder($order = Criteria::ASC) Order by the minorder column
 * @method     ChildCarePharmaProductsMainQuery orderByMaxorder($order = Criteria::ASC) Order by the maxorder column
 * @method     ChildCarePharmaProductsMainQuery orderByProorder($order = Criteria::ASC) Order by the proorder column
 * @method     ChildCarePharmaProductsMainQuery orderByPicfile($order = Criteria::ASC) Order by the picfile column
 * @method     ChildCarePharmaProductsMainQuery orderByEncoder($order = Criteria::ASC) Order by the encoder column
 * @method     ChildCarePharmaProductsMainQuery orderByEncDate($order = Criteria::ASC) Order by the enc_date column
 * @method     ChildCarePharmaProductsMainQuery orderByEncTime($order = Criteria::ASC) Order by the enc_time column
 * @method     ChildCarePharmaProductsMainQuery orderByLockFlag($order = Criteria::ASC) Order by the lock_flag column
 * @method     ChildCarePharmaProductsMainQuery orderByMedgroup($order = Criteria::ASC) Order by the medgroup column
 * @method     ChildCarePharmaProductsMainQuery orderByCave($order = Criteria::ASC) Order by the cave column
 * @method     ChildCarePharmaProductsMainQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCarePharmaProductsMainQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCarePharmaProductsMainQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCarePharmaProductsMainQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCarePharmaProductsMainQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCarePharmaProductsMainQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCarePharmaProductsMainQuery groupByBestellnum() Group by the bestellnum column
 * @method     ChildCarePharmaProductsMainQuery groupByArtikelnum() Group by the artikelnum column
 * @method     ChildCarePharmaProductsMainQuery groupByIndustrynum() Group by the industrynum column
 * @method     ChildCarePharmaProductsMainQuery groupByArtikelname() Group by the artikelname column
 * @method     ChildCarePharmaProductsMainQuery groupByGeneric() Group by the generic column
 * @method     ChildCarePharmaProductsMainQuery groupByDescription() Group by the description column
 * @method     ChildCarePharmaProductsMainQuery groupByPacking() Group by the packing column
 * @method     ChildCarePharmaProductsMainQuery groupByMinorder() Group by the minorder column
 * @method     ChildCarePharmaProductsMainQuery groupByMaxorder() Group by the maxorder column
 * @method     ChildCarePharmaProductsMainQuery groupByProorder() Group by the proorder column
 * @method     ChildCarePharmaProductsMainQuery groupByPicfile() Group by the picfile column
 * @method     ChildCarePharmaProductsMainQuery groupByEncoder() Group by the encoder column
 * @method     ChildCarePharmaProductsMainQuery groupByEncDate() Group by the enc_date column
 * @method     ChildCarePharmaProductsMainQuery groupByEncTime() Group by the enc_time column
 * @method     ChildCarePharmaProductsMainQuery groupByLockFlag() Group by the lock_flag column
 * @method     ChildCarePharmaProductsMainQuery groupByMedgroup() Group by the medgroup column
 * @method     ChildCarePharmaProductsMainQuery groupByCave() Group by the cave column
 * @method     ChildCarePharmaProductsMainQuery groupByStatus() Group by the status column
 * @method     ChildCarePharmaProductsMainQuery groupByHistory() Group by the history column
 * @method     ChildCarePharmaProductsMainQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCarePharmaProductsMainQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCarePharmaProductsMainQuery groupByCreateId() Group by the create_id column
 * @method     ChildCarePharmaProductsMainQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCarePharmaProductsMainQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCarePharmaProductsMainQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCarePharmaProductsMainQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCarePharmaProductsMainQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCarePharmaProductsMainQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCarePharmaProductsMainQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCarePharmaProductsMain findOne(ConnectionInterface $con = null) Return the first ChildCarePharmaProductsMain matching the query
 * @method     ChildCarePharmaProductsMain findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCarePharmaProductsMain matching the query, or a new ChildCarePharmaProductsMain object populated from the query conditions when no match is found
 *
 * @method     ChildCarePharmaProductsMain findOneByBestellnum(string $bestellnum) Return the first ChildCarePharmaProductsMain filtered by the bestellnum column
 * @method     ChildCarePharmaProductsMain findOneByArtikelnum(string $artikelnum) Return the first ChildCarePharmaProductsMain filtered by the artikelnum column
 * @method     ChildCarePharmaProductsMain findOneByIndustrynum(string $industrynum) Return the first ChildCarePharmaProductsMain filtered by the industrynum column
 * @method     ChildCarePharmaProductsMain findOneByArtikelname(string $artikelname) Return the first ChildCarePharmaProductsMain filtered by the artikelname column
 * @method     ChildCarePharmaProductsMain findOneByGeneric(string $generic) Return the first ChildCarePharmaProductsMain filtered by the generic column
 * @method     ChildCarePharmaProductsMain findOneByDescription(string $description) Return the first ChildCarePharmaProductsMain filtered by the description column
 * @method     ChildCarePharmaProductsMain findOneByPacking(string $packing) Return the first ChildCarePharmaProductsMain filtered by the packing column
 * @method     ChildCarePharmaProductsMain findOneByMinorder(int $minorder) Return the first ChildCarePharmaProductsMain filtered by the minorder column
 * @method     ChildCarePharmaProductsMain findOneByMaxorder(int $maxorder) Return the first ChildCarePharmaProductsMain filtered by the maxorder column
 * @method     ChildCarePharmaProductsMain findOneByProorder(string $proorder) Return the first ChildCarePharmaProductsMain filtered by the proorder column
 * @method     ChildCarePharmaProductsMain findOneByPicfile(string $picfile) Return the first ChildCarePharmaProductsMain filtered by the picfile column
 * @method     ChildCarePharmaProductsMain findOneByEncoder(string $encoder) Return the first ChildCarePharmaProductsMain filtered by the encoder column
 * @method     ChildCarePharmaProductsMain findOneByEncDate(string $enc_date) Return the first ChildCarePharmaProductsMain filtered by the enc_date column
 * @method     ChildCarePharmaProductsMain findOneByEncTime(string $enc_time) Return the first ChildCarePharmaProductsMain filtered by the enc_time column
 * @method     ChildCarePharmaProductsMain findOneByLockFlag(boolean $lock_flag) Return the first ChildCarePharmaProductsMain filtered by the lock_flag column
 * @method     ChildCarePharmaProductsMain findOneByMedgroup(string $medgroup) Return the first ChildCarePharmaProductsMain filtered by the medgroup column
 * @method     ChildCarePharmaProductsMain findOneByCave(string $cave) Return the first ChildCarePharmaProductsMain filtered by the cave column
 * @method     ChildCarePharmaProductsMain findOneByStatus(string $status) Return the first ChildCarePharmaProductsMain filtered by the status column
 * @method     ChildCarePharmaProductsMain findOneByHistory(string $history) Return the first ChildCarePharmaProductsMain filtered by the history column
 * @method     ChildCarePharmaProductsMain findOneByModifyId(string $modify_id) Return the first ChildCarePharmaProductsMain filtered by the modify_id column
 * @method     ChildCarePharmaProductsMain findOneByModifyTime(string $modify_time) Return the first ChildCarePharmaProductsMain filtered by the modify_time column
 * @method     ChildCarePharmaProductsMain findOneByCreateId(string $create_id) Return the first ChildCarePharmaProductsMain filtered by the create_id column
 * @method     ChildCarePharmaProductsMain findOneByCreateTime(string $create_time) Return the first ChildCarePharmaProductsMain filtered by the create_time column *

 * @method     ChildCarePharmaProductsMain requirePk($key, ConnectionInterface $con = null) Return the ChildCarePharmaProductsMain by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOne(ConnectionInterface $con = null) Return the first ChildCarePharmaProductsMain matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePharmaProductsMain requireOneByBestellnum(string $bestellnum) Return the first ChildCarePharmaProductsMain filtered by the bestellnum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByArtikelnum(string $artikelnum) Return the first ChildCarePharmaProductsMain filtered by the artikelnum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByIndustrynum(string $industrynum) Return the first ChildCarePharmaProductsMain filtered by the industrynum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByArtikelname(string $artikelname) Return the first ChildCarePharmaProductsMain filtered by the artikelname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByGeneric(string $generic) Return the first ChildCarePharmaProductsMain filtered by the generic column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByDescription(string $description) Return the first ChildCarePharmaProductsMain filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByPacking(string $packing) Return the first ChildCarePharmaProductsMain filtered by the packing column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByMinorder(int $minorder) Return the first ChildCarePharmaProductsMain filtered by the minorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByMaxorder(int $maxorder) Return the first ChildCarePharmaProductsMain filtered by the maxorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByProorder(string $proorder) Return the first ChildCarePharmaProductsMain filtered by the proorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByPicfile(string $picfile) Return the first ChildCarePharmaProductsMain filtered by the picfile column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByEncoder(string $encoder) Return the first ChildCarePharmaProductsMain filtered by the encoder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByEncDate(string $enc_date) Return the first ChildCarePharmaProductsMain filtered by the enc_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByEncTime(string $enc_time) Return the first ChildCarePharmaProductsMain filtered by the enc_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByLockFlag(boolean $lock_flag) Return the first ChildCarePharmaProductsMain filtered by the lock_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByMedgroup(string $medgroup) Return the first ChildCarePharmaProductsMain filtered by the medgroup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByCave(string $cave) Return the first ChildCarePharmaProductsMain filtered by the cave column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByStatus(string $status) Return the first ChildCarePharmaProductsMain filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByHistory(string $history) Return the first ChildCarePharmaProductsMain filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByModifyId(string $modify_id) Return the first ChildCarePharmaProductsMain filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByModifyTime(string $modify_time) Return the first ChildCarePharmaProductsMain filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByCreateId(string $create_id) Return the first ChildCarePharmaProductsMain filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePharmaProductsMain requireOneByCreateTime(string $create_time) Return the first ChildCarePharmaProductsMain filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCarePharmaProductsMain objects based on current ModelCriteria
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByBestellnum(string $bestellnum) Return ChildCarePharmaProductsMain objects filtered by the bestellnum column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByArtikelnum(string $artikelnum) Return ChildCarePharmaProductsMain objects filtered by the artikelnum column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByIndustrynum(string $industrynum) Return ChildCarePharmaProductsMain objects filtered by the industrynum column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByArtikelname(string $artikelname) Return ChildCarePharmaProductsMain objects filtered by the artikelname column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByGeneric(string $generic) Return ChildCarePharmaProductsMain objects filtered by the generic column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByDescription(string $description) Return ChildCarePharmaProductsMain objects filtered by the description column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByPacking(string $packing) Return ChildCarePharmaProductsMain objects filtered by the packing column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByMinorder(int $minorder) Return ChildCarePharmaProductsMain objects filtered by the minorder column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByMaxorder(int $maxorder) Return ChildCarePharmaProductsMain objects filtered by the maxorder column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByProorder(string $proorder) Return ChildCarePharmaProductsMain objects filtered by the proorder column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByPicfile(string $picfile) Return ChildCarePharmaProductsMain objects filtered by the picfile column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByEncoder(string $encoder) Return ChildCarePharmaProductsMain objects filtered by the encoder column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByEncDate(string $enc_date) Return ChildCarePharmaProductsMain objects filtered by the enc_date column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByEncTime(string $enc_time) Return ChildCarePharmaProductsMain objects filtered by the enc_time column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByLockFlag(boolean $lock_flag) Return ChildCarePharmaProductsMain objects filtered by the lock_flag column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByMedgroup(string $medgroup) Return ChildCarePharmaProductsMain objects filtered by the medgroup column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByCave(string $cave) Return ChildCarePharmaProductsMain objects filtered by the cave column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByStatus(string $status) Return ChildCarePharmaProductsMain objects filtered by the status column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByHistory(string $history) Return ChildCarePharmaProductsMain objects filtered by the history column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCarePharmaProductsMain objects filtered by the modify_id column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCarePharmaProductsMain objects filtered by the modify_time column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByCreateId(string $create_id) Return ChildCarePharmaProductsMain objects filtered by the create_id column
 * @method     ChildCarePharmaProductsMain[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCarePharmaProductsMain objects filtered by the create_time column
 * @method     ChildCarePharmaProductsMain[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CarePharmaProductsMainQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CarePharmaProductsMainQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CarePharmaProductsMain', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCarePharmaProductsMainQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCarePharmaProductsMainQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCarePharmaProductsMainQuery) {
            return $criteria;
        }
        $query = new ChildCarePharmaProductsMainQuery();
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
     * @return ChildCarePharmaProductsMain|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CarePharmaProductsMainTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CarePharmaProductsMainTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCarePharmaProductsMain A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT bestellnum, artikelnum, industrynum, artikelname, generic, description, packing, minorder, maxorder, proorder, picfile, encoder, enc_date, enc_time, lock_flag, medgroup, cave, status, history, modify_id, modify_time, create_id, create_time FROM care_pharma_products_main WHERE bestellnum = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCarePharmaProductsMain $obj */
            $obj = new ChildCarePharmaProductsMain();
            $obj->hydrate($row);
            CarePharmaProductsMainTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCarePharmaProductsMain|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_BESTELLNUM, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_BESTELLNUM, $keys, Criteria::IN);
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
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByBestellnum($bestellnum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bestellnum)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_BESTELLNUM, $bestellnum, $comparison);
    }

    /**
     * Filter the query on the artikelnum column
     *
     * Example usage:
     * <code>
     * $query->filterByArtikelnum('fooValue');   // WHERE artikelnum = 'fooValue'
     * $query->filterByArtikelnum('%fooValue%', Criteria::LIKE); // WHERE artikelnum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artikelnum The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByArtikelnum($artikelnum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artikelnum)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_ARTIKELNUM, $artikelnum, $comparison);
    }

    /**
     * Filter the query on the industrynum column
     *
     * Example usage:
     * <code>
     * $query->filterByIndustrynum('fooValue');   // WHERE industrynum = 'fooValue'
     * $query->filterByIndustrynum('%fooValue%', Criteria::LIKE); // WHERE industrynum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $industrynum The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByIndustrynum($industrynum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($industrynum)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_INDUSTRYNUM, $industrynum, $comparison);
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
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByArtikelname($artikelname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artikelname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_ARTIKELNAME, $artikelname, $comparison);
    }

    /**
     * Filter the query on the generic column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneric('fooValue');   // WHERE generic = 'fooValue'
     * $query->filterByGeneric('%fooValue%', Criteria::LIKE); // WHERE generic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $generic The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByGeneric($generic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($generic)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_GENERIC, $generic, $comparison);
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
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the packing column
     *
     * Example usage:
     * <code>
     * $query->filterByPacking('fooValue');   // WHERE packing = 'fooValue'
     * $query->filterByPacking('%fooValue%', Criteria::LIKE); // WHERE packing LIKE '%fooValue%'
     * </code>
     *
     * @param     string $packing The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByPacking($packing = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($packing)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_PACKING, $packing, $comparison);
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
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByMinorder($minorder = null, $comparison = null)
    {
        if (is_array($minorder)) {
            $useMinMax = false;
            if (isset($minorder['min'])) {
                $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_MINORDER, $minorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minorder['max'])) {
                $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_MINORDER, $minorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_MINORDER, $minorder, $comparison);
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
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByMaxorder($maxorder = null, $comparison = null)
    {
        if (is_array($maxorder)) {
            $useMinMax = false;
            if (isset($maxorder['min'])) {
                $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_MAXORDER, $maxorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxorder['max'])) {
                $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_MAXORDER, $maxorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_MAXORDER, $maxorder, $comparison);
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
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByProorder($proorder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proorder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_PROORDER, $proorder, $comparison);
    }

    /**
     * Filter the query on the picfile column
     *
     * Example usage:
     * <code>
     * $query->filterByPicfile('fooValue');   // WHERE picfile = 'fooValue'
     * $query->filterByPicfile('%fooValue%', Criteria::LIKE); // WHERE picfile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picfile The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByPicfile($picfile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picfile)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_PICFILE, $picfile, $comparison);
    }

    /**
     * Filter the query on the encoder column
     *
     * Example usage:
     * <code>
     * $query->filterByEncoder('fooValue');   // WHERE encoder = 'fooValue'
     * $query->filterByEncoder('%fooValue%', Criteria::LIKE); // WHERE encoder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encoder The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByEncoder($encoder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encoder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_ENCODER, $encoder, $comparison);
    }

    /**
     * Filter the query on the enc_date column
     *
     * Example usage:
     * <code>
     * $query->filterByEncDate('fooValue');   // WHERE enc_date = 'fooValue'
     * $query->filterByEncDate('%fooValue%', Criteria::LIKE); // WHERE enc_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encDate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByEncDate($encDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encDate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_ENC_DATE, $encDate, $comparison);
    }

    /**
     * Filter the query on the enc_time column
     *
     * Example usage:
     * <code>
     * $query->filterByEncTime('fooValue');   // WHERE enc_time = 'fooValue'
     * $query->filterByEncTime('%fooValue%', Criteria::LIKE); // WHERE enc_time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encTime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByEncTime($encTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_ENC_TIME, $encTime, $comparison);
    }

    /**
     * Filter the query on the lock_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByLockFlag(true); // WHERE lock_flag = true
     * $query->filterByLockFlag('yes'); // WHERE lock_flag = true
     * </code>
     *
     * @param     boolean|string $lockFlag The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByLockFlag($lockFlag = null, $comparison = null)
    {
        if (is_string($lockFlag)) {
            $lockFlag = in_array(strtolower($lockFlag), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_LOCK_FLAG, $lockFlag, $comparison);
    }

    /**
     * Filter the query on the medgroup column
     *
     * Example usage:
     * <code>
     * $query->filterByMedgroup('fooValue');   // WHERE medgroup = 'fooValue'
     * $query->filterByMedgroup('%fooValue%', Criteria::LIKE); // WHERE medgroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medgroup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByMedgroup($medgroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medgroup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_MEDGROUP, $medgroup, $comparison);
    }

    /**
     * Filter the query on the cave column
     *
     * Example usage:
     * <code>
     * $query->filterByCave('fooValue');   // WHERE cave = 'fooValue'
     * $query->filterByCave('%fooValue%', Criteria::LIKE); // WHERE cave LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cave The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByCave($cave = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cave)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_CAVE, $cave, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%', Criteria::LIKE); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the history column
     *
     * Example usage:
     * <code>
     * $query->filterByHistory('fooValue');   // WHERE history = 'fooValue'
     * $query->filterByHistory('%fooValue%', Criteria::LIKE); // WHERE history LIKE '%fooValue%'
     * </code>
     *
     * @param     string $history The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Filter the query on the modify_id column
     *
     * Example usage:
     * <code>
     * $query->filterByModifyId('fooValue');   // WHERE modify_id = 'fooValue'
     * $query->filterByModifyId('%fooValue%', Criteria::LIKE); // WHERE modify_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifyId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_MODIFY_ID, $modifyId, $comparison);
    }

    /**
     * Filter the query on the modify_time column
     *
     * Example usage:
     * <code>
     * $query->filterByModifyTime('2011-03-14'); // WHERE modify_time = '2011-03-14'
     * $query->filterByModifyTime('now'); // WHERE modify_time = '2011-03-14'
     * $query->filterByModifyTime(array('max' => 'yesterday')); // WHERE modify_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $modifyTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_CREATE_ID, $createId, $comparison);
    }

    /**
     * Filter the query on the create_time column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateTime('2011-03-14'); // WHERE create_time = '2011-03-14'
     * $query->filterByCreateTime('now'); // WHERE create_time = '2011-03-14'
     * $query->filterByCreateTime(array('max' => 'yesterday')); // WHERE create_time > '2011-03-13'
     * </code>
     *
     * @param     mixed $createTime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCarePharmaProductsMain $carePharmaProductsMain Object to remove from the list of results
     *
     * @return $this|ChildCarePharmaProductsMainQuery The current query, for fluid interface
     */
    public function prune($carePharmaProductsMain = null)
    {
        if ($carePharmaProductsMain) {
            $this->addUsingAlias(CarePharmaProductsMainTableMap::COL_BESTELLNUM, $carePharmaProductsMain->getBestellnum(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_pharma_products_main table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePharmaProductsMainTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CarePharmaProductsMainTableMap::clearInstancePool();
            CarePharmaProductsMainTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePharmaProductsMainTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CarePharmaProductsMainTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CarePharmaProductsMainTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CarePharmaProductsMainTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CarePharmaProductsMainQuery
