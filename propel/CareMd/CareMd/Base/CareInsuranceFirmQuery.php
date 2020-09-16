<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareInsuranceFirm as ChildCareInsuranceFirm;
use CareMd\CareMd\CareInsuranceFirmQuery as ChildCareInsuranceFirmQuery;
use CareMd\CareMd\Map\CareInsuranceFirmTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_insurance_firm' table.
 *
 *
 *
 * @method     ChildCareInsuranceFirmQuery orderByFirmId($order = Criteria::ASC) Order by the firm_id column
 * @method     ChildCareInsuranceFirmQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareInsuranceFirmQuery orderByIsoCountryId($order = Criteria::ASC) Order by the iso_country_id column
 * @method     ChildCareInsuranceFirmQuery orderBySubArea($order = Criteria::ASC) Order by the sub_area column
 * @method     ChildCareInsuranceFirmQuery orderByTypeNr($order = Criteria::ASC) Order by the type_nr column
 * @method     ChildCareInsuranceFirmQuery orderByAddr($order = Criteria::ASC) Order by the addr column
 * @method     ChildCareInsuranceFirmQuery orderByAddrMail($order = Criteria::ASC) Order by the addr_mail column
 * @method     ChildCareInsuranceFirmQuery orderByAddrBilling($order = Criteria::ASC) Order by the addr_billing column
 * @method     ChildCareInsuranceFirmQuery orderByAddrEmail($order = Criteria::ASC) Order by the addr_email column
 * @method     ChildCareInsuranceFirmQuery orderByPhoneMain($order = Criteria::ASC) Order by the phone_main column
 * @method     ChildCareInsuranceFirmQuery orderByPhoneAux($order = Criteria::ASC) Order by the phone_aux column
 * @method     ChildCareInsuranceFirmQuery orderByFaxMain($order = Criteria::ASC) Order by the fax_main column
 * @method     ChildCareInsuranceFirmQuery orderByFaxAux($order = Criteria::ASC) Order by the fax_aux column
 * @method     ChildCareInsuranceFirmQuery orderByContactPerson($order = Criteria::ASC) Order by the contact_person column
 * @method     ChildCareInsuranceFirmQuery orderByContactPhone($order = Criteria::ASC) Order by the contact_phone column
 * @method     ChildCareInsuranceFirmQuery orderByContactFax($order = Criteria::ASC) Order by the contact_fax column
 * @method     ChildCareInsuranceFirmQuery orderByContactEmail($order = Criteria::ASC) Order by the contact_email column
 * @method     ChildCareInsuranceFirmQuery orderByUseFrequency($order = Criteria::ASC) Order by the use_frequency column
 * @method     ChildCareInsuranceFirmQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareInsuranceFirmQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareInsuranceFirmQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareInsuranceFirmQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareInsuranceFirmQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareInsuranceFirmQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareInsuranceFirmQuery groupByFirmId() Group by the firm_id column
 * @method     ChildCareInsuranceFirmQuery groupByName() Group by the name column
 * @method     ChildCareInsuranceFirmQuery groupByIsoCountryId() Group by the iso_country_id column
 * @method     ChildCareInsuranceFirmQuery groupBySubArea() Group by the sub_area column
 * @method     ChildCareInsuranceFirmQuery groupByTypeNr() Group by the type_nr column
 * @method     ChildCareInsuranceFirmQuery groupByAddr() Group by the addr column
 * @method     ChildCareInsuranceFirmQuery groupByAddrMail() Group by the addr_mail column
 * @method     ChildCareInsuranceFirmQuery groupByAddrBilling() Group by the addr_billing column
 * @method     ChildCareInsuranceFirmQuery groupByAddrEmail() Group by the addr_email column
 * @method     ChildCareInsuranceFirmQuery groupByPhoneMain() Group by the phone_main column
 * @method     ChildCareInsuranceFirmQuery groupByPhoneAux() Group by the phone_aux column
 * @method     ChildCareInsuranceFirmQuery groupByFaxMain() Group by the fax_main column
 * @method     ChildCareInsuranceFirmQuery groupByFaxAux() Group by the fax_aux column
 * @method     ChildCareInsuranceFirmQuery groupByContactPerson() Group by the contact_person column
 * @method     ChildCareInsuranceFirmQuery groupByContactPhone() Group by the contact_phone column
 * @method     ChildCareInsuranceFirmQuery groupByContactFax() Group by the contact_fax column
 * @method     ChildCareInsuranceFirmQuery groupByContactEmail() Group by the contact_email column
 * @method     ChildCareInsuranceFirmQuery groupByUseFrequency() Group by the use_frequency column
 * @method     ChildCareInsuranceFirmQuery groupByStatus() Group by the status column
 * @method     ChildCareInsuranceFirmQuery groupByHistory() Group by the history column
 * @method     ChildCareInsuranceFirmQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareInsuranceFirmQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareInsuranceFirmQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareInsuranceFirmQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareInsuranceFirmQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareInsuranceFirmQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareInsuranceFirmQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareInsuranceFirmQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareInsuranceFirmQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareInsuranceFirmQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareInsuranceFirm findOne(ConnectionInterface $con = null) Return the first ChildCareInsuranceFirm matching the query
 * @method     ChildCareInsuranceFirm findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareInsuranceFirm matching the query, or a new ChildCareInsuranceFirm object populated from the query conditions when no match is found
 *
 * @method     ChildCareInsuranceFirm findOneByFirmId(string $firm_id) Return the first ChildCareInsuranceFirm filtered by the firm_id column
 * @method     ChildCareInsuranceFirm findOneByName(string $name) Return the first ChildCareInsuranceFirm filtered by the name column
 * @method     ChildCareInsuranceFirm findOneByIsoCountryId(string $iso_country_id) Return the first ChildCareInsuranceFirm filtered by the iso_country_id column
 * @method     ChildCareInsuranceFirm findOneBySubArea(string $sub_area) Return the first ChildCareInsuranceFirm filtered by the sub_area column
 * @method     ChildCareInsuranceFirm findOneByTypeNr(int $type_nr) Return the first ChildCareInsuranceFirm filtered by the type_nr column
 * @method     ChildCareInsuranceFirm findOneByAddr(string $addr) Return the first ChildCareInsuranceFirm filtered by the addr column
 * @method     ChildCareInsuranceFirm findOneByAddrMail(string $addr_mail) Return the first ChildCareInsuranceFirm filtered by the addr_mail column
 * @method     ChildCareInsuranceFirm findOneByAddrBilling(string $addr_billing) Return the first ChildCareInsuranceFirm filtered by the addr_billing column
 * @method     ChildCareInsuranceFirm findOneByAddrEmail(string $addr_email) Return the first ChildCareInsuranceFirm filtered by the addr_email column
 * @method     ChildCareInsuranceFirm findOneByPhoneMain(string $phone_main) Return the first ChildCareInsuranceFirm filtered by the phone_main column
 * @method     ChildCareInsuranceFirm findOneByPhoneAux(string $phone_aux) Return the first ChildCareInsuranceFirm filtered by the phone_aux column
 * @method     ChildCareInsuranceFirm findOneByFaxMain(string $fax_main) Return the first ChildCareInsuranceFirm filtered by the fax_main column
 * @method     ChildCareInsuranceFirm findOneByFaxAux(string $fax_aux) Return the first ChildCareInsuranceFirm filtered by the fax_aux column
 * @method     ChildCareInsuranceFirm findOneByContactPerson(string $contact_person) Return the first ChildCareInsuranceFirm filtered by the contact_person column
 * @method     ChildCareInsuranceFirm findOneByContactPhone(string $contact_phone) Return the first ChildCareInsuranceFirm filtered by the contact_phone column
 * @method     ChildCareInsuranceFirm findOneByContactFax(string $contact_fax) Return the first ChildCareInsuranceFirm filtered by the contact_fax column
 * @method     ChildCareInsuranceFirm findOneByContactEmail(string $contact_email) Return the first ChildCareInsuranceFirm filtered by the contact_email column
 * @method     ChildCareInsuranceFirm findOneByUseFrequency(string $use_frequency) Return the first ChildCareInsuranceFirm filtered by the use_frequency column
 * @method     ChildCareInsuranceFirm findOneByStatus(string $status) Return the first ChildCareInsuranceFirm filtered by the status column
 * @method     ChildCareInsuranceFirm findOneByHistory(string $history) Return the first ChildCareInsuranceFirm filtered by the history column
 * @method     ChildCareInsuranceFirm findOneByModifyId(string $modify_id) Return the first ChildCareInsuranceFirm filtered by the modify_id column
 * @method     ChildCareInsuranceFirm findOneByModifyTime(string $modify_time) Return the first ChildCareInsuranceFirm filtered by the modify_time column
 * @method     ChildCareInsuranceFirm findOneByCreateId(string $create_id) Return the first ChildCareInsuranceFirm filtered by the create_id column
 * @method     ChildCareInsuranceFirm findOneByCreateTime(string $create_time) Return the first ChildCareInsuranceFirm filtered by the create_time column *

 * @method     ChildCareInsuranceFirm requirePk($key, ConnectionInterface $con = null) Return the ChildCareInsuranceFirm by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOne(ConnectionInterface $con = null) Return the first ChildCareInsuranceFirm matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareInsuranceFirm requireOneByFirmId(string $firm_id) Return the first ChildCareInsuranceFirm filtered by the firm_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByName(string $name) Return the first ChildCareInsuranceFirm filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByIsoCountryId(string $iso_country_id) Return the first ChildCareInsuranceFirm filtered by the iso_country_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneBySubArea(string $sub_area) Return the first ChildCareInsuranceFirm filtered by the sub_area column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByTypeNr(int $type_nr) Return the first ChildCareInsuranceFirm filtered by the type_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByAddr(string $addr) Return the first ChildCareInsuranceFirm filtered by the addr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByAddrMail(string $addr_mail) Return the first ChildCareInsuranceFirm filtered by the addr_mail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByAddrBilling(string $addr_billing) Return the first ChildCareInsuranceFirm filtered by the addr_billing column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByAddrEmail(string $addr_email) Return the first ChildCareInsuranceFirm filtered by the addr_email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByPhoneMain(string $phone_main) Return the first ChildCareInsuranceFirm filtered by the phone_main column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByPhoneAux(string $phone_aux) Return the first ChildCareInsuranceFirm filtered by the phone_aux column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByFaxMain(string $fax_main) Return the first ChildCareInsuranceFirm filtered by the fax_main column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByFaxAux(string $fax_aux) Return the first ChildCareInsuranceFirm filtered by the fax_aux column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByContactPerson(string $contact_person) Return the first ChildCareInsuranceFirm filtered by the contact_person column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByContactPhone(string $contact_phone) Return the first ChildCareInsuranceFirm filtered by the contact_phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByContactFax(string $contact_fax) Return the first ChildCareInsuranceFirm filtered by the contact_fax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByContactEmail(string $contact_email) Return the first ChildCareInsuranceFirm filtered by the contact_email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByUseFrequency(string $use_frequency) Return the first ChildCareInsuranceFirm filtered by the use_frequency column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByStatus(string $status) Return the first ChildCareInsuranceFirm filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByHistory(string $history) Return the first ChildCareInsuranceFirm filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByModifyId(string $modify_id) Return the first ChildCareInsuranceFirm filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByModifyTime(string $modify_time) Return the first ChildCareInsuranceFirm filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByCreateId(string $create_id) Return the first ChildCareInsuranceFirm filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareInsuranceFirm requireOneByCreateTime(string $create_time) Return the first ChildCareInsuranceFirm filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareInsuranceFirm[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareInsuranceFirm objects based on current ModelCriteria
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByFirmId(string $firm_id) Return ChildCareInsuranceFirm objects filtered by the firm_id column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByName(string $name) Return ChildCareInsuranceFirm objects filtered by the name column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByIsoCountryId(string $iso_country_id) Return ChildCareInsuranceFirm objects filtered by the iso_country_id column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findBySubArea(string $sub_area) Return ChildCareInsuranceFirm objects filtered by the sub_area column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByTypeNr(int $type_nr) Return ChildCareInsuranceFirm objects filtered by the type_nr column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByAddr(string $addr) Return ChildCareInsuranceFirm objects filtered by the addr column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByAddrMail(string $addr_mail) Return ChildCareInsuranceFirm objects filtered by the addr_mail column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByAddrBilling(string $addr_billing) Return ChildCareInsuranceFirm objects filtered by the addr_billing column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByAddrEmail(string $addr_email) Return ChildCareInsuranceFirm objects filtered by the addr_email column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByPhoneMain(string $phone_main) Return ChildCareInsuranceFirm objects filtered by the phone_main column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByPhoneAux(string $phone_aux) Return ChildCareInsuranceFirm objects filtered by the phone_aux column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByFaxMain(string $fax_main) Return ChildCareInsuranceFirm objects filtered by the fax_main column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByFaxAux(string $fax_aux) Return ChildCareInsuranceFirm objects filtered by the fax_aux column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByContactPerson(string $contact_person) Return ChildCareInsuranceFirm objects filtered by the contact_person column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByContactPhone(string $contact_phone) Return ChildCareInsuranceFirm objects filtered by the contact_phone column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByContactFax(string $contact_fax) Return ChildCareInsuranceFirm objects filtered by the contact_fax column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByContactEmail(string $contact_email) Return ChildCareInsuranceFirm objects filtered by the contact_email column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByUseFrequency(string $use_frequency) Return ChildCareInsuranceFirm objects filtered by the use_frequency column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByStatus(string $status) Return ChildCareInsuranceFirm objects filtered by the status column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByHistory(string $history) Return ChildCareInsuranceFirm objects filtered by the history column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareInsuranceFirm objects filtered by the modify_id column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareInsuranceFirm objects filtered by the modify_time column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareInsuranceFirm objects filtered by the create_id column
 * @method     ChildCareInsuranceFirm[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareInsuranceFirm objects filtered by the create_time column
 * @method     ChildCareInsuranceFirm[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareInsuranceFirmQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareInsuranceFirmQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareInsuranceFirm', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareInsuranceFirmQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareInsuranceFirmQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareInsuranceFirmQuery) {
            return $criteria;
        }
        $query = new ChildCareInsuranceFirmQuery();
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
     * @return ChildCareInsuranceFirm|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareInsuranceFirmTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareInsuranceFirmTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareInsuranceFirm A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT firm_id, name, iso_country_id, sub_area, type_nr, addr, addr_mail, addr_billing, addr_email, phone_main, phone_aux, fax_main, fax_aux, contact_person, contact_phone, contact_fax, contact_email, use_frequency, status, history, modify_id, modify_time, create_id, create_time FROM care_insurance_firm WHERE firm_id = :p0';
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
            /** @var ChildCareInsuranceFirm $obj */
            $obj = new ChildCareInsuranceFirm();
            $obj->hydrate($row);
            CareInsuranceFirmTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareInsuranceFirm|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_FIRM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_FIRM_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the firm_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFirmId('fooValue');   // WHERE firm_id = 'fooValue'
     * $query->filterByFirmId('%fooValue%', Criteria::LIKE); // WHERE firm_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firmId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByFirmId($firmId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firmId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_FIRM_ID, $firmId, $comparison);
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
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the iso_country_id column
     *
     * Example usage:
     * <code>
     * $query->filterByIsoCountryId('fooValue');   // WHERE iso_country_id = 'fooValue'
     * $query->filterByIsoCountryId('%fooValue%', Criteria::LIKE); // WHERE iso_country_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isoCountryId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByIsoCountryId($isoCountryId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isoCountryId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_ISO_COUNTRY_ID, $isoCountryId, $comparison);
    }

    /**
     * Filter the query on the sub_area column
     *
     * Example usage:
     * <code>
     * $query->filterBySubArea('fooValue');   // WHERE sub_area = 'fooValue'
     * $query->filterBySubArea('%fooValue%', Criteria::LIKE); // WHERE sub_area LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subArea The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterBySubArea($subArea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subArea)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_SUB_AREA, $subArea, $comparison);
    }

    /**
     * Filter the query on the type_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeNr(1234); // WHERE type_nr = 1234
     * $query->filterByTypeNr(array(12, 34)); // WHERE type_nr IN (12, 34)
     * $query->filterByTypeNr(array('min' => 12)); // WHERE type_nr > 12
     * </code>
     *
     * @param     mixed $typeNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByTypeNr($typeNr = null, $comparison = null)
    {
        if (is_array($typeNr)) {
            $useMinMax = false;
            if (isset($typeNr['min'])) {
                $this->addUsingAlias(CareInsuranceFirmTableMap::COL_TYPE_NR, $typeNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeNr['max'])) {
                $this->addUsingAlias(CareInsuranceFirmTableMap::COL_TYPE_NR, $typeNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_TYPE_NR, $typeNr, $comparison);
    }

    /**
     * Filter the query on the addr column
     *
     * Example usage:
     * <code>
     * $query->filterByAddr('fooValue');   // WHERE addr = 'fooValue'
     * $query->filterByAddr('%fooValue%', Criteria::LIKE); // WHERE addr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByAddr($addr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_ADDR, $addr, $comparison);
    }

    /**
     * Filter the query on the addr_mail column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrMail('fooValue');   // WHERE addr_mail = 'fooValue'
     * $query->filterByAddrMail('%fooValue%', Criteria::LIKE); // WHERE addr_mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrMail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByAddrMail($addrMail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrMail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_ADDR_MAIL, $addrMail, $comparison);
    }

    /**
     * Filter the query on the addr_billing column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrBilling('fooValue');   // WHERE addr_billing = 'fooValue'
     * $query->filterByAddrBilling('%fooValue%', Criteria::LIKE); // WHERE addr_billing LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrBilling The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByAddrBilling($addrBilling = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrBilling)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_ADDR_BILLING, $addrBilling, $comparison);
    }

    /**
     * Filter the query on the addr_email column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrEmail('fooValue');   // WHERE addr_email = 'fooValue'
     * $query->filterByAddrEmail('%fooValue%', Criteria::LIKE); // WHERE addr_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrEmail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByAddrEmail($addrEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrEmail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_ADDR_EMAIL, $addrEmail, $comparison);
    }

    /**
     * Filter the query on the phone_main column
     *
     * Example usage:
     * <code>
     * $query->filterByPhoneMain('fooValue');   // WHERE phone_main = 'fooValue'
     * $query->filterByPhoneMain('%fooValue%', Criteria::LIKE); // WHERE phone_main LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phoneMain The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByPhoneMain($phoneMain = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phoneMain)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_PHONE_MAIN, $phoneMain, $comparison);
    }

    /**
     * Filter the query on the phone_aux column
     *
     * Example usage:
     * <code>
     * $query->filterByPhoneAux('fooValue');   // WHERE phone_aux = 'fooValue'
     * $query->filterByPhoneAux('%fooValue%', Criteria::LIKE); // WHERE phone_aux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phoneAux The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByPhoneAux($phoneAux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phoneAux)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_PHONE_AUX, $phoneAux, $comparison);
    }

    /**
     * Filter the query on the fax_main column
     *
     * Example usage:
     * <code>
     * $query->filterByFaxMain('fooValue');   // WHERE fax_main = 'fooValue'
     * $query->filterByFaxMain('%fooValue%', Criteria::LIKE); // WHERE fax_main LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faxMain The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByFaxMain($faxMain = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faxMain)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_FAX_MAIN, $faxMain, $comparison);
    }

    /**
     * Filter the query on the fax_aux column
     *
     * Example usage:
     * <code>
     * $query->filterByFaxAux('fooValue');   // WHERE fax_aux = 'fooValue'
     * $query->filterByFaxAux('%fooValue%', Criteria::LIKE); // WHERE fax_aux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faxAux The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByFaxAux($faxAux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faxAux)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_FAX_AUX, $faxAux, $comparison);
    }

    /**
     * Filter the query on the contact_person column
     *
     * Example usage:
     * <code>
     * $query->filterByContactPerson('fooValue');   // WHERE contact_person = 'fooValue'
     * $query->filterByContactPerson('%fooValue%', Criteria::LIKE); // WHERE contact_person LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactPerson The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByContactPerson($contactPerson = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactPerson)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_CONTACT_PERSON, $contactPerson, $comparison);
    }

    /**
     * Filter the query on the contact_phone column
     *
     * Example usage:
     * <code>
     * $query->filterByContactPhone('fooValue');   // WHERE contact_phone = 'fooValue'
     * $query->filterByContactPhone('%fooValue%', Criteria::LIKE); // WHERE contact_phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactPhone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByContactPhone($contactPhone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactPhone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_CONTACT_PHONE, $contactPhone, $comparison);
    }

    /**
     * Filter the query on the contact_fax column
     *
     * Example usage:
     * <code>
     * $query->filterByContactFax('fooValue');   // WHERE contact_fax = 'fooValue'
     * $query->filterByContactFax('%fooValue%', Criteria::LIKE); // WHERE contact_fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactFax The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByContactFax($contactFax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactFax)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_CONTACT_FAX, $contactFax, $comparison);
    }

    /**
     * Filter the query on the contact_email column
     *
     * Example usage:
     * <code>
     * $query->filterByContactEmail('fooValue');   // WHERE contact_email = 'fooValue'
     * $query->filterByContactEmail('%fooValue%', Criteria::LIKE); // WHERE contact_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactEmail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByContactEmail($contactEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactEmail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_CONTACT_EMAIL, $contactEmail, $comparison);
    }

    /**
     * Filter the query on the use_frequency column
     *
     * Example usage:
     * <code>
     * $query->filterByUseFrequency(1234); // WHERE use_frequency = 1234
     * $query->filterByUseFrequency(array(12, 34)); // WHERE use_frequency IN (12, 34)
     * $query->filterByUseFrequency(array('min' => 12)); // WHERE use_frequency > 12
     * </code>
     *
     * @param     mixed $useFrequency The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByUseFrequency($useFrequency = null, $comparison = null)
    {
        if (is_array($useFrequency)) {
            $useMinMax = false;
            if (isset($useFrequency['min'])) {
                $this->addUsingAlias(CareInsuranceFirmTableMap::COL_USE_FREQUENCY, $useFrequency['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($useFrequency['max'])) {
                $this->addUsingAlias(CareInsuranceFirmTableMap::COL_USE_FREQUENCY, $useFrequency['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_USE_FREQUENCY, $useFrequency, $comparison);
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
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareInsuranceFirmTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareInsuranceFirmTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareInsuranceFirmTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareInsuranceFirmTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareInsuranceFirmTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareInsuranceFirm $careInsuranceFirm Object to remove from the list of results
     *
     * @return $this|ChildCareInsuranceFirmQuery The current query, for fluid interface
     */
    public function prune($careInsuranceFirm = null)
    {
        if ($careInsuranceFirm) {
            $this->addUsingAlias(CareInsuranceFirmTableMap::COL_FIRM_ID, $careInsuranceFirm->getFirmId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_insurance_firm table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareInsuranceFirmTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareInsuranceFirmTableMap::clearInstancePool();
            CareInsuranceFirmTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareInsuranceFirmTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareInsuranceFirmTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareInsuranceFirmTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareInsuranceFirmTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareInsuranceFirmQuery
