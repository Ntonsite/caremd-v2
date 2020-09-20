<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CarePhone as ChildCarePhone;
use CareMd\CareMd\CarePhoneQuery as ChildCarePhoneQuery;
use CareMd\CareMd\Map\CarePhoneTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_phone' table.
 *
 *
 *
 * @method     ChildCarePhoneQuery orderByItemNr($order = Criteria::ASC) Order by the item_nr column
 * @method     ChildCarePhoneQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     ChildCarePhoneQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCarePhoneQuery orderByVorname($order = Criteria::ASC) Order by the vorname column
 * @method     ChildCarePhoneQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCarePhoneQuery orderByPersonellNr($order = Criteria::ASC) Order by the personell_nr column
 * @method     ChildCarePhoneQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCarePhoneQuery orderByBeruf($order = Criteria::ASC) Order by the beruf column
 * @method     ChildCarePhoneQuery orderByBereich1($order = Criteria::ASC) Order by the bereich1 column
 * @method     ChildCarePhoneQuery orderByBereich2($order = Criteria::ASC) Order by the bereich2 column
 * @method     ChildCarePhoneQuery orderByInphone1($order = Criteria::ASC) Order by the inphone1 column
 * @method     ChildCarePhoneQuery orderByInphone2($order = Criteria::ASC) Order by the inphone2 column
 * @method     ChildCarePhoneQuery orderByInphone3($order = Criteria::ASC) Order by the inphone3 column
 * @method     ChildCarePhoneQuery orderByExphone1($order = Criteria::ASC) Order by the exphone1 column
 * @method     ChildCarePhoneQuery orderByExphone2($order = Criteria::ASC) Order by the exphone2 column
 * @method     ChildCarePhoneQuery orderByFunk1($order = Criteria::ASC) Order by the funk1 column
 * @method     ChildCarePhoneQuery orderByFunk2($order = Criteria::ASC) Order by the funk2 column
 * @method     ChildCarePhoneQuery orderByRoomnr($order = Criteria::ASC) Order by the roomnr column
 * @method     ChildCarePhoneQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCarePhoneQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     ChildCarePhoneQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCarePhoneQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCarePhoneQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCarePhoneQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCarePhoneQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCarePhoneQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCarePhoneQuery groupByItemNr() Group by the item_nr column
 * @method     ChildCarePhoneQuery groupByTitle() Group by the title column
 * @method     ChildCarePhoneQuery groupByName() Group by the name column
 * @method     ChildCarePhoneQuery groupByVorname() Group by the vorname column
 * @method     ChildCarePhoneQuery groupByPid() Group by the pid column
 * @method     ChildCarePhoneQuery groupByPersonellNr() Group by the personell_nr column
 * @method     ChildCarePhoneQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCarePhoneQuery groupByBeruf() Group by the beruf column
 * @method     ChildCarePhoneQuery groupByBereich1() Group by the bereich1 column
 * @method     ChildCarePhoneQuery groupByBereich2() Group by the bereich2 column
 * @method     ChildCarePhoneQuery groupByInphone1() Group by the inphone1 column
 * @method     ChildCarePhoneQuery groupByInphone2() Group by the inphone2 column
 * @method     ChildCarePhoneQuery groupByInphone3() Group by the inphone3 column
 * @method     ChildCarePhoneQuery groupByExphone1() Group by the exphone1 column
 * @method     ChildCarePhoneQuery groupByExphone2() Group by the exphone2 column
 * @method     ChildCarePhoneQuery groupByFunk1() Group by the funk1 column
 * @method     ChildCarePhoneQuery groupByFunk2() Group by the funk2 column
 * @method     ChildCarePhoneQuery groupByRoomnr() Group by the roomnr column
 * @method     ChildCarePhoneQuery groupByDate() Group by the date column
 * @method     ChildCarePhoneQuery groupByTime() Group by the time column
 * @method     ChildCarePhoneQuery groupByStatus() Group by the status column
 * @method     ChildCarePhoneQuery groupByHistory() Group by the history column
 * @method     ChildCarePhoneQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCarePhoneQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCarePhoneQuery groupByCreateId() Group by the create_id column
 * @method     ChildCarePhoneQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCarePhoneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCarePhoneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCarePhoneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCarePhoneQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCarePhoneQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCarePhoneQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCarePhone findOne(ConnectionInterface $con = null) Return the first ChildCarePhone matching the query
 * @method     ChildCarePhone findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCarePhone matching the query, or a new ChildCarePhone object populated from the query conditions when no match is found
 *
 * @method     ChildCarePhone findOneByItemNr(string $item_nr) Return the first ChildCarePhone filtered by the item_nr column
 * @method     ChildCarePhone findOneByTitle(string $title) Return the first ChildCarePhone filtered by the title column
 * @method     ChildCarePhone findOneByName(string $name) Return the first ChildCarePhone filtered by the name column
 * @method     ChildCarePhone findOneByVorname(string $vorname) Return the first ChildCarePhone filtered by the vorname column
 * @method     ChildCarePhone findOneByPid(int $pid) Return the first ChildCarePhone filtered by the pid column
 * @method     ChildCarePhone findOneByPersonellNr(int $personell_nr) Return the first ChildCarePhone filtered by the personell_nr column
 * @method     ChildCarePhone findOneByDeptNr(int $dept_nr) Return the first ChildCarePhone filtered by the dept_nr column
 * @method     ChildCarePhone findOneByBeruf(string $beruf) Return the first ChildCarePhone filtered by the beruf column
 * @method     ChildCarePhone findOneByBereich1(string $bereich1) Return the first ChildCarePhone filtered by the bereich1 column
 * @method     ChildCarePhone findOneByBereich2(string $bereich2) Return the first ChildCarePhone filtered by the bereich2 column
 * @method     ChildCarePhone findOneByInphone1(string $inphone1) Return the first ChildCarePhone filtered by the inphone1 column
 * @method     ChildCarePhone findOneByInphone2(string $inphone2) Return the first ChildCarePhone filtered by the inphone2 column
 * @method     ChildCarePhone findOneByInphone3(string $inphone3) Return the first ChildCarePhone filtered by the inphone3 column
 * @method     ChildCarePhone findOneByExphone1(string $exphone1) Return the first ChildCarePhone filtered by the exphone1 column
 * @method     ChildCarePhone findOneByExphone2(string $exphone2) Return the first ChildCarePhone filtered by the exphone2 column
 * @method     ChildCarePhone findOneByFunk1(string $funk1) Return the first ChildCarePhone filtered by the funk1 column
 * @method     ChildCarePhone findOneByFunk2(string $funk2) Return the first ChildCarePhone filtered by the funk2 column
 * @method     ChildCarePhone findOneByRoomnr(string $roomnr) Return the first ChildCarePhone filtered by the roomnr column
 * @method     ChildCarePhone findOneByDate(string $date) Return the first ChildCarePhone filtered by the date column
 * @method     ChildCarePhone findOneByTime(string $time) Return the first ChildCarePhone filtered by the time column
 * @method     ChildCarePhone findOneByStatus(string $status) Return the first ChildCarePhone filtered by the status column
 * @method     ChildCarePhone findOneByHistory(string $history) Return the first ChildCarePhone filtered by the history column
 * @method     ChildCarePhone findOneByModifyId(string $modify_id) Return the first ChildCarePhone filtered by the modify_id column
 * @method     ChildCarePhone findOneByModifyTime(string $modify_time) Return the first ChildCarePhone filtered by the modify_time column
 * @method     ChildCarePhone findOneByCreateId(string $create_id) Return the first ChildCarePhone filtered by the create_id column
 * @method     ChildCarePhone findOneByCreateTime(string $create_time) Return the first ChildCarePhone filtered by the create_time column *

 * @method     ChildCarePhone requirePk($key, ConnectionInterface $con = null) Return the ChildCarePhone by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOne(ConnectionInterface $con = null) Return the first ChildCarePhone matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePhone requireOneByItemNr(string $item_nr) Return the first ChildCarePhone filtered by the item_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByTitle(string $title) Return the first ChildCarePhone filtered by the title column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByName(string $name) Return the first ChildCarePhone filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByVorname(string $vorname) Return the first ChildCarePhone filtered by the vorname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByPid(int $pid) Return the first ChildCarePhone filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByPersonellNr(int $personell_nr) Return the first ChildCarePhone filtered by the personell_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByDeptNr(int $dept_nr) Return the first ChildCarePhone filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByBeruf(string $beruf) Return the first ChildCarePhone filtered by the beruf column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByBereich1(string $bereich1) Return the first ChildCarePhone filtered by the bereich1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByBereich2(string $bereich2) Return the first ChildCarePhone filtered by the bereich2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByInphone1(string $inphone1) Return the first ChildCarePhone filtered by the inphone1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByInphone2(string $inphone2) Return the first ChildCarePhone filtered by the inphone2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByInphone3(string $inphone3) Return the first ChildCarePhone filtered by the inphone3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByExphone1(string $exphone1) Return the first ChildCarePhone filtered by the exphone1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByExphone2(string $exphone2) Return the first ChildCarePhone filtered by the exphone2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByFunk1(string $funk1) Return the first ChildCarePhone filtered by the funk1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByFunk2(string $funk2) Return the first ChildCarePhone filtered by the funk2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByRoomnr(string $roomnr) Return the first ChildCarePhone filtered by the roomnr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByDate(string $date) Return the first ChildCarePhone filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByTime(string $time) Return the first ChildCarePhone filtered by the time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByStatus(string $status) Return the first ChildCarePhone filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByHistory(string $history) Return the first ChildCarePhone filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByModifyId(string $modify_id) Return the first ChildCarePhone filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByModifyTime(string $modify_time) Return the first ChildCarePhone filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByCreateId(string $create_id) Return the first ChildCarePhone filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePhone requireOneByCreateTime(string $create_time) Return the first ChildCarePhone filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePhone[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCarePhone objects based on current ModelCriteria
 * @method     ChildCarePhone[]|ObjectCollection findByItemNr(string $item_nr) Return ChildCarePhone objects filtered by the item_nr column
 * @method     ChildCarePhone[]|ObjectCollection findByTitle(string $title) Return ChildCarePhone objects filtered by the title column
 * @method     ChildCarePhone[]|ObjectCollection findByName(string $name) Return ChildCarePhone objects filtered by the name column
 * @method     ChildCarePhone[]|ObjectCollection findByVorname(string $vorname) Return ChildCarePhone objects filtered by the vorname column
 * @method     ChildCarePhone[]|ObjectCollection findByPid(int $pid) Return ChildCarePhone objects filtered by the pid column
 * @method     ChildCarePhone[]|ObjectCollection findByPersonellNr(int $personell_nr) Return ChildCarePhone objects filtered by the personell_nr column
 * @method     ChildCarePhone[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCarePhone objects filtered by the dept_nr column
 * @method     ChildCarePhone[]|ObjectCollection findByBeruf(string $beruf) Return ChildCarePhone objects filtered by the beruf column
 * @method     ChildCarePhone[]|ObjectCollection findByBereich1(string $bereich1) Return ChildCarePhone objects filtered by the bereich1 column
 * @method     ChildCarePhone[]|ObjectCollection findByBereich2(string $bereich2) Return ChildCarePhone objects filtered by the bereich2 column
 * @method     ChildCarePhone[]|ObjectCollection findByInphone1(string $inphone1) Return ChildCarePhone objects filtered by the inphone1 column
 * @method     ChildCarePhone[]|ObjectCollection findByInphone2(string $inphone2) Return ChildCarePhone objects filtered by the inphone2 column
 * @method     ChildCarePhone[]|ObjectCollection findByInphone3(string $inphone3) Return ChildCarePhone objects filtered by the inphone3 column
 * @method     ChildCarePhone[]|ObjectCollection findByExphone1(string $exphone1) Return ChildCarePhone objects filtered by the exphone1 column
 * @method     ChildCarePhone[]|ObjectCollection findByExphone2(string $exphone2) Return ChildCarePhone objects filtered by the exphone2 column
 * @method     ChildCarePhone[]|ObjectCollection findByFunk1(string $funk1) Return ChildCarePhone objects filtered by the funk1 column
 * @method     ChildCarePhone[]|ObjectCollection findByFunk2(string $funk2) Return ChildCarePhone objects filtered by the funk2 column
 * @method     ChildCarePhone[]|ObjectCollection findByRoomnr(string $roomnr) Return ChildCarePhone objects filtered by the roomnr column
 * @method     ChildCarePhone[]|ObjectCollection findByDate(string $date) Return ChildCarePhone objects filtered by the date column
 * @method     ChildCarePhone[]|ObjectCollection findByTime(string $time) Return ChildCarePhone objects filtered by the time column
 * @method     ChildCarePhone[]|ObjectCollection findByStatus(string $status) Return ChildCarePhone objects filtered by the status column
 * @method     ChildCarePhone[]|ObjectCollection findByHistory(string $history) Return ChildCarePhone objects filtered by the history column
 * @method     ChildCarePhone[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCarePhone objects filtered by the modify_id column
 * @method     ChildCarePhone[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCarePhone objects filtered by the modify_time column
 * @method     ChildCarePhone[]|ObjectCollection findByCreateId(string $create_id) Return ChildCarePhone objects filtered by the create_id column
 * @method     ChildCarePhone[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCarePhone objects filtered by the create_time column
 * @method     ChildCarePhone[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CarePhoneQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CarePhoneQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CarePhone', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCarePhoneQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCarePhoneQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCarePhoneQuery) {
            return $criteria;
        }
        $query = new ChildCarePhoneQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array[$item_nr, $pid, $personell_nr, $dept_nr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCarePhone|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CarePhoneTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CarePhoneTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildCarePhone A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT item_nr, title, name, vorname, pid, personell_nr, dept_nr, beruf, bereich1, bereich2, inphone1, inphone2, inphone3, exphone1, exphone2, funk1, funk2, roomnr, date, time, status, history, modify_id, modify_time, create_id, create_time FROM care_phone WHERE item_nr = :p0 AND pid = :p1 AND personell_nr = :p2 AND dept_nr = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCarePhone $obj */
            $obj = new ChildCarePhone();
            $obj->hydrate($row);
            CarePhoneTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildCarePhone|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CarePhoneTableMap::COL_ITEM_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CarePhoneTableMap::COL_PID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CarePhoneTableMap::COL_PERSONELL_NR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CarePhoneTableMap::COL_DEPT_NR, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CarePhoneTableMap::COL_ITEM_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CarePhoneTableMap::COL_PID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CarePhoneTableMap::COL_PERSONELL_NR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CarePhoneTableMap::COL_DEPT_NR, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the item_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByItemNr(1234); // WHERE item_nr = 1234
     * $query->filterByItemNr(array(12, 34)); // WHERE item_nr IN (12, 34)
     * $query->filterByItemNr(array('min' => 12)); // WHERE item_nr > 12
     * </code>
     *
     * @param     mixed $itemNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByItemNr($itemNr = null, $comparison = null)
    {
        if (is_array($itemNr)) {
            $useMinMax = false;
            if (isset($itemNr['min'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_ITEM_NR, $itemNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemNr['max'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_ITEM_NR, $itemNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_ITEM_NR, $itemNr, $comparison);
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
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the vorname column
     *
     * Example usage:
     * <code>
     * $query->filterByVorname('fooValue');   // WHERE vorname = 'fooValue'
     * $query->filterByVorname('%fooValue%', Criteria::LIKE); // WHERE vorname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vorname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByVorname($vorname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vorname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_VORNAME, $vorname, $comparison);
    }

    /**
     * Filter the query on the pid column
     *
     * Example usage:
     * <code>
     * $query->filterByPid(1234); // WHERE pid = 1234
     * $query->filterByPid(array(12, 34)); // WHERE pid IN (12, 34)
     * $query->filterByPid(array('min' => 12)); // WHERE pid > 12
     * </code>
     *
     * @param     mixed $pid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_PID, $pid, $comparison);
    }

    /**
     * Filter the query on the personell_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonellNr(1234); // WHERE personell_nr = 1234
     * $query->filterByPersonellNr(array(12, 34)); // WHERE personell_nr IN (12, 34)
     * $query->filterByPersonellNr(array('min' => 12)); // WHERE personell_nr > 12
     * </code>
     *
     * @param     mixed $personellNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByPersonellNr($personellNr = null, $comparison = null)
    {
        if (is_array($personellNr)) {
            $useMinMax = false;
            if (isset($personellNr['min'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_PERSONELL_NR, $personellNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personellNr['max'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_PERSONELL_NR, $personellNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_PERSONELL_NR, $personellNr, $comparison);
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
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the beruf column
     *
     * Example usage:
     * <code>
     * $query->filterByBeruf('fooValue');   // WHERE beruf = 'fooValue'
     * $query->filterByBeruf('%fooValue%', Criteria::LIKE); // WHERE beruf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $beruf The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByBeruf($beruf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($beruf)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_BERUF, $beruf, $comparison);
    }

    /**
     * Filter the query on the bereich1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBereich1('fooValue');   // WHERE bereich1 = 'fooValue'
     * $query->filterByBereich1('%fooValue%', Criteria::LIKE); // WHERE bereich1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bereich1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByBereich1($bereich1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bereich1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_BEREICH1, $bereich1, $comparison);
    }

    /**
     * Filter the query on the bereich2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBereich2('fooValue');   // WHERE bereich2 = 'fooValue'
     * $query->filterByBereich2('%fooValue%', Criteria::LIKE); // WHERE bereich2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bereich2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByBereich2($bereich2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bereich2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_BEREICH2, $bereich2, $comparison);
    }

    /**
     * Filter the query on the inphone1 column
     *
     * Example usage:
     * <code>
     * $query->filterByInphone1('fooValue');   // WHERE inphone1 = 'fooValue'
     * $query->filterByInphone1('%fooValue%', Criteria::LIKE); // WHERE inphone1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inphone1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByInphone1($inphone1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inphone1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_INPHONE1, $inphone1, $comparison);
    }

    /**
     * Filter the query on the inphone2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInphone2('fooValue');   // WHERE inphone2 = 'fooValue'
     * $query->filterByInphone2('%fooValue%', Criteria::LIKE); // WHERE inphone2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inphone2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByInphone2($inphone2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inphone2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_INPHONE2, $inphone2, $comparison);
    }

    /**
     * Filter the query on the inphone3 column
     *
     * Example usage:
     * <code>
     * $query->filterByInphone3('fooValue');   // WHERE inphone3 = 'fooValue'
     * $query->filterByInphone3('%fooValue%', Criteria::LIKE); // WHERE inphone3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inphone3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByInphone3($inphone3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inphone3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_INPHONE3, $inphone3, $comparison);
    }

    /**
     * Filter the query on the exphone1 column
     *
     * Example usage:
     * <code>
     * $query->filterByExphone1('fooValue');   // WHERE exphone1 = 'fooValue'
     * $query->filterByExphone1('%fooValue%', Criteria::LIKE); // WHERE exphone1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $exphone1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByExphone1($exphone1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exphone1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_EXPHONE1, $exphone1, $comparison);
    }

    /**
     * Filter the query on the exphone2 column
     *
     * Example usage:
     * <code>
     * $query->filterByExphone2('fooValue');   // WHERE exphone2 = 'fooValue'
     * $query->filterByExphone2('%fooValue%', Criteria::LIKE); // WHERE exphone2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $exphone2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByExphone2($exphone2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exphone2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_EXPHONE2, $exphone2, $comparison);
    }

    /**
     * Filter the query on the funk1 column
     *
     * Example usage:
     * <code>
     * $query->filterByFunk1('fooValue');   // WHERE funk1 = 'fooValue'
     * $query->filterByFunk1('%fooValue%', Criteria::LIKE); // WHERE funk1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $funk1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByFunk1($funk1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($funk1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_FUNK1, $funk1, $comparison);
    }

    /**
     * Filter the query on the funk2 column
     *
     * Example usage:
     * <code>
     * $query->filterByFunk2('fooValue');   // WHERE funk2 = 'fooValue'
     * $query->filterByFunk2('%fooValue%', Criteria::LIKE); // WHERE funk2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $funk2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByFunk2($funk2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($funk2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_FUNK2, $funk2, $comparison);
    }

    /**
     * Filter the query on the roomnr column
     *
     * Example usage:
     * <code>
     * $query->filterByRoomnr('fooValue');   // WHERE roomnr = 'fooValue'
     * $query->filterByRoomnr('%fooValue%', Criteria::LIKE); // WHERE roomnr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $roomnr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByRoomnr($roomnr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($roomnr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_ROOMNR, $roomnr, $comparison);
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
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the time column
     *
     * Example usage:
     * <code>
     * $query->filterByTime('2011-03-14'); // WHERE time = '2011-03-14'
     * $query->filterByTime('now'); // WHERE time = '2011-03-14'
     * $query->filterByTime(array('max' => 'yesterday')); // WHERE time > '2011-03-13'
     * </code>
     *
     * @param     mixed $time The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_TIME, $time, $comparison);
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
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CarePhoneTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePhoneTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCarePhone $carePhone Object to remove from the list of results
     *
     * @return $this|ChildCarePhoneQuery The current query, for fluid interface
     */
    public function prune($carePhone = null)
    {
        if ($carePhone) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CarePhoneTableMap::COL_ITEM_NR), $carePhone->getItemNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CarePhoneTableMap::COL_PID), $carePhone->getPid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CarePhoneTableMap::COL_PERSONELL_NR), $carePhone->getPersonellNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CarePhoneTableMap::COL_DEPT_NR), $carePhone->getDeptNr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_phone table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePhoneTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CarePhoneTableMap::clearInstancePool();
            CarePhoneTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePhoneTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CarePhoneTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CarePhoneTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CarePhoneTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CarePhoneQuery
