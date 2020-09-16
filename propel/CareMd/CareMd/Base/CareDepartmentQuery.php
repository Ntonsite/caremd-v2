<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareDepartment as ChildCareDepartment;
use CareMd\CareMd\CareDepartmentQuery as ChildCareDepartmentQuery;
use CareMd\CareMd\Map\CareDepartmentTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_department' table.
 *
 *
 *
 * @method     ChildCareDepartmentQuery orderByNr($order = Criteria::ASC) Order by the nr column
 * @method     ChildCareDepartmentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCareDepartmentQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildCareDepartmentQuery orderByNameFormal($order = Criteria::ASC) Order by the name_formal column
 * @method     ChildCareDepartmentQuery orderByNameShort($order = Criteria::ASC) Order by the name_short column
 * @method     ChildCareDepartmentQuery orderByNameAlternate($order = Criteria::ASC) Order by the name_alternate column
 * @method     ChildCareDepartmentQuery orderByLdVar($order = Criteria::ASC) Order by the LD_var column
 * @method     ChildCareDepartmentQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildCareDepartmentQuery orderByAdmitInpatient($order = Criteria::ASC) Order by the admit_inpatient column
 * @method     ChildCareDepartmentQuery orderByAdmitOutpatient($order = Criteria::ASC) Order by the admit_outpatient column
 * @method     ChildCareDepartmentQuery orderByHasOncallDoc($order = Criteria::ASC) Order by the has_oncall_doc column
 * @method     ChildCareDepartmentQuery orderByHasOncallNurse($order = Criteria::ASC) Order by the has_oncall_nurse column
 * @method     ChildCareDepartmentQuery orderByDoesSurgery($order = Criteria::ASC) Order by the does_surgery column
 * @method     ChildCareDepartmentQuery orderByThisInstitution($order = Criteria::ASC) Order by the this_institution column
 * @method     ChildCareDepartmentQuery orderByIsSubDept($order = Criteria::ASC) Order by the is_sub_dept column
 * @method     ChildCareDepartmentQuery orderByParentDeptNr($order = Criteria::ASC) Order by the parent_dept_nr column
 * @method     ChildCareDepartmentQuery orderByWorkHours($order = Criteria::ASC) Order by the work_hours column
 * @method     ChildCareDepartmentQuery orderByConsultHours($order = Criteria::ASC) Order by the consult_hours column
 * @method     ChildCareDepartmentQuery orderByMaxAppointments($order = Criteria::ASC) Order by the max_appointments column
 * @method     ChildCareDepartmentQuery orderByIsInactive($order = Criteria::ASC) Order by the is_inactive column
 * @method     ChildCareDepartmentQuery orderBySortOrder($order = Criteria::ASC) Order by the sort_order column
 * @method     ChildCareDepartmentQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     ChildCareDepartmentQuery orderBySigLine($order = Criteria::ASC) Order by the sig_line column
 * @method     ChildCareDepartmentQuery orderBySigStamp($order = Criteria::ASC) Order by the sig_stamp column
 * @method     ChildCareDepartmentQuery orderByLogoMimeType($order = Criteria::ASC) Order by the logo_mime_type column
 * @method     ChildCareDepartmentQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCareDepartmentQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCareDepartmentQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCareDepartmentQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCareDepartmentQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCareDepartmentQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 *
 * @method     ChildCareDepartmentQuery groupByNr() Group by the nr column
 * @method     ChildCareDepartmentQuery groupById() Group by the id column
 * @method     ChildCareDepartmentQuery groupByType() Group by the type column
 * @method     ChildCareDepartmentQuery groupByNameFormal() Group by the name_formal column
 * @method     ChildCareDepartmentQuery groupByNameShort() Group by the name_short column
 * @method     ChildCareDepartmentQuery groupByNameAlternate() Group by the name_alternate column
 * @method     ChildCareDepartmentQuery groupByLdVar() Group by the LD_var column
 * @method     ChildCareDepartmentQuery groupByDescription() Group by the description column
 * @method     ChildCareDepartmentQuery groupByAdmitInpatient() Group by the admit_inpatient column
 * @method     ChildCareDepartmentQuery groupByAdmitOutpatient() Group by the admit_outpatient column
 * @method     ChildCareDepartmentQuery groupByHasOncallDoc() Group by the has_oncall_doc column
 * @method     ChildCareDepartmentQuery groupByHasOncallNurse() Group by the has_oncall_nurse column
 * @method     ChildCareDepartmentQuery groupByDoesSurgery() Group by the does_surgery column
 * @method     ChildCareDepartmentQuery groupByThisInstitution() Group by the this_institution column
 * @method     ChildCareDepartmentQuery groupByIsSubDept() Group by the is_sub_dept column
 * @method     ChildCareDepartmentQuery groupByParentDeptNr() Group by the parent_dept_nr column
 * @method     ChildCareDepartmentQuery groupByWorkHours() Group by the work_hours column
 * @method     ChildCareDepartmentQuery groupByConsultHours() Group by the consult_hours column
 * @method     ChildCareDepartmentQuery groupByMaxAppointments() Group by the max_appointments column
 * @method     ChildCareDepartmentQuery groupByIsInactive() Group by the is_inactive column
 * @method     ChildCareDepartmentQuery groupBySortOrder() Group by the sort_order column
 * @method     ChildCareDepartmentQuery groupByAddress() Group by the address column
 * @method     ChildCareDepartmentQuery groupBySigLine() Group by the sig_line column
 * @method     ChildCareDepartmentQuery groupBySigStamp() Group by the sig_stamp column
 * @method     ChildCareDepartmentQuery groupByLogoMimeType() Group by the logo_mime_type column
 * @method     ChildCareDepartmentQuery groupByStatus() Group by the status column
 * @method     ChildCareDepartmentQuery groupByHistory() Group by the history column
 * @method     ChildCareDepartmentQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCareDepartmentQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCareDepartmentQuery groupByCreateId() Group by the create_id column
 * @method     ChildCareDepartmentQuery groupByCreateTime() Group by the create_time column
 *
 * @method     ChildCareDepartmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareDepartmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareDepartmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareDepartmentQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareDepartmentQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareDepartmentQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareDepartment findOne(ConnectionInterface $con = null) Return the first ChildCareDepartment matching the query
 * @method     ChildCareDepartment findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareDepartment matching the query, or a new ChildCareDepartment object populated from the query conditions when no match is found
 *
 * @method     ChildCareDepartment findOneByNr(int $nr) Return the first ChildCareDepartment filtered by the nr column
 * @method     ChildCareDepartment findOneById(string $id) Return the first ChildCareDepartment filtered by the id column
 * @method     ChildCareDepartment findOneByType(string $type) Return the first ChildCareDepartment filtered by the type column
 * @method     ChildCareDepartment findOneByNameFormal(string $name_formal) Return the first ChildCareDepartment filtered by the name_formal column
 * @method     ChildCareDepartment findOneByNameShort(string $name_short) Return the first ChildCareDepartment filtered by the name_short column
 * @method     ChildCareDepartment findOneByNameAlternate(string $name_alternate) Return the first ChildCareDepartment filtered by the name_alternate column
 * @method     ChildCareDepartment findOneByLdVar(string $LD_var) Return the first ChildCareDepartment filtered by the LD_var column
 * @method     ChildCareDepartment findOneByDescription(string $description) Return the first ChildCareDepartment filtered by the description column
 * @method     ChildCareDepartment findOneByAdmitInpatient(boolean $admit_inpatient) Return the first ChildCareDepartment filtered by the admit_inpatient column
 * @method     ChildCareDepartment findOneByAdmitOutpatient(boolean $admit_outpatient) Return the first ChildCareDepartment filtered by the admit_outpatient column
 * @method     ChildCareDepartment findOneByHasOncallDoc(boolean $has_oncall_doc) Return the first ChildCareDepartment filtered by the has_oncall_doc column
 * @method     ChildCareDepartment findOneByHasOncallNurse(boolean $has_oncall_nurse) Return the first ChildCareDepartment filtered by the has_oncall_nurse column
 * @method     ChildCareDepartment findOneByDoesSurgery(boolean $does_surgery) Return the first ChildCareDepartment filtered by the does_surgery column
 * @method     ChildCareDepartment findOneByThisInstitution(boolean $this_institution) Return the first ChildCareDepartment filtered by the this_institution column
 * @method     ChildCareDepartment findOneByIsSubDept(boolean $is_sub_dept) Return the first ChildCareDepartment filtered by the is_sub_dept column
 * @method     ChildCareDepartment findOneByParentDeptNr(int $parent_dept_nr) Return the first ChildCareDepartment filtered by the parent_dept_nr column
 * @method     ChildCareDepartment findOneByWorkHours(string $work_hours) Return the first ChildCareDepartment filtered by the work_hours column
 * @method     ChildCareDepartment findOneByConsultHours(string $consult_hours) Return the first ChildCareDepartment filtered by the consult_hours column
 * @method     ChildCareDepartment findOneByMaxAppointments(int $max_appointments) Return the first ChildCareDepartment filtered by the max_appointments column
 * @method     ChildCareDepartment findOneByIsInactive(boolean $is_inactive) Return the first ChildCareDepartment filtered by the is_inactive column
 * @method     ChildCareDepartment findOneBySortOrder(int $sort_order) Return the first ChildCareDepartment filtered by the sort_order column
 * @method     ChildCareDepartment findOneByAddress(string $address) Return the first ChildCareDepartment filtered by the address column
 * @method     ChildCareDepartment findOneBySigLine(string $sig_line) Return the first ChildCareDepartment filtered by the sig_line column
 * @method     ChildCareDepartment findOneBySigStamp(string $sig_stamp) Return the first ChildCareDepartment filtered by the sig_stamp column
 * @method     ChildCareDepartment findOneByLogoMimeType(string $logo_mime_type) Return the first ChildCareDepartment filtered by the logo_mime_type column
 * @method     ChildCareDepartment findOneByStatus(string $status) Return the first ChildCareDepartment filtered by the status column
 * @method     ChildCareDepartment findOneByHistory(string $history) Return the first ChildCareDepartment filtered by the history column
 * @method     ChildCareDepartment findOneByModifyId(string $modify_id) Return the first ChildCareDepartment filtered by the modify_id column
 * @method     ChildCareDepartment findOneByModifyTime(string $modify_time) Return the first ChildCareDepartment filtered by the modify_time column
 * @method     ChildCareDepartment findOneByCreateId(string $create_id) Return the first ChildCareDepartment filtered by the create_id column
 * @method     ChildCareDepartment findOneByCreateTime(string $create_time) Return the first ChildCareDepartment filtered by the create_time column *

 * @method     ChildCareDepartment requirePk($key, ConnectionInterface $con = null) Return the ChildCareDepartment by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOne(ConnectionInterface $con = null) Return the first ChildCareDepartment matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareDepartment requireOneByNr(int $nr) Return the first ChildCareDepartment filtered by the nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneById(string $id) Return the first ChildCareDepartment filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByType(string $type) Return the first ChildCareDepartment filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByNameFormal(string $name_formal) Return the first ChildCareDepartment filtered by the name_formal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByNameShort(string $name_short) Return the first ChildCareDepartment filtered by the name_short column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByNameAlternate(string $name_alternate) Return the first ChildCareDepartment filtered by the name_alternate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByLdVar(string $LD_var) Return the first ChildCareDepartment filtered by the LD_var column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByDescription(string $description) Return the first ChildCareDepartment filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByAdmitInpatient(boolean $admit_inpatient) Return the first ChildCareDepartment filtered by the admit_inpatient column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByAdmitOutpatient(boolean $admit_outpatient) Return the first ChildCareDepartment filtered by the admit_outpatient column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByHasOncallDoc(boolean $has_oncall_doc) Return the first ChildCareDepartment filtered by the has_oncall_doc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByHasOncallNurse(boolean $has_oncall_nurse) Return the first ChildCareDepartment filtered by the has_oncall_nurse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByDoesSurgery(boolean $does_surgery) Return the first ChildCareDepartment filtered by the does_surgery column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByThisInstitution(boolean $this_institution) Return the first ChildCareDepartment filtered by the this_institution column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByIsSubDept(boolean $is_sub_dept) Return the first ChildCareDepartment filtered by the is_sub_dept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByParentDeptNr(int $parent_dept_nr) Return the first ChildCareDepartment filtered by the parent_dept_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByWorkHours(string $work_hours) Return the first ChildCareDepartment filtered by the work_hours column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByConsultHours(string $consult_hours) Return the first ChildCareDepartment filtered by the consult_hours column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByMaxAppointments(int $max_appointments) Return the first ChildCareDepartment filtered by the max_appointments column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByIsInactive(boolean $is_inactive) Return the first ChildCareDepartment filtered by the is_inactive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneBySortOrder(int $sort_order) Return the first ChildCareDepartment filtered by the sort_order column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByAddress(string $address) Return the first ChildCareDepartment filtered by the address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneBySigLine(string $sig_line) Return the first ChildCareDepartment filtered by the sig_line column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneBySigStamp(string $sig_stamp) Return the first ChildCareDepartment filtered by the sig_stamp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByLogoMimeType(string $logo_mime_type) Return the first ChildCareDepartment filtered by the logo_mime_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByStatus(string $status) Return the first ChildCareDepartment filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByHistory(string $history) Return the first ChildCareDepartment filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByModifyId(string $modify_id) Return the first ChildCareDepartment filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByModifyTime(string $modify_time) Return the first ChildCareDepartment filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByCreateId(string $create_id) Return the first ChildCareDepartment filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareDepartment requireOneByCreateTime(string $create_time) Return the first ChildCareDepartment filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareDepartment[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareDepartment objects based on current ModelCriteria
 * @method     ChildCareDepartment[]|ObjectCollection findByNr(int $nr) Return ChildCareDepartment objects filtered by the nr column
 * @method     ChildCareDepartment[]|ObjectCollection findById(string $id) Return ChildCareDepartment objects filtered by the id column
 * @method     ChildCareDepartment[]|ObjectCollection findByType(string $type) Return ChildCareDepartment objects filtered by the type column
 * @method     ChildCareDepartment[]|ObjectCollection findByNameFormal(string $name_formal) Return ChildCareDepartment objects filtered by the name_formal column
 * @method     ChildCareDepartment[]|ObjectCollection findByNameShort(string $name_short) Return ChildCareDepartment objects filtered by the name_short column
 * @method     ChildCareDepartment[]|ObjectCollection findByNameAlternate(string $name_alternate) Return ChildCareDepartment objects filtered by the name_alternate column
 * @method     ChildCareDepartment[]|ObjectCollection findByLdVar(string $LD_var) Return ChildCareDepartment objects filtered by the LD_var column
 * @method     ChildCareDepartment[]|ObjectCollection findByDescription(string $description) Return ChildCareDepartment objects filtered by the description column
 * @method     ChildCareDepartment[]|ObjectCollection findByAdmitInpatient(boolean $admit_inpatient) Return ChildCareDepartment objects filtered by the admit_inpatient column
 * @method     ChildCareDepartment[]|ObjectCollection findByAdmitOutpatient(boolean $admit_outpatient) Return ChildCareDepartment objects filtered by the admit_outpatient column
 * @method     ChildCareDepartment[]|ObjectCollection findByHasOncallDoc(boolean $has_oncall_doc) Return ChildCareDepartment objects filtered by the has_oncall_doc column
 * @method     ChildCareDepartment[]|ObjectCollection findByHasOncallNurse(boolean $has_oncall_nurse) Return ChildCareDepartment objects filtered by the has_oncall_nurse column
 * @method     ChildCareDepartment[]|ObjectCollection findByDoesSurgery(boolean $does_surgery) Return ChildCareDepartment objects filtered by the does_surgery column
 * @method     ChildCareDepartment[]|ObjectCollection findByThisInstitution(boolean $this_institution) Return ChildCareDepartment objects filtered by the this_institution column
 * @method     ChildCareDepartment[]|ObjectCollection findByIsSubDept(boolean $is_sub_dept) Return ChildCareDepartment objects filtered by the is_sub_dept column
 * @method     ChildCareDepartment[]|ObjectCollection findByParentDeptNr(int $parent_dept_nr) Return ChildCareDepartment objects filtered by the parent_dept_nr column
 * @method     ChildCareDepartment[]|ObjectCollection findByWorkHours(string $work_hours) Return ChildCareDepartment objects filtered by the work_hours column
 * @method     ChildCareDepartment[]|ObjectCollection findByConsultHours(string $consult_hours) Return ChildCareDepartment objects filtered by the consult_hours column
 * @method     ChildCareDepartment[]|ObjectCollection findByMaxAppointments(int $max_appointments) Return ChildCareDepartment objects filtered by the max_appointments column
 * @method     ChildCareDepartment[]|ObjectCollection findByIsInactive(boolean $is_inactive) Return ChildCareDepartment objects filtered by the is_inactive column
 * @method     ChildCareDepartment[]|ObjectCollection findBySortOrder(int $sort_order) Return ChildCareDepartment objects filtered by the sort_order column
 * @method     ChildCareDepartment[]|ObjectCollection findByAddress(string $address) Return ChildCareDepartment objects filtered by the address column
 * @method     ChildCareDepartment[]|ObjectCollection findBySigLine(string $sig_line) Return ChildCareDepartment objects filtered by the sig_line column
 * @method     ChildCareDepartment[]|ObjectCollection findBySigStamp(string $sig_stamp) Return ChildCareDepartment objects filtered by the sig_stamp column
 * @method     ChildCareDepartment[]|ObjectCollection findByLogoMimeType(string $logo_mime_type) Return ChildCareDepartment objects filtered by the logo_mime_type column
 * @method     ChildCareDepartment[]|ObjectCollection findByStatus(string $status) Return ChildCareDepartment objects filtered by the status column
 * @method     ChildCareDepartment[]|ObjectCollection findByHistory(string $history) Return ChildCareDepartment objects filtered by the history column
 * @method     ChildCareDepartment[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCareDepartment objects filtered by the modify_id column
 * @method     ChildCareDepartment[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCareDepartment objects filtered by the modify_time column
 * @method     ChildCareDepartment[]|ObjectCollection findByCreateId(string $create_id) Return ChildCareDepartment objects filtered by the create_id column
 * @method     ChildCareDepartment[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCareDepartment objects filtered by the create_time column
 * @method     ChildCareDepartment[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareDepartmentQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareDepartmentQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareDepartment', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareDepartmentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareDepartmentQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareDepartmentQuery) {
            return $criteria;
        }
        $query = new ChildCareDepartmentQuery();
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
     * @return ChildCareDepartment|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareDepartmentTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareDepartmentTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareDepartment A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT nr, id, type, name_formal, name_short, name_alternate, LD_var, description, admit_inpatient, admit_outpatient, has_oncall_doc, has_oncall_nurse, does_surgery, this_institution, is_sub_dept, parent_dept_nr, work_hours, consult_hours, max_appointments, is_inactive, sort_order, address, sig_line, sig_stamp, logo_mime_type, status, history, modify_id, modify_time, create_id, create_time FROM care_department WHERE nr = :p0';
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
            /** @var ChildCareDepartment $obj */
            $obj = new ChildCareDepartment();
            $obj->hydrate($row);
            CareDepartmentTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareDepartment|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareDepartmentTableMap::COL_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareDepartmentTableMap::COL_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByNr($nr = null, $comparison = null)
    {
        if (is_array($nr)) {
            $useMinMax = false;
            if (isset($nr['min'])) {
                $this->addUsingAlias(CareDepartmentTableMap::COL_NR, $nr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nr['max'])) {
                $this->addUsingAlias(CareDepartmentTableMap::COL_NR, $nr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_NR, $nr, $comparison);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById('fooValue');   // WHERE id = 'fooValue'
     * $query->filterById('%fooValue%', Criteria::LIKE); // WHERE id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $id The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%', Criteria::LIKE); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the name_formal column
     *
     * Example usage:
     * <code>
     * $query->filterByNameFormal('fooValue');   // WHERE name_formal = 'fooValue'
     * $query->filterByNameFormal('%fooValue%', Criteria::LIKE); // WHERE name_formal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameFormal The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByNameFormal($nameFormal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameFormal)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_NAME_FORMAL, $nameFormal, $comparison);
    }

    /**
     * Filter the query on the name_short column
     *
     * Example usage:
     * <code>
     * $query->filterByNameShort('fooValue');   // WHERE name_short = 'fooValue'
     * $query->filterByNameShort('%fooValue%', Criteria::LIKE); // WHERE name_short LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameShort The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByNameShort($nameShort = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameShort)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_NAME_SHORT, $nameShort, $comparison);
    }

    /**
     * Filter the query on the name_alternate column
     *
     * Example usage:
     * <code>
     * $query->filterByNameAlternate('fooValue');   // WHERE name_alternate = 'fooValue'
     * $query->filterByNameAlternate('%fooValue%', Criteria::LIKE); // WHERE name_alternate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameAlternate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByNameAlternate($nameAlternate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameAlternate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_NAME_ALTERNATE, $nameAlternate, $comparison);
    }

    /**
     * Filter the query on the LD_var column
     *
     * Example usage:
     * <code>
     * $query->filterByLdVar('fooValue');   // WHERE LD_var = 'fooValue'
     * $query->filterByLdVar('%fooValue%', Criteria::LIKE); // WHERE LD_var LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ldVar The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByLdVar($ldVar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ldVar)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_LD_VAR, $ldVar, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the admit_inpatient column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmitInpatient(true); // WHERE admit_inpatient = true
     * $query->filterByAdmitInpatient('yes'); // WHERE admit_inpatient = true
     * </code>
     *
     * @param     boolean|string $admitInpatient The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByAdmitInpatient($admitInpatient = null, $comparison = null)
    {
        if (is_string($admitInpatient)) {
            $admitInpatient = in_array(strtolower($admitInpatient), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_ADMIT_INPATIENT, $admitInpatient, $comparison);
    }

    /**
     * Filter the query on the admit_outpatient column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmitOutpatient(true); // WHERE admit_outpatient = true
     * $query->filterByAdmitOutpatient('yes'); // WHERE admit_outpatient = true
     * </code>
     *
     * @param     boolean|string $admitOutpatient The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByAdmitOutpatient($admitOutpatient = null, $comparison = null)
    {
        if (is_string($admitOutpatient)) {
            $admitOutpatient = in_array(strtolower($admitOutpatient), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_ADMIT_OUTPATIENT, $admitOutpatient, $comparison);
    }

    /**
     * Filter the query on the has_oncall_doc column
     *
     * Example usage:
     * <code>
     * $query->filterByHasOncallDoc(true); // WHERE has_oncall_doc = true
     * $query->filterByHasOncallDoc('yes'); // WHERE has_oncall_doc = true
     * </code>
     *
     * @param     boolean|string $hasOncallDoc The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByHasOncallDoc($hasOncallDoc = null, $comparison = null)
    {
        if (is_string($hasOncallDoc)) {
            $hasOncallDoc = in_array(strtolower($hasOncallDoc), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_HAS_ONCALL_DOC, $hasOncallDoc, $comparison);
    }

    /**
     * Filter the query on the has_oncall_nurse column
     *
     * Example usage:
     * <code>
     * $query->filterByHasOncallNurse(true); // WHERE has_oncall_nurse = true
     * $query->filterByHasOncallNurse('yes'); // WHERE has_oncall_nurse = true
     * </code>
     *
     * @param     boolean|string $hasOncallNurse The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByHasOncallNurse($hasOncallNurse = null, $comparison = null)
    {
        if (is_string($hasOncallNurse)) {
            $hasOncallNurse = in_array(strtolower($hasOncallNurse), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_HAS_ONCALL_NURSE, $hasOncallNurse, $comparison);
    }

    /**
     * Filter the query on the does_surgery column
     *
     * Example usage:
     * <code>
     * $query->filterByDoesSurgery(true); // WHERE does_surgery = true
     * $query->filterByDoesSurgery('yes'); // WHERE does_surgery = true
     * </code>
     *
     * @param     boolean|string $doesSurgery The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByDoesSurgery($doesSurgery = null, $comparison = null)
    {
        if (is_string($doesSurgery)) {
            $doesSurgery = in_array(strtolower($doesSurgery), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_DOES_SURGERY, $doesSurgery, $comparison);
    }

    /**
     * Filter the query on the this_institution column
     *
     * Example usage:
     * <code>
     * $query->filterByThisInstitution(true); // WHERE this_institution = true
     * $query->filterByThisInstitution('yes'); // WHERE this_institution = true
     * </code>
     *
     * @param     boolean|string $thisInstitution The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByThisInstitution($thisInstitution = null, $comparison = null)
    {
        if (is_string($thisInstitution)) {
            $thisInstitution = in_array(strtolower($thisInstitution), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_THIS_INSTITUTION, $thisInstitution, $comparison);
    }

    /**
     * Filter the query on the is_sub_dept column
     *
     * Example usage:
     * <code>
     * $query->filterByIsSubDept(true); // WHERE is_sub_dept = true
     * $query->filterByIsSubDept('yes'); // WHERE is_sub_dept = true
     * </code>
     *
     * @param     boolean|string $isSubDept The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByIsSubDept($isSubDept = null, $comparison = null)
    {
        if (is_string($isSubDept)) {
            $isSubDept = in_array(strtolower($isSubDept), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_IS_SUB_DEPT, $isSubDept, $comparison);
    }

    /**
     * Filter the query on the parent_dept_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByParentDeptNr(1234); // WHERE parent_dept_nr = 1234
     * $query->filterByParentDeptNr(array(12, 34)); // WHERE parent_dept_nr IN (12, 34)
     * $query->filterByParentDeptNr(array('min' => 12)); // WHERE parent_dept_nr > 12
     * </code>
     *
     * @param     mixed $parentDeptNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByParentDeptNr($parentDeptNr = null, $comparison = null)
    {
        if (is_array($parentDeptNr)) {
            $useMinMax = false;
            if (isset($parentDeptNr['min'])) {
                $this->addUsingAlias(CareDepartmentTableMap::COL_PARENT_DEPT_NR, $parentDeptNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parentDeptNr['max'])) {
                $this->addUsingAlias(CareDepartmentTableMap::COL_PARENT_DEPT_NR, $parentDeptNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_PARENT_DEPT_NR, $parentDeptNr, $comparison);
    }

    /**
     * Filter the query on the work_hours column
     *
     * Example usage:
     * <code>
     * $query->filterByWorkHours('fooValue');   // WHERE work_hours = 'fooValue'
     * $query->filterByWorkHours('%fooValue%', Criteria::LIKE); // WHERE work_hours LIKE '%fooValue%'
     * </code>
     *
     * @param     string $workHours The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByWorkHours($workHours = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($workHours)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_WORK_HOURS, $workHours, $comparison);
    }

    /**
     * Filter the query on the consult_hours column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultHours('fooValue');   // WHERE consult_hours = 'fooValue'
     * $query->filterByConsultHours('%fooValue%', Criteria::LIKE); // WHERE consult_hours LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultHours The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByConsultHours($consultHours = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultHours)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_CONSULT_HOURS, $consultHours, $comparison);
    }

    /**
     * Filter the query on the max_appointments column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxAppointments(1234); // WHERE max_appointments = 1234
     * $query->filterByMaxAppointments(array(12, 34)); // WHERE max_appointments IN (12, 34)
     * $query->filterByMaxAppointments(array('min' => 12)); // WHERE max_appointments > 12
     * </code>
     *
     * @param     mixed $maxAppointments The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByMaxAppointments($maxAppointments = null, $comparison = null)
    {
        if (is_array($maxAppointments)) {
            $useMinMax = false;
            if (isset($maxAppointments['min'])) {
                $this->addUsingAlias(CareDepartmentTableMap::COL_MAX_APPOINTMENTS, $maxAppointments['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxAppointments['max'])) {
                $this->addUsingAlias(CareDepartmentTableMap::COL_MAX_APPOINTMENTS, $maxAppointments['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_MAX_APPOINTMENTS, $maxAppointments, $comparison);
    }

    /**
     * Filter the query on the is_inactive column
     *
     * Example usage:
     * <code>
     * $query->filterByIsInactive(true); // WHERE is_inactive = true
     * $query->filterByIsInactive('yes'); // WHERE is_inactive = true
     * </code>
     *
     * @param     boolean|string $isInactive The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByIsInactive($isInactive = null, $comparison = null)
    {
        if (is_string($isInactive)) {
            $isInactive = in_array(strtolower($isInactive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_IS_INACTIVE, $isInactive, $comparison);
    }

    /**
     * Filter the query on the sort_order column
     *
     * Example usage:
     * <code>
     * $query->filterBySortOrder(1234); // WHERE sort_order = 1234
     * $query->filterBySortOrder(array(12, 34)); // WHERE sort_order IN (12, 34)
     * $query->filterBySortOrder(array('min' => 12)); // WHERE sort_order > 12
     * </code>
     *
     * @param     mixed $sortOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterBySortOrder($sortOrder = null, $comparison = null)
    {
        if (is_array($sortOrder)) {
            $useMinMax = false;
            if (isset($sortOrder['min'])) {
                $this->addUsingAlias(CareDepartmentTableMap::COL_SORT_ORDER, $sortOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortOrder['max'])) {
                $this->addUsingAlias(CareDepartmentTableMap::COL_SORT_ORDER, $sortOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_SORT_ORDER, $sortOrder, $comparison);
    }

    /**
     * Filter the query on the address column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress('fooValue');   // WHERE address = 'fooValue'
     * $query->filterByAddress('%fooValue%', Criteria::LIKE); // WHERE address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the sig_line column
     *
     * Example usage:
     * <code>
     * $query->filterBySigLine('fooValue');   // WHERE sig_line = 'fooValue'
     * $query->filterBySigLine('%fooValue%', Criteria::LIKE); // WHERE sig_line LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigLine The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterBySigLine($sigLine = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigLine)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_SIG_LINE, $sigLine, $comparison);
    }

    /**
     * Filter the query on the sig_stamp column
     *
     * Example usage:
     * <code>
     * $query->filterBySigStamp('fooValue');   // WHERE sig_stamp = 'fooValue'
     * $query->filterBySigStamp('%fooValue%', Criteria::LIKE); // WHERE sig_stamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigStamp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterBySigStamp($sigStamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigStamp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_SIG_STAMP, $sigStamp, $comparison);
    }

    /**
     * Filter the query on the logo_mime_type column
     *
     * Example usage:
     * <code>
     * $query->filterByLogoMimeType('fooValue');   // WHERE logo_mime_type = 'fooValue'
     * $query->filterByLogoMimeType('%fooValue%', Criteria::LIKE); // WHERE logo_mime_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logoMimeType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByLogoMimeType($logoMimeType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logoMimeType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_LOGO_MIME_TYPE, $logoMimeType, $comparison);
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
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_HISTORY, $history, $comparison);
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
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CareDepartmentTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CareDepartmentTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CareDepartmentTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CareDepartmentTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareDepartmentTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareDepartment $careDepartment Object to remove from the list of results
     *
     * @return $this|ChildCareDepartmentQuery The current query, for fluid interface
     */
    public function prune($careDepartment = null)
    {
        if ($careDepartment) {
            $this->addUsingAlias(CareDepartmentTableMap::COL_NR, $careDepartment->getNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_department table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDepartmentTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareDepartmentTableMap::clearInstancePool();
            CareDepartmentTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareDepartmentTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareDepartmentTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareDepartmentTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareDepartmentTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareDepartmentQuery
