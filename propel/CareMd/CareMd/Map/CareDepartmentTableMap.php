<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareDepartment;
use CareMd\CareMd\CareDepartmentQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'care_department' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareDepartmentTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareDepartmentTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_department';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareDepartment';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareDepartment';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 31;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 31;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_department.nr';

    /**
     * the column name for the id field
     */
    const COL_ID = 'care_department.id';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'care_department.type';

    /**
     * the column name for the name_formal field
     */
    const COL_NAME_FORMAL = 'care_department.name_formal';

    /**
     * the column name for the name_short field
     */
    const COL_NAME_SHORT = 'care_department.name_short';

    /**
     * the column name for the name_alternate field
     */
    const COL_NAME_ALTERNATE = 'care_department.name_alternate';

    /**
     * the column name for the LD_var field
     */
    const COL_LD_VAR = 'care_department.LD_var';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'care_department.description';

    /**
     * the column name for the admit_inpatient field
     */
    const COL_ADMIT_INPATIENT = 'care_department.admit_inpatient';

    /**
     * the column name for the admit_outpatient field
     */
    const COL_ADMIT_OUTPATIENT = 'care_department.admit_outpatient';

    /**
     * the column name for the has_oncall_doc field
     */
    const COL_HAS_ONCALL_DOC = 'care_department.has_oncall_doc';

    /**
     * the column name for the has_oncall_nurse field
     */
    const COL_HAS_ONCALL_NURSE = 'care_department.has_oncall_nurse';

    /**
     * the column name for the does_surgery field
     */
    const COL_DOES_SURGERY = 'care_department.does_surgery';

    /**
     * the column name for the this_institution field
     */
    const COL_THIS_INSTITUTION = 'care_department.this_institution';

    /**
     * the column name for the is_sub_dept field
     */
    const COL_IS_SUB_DEPT = 'care_department.is_sub_dept';

    /**
     * the column name for the parent_dept_nr field
     */
    const COL_PARENT_DEPT_NR = 'care_department.parent_dept_nr';

    /**
     * the column name for the work_hours field
     */
    const COL_WORK_HOURS = 'care_department.work_hours';

    /**
     * the column name for the consult_hours field
     */
    const COL_CONSULT_HOURS = 'care_department.consult_hours';

    /**
     * the column name for the max_appointments field
     */
    const COL_MAX_APPOINTMENTS = 'care_department.max_appointments';

    /**
     * the column name for the is_inactive field
     */
    const COL_IS_INACTIVE = 'care_department.is_inactive';

    /**
     * the column name for the sort_order field
     */
    const COL_SORT_ORDER = 'care_department.sort_order';

    /**
     * the column name for the address field
     */
    const COL_ADDRESS = 'care_department.address';

    /**
     * the column name for the sig_line field
     */
    const COL_SIG_LINE = 'care_department.sig_line';

    /**
     * the column name for the sig_stamp field
     */
    const COL_SIG_STAMP = 'care_department.sig_stamp';

    /**
     * the column name for the logo_mime_type field
     */
    const COL_LOGO_MIME_TYPE = 'care_department.logo_mime_type';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_department.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_department.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_department.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_department.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_department.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_department.create_time';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Nr', 'Id', 'Type', 'NameFormal', 'NameShort', 'NameAlternate', 'LdVar', 'Description', 'AdmitInpatient', 'AdmitOutpatient', 'HasOncallDoc', 'HasOncallNurse', 'DoesSurgery', 'ThisInstitution', 'IsSubDept', 'ParentDeptNr', 'WorkHours', 'ConsultHours', 'MaxAppointments', 'IsInactive', 'SortOrder', 'Address', 'SigLine', 'SigStamp', 'LogoMimeType', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'id', 'type', 'nameFormal', 'nameShort', 'nameAlternate', 'ldVar', 'description', 'admitInpatient', 'admitOutpatient', 'hasOncallDoc', 'hasOncallNurse', 'doesSurgery', 'thisInstitution', 'isSubDept', 'parentDeptNr', 'workHours', 'consultHours', 'maxAppointments', 'isInactive', 'sortOrder', 'address', 'sigLine', 'sigStamp', 'logoMimeType', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CareDepartmentTableMap::COL_NR, CareDepartmentTableMap::COL_ID, CareDepartmentTableMap::COL_TYPE, CareDepartmentTableMap::COL_NAME_FORMAL, CareDepartmentTableMap::COL_NAME_SHORT, CareDepartmentTableMap::COL_NAME_ALTERNATE, CareDepartmentTableMap::COL_LD_VAR, CareDepartmentTableMap::COL_DESCRIPTION, CareDepartmentTableMap::COL_ADMIT_INPATIENT, CareDepartmentTableMap::COL_ADMIT_OUTPATIENT, CareDepartmentTableMap::COL_HAS_ONCALL_DOC, CareDepartmentTableMap::COL_HAS_ONCALL_NURSE, CareDepartmentTableMap::COL_DOES_SURGERY, CareDepartmentTableMap::COL_THIS_INSTITUTION, CareDepartmentTableMap::COL_IS_SUB_DEPT, CareDepartmentTableMap::COL_PARENT_DEPT_NR, CareDepartmentTableMap::COL_WORK_HOURS, CareDepartmentTableMap::COL_CONSULT_HOURS, CareDepartmentTableMap::COL_MAX_APPOINTMENTS, CareDepartmentTableMap::COL_IS_INACTIVE, CareDepartmentTableMap::COL_SORT_ORDER, CareDepartmentTableMap::COL_ADDRESS, CareDepartmentTableMap::COL_SIG_LINE, CareDepartmentTableMap::COL_SIG_STAMP, CareDepartmentTableMap::COL_LOGO_MIME_TYPE, CareDepartmentTableMap::COL_STATUS, CareDepartmentTableMap::COL_HISTORY, CareDepartmentTableMap::COL_MODIFY_ID, CareDepartmentTableMap::COL_MODIFY_TIME, CareDepartmentTableMap::COL_CREATE_ID, CareDepartmentTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'id', 'type', 'name_formal', 'name_short', 'name_alternate', 'LD_var', 'description', 'admit_inpatient', 'admit_outpatient', 'has_oncall_doc', 'has_oncall_nurse', 'does_surgery', 'this_institution', 'is_sub_dept', 'parent_dept_nr', 'work_hours', 'consult_hours', 'max_appointments', 'is_inactive', 'sort_order', 'address', 'sig_line', 'sig_stamp', 'logo_mime_type', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'Id' => 1, 'Type' => 2, 'NameFormal' => 3, 'NameShort' => 4, 'NameAlternate' => 5, 'LdVar' => 6, 'Description' => 7, 'AdmitInpatient' => 8, 'AdmitOutpatient' => 9, 'HasOncallDoc' => 10, 'HasOncallNurse' => 11, 'DoesSurgery' => 12, 'ThisInstitution' => 13, 'IsSubDept' => 14, 'ParentDeptNr' => 15, 'WorkHours' => 16, 'ConsultHours' => 17, 'MaxAppointments' => 18, 'IsInactive' => 19, 'SortOrder' => 20, 'Address' => 21, 'SigLine' => 22, 'SigStamp' => 23, 'LogoMimeType' => 24, 'Status' => 25, 'History' => 26, 'ModifyId' => 27, 'ModifyTime' => 28, 'CreateId' => 29, 'CreateTime' => 30, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'id' => 1, 'type' => 2, 'nameFormal' => 3, 'nameShort' => 4, 'nameAlternate' => 5, 'ldVar' => 6, 'description' => 7, 'admitInpatient' => 8, 'admitOutpatient' => 9, 'hasOncallDoc' => 10, 'hasOncallNurse' => 11, 'doesSurgery' => 12, 'thisInstitution' => 13, 'isSubDept' => 14, 'parentDeptNr' => 15, 'workHours' => 16, 'consultHours' => 17, 'maxAppointments' => 18, 'isInactive' => 19, 'sortOrder' => 20, 'address' => 21, 'sigLine' => 22, 'sigStamp' => 23, 'logoMimeType' => 24, 'status' => 25, 'history' => 26, 'modifyId' => 27, 'modifyTime' => 28, 'createId' => 29, 'createTime' => 30, ),
        self::TYPE_COLNAME       => array(CareDepartmentTableMap::COL_NR => 0, CareDepartmentTableMap::COL_ID => 1, CareDepartmentTableMap::COL_TYPE => 2, CareDepartmentTableMap::COL_NAME_FORMAL => 3, CareDepartmentTableMap::COL_NAME_SHORT => 4, CareDepartmentTableMap::COL_NAME_ALTERNATE => 5, CareDepartmentTableMap::COL_LD_VAR => 6, CareDepartmentTableMap::COL_DESCRIPTION => 7, CareDepartmentTableMap::COL_ADMIT_INPATIENT => 8, CareDepartmentTableMap::COL_ADMIT_OUTPATIENT => 9, CareDepartmentTableMap::COL_HAS_ONCALL_DOC => 10, CareDepartmentTableMap::COL_HAS_ONCALL_NURSE => 11, CareDepartmentTableMap::COL_DOES_SURGERY => 12, CareDepartmentTableMap::COL_THIS_INSTITUTION => 13, CareDepartmentTableMap::COL_IS_SUB_DEPT => 14, CareDepartmentTableMap::COL_PARENT_DEPT_NR => 15, CareDepartmentTableMap::COL_WORK_HOURS => 16, CareDepartmentTableMap::COL_CONSULT_HOURS => 17, CareDepartmentTableMap::COL_MAX_APPOINTMENTS => 18, CareDepartmentTableMap::COL_IS_INACTIVE => 19, CareDepartmentTableMap::COL_SORT_ORDER => 20, CareDepartmentTableMap::COL_ADDRESS => 21, CareDepartmentTableMap::COL_SIG_LINE => 22, CareDepartmentTableMap::COL_SIG_STAMP => 23, CareDepartmentTableMap::COL_LOGO_MIME_TYPE => 24, CareDepartmentTableMap::COL_STATUS => 25, CareDepartmentTableMap::COL_HISTORY => 26, CareDepartmentTableMap::COL_MODIFY_ID => 27, CareDepartmentTableMap::COL_MODIFY_TIME => 28, CareDepartmentTableMap::COL_CREATE_ID => 29, CareDepartmentTableMap::COL_CREATE_TIME => 30, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'id' => 1, 'type' => 2, 'name_formal' => 3, 'name_short' => 4, 'name_alternate' => 5, 'LD_var' => 6, 'description' => 7, 'admit_inpatient' => 8, 'admit_outpatient' => 9, 'has_oncall_doc' => 10, 'has_oncall_nurse' => 11, 'does_surgery' => 12, 'this_institution' => 13, 'is_sub_dept' => 14, 'parent_dept_nr' => 15, 'work_hours' => 16, 'consult_hours' => 17, 'max_appointments' => 18, 'is_inactive' => 19, 'sort_order' => 20, 'address' => 21, 'sig_line' => 22, 'sig_stamp' => 23, 'logo_mime_type' => 24, 'status' => 25, 'history' => 26, 'modify_id' => 27, 'modify_time' => 28, 'create_id' => 29, 'create_time' => 30, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('care_department');
        $this->setPhpName('CareDepartment');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareDepartment');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'SMALLINT', true, 8, null);
        $this->addColumn('id', 'Id', 'VARCHAR', true, 60, '');
        $this->addColumn('type', 'Type', 'VARCHAR', true, 25, '');
        $this->addColumn('name_formal', 'NameFormal', 'VARCHAR', true, 60, '');
        $this->addColumn('name_short', 'NameShort', 'VARCHAR', true, 35, '');
        $this->addColumn('name_alternate', 'NameAlternate', 'VARCHAR', false, 225, null);
        $this->addColumn('LD_var', 'LdVar', 'VARCHAR', true, 35, '');
        $this->addColumn('description', 'Description', 'LONGVARCHAR', true, null, null);
        $this->addColumn('admit_inpatient', 'AdmitInpatient', 'BOOLEAN', true, 1, false);
        $this->addColumn('admit_outpatient', 'AdmitOutpatient', 'BOOLEAN', true, 1, false);
        $this->addColumn('has_oncall_doc', 'HasOncallDoc', 'BOOLEAN', true, 1, true);
        $this->addColumn('has_oncall_nurse', 'HasOncallNurse', 'BOOLEAN', true, 1, true);
        $this->addColumn('does_surgery', 'DoesSurgery', 'BOOLEAN', true, 1, false);
        $this->addColumn('this_institution', 'ThisInstitution', 'BOOLEAN', true, 1, true);
        $this->addColumn('is_sub_dept', 'IsSubDept', 'BOOLEAN', true, 1, false);
        $this->addColumn('parent_dept_nr', 'ParentDeptNr', 'TINYINT', false, 3, null);
        $this->addColumn('work_hours', 'WorkHours', 'VARCHAR', false, 100, null);
        $this->addColumn('consult_hours', 'ConsultHours', 'VARCHAR', false, 100, null);
        $this->addColumn('max_appointments', 'MaxAppointments', 'INTEGER', true, 10, 20);
        $this->addColumn('is_inactive', 'IsInactive', 'BOOLEAN', true, 1, false);
        $this->addColumn('sort_order', 'SortOrder', 'TINYINT', true, 3, 0);
        $this->addColumn('address', 'Address', 'LONGVARCHAR', false, null, null);
        $this->addColumn('sig_line', 'SigLine', 'VARCHAR', false, 60, null);
        $this->addColumn('sig_stamp', 'SigStamp', 'LONGVARCHAR', false, null, null);
        $this->addColumn('logo_mime_type', 'LogoMimeType', 'VARCHAR', false, 5, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', false, null, null);
        $this->addColumn('modify_id', 'ModifyId', 'VARCHAR', true, 35, '');
        $this->addColumn('modify_time', 'ModifyTime', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('create_id', 'CreateId', 'VARCHAR', true, 35, '');
        $this->addColumn('create_time', 'CreateTime', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? CareDepartmentTableMap::CLASS_DEFAULT : CareDepartmentTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (CareDepartment object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareDepartmentTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareDepartmentTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareDepartmentTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareDepartmentTableMap::OM_CLASS;
            /** @var CareDepartment $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareDepartmentTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = CareDepartmentTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareDepartmentTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareDepartment $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareDepartmentTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_NR);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_ID);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_TYPE);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_NAME_FORMAL);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_NAME_SHORT);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_NAME_ALTERNATE);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_LD_VAR);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_ADMIT_INPATIENT);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_ADMIT_OUTPATIENT);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_HAS_ONCALL_DOC);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_HAS_ONCALL_NURSE);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_DOES_SURGERY);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_THIS_INSTITUTION);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_IS_SUB_DEPT);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_PARENT_DEPT_NR);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_WORK_HOURS);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_CONSULT_HOURS);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_MAX_APPOINTMENTS);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_IS_INACTIVE);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_SORT_ORDER);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_ADDRESS);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_SIG_LINE);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_SIG_STAMP);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_LOGO_MIME_TYPE);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_STATUS);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CareDepartmentTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.name_formal');
            $criteria->addSelectColumn($alias . '.name_short');
            $criteria->addSelectColumn($alias . '.name_alternate');
            $criteria->addSelectColumn($alias . '.LD_var');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.admit_inpatient');
            $criteria->addSelectColumn($alias . '.admit_outpatient');
            $criteria->addSelectColumn($alias . '.has_oncall_doc');
            $criteria->addSelectColumn($alias . '.has_oncall_nurse');
            $criteria->addSelectColumn($alias . '.does_surgery');
            $criteria->addSelectColumn($alias . '.this_institution');
            $criteria->addSelectColumn($alias . '.is_sub_dept');
            $criteria->addSelectColumn($alias . '.parent_dept_nr');
            $criteria->addSelectColumn($alias . '.work_hours');
            $criteria->addSelectColumn($alias . '.consult_hours');
            $criteria->addSelectColumn($alias . '.max_appointments');
            $criteria->addSelectColumn($alias . '.is_inactive');
            $criteria->addSelectColumn($alias . '.sort_order');
            $criteria->addSelectColumn($alias . '.address');
            $criteria->addSelectColumn($alias . '.sig_line');
            $criteria->addSelectColumn($alias . '.sig_stamp');
            $criteria->addSelectColumn($alias . '.logo_mime_type');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.history');
            $criteria->addSelectColumn($alias . '.modify_id');
            $criteria->addSelectColumn($alias . '.modify_time');
            $criteria->addSelectColumn($alias . '.create_id');
            $criteria->addSelectColumn($alias . '.create_time');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(CareDepartmentTableMap::DATABASE_NAME)->getTable(CareDepartmentTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareDepartmentTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareDepartmentTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareDepartmentTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareDepartment or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareDepartment object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDepartmentTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareDepartment) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareDepartmentTableMap::DATABASE_NAME);
            $criteria->add(CareDepartmentTableMap::COL_NR, (array) $values, Criteria::IN);
        }

        $query = CareDepartmentQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareDepartmentTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareDepartmentTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_department table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareDepartmentQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareDepartment or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareDepartment object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareDepartmentTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareDepartment object
        }

        if ($criteria->containsKey(CareDepartmentTableMap::COL_NR) && $criteria->keyContainsValue(CareDepartmentTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CareDepartmentTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CareDepartmentQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareDepartmentTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareDepartmentTableMap::buildTableMap();
