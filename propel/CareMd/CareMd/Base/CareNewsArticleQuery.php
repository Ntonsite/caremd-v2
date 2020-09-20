<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareNewsArticle as ChildCareNewsArticle;
use CareMd\CareMd\CareNewsArticleQuery as ChildCareNewsArticleQuery;
use CareMd\CareMd\Map\CareNewsArticleTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_news_article' table.
 *
 *
 *
 * @method     ChildCareNewsArticleQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareNewsArticleQuery orderByLang($order = Criteria::ASC) Order by the lang column
 * @method     ChildCareNewsArticleQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareNewsArticleQuery orderByCategory($order = Criteria::ASC) Order by the category column
 * @method     ChildCareNewsArticleQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareNewsArticleQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     ChildCareNewsArticleQuery orderByPreface($order = Criteria::ASC) Order by the preface column
 * @method     ChildCareNewsArticleQuery orderByBody($order = Criteria::ASC) Order by the body column
 * @method     ChildCareNewsArticleQuery orderByPic($order = Criteria::ASC) Order by the pic column
 * @method     ChildCareNewsArticleQuery orderByPicMime($order = Criteria::ASC) Order by the pic_mime column
 * @method     ChildCareNewsArticleQuery orderByArtNum($order = Criteria::ASC) Order by the art_num column
 * @method     ChildCareNewsArticleQuery orderByHeadFile($order = Criteria::ASC) Order by the head_file column
 * @method     ChildCareNewsArticleQuery orderByMainFile($order = Criteria::ASC) Order by the main_file column
 * @method     ChildCareNewsArticleQuery orderByPicFile($order = Criteria::ASC) Order by the pic_file column
 * @method     ChildCareNewsArticleQuery orderByAuthor($order = Criteria::ASC) Order by the author column
 * @method     ChildCareNewsArticleQuery orderBySubmitDate($order = Criteria::ASC) Order by the submit_date column
 * @method     ChildCareNewsArticleQuery orderByEncodeDate($order = Criteria::ASC) Order by the encode_date column
 * @method     ChildCareNewsArticleQuery orderByPublishDate($order = Criteria::ASC) Order by the publish_date column
 * @method     ChildCareNewsArticleQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareNewsArticleQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareNewsArticleQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareNewsArticleQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareNewsArticleQuery groupByNr() Group by the nr column
 * @method     ChildCareNewsArticleQuery groupByLang() Group by the lang column
 * @method     ChildCareNewsArticleQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareNewsArticleQuery groupByCategory() Group by the category column
 * @method     ChildCareNewsArticleQuery groupByStatus() Group by the status column
 * @method     ChildCareNewsArticleQuery groupByTitle() Group by the title column
 * @method     ChildCareNewsArticleQuery groupByPreface() Group by the preface column
 * @method     ChildCareNewsArticleQuery groupByBody() Group by the body column
 * @method     ChildCareNewsArticleQuery groupByPic() Group by the pic column
 * @method     ChildCareNewsArticleQuery groupByPicMime() Group by the pic_mime column
 * @method     ChildCareNewsArticleQuery groupByArtNum() Group by the art_num column
 * @method     ChildCareNewsArticleQuery groupByHeadFile() Group by the head_file column
 * @method     ChildCareNewsArticleQuery groupByMainFile() Group by the main_file column
 * @method     ChildCareNewsArticleQuery groupByPicFile() Group by the pic_file column
 * @method     ChildCareNewsArticleQuery groupByAuthor() Group by the author column
 * @method     ChildCareNewsArticleQuery groupBySubmitDate() Group by the submit_date column
 * @method     ChildCareNewsArticleQuery groupByEncodeDate() Group by the encode_date column
 * @method     ChildCareNewsArticleQuery groupByPublishDate() Group by the publish_date column
 * @method     ChildCareNewsArticleQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareNewsArticleQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareNewsArticleQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareNewsArticleQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareNewsArticleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareNewsArticleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareNewsArticleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareNewsArticleQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareNewsArticleQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareNewsArticleQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareNewsArticle findOne(ConnectionInterface $con = null) Return the first ChildCareNewsArticle matching the query
 * @method     ChildCareNewsArticle findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareNewsArticle matching the query, or a new ChildCareNewsArticle object populated from the query conditions when no match is found
 *
 * @method     ChildCareNewsArticle findOneByNr(int $nr) Return the first ChildCareNewsArticle filtered by the nr column
 * @method     ChildCareNewsArticle findOneByLang(string $lang) Return the first ChildCareNewsArticle filtered by the lang column
 * @method     ChildCareNewsArticle findOneByDeptNr(int $dept_nr) Return the first ChildCareNewsArticle filtered by the dept_nr column
 * @method     ChildCareNewsArticle findOneByCategory(string $category) Return the first ChildCareNewsArticle filtered by the category column
 * @method     ChildCareNewsArticle findOneByStatus(string $status) Return the first ChildCareNewsArticle filtered by the status column
 * @method     ChildCareNewsArticle findOneByTitle(string $title) Return the first ChildCareNewsArticle filtered by the title column
 * @method     ChildCareNewsArticle findOneByPreface(string $preface) Return the first ChildCareNewsArticle filtered by the preface column
 * @method     ChildCareNewsArticle findOneByBody(string $body) Return the first ChildCareNewsArticle filtered by the body column
 * @method     ChildCareNewsArticle findOneByPic(resource $pic) Return the first ChildCareNewsArticle filtered by the pic column
 * @method     ChildCareNewsArticle findOneByPicMime(string $pic_mime) Return the first ChildCareNewsArticle filtered by the pic_mime column
 * @method     ChildCareNewsArticle findOneByArtNum(boolean $art_num) Return the first ChildCareNewsArticle filtered by the art_num column
 * @method     ChildCareNewsArticle findOneByHeadFile(string $head_file) Return the first ChildCareNewsArticle filtered by the head_file column
 * @method     ChildCareNewsArticle findOneByMainFile(string $main_file) Return the first ChildCareNewsArticle filtered by the main_file column
 * @method     ChildCareNewsArticle findOneByPicFile(string $pic_file) Return the first ChildCareNewsArticle filtered by the pic_file column
 * @method     ChildCareNewsArticle findOneByAuthor(string $author) Return the first ChildCareNewsArticle filtered by the author column
 * @method     ChildCareNewsArticle findOneBySubmitDate(string $submit_date) Return the first ChildCareNewsArticle filtered by the submit_date column
 * @method     ChildCareNewsArticle findOneByEncodeDate(string $encode_date) Return the first ChildCareNewsArticle filtered by the encode_date column
 * @method     ChildCareNewsArticle findOneByPublishDate(string $publish_date) Return the first ChildCareNewsArticle filtered by the publish_date column
 * @method     ChildCareNewsArticle findOneByModifyId(string $modify_id) Return the first ChildCareNewsArticle filtered by the modify_id column
 * @method     ChildCareNewsArticle findOneByModifyTime(string $modify_time) Return the first ChildCareNewsArticle filtered by the modify_time column
 * @method     ChildCareNewsArticle findOneByCreateId(string $create_id) Return the first ChildCareNewsArticle filtered by the create_id column
 * @method     ChildCareNewsArticle findOneByCreateTime(string $create_time) Return the first ChildCareNewsArticle filtered by the create_time column *

 * @method     ChildCareNewsArticle requirePk($key, ConnectionInterface $con = null) Return the ChildCareNewsArticle by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOne(ConnectionInterface $con = null) Return the first ChildCareNewsArticle matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareNewsArticle requireOneByNr(int $nr) Return the first ChildCareNewsArticle filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByLang(string $lang) Return the first ChildCareNewsArticle filtered by the lang column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByDeptNr(int $dept_nr) Return the first ChildCareNewsArticle filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByCategory(string $category) Return the first ChildCareNewsArticle filtered by the category column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByStatus(string $status) Return the first ChildCareNewsArticle filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByTitle(string $title) Return the first ChildCareNewsArticle filtered by the title column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByPreface(string $preface) Return the first ChildCareNewsArticle filtered by the preface column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByBody(string $body) Return the first ChildCareNewsArticle filtered by the body column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByPic(resource $pic) Return the first ChildCareNewsArticle filtered by the pic column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByPicMime(string $pic_mime) Return the first ChildCareNewsArticle filtered by the pic_mime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByArtNum(boolean $art_num) Return the first ChildCareNewsArticle filtered by the art_num column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByHeadFile(string $head_file) Return the first ChildCareNewsArticle filtered by the head_file column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByMainFile(string $main_file) Return the first ChildCareNewsArticle filtered by the main_file column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByPicFile(string $pic_file) Return the first ChildCareNewsArticle filtered by the pic_file column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByAuthor(string $author) Return the first ChildCareNewsArticle filtered by the author column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneBySubmitDate(string $submit_date) Return the first ChildCareNewsArticle filtered by the submit_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByEncodeDate(string $encode_date) Return the first ChildCareNewsArticle filtered by the encode_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByPublishDate(string $publish_date) Return the first ChildCareNewsArticle filtered by the publish_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByModifyId(string $modify_id) Return the first ChildCareNewsArticle filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByModifyTime(string $modify_time) Return the first ChildCareNewsArticle filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByCreateId(string $create_id) Return the first ChildCareNewsArticle filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNewsArticle requireOneByCreateTime(string $create_time) Return the first ChildCareNewsArticle filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareNewsArticle[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareNewsArticle objects based on current ModelCriteria
 * @method     ChildCareNewsArticle[]|ObjectCollection findByNr(int $nr) Return ChildCareNewsArticle objects filtered by the nr column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByLang(string $lang) Return ChildCareNewsArticle objects filtered by the lang column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareNewsArticle objects filtered by the dept_nr column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByCategory(string $category) Return ChildCareNewsArticle objects filtered by the category column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByStatus(string $status) Return ChildCareNewsArticle objects filtered by the status column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByTitle(string $title) Return ChildCareNewsArticle objects filtered by the title column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByPreface(string $preface) Return ChildCareNewsArticle objects filtered by the preface column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByBody(string $body) Return ChildCareNewsArticle objects filtered by the body column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByPic(resource $pic) Return ChildCareNewsArticle objects filtered by the pic column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByPicMime(string $pic_mime) Return ChildCareNewsArticle objects filtered by the pic_mime column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByArtNum(boolean $art_num) Return ChildCareNewsArticle objects filtered by the art_num column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByHeadFile(string $head_file) Return ChildCareNewsArticle objects filtered by the head_file column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByMainFile(string $main_file) Return ChildCareNewsArticle objects filtered by the main_file column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByPicFile(string $pic_file) Return ChildCareNewsArticle objects filtered by the pic_file column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByAuthor(string $author) Return ChildCareNewsArticle objects filtered by the author column
 * @method     ChildCareNewsArticle[]|ObjectCollection findBySubmitDate(string $submit_date) Return ChildCareNewsArticle objects filtered by the submit_date column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByEncodeDate(string $encode_date) Return ChildCareNewsArticle objects filtered by the encode_date column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByPublishDate(string $publish_date) Return ChildCareNewsArticle objects filtered by the publish_date column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareNewsArticle objects filtered by the modify_id column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareNewsArticle objects filtered by the modify_time column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareNewsArticle objects filtered by the create_id column
 * @method     ChildCareNewsArticle[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareNewsArticle objects filtered by the create_time column
 * @method     ChildCareNewsArticle[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareNewsArticleQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareNewsArticleQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareNewsArticle', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareNewsArticleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareNewsArticleQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareNewsArticleQuery) {
            return $criteria;
        }
        $query = new ChildCareNewsArticleQuery();
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
     * @return ChildCareNewsArticle|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareNewsArticleTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareNewsArticleTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareNewsArticle A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, lang, dept_nr, category, status, title, preface, body, pic, pic_mime, art_num, head_file, main_file, pic_file, author, submit_date, encode_date, publish_date, modify_id, modify_time, create_id, create_time FROM care_news_article WHERE nr = :p0';
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
            /** @var ChildCareNewsArticle $obj */
            $obj = new ChildCareNewsArticle();
            $obj->hydrate($row);
            CareNewsArticleTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareNewsArticle|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_NR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the nr column
     *
     * Example usage:
     * <code>
     * $query->filterByNr(1234); // WHERE nr = 1234
     * $query->filterByNr(array(12, 34)); // WHERE nr IN (12, 34)
     * $query->filterByNr(array('min' => 12)); // WHERE nr > 12
     * </code>
     *
     * @param     mixed $nr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the lang column
     *
     * Example usage:
     * <code>
     * $query->filterByLang('fooValue');   // WHERE lang = 'fooValue'
     * $query->filterByLang('%fooValue%', Criteria::LIKE); // WHERE lang LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lang The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByLang($lang = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lang)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_LANG, $lang, $comparison);
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
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the category column
     *
     * Example usage:
     * <code>
     * $query->filterByCategory('fooValue');   // WHERE category = 'fooValue'
     * $query->filterByCategory('%fooValue%', Criteria::LIKE); // WHERE category LIKE '%fooValue%'
     * </code>
     *
     * @param     string $category The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByCategory($category = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($category)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_CATEGORY, $category, $comparison);
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
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%', Criteria::LIKE); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the preface column
     *
     * Example usage:
     * <code>
     * $query->filterByPreface('fooValue');   // WHERE preface = 'fooValue'
     * $query->filterByPreface('%fooValue%', Criteria::LIKE); // WHERE preface LIKE '%fooValue%'
     * </code>
     *
     * @param     string $preface The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByPreface($preface = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($preface)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_PREFACE, $preface, $comparison);
    }

    /**
     * Filter the query on the body column
     *
     * Example usage:
     * <code>
     * $query->filterByBody('fooValue');   // WHERE body = 'fooValue'
     * $query->filterByBody('%fooValue%', Criteria::LIKE); // WHERE body LIKE '%fooValue%'
     * </code>
     *
     * @param     string $body The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByBody($body = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($body)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_BODY, $body, $comparison);
    }

    /**
     * Filter the query on the pic column
     *
     * @param     mixed $pic The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByPic($pic = null, $comparison = null)
    {

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_PIC, $pic, $comparison);
    }

    /**
     * Filter the query on the pic_mime column
     *
     * Example usage:
     * <code>
     * $query->filterByPicMime('fooValue');   // WHERE pic_mime = 'fooValue'
     * $query->filterByPicMime('%fooValue%', Criteria::LIKE); // WHERE pic_mime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picMime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByPicMime($picMime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picMime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_PIC_MIME, $picMime, $comparison);
    }

    /**
     * Filter the query on the art_num column
     *
     * Example usage:
     * <code>
     * $query->filterByArtNum(true); // WHERE art_num = true
     * $query->filterByArtNum('yes'); // WHERE art_num = true
     * </code>
     *
     * @param     boolean|string $artNum The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByArtNum($artNum = null, $comparison = null)
    {
        if (is_string($artNum)) {
            $artNum = in_array(strtolower($artNum), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_ART_NUM, $artNum, $comparison);
    }

    /**
     * Filter the query on the head_file column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadFile('fooValue');   // WHERE head_file = 'fooValue'
     * $query->filterByHeadFile('%fooValue%', Criteria::LIKE); // WHERE head_file LIKE '%fooValue%'
     * </code>
     *
     * @param     string $headFile The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByHeadFile($headFile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($headFile)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_HEAD_FILE, $headFile, $comparison);
    }

    /**
     * Filter the query on the main_file column
     *
     * Example usage:
     * <code>
     * $query->filterByMainFile('fooValue');   // WHERE main_file = 'fooValue'
     * $query->filterByMainFile('%fooValue%', Criteria::LIKE); // WHERE main_file LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mainFile The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByMainFile($mainFile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mainFile)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_MAIN_FILE, $mainFile, $comparison);
    }

    /**
     * Filter the query on the pic_file column
     *
     * Example usage:
     * <code>
     * $query->filterByPicFile('fooValue');   // WHERE pic_file = 'fooValue'
     * $query->filterByPicFile('%fooValue%', Criteria::LIKE); // WHERE pic_file LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picFile The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByPicFile($picFile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picFile)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_PIC_FILE, $picFile, $comparison);
    }

    /**
     * Filter the query on the author column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthor('fooValue');   // WHERE author = 'fooValue'
     * $query->filterByAuthor('%fooValue%', Criteria::LIKE); // WHERE author LIKE '%fooValue%'
     * </code>
     *
     * @param     string $author The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByAuthor($author = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($author)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_AUTHOR, $author, $comparison);
    }

    /**
     * Filter the query on the submit_date column
     *
     * Example usage:
     * <code>
     * $query->filterBySubmitDate('2011-03-14'); // WHERE submit_date = '2011-03-14'
     * $query->filterBySubmitDate('now'); // WHERE submit_date = '2011-03-14'
     * $query->filterBySubmitDate(array('max' => 'yesterday')); // WHERE submit_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $submitDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterBySubmitDate($submitDate = null, $comparison = null)
    {
        if (is_array($submitDate)) {
            $useMinMax = false;
            if (isset($submitDate['min'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_SUBMIT_DATE, $submitDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($submitDate['max'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_SUBMIT_DATE, $submitDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_SUBMIT_DATE, $submitDate, $comparison);
    }

    /**
     * Filter the query on the encode_date column
     *
     * Example usage:
     * <code>
     * $query->filterByEncodeDate('2011-03-14'); // WHERE encode_date = '2011-03-14'
     * $query->filterByEncodeDate('now'); // WHERE encode_date = '2011-03-14'
     * $query->filterByEncodeDate(array('max' => 'yesterday')); // WHERE encode_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $encodeDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByEncodeDate($encodeDate = null, $comparison = null)
    {
        if (is_array($encodeDate)) {
            $useMinMax = false;
            if (isset($encodeDate['min'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_ENCODE_DATE, $encodeDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encodeDate['max'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_ENCODE_DATE, $encodeDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_ENCODE_DATE, $encodeDate, $comparison);
    }

    /**
     * Filter the query on the publish_date column
     *
     * Example usage:
     * <code>
     * $query->filterByPublishDate('2011-03-14'); // WHERE publish_date = '2011-03-14'
     * $query->filterByPublishDate('now'); // WHERE publish_date = '2011-03-14'
     * $query->filterByPublishDate(array('max' => 'yesterday')); // WHERE publish_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $publishDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByPublishDate($publishDate = null, $comparison = null)
    {
        if (is_array($publishDate)) {
            $useMinMax = false;
            if (isset($publishDate['min'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_PUBLISH_DATE, $publishDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($publishDate['max'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_PUBLISH_DATE, $publishDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_PUBLISH_DATE, $publishDate, $comparison);
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
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareNewsArticleTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNewsArticleTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareNewsArticle $careNewsArticle Object to remove from the list of results
     *
     * @return $this|ChildCareNewsArticleQuery The current query, for fluid interface
     */
    public function prune($careNewsArticle = null)
    {
        if ($careNewsArticle) {
            $this->addUsingAlias(CareNewsArticleTableMap::COL_NR, $careNewsArticle->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_news_article table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareNewsArticleTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareNewsArticleTableMap::clearInstancePool();
            CareNewsArticleTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareNewsArticleTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareNewsArticleTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareNewsArticleTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareNewsArticleTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareNewsArticleQuery
