<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareTzInsurancesAdmin as ChildCareTzInsurancesAdmin;
use CareMd\CareMd\CareTzInsurancesAdminQuery as ChildCareTzInsurancesAdminQuery;
use CareMd\CareMd\Map\CareTzInsurancesAdminTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_tz_insurances_admin' table.
 *
 *
 *
 * @method     ChildCareTzInsurancesAdminQuery orderByInsuranceId($order = Criteria::ASC) Order by the insurance_ID column
 * @method     ChildCareTzInsurancesAdminQuery orderByInsurer($order = Criteria::ASC) Order by the insurer column
 * @method     ChildCareTzInsurancesAdminQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildCareTzInsurancesAdminQuery orderByMaxPay($order = Criteria::ASC) Order by the max_pay column
 * @method     ChildCareTzInsurancesAdminQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     ChildCareTzInsurancesAdminQuery orderByCreation($order = Criteria::ASC) Order by the creation column
 * @method     ChildCareTzInsurancesAdminQuery orderByIdInsurerHist($order = Criteria::ASC) Order by the id_insurer_hist column
 * @method     ChildCareTzInsurancesAdminQuery orderByNameHist($order = Criteria::ASC) Order by the name_hist column
 * @method     ChildCareTzInsurancesAdminQuery orderByMaxPayHist($order = Criteria::ASC) Order by the max_pay_hist column
 * @method     ChildCareTzInsurancesAdminQuery orderByDeletedHist($order = Criteria::ASC) Order by the deleted_hist column
 * @method     ChildCareTzInsurancesAdminQuery orderByContactPerson($order = Criteria::ASC) Order by the contact_person column
 * @method     ChildCareTzInsurancesAdminQuery orderByContactPersonHist($order = Criteria::ASC) Order by the contact_person_hist column
 * @method     ChildCareTzInsurancesAdminQuery orderByPoBox($order = Criteria::ASC) Order by the po_box column
 * @method     ChildCareTzInsurancesAdminQuery orderByPoBoxHist($order = Criteria::ASC) Order by the po_box_hist column
 * @method     ChildCareTzInsurancesAdminQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     ChildCareTzInsurancesAdminQuery orderByCityHist($order = Criteria::ASC) Order by the city_hist column
 * @method     ChildCareTzInsurancesAdminQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     ChildCareTzInsurancesAdminQuery orderByPhoneHist($order = Criteria::ASC) Order by the phone_hist column
 * @method     ChildCareTzInsurancesAdminQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildCareTzInsurancesAdminQuery orderByEmailHist($order = Criteria::ASC) Order by the email_hist column
 *
 * @method     ChildCareTzInsurancesAdminQuery groupByInsuranceId() Group by the insurance_ID column
 * @method     ChildCareTzInsurancesAdminQuery groupByInsurer() Group by the insurer column
 * @method     ChildCareTzInsurancesAdminQuery groupByName() Group by the name column
 * @method     ChildCareTzInsurancesAdminQuery groupByMaxPay() Group by the max_pay column
 * @method     ChildCareTzInsurancesAdminQuery groupByDeleted() Group by the deleted column
 * @method     ChildCareTzInsurancesAdminQuery groupByCreation() Group by the creation column
 * @method     ChildCareTzInsurancesAdminQuery groupByIdInsurerHist() Group by the id_insurer_hist column
 * @method     ChildCareTzInsurancesAdminQuery groupByNameHist() Group by the name_hist column
 * @method     ChildCareTzInsurancesAdminQuery groupByMaxPayHist() Group by the max_pay_hist column
 * @method     ChildCareTzInsurancesAdminQuery groupByDeletedHist() Group by the deleted_hist column
 * @method     ChildCareTzInsurancesAdminQuery groupByContactPerson() Group by the contact_person column
 * @method     ChildCareTzInsurancesAdminQuery groupByContactPersonHist() Group by the contact_person_hist column
 * @method     ChildCareTzInsurancesAdminQuery groupByPoBox() Group by the po_box column
 * @method     ChildCareTzInsurancesAdminQuery groupByPoBoxHist() Group by the po_box_hist column
 * @method     ChildCareTzInsurancesAdminQuery groupByCity() Group by the city column
 * @method     ChildCareTzInsurancesAdminQuery groupByCityHist() Group by the city_hist column
 * @method     ChildCareTzInsurancesAdminQuery groupByPhone() Group by the phone column
 * @method     ChildCareTzInsurancesAdminQuery groupByPhoneHist() Group by the phone_hist column
 * @method     ChildCareTzInsurancesAdminQuery groupByEmail() Group by the email column
 * @method     ChildCareTzInsurancesAdminQuery groupByEmailHist() Group by the email_hist column
 *
 * @method     ChildCareTzInsurancesAdminQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareTzInsurancesAdminQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareTzInsurancesAdminQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareTzInsurancesAdminQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareTzInsurancesAdminQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareTzInsurancesAdminQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareTzInsurancesAdmin findOne(ConnectionInterface $con = null) Return the first ChildCareTzInsurancesAdmin matching the query
 * @method     ChildCareTzInsurancesAdmin findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareTzInsurancesAdmin matching the query, or a new ChildCareTzInsurancesAdmin object populated from the query conditions when no match is found
 *
 * @method     ChildCareTzInsurancesAdmin findOneByInsuranceId(int $insurance_ID) Return the first ChildCareTzInsurancesAdmin filtered by the insurance_ID column
 * @method     ChildCareTzInsurancesAdmin findOneByInsurer(int $insurer) Return the first ChildCareTzInsurancesAdmin filtered by the insurer column
 * @method     ChildCareTzInsurancesAdmin findOneByName(string $name) Return the first ChildCareTzInsurancesAdmin filtered by the name column
 * @method     ChildCareTzInsurancesAdmin findOneByMaxPay(int $max_pay) Return the first ChildCareTzInsurancesAdmin filtered by the max_pay column
 * @method     ChildCareTzInsurancesAdmin findOneByDeleted(boolean $deleted) Return the first ChildCareTzInsurancesAdmin filtered by the deleted column
 * @method     ChildCareTzInsurancesAdmin findOneByCreation(string $creation) Return the first ChildCareTzInsurancesAdmin filtered by the creation column
 * @method     ChildCareTzInsurancesAdmin findOneByIdInsurerHist(string $id_insurer_hist) Return the first ChildCareTzInsurancesAdmin filtered by the id_insurer_hist column
 * @method     ChildCareTzInsurancesAdmin findOneByNameHist(string $name_hist) Return the first ChildCareTzInsurancesAdmin filtered by the name_hist column
 * @method     ChildCareTzInsurancesAdmin findOneByMaxPayHist(string $max_pay_hist) Return the first ChildCareTzInsurancesAdmin filtered by the max_pay_hist column
 * @method     ChildCareTzInsurancesAdmin findOneByDeletedHist(string $deleted_hist) Return the first ChildCareTzInsurancesAdmin filtered by the deleted_hist column
 * @method     ChildCareTzInsurancesAdmin findOneByContactPerson(string $contact_person) Return the first ChildCareTzInsurancesAdmin filtered by the contact_person column
 * @method     ChildCareTzInsurancesAdmin findOneByContactPersonHist(string $contact_person_hist) Return the first ChildCareTzInsurancesAdmin filtered by the contact_person_hist column
 * @method     ChildCareTzInsurancesAdmin findOneByPoBox(string $po_box) Return the first ChildCareTzInsurancesAdmin filtered by the po_box column
 * @method     ChildCareTzInsurancesAdmin findOneByPoBoxHist(string $po_box_hist) Return the first ChildCareTzInsurancesAdmin filtered by the po_box_hist column
 * @method     ChildCareTzInsurancesAdmin findOneByCity(string $city) Return the first ChildCareTzInsurancesAdmin filtered by the city column
 * @method     ChildCareTzInsurancesAdmin findOneByCityHist(string $city_hist) Return the first ChildCareTzInsurancesAdmin filtered by the city_hist column
 * @method     ChildCareTzInsurancesAdmin findOneByPhone(string $phone) Return the first ChildCareTzInsurancesAdmin filtered by the phone column
 * @method     ChildCareTzInsurancesAdmin findOneByPhoneHist(string $phone_hist) Return the first ChildCareTzInsurancesAdmin filtered by the phone_hist column
 * @method     ChildCareTzInsurancesAdmin findOneByEmail(string $email) Return the first ChildCareTzInsurancesAdmin filtered by the email column
 * @method     ChildCareTzInsurancesAdmin findOneByEmailHist(string $email_hist) Return the first ChildCareTzInsurancesAdmin filtered by the email_hist column *

 * @method     ChildCareTzInsurancesAdmin requirePk($key, ConnectionInterface $con = null) Return the ChildCareTzInsurancesAdmin by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOne(ConnectionInterface $con = null) Return the first ChildCareTzInsurancesAdmin matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzInsurancesAdmin requireOneByInsuranceId(int $insurance_ID) Return the first ChildCareTzInsurancesAdmin filtered by the insurance_ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByInsurer(int $insurer) Return the first ChildCareTzInsurancesAdmin filtered by the insurer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByName(string $name) Return the first ChildCareTzInsurancesAdmin filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByMaxPay(int $max_pay) Return the first ChildCareTzInsurancesAdmin filtered by the max_pay column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByDeleted(boolean $deleted) Return the first ChildCareTzInsurancesAdmin filtered by the deleted column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByCreation(string $creation) Return the first ChildCareTzInsurancesAdmin filtered by the creation column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByIdInsurerHist(string $id_insurer_hist) Return the first ChildCareTzInsurancesAdmin filtered by the id_insurer_hist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByNameHist(string $name_hist) Return the first ChildCareTzInsurancesAdmin filtered by the name_hist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByMaxPayHist(string $max_pay_hist) Return the first ChildCareTzInsurancesAdmin filtered by the max_pay_hist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByDeletedHist(string $deleted_hist) Return the first ChildCareTzInsurancesAdmin filtered by the deleted_hist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByContactPerson(string $contact_person) Return the first ChildCareTzInsurancesAdmin filtered by the contact_person column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByContactPersonHist(string $contact_person_hist) Return the first ChildCareTzInsurancesAdmin filtered by the contact_person_hist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByPoBox(string $po_box) Return the first ChildCareTzInsurancesAdmin filtered by the po_box column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByPoBoxHist(string $po_box_hist) Return the first ChildCareTzInsurancesAdmin filtered by the po_box_hist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByCity(string $city) Return the first ChildCareTzInsurancesAdmin filtered by the city column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByCityHist(string $city_hist) Return the first ChildCareTzInsurancesAdmin filtered by the city_hist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByPhone(string $phone) Return the first ChildCareTzInsurancesAdmin filtered by the phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByPhoneHist(string $phone_hist) Return the first ChildCareTzInsurancesAdmin filtered by the phone_hist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByEmail(string $email) Return the first ChildCareTzInsurancesAdmin filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareTzInsurancesAdmin requireOneByEmailHist(string $email_hist) Return the first ChildCareTzInsurancesAdmin filtered by the email_hist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareTzInsurancesAdmin objects based on current ModelCriteria
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByInsuranceId(int $insurance_ID) Return ChildCareTzInsurancesAdmin objects filtered by the insurance_ID column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByInsurer(int $insurer) Return ChildCareTzInsurancesAdmin objects filtered by the insurer column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByName(string $name) Return ChildCareTzInsurancesAdmin objects filtered by the name column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByMaxPay(int $max_pay) Return ChildCareTzInsurancesAdmin objects filtered by the max_pay column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByDeleted(boolean $deleted) Return ChildCareTzInsurancesAdmin objects filtered by the deleted column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByCreation(string $creation) Return ChildCareTzInsurancesAdmin objects filtered by the creation column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByIdInsurerHist(string $id_insurer_hist) Return ChildCareTzInsurancesAdmin objects filtered by the id_insurer_hist column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByNameHist(string $name_hist) Return ChildCareTzInsurancesAdmin objects filtered by the name_hist column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByMaxPayHist(string $max_pay_hist) Return ChildCareTzInsurancesAdmin objects filtered by the max_pay_hist column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByDeletedHist(string $deleted_hist) Return ChildCareTzInsurancesAdmin objects filtered by the deleted_hist column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByContactPerson(string $contact_person) Return ChildCareTzInsurancesAdmin objects filtered by the contact_person column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByContactPersonHist(string $contact_person_hist) Return ChildCareTzInsurancesAdmin objects filtered by the contact_person_hist column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByPoBox(string $po_box) Return ChildCareTzInsurancesAdmin objects filtered by the po_box column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByPoBoxHist(string $po_box_hist) Return ChildCareTzInsurancesAdmin objects filtered by the po_box_hist column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByCity(string $city) Return ChildCareTzInsurancesAdmin objects filtered by the city column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByCityHist(string $city_hist) Return ChildCareTzInsurancesAdmin objects filtered by the city_hist column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByPhone(string $phone) Return ChildCareTzInsurancesAdmin objects filtered by the phone column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByPhoneHist(string $phone_hist) Return ChildCareTzInsurancesAdmin objects filtered by the phone_hist column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByEmail(string $email) Return ChildCareTzInsurancesAdmin objects filtered by the email column
 * @method     ChildCareTzInsurancesAdmin[]|ObjectCollection findByEmailHist(string $email_hist) Return ChildCareTzInsurancesAdmin objects filtered by the email_hist column
 * @method     ChildCareTzInsurancesAdmin[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareTzInsurancesAdminQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareTzInsurancesAdminQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareTzInsurancesAdmin', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareTzInsurancesAdminQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareTzInsurancesAdminQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareTzInsurancesAdminQuery) {
            return $criteria;
        }
        $query = new ChildCareTzInsurancesAdminQuery();
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
     * @return ChildCareTzInsurancesAdmin|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareTzInsurancesAdminTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareTzInsurancesAdminTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareTzInsurancesAdmin A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT insurance_ID, insurer, name, max_pay, deleted, creation, id_insurer_hist, name_hist, max_pay_hist, deleted_hist, contact_person, contact_person_hist, po_box, po_box_hist, city, city_hist, phone, phone_hist, email, email_hist FROM care_tz_insurances_admin WHERE insurance_ID = :p0';
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
            /** @var ChildCareTzInsurancesAdmin $obj */
            $obj = new ChildCareTzInsurancesAdmin();
            $obj->hydrate($row);
            CareTzInsurancesAdminTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareTzInsurancesAdmin|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the insurance_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceId(1234); // WHERE insurance_ID = 1234
     * $query->filterByInsuranceId(array(12, 34)); // WHERE insurance_ID IN (12, 34)
     * $query->filterByInsuranceId(array('min' => 12)); // WHERE insurance_ID > 12
     * </code>
     *
     * @param     mixed $insuranceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByInsuranceId($insuranceId = null, $comparison = null)
    {
        if (is_array($insuranceId)) {
            $useMinMax = false;
            if (isset($insuranceId['min'])) {
                $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID, $insuranceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceId['max'])) {
                $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID, $insuranceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID, $insuranceId, $comparison);
    }

    /**
     * Filter the query on the insurer column
     *
     * Example usage:
     * <code>
     * $query->filterByInsurer(1234); // WHERE insurer = 1234
     * $query->filterByInsurer(array(12, 34)); // WHERE insurer IN (12, 34)
     * $query->filterByInsurer(array('min' => 12)); // WHERE insurer > 12
     * </code>
     *
     * @param     mixed $insurer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByInsurer($insurer = null, $comparison = null)
    {
        if (is_array($insurer)) {
            $useMinMax = false;
            if (isset($insurer['min'])) {
                $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_INSURER, $insurer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insurer['max'])) {
                $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_INSURER, $insurer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_INSURER, $insurer, $comparison);
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
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the max_pay column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxPay(1234); // WHERE max_pay = 1234
     * $query->filterByMaxPay(array(12, 34)); // WHERE max_pay IN (12, 34)
     * $query->filterByMaxPay(array('min' => 12)); // WHERE max_pay > 12
     * </code>
     *
     * @param     mixed $maxPay The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByMaxPay($maxPay = null, $comparison = null)
    {
        if (is_array($maxPay)) {
            $useMinMax = false;
            if (isset($maxPay['min'])) {
                $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_MAX_PAY, $maxPay['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxPay['max'])) {
                $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_MAX_PAY, $maxPay['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_MAX_PAY, $maxPay, $comparison);
    }

    /**
     * Filter the query on the deleted column
     *
     * Example usage:
     * <code>
     * $query->filterByDeleted(true); // WHERE deleted = true
     * $query->filterByDeleted('yes'); // WHERE deleted = true
     * </code>
     *
     * @param     boolean|string $deleted The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByDeleted($deleted = null, $comparison = null)
    {
        if (is_string($deleted)) {
            $deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_DELETED, $deleted, $comparison);
    }

    /**
     * Filter the query on the creation column
     *
     * Example usage:
     * <code>
     * $query->filterByCreation('fooValue');   // WHERE creation = 'fooValue'
     * $query->filterByCreation('%fooValue%', Criteria::LIKE); // WHERE creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creation The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByCreation($creation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creation)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_CREATION, $creation, $comparison);
    }

    /**
     * Filter the query on the id_insurer_hist column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInsurerHist('fooValue');   // WHERE id_insurer_hist = 'fooValue'
     * $query->filterByIdInsurerHist('%fooValue%', Criteria::LIKE); // WHERE id_insurer_hist LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idInsurerHist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByIdInsurerHist($idInsurerHist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idInsurerHist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_ID_INSURER_HIST, $idInsurerHist, $comparison);
    }

    /**
     * Filter the query on the name_hist column
     *
     * Example usage:
     * <code>
     * $query->filterByNameHist('fooValue');   // WHERE name_hist = 'fooValue'
     * $query->filterByNameHist('%fooValue%', Criteria::LIKE); // WHERE name_hist LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameHist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByNameHist($nameHist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameHist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_NAME_HIST, $nameHist, $comparison);
    }

    /**
     * Filter the query on the max_pay_hist column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxPayHist('fooValue');   // WHERE max_pay_hist = 'fooValue'
     * $query->filterByMaxPayHist('%fooValue%', Criteria::LIKE); // WHERE max_pay_hist LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maxPayHist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByMaxPayHist($maxPayHist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maxPayHist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_MAX_PAY_HIST, $maxPayHist, $comparison);
    }

    /**
     * Filter the query on the deleted_hist column
     *
     * Example usage:
     * <code>
     * $query->filterByDeletedHist('fooValue');   // WHERE deleted_hist = 'fooValue'
     * $query->filterByDeletedHist('%fooValue%', Criteria::LIKE); // WHERE deleted_hist LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deletedHist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByDeletedHist($deletedHist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deletedHist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_DELETED_HIST, $deletedHist, $comparison);
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
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByContactPerson($contactPerson = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactPerson)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON, $contactPerson, $comparison);
    }

    /**
     * Filter the query on the contact_person_hist column
     *
     * Example usage:
     * <code>
     * $query->filterByContactPersonHist('fooValue');   // WHERE contact_person_hist = 'fooValue'
     * $query->filterByContactPersonHist('%fooValue%', Criteria::LIKE); // WHERE contact_person_hist LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactPersonHist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByContactPersonHist($contactPersonHist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactPersonHist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_CONTACT_PERSON_HIST, $contactPersonHist, $comparison);
    }

    /**
     * Filter the query on the po_box column
     *
     * Example usage:
     * <code>
     * $query->filterByPoBox('fooValue');   // WHERE po_box = 'fooValue'
     * $query->filterByPoBox('%fooValue%', Criteria::LIKE); // WHERE po_box LIKE '%fooValue%'
     * </code>
     *
     * @param     string $poBox The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByPoBox($poBox = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($poBox)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_PO_BOX, $poBox, $comparison);
    }

    /**
     * Filter the query on the po_box_hist column
     *
     * Example usage:
     * <code>
     * $query->filterByPoBoxHist('fooValue');   // WHERE po_box_hist = 'fooValue'
     * $query->filterByPoBoxHist('%fooValue%', Criteria::LIKE); // WHERE po_box_hist LIKE '%fooValue%'
     * </code>
     *
     * @param     string $poBoxHist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByPoBoxHist($poBoxHist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($poBoxHist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_PO_BOX_HIST, $poBoxHist, $comparison);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%', Criteria::LIKE); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_CITY, $city, $comparison);
    }

    /**
     * Filter the query on the city_hist column
     *
     * Example usage:
     * <code>
     * $query->filterByCityHist('fooValue');   // WHERE city_hist = 'fooValue'
     * $query->filterByCityHist('%fooValue%', Criteria::LIKE); // WHERE city_hist LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cityHist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByCityHist($cityHist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cityHist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_CITY_HIST, $cityHist, $comparison);
    }

    /**
     * Filter the query on the phone column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone('fooValue');   // WHERE phone = 'fooValue'
     * $query->filterByPhone('%fooValue%', Criteria::LIKE); // WHERE phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByPhone($phone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_PHONE, $phone, $comparison);
    }

    /**
     * Filter the query on the phone_hist column
     *
     * Example usage:
     * <code>
     * $query->filterByPhoneHist('fooValue');   // WHERE phone_hist = 'fooValue'
     * $query->filterByPhoneHist('%fooValue%', Criteria::LIKE); // WHERE phone_hist LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phoneHist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByPhoneHist($phoneHist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phoneHist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_PHONE_HIST, $phoneHist, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the email_hist column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailHist('fooValue');   // WHERE email_hist = 'fooValue'
     * $query->filterByEmailHist('%fooValue%', Criteria::LIKE); // WHERE email_hist LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailHist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function filterByEmailHist($emailHist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailHist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_EMAIL_HIST, $emailHist, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareTzInsurancesAdmin $careTzInsurancesAdmin Object to remove from the list of results
     *
     * @return $this|ChildCareTzInsurancesAdminQuery The current query, for fluid interface
     */
    public function prune($careTzInsurancesAdmin = null)
    {
        if ($careTzInsurancesAdmin) {
            $this->addUsingAlias(CareTzInsurancesAdminTableMap::COL_INSURANCE_ID, $careTzInsurancesAdmin->getInsuranceId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_tz_insurances_admin table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzInsurancesAdminTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareTzInsurancesAdminTableMap::clearInstancePool();
            CareTzInsurancesAdminTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzInsurancesAdminTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareTzInsurancesAdminTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareTzInsurancesAdminTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareTzInsurancesAdminTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareTzInsurancesAdminQuery
