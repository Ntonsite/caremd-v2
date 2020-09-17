<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareMedProductsMain as ChildCareMedProductsMain;
use CareMd\CareMd\CareMedProductsMainQuery as ChildCareMedProductsMainQuery;
use CareMd\CareMd\Map\CareMedProductsMainTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_med_products_main' table.
 *
 *
 *
 * @method     ChildCareMedProductsMainQuery orderByBestellnum($order = Criteria::ASC) Order by the bestellnum column
 * @method     ChildCareMedProductsMainQuery orderByArtikelnum($order = Criteria::ASC) Order by the artikelnum column
 * @method     ChildCareMedProductsMainQuery orderByIndustrynum($order = Criteria::ASC) Order by the industrynum column
 * @method     ChildCareMedProductsMainQuery orderByArtikelname($order = Criteria::ASC) Order by the artikelname column
 * @method     ChildCareMedProductsMainQuery orderByGeneric($order = Criteria::ASC) Order by the generic column
 * @method     ChildCareMedProductsMainQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareMedProductsMainQuery orderByPacking($order = Criteria::ASC) Order by the packing column
 * @method     ChildCareMedProductsMainQuery orderByMinorder($order = Criteria::ASC) Order by the minorder column
 * @method     ChildCareMedProductsMainQuery orderByMaxorder($order = Criteria::ASC) Order by the maxorder column
 * @method     ChildCareMedProductsMainQuery orderByProorder($order = Criteria::ASC) Order by the proorder column
 * @method     ChildCareMedProductsMainQuery orderByPicfile($order = Criteria::ASC) Order by the picfile column
 * @method     ChildCareMedProductsMainQuery orderByEncoder($order = Criteria::ASC) Order by the encoder column
 * @method     ChildCareMedProductsMainQuery orderByEncDate($order = Criteria::ASC) Order by the enc_date column
 * @method     ChildCareMedProductsMainQuery orderByEncTime($order = Criteria::ASC) Order by the enc_time column
 * @method     ChildCareMedProductsMainQuery orderByLockFlag($order = Criteria::ASC) Order by the lock_flag column
 * @method     ChildCareMedProductsMainQuery orderByMedgroup($order = Criteria::ASC) Order by the medgroup column
 * @method     ChildCareMedProductsMainQuery orderByCave($order = Criteria::ASC) Order by the cave column
 * @method     ChildCareMedProductsMainQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareMedProductsMainQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareMedProductsMainQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareMedProductsMainQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareMedProductsMainQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareMedProductsMainQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareMedProductsMainQuery groupByBestellnum() Group by the bestellnum column
 * @method     ChildCareMedProductsMainQuery groupByArtikelnum() Group by the artikelnum column
 * @method     ChildCareMedProductsMainQuery groupByIndustrynum() Group by the industrynum column
 * @method     ChildCareMedProductsMainQuery groupByArtikelname() Group by the artikelname column
 * @method     ChildCareMedProductsMainQuery groupByGeneric() Group by the generic column
 * @method     ChildCareMedProductsMainQuery groupByDescription() Group by the description column
 * @method     ChildCareMedProductsMainQuery groupByPacking() Group by the packing column
 * @method     ChildCareMedProductsMainQuery groupByMinorder() Group by the minorder column
 * @method     ChildCareMedProductsMainQuery groupByMaxorder() Group by the maxorder column
 * @method     ChildCareMedProductsMainQuery groupByProorder() Group by the proorder column
 * @method     ChildCareMedProductsMainQuery groupByPicfile() Group by the picfile column
 * @method     ChildCareMedProductsMainQuery groupByEncoder() Group by the encoder column
 * @method     ChildCareMedProductsMainQuery groupByEncDate() Group by the enc_date column
 * @method     ChildCareMedProductsMainQuery groupByEncTime() Group by the enc_time column
 * @method     ChildCareMedProductsMainQuery groupByLockFlag() Group by the lock_flag column
 * @method     ChildCareMedProductsMainQuery groupByMedgroup() Group by the medgroup column
 * @method     ChildCareMedProductsMainQuery groupByCave() Group by the cave column
 * @method     ChildCareMedProductsMainQuery groupByStatus() Group by the status column
 * @method     ChildCareMedProductsMainQuery groupByHistory() Group by the history column
 * @method     ChildCareMedProductsMainQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareMedProductsMainQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareMedProductsMainQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareMedProductsMainQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareMedProductsMainQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareMedProductsMainQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareMedProductsMainQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareMedProductsMainQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareMedProductsMainQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareMedProductsMainQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareMedProductsMain findOne(ConnectionInterface $con = null) Return the first ChildCareMedProductsMain matching the query
 * @method     ChildCareMedProductsMain findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareMedProductsMain matching the query, or a new ChildCareMedProductsMain object populated from the query conditions when no match is found
 *
 * @method     ChildCareMedProductsMain findOneByBestellnum(string $bestellnum) Return the first ChildCareMedProductsMain filtered by the bestellnum column
 * @method     ChildCareMedProductsMain findOneByArtikelnum(string $artikelnum) Return the first ChildCareMedProductsMain filtered by the artikelnum column
 * @method     ChildCareMedProductsMain findOneByIndustrynum(string $industrynum) Return the first ChildCareMedProductsMain filtered by the industrynum column
 * @method     ChildCareMedProductsMain findOneByArtikelname(string $artikelname) Return the first ChildCareMedProductsMain filtered by the artikelname column
 * @method     ChildCareMedProductsMain findOneByGeneric(string $generic) Return the first ChildCareMedProductsMain filtered by the generic column
 * @method     ChildCareMedProductsMain findOneByDescription(string $description) Return the first ChildCareMedProductsMain filtered by the description column
 * @method     ChildCareMedProductsMain findOneByPacking(string $packing) Return the first ChildCareMedProductsMain filtered by the packing column
 * @method     ChildCareMedProductsMain findOneByMinorder(int $minorder) Return the first ChildCareMedProductsMain filtered by the minorder column
 * @method     ChildCareMedProductsMain findOneByMaxorder(int $maxorder) Return the first ChildCareMedProductsMain filtered by the maxorder column
 * @method     ChildCareMedProductsMain findOneByProorder(string $proorder) Return the first ChildCareMedProductsMain filtered by the proorder column
 * @method     ChildCareMedProductsMain findOneByPicfile(string $picfile) Return the first ChildCareMedProductsMain filtered by the picfile column
 * @method     ChildCareMedProductsMain findOneByEncoder(string $encoder) Return the first ChildCareMedProductsMain filtered by the encoder column
 * @method     ChildCareMedProductsMain findOneByEncDate(string $enc_date) Return the first ChildCareMedProductsMain filtered by the enc_date column
 * @method     ChildCareMedProductsMain findOneByEncTime(string $enc_time) Return the first ChildCareMedProductsMain filtered by the enc_time column
 * @method     ChildCareMedProductsMain findOneByLockFlag(boolean $lock_flag) Return the first ChildCareMedProductsMain filtered by the lock_flag column
 * @method     ChildCareMedProductsMain findOneByMedgroup(string $medgroup) Return the first ChildCareMedProductsMain filtered by the medgroup column
 * @method     ChildCareMedProductsMain findOneByCave(string $cave) Return the first ChildCareMedProductsMain filtered by the cave column
 * @method     ChildCareMedProductsMain findOneByStatus(string $status) Return the first ChildCareMedProductsMain filtered by the status column
 * @method     ChildCareMedProductsMain findOneByHistory(string $history) Return the first ChildCareMedProductsMain filtered by the history column
 * @method     ChildCareMedProductsMain findOneByModifyId(string $modify_id) Return the first ChildCareMedProductsMain filtered by the modify_id column
 * @method     ChildCareMedProductsMain findOneByModifyTime(string $modify_time) Return the first ChildCareMedProductsMain filtered by the modify_time column
 * @method     ChildCareMedProductsMain findOneByCreateId(string $create_id) Return the first ChildCareMedProductsMain filtered by the create_id column
 * @method     ChildCareMedProductsMain findOneByCreateTime(string $create_time) Return the first ChildCareMedProductsMain filtered by the create_time column *

 * @method     ChildCareMedProductsMain requirePk($key, ConnectionInterface $con = null) Return the ChildCareMedProductsMain by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOne(ConnectionInterface $con = null) Return the first ChildCareMedProductsMain matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMedProductsMain requireOneByBestellnum(string $bestellnum) Return the first ChildCareMedProductsMain filtered by the bestellnum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByArtikelnum(string $artikelnum) Return the first ChildCareMedProductsMain filtered by the artikelnum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByIndustrynum(string $industrynum) Return the first ChildCareMedProductsMain filtered by the industrynum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByArtikelname(string $artikelname) Return the first ChildCareMedProductsMain filtered by the artikelname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByGeneric(string $generic) Return the first ChildCareMedProductsMain filtered by the generic column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByDescription(string $description) Return the first ChildCareMedProductsMain filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByPacking(string $packing) Return the first ChildCareMedProductsMain filtered by the packing column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByMinorder(int $minorder) Return the first ChildCareMedProductsMain filtered by the minorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByMaxorder(int $maxorder) Return the first ChildCareMedProductsMain filtered by the maxorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByProorder(string $proorder) Return the first ChildCareMedProductsMain filtered by the proorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByPicfile(string $picfile) Return the first ChildCareMedProductsMain filtered by the picfile column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByEncoder(string $encoder) Return the first ChildCareMedProductsMain filtered by the encoder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByEncDate(string $enc_date) Return the first ChildCareMedProductsMain filtered by the enc_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByEncTime(string $enc_time) Return the first ChildCareMedProductsMain filtered by the enc_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByLockFlag(boolean $lock_flag) Return the first ChildCareMedProductsMain filtered by the lock_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByMedgroup(string $medgroup) Return the first ChildCareMedProductsMain filtered by the medgroup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByCave(string $cave) Return the first ChildCareMedProductsMain filtered by the cave column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByStatus(string $status) Return the first ChildCareMedProductsMain filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByHistory(string $history) Return the first ChildCareMedProductsMain filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByModifyId(string $modify_id) Return the first ChildCareMedProductsMain filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByModifyTime(string $modify_time) Return the first ChildCareMedProductsMain filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByCreateId(string $create_id) Return the first ChildCareMedProductsMain filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareMedProductsMain requireOneByCreateTime(string $create_time) Return the first ChildCareMedProductsMain filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareMedProductsMain[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareMedProductsMain objects based on current ModelCriteria
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByBestellnum(string $bestellnum) Return ChildCareMedProductsMain objects filtered by the bestellnum column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByArtikelnum(string $artikelnum) Return ChildCareMedProductsMain objects filtered by the artikelnum column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByIndustrynum(string $industrynum) Return ChildCareMedProductsMain objects filtered by the industrynum column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByArtikelname(string $artikelname) Return ChildCareMedProductsMain objects filtered by the artikelname column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByGeneric(string $generic) Return ChildCareMedProductsMain objects filtered by the generic column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByDescription(string $description) Return ChildCareMedProductsMain objects filtered by the description column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByPacking(string $packing) Return ChildCareMedProductsMain objects filtered by the packing column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByMinorder(int $minorder) Return ChildCareMedProductsMain objects filtered by the minorder column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByMaxorder(int $maxorder) Return ChildCareMedProductsMain objects filtered by the maxorder column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByProorder(string $proorder) Return ChildCareMedProductsMain objects filtered by the proorder column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByPicfile(string $picfile) Return ChildCareMedProductsMain objects filtered by the picfile column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByEncoder(string $encoder) Return ChildCareMedProductsMain objects filtered by the encoder column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByEncDate(string $enc_date) Return ChildCareMedProductsMain objects filtered by the enc_date column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByEncTime(string $enc_time) Return ChildCareMedProductsMain objects filtered by the enc_time column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByLockFlag(boolean $lock_flag) Return ChildCareMedProductsMain objects filtered by the lock_flag column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByMedgroup(string $medgroup) Return ChildCareMedProductsMain objects filtered by the medgroup column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByCave(string $cave) Return ChildCareMedProductsMain objects filtered by the cave column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByStatus(string $status) Return ChildCareMedProductsMain objects filtered by the status column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByHistory(string $history) Return ChildCareMedProductsMain objects filtered by the history column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareMedProductsMain objects filtered by the modify_id column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareMedProductsMain objects filtered by the modify_time column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareMedProductsMain objects filtered by the create_id column
 * @method     ChildCareMedProductsMain[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareMedProductsMain objects filtered by the create_time column
 * @method     ChildCareMedProductsMain[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareMedProductsMainQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareMedProductsMainQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareMedProductsMain', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareMedProductsMainQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareMedProductsMainQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareMedProductsMainQuery) {
            return $criteria;
        }
        $query = new ChildCareMedProductsMainQuery();
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
     * @return ChildCareMedProductsMain|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareMedProductsMainTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareMedProductsMainTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareMedProductsMain A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT bestellnum, artikelnum, industrynum, artikelname, generic, description, packing, minorder, maxorder, proorder, picfile, encoder, enc_date, enc_time, lock_flag, medgroup, cave, status, history, modify_id, modify_time, create_id, create_time FROM care_med_products_main WHERE bestellnum = :p0';
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
            /** @var ChildCareMedProductsMain $obj */
            $obj = new ChildCareMedProductsMain();
            $obj->hydrate($row);
            CareMedProductsMainTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareMedProductsMain|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_BESTELLNUM, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_BESTELLNUM, $keys, Criteria::IN);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByBestellnum($bestellnum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bestellnum)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_BESTELLNUM, $bestellnum, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByArtikelnum($artikelnum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artikelnum)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_ARTIKELNUM, $artikelnum, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByIndustrynum($industrynum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($industrynum)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_INDUSTRYNUM, $industrynum, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByArtikelname($artikelname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artikelname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_ARTIKELNAME, $artikelname, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByGeneric($generic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($generic)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_GENERIC, $generic, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_DESCRIPTION, $description, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByPacking($packing = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($packing)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_PACKING, $packing, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByMinorder($minorder = null, $comparison = null)
    {
        if (is_array($minorder)) {
            $useMinMax = false;
            if (isset($minorder['min'])) {
                $this->addUsingAlias(CareMedProductsMainTableMap::COL_MINORDER, $minorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minorder['max'])) {
                $this->addUsingAlias(CareMedProductsMainTableMap::COL_MINORDER, $minorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_MINORDER, $minorder, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByMaxorder($maxorder = null, $comparison = null)
    {
        if (is_array($maxorder)) {
            $useMinMax = false;
            if (isset($maxorder['min'])) {
                $this->addUsingAlias(CareMedProductsMainTableMap::COL_MAXORDER, $maxorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxorder['max'])) {
                $this->addUsingAlias(CareMedProductsMainTableMap::COL_MAXORDER, $maxorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_MAXORDER, $maxorder, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByProorder($proorder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proorder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_PROORDER, $proorder, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByPicfile($picfile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picfile)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_PICFILE, $picfile, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByEncoder($encoder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encoder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_ENCODER, $encoder, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByEncDate($encDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encDate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_ENC_DATE, $encDate, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByEncTime($encTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encTime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_ENC_TIME, $encTime, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByLockFlag($lockFlag = null, $comparison = null)
    {
        if (is_string($lockFlag)) {
            $lockFlag = in_array(strtolower($lockFlag), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_LOCK_FLAG, $lockFlag, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByMedgroup($medgroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medgroup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_MEDGROUP, $medgroup, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByCave($cave = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cave)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_CAVE, $cave, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareMedProductsMainTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareMedProductsMainTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareMedProductsMainTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareMedProductsMainTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareMedProductsMainTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareMedProductsMain $careMedProductsMain Object to remove from the list of results
     *
     * @return $this|ChildCareMedProductsMainQuery The current query, for fluid interface
     */
    public function prune($careMedProductsMain = null)
    {
        if ($careMedProductsMain) {
            $this->addUsingAlias(CareMedProductsMainTableMap::COL_BESTELLNUM, $careMedProductsMain->getBestellnum(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_med_products_main table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedProductsMainTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareMedProductsMainTableMap::clearInstancePool();
            CareMedProductsMainTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareMedProductsMainTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareMedProductsMainTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareMedProductsMainTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareMedProductsMainTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareMedProductsMainQuery
