<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterImage as ChildCareEncounterImage;
use CareMd\CareMd\CareEncounterImageQuery as ChildCareEncounterImageQuery;
use CareMd\CareMd\Map\CareEncounterImageTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_image' table.
 *
 *
 *
 * @method     ChildCareEncounterImageQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareEncounterImageQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterImageQuery orderByShotDate($order = Criteria::ASC) Order by the shot_date column
 * @method     ChildCareEncounterImageQuery orderByShotNr($order = Criteria::ASC) Order by the shot_nr column
 * @method     ChildCareEncounterImageQuery orderByMimeType($order = Criteria::ASC) Order by the mime_type column
 * @method     ChildCareEncounterImageQuery orderByUploadDate($order = Criteria::ASC) Order by the upload_date column
 * @method     ChildCareEncounterImageQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareEncounterImageQuery orderByGraphicScript($order = Criteria::ASC) Order by the graphic_script column
 * @method     ChildCareEncounterImageQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterImageQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterImageQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterImageQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterImageQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterImageQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareEncounterImageQuery groupByNr() Group by the nr column
 * @method     ChildCareEncounterImageQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterImageQuery groupByShotDate() Group by the shot_date column
 * @method     ChildCareEncounterImageQuery groupByShotNr() Group by the shot_nr column
 * @method     ChildCareEncounterImageQuery groupByMimeType() Group by the mime_type column
 * @method     ChildCareEncounterImageQuery groupByUploadDate() Group by the upload_date column
 * @method     ChildCareEncounterImageQuery groupByNotes() Group by the notes column
 * @method     ChildCareEncounterImageQuery groupByGraphicScript() Group by the graphic_script column
 * @method     ChildCareEncounterImageQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterImageQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterImageQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterImageQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterImageQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterImageQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareEncounterImageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterImageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterImageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterImageQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterImageQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterImageQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterImage findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterImage matching the query
 * @method     ChildCareEncounterImage findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterImage matching the query, or a new ChildCareEncounterImage object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterImage findOneByNr(string $nr) Return the first ChildCareEncounterImage filtered by the nr column
 * @method     ChildCareEncounterImage findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterImage filtered by the encounter_nr column
 * @method     ChildCareEncounterImage findOneByShotDate(string $shot_date) Return the first ChildCareEncounterImage filtered by the shot_date column
 * @method     ChildCareEncounterImage findOneByShotNr(int $shot_nr) Return the first ChildCareEncounterImage filtered by the shot_nr column
 * @method     ChildCareEncounterImage findOneByMimeType(string $mime_type) Return the first ChildCareEncounterImage filtered by the mime_type column
 * @method     ChildCareEncounterImage findOneByUploadDate(string $upload_date) Return the first ChildCareEncounterImage filtered by the upload_date column
 * @method     ChildCareEncounterImage findOneByNotes(string $notes) Return the first ChildCareEncounterImage filtered by the notes column
 * @method     ChildCareEncounterImage findOneByGraphicScript(string $graphic_script) Return the first ChildCareEncounterImage filtered by the graphic_script column
 * @method     ChildCareEncounterImage findOneByStatus(string $status) Return the first ChildCareEncounterImage filtered by the status column
 * @method     ChildCareEncounterImage findOneByHistory(string $history) Return the first ChildCareEncounterImage filtered by the history column
 * @method     ChildCareEncounterImage findOneByModifyId(string $modify_id) Return the first ChildCareEncounterImage filtered by the modify_id column
 * @method     ChildCareEncounterImage findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterImage filtered by the modify_time column
 * @method     ChildCareEncounterImage findOneByCreateId(string $create_id) Return the first ChildCareEncounterImage filtered by the create_id column
 * @method     ChildCareEncounterImage findOneByCreateTime(string $create_time) Return the first ChildCareEncounterImage filtered by the create_time column *

 * @method     ChildCareEncounterImage requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterImage by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterImage matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterImage requireOneByNr(string $nr) Return the first ChildCareEncounterImage filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterImage filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByShotDate(string $shot_date) Return the first ChildCareEncounterImage filtered by the shot_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByShotNr(int $shot_nr) Return the first ChildCareEncounterImage filtered by the shot_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByMimeType(string $mime_type) Return the first ChildCareEncounterImage filtered by the mime_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByUploadDate(string $upload_date) Return the first ChildCareEncounterImage filtered by the upload_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByNotes(string $notes) Return the first ChildCareEncounterImage filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByGraphicScript(string $graphic_script) Return the first ChildCareEncounterImage filtered by the graphic_script column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByStatus(string $status) Return the first ChildCareEncounterImage filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByHistory(string $history) Return the first ChildCareEncounterImage filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterImage filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterImage filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByCreateId(string $create_id) Return the first ChildCareEncounterImage filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterImage requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterImage filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterImage[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterImage objects based on current ModelCriteria
 * @method     ChildCareEncounterImage[]|ObjectCollection findByNr(string $nr) Return ChildCareEncounterImage objects filtered by the nr column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterImage objects filtered by the encounter_nr column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByShotDate(string $shot_date) Return ChildCareEncounterImage objects filtered by the shot_date column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByShotNr(int $shot_nr) Return ChildCareEncounterImage objects filtered by the shot_nr column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByMimeType(string $mime_type) Return ChildCareEncounterImage objects filtered by the mime_type column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByUploadDate(string $upload_date) Return ChildCareEncounterImage objects filtered by the upload_date column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByNotes(string $notes) Return ChildCareEncounterImage objects filtered by the notes column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByGraphicScript(string $graphic_script) Return ChildCareEncounterImage objects filtered by the graphic_script column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterImage objects filtered by the status column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterImage objects filtered by the history column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterImage objects filtered by the modify_id column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterImage objects filtered by the modify_time column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterImage objects filtered by the create_id column
 * @method     ChildCareEncounterImage[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterImage objects filtered by the create_time column
 * @method     ChildCareEncounterImage[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterImageQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterImageQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterImage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterImageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterImageQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterImageQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterImageQuery();
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
     * @return ChildCareEncounterImage|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterImageTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterImageTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterImage A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, encounter_nr, shot_date, shot_nr, mime_type, upload_date, notes, graphic_script, status, history, modify_id, modify_time, create_id, create_time FROM care_encounter_image WHERE nr = :p0';
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
            /** @var ChildCareEncounterImage $obj */
            $obj = new ChildCareEncounterImage();
            $obj->hydrate($row);
            CareEncounterImageTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterImage|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByEncounterNr(1234); // WHERE encounter_nr = 1234
     * $query->filterByEncounterNr(array(12, 34)); // WHERE encounter_nr IN (12, 34)
     * $query->filterByEncounterNr(array('min' => 12)); // WHERE encounter_nr > 12
     * </code>
     *
     * @param     mixed $encounterNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the shot_date column
     *
     * Example usage:
     * <code>
     * $query->filterByShotDate('2011-03-14'); // WHERE shot_date = '2011-03-14'
     * $query->filterByShotDate('now'); // WHERE shot_date = '2011-03-14'
     * $query->filterByShotDate(array('max' => 'yesterday')); // WHERE shot_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $shotDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByShotDate($shotDate = null, $comparison = null)
    {
        if (is_array($shotDate)) {
            $useMinMax = false;
            if (isset($shotDate['min'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_SHOT_DATE, $shotDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shotDate['max'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_SHOT_DATE, $shotDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_SHOT_DATE, $shotDate, $comparison);
    }

    /**
     * Filter the query on the shot_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByShotNr(1234); // WHERE shot_nr = 1234
     * $query->filterByShotNr(array(12, 34)); // WHERE shot_nr IN (12, 34)
     * $query->filterByShotNr(array('min' => 12)); // WHERE shot_nr > 12
     * </code>
     *
     * @param     mixed $shotNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByShotNr($shotNr = null, $comparison = null)
    {
        if (is_array($shotNr)) {
            $useMinMax = false;
            if (isset($shotNr['min'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_SHOT_NR, $shotNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shotNr['max'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_SHOT_NR, $shotNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_SHOT_NR, $shotNr, $comparison);
    }

    /**
     * Filter the query on the mime_type column
     *
     * Example usage:
     * <code>
     * $query->filterByMimeType('fooValue');   // WHERE mime_type = 'fooValue'
     * $query->filterByMimeType('%fooValue%', Criteria::LIKE); // WHERE mime_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mimeType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByMimeType($mimeType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mimeType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_MIME_TYPE, $mimeType, $comparison);
    }

    /**
     * Filter the query on the upload_date column
     *
     * Example usage:
     * <code>
     * $query->filterByUploadDate('2011-03-14'); // WHERE upload_date = '2011-03-14'
     * $query->filterByUploadDate('now'); // WHERE upload_date = '2011-03-14'
     * $query->filterByUploadDate(array('max' => 'yesterday')); // WHERE upload_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $uploadDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByUploadDate($uploadDate = null, $comparison = null)
    {
        if (is_array($uploadDate)) {
            $useMinMax = false;
            if (isset($uploadDate['min'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_UPLOAD_DATE, $uploadDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uploadDate['max'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_UPLOAD_DATE, $uploadDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_UPLOAD_DATE, $uploadDate, $comparison);
    }

    /**
     * Filter the query on the notes column
     *
     * Example usage:
     * <code>
     * $query->filterByNotes('fooValue');   // WHERE notes = 'fooValue'
     * $query->filterByNotes('%fooValue%', Criteria::LIKE); // WHERE notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_NOTES, $notes, $comparison);
    }

    /**
     * Filter the query on the graphic_script column
     *
     * Example usage:
     * <code>
     * $query->filterByGraphicScript('fooValue');   // WHERE graphic_script = 'fooValue'
     * $query->filterByGraphicScript('%fooValue%', Criteria::LIKE); // WHERE graphic_script LIKE '%fooValue%'
     * </code>
     *
     * @param     string $graphicScript The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByGraphicScript($graphicScript = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($graphicScript)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_GRAPHIC_SCRIPT, $graphicScript, $comparison);
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
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterImageTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterImageTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterImage $careEncounterImage Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterImageQuery The current query, for fluid interface
     */
    public function prune($careEncounterImage = null)
    {
        if ($careEncounterImage) {
            $this->addUsingAlias(CareEncounterImageTableMap::COL_NR, $careEncounterImage->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_image table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterImageTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterImageTableMap::clearInstancePool();
            CareEncounterImageTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterImageTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterImageTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterImageTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterImageTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterImageQuery
