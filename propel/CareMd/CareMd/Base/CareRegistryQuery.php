<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareRegistry as ChildCareRegistry;
use CareMd\CareMd\CareRegistryQuery as ChildCareRegistryQuery;
use CareMd\CareMd\Map\CareRegistryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_registry' table.
 *
 *
 *
 * @method     ChildCareRegistryQuery orderByRegistryId($order = Criteria::ASC) Order by the registry_id column
 * @method     ChildCareRegistryQuery orderByModuleStartScript($order = Criteria::ASC) Order by the module_start_script column
 * @method     ChildCareRegistryQuery orderByNewsStartScript($order = Criteria::ASC) Order by the news_start_script column
 * @method     ChildCareRegistryQuery orderByNewsEditorScript($order = Criteria::ASC) Order by the news_editor_script column
 * @method     ChildCareRegistryQuery orderByNewsReaderScript($order = Criteria::ASC) Order by the news_reader_script column
 * @method     ChildCareRegistryQuery orderByPasscheckScript($order = Criteria::ASC) Order by the passcheck_script column
 * @method     ChildCareRegistryQuery orderByComposite($order = Criteria::ASC) Order by the composite column
 * @method     ChildCareRegistryQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareRegistryQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareRegistryQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareRegistryQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareRegistryQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareRegistryQuery groupByRegistryId() Group by the registry_id column
 * @method     ChildCareRegistryQuery groupByModuleStartScript() Group by the module_start_script column
 * @method     ChildCareRegistryQuery groupByNewsStartScript() Group by the news_start_script column
 * @method     ChildCareRegistryQuery groupByNewsEditorScript() Group by the news_editor_script column
 * @method     ChildCareRegistryQuery groupByNewsReaderScript() Group by the news_reader_script column
 * @method     ChildCareRegistryQuery groupByPasscheckScript() Group by the passcheck_script column
 * @method     ChildCareRegistryQuery groupByComposite() Group by the composite column
 * @method     ChildCareRegistryQuery groupByStatus() Group by the status column
 * @method     ChildCareRegistryQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareRegistryQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareRegistryQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareRegistryQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareRegistryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareRegistryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareRegistryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareRegistryQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareRegistryQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareRegistryQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareRegistry findOne(ConnectionInterface $con = null) Return the first ChildCareRegistry matching the query
 * @method     ChildCareRegistry findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareRegistry matching the query, or a new ChildCareRegistry object populated from the query conditions when no match is found
 *
 * @method     ChildCareRegistry findOneByRegistryId(string $registry_id) Return the first ChildCareRegistry filtered by the registry_id column
 * @method     ChildCareRegistry findOneByModuleStartScript(string $module_start_script) Return the first ChildCareRegistry filtered by the module_start_script column
 * @method     ChildCareRegistry findOneByNewsStartScript(string $news_start_script) Return the first ChildCareRegistry filtered by the news_start_script column
 * @method     ChildCareRegistry findOneByNewsEditorScript(string $news_editor_script) Return the first ChildCareRegistry filtered by the news_editor_script column
 * @method     ChildCareRegistry findOneByNewsReaderScript(string $news_reader_script) Return the first ChildCareRegistry filtered by the news_reader_script column
 * @method     ChildCareRegistry findOneByPasscheckScript(string $passcheck_script) Return the first ChildCareRegistry filtered by the passcheck_script column
 * @method     ChildCareRegistry findOneByComposite(string $composite) Return the first ChildCareRegistry filtered by the composite column
 * @method     ChildCareRegistry findOneByStatus(string $status) Return the first ChildCareRegistry filtered by the status column
 * @method     ChildCareRegistry findOneByModifyId(string $modify_id) Return the first ChildCareRegistry filtered by the modify_id column
 * @method     ChildCareRegistry findOneByModifyTime(string $modify_time) Return the first ChildCareRegistry filtered by the modify_time column
 * @method     ChildCareRegistry findOneByCreateId(string $create_id) Return the first ChildCareRegistry filtered by the create_id column
 * @method     ChildCareRegistry findOneByCreateTime(string $create_time) Return the first ChildCareRegistry filtered by the create_time column *

 * @method     ChildCareRegistry requirePk($key, ConnectionInterface $con = null) Return the ChildCareRegistry by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRegistry requireOne(ConnectionInterface $con = null) Return the first ChildCareRegistry matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareRegistry requireOneByRegistryId(string $registry_id) Return the first ChildCareRegistry filtered by the registry_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRegistry requireOneByModuleStartScript(string $module_start_script) Return the first ChildCareRegistry filtered by the module_start_script column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRegistry requireOneByNewsStartScript(string $news_start_script) Return the first ChildCareRegistry filtered by the news_start_script column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRegistry requireOneByNewsEditorScript(string $news_editor_script) Return the first ChildCareRegistry filtered by the news_editor_script column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRegistry requireOneByNewsReaderScript(string $news_reader_script) Return the first ChildCareRegistry filtered by the news_reader_script column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRegistry requireOneByPasscheckScript(string $passcheck_script) Return the first ChildCareRegistry filtered by the passcheck_script column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRegistry requireOneByComposite(string $composite) Return the first ChildCareRegistry filtered by the composite column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRegistry requireOneByStatus(string $status) Return the first ChildCareRegistry filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRegistry requireOneByModifyId(string $modify_id) Return the first ChildCareRegistry filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRegistry requireOneByModifyTime(string $modify_time) Return the first ChildCareRegistry filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRegistry requireOneByCreateId(string $create_id) Return the first ChildCareRegistry filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareRegistry requireOneByCreateTime(string $create_time) Return the first ChildCareRegistry filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareRegistry[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareRegistry objects based on current ModelCriteria
 * @method     ChildCareRegistry[]|ObjectCollection findByRegistryId(string $registry_id) Return ChildCareRegistry objects filtered by the registry_id column
 * @method     ChildCareRegistry[]|ObjectCollection findByModuleStartScript(string $module_start_script) Return ChildCareRegistry objects filtered by the module_start_script column
 * @method     ChildCareRegistry[]|ObjectCollection findByNewsStartScript(string $news_start_script) Return ChildCareRegistry objects filtered by the news_start_script column
 * @method     ChildCareRegistry[]|ObjectCollection findByNewsEditorScript(string $news_editor_script) Return ChildCareRegistry objects filtered by the news_editor_script column
 * @method     ChildCareRegistry[]|ObjectCollection findByNewsReaderScript(string $news_reader_script) Return ChildCareRegistry objects filtered by the news_reader_script column
 * @method     ChildCareRegistry[]|ObjectCollection findByPasscheckScript(string $passcheck_script) Return ChildCareRegistry objects filtered by the passcheck_script column
 * @method     ChildCareRegistry[]|ObjectCollection findByComposite(string $composite) Return ChildCareRegistry objects filtered by the composite column
 * @method     ChildCareRegistry[]|ObjectCollection findByStatus(string $status) Return ChildCareRegistry objects filtered by the status column
 * @method     ChildCareRegistry[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareRegistry objects filtered by the modify_id column
 * @method     ChildCareRegistry[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareRegistry objects filtered by the modify_time column
 * @method     ChildCareRegistry[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareRegistry objects filtered by the create_id column
 * @method     ChildCareRegistry[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareRegistry objects filtered by the create_time column
 * @method     ChildCareRegistry[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareRegistryQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareRegistryQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareRegistry', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareRegistryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareRegistryQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareRegistryQuery) {
            return $criteria;
        }
        $query = new ChildCareRegistryQuery();
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
     * @return ChildCareRegistry|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareRegistryTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareRegistryTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareRegistry A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT registry_id, module_start_script, news_start_script, news_editor_script, news_reader_script, passcheck_script, composite, status, modify_id, modify_time, create_id, create_time FROM care_registry WHERE registry_id = :p0';
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
            /** @var ChildCareRegistry $obj */
            $obj = new ChildCareRegistry();
            $obj->hydrate($row);
            CareRegistryTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareRegistry|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareRegistryTableMap::COL_REGISTRY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareRegistryTableMap::COL_REGISTRY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the registry_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistryId('fooValue');   // WHERE registry_id = 'fooValue'
     * $query->filterByRegistryId('%fooValue%', Criteria::LIKE); // WHERE registry_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $registryId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByRegistryId($registryId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($registryId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRegistryTableMap::COL_REGISTRY_ID, $registryId, $comparison);
    }

    /**
     * Filter the query on the module_start_script column
     *
     * Example usage:
     * <code>
     * $query->filterByModuleStartScript('fooValue');   // WHERE module_start_script = 'fooValue'
     * $query->filterByModuleStartScript('%fooValue%', Criteria::LIKE); // WHERE module_start_script LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moduleStartScript The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByModuleStartScript($moduleStartScript = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moduleStartScript)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRegistryTableMap::COL_MODULE_START_SCRIPT, $moduleStartScript, $comparison);
    }

    /**
     * Filter the query on the news_start_script column
     *
     * Example usage:
     * <code>
     * $query->filterByNewsStartScript('fooValue');   // WHERE news_start_script = 'fooValue'
     * $query->filterByNewsStartScript('%fooValue%', Criteria::LIKE); // WHERE news_start_script LIKE '%fooValue%'
     * </code>
     *
     * @param     string $newsStartScript The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByNewsStartScript($newsStartScript = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($newsStartScript)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRegistryTableMap::COL_NEWS_START_SCRIPT, $newsStartScript, $comparison);
    }

    /**
     * Filter the query on the news_editor_script column
     *
     * Example usage:
     * <code>
     * $query->filterByNewsEditorScript('fooValue');   // WHERE news_editor_script = 'fooValue'
     * $query->filterByNewsEditorScript('%fooValue%', Criteria::LIKE); // WHERE news_editor_script LIKE '%fooValue%'
     * </code>
     *
     * @param     string $newsEditorScript The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByNewsEditorScript($newsEditorScript = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($newsEditorScript)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRegistryTableMap::COL_NEWS_EDITOR_SCRIPT, $newsEditorScript, $comparison);
    }

    /**
     * Filter the query on the news_reader_script column
     *
     * Example usage:
     * <code>
     * $query->filterByNewsReaderScript('fooValue');   // WHERE news_reader_script = 'fooValue'
     * $query->filterByNewsReaderScript('%fooValue%', Criteria::LIKE); // WHERE news_reader_script LIKE '%fooValue%'
     * </code>
     *
     * @param     string $newsReaderScript The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByNewsReaderScript($newsReaderScript = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($newsReaderScript)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRegistryTableMap::COL_NEWS_READER_SCRIPT, $newsReaderScript, $comparison);
    }

    /**
     * Filter the query on the passcheck_script column
     *
     * Example usage:
     * <code>
     * $query->filterByPasscheckScript('fooValue');   // WHERE passcheck_script = 'fooValue'
     * $query->filterByPasscheckScript('%fooValue%', Criteria::LIKE); // WHERE passcheck_script LIKE '%fooValue%'
     * </code>
     *
     * @param     string $passcheckScript The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByPasscheckScript($passcheckScript = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($passcheckScript)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRegistryTableMap::COL_PASSCHECK_SCRIPT, $passcheckScript, $comparison);
    }

    /**
     * Filter the query on the composite column
     *
     * Example usage:
     * <code>
     * $query->filterByComposite('fooValue');   // WHERE composite = 'fooValue'
     * $query->filterByComposite('%fooValue%', Criteria::LIKE); // WHERE composite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $composite The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByComposite($composite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($composite)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRegistryTableMap::COL_COMPOSITE, $composite, $comparison);
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
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRegistryTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRegistryTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareRegistryTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareRegistryTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRegistryTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRegistryTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareRegistryTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareRegistryTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareRegistryTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareRegistry $careRegistry Object to remove from the list of results
     *
     * @return $this|ChildCareRegistryQuery The current query, for fluid interface
     */
    public function prune($careRegistry = null)
    {
        if ($careRegistry) {
            $this->addUsingAlias(CareRegistryTableMap::COL_REGISTRY_ID, $careRegistry->getRegistryId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_registry table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareRegistryTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareRegistryTableMap::clearInstancePool();
            CareRegistryTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareRegistryTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareRegistryTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareRegistryTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareRegistryTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareRegistryQuery
