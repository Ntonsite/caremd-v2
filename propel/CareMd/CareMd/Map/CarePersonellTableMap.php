<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CarePersonell;
use CareMd\CareMd\CarePersonellQuery;
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
 * This class defines the structure of the 'care_personell' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CarePersonellTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CarePersonellTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_personell';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CarePersonell';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CarePersonell';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 27;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 27;

    /**
     * the column name for the nr field
     */
    const COL_NR = 'care_personell.nr';

    /**
     * the column name for the short_id field
     */
    const COL_SHORT_ID = 'care_personell.short_id';

    /**
     * the column name for the pid field
     */
    const COL_PID = 'care_personell.pid';

    /**
     * the column name for the job_type_nr field
     */
    const COL_JOB_TYPE_NR = 'care_personell.job_type_nr';

    /**
     * the column name for the job_function_title field
     */
    const COL_JOB_FUNCTION_TITLE = 'care_personell.job_function_title';

    /**
     * the column name for the date_join field
     */
    const COL_DATE_JOIN = 'care_personell.date_join';

    /**
     * the column name for the date_exit field
     */
    const COL_DATE_EXIT = 'care_personell.date_exit';

    /**
     * the column name for the contract_class field
     */
    const COL_CONTRACT_CLASS = 'care_personell.contract_class';

    /**
     * the column name for the contract_start field
     */
    const COL_CONTRACT_START = 'care_personell.contract_start';

    /**
     * the column name for the contract_end field
     */
    const COL_CONTRACT_END = 'care_personell.contract_end';

    /**
     * the column name for the is_discharged field
     */
    const COL_IS_DISCHARGED = 'care_personell.is_discharged';

    /**
     * the column name for the pay_class field
     */
    const COL_PAY_CLASS = 'care_personell.pay_class';

    /**
     * the column name for the pay_class_sub field
     */
    const COL_PAY_CLASS_SUB = 'care_personell.pay_class_sub';

    /**
     * the column name for the local_premium_id field
     */
    const COL_LOCAL_PREMIUM_ID = 'care_personell.local_premium_id';

    /**
     * the column name for the tax_account_nr field
     */
    const COL_TAX_ACCOUNT_NR = 'care_personell.tax_account_nr';

    /**
     * the column name for the ir_code field
     */
    const COL_IR_CODE = 'care_personell.ir_code';

    /**
     * the column name for the nr_workday field
     */
    const COL_NR_WORKDAY = 'care_personell.nr_workday';

    /**
     * the column name for the nr_weekhour field
     */
    const COL_NR_WEEKHOUR = 'care_personell.nr_weekhour';

    /**
     * the column name for the nr_vacation_day field
     */
    const COL_NR_VACATION_DAY = 'care_personell.nr_vacation_day';

    /**
     * the column name for the multiple_employer field
     */
    const COL_MULTIPLE_EMPLOYER = 'care_personell.multiple_employer';

    /**
     * the column name for the nr_dependent field
     */
    const COL_NR_DEPENDENT = 'care_personell.nr_dependent';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'care_personell.status';

    /**
     * the column name for the history field
     */
    const COL_HISTORY = 'care_personell.history';

    /**
     * the column name for the modify_id field
     */
    const COL_MODIFY_ID = 'care_personell.modify_id';

    /**
     * the column name for the modify_time field
     */
    const COL_MODIFY_TIME = 'care_personell.modify_time';

    /**
     * the column name for the create_id field
     */
    const COL_CREATE_ID = 'care_personell.create_id';

    /**
     * the column name for the create_time field
     */
    const COL_CREATE_TIME = 'care_personell.create_time';

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
        self::TYPE_PHPNAME       => array('Nr', 'ShortId', 'Pid', 'JobTypeNr', 'JobFunctionTitle', 'DateJoin', 'DateExit', 'ContractClass', 'ContractStart', 'ContractEnd', 'IsDischarged', 'PayClass', 'PayClassSub', 'LocalPremiumId', 'TaxAccountNr', 'IrCode', 'NrWorkday', 'NrWeekhour', 'NrVacationDay', 'MultipleEmployer', 'NrDependent', 'Status', 'History', 'ModifyId', 'ModifyTime', 'CreateId', 'CreateTime', ),
        self::TYPE_CAMELNAME     => array('nr', 'shortId', 'pid', 'jobTypeNr', 'jobFunctionTitle', 'dateJoin', 'dateExit', 'contractClass', 'contractStart', 'contractEnd', 'isDischarged', 'payClass', 'payClassSub', 'localPremiumId', 'taxAccountNr', 'irCode', 'nrWorkday', 'nrWeekhour', 'nrVacationDay', 'multipleEmployer', 'nrDependent', 'status', 'history', 'modifyId', 'modifyTime', 'createId', 'createTime', ),
        self::TYPE_COLNAME       => array(CarePersonellTableMap::COL_NR, CarePersonellTableMap::COL_SHORT_ID, CarePersonellTableMap::COL_PID, CarePersonellTableMap::COL_JOB_TYPE_NR, CarePersonellTableMap::COL_JOB_FUNCTION_TITLE, CarePersonellTableMap::COL_DATE_JOIN, CarePersonellTableMap::COL_DATE_EXIT, CarePersonellTableMap::COL_CONTRACT_CLASS, CarePersonellTableMap::COL_CONTRACT_START, CarePersonellTableMap::COL_CONTRACT_END, CarePersonellTableMap::COL_IS_DISCHARGED, CarePersonellTableMap::COL_PAY_CLASS, CarePersonellTableMap::COL_PAY_CLASS_SUB, CarePersonellTableMap::COL_LOCAL_PREMIUM_ID, CarePersonellTableMap::COL_TAX_ACCOUNT_NR, CarePersonellTableMap::COL_IR_CODE, CarePersonellTableMap::COL_NR_WORKDAY, CarePersonellTableMap::COL_NR_WEEKHOUR, CarePersonellTableMap::COL_NR_VACATION_DAY, CarePersonellTableMap::COL_MULTIPLE_EMPLOYER, CarePersonellTableMap::COL_NR_DEPENDENT, CarePersonellTableMap::COL_STATUS, CarePersonellTableMap::COL_HISTORY, CarePersonellTableMap::COL_MODIFY_ID, CarePersonellTableMap::COL_MODIFY_TIME, CarePersonellTableMap::COL_CREATE_ID, CarePersonellTableMap::COL_CREATE_TIME, ),
        self::TYPE_FIELDNAME     => array('nr', 'short_id', 'pid', 'job_type_nr', 'job_function_title', 'date_join', 'date_exit', 'contract_class', 'contract_start', 'contract_end', 'is_discharged', 'pay_class', 'pay_class_sub', 'local_premium_id', 'tax_account_nr', 'ir_code', 'nr_workday', 'nr_weekhour', 'nr_vacation_day', 'multiple_employer', 'nr_dependent', 'status', 'history', 'modify_id', 'modify_time', 'create_id', 'create_time', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Nr' => 0, 'ShortId' => 1, 'Pid' => 2, 'JobTypeNr' => 3, 'JobFunctionTitle' => 4, 'DateJoin' => 5, 'DateExit' => 6, 'ContractClass' => 7, 'ContractStart' => 8, 'ContractEnd' => 9, 'IsDischarged' => 10, 'PayClass' => 11, 'PayClassSub' => 12, 'LocalPremiumId' => 13, 'TaxAccountNr' => 14, 'IrCode' => 15, 'NrWorkday' => 16, 'NrWeekhour' => 17, 'NrVacationDay' => 18, 'MultipleEmployer' => 19, 'NrDependent' => 20, 'Status' => 21, 'History' => 22, 'ModifyId' => 23, 'ModifyTime' => 24, 'CreateId' => 25, 'CreateTime' => 26, ),
        self::TYPE_CAMELNAME     => array('nr' => 0, 'shortId' => 1, 'pid' => 2, 'jobTypeNr' => 3, 'jobFunctionTitle' => 4, 'dateJoin' => 5, 'dateExit' => 6, 'contractClass' => 7, 'contractStart' => 8, 'contractEnd' => 9, 'isDischarged' => 10, 'payClass' => 11, 'payClassSub' => 12, 'localPremiumId' => 13, 'taxAccountNr' => 14, 'irCode' => 15, 'nrWorkday' => 16, 'nrWeekhour' => 17, 'nrVacationDay' => 18, 'multipleEmployer' => 19, 'nrDependent' => 20, 'status' => 21, 'history' => 22, 'modifyId' => 23, 'modifyTime' => 24, 'createId' => 25, 'createTime' => 26, ),
        self::TYPE_COLNAME       => array(CarePersonellTableMap::COL_NR => 0, CarePersonellTableMap::COL_SHORT_ID => 1, CarePersonellTableMap::COL_PID => 2, CarePersonellTableMap::COL_JOB_TYPE_NR => 3, CarePersonellTableMap::COL_JOB_FUNCTION_TITLE => 4, CarePersonellTableMap::COL_DATE_JOIN => 5, CarePersonellTableMap::COL_DATE_EXIT => 6, CarePersonellTableMap::COL_CONTRACT_CLASS => 7, CarePersonellTableMap::COL_CONTRACT_START => 8, CarePersonellTableMap::COL_CONTRACT_END => 9, CarePersonellTableMap::COL_IS_DISCHARGED => 10, CarePersonellTableMap::COL_PAY_CLASS => 11, CarePersonellTableMap::COL_PAY_CLASS_SUB => 12, CarePersonellTableMap::COL_LOCAL_PREMIUM_ID => 13, CarePersonellTableMap::COL_TAX_ACCOUNT_NR => 14, CarePersonellTableMap::COL_IR_CODE => 15, CarePersonellTableMap::COL_NR_WORKDAY => 16, CarePersonellTableMap::COL_NR_WEEKHOUR => 17, CarePersonellTableMap::COL_NR_VACATION_DAY => 18, CarePersonellTableMap::COL_MULTIPLE_EMPLOYER => 19, CarePersonellTableMap::COL_NR_DEPENDENT => 20, CarePersonellTableMap::COL_STATUS => 21, CarePersonellTableMap::COL_HISTORY => 22, CarePersonellTableMap::COL_MODIFY_ID => 23, CarePersonellTableMap::COL_MODIFY_TIME => 24, CarePersonellTableMap::COL_CREATE_ID => 25, CarePersonellTableMap::COL_CREATE_TIME => 26, ),
        self::TYPE_FIELDNAME     => array('nr' => 0, 'short_id' => 1, 'pid' => 2, 'job_type_nr' => 3, 'job_function_title' => 4, 'date_join' => 5, 'date_exit' => 6, 'contract_class' => 7, 'contract_start' => 8, 'contract_end' => 9, 'is_discharged' => 10, 'pay_class' => 11, 'pay_class_sub' => 12, 'local_premium_id' => 13, 'tax_account_nr' => 14, 'ir_code' => 15, 'nr_workday' => 16, 'nr_weekhour' => 17, 'nr_vacation_day' => 18, 'multiple_employer' => 19, 'nr_dependent' => 20, 'status' => 21, 'history' => 22, 'modify_id' => 23, 'modify_time' => 24, 'create_id' => 25, 'create_time' => 26, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
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
        $this->setName('care_personell');
        $this->setPhpName('CarePersonell');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CarePersonell');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('nr', 'Nr', 'INTEGER', true, null, null);
        $this->addColumn('short_id', 'ShortId', 'VARCHAR', false, 10, null);
        $this->addPrimaryKey('pid', 'Pid', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('job_type_nr', 'JobTypeNr', 'INTEGER', true, null, 0);
        $this->addColumn('job_function_title', 'JobFunctionTitle', 'VARCHAR', false, 60, null);
        $this->addColumn('date_join', 'DateJoin', 'DATE', false, null, null);
        $this->addColumn('date_exit', 'DateExit', 'DATE', false, null, null);
        $this->addColumn('contract_class', 'ContractClass', 'VARCHAR', true, 35, '0');
        $this->addColumn('contract_start', 'ContractStart', 'DATE', false, null, null);
        $this->addColumn('contract_end', 'ContractEnd', 'DATE', false, null, null);
        $this->addColumn('is_discharged', 'IsDischarged', 'BOOLEAN', true, 1, false);
        $this->addColumn('pay_class', 'PayClass', 'VARCHAR', true, 25, '');
        $this->addColumn('pay_class_sub', 'PayClassSub', 'VARCHAR', true, 25, '');
        $this->addColumn('local_premium_id', 'LocalPremiumId', 'VARCHAR', true, 5, '');
        $this->addColumn('tax_account_nr', 'TaxAccountNr', 'VARCHAR', true, 60, '');
        $this->addColumn('ir_code', 'IrCode', 'VARCHAR', true, 25, '');
        $this->addColumn('nr_workday', 'NrWorkday', 'BOOLEAN', true, 1, false);
        $this->addColumn('nr_weekhour', 'NrWeekhour', 'FLOAT', true, 10, 0);
        $this->addColumn('nr_vacation_day', 'NrVacationDay', 'TINYINT', true, 2, 0);
        $this->addColumn('multiple_employer', 'MultipleEmployer', 'BOOLEAN', true, 1, false);
        $this->addColumn('nr_dependent', 'NrDependent', 'TINYINT', true, 2, 0);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 25, '');
        $this->addColumn('history', 'History', 'LONGVARCHAR', true, null, null);
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
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \CareMd\CareMd\CarePersonell $obj A \CareMd\CareMd\CarePersonell object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getNr() || is_scalar($obj->getNr()) || is_callable([$obj->getNr(), '__toString']) ? (string) $obj->getNr() : $obj->getNr()), (null === $obj->getPid() || is_scalar($obj->getPid()) || is_callable([$obj->getPid(), '__toString']) ? (string) $obj->getPid() : $obj->getPid()), (null === $obj->getJobTypeNr() || is_scalar($obj->getJobTypeNr()) || is_callable([$obj->getJobTypeNr(), '__toString']) ? (string) $obj->getJobTypeNr() : $obj->getJobTypeNr())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \CareMd\CareMd\CarePersonell object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CareMd\CareMd\CarePersonell) {
                $key = serialize([(null === $value->getNr() || is_scalar($value->getNr()) || is_callable([$value->getNr(), '__toString']) ? (string) $value->getNr() : $value->getNr()), (null === $value->getPid() || is_scalar($value->getPid()) || is_callable([$value->getPid(), '__toString']) ? (string) $value->getPid() : $value->getPid()), (null === $value->getJobTypeNr() || is_scalar($value->getJobTypeNr()) || is_callable([$value->getJobTypeNr(), '__toString']) ? (string) $value->getJobTypeNr() : $value->getJobTypeNr())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CareMd\CareMd\CarePersonell object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('JobTypeNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 2 + $offset : static::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('JobTypeNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('JobTypeNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('JobTypeNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('JobTypeNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 3 + $offset : static::translateFieldName('JobTypeNr', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Nr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 2 + $offset
                : self::translateFieldName('Pid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 3 + $offset
                : self::translateFieldName('JobTypeNr', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
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
        return $withPrefix ? CarePersonellTableMap::CLASS_DEFAULT : CarePersonellTableMap::OM_CLASS;
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
     * @return array           (CarePersonell object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CarePersonellTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CarePersonellTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CarePersonellTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CarePersonellTableMap::OM_CLASS;
            /** @var CarePersonell $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CarePersonellTableMap::addInstanceToPool($obj, $key);
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
            $key = CarePersonellTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CarePersonellTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CarePersonell $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CarePersonellTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CarePersonellTableMap::COL_NR);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_SHORT_ID);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_PID);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_JOB_TYPE_NR);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_JOB_FUNCTION_TITLE);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_DATE_JOIN);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_DATE_EXIT);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_CONTRACT_CLASS);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_CONTRACT_START);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_CONTRACT_END);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_IS_DISCHARGED);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_PAY_CLASS);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_PAY_CLASS_SUB);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_LOCAL_PREMIUM_ID);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_TAX_ACCOUNT_NR);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_IR_CODE);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_NR_WORKDAY);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_NR_WEEKHOUR);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_NR_VACATION_DAY);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_MULTIPLE_EMPLOYER);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_NR_DEPENDENT);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_STATUS);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_HISTORY);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_MODIFY_ID);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_MODIFY_TIME);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_CREATE_ID);
            $criteria->addSelectColumn(CarePersonellTableMap::COL_CREATE_TIME);
        } else {
            $criteria->addSelectColumn($alias . '.nr');
            $criteria->addSelectColumn($alias . '.short_id');
            $criteria->addSelectColumn($alias . '.pid');
            $criteria->addSelectColumn($alias . '.job_type_nr');
            $criteria->addSelectColumn($alias . '.job_function_title');
            $criteria->addSelectColumn($alias . '.date_join');
            $criteria->addSelectColumn($alias . '.date_exit');
            $criteria->addSelectColumn($alias . '.contract_class');
            $criteria->addSelectColumn($alias . '.contract_start');
            $criteria->addSelectColumn($alias . '.contract_end');
            $criteria->addSelectColumn($alias . '.is_discharged');
            $criteria->addSelectColumn($alias . '.pay_class');
            $criteria->addSelectColumn($alias . '.pay_class_sub');
            $criteria->addSelectColumn($alias . '.local_premium_id');
            $criteria->addSelectColumn($alias . '.tax_account_nr');
            $criteria->addSelectColumn($alias . '.ir_code');
            $criteria->addSelectColumn($alias . '.nr_workday');
            $criteria->addSelectColumn($alias . '.nr_weekhour');
            $criteria->addSelectColumn($alias . '.nr_vacation_day');
            $criteria->addSelectColumn($alias . '.multiple_employer');
            $criteria->addSelectColumn($alias . '.nr_dependent');
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
        return Propel::getServiceContainer()->getDatabaseMap(CarePersonellTableMap::DATABASE_NAME)->getTable(CarePersonellTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CarePersonellTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CarePersonellTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CarePersonellTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CarePersonell or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CarePersonell object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonellTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CarePersonell) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CarePersonellTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CarePersonellTableMap::COL_NR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CarePersonellTableMap::COL_PID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CarePersonellTableMap::COL_JOB_TYPE_NR, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = CarePersonellQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CarePersonellTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CarePersonellTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_personell table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CarePersonellQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CarePersonell or Criteria object.
     *
     * @param mixed               $criteria Criteria or CarePersonell object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonellTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CarePersonell object
        }

        if ($criteria->containsKey(CarePersonellTableMap::COL_NR) && $criteria->keyContainsValue(CarePersonellTableMap::COL_NR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CarePersonellTableMap::COL_NR.')');
        }


        // Set the correct dbName
        $query = CarePersonellQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CarePersonellTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CarePersonellTableMap::buildTableMap();
