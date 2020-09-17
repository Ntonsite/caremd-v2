<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\CareNhifClaims as ChildCareNhifClaims;
use CareMd\CareMd\CareNhifClaimsQuery as ChildCareNhifClaimsQuery;
use CareMd\CareMd\Map\CareNhifClaimsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_nhif_claims' table.
 *
 *
 *
 * @method     ChildCareNhifClaimsQuery orderByFolioid($order = Criteria::ASC) Order by the FolioID column
 * @method     ChildCareNhifClaimsQuery orderByClaimyear($order = Criteria::ASC) Order by the ClaimYear column
 * @method     ChildCareNhifClaimsQuery orderByClaimmonth($order = Criteria::ASC) Order by the ClaimMonth column
 * @method     ChildCareNhifClaimsQuery orderByFoliono($order = Criteria::ASC) Order by the FolioNo column
 * @method     ChildCareNhifClaimsQuery orderBySerialno($order = Criteria::ASC) Order by the SerialNo column
 * @method     ChildCareNhifClaimsQuery orderByCardno($order = Criteria::ASC) Order by the CardNo column
 * @method     ChildCareNhifClaimsQuery orderByAge($order = Criteria::ASC) Order by the Age column
 * @method     ChildCareNhifClaimsQuery orderByTelephoneno($order = Criteria::ASC) Order by the TelephoneNo column
 * @method     ChildCareNhifClaimsQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareNhifClaimsQuery orderByClaimStatus($order = Criteria::ASC) Order by the claim_status column
 * @method     ChildCareNhifClaimsQuery orderByCreatedby($order = Criteria::ASC) Order by the CreatedBy column
 * @method     ChildCareNhifClaimsQuery orderByDatecreated($order = Criteria::ASC) Order by the DateCreated column
 * @method     ChildCareNhifClaimsQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the LastModifiedBy column
 * @method     ChildCareNhifClaimsQuery orderByLastmodified($order = Criteria::ASC) Order by the LastModified column
 *
 * @method     ChildCareNhifClaimsQuery groupByFolioid() Group by the FolioID column
 * @method     ChildCareNhifClaimsQuery groupByClaimyear() Group by the ClaimYear column
 * @method     ChildCareNhifClaimsQuery groupByClaimmonth() Group by the ClaimMonth column
 * @method     ChildCareNhifClaimsQuery groupByFoliono() Group by the FolioNo column
 * @method     ChildCareNhifClaimsQuery groupBySerialno() Group by the SerialNo column
 * @method     ChildCareNhifClaimsQuery groupByCardno() Group by the CardNo column
 * @method     ChildCareNhifClaimsQuery groupByAge() Group by the Age column
 * @method     ChildCareNhifClaimsQuery groupByTelephoneno() Group by the TelephoneNo column
 * @method     ChildCareNhifClaimsQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareNhifClaimsQuery groupByClaimStatus() Group by the claim_status column
 * @method     ChildCareNhifClaimsQuery groupByCreatedby() Group by the CreatedBy column
 * @method     ChildCareNhifClaimsQuery groupByDatecreated() Group by the DateCreated column
 * @method     ChildCareNhifClaimsQuery groupByLastmodifiedby() Group by the LastModifiedBy column
 * @method     ChildCareNhifClaimsQuery groupByLastmodified() Group by the LastModified column
 *
 * @method     ChildCareNhifClaimsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareNhifClaimsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareNhifClaimsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareNhifClaimsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareNhifClaimsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareNhifClaimsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareNhifClaims findOne(ConnectionInterface $con = null) Return the first ChildCareNhifClaims matching the query
 * @method     ChildCareNhifClaims findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareNhifClaims matching the query, or a new ChildCareNhifClaims object populated from the query conditions when no match is found
 *
 * @method     ChildCareNhifClaims findOneByFolioid(string $FolioID) Return the first ChildCareNhifClaims filtered by the FolioID column
 * @method     ChildCareNhifClaims findOneByClaimyear(int $ClaimYear) Return the first ChildCareNhifClaims filtered by the ClaimYear column
 * @method     ChildCareNhifClaims findOneByClaimmonth(int $ClaimMonth) Return the first ChildCareNhifClaims filtered by the ClaimMonth column
 * @method     ChildCareNhifClaims findOneByFoliono(int $FolioNo) Return the first ChildCareNhifClaims filtered by the FolioNo column
 * @method     ChildCareNhifClaims findOneBySerialno(string $SerialNo) Return the first ChildCareNhifClaims filtered by the SerialNo column
 * @method     ChildCareNhifClaims findOneByCardno(string $CardNo) Return the first ChildCareNhifClaims filtered by the CardNo column
 * @method     ChildCareNhifClaims findOneByAge(int $Age) Return the first ChildCareNhifClaims filtered by the Age column
 * @method     ChildCareNhifClaims findOneByTelephoneno(string $TelephoneNo) Return the first ChildCareNhifClaims filtered by the TelephoneNo column
 * @method     ChildCareNhifClaims findOneByEncounterNr(string $encounter_nr) Return the first ChildCareNhifClaims filtered by the encounter_nr column
 * @method     ChildCareNhifClaims findOneByClaimStatus(string $claim_status) Return the first ChildCareNhifClaims filtered by the claim_status column
 * @method     ChildCareNhifClaims findOneByCreatedby(string $CreatedBy) Return the first ChildCareNhifClaims filtered by the CreatedBy column
 * @method     ChildCareNhifClaims findOneByDatecreated(string $DateCreated) Return the first ChildCareNhifClaims filtered by the DateCreated column
 * @method     ChildCareNhifClaims findOneByLastmodifiedby(string $LastModifiedBy) Return the first ChildCareNhifClaims filtered by the LastModifiedBy column
 * @method     ChildCareNhifClaims findOneByLastmodified(string $LastModified) Return the first ChildCareNhifClaims filtered by the LastModified column *

 * @method     ChildCareNhifClaims requirePk($key, ConnectionInterface $con = null) Return the ChildCareNhifClaims by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOne(ConnectionInterface $con = null) Return the first ChildCareNhifClaims matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareNhifClaims requireOneByFolioid(string $FolioID) Return the first ChildCareNhifClaims filtered by the FolioID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneByClaimyear(int $ClaimYear) Return the first ChildCareNhifClaims filtered by the ClaimYear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneByClaimmonth(int $ClaimMonth) Return the first ChildCareNhifClaims filtered by the ClaimMonth column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneByFoliono(int $FolioNo) Return the first ChildCareNhifClaims filtered by the FolioNo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneBySerialno(string $SerialNo) Return the first ChildCareNhifClaims filtered by the SerialNo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneByCardno(string $CardNo) Return the first ChildCareNhifClaims filtered by the CardNo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneByAge(int $Age) Return the first ChildCareNhifClaims filtered by the Age column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneByTelephoneno(string $TelephoneNo) Return the first ChildCareNhifClaims filtered by the TelephoneNo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneByEncounterNr(string $encounter_nr) Return the first ChildCareNhifClaims filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneByClaimStatus(string $claim_status) Return the first ChildCareNhifClaims filtered by the claim_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneByCreatedby(string $CreatedBy) Return the first ChildCareNhifClaims filtered by the CreatedBy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneByDatecreated(string $DateCreated) Return the first ChildCareNhifClaims filtered by the DateCreated column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneByLastmodifiedby(string $LastModifiedBy) Return the first ChildCareNhifClaims filtered by the LastModifiedBy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareNhifClaims requireOneByLastmodified(string $LastModified) Return the first ChildCareNhifClaims filtered by the LastModified column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareNhifClaims[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareNhifClaims objects based on current ModelCriteria
 * @method     ChildCareNhifClaims[]|ObjectCollection findByFolioid(string $FolioID) Return ChildCareNhifClaims objects filtered by the FolioID column
 * @method     ChildCareNhifClaims[]|ObjectCollection findByClaimyear(int $ClaimYear) Return ChildCareNhifClaims objects filtered by the ClaimYear column
 * @method     ChildCareNhifClaims[]|ObjectCollection findByClaimmonth(int $ClaimMonth) Return ChildCareNhifClaims objects filtered by the ClaimMonth column
 * @method     ChildCareNhifClaims[]|ObjectCollection findByFoliono(int $FolioNo) Return ChildCareNhifClaims objects filtered by the FolioNo column
 * @method     ChildCareNhifClaims[]|ObjectCollection findBySerialno(string $SerialNo) Return ChildCareNhifClaims objects filtered by the SerialNo column
 * @method     ChildCareNhifClaims[]|ObjectCollection findByCardno(string $CardNo) Return ChildCareNhifClaims objects filtered by the CardNo column
 * @method     ChildCareNhifClaims[]|ObjectCollection findByAge(int $Age) Return ChildCareNhifClaims objects filtered by the Age column
 * @method     ChildCareNhifClaims[]|ObjectCollection findByTelephoneno(string $TelephoneNo) Return ChildCareNhifClaims objects filtered by the TelephoneNo column
 * @method     ChildCareNhifClaims[]|ObjectCollection findByEncounterNr(string $encounter_nr) Return ChildCareNhifClaims objects filtered by the encounter_nr column
 * @method     ChildCareNhifClaims[]|ObjectCollection findByClaimStatus(string $claim_status) Return ChildCareNhifClaims objects filtered by the claim_status column
 * @method     ChildCareNhifClaims[]|ObjectCollection findByCreatedby(string $CreatedBy) Return ChildCareNhifClaims objects filtered by the CreatedBy column
 * @method     ChildCareNhifClaims[]|ObjectCollection findByDatecreated(string $DateCreated) Return ChildCareNhifClaims objects filtered by the DateCreated column
 * @method     ChildCareNhifClaims[]|ObjectCollection findByLastmodifiedby(string $LastModifiedBy) Return ChildCareNhifClaims objects filtered by the LastModifiedBy column
 * @method     ChildCareNhifClaims[]|ObjectCollection findByLastmodified(string $LastModified) Return ChildCareNhifClaims objects filtered by the LastModified column
 * @method     ChildCareNhifClaims[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareNhifClaimsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareNhifClaimsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareNhifClaims', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareNhifClaimsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareNhifClaimsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareNhifClaimsQuery) {
            return $criteria;
        }
        $query = new ChildCareNhifClaimsQuery();
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
     * @return ChildCareNhifClaims|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The CareNhifClaims object has no primary key');
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
        throw new LogicException('The CareNhifClaims object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The CareNhifClaims object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The CareNhifClaims object has no primary key');
    }

    /**
     * Filter the query on the FolioID column
     *
     * Example usage:
     * <code>
     * $query->filterByFolioid('fooValue');   // WHERE FolioID = 'fooValue'
     * $query->filterByFolioid('%fooValue%', Criteria::LIKE); // WHERE FolioID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $folioid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByFolioid($folioid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($folioid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_FOLIOID, $folioid, $comparison);
    }

    /**
     * Filter the query on the ClaimYear column
     *
     * Example usage:
     * <code>
     * $query->filterByClaimyear(1234); // WHERE ClaimYear = 1234
     * $query->filterByClaimyear(array(12, 34)); // WHERE ClaimYear IN (12, 34)
     * $query->filterByClaimyear(array('min' => 12)); // WHERE ClaimYear > 12
     * </code>
     *
     * @param     mixed $claimyear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByClaimyear($claimyear = null, $comparison = null)
    {
        if (is_array($claimyear)) {
            $useMinMax = false;
            if (isset($claimyear['min'])) {
                $this->addUsingAlias(CareNhifClaimsTableMap::COL_CLAIMYEAR, $claimyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($claimyear['max'])) {
                $this->addUsingAlias(CareNhifClaimsTableMap::COL_CLAIMYEAR, $claimyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_CLAIMYEAR, $claimyear, $comparison);
    }

    /**
     * Filter the query on the ClaimMonth column
     *
     * Example usage:
     * <code>
     * $query->filterByClaimmonth(1234); // WHERE ClaimMonth = 1234
     * $query->filterByClaimmonth(array(12, 34)); // WHERE ClaimMonth IN (12, 34)
     * $query->filterByClaimmonth(array('min' => 12)); // WHERE ClaimMonth > 12
     * </code>
     *
     * @param     mixed $claimmonth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByClaimmonth($claimmonth = null, $comparison = null)
    {
        if (is_array($claimmonth)) {
            $useMinMax = false;
            if (isset($claimmonth['min'])) {
                $this->addUsingAlias(CareNhifClaimsTableMap::COL_CLAIMMONTH, $claimmonth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($claimmonth['max'])) {
                $this->addUsingAlias(CareNhifClaimsTableMap::COL_CLAIMMONTH, $claimmonth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_CLAIMMONTH, $claimmonth, $comparison);
    }

    /**
     * Filter the query on the FolioNo column
     *
     * Example usage:
     * <code>
     * $query->filterByFoliono(1234); // WHERE FolioNo = 1234
     * $query->filterByFoliono(array(12, 34)); // WHERE FolioNo IN (12, 34)
     * $query->filterByFoliono(array('min' => 12)); // WHERE FolioNo > 12
     * </code>
     *
     * @param     mixed $foliono The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByFoliono($foliono = null, $comparison = null)
    {
        if (is_array($foliono)) {
            $useMinMax = false;
            if (isset($foliono['min'])) {
                $this->addUsingAlias(CareNhifClaimsTableMap::COL_FOLIONO, $foliono['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foliono['max'])) {
                $this->addUsingAlias(CareNhifClaimsTableMap::COL_FOLIONO, $foliono['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_FOLIONO, $foliono, $comparison);
    }

    /**
     * Filter the query on the SerialNo column
     *
     * Example usage:
     * <code>
     * $query->filterBySerialno('fooValue');   // WHERE SerialNo = 'fooValue'
     * $query->filterBySerialno('%fooValue%', Criteria::LIKE); // WHERE SerialNo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serialno The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterBySerialno($serialno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serialno)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_SERIALNO, $serialno, $comparison);
    }

    /**
     * Filter the query on the CardNo column
     *
     * Example usage:
     * <code>
     * $query->filterByCardno('fooValue');   // WHERE CardNo = 'fooValue'
     * $query->filterByCardno('%fooValue%', Criteria::LIKE); // WHERE CardNo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cardno The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByCardno($cardno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cardno)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_CARDNO, $cardno, $comparison);
    }

    /**
     * Filter the query on the Age column
     *
     * Example usage:
     * <code>
     * $query->filterByAge(1234); // WHERE Age = 1234
     * $query->filterByAge(array(12, 34)); // WHERE Age IN (12, 34)
     * $query->filterByAge(array('min' => 12)); // WHERE Age > 12
     * </code>
     *
     * @param     mixed $age The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByAge($age = null, $comparison = null)
    {
        if (is_array($age)) {
            $useMinMax = false;
            if (isset($age['min'])) {
                $this->addUsingAlias(CareNhifClaimsTableMap::COL_AGE, $age['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($age['max'])) {
                $this->addUsingAlias(CareNhifClaimsTableMap::COL_AGE, $age['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_AGE, $age, $comparison);
    }

    /**
     * Filter the query on the TelephoneNo column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephoneno('fooValue');   // WHERE TelephoneNo = 'fooValue'
     * $query->filterByTelephoneno('%fooValue%', Criteria::LIKE); // WHERE TelephoneNo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephoneno The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByTelephoneno($telephoneno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephoneno)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_TELEPHONENO, $telephoneno, $comparison);
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
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareNhifClaimsTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareNhifClaimsTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the claim_status column
     *
     * Example usage:
     * <code>
     * $query->filterByClaimStatus('fooValue');   // WHERE claim_status = 'fooValue'
     * $query->filterByClaimStatus('%fooValue%', Criteria::LIKE); // WHERE claim_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $claimStatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByClaimStatus($claimStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($claimStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_CLAIM_STATUS, $claimStatus, $comparison);
    }

    /**
     * Filter the query on the CreatedBy column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedby('fooValue');   // WHERE CreatedBy = 'fooValue'
     * $query->filterByCreatedby('%fooValue%', Criteria::LIKE); // WHERE CreatedBy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $createdby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByCreatedby($createdby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createdby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_CREATEDBY, $createdby, $comparison);
    }

    /**
     * Filter the query on the DateCreated column
     *
     * Example usage:
     * <code>
     * $query->filterByDatecreated('2011-03-14'); // WHERE DateCreated = '2011-03-14'
     * $query->filterByDatecreated('now'); // WHERE DateCreated = '2011-03-14'
     * $query->filterByDatecreated(array('max' => 'yesterday')); // WHERE DateCreated > '2011-03-13'
     * </code>
     *
     * @param     mixed $datecreated The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByDatecreated($datecreated = null, $comparison = null)
    {
        if (is_array($datecreated)) {
            $useMinMax = false;
            if (isset($datecreated['min'])) {
                $this->addUsingAlias(CareNhifClaimsTableMap::COL_DATECREATED, $datecreated['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datecreated['max'])) {
                $this->addUsingAlias(CareNhifClaimsTableMap::COL_DATECREATED, $datecreated['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_DATECREATED, $datecreated, $comparison);
    }

    /**
     * Filter the query on the LastModifiedBy column
     *
     * Example usage:
     * <code>
     * $query->filterByLastmodifiedby('fooValue');   // WHERE LastModifiedBy = 'fooValue'
     * $query->filterByLastmodifiedby('%fooValue%', Criteria::LIKE); // WHERE LastModifiedBy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastmodifiedby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastmodifiedby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_LASTMODIFIEDBY, $lastmodifiedby, $comparison);
    }

    /**
     * Filter the query on the LastModified column
     *
     * Example usage:
     * <code>
     * $query->filterByLastmodified('fooValue');   // WHERE LastModified = 'fooValue'
     * $query->filterByLastmodified('%fooValue%', Criteria::LIKE); // WHERE LastModified LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastmodified The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function filterByLastmodified($lastmodified = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastmodified)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareNhifClaimsTableMap::COL_LASTMODIFIED, $lastmodified, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareNhifClaims $careNhifClaims Object to remove from the list of results
     *
     * @return $this|ChildCareNhifClaimsQuery The current query, for fluid interface
     */
    public function prune($careNhifClaims = null)
    {
        if ($careNhifClaims) {
            throw new LogicException('CareNhifClaims object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the care_nhif_claims table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareNhifClaimsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareNhifClaimsTableMap::clearInstancePool();
            CareNhifClaimsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareNhifClaimsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareNhifClaimsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareNhifClaimsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareNhifClaimsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareNhifClaimsQuery
