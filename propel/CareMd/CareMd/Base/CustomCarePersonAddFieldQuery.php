<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CustomCarePersonAddField as ChildCustomCarePersonAddField;
use CareMd\CareMd\CustomCarePersonAddFieldQuery as ChildCustomCarePersonAddFieldQuery;
use CareMd\CareMd\Map\CustomCarePersonAddFieldTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'custom_care_person_add_field' table.
 *
 *
 *
 * @method     ChildCustomCarePersonAddFieldQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCustomCarePersonAddFieldQuery orderByParent($order = Criteria::ASC) Order by the parent column
 * @method     ChildCustomCarePersonAddFieldQuery orderBySortNr($order = Criteria::ASC) Order by the sort_nr column
 * @method     ChildCustomCarePersonAddFieldQuery orderByVariableName($order = Criteria::ASC) Order by the variable_name column
 * @method     ChildCustomCarePersonAddFieldQuery orderByLabelName($order = Criteria::ASC) Order by the label_name column
 * @method     ChildCustomCarePersonAddFieldQuery orderByIsMandatory($order = Criteria::ASC) Order by the is_mandatory column
 * @method     ChildCustomCarePersonAddFieldQuery orderByIsVisible($order = Criteria::ASC) Order by the is_visible column
 * @method     ChildCustomCarePersonAddFieldQuery orderByInputType($order = Criteria::ASC) Order by the input_type column
 *
 * @method     ChildCustomCarePersonAddFieldQuery groupById() Group by the id column
 * @method     ChildCustomCarePersonAddFieldQuery groupByParent() Group by the parent column
 * @method     ChildCustomCarePersonAddFieldQuery groupBySortNr() Group by the sort_nr column
 * @method     ChildCustomCarePersonAddFieldQuery groupByVariableName() Group by the variable_name column
 * @method     ChildCustomCarePersonAddFieldQuery groupByLabelName() Group by the label_name column
 * @method     ChildCustomCarePersonAddFieldQuery groupByIsMandatory() Group by the is_mandatory column
 * @method     ChildCustomCarePersonAddFieldQuery groupByIsVisible() Group by the is_visible column
 * @method     ChildCustomCarePersonAddFieldQuery groupByInputType() Group by the input_type column
 *
 * @method     ChildCustomCarePersonAddFieldQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCustomCarePersonAddFieldQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCustomCarePersonAddFieldQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCustomCarePersonAddFieldQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCustomCarePersonAddFieldQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCustomCarePersonAddFieldQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCustomCarePersonAddField findOne(ConnectionInterface $con = null) Return the first ChildCustomCarePersonAddField matching the query
 * @method     ChildCustomCarePersonAddField findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCustomCarePersonAddField matching the query, or a new ChildCustomCarePersonAddField object populated from the query conditions when no match is found
 *
 * @method     ChildCustomCarePersonAddField findOneById(int $id) Return the first ChildCustomCarePersonAddField filtered by the id column
 * @method     ChildCustomCarePersonAddField findOneByParent(int $parent) Return the first ChildCustomCarePersonAddField filtered by the parent column
 * @method     ChildCustomCarePersonAddField findOneBySortNr(int $sort_nr) Return the first ChildCustomCarePersonAddField filtered by the sort_nr column
 * @method     ChildCustomCarePersonAddField findOneByVariableName(string $variable_name) Return the first ChildCustomCarePersonAddField filtered by the variable_name column
 * @method     ChildCustomCarePersonAddField findOneByLabelName(string $label_name) Return the first ChildCustomCarePersonAddField filtered by the label_name column
 * @method     ChildCustomCarePersonAddField findOneByIsMandatory(int $is_mandatory) Return the first ChildCustomCarePersonAddField filtered by the is_mandatory column
 * @method     ChildCustomCarePersonAddField findOneByIsVisible(int $is_visible) Return the first ChildCustomCarePersonAddField filtered by the is_visible column
 * @method     ChildCustomCarePersonAddField findOneByInputType(string $input_type) Return the first ChildCustomCarePersonAddField filtered by the input_type column *

 * @method     ChildCustomCarePersonAddField requirePk($key, ConnectionInterface $con = null) Return the ChildCustomCarePersonAddField by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomCarePersonAddField requireOne(ConnectionInterface $con = null) Return the first ChildCustomCarePersonAddField matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomCarePersonAddField requireOneById(int $id) Return the first ChildCustomCarePersonAddField filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomCarePersonAddField requireOneByParent(int $parent) Return the first ChildCustomCarePersonAddField filtered by the parent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomCarePersonAddField requireOneBySortNr(int $sort_nr) Return the first ChildCustomCarePersonAddField filtered by the sort_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomCarePersonAddField requireOneByVariableName(string $variable_name) Return the first ChildCustomCarePersonAddField filtered by the variable_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomCarePersonAddField requireOneByLabelName(string $label_name) Return the first ChildCustomCarePersonAddField filtered by the label_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomCarePersonAddField requireOneByIsMandatory(int $is_mandatory) Return the first ChildCustomCarePersonAddField filtered by the is_mandatory column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomCarePersonAddField requireOneByIsVisible(int $is_visible) Return the first ChildCustomCarePersonAddField filtered by the is_visible column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomCarePersonAddField requireOneByInputType(string $input_type) Return the first ChildCustomCarePersonAddField filtered by the input_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomCarePersonAddField[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCustomCarePersonAddField objects based on current ModelCriteria
 * @method     ChildCustomCarePersonAddField[]|ObjectCollection findById(int $id) Return ChildCustomCarePersonAddField objects filtered by the id column
 * @method     ChildCustomCarePersonAddField[]|ObjectCollection findByParent(int $parent) Return ChildCustomCarePersonAddField objects filtered by the parent column
 * @method     ChildCustomCarePersonAddField[]|ObjectCollection findBySortNr(int $sort_nr) Return ChildCustomCarePersonAddField objects filtered by the sort_nr column
 * @method     ChildCustomCarePersonAddField[]|ObjectCollection findByVariableName(string $variable_name) Return ChildCustomCarePersonAddField objects filtered by the variable_name column
 * @method     ChildCustomCarePersonAddField[]|ObjectCollection findByLabelName(string $label_name) Return ChildCustomCarePersonAddField objects filtered by the label_name column
 * @method     ChildCustomCarePersonAddField[]|ObjectCollection findByIsMandatory(int $is_mandatory) Return ChildCustomCarePersonAddField objects filtered by the is_mandatory column
 * @method     ChildCustomCarePersonAddField[]|ObjectCollection findByIsVisible(int $is_visible) Return ChildCustomCarePersonAddField objects filtered by the is_visible column
 * @method     ChildCustomCarePersonAddField[]|ObjectCollection findByInputType(string $input_type) Return ChildCustomCarePersonAddField objects filtered by the input_type column
 * @method     ChildCustomCarePersonAddField[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CustomCarePersonAddFieldQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CustomCarePersonAddFieldQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CustomCarePersonAddField', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomCarePersonAddFieldQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomCarePersonAddFieldQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCustomCarePersonAddFieldQuery) {
            return $criteria;
        }
        $query = new ChildCustomCarePersonAddFieldQuery();
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
     * @return ChildCustomCarePersonAddField|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CustomCarePersonAddFieldTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CustomCarePersonAddFieldTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCustomCarePersonAddField A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, parent, sort_nr, variable_name, label_name, is_mandatory, is_visible, input_type FROM custom_care_person_add_field WHERE id = :p0';
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
            /** @var ChildCustomCarePersonAddField $obj */
            $obj = new ChildCustomCarePersonAddField();
            $obj->hydrate($row);
            CustomCarePersonAddFieldTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCustomCarePersonAddField|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCustomCarePersonAddFieldQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCustomCarePersonAddFieldQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomCarePersonAddFieldQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the parent column
     *
     * Example usage:
     * <code>
     * $query->filterByParent(1234); // WHERE parent = 1234
     * $query->filterByParent(array(12, 34)); // WHERE parent IN (12, 34)
     * $query->filterByParent(array('min' => 12)); // WHERE parent > 12
     * </code>
     *
     * @param     mixed $parent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomCarePersonAddFieldQuery The current query, for fluid interface
     */
    public function filterByParent($parent = null, $comparison = null)
    {
        if (is_array($parent)) {
            $useMinMax = false;
            if (isset($parent['min'])) {
                $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_PARENT, $parent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parent['max'])) {
                $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_PARENT, $parent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_PARENT, $parent, $comparison);
    }

    /**
     * Filter the query on the sort_nr column
     *
     * Example usage:
     * <code>
     * $query->filterBySortNr(1234); // WHERE sort_nr = 1234
     * $query->filterBySortNr(array(12, 34)); // WHERE sort_nr IN (12, 34)
     * $query->filterBySortNr(array('min' => 12)); // WHERE sort_nr > 12
     * </code>
     *
     * @param     mixed $sortNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomCarePersonAddFieldQuery The current query, for fluid interface
     */
    public function filterBySortNr($sortNr = null, $comparison = null)
    {
        if (is_array($sortNr)) {
            $useMinMax = false;
            if (isset($sortNr['min'])) {
                $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_SORT_NR, $sortNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortNr['max'])) {
                $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_SORT_NR, $sortNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_SORT_NR, $sortNr, $comparison);
    }

    /**
     * Filter the query on the variable_name column
     *
     * Example usage:
     * <code>
     * $query->filterByVariableName('fooValue');   // WHERE variable_name = 'fooValue'
     * $query->filterByVariableName('%fooValue%', Criteria::LIKE); // WHERE variable_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $variableName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomCarePersonAddFieldQuery The current query, for fluid interface
     */
    public function filterByVariableName($variableName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($variableName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_VARIABLE_NAME, $variableName, $comparison);
    }

    /**
     * Filter the query on the label_name column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelName('fooValue');   // WHERE label_name = 'fooValue'
     * $query->filterByLabelName('%fooValue%', Criteria::LIKE); // WHERE label_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomCarePersonAddFieldQuery The current query, for fluid interface
     */
    public function filterByLabelName($labelName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_LABEL_NAME, $labelName, $comparison);
    }

    /**
     * Filter the query on the is_mandatory column
     *
     * Example usage:
     * <code>
     * $query->filterByIsMandatory(1234); // WHERE is_mandatory = 1234
     * $query->filterByIsMandatory(array(12, 34)); // WHERE is_mandatory IN (12, 34)
     * $query->filterByIsMandatory(array('min' => 12)); // WHERE is_mandatory > 12
     * </code>
     *
     * @param     mixed $isMandatory The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomCarePersonAddFieldQuery The current query, for fluid interface
     */
    public function filterByIsMandatory($isMandatory = null, $comparison = null)
    {
        if (is_array($isMandatory)) {
            $useMinMax = false;
            if (isset($isMandatory['min'])) {
                $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_IS_MANDATORY, $isMandatory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isMandatory['max'])) {
                $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_IS_MANDATORY, $isMandatory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_IS_MANDATORY, $isMandatory, $comparison);
    }

    /**
     * Filter the query on the is_visible column
     *
     * Example usage:
     * <code>
     * $query->filterByIsVisible(1234); // WHERE is_visible = 1234
     * $query->filterByIsVisible(array(12, 34)); // WHERE is_visible IN (12, 34)
     * $query->filterByIsVisible(array('min' => 12)); // WHERE is_visible > 12
     * </code>
     *
     * @param     mixed $isVisible The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomCarePersonAddFieldQuery The current query, for fluid interface
     */
    public function filterByIsVisible($isVisible = null, $comparison = null)
    {
        if (is_array($isVisible)) {
            $useMinMax = false;
            if (isset($isVisible['min'])) {
                $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_IS_VISIBLE, $isVisible['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isVisible['max'])) {
                $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_IS_VISIBLE, $isVisible['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_IS_VISIBLE, $isVisible, $comparison);
    }

    /**
     * Filter the query on the input_type column
     *
     * Example usage:
     * <code>
     * $query->filterByInputType('fooValue');   // WHERE input_type = 'fooValue'
     * $query->filterByInputType('%fooValue%', Criteria::LIKE); // WHERE input_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inputType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomCarePersonAddFieldQuery The current query, for fluid interface
     */
    public function filterByInputType($inputType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inputType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_INPUT_TYPE, $inputType, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCustomCarePersonAddField $customCarePersonAddField Object to remove from the list of results
     *
     * @return $this|ChildCustomCarePersonAddFieldQuery The current query, for fluid interface
     */
    public function prune($customCarePersonAddField = null)
    {
        if ($customCarePersonAddField) {
            $this->addUsingAlias(CustomCarePersonAddFieldTableMap::COL_ID, $customCarePersonAddField->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the custom_care_person_add_field table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomCarePersonAddFieldTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomCarePersonAddFieldTableMap::clearInstancePool();
            CustomCarePersonAddFieldTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomCarePersonAddFieldTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CustomCarePersonAddFieldTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CustomCarePersonAddFieldTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CustomCarePersonAddFieldTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CustomCarePersonAddFieldQuery
