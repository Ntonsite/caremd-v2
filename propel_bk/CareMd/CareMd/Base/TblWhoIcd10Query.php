<?php

namespace CareMd\CareMd\Base;

use \Exception;
use CareMd\CareMd\TblWhoIcd10 as ChildTblWhoIcd10;
use CareMd\CareMd\TblWhoIcd10Query as ChildTblWhoIcd10Query;
use CareMd\CareMd\Map\TblWhoIcd10TableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_who_icd10' table.
 *
 *
 *
 * @method     ChildTblWhoIcd10Query orderByEbene($order = Criteria::ASC) Order by the Ebene column
 * @method     ChildTblWhoIcd10Query orderByOrt($order = Criteria::ASC) Order by the Ort column
 * @method     ChildTblWhoIcd10Query orderByArt($order = Criteria::ASC) Order by the Art column
 * @method     ChildTblWhoIcd10Query orderByGeneriert($order = Criteria::ASC) Order by the Generiert column
 * @method     ChildTblWhoIcd10Query orderByKapnr($order = Criteria::ASC) Order by the KapNr column
 * @method     ChildTblWhoIcd10Query orderByGrvon($order = Criteria::ASC) Order by the GrVon column
 * @method     ChildTblWhoIcd10Query orderByCode($order = Criteria::ASC) Order by the Code column
 * @method     ChildTblWhoIcd10Query orderByNormcode($order = Criteria::ASC) Order by the NormCode column
 * @method     ChildTblWhoIcd10Query orderByCodeohnepunkt($order = Criteria::ASC) Order by the CodeOhnePunkt column
 * @method     ChildTblWhoIcd10Query orderByTitel($order = Criteria::ASC) Order by the Titel column
 * @method     ChildTblWhoIcd10Query orderByMortl1($order = Criteria::ASC) Order by the MortL1 column
 * @method     ChildTblWhoIcd10Query orderByMortl2($order = Criteria::ASC) Order by the MortL2 column
 * @method     ChildTblWhoIcd10Query orderByMortl3($order = Criteria::ASC) Order by the MortL3 column
 * @method     ChildTblWhoIcd10Query orderByMortl4($order = Criteria::ASC) Order by the MortL4 column
 * @method     ChildTblWhoIcd10Query orderByMorbl($order = Criteria::ASC) Order by the MorbL column
 *
 * @method     ChildTblWhoIcd10Query groupByEbene() Group by the Ebene column
 * @method     ChildTblWhoIcd10Query groupByOrt() Group by the Ort column
 * @method     ChildTblWhoIcd10Query groupByArt() Group by the Art column
 * @method     ChildTblWhoIcd10Query groupByGeneriert() Group by the Generiert column
 * @method     ChildTblWhoIcd10Query groupByKapnr() Group by the KapNr column
 * @method     ChildTblWhoIcd10Query groupByGrvon() Group by the GrVon column
 * @method     ChildTblWhoIcd10Query groupByCode() Group by the Code column
 * @method     ChildTblWhoIcd10Query groupByNormcode() Group by the NormCode column
 * @method     ChildTblWhoIcd10Query groupByCodeohnepunkt() Group by the CodeOhnePunkt column
 * @method     ChildTblWhoIcd10Query groupByTitel() Group by the Titel column
 * @method     ChildTblWhoIcd10Query groupByMortl1() Group by the MortL1 column
 * @method     ChildTblWhoIcd10Query groupByMortl2() Group by the MortL2 column
 * @method     ChildTblWhoIcd10Query groupByMortl3() Group by the MortL3 column
 * @method     ChildTblWhoIcd10Query groupByMortl4() Group by the MortL4 column
 * @method     ChildTblWhoIcd10Query groupByMorbl() Group by the MorbL column
 *
 * @method     ChildTblWhoIcd10Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblWhoIcd10Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblWhoIcd10Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblWhoIcd10Query leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblWhoIcd10Query rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblWhoIcd10Query innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblWhoIcd10 findOne(ConnectionInterface $con = null) Return the first ChildTblWhoIcd10 matching the query
 * @method     ChildTblWhoIcd10 findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblWhoIcd10 matching the query, or a new ChildTblWhoIcd10 object populated from the query conditions when no match is found
 *
 * @method     ChildTblWhoIcd10 findOneByEbene(string $Ebene) Return the first ChildTblWhoIcd10 filtered by the Ebene column
 * @method     ChildTblWhoIcd10 findOneByOrt(string $Ort) Return the first ChildTblWhoIcd10 filtered by the Ort column
 * @method     ChildTblWhoIcd10 findOneByArt(string $Art) Return the first ChildTblWhoIcd10 filtered by the Art column
 * @method     ChildTblWhoIcd10 findOneByGeneriert(string $Generiert) Return the first ChildTblWhoIcd10 filtered by the Generiert column
 * @method     ChildTblWhoIcd10 findOneByKapnr(string $KapNr) Return the first ChildTblWhoIcd10 filtered by the KapNr column
 * @method     ChildTblWhoIcd10 findOneByGrvon(string $GrVon) Return the first ChildTblWhoIcd10 filtered by the GrVon column
 * @method     ChildTblWhoIcd10 findOneByCode(string $Code) Return the first ChildTblWhoIcd10 filtered by the Code column
 * @method     ChildTblWhoIcd10 findOneByNormcode(string $NormCode) Return the first ChildTblWhoIcd10 filtered by the NormCode column
 * @method     ChildTblWhoIcd10 findOneByCodeohnepunkt(string $CodeOhnePunkt) Return the first ChildTblWhoIcd10 filtered by the CodeOhnePunkt column
 * @method     ChildTblWhoIcd10 findOneByTitel(string $Titel) Return the first ChildTblWhoIcd10 filtered by the Titel column
 * @method     ChildTblWhoIcd10 findOneByMortl1(string $MortL1) Return the first ChildTblWhoIcd10 filtered by the MortL1 column
 * @method     ChildTblWhoIcd10 findOneByMortl2(string $MortL2) Return the first ChildTblWhoIcd10 filtered by the MortL2 column
 * @method     ChildTblWhoIcd10 findOneByMortl3(string $MortL3) Return the first ChildTblWhoIcd10 filtered by the MortL3 column
 * @method     ChildTblWhoIcd10 findOneByMortl4(string $MortL4) Return the first ChildTblWhoIcd10 filtered by the MortL4 column
 * @method     ChildTblWhoIcd10 findOneByMorbl(string $MorbL) Return the first ChildTblWhoIcd10 filtered by the MorbL column *

 * @method     ChildTblWhoIcd10 requirePk($key, ConnectionInterface $con = null) Return the ChildTblWhoIcd10 by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOne(ConnectionInterface $con = null) Return the first ChildTblWhoIcd10 matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblWhoIcd10 requireOneByEbene(string $Ebene) Return the first ChildTblWhoIcd10 filtered by the Ebene column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByOrt(string $Ort) Return the first ChildTblWhoIcd10 filtered by the Ort column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByArt(string $Art) Return the first ChildTblWhoIcd10 filtered by the Art column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByGeneriert(string $Generiert) Return the first ChildTblWhoIcd10 filtered by the Generiert column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByKapnr(string $KapNr) Return the first ChildTblWhoIcd10 filtered by the KapNr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByGrvon(string $GrVon) Return the first ChildTblWhoIcd10 filtered by the GrVon column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByCode(string $Code) Return the first ChildTblWhoIcd10 filtered by the Code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByNormcode(string $NormCode) Return the first ChildTblWhoIcd10 filtered by the NormCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByCodeohnepunkt(string $CodeOhnePunkt) Return the first ChildTblWhoIcd10 filtered by the CodeOhnePunkt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByTitel(string $Titel) Return the first ChildTblWhoIcd10 filtered by the Titel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByMortl1(string $MortL1) Return the first ChildTblWhoIcd10 filtered by the MortL1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByMortl2(string $MortL2) Return the first ChildTblWhoIcd10 filtered by the MortL2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByMortl3(string $MortL3) Return the first ChildTblWhoIcd10 filtered by the MortL3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByMortl4(string $MortL4) Return the first ChildTblWhoIcd10 filtered by the MortL4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblWhoIcd10 requireOneByMorbl(string $MorbL) Return the first ChildTblWhoIcd10 filtered by the MorbL column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblWhoIcd10[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblWhoIcd10 objects based on current ModelCriteria
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByEbene(string $Ebene) Return ChildTblWhoIcd10 objects filtered by the Ebene column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByOrt(string $Ort) Return ChildTblWhoIcd10 objects filtered by the Ort column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByArt(string $Art) Return ChildTblWhoIcd10 objects filtered by the Art column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByGeneriert(string $Generiert) Return ChildTblWhoIcd10 objects filtered by the Generiert column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByKapnr(string $KapNr) Return ChildTblWhoIcd10 objects filtered by the KapNr column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByGrvon(string $GrVon) Return ChildTblWhoIcd10 objects filtered by the GrVon column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByCode(string $Code) Return ChildTblWhoIcd10 objects filtered by the Code column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByNormcode(string $NormCode) Return ChildTblWhoIcd10 objects filtered by the NormCode column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByCodeohnepunkt(string $CodeOhnePunkt) Return ChildTblWhoIcd10 objects filtered by the CodeOhnePunkt column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByTitel(string $Titel) Return ChildTblWhoIcd10 objects filtered by the Titel column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByMortl1(string $MortL1) Return ChildTblWhoIcd10 objects filtered by the MortL1 column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByMortl2(string $MortL2) Return ChildTblWhoIcd10 objects filtered by the MortL2 column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByMortl3(string $MortL3) Return ChildTblWhoIcd10 objects filtered by the MortL3 column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByMortl4(string $MortL4) Return ChildTblWhoIcd10 objects filtered by the MortL4 column
 * @method     ChildTblWhoIcd10[]|ObjectCollection findByMorbl(string $MorbL) Return ChildTblWhoIcd10 objects filtered by the MorbL column
 * @method     ChildTblWhoIcd10[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblWhoIcd10Query extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\TblWhoIcd10Query object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\TblWhoIcd10', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblWhoIcd10Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblWhoIcd10Query
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblWhoIcd10Query) {
            return $criteria;
        }
        $query = new ChildTblWhoIcd10Query();
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
     * @return ChildTblWhoIcd10|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The TblWhoIcd10 object has no primary key');
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
        throw new LogicException('The TblWhoIcd10 object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The TblWhoIcd10 object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The TblWhoIcd10 object has no primary key');
    }

    /**
     * Filter the query on the Ebene column
     *
     * Example usage:
     * <code>
     * $query->filterByEbene('fooValue');   // WHERE Ebene = 'fooValue'
     * $query->filterByEbene('%fooValue%', Criteria::LIKE); // WHERE Ebene LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ebene The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByEbene($ebene = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ebene)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_EBENE, $ebene, $comparison);
    }

    /**
     * Filter the query on the Ort column
     *
     * Example usage:
     * <code>
     * $query->filterByOrt('fooValue');   // WHERE Ort = 'fooValue'
     * $query->filterByOrt('%fooValue%', Criteria::LIKE); // WHERE Ort LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ort The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByOrt($ort = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ort)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_ORT, $ort, $comparison);
    }

    /**
     * Filter the query on the Art column
     *
     * Example usage:
     * <code>
     * $query->filterByArt('fooValue');   // WHERE Art = 'fooValue'
     * $query->filterByArt('%fooValue%', Criteria::LIKE); // WHERE Art LIKE '%fooValue%'
     * </code>
     *
     * @param     string $art The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByArt($art = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($art)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_ART, $art, $comparison);
    }

    /**
     * Filter the query on the Generiert column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneriert('fooValue');   // WHERE Generiert = 'fooValue'
     * $query->filterByGeneriert('%fooValue%', Criteria::LIKE); // WHERE Generiert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $generiert The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByGeneriert($generiert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($generiert)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_GENERIERT, $generiert, $comparison);
    }

    /**
     * Filter the query on the KapNr column
     *
     * Example usage:
     * <code>
     * $query->filterByKapnr('fooValue');   // WHERE KapNr = 'fooValue'
     * $query->filterByKapnr('%fooValue%', Criteria::LIKE); // WHERE KapNr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kapnr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByKapnr($kapnr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kapnr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_KAPNR, $kapnr, $comparison);
    }

    /**
     * Filter the query on the GrVon column
     *
     * Example usage:
     * <code>
     * $query->filterByGrvon('fooValue');   // WHERE GrVon = 'fooValue'
     * $query->filterByGrvon('%fooValue%', Criteria::LIKE); // WHERE GrVon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $grvon The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByGrvon($grvon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($grvon)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_GRVON, $grvon, $comparison);
    }

    /**
     * Filter the query on the Code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE Code = 'fooValue'
     * $query->filterByCode('%fooValue%', Criteria::LIKE); // WHERE Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_CODE, $code, $comparison);
    }

    /**
     * Filter the query on the NormCode column
     *
     * Example usage:
     * <code>
     * $query->filterByNormcode('fooValue');   // WHERE NormCode = 'fooValue'
     * $query->filterByNormcode('%fooValue%', Criteria::LIKE); // WHERE NormCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $normcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByNormcode($normcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($normcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_NORMCODE, $normcode, $comparison);
    }

    /**
     * Filter the query on the CodeOhnePunkt column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeohnepunkt('fooValue');   // WHERE CodeOhnePunkt = 'fooValue'
     * $query->filterByCodeohnepunkt('%fooValue%', Criteria::LIKE); // WHERE CodeOhnePunkt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeohnepunkt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByCodeohnepunkt($codeohnepunkt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeohnepunkt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_CODEOHNEPUNKT, $codeohnepunkt, $comparison);
    }

    /**
     * Filter the query on the Titel column
     *
     * Example usage:
     * <code>
     * $query->filterByTitel('fooValue');   // WHERE Titel = 'fooValue'
     * $query->filterByTitel('%fooValue%', Criteria::LIKE); // WHERE Titel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByTitel($titel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_TITEL, $titel, $comparison);
    }

    /**
     * Filter the query on the MortL1 column
     *
     * Example usage:
     * <code>
     * $query->filterByMortl1('fooValue');   // WHERE MortL1 = 'fooValue'
     * $query->filterByMortl1('%fooValue%', Criteria::LIKE); // WHERE MortL1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mortl1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByMortl1($mortl1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mortl1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_MORTL1, $mortl1, $comparison);
    }

    /**
     * Filter the query on the MortL2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMortl2('fooValue');   // WHERE MortL2 = 'fooValue'
     * $query->filterByMortl2('%fooValue%', Criteria::LIKE); // WHERE MortL2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mortl2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByMortl2($mortl2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mortl2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_MORTL2, $mortl2, $comparison);
    }

    /**
     * Filter the query on the MortL3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMortl3('fooValue');   // WHERE MortL3 = 'fooValue'
     * $query->filterByMortl3('%fooValue%', Criteria::LIKE); // WHERE MortL3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mortl3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByMortl3($mortl3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mortl3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_MORTL3, $mortl3, $comparison);
    }

    /**
     * Filter the query on the MortL4 column
     *
     * Example usage:
     * <code>
     * $query->filterByMortl4('fooValue');   // WHERE MortL4 = 'fooValue'
     * $query->filterByMortl4('%fooValue%', Criteria::LIKE); // WHERE MortL4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mortl4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByMortl4($mortl4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mortl4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_MORTL4, $mortl4, $comparison);
    }

    /**
     * Filter the query on the MorbL column
     *
     * Example usage:
     * <code>
     * $query->filterByMorbl('fooValue');   // WHERE MorbL = 'fooValue'
     * $query->filterByMorbl('%fooValue%', Criteria::LIKE); // WHERE MorbL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $morbl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function filterByMorbl($morbl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($morbl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblWhoIcd10TableMap::COL_MORBL, $morbl, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblWhoIcd10 $tblWhoIcd10 Object to remove from the list of results
     *
     * @return $this|ChildTblWhoIcd10Query The current query, for fluid interface
     */
    public function prune($tblWhoIcd10 = null)
    {
        if ($tblWhoIcd10) {
            throw new LogicException('TblWhoIcd10 object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_who_icd10 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblWhoIcd10TableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblWhoIcd10TableMap::clearInstancePool();
            TblWhoIcd10TableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblWhoIcd10TableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblWhoIcd10TableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TblWhoIcd10TableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TblWhoIcd10TableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblWhoIcd10Query
