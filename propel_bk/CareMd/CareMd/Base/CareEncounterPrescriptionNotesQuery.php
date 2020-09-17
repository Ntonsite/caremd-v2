<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterPrescriptionNotes as ChildCareEncounterPrescriptionNotes;
use CareMd\CareMd\CareEncounterPrescriptionNotesQuery as ChildCareEncounterPrescriptionNotesQuery;
use CareMd\CareMd\Map\CareEncounterPrescriptionNotesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_prescription_notes' table.
 *
 *
 *
 * @method     ChildCareEncounterPrescriptionNotesQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareEncounterPrescriptionNotesQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCareEncounterPrescriptionNotesQuery orderByPrescriptionNr($order = Criteria::ASC) Order by the prescription_nr column
 * @method     ChildCareEncounterPrescriptionNotesQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     ChildCareEncounterPrescriptionNotesQuery orderByShortNotes($order = Criteria::ASC) Order by the short_notes column
 * @method     ChildCareEncounterPrescriptionNotesQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareEncounterPrescriptionNotesQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareEncounterPrescriptionNotesQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareEncounterPrescriptionNotesQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareEncounterPrescriptionNotesQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareEncounterPrescriptionNotesQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareEncounterPrescriptionNotesQuery groupByNr() Group by the nr column
 * @method     ChildCareEncounterPrescriptionNotesQuery groupByDate() Group by the date column
 * @method     ChildCareEncounterPrescriptionNotesQuery groupByPrescriptionNr() Group by the prescription_nr column
 * @method     ChildCareEncounterPrescriptionNotesQuery groupByNotes() Group by the notes column
 * @method     ChildCareEncounterPrescriptionNotesQuery groupByShortNotes() Group by the short_notes column
 * @method     ChildCareEncounterPrescriptionNotesQuery groupByStatus() Group by the status column
 * @method     ChildCareEncounterPrescriptionNotesQuery groupByHistory() Group by the history column
 * @method     ChildCareEncounterPrescriptionNotesQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareEncounterPrescriptionNotesQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareEncounterPrescriptionNotesQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareEncounterPrescriptionNotesQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareEncounterPrescriptionNotesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterPrescriptionNotesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterPrescriptionNotesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterPrescriptionNotesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterPrescriptionNotesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterPrescriptionNotesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterPrescriptionNotes findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterPrescriptionNotes matching the query
 * @method     ChildCareEncounterPrescriptionNotes findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterPrescriptionNotes matching the query, or a new ChildCareEncounterPrescriptionNotes object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterPrescriptionNotes findOneByNr(string $nr) Return the first ChildCareEncounterPrescriptionNotes filtered by the nr column
 * @method     ChildCareEncounterPrescriptionNotes findOneByDate(string $date) Return the first ChildCareEncounterPrescriptionNotes filtered by the date column
 * @method     ChildCareEncounterPrescriptionNotes findOneByPrescriptionNr(int $prescription_nr) Return the first ChildCareEncounterPrescriptionNotes filtered by the prescription_nr column
 * @method     ChildCareEncounterPrescriptionNotes findOneByNotes(string $notes) Return the first ChildCareEncounterPrescriptionNotes filtered by the notes column
 * @method     ChildCareEncounterPrescriptionNotes findOneByShortNotes(string $short_notes) Return the first ChildCareEncounterPrescriptionNotes filtered by the short_notes column
 * @method     ChildCareEncounterPrescriptionNotes findOneByStatus(string $status) Return the first ChildCareEncounterPrescriptionNotes filtered by the status column
 * @method     ChildCareEncounterPrescriptionNotes findOneByHistory(string $history) Return the first ChildCareEncounterPrescriptionNotes filtered by the history column
 * @method     ChildCareEncounterPrescriptionNotes findOneByModifyId(string $modify_id) Return the first ChildCareEncounterPrescriptionNotes filtered by the modify_id column
 * @method     ChildCareEncounterPrescriptionNotes findOneByModifyTime(string $modify_time) Return the first ChildCareEncounterPrescriptionNotes filtered by the modify_time column
 * @method     ChildCareEncounterPrescriptionNotes findOneByCreateId(string $create_id) Return the first ChildCareEncounterPrescriptionNotes filtered by the create_id column
 * @method     ChildCareEncounterPrescriptionNotes findOneByCreateTime(string $create_time) Return the first ChildCareEncounterPrescriptionNotes filtered by the create_time column *

 * @method     ChildCareEncounterPrescriptionNotes requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterPrescriptionNotes by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescriptionNotes requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterPrescriptionNotes matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterPrescriptionNotes requireOneByNr(string $nr) Return the first ChildCareEncounterPrescriptionNotes filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescriptionNotes requireOneByDate(string $date) Return the first ChildCareEncounterPrescriptionNotes filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescriptionNotes requireOneByPrescriptionNr(int $prescription_nr) Return the first ChildCareEncounterPrescriptionNotes filtered by the prescription_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescriptionNotes requireOneByNotes(string $notes) Return the first ChildCareEncounterPrescriptionNotes filtered by the notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescriptionNotes requireOneByShortNotes(string $short_notes) Return the first ChildCareEncounterPrescriptionNotes filtered by the short_notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescriptionNotes requireOneByStatus(string $status) Return the first ChildCareEncounterPrescriptionNotes filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescriptionNotes requireOneByHistory(string $history) Return the first ChildCareEncounterPrescriptionNotes filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescriptionNotes requireOneByModifyId(string $modify_id) Return the first ChildCareEncounterPrescriptionNotes filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescriptionNotes requireOneByModifyTime(string $modify_time) Return the first ChildCareEncounterPrescriptionNotes filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescriptionNotes requireOneByCreateId(string $create_id) Return the first ChildCareEncounterPrescriptionNotes filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterPrescriptionNotes requireOneByCreateTime(string $create_time) Return the first ChildCareEncounterPrescriptionNotes filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterPrescriptionNotes[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterPrescriptionNotes objects based on current ModelCriteria
 * @method     ChildCareEncounterPrescriptionNotes[]|ObjectCollection findByNr(string $nr) Return ChildCareEncounterPrescriptionNotes objects filtered by the nr column
 * @method     ChildCareEncounterPrescriptionNotes[]|ObjectCollection findByDate(string $date) Return ChildCareEncounterPrescriptionNotes objects filtered by the date column
 * @method     ChildCareEncounterPrescriptionNotes[]|ObjectCollection findByPrescriptionNr(int $prescription_nr) Return ChildCareEncounterPrescriptionNotes objects filtered by the prescription_nr column
 * @method     ChildCareEncounterPrescriptionNotes[]|ObjectCollection findByNotes(string $notes) Return ChildCareEncounterPrescriptionNotes objects filtered by the notes column
 * @method     ChildCareEncounterPrescriptionNotes[]|ObjectCollection findByShortNotes(string $short_notes) Return ChildCareEncounterPrescriptionNotes objects filtered by the short_notes column
 * @method     ChildCareEncounterPrescriptionNotes[]|ObjectCollection findByStatus(string $status) Return ChildCareEncounterPrescriptionNotes objects filtered by the status column
 * @method     ChildCareEncounterPrescriptionNotes[]|ObjectCollection findByHistory(string $history) Return ChildCareEncounterPrescriptionNotes objects filtered by the history column
 * @method     ChildCareEncounterPrescriptionNotes[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareEncounterPrescriptionNotes objects filtered by the modify_id column
 * @method     ChildCareEncounterPrescriptionNotes[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareEncounterPrescriptionNotes objects filtered by the modify_time column
 * @method     ChildCareEncounterPrescriptionNotes[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareEncounterPrescriptionNotes objects filtered by the create_id column
 * @method     ChildCareEncounterPrescriptionNotes[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareEncounterPrescriptionNotes objects filtered by the create_time column
 * @method     ChildCareEncounterPrescriptionNotes[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterPrescriptionNotesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterPrescriptionNotesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterPrescriptionNotes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterPrescriptionNotesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterPrescriptionNotesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterPrescriptionNotesQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterPrescriptionNotesQuery();
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
     * @return ChildCareEncounterPrescriptionNotes|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterPrescriptionNotesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterPrescriptionNotesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterPrescriptionNotes A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, date, prescription_nr, notes, short_notes, status, history, modify_id, modify_time, create_id, create_time FROM care_encounter_prescription_notes WHERE nr = :p0';
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
            /** @var ChildCareEncounterPrescriptionNotes $obj */
            $obj = new ChildCareEncounterPrescriptionNotes();
            $obj->hydrate($row);
            CareEncounterPrescriptionNotesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterPrescriptionNotes|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the prescription_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPrescriptionNr(1234); // WHERE prescription_nr = 1234
     * $query->filterByPrescriptionNr(array(12, 34)); // WHERE prescription_nr IN (12, 34)
     * $query->filterByPrescriptionNr(array('min' => 12)); // WHERE prescription_nr > 12
     * </code>
     *
     * @param     mixed $prescriptionNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByPrescriptionNr($prescriptionNr = null, $comparison = null)
    {
        if (is_array($prescriptionNr)) {
            $useMinMax = false;
            if (isset($prescriptionNr['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_PRESCRIPTION_NR, $prescriptionNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prescriptionNr['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_PRESCRIPTION_NR, $prescriptionNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_PRESCRIPTION_NR, $prescriptionNr, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_NOTES, $notes, $comparison);
    }

    /**
     * Filter the query on the short_notes column
     *
     * Example usage:
     * <code>
     * $query->filterByShortNotes('fooValue');   // WHERE short_notes = 'fooValue'
     * $query->filterByShortNotes('%fooValue%', Criteria::LIKE); // WHERE short_notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shortNotes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByShortNotes($shortNotes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shortNotes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_SHORT_NOTES, $shortNotes, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterPrescriptionNotes $careEncounterPrescriptionNotes Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterPrescriptionNotesQuery The current query, for fluid interface
     */
    public function prune($careEncounterPrescriptionNotes = null)
    {
        if ($careEncounterPrescriptionNotes) {
            $this->addUsingAlias(CareEncounterPrescriptionNotesTableMap::COL_NR, $careEncounterPrescriptionNotes->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_prescription_notes table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterPrescriptionNotesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterPrescriptionNotesTableMap::clearInstancePool();
            CareEncounterPrescriptionNotesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterPrescriptionNotesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterPrescriptionNotesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterPrescriptionNotesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterPrescriptionNotesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterPrescriptionNotesQuery
