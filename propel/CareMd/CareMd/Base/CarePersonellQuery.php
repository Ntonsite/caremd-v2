<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CarePersonell as ChildCarePersonell;
use CareMd\CareMd\CarePersonellQuery as ChildCarePersonellQuery;
use CareMd\CareMd\Map\CarePersonellTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_personell' table.
 *
 *
 *
 * @method     ChildCarePersonellQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCarePersonellQuery orderByShortId($order = Criteria::ASC) Order by the short_id column
 * @method     ChildCarePersonellQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCarePersonellQuery orderByJobTypeNr($order = Criteria::ASC) Order by the job_type_nr column
 * @method     ChildCarePersonellQuery orderByJobFunctionTitle($order = Criteria::ASC) Order by the job_function_title column
 * @method     ChildCarePersonellQuery orderByDateJoin($order = Criteria::ASC) Order by the date_join column
 * @method     ChildCarePersonellQuery orderByDateExit($order = Criteria::ASC) Order by the date_exit column
 * @method     ChildCarePersonellQuery orderByContractClass($order = Criteria::ASC) Order by the contract_class column
 * @method     ChildCarePersonellQuery orderByContractStart($order = Criteria::ASC) Order by the contract_start column
 * @method     ChildCarePersonellQuery orderByContractEnd($order = Criteria::ASC) Order by the contract_end column
 * @method     ChildCarePersonellQuery orderByIsDischarged($order = Criteria::ASC) Order by the is_discharged column
 * @method     ChildCarePersonellQuery orderByPayClass($order = Criteria::ASC) Order by the pay_class column
 * @method     ChildCarePersonellQuery orderByPayClassSub($order = Criteria::ASC) Order by the pay_class_sub column
 * @method     ChildCarePersonellQuery orderByLocalPremiumId($order = Criteria::ASC) Order by the local_premium_id column
 * @method     ChildCarePersonellQuery orderByTaxAccountNr($order = Criteria::ASC) Order by the tax_account_nr column
 * @method     ChildCarePersonellQuery orderByIrCode($order = Criteria::ASC) Order by the ir_code column
 * @method     ChildCarePersonellQuery orderByNrWorkday($order = Criteria::ASC) Order by the nr_workday column
 * @method     ChildCarePersonellQuery orderByNrWeekhour($order = Criteria::ASC) Order by the nr_weekhour column
 * @method     ChildCarePersonellQuery orderByNrVacationDay($order = Criteria::ASC) Order by the nr_vacation_day column
 * @method     ChildCarePersonellQuery orderByMultipleEmployer($order = Criteria::ASC) Order by the multiple_employer column
 * @method     ChildCarePersonellQuery orderByNrDependent($order = Criteria::ASC) Order by the nr_dependent column
 * @method     ChildCarePersonellQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCarePersonellQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCarePersonellQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCarePersonellQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCarePersonellQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCarePersonellQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCarePersonellQuery groupByNr() Group by the nr column
 * @method     ChildCarePersonellQuery groupByShortId() Group by the short_id column
 * @method     ChildCarePersonellQuery groupByPid() Group by the pid column
 * @method     ChildCarePersonellQuery groupByJobTypeNr() Group by the job_type_nr column
 * @method     ChildCarePersonellQuery groupByJobFunctionTitle() Group by the job_function_title column
 * @method     ChildCarePersonellQuery groupByDateJoin() Group by the date_join column
 * @method     ChildCarePersonellQuery groupByDateExit() Group by the date_exit column
 * @method     ChildCarePersonellQuery groupByContractClass() Group by the contract_class column
 * @method     ChildCarePersonellQuery groupByContractStart() Group by the contract_start column
 * @method     ChildCarePersonellQuery groupByContractEnd() Group by the contract_end column
 * @method     ChildCarePersonellQuery groupByIsDischarged() Group by the is_discharged column
 * @method     ChildCarePersonellQuery groupByPayClass() Group by the pay_class column
 * @method     ChildCarePersonellQuery groupByPayClassSub() Group by the pay_class_sub column
 * @method     ChildCarePersonellQuery groupByLocalPremiumId() Group by the local_premium_id column
 * @method     ChildCarePersonellQuery groupByTaxAccountNr() Group by the tax_account_nr column
 * @method     ChildCarePersonellQuery groupByIrCode() Group by the ir_code column
 * @method     ChildCarePersonellQuery groupByNrWorkday() Group by the nr_workday column
 * @method     ChildCarePersonellQuery groupByNrWeekhour() Group by the nr_weekhour column
 * @method     ChildCarePersonellQuery groupByNrVacationDay() Group by the nr_vacation_day column
 * @method     ChildCarePersonellQuery groupByMultipleEmployer() Group by the multiple_employer column
 * @method     ChildCarePersonellQuery groupByNrDependent() Group by the nr_dependent column
 * @method     ChildCarePersonellQuery groupByStatus() Group by the status column
 * @method     ChildCarePersonellQuery groupByHistory() Group by the history column
 * @method     ChildCarePersonellQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCarePersonellQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCarePersonellQuery groupByCreateId() Group by the create_id column
 * @method     ChildCarePersonellQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCarePersonellQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCarePersonellQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCarePersonellQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCarePersonellQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCarePersonellQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCarePersonellQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCarePersonell findOne(ConnectionInterface $con = null) Return the first ChildCarePersonell matching the query
 * @method     ChildCarePersonell findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCarePersonell matching the query, or a new ChildCarePersonell object populated from the query conditions when no match is found
 *
 * @method     ChildCarePersonell findOneByNr(int $nr) Return the first ChildCarePersonell filtered by the nr column
 * @method     ChildCarePersonell findOneByShortId(string $short_id) Return the first ChildCarePersonell filtered by the short_id column
 * @method     ChildCarePersonell findOneByPid(int $pid) Return the first ChildCarePersonell filtered by the pid column
 * @method     ChildCarePersonell findOneByJobTypeNr(int $job_type_nr) Return the first ChildCarePersonell filtered by the job_type_nr column
 * @method     ChildCarePersonell findOneByJobFunctionTitle(string $job_function_title) Return the first ChildCarePersonell filtered by the job_function_title column
 * @method     ChildCarePersonell findOneByDateJoin(string $date_join) Return the first ChildCarePersonell filtered by the date_join column
 * @method     ChildCarePersonell findOneByDateExit(string $date_exit) Return the first ChildCarePersonell filtered by the date_exit column
 * @method     ChildCarePersonell findOneByContractClass(string $contract_class) Return the first ChildCarePersonell filtered by the contract_class column
 * @method     ChildCarePersonell findOneByContractStart(string $contract_start) Return the first ChildCarePersonell filtered by the contract_start column
 * @method     ChildCarePersonell findOneByContractEnd(string $contract_end) Return the first ChildCarePersonell filtered by the contract_end column
 * @method     ChildCarePersonell findOneByIsDischarged(boolean $is_discharged) Return the first ChildCarePersonell filtered by the is_discharged column
 * @method     ChildCarePersonell findOneByPayClass(string $pay_class) Return the first ChildCarePersonell filtered by the pay_class column
 * @method     ChildCarePersonell findOneByPayClassSub(string $pay_class_sub) Return the first ChildCarePersonell filtered by the pay_class_sub column
 * @method     ChildCarePersonell findOneByLocalPremiumId(string $local_premium_id) Return the first ChildCarePersonell filtered by the local_premium_id column
 * @method     ChildCarePersonell findOneByTaxAccountNr(string $tax_account_nr) Return the first ChildCarePersonell filtered by the tax_account_nr column
 * @method     ChildCarePersonell findOneByIrCode(string $ir_code) Return the first ChildCarePersonell filtered by the ir_code column
 * @method     ChildCarePersonell findOneByNrWorkday(boolean $nr_workday) Return the first ChildCarePersonell filtered by the nr_workday column
 * @method     ChildCarePersonell findOneByNrWeekhour(double $nr_weekhour) Return the first ChildCarePersonell filtered by the nr_weekhour column
 * @method     ChildCarePersonell findOneByNrVacationDay(int $nr_vacation_day) Return the first ChildCarePersonell filtered by the nr_vacation_day column
 * @method     ChildCarePersonell findOneByMultipleEmployer(boolean $multiple_employer) Return the first ChildCarePersonell filtered by the multiple_employer column
 * @method     ChildCarePersonell findOneByNrDependent(int $nr_dependent) Return the first ChildCarePersonell filtered by the nr_dependent column
 * @method     ChildCarePersonell findOneByStatus(string $status) Return the first ChildCarePersonell filtered by the status column
 * @method     ChildCarePersonell findOneByHistory(string $history) Return the first ChildCarePersonell filtered by the history column
 * @method     ChildCarePersonell findOneByModifyId(string $modify_id) Return the first ChildCarePersonell filtered by the modify_id column
 * @method     ChildCarePersonell findOneByModifyTime(string $modify_time) Return the first ChildCarePersonell filtered by the modify_time column
 * @method     ChildCarePersonell findOneByCreateId(string $create_id) Return the first ChildCarePersonell filtered by the create_id column
 * @method     ChildCarePersonell findOneByCreateTime(string $create_time) Return the first ChildCarePersonell filtered by the create_time column *

 * @method     ChildCarePersonell requirePk($key, ConnectionInterface $con = null) Return the ChildCarePersonell by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOne(ConnectionInterface $con = null) Return the first ChildCarePersonell matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePersonell requireOneByNr(int $nr) Return the first ChildCarePersonell filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByShortId(string $short_id) Return the first ChildCarePersonell filtered by the short_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByPid(int $pid) Return the first ChildCarePersonell filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByJobTypeNr(int $job_type_nr) Return the first ChildCarePersonell filtered by the job_type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByJobFunctionTitle(string $job_function_title) Return the first ChildCarePersonell filtered by the job_function_title column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByDateJoin(string $date_join) Return the first ChildCarePersonell filtered by the date_join column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByDateExit(string $date_exit) Return the first ChildCarePersonell filtered by the date_exit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByContractClass(string $contract_class) Return the first ChildCarePersonell filtered by the contract_class column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByContractStart(string $contract_start) Return the first ChildCarePersonell filtered by the contract_start column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByContractEnd(string $contract_end) Return the first ChildCarePersonell filtered by the contract_end column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByIsDischarged(boolean $is_discharged) Return the first ChildCarePersonell filtered by the is_discharged column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByPayClass(string $pay_class) Return the first ChildCarePersonell filtered by the pay_class column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByPayClassSub(string $pay_class_sub) Return the first ChildCarePersonell filtered by the pay_class_sub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByLocalPremiumId(string $local_premium_id) Return the first ChildCarePersonell filtered by the local_premium_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByTaxAccountNr(string $tax_account_nr) Return the first ChildCarePersonell filtered by the tax_account_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByIrCode(string $ir_code) Return the first ChildCarePersonell filtered by the ir_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByNrWorkday(boolean $nr_workday) Return the first ChildCarePersonell filtered by the nr_workday column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByNrWeekhour(double $nr_weekhour) Return the first ChildCarePersonell filtered by the nr_weekhour column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByNrVacationDay(int $nr_vacation_day) Return the first ChildCarePersonell filtered by the nr_vacation_day column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByMultipleEmployer(boolean $multiple_employer) Return the first ChildCarePersonell filtered by the multiple_employer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByNrDependent(int $nr_dependent) Return the first ChildCarePersonell filtered by the nr_dependent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByStatus(string $status) Return the first ChildCarePersonell filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByHistory(string $history) Return the first ChildCarePersonell filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByModifyId(string $modify_id) Return the first ChildCarePersonell filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByModifyTime(string $modify_time) Return the first ChildCarePersonell filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByCreateId(string $create_id) Return the first ChildCarePersonell filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePersonell requireOneByCreateTime(string $create_time) Return the first ChildCarePersonell filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePersonell[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCarePersonell objects based on current ModelCriteria
 * @method     ChildCarePersonell[]|ObjectCollection findByNr(int $nr) Return ChildCarePersonell objects filtered by the nr column
 * @method     ChildCarePersonell[]|ObjectCollection findByShortId(string $short_id) Return ChildCarePersonell objects filtered by the short_id column
 * @method     ChildCarePersonell[]|ObjectCollection findByPid(int $pid) Return ChildCarePersonell objects filtered by the pid column
 * @method     ChildCarePersonell[]|ObjectCollection findByJobTypeNr(int $job_type_nr) Return ChildCarePersonell objects filtered by the job_type_nr column
 * @method     ChildCarePersonell[]|ObjectCollection findByJobFunctionTitle(string $job_function_title) Return ChildCarePersonell objects filtered by the job_function_title column
 * @method     ChildCarePersonell[]|ObjectCollection findByDateJoin(string $date_join) Return ChildCarePersonell objects filtered by the date_join column
 * @method     ChildCarePersonell[]|ObjectCollection findByDateExit(string $date_exit) Return ChildCarePersonell objects filtered by the date_exit column
 * @method     ChildCarePersonell[]|ObjectCollection findByContractClass(string $contract_class) Return ChildCarePersonell objects filtered by the contract_class column
 * @method     ChildCarePersonell[]|ObjectCollection findByContractStart(string $contract_start) Return ChildCarePersonell objects filtered by the contract_start column
 * @method     ChildCarePersonell[]|ObjectCollection findByContractEnd(string $contract_end) Return ChildCarePersonell objects filtered by the contract_end column
 * @method     ChildCarePersonell[]|ObjectCollection findByIsDischarged(boolean $is_discharged) Return ChildCarePersonell objects filtered by the is_discharged column
 * @method     ChildCarePersonell[]|ObjectCollection findByPayClass(string $pay_class) Return ChildCarePersonell objects filtered by the pay_class column
 * @method     ChildCarePersonell[]|ObjectCollection findByPayClassSub(string $pay_class_sub) Return ChildCarePersonell objects filtered by the pay_class_sub column
 * @method     ChildCarePersonell[]|ObjectCollection findByLocalPremiumId(string $local_premium_id) Return ChildCarePersonell objects filtered by the local_premium_id column
 * @method     ChildCarePersonell[]|ObjectCollection findByTaxAccountNr(string $tax_account_nr) Return ChildCarePersonell objects filtered by the tax_account_nr column
 * @method     ChildCarePersonell[]|ObjectCollection findByIrCode(string $ir_code) Return ChildCarePersonell objects filtered by the ir_code column
 * @method     ChildCarePersonell[]|ObjectCollection findByNrWorkday(boolean $nr_workday) Return ChildCarePersonell objects filtered by the nr_workday column
 * @method     ChildCarePersonell[]|ObjectCollection findByNrWeekhour(double $nr_weekhour) Return ChildCarePersonell objects filtered by the nr_weekhour column
 * @method     ChildCarePersonell[]|ObjectCollection findByNrVacationDay(int $nr_vacation_day) Return ChildCarePersonell objects filtered by the nr_vacation_day column
 * @method     ChildCarePersonell[]|ObjectCollection findByMultipleEmployer(boolean $multiple_employer) Return ChildCarePersonell objects filtered by the multiple_employer column
 * @method     ChildCarePersonell[]|ObjectCollection findByNrDependent(int $nr_dependent) Return ChildCarePersonell objects filtered by the nr_dependent column
 * @method     ChildCarePersonell[]|ObjectCollection findByStatus(string $status) Return ChildCarePersonell objects filtered by the status column
 * @method     ChildCarePersonell[]|ObjectCollection findByHistory(string $history) Return ChildCarePersonell objects filtered by the history column
 * @method     ChildCarePersonell[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCarePersonell objects filtered by the modify_id column
 * @method     ChildCarePersonell[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCarePersonell objects filtered by the modify_time column
 * @method     ChildCarePersonell[]|ObjectCollection findByCreateId(string $create_id) Return ChildCarePersonell objects filtered by the create_id column
 * @method     ChildCarePersonell[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCarePersonell objects filtered by the create_time column
 * @method     ChildCarePersonell[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CarePersonellQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CarePersonellQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CarePersonell', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCarePersonellQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCarePersonellQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCarePersonellQuery) {
            return $criteria;
        }
        $query = new ChildCarePersonellQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$nr, $pid, $job_type_nr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCarePersonell|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CarePersonellTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CarePersonellTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildCarePersonell A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, short_id, pid, job_type_nr, job_function_title, date_join, date_exit, contract_class, contract_start, contract_end, is_discharged, pay_class, pay_class_sub, local_premium_id, tax_account_nr, ir_code, nr_workday, nr_weekhour, nr_vacation_day, multiple_employer, nr_dependent, status, history, modify_id, modify_time, create_id, create_time FROM care_personell WHERE nr = :p0 AND pid = :p1 AND job_type_nr = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCarePersonell $obj */
            $obj = new ChildCarePersonell();
            $obj->hydrate($row);
            CarePersonellTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildCarePersonell|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CarePersonellTableMap::COL_NR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CarePersonellTableMap::COL_PID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CarePersonellTableMap::COL_JOB_TYPE_NR, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CarePersonellTableMap::COL_NR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CarePersonellTableMap::COL_PID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CarePersonellTableMap::COL_JOB_TYPE_NR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the short_id column
     *
     * Example usage:
     * <code>
     * $query->filterByShortId('fooValue');   // WHERE short_id = 'fooValue'
     * $query->filterByShortId('%fooValue%', Criteria::LIKE); // WHERE short_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shortId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByShortId($shortId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shortId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_SHORT_ID, $shortId, $comparison);
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
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_PID, $pid, $comparison);
    }

    /**
     * Filter the query on the job_type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByJobTypeNr(1234); // WHERE job_type_nr = 1234
     * $query->filterByJobTypeNr(array(12, 34)); // WHERE job_type_nr IN (12, 34)
     * $query->filterByJobTypeNr(array('min' => 12)); // WHERE job_type_nr > 12
     * </code>
     *
     * @param     mixed $jobTypeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByJobTypeNr($jobTypeNr = null, $comparison = null)
    {
        if (is_array($jobTypeNr)) {
            $useMinMax = false;
            if (isset($jobTypeNr['min'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_JOB_TYPE_NR, $jobTypeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jobTypeNr['max'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_JOB_TYPE_NR, $jobTypeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_JOB_TYPE_NR, $jobTypeNr, $comparison);
    }

    /**
     * Filter the query on the job_function_title column
     *
     * Example usage:
     * <code>
     * $query->filterByJobFunctionTitle('fooValue');   // WHERE job_function_title = 'fooValue'
     * $query->filterByJobFunctionTitle('%fooValue%', Criteria::LIKE); // WHERE job_function_title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jobFunctionTitle The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByJobFunctionTitle($jobFunctionTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jobFunctionTitle)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_JOB_FUNCTION_TITLE, $jobFunctionTitle, $comparison);
    }

    /**
     * Filter the query on the date_join column
     *
     * Example usage:
     * <code>
     * $query->filterByDateJoin('2011-03-14'); // WHERE date_join = '2011-03-14'
     * $query->filterByDateJoin('now'); // WHERE date_join = '2011-03-14'
     * $query->filterByDateJoin(array('max' => 'yesterday')); // WHERE date_join > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateJoin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByDateJoin($dateJoin = null, $comparison = null)
    {
        if (is_array($dateJoin)) {
            $useMinMax = false;
            if (isset($dateJoin['min'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_DATE_JOIN, $dateJoin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateJoin['max'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_DATE_JOIN, $dateJoin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_DATE_JOIN, $dateJoin, $comparison);
    }

    /**
     * Filter the query on the date_exit column
     *
     * Example usage:
     * <code>
     * $query->filterByDateExit('2011-03-14'); // WHERE date_exit = '2011-03-14'
     * $query->filterByDateExit('now'); // WHERE date_exit = '2011-03-14'
     * $query->filterByDateExit(array('max' => 'yesterday')); // WHERE date_exit > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateExit The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByDateExit($dateExit = null, $comparison = null)
    {
        if (is_array($dateExit)) {
            $useMinMax = false;
            if (isset($dateExit['min'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_DATE_EXIT, $dateExit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateExit['max'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_DATE_EXIT, $dateExit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_DATE_EXIT, $dateExit, $comparison);
    }

    /**
     * Filter the query on the contract_class column
     *
     * Example usage:
     * <code>
     * $query->filterByContractClass('fooValue');   // WHERE contract_class = 'fooValue'
     * $query->filterByContractClass('%fooValue%', Criteria::LIKE); // WHERE contract_class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contractClass The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByContractClass($contractClass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contractClass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_CONTRACT_CLASS, $contractClass, $comparison);
    }

    /**
     * Filter the query on the contract_start column
     *
     * Example usage:
     * <code>
     * $query->filterByContractStart('2011-03-14'); // WHERE contract_start = '2011-03-14'
     * $query->filterByContractStart('now'); // WHERE contract_start = '2011-03-14'
     * $query->filterByContractStart(array('max' => 'yesterday')); // WHERE contract_start > '2011-03-13'
     * </code>
     *
     * @param     mixed $contractStart The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByContractStart($contractStart = null, $comparison = null)
    {
        if (is_array($contractStart)) {
            $useMinMax = false;
            if (isset($contractStart['min'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_CONTRACT_START, $contractStart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contractStart['max'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_CONTRACT_START, $contractStart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_CONTRACT_START, $contractStart, $comparison);
    }

    /**
     * Filter the query on the contract_end column
     *
     * Example usage:
     * <code>
     * $query->filterByContractEnd('2011-03-14'); // WHERE contract_end = '2011-03-14'
     * $query->filterByContractEnd('now'); // WHERE contract_end = '2011-03-14'
     * $query->filterByContractEnd(array('max' => 'yesterday')); // WHERE contract_end > '2011-03-13'
     * </code>
     *
     * @param     mixed $contractEnd The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByContractEnd($contractEnd = null, $comparison = null)
    {
        if (is_array($contractEnd)) {
            $useMinMax = false;
            if (isset($contractEnd['min'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_CONTRACT_END, $contractEnd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contractEnd['max'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_CONTRACT_END, $contractEnd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_CONTRACT_END, $contractEnd, $comparison);
    }

    /**
     * Filter the query on the is_discharged column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDischarged(true); // WHERE is_discharged = true
     * $query->filterByIsDischarged('yes'); // WHERE is_discharged = true
     * </code>
     *
     * @param     boolean|string $isDischarged The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByIsDischarged($isDischarged = null, $comparison = null)
    {
        if (is_string($isDischarged)) {
            $isDischarged = in_array(strtolower($isDischarged), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_IS_DISCHARGED, $isDischarged, $comparison);
    }

    /**
     * Filter the query on the pay_class column
     *
     * Example usage:
     * <code>
     * $query->filterByPayClass('fooValue');   // WHERE pay_class = 'fooValue'
     * $query->filterByPayClass('%fooValue%', Criteria::LIKE); // WHERE pay_class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $payClass The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByPayClass($payClass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($payClass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_PAY_CLASS, $payClass, $comparison);
    }

    /**
     * Filter the query on the pay_class_sub column
     *
     * Example usage:
     * <code>
     * $query->filterByPayClassSub('fooValue');   // WHERE pay_class_sub = 'fooValue'
     * $query->filterByPayClassSub('%fooValue%', Criteria::LIKE); // WHERE pay_class_sub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $payClassSub The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByPayClassSub($payClassSub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($payClassSub)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_PAY_CLASS_SUB, $payClassSub, $comparison);
    }

    /**
     * Filter the query on the local_premium_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalPremiumId('fooValue');   // WHERE local_premium_id = 'fooValue'
     * $query->filterByLocalPremiumId('%fooValue%', Criteria::LIKE); // WHERE local_premium_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localPremiumId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByLocalPremiumId($localPremiumId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localPremiumId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_LOCAL_PREMIUM_ID, $localPremiumId, $comparison);
    }

    /**
     * Filter the query on the tax_account_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxAccountNr('fooValue');   // WHERE tax_account_nr = 'fooValue'
     * $query->filterByTaxAccountNr('%fooValue%', Criteria::LIKE); // WHERE tax_account_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taxAccountNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByTaxAccountNr($taxAccountNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taxAccountNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_TAX_ACCOUNT_NR, $taxAccountNr, $comparison);
    }

    /**
     * Filter the query on the ir_code column
     *
     * Example usage:
     * <code>
     * $query->filterByIrCode('fooValue');   // WHERE ir_code = 'fooValue'
     * $query->filterByIrCode('%fooValue%', Criteria::LIKE); // WHERE ir_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $irCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByIrCode($irCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($irCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_IR_CODE, $irCode, $comparison);
    }

    /**
     * Filter the query on the nr_workday column
     *
     * Example usage:
     * <code>
     * $query->filterByNrWorkday(true); // WHERE nr_workday = true
     * $query->filterByNrWorkday('yes'); // WHERE nr_workday = true
     * </code>
     *
     * @param     boolean|string $nrWorkday The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByNrWorkday($nrWorkday = null, $comparison = null)
    {
        if (is_string($nrWorkday)) {
            $nrWorkday = in_array(strtolower($nrWorkday), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_NR_WORKDAY, $nrWorkday, $comparison);
    }

    /**
     * Filter the query on the nr_weekhour column
     *
     * Example usage:
     * <code>
     * $query->filterByNrWeekhour(1234); // WHERE nr_weekhour = 1234
     * $query->filterByNrWeekhour(array(12, 34)); // WHERE nr_weekhour IN (12, 34)
     * $query->filterByNrWeekhour(array('min' => 12)); // WHERE nr_weekhour > 12
     * </code>
     *
     * @param     mixed $nrWeekhour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByNrWeekhour($nrWeekhour = null, $comparison = null)
    {
        if (is_array($nrWeekhour)) {
            $useMinMax = false;
            if (isset($nrWeekhour['min'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_NR_WEEKHOUR, $nrWeekhour['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nrWeekhour['max'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_NR_WEEKHOUR, $nrWeekhour['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_NR_WEEKHOUR, $nrWeekhour, $comparison);
    }

    /**
     * Filter the query on the nr_vacation_day column
     *
     * Example usage:
     * <code>
     * $query->filterByNrVacationDay(1234); // WHERE nr_vacation_day = 1234
     * $query->filterByNrVacationDay(array(12, 34)); // WHERE nr_vacation_day IN (12, 34)
     * $query->filterByNrVacationDay(array('min' => 12)); // WHERE nr_vacation_day > 12
     * </code>
     *
     * @param     mixed $nrVacationDay The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByNrVacationDay($nrVacationDay = null, $comparison = null)
    {
        if (is_array($nrVacationDay)) {
            $useMinMax = false;
            if (isset($nrVacationDay['min'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_NR_VACATION_DAY, $nrVacationDay['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nrVacationDay['max'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_NR_VACATION_DAY, $nrVacationDay['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_NR_VACATION_DAY, $nrVacationDay, $comparison);
    }

    /**
     * Filter the query on the multiple_employer column
     *
     * Example usage:
     * <code>
     * $query->filterByMultipleEmployer(true); // WHERE multiple_employer = true
     * $query->filterByMultipleEmployer('yes'); // WHERE multiple_employer = true
     * </code>
     *
     * @param     boolean|string $multipleEmployer The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByMultipleEmployer($multipleEmployer = null, $comparison = null)
    {
        if (is_string($multipleEmployer)) {
            $multipleEmployer = in_array(strtolower($multipleEmployer), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_MULTIPLE_EMPLOYER, $multipleEmployer, $comparison);
    }

    /**
     * Filter the query on the nr_dependent column
     *
     * Example usage:
     * <code>
     * $query->filterByNrDependent(1234); // WHERE nr_dependent = 1234
     * $query->filterByNrDependent(array(12, 34)); // WHERE nr_dependent IN (12, 34)
     * $query->filterByNrDependent(array('min' => 12)); // WHERE nr_dependent > 12
     * </code>
     *
     * @param     mixed $nrDependent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByNrDependent($nrDependent = null, $comparison = null)
    {
        if (is_array($nrDependent)) {
            $useMinMax = false;
            if (isset($nrDependent['min'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_NR_DEPENDENT, $nrDependent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nrDependent['max'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_NR_DEPENDENT, $nrDependent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_NR_DEPENDENT, $nrDependent, $comparison);
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
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CarePersonellTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonellTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCarePersonell $carePersonell Object to remove from the list of results
     *
     * @return $this|ChildCarePersonellQuery The current query, for fluid interface
     */
    public function prune($carePersonell = null)
    {
        if ($carePersonell) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CarePersonellTableMap::COL_NR), $carePersonell->getNr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CarePersonellTableMap::COL_PID), $carePersonell->getPid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CarePersonellTableMap::COL_JOB_TYPE_NR), $carePersonell->getJobTypeNr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_personell table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonellTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CarePersonellTableMap::clearInstancePool();
            CarePersonellTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonellTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CarePersonellTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CarePersonellTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CarePersonellTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CarePersonellQuery
