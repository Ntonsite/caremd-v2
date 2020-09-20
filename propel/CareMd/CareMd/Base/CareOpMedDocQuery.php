<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareOpMedDoc as ChildCareOpMedDoc;
use CareMd\CareMd\CareOpMedDocQuery as ChildCareOpMedDocQuery;
use CareMd\CareMd\Map\CareOpMedDocTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_op_med_doc' table.
 *
 *
 *
 * @method     ChildCareOpMedDocQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareOpMedDocQuery orderByOpDate($order = Criteria::ASC) Order by the op_date column
 * @method     ChildCareOpMedDocQuery orderByOperator($order = Criteria::ASC) Order by the operator column
 * @method     ChildCareOpMedDocQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareOpMedDocQuery orderByDeptNr($order = Criteria::ASC) Order by the dept_nr column
 * @method     ChildCareOpMedDocQuery orderByDiagnosis($order = Criteria::ASC) Order by the diagnosis column
 * @method     ChildCareOpMedDocQuery orderByLocalize($order = Criteria::ASC) Order by the localize column
 * @method     ChildCareOpMedDocQuery orderByTherapy($order = Criteria::ASC) Order by the therapy column
 * @method     ChildCareOpMedDocQuery orderBySpecial($order = Criteria::ASC) Order by the special column
 * @method     ChildCareOpMedDocQuery orderByClassS($order = Criteria::ASC) Order by the class_s column
 * @method     ChildCareOpMedDocQuery orderByClassL($order = Criteria::ASC) Order by the class_l column
 * @method     ChildCareOpMedDocQuery orderByOpStart($order = Criteria::ASC) Order by the op_start column
 * @method     ChildCareOpMedDocQuery orderByOpEnd($order = Criteria::ASC) Order by the op_end column
 * @method     ChildCareOpMedDocQuery orderByAnasthetist($order = Criteria::ASC) Order by the anasthetist column
 * @method     ChildCareOpMedDocQuery orderByScrubNurse($order = Criteria::ASC) Order by the scrub_nurse column
 * @method     ChildCareOpMedDocQuery orderByAssistant($order = Criteria::ASC) Order by the assistant column
 * @method     ChildCareOpMedDocQuery orderByAnaesthesiaType($order = Criteria::ASC) Order by the anaesthesia_type column
 * @method     ChildCareOpMedDocQuery orderByPostorder($order = Criteria::ASC) Order by the postorder column
 * @method     ChildCareOpMedDocQuery orderByIndication($order = Criteria::ASC) Order by the indication column
 * @method     ChildCareOpMedDocQuery orderByProcedureOr($order = Criteria::ASC) Order by the procedure_or column
 * @method     ChildCareOpMedDocQuery orderByOpRoom($order = Criteria::ASC) Order by the op_room column
 * @method     ChildCareOpMedDocQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareOpMedDocQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareOpMedDocQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareOpMedDocQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareOpMedDocQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareOpMedDocQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareOpMedDocQuery groupByNr() Group by the nr column
 * @method     ChildCareOpMedDocQuery groupByOpDate() Group by the op_date column
 * @method     ChildCareOpMedDocQuery groupByOperator() Group by the operator column
 * @method     ChildCareOpMedDocQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareOpMedDocQuery groupByDeptNr() Group by the dept_nr column
 * @method     ChildCareOpMedDocQuery groupByDiagnosis() Group by the diagnosis column
 * @method     ChildCareOpMedDocQuery groupByLocalize() Group by the localize column
 * @method     ChildCareOpMedDocQuery groupByTherapy() Group by the therapy column
 * @method     ChildCareOpMedDocQuery groupBySpecial() Group by the special column
 * @method     ChildCareOpMedDocQuery groupByClassS() Group by the class_s column
 * @method     ChildCareOpMedDocQuery groupByClassL() Group by the class_l column
 * @method     ChildCareOpMedDocQuery groupByOpStart() Group by the op_start column
 * @method     ChildCareOpMedDocQuery groupByOpEnd() Group by the op_end column
 * @method     ChildCareOpMedDocQuery groupByAnasthetist() Group by the anasthetist column
 * @method     ChildCareOpMedDocQuery groupByScrubNurse() Group by the scrub_nurse column
 * @method     ChildCareOpMedDocQuery groupByAssistant() Group by the assistant column
 * @method     ChildCareOpMedDocQuery groupByAnaesthesiaType() Group by the anaesthesia_type column
 * @method     ChildCareOpMedDocQuery groupByPostorder() Group by the postorder column
 * @method     ChildCareOpMedDocQuery groupByIndication() Group by the indication column
 * @method     ChildCareOpMedDocQuery groupByProcedureOr() Group by the procedure_or column
 * @method     ChildCareOpMedDocQuery groupByOpRoom() Group by the op_room column
 * @method     ChildCareOpMedDocQuery groupByStatus() Group by the status column
 * @method     ChildCareOpMedDocQuery groupByHistory() Group by the history column
 * @method     ChildCareOpMedDocQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareOpMedDocQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareOpMedDocQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareOpMedDocQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareOpMedDocQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareOpMedDocQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareOpMedDocQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareOpMedDocQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareOpMedDocQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareOpMedDocQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareOpMedDoc findOne(ConnectionInterface $con = null) Return the first ChildCareOpMedDoc matching the query
 * @method     ChildCareOpMedDoc findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareOpMedDoc matching the query, or a new ChildCareOpMedDoc object populated from the query conditions when no match is found
 *
 * @method     ChildCareOpMedDoc findOneByNr(string $nr) Return the first ChildCareOpMedDoc filtered by the nr column
 * @method     ChildCareOpMedDoc findOneByOpDate(string $op_date) Return the first ChildCareOpMedDoc filtered by the op_date column
 * @method     ChildCareOpMedDoc findOneByOperator(string $operator) Return the first ChildCareOpMedDoc filtered by the operator column
 * @method     ChildCareOpMedDoc findOneByEncounterNr(int $encounter_nr) Return the first ChildCareOpMedDoc filtered by the encounter_nr column
 * @method     ChildCareOpMedDoc findOneByDeptNr(int $dept_nr) Return the first ChildCareOpMedDoc filtered by the dept_nr column
 * @method     ChildCareOpMedDoc findOneByDiagnosis(string $diagnosis) Return the first ChildCareOpMedDoc filtered by the diagnosis column
 * @method     ChildCareOpMedDoc findOneByLocalize(string $localize) Return the first ChildCareOpMedDoc filtered by the localize column
 * @method     ChildCareOpMedDoc findOneByTherapy(string $therapy) Return the first ChildCareOpMedDoc filtered by the therapy column
 * @method     ChildCareOpMedDoc findOneBySpecial(string $special) Return the first ChildCareOpMedDoc filtered by the special column
 * @method     ChildCareOpMedDoc findOneByClassS(int $class_s) Return the first ChildCareOpMedDoc filtered by the class_s column
 * @method     ChildCareOpMedDoc findOneByClassL(int $class_l) Return the first ChildCareOpMedDoc filtered by the class_l column
 * @method     ChildCareOpMedDoc findOneByOpStart(string $op_start) Return the first ChildCareOpMedDoc filtered by the op_start column
 * @method     ChildCareOpMedDoc findOneByOpEnd(string $op_end) Return the first ChildCareOpMedDoc filtered by the op_end column
 * @method     ChildCareOpMedDoc findOneByAnasthetist(string $anasthetist) Return the first ChildCareOpMedDoc filtered by the anasthetist column
 * @method     ChildCareOpMedDoc findOneByScrubNurse(string $scrub_nurse) Return the first ChildCareOpMedDoc filtered by the scrub_nurse column
 * @method     ChildCareOpMedDoc findOneByAssistant(string $assistant) Return the first ChildCareOpMedDoc filtered by the assistant column
 * @method     ChildCareOpMedDoc findOneByAnaesthesiaType(string $anaesthesia_type) Return the first ChildCareOpMedDoc filtered by the anaesthesia_type column
 * @method     ChildCareOpMedDoc findOneByPostorder(string $postorder) Return the first ChildCareOpMedDoc filtered by the postorder column
 * @method     ChildCareOpMedDoc findOneByIndication(string $indication) Return the first ChildCareOpMedDoc filtered by the indication column
 * @method     ChildCareOpMedDoc findOneByProcedureOr(string $procedure_or) Return the first ChildCareOpMedDoc filtered by the procedure_or column
 * @method     ChildCareOpMedDoc findOneByOpRoom(string $op_room) Return the first ChildCareOpMedDoc filtered by the op_room column
 * @method     ChildCareOpMedDoc findOneByStatus(string $status) Return the first ChildCareOpMedDoc filtered by the status column
 * @method     ChildCareOpMedDoc findOneByHistory(string $history) Return the first ChildCareOpMedDoc filtered by the history column
 * @method     ChildCareOpMedDoc findOneByModifyId(string $modify_id) Return the first ChildCareOpMedDoc filtered by the modify_id column
 * @method     ChildCareOpMedDoc findOneByModifyTime(string $modify_time) Return the first ChildCareOpMedDoc filtered by the modify_time column
 * @method     ChildCareOpMedDoc findOneByCreateId(string $create_id) Return the first ChildCareOpMedDoc filtered by the create_id column
 * @method     ChildCareOpMedDoc findOneByCreateTime(string $create_time) Return the first ChildCareOpMedDoc filtered by the create_time column *

 * @method     ChildCareOpMedDoc requirePk($key, ConnectionInterface $con = null) Return the ChildCareOpMedDoc by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOne(ConnectionInterface $con = null) Return the first ChildCareOpMedDoc matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareOpMedDoc requireOneByNr(string $nr) Return the first ChildCareOpMedDoc filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByOpDate(string $op_date) Return the first ChildCareOpMedDoc filtered by the op_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByOperator(string $operator) Return the first ChildCareOpMedDoc filtered by the operator column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareOpMedDoc filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByDeptNr(int $dept_nr) Return the first ChildCareOpMedDoc filtered by the dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByDiagnosis(string $diagnosis) Return the first ChildCareOpMedDoc filtered by the diagnosis column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByLocalize(string $localize) Return the first ChildCareOpMedDoc filtered by the localize column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByTherapy(string $therapy) Return the first ChildCareOpMedDoc filtered by the therapy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneBySpecial(string $special) Return the first ChildCareOpMedDoc filtered by the special column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByClassS(int $class_s) Return the first ChildCareOpMedDoc filtered by the class_s column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByClassL(int $class_l) Return the first ChildCareOpMedDoc filtered by the class_l column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByOpStart(string $op_start) Return the first ChildCareOpMedDoc filtered by the op_start column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByOpEnd(string $op_end) Return the first ChildCareOpMedDoc filtered by the op_end column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByAnasthetist(string $anasthetist) Return the first ChildCareOpMedDoc filtered by the anasthetist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByScrubNurse(string $scrub_nurse) Return the first ChildCareOpMedDoc filtered by the scrub_nurse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByAssistant(string $assistant) Return the first ChildCareOpMedDoc filtered by the assistant column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByAnaesthesiaType(string $anaesthesia_type) Return the first ChildCareOpMedDoc filtered by the anaesthesia_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByPostorder(string $postorder) Return the first ChildCareOpMedDoc filtered by the postorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByIndication(string $indication) Return the first ChildCareOpMedDoc filtered by the indication column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByProcedureOr(string $procedure_or) Return the first ChildCareOpMedDoc filtered by the procedure_or column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByOpRoom(string $op_room) Return the first ChildCareOpMedDoc filtered by the op_room column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByStatus(string $status) Return the first ChildCareOpMedDoc filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByHistory(string $history) Return the first ChildCareOpMedDoc filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByModifyId(string $modify_id) Return the first ChildCareOpMedDoc filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByModifyTime(string $modify_time) Return the first ChildCareOpMedDoc filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByCreateId(string $create_id) Return the first ChildCareOpMedDoc filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareOpMedDoc requireOneByCreateTime(string $create_time) Return the first ChildCareOpMedDoc filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareOpMedDoc[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareOpMedDoc objects based on current ModelCriteria
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByNr(string $nr) Return ChildCareOpMedDoc objects filtered by the nr column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByOpDate(string $op_date) Return ChildCareOpMedDoc objects filtered by the op_date column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByOperator(string $operator) Return ChildCareOpMedDoc objects filtered by the operator column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareOpMedDoc objects filtered by the encounter_nr column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByDeptNr(int $dept_nr) Return ChildCareOpMedDoc objects filtered by the dept_nr column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByDiagnosis(string $diagnosis) Return ChildCareOpMedDoc objects filtered by the diagnosis column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByLocalize(string $localize) Return ChildCareOpMedDoc objects filtered by the localize column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByTherapy(string $therapy) Return ChildCareOpMedDoc objects filtered by the therapy column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findBySpecial(string $special) Return ChildCareOpMedDoc objects filtered by the special column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByClassS(int $class_s) Return ChildCareOpMedDoc objects filtered by the class_s column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByClassL(int $class_l) Return ChildCareOpMedDoc objects filtered by the class_l column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByOpStart(string $op_start) Return ChildCareOpMedDoc objects filtered by the op_start column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByOpEnd(string $op_end) Return ChildCareOpMedDoc objects filtered by the op_end column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByAnasthetist(string $anasthetist) Return ChildCareOpMedDoc objects filtered by the anasthetist column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByScrubNurse(string $scrub_nurse) Return ChildCareOpMedDoc objects filtered by the scrub_nurse column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByAssistant(string $assistant) Return ChildCareOpMedDoc objects filtered by the assistant column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByAnaesthesiaType(string $anaesthesia_type) Return ChildCareOpMedDoc objects filtered by the anaesthesia_type column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByPostorder(string $postorder) Return ChildCareOpMedDoc objects filtered by the postorder column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByIndication(string $indication) Return ChildCareOpMedDoc objects filtered by the indication column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByProcedureOr(string $procedure_or) Return ChildCareOpMedDoc objects filtered by the procedure_or column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByOpRoom(string $op_room) Return ChildCareOpMedDoc objects filtered by the op_room column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByStatus(string $status) Return ChildCareOpMedDoc objects filtered by the status column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByHistory(string $history) Return ChildCareOpMedDoc objects filtered by the history column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareOpMedDoc objects filtered by the modify_id column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareOpMedDoc objects filtered by the modify_time column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareOpMedDoc objects filtered by the create_id column
 * @method     ChildCareOpMedDoc[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareOpMedDoc objects filtered by the create_time column
 * @method     ChildCareOpMedDoc[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareOpMedDocQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareOpMedDocQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareOpMedDoc', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareOpMedDocQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareOpMedDocQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareOpMedDocQuery) {
            return $criteria;
        }
        $query = new ChildCareOpMedDocQuery();
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
     * @return ChildCareOpMedDoc|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareOpMedDocTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareOpMedDocTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareOpMedDoc A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, op_date, operator, encounter_nr, dept_nr, diagnosis, localize, therapy, special, class_s, class_l, op_start, op_end, anasthetist, scrub_nurse, assistant, anaesthesia_type, postorder, indication, procedure_or, op_room, status, history, modify_id, modify_time, create_id, create_time FROM care_op_med_doc WHERE nr = :p0';
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
            /** @var ChildCareOpMedDoc $obj */
            $obj = new ChildCareOpMedDoc();
            $obj->hydrate($row);
            CareOpMedDocTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareOpMedDoc|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the op_date column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDate('fooValue');   // WHERE op_date = 'fooValue'
     * $query->filterByOpDate('%fooValue%', Criteria::LIKE); // WHERE op_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opDate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByOpDate($opDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opDate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_OP_DATE, $opDate, $comparison);
    }

    /**
     * Filter the query on the operator column
     *
     * Example usage:
     * <code>
     * $query->filterByOperator('fooValue');   // WHERE operator = 'fooValue'
     * $query->filterByOperator('%fooValue%', Criteria::LIKE); // WHERE operator LIKE '%fooValue%'
     * </code>
     *
     * @param     string $operator The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByOperator($operator = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($operator)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_OPERATOR, $operator, $comparison);
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
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
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
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByDeptNr($deptNr = null, $comparison = null)
    {
        if (is_array($deptNr)) {
            $useMinMax = false;
            if (isset($deptNr['min'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_DEPT_NR, $deptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptNr['max'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_DEPT_NR, $deptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_DEPT_NR, $deptNr, $comparison);
    }

    /**
     * Filter the query on the diagnosis column
     *
     * Example usage:
     * <code>
     * $query->filterByDiagnosis('fooValue');   // WHERE diagnosis = 'fooValue'
     * $query->filterByDiagnosis('%fooValue%', Criteria::LIKE); // WHERE diagnosis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diagnosis The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByDiagnosis($diagnosis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diagnosis)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_DIAGNOSIS, $diagnosis, $comparison);
    }

    /**
     * Filter the query on the localize column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalize('fooValue');   // WHERE localize = 'fooValue'
     * $query->filterByLocalize('%fooValue%', Criteria::LIKE); // WHERE localize LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localize The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByLocalize($localize = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localize)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_LOCALIZE, $localize, $comparison);
    }

    /**
     * Filter the query on the therapy column
     *
     * Example usage:
     * <code>
     * $query->filterByTherapy('fooValue');   // WHERE therapy = 'fooValue'
     * $query->filterByTherapy('%fooValue%', Criteria::LIKE); // WHERE therapy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $therapy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByTherapy($therapy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($therapy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_THERAPY, $therapy, $comparison);
    }

    /**
     * Filter the query on the special column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecial('fooValue');   // WHERE special = 'fooValue'
     * $query->filterBySpecial('%fooValue%', Criteria::LIKE); // WHERE special LIKE '%fooValue%'
     * </code>
     *
     * @param     string $special The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterBySpecial($special = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($special)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_SPECIAL, $special, $comparison);
    }

    /**
     * Filter the query on the class_s column
     *
     * Example usage:
     * <code>
     * $query->filterByClassS(1234); // WHERE class_s = 1234
     * $query->filterByClassS(array(12, 34)); // WHERE class_s IN (12, 34)
     * $query->filterByClassS(array('min' => 12)); // WHERE class_s > 12
     * </code>
     *
     * @param     mixed $classS The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByClassS($classS = null, $comparison = null)
    {
        if (is_array($classS)) {
            $useMinMax = false;
            if (isset($classS['min'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_CLASS_S, $classS['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classS['max'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_CLASS_S, $classS['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_CLASS_S, $classS, $comparison);
    }

    /**
     * Filter the query on the class_l column
     *
     * Example usage:
     * <code>
     * $query->filterByClassL(1234); // WHERE class_l = 1234
     * $query->filterByClassL(array(12, 34)); // WHERE class_l IN (12, 34)
     * $query->filterByClassL(array('min' => 12)); // WHERE class_l > 12
     * </code>
     *
     * @param     mixed $classL The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByClassL($classL = null, $comparison = null)
    {
        if (is_array($classL)) {
            $useMinMax = false;
            if (isset($classL['min'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_CLASS_L, $classL['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classL['max'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_CLASS_L, $classL['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_CLASS_L, $classL, $comparison);
    }

    /**
     * Filter the query on the op_start column
     *
     * Example usage:
     * <code>
     * $query->filterByOpStart('fooValue');   // WHERE op_start = 'fooValue'
     * $query->filterByOpStart('%fooValue%', Criteria::LIKE); // WHERE op_start LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opStart The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByOpStart($opStart = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opStart)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_OP_START, $opStart, $comparison);
    }

    /**
     * Filter the query on the op_end column
     *
     * Example usage:
     * <code>
     * $query->filterByOpEnd('fooValue');   // WHERE op_end = 'fooValue'
     * $query->filterByOpEnd('%fooValue%', Criteria::LIKE); // WHERE op_end LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opEnd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByOpEnd($opEnd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opEnd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_OP_END, $opEnd, $comparison);
    }

    /**
     * Filter the query on the anasthetist column
     *
     * Example usage:
     * <code>
     * $query->filterByAnasthetist('fooValue');   // WHERE anasthetist = 'fooValue'
     * $query->filterByAnasthetist('%fooValue%', Criteria::LIKE); // WHERE anasthetist LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anasthetist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByAnasthetist($anasthetist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anasthetist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_ANASTHETIST, $anasthetist, $comparison);
    }

    /**
     * Filter the query on the scrub_nurse column
     *
     * Example usage:
     * <code>
     * $query->filterByScrubNurse('fooValue');   // WHERE scrub_nurse = 'fooValue'
     * $query->filterByScrubNurse('%fooValue%', Criteria::LIKE); // WHERE scrub_nurse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scrubNurse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByScrubNurse($scrubNurse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scrubNurse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_SCRUB_NURSE, $scrubNurse, $comparison);
    }

    /**
     * Filter the query on the assistant column
     *
     * Example usage:
     * <code>
     * $query->filterByAssistant('fooValue');   // WHERE assistant = 'fooValue'
     * $query->filterByAssistant('%fooValue%', Criteria::LIKE); // WHERE assistant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $assistant The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByAssistant($assistant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($assistant)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_ASSISTANT, $assistant, $comparison);
    }

    /**
     * Filter the query on the anaesthesia_type column
     *
     * Example usage:
     * <code>
     * $query->filterByAnaesthesiaType('fooValue');   // WHERE anaesthesia_type = 'fooValue'
     * $query->filterByAnaesthesiaType('%fooValue%', Criteria::LIKE); // WHERE anaesthesia_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anaesthesiaType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByAnaesthesiaType($anaesthesiaType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anaesthesiaType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_ANAESTHESIA_TYPE, $anaesthesiaType, $comparison);
    }

    /**
     * Filter the query on the postorder column
     *
     * Example usage:
     * <code>
     * $query->filterByPostorder('fooValue');   // WHERE postorder = 'fooValue'
     * $query->filterByPostorder('%fooValue%', Criteria::LIKE); // WHERE postorder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postorder The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByPostorder($postorder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postorder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_POSTORDER, $postorder, $comparison);
    }

    /**
     * Filter the query on the indication column
     *
     * Example usage:
     * <code>
     * $query->filterByIndication('fooValue');   // WHERE indication = 'fooValue'
     * $query->filterByIndication('%fooValue%', Criteria::LIKE); // WHERE indication LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indication The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByIndication($indication = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indication)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_INDICATION, $indication, $comparison);
    }

    /**
     * Filter the query on the procedure_or column
     *
     * Example usage:
     * <code>
     * $query->filterByProcedureOr('fooValue');   // WHERE procedure_or = 'fooValue'
     * $query->filterByProcedureOr('%fooValue%', Criteria::LIKE); // WHERE procedure_or LIKE '%fooValue%'
     * </code>
     *
     * @param     string $procedureOr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByProcedureOr($procedureOr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($procedureOr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_PROCEDURE_OR, $procedureOr, $comparison);
    }

    /**
     * Filter the query on the op_room column
     *
     * Example usage:
     * <code>
     * $query->filterByOpRoom('fooValue');   // WHERE op_room = 'fooValue'
     * $query->filterByOpRoom('%fooValue%', Criteria::LIKE); // WHERE op_room LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opRoom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByOpRoom($opRoom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opRoom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_OP_ROOM, $opRoom, $comparison);
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
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareOpMedDocTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareOpMedDocTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareOpMedDoc $careOpMedDoc Object to remove from the list of results
     *
     * @return $this|ChildCareOpMedDocQuery The current query, for fluid interface
     */
    public function prune($careOpMedDoc = null)
    {
        if ($careOpMedDoc) {
            $this->addUsingAlias(CareOpMedDocTableMap::COL_NR, $careOpMedDoc->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_op_med_doc table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareOpMedDocTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareOpMedDocTableMap::clearInstancePool();
            CareOpMedDocTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareOpMedDocTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareOpMedDocTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareOpMedDocTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareOpMedDocTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareOpMedDocQuery
