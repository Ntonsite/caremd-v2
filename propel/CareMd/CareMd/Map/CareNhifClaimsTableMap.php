<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareNhifClaims;
use CareMd\CareMd\CareNhifClaimsQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'care_nhif_claims' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareNhifClaimsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareNhifClaimsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_nhif_claims';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareNhifClaims';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareNhifClaims';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 14;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 14;

    /**
     * the column name for the FolioID field
     */
    const COL_FOLIOID = 'care_nhif_claims.FolioID';

    /**
     * the column name for the ClaimYear field
     */
    const COL_CLAIMYEAR = 'care_nhif_claims.ClaimYear';

    /**
     * the column name for the ClaimMonth field
     */
    const COL_CLAIMMONTH = 'care_nhif_claims.ClaimMonth';

    /**
     * the column name for the FolioNo field
     */
    const COL_FOLIONO = 'care_nhif_claims.FolioNo';

    /**
     * the column name for the SerialNo field
     */
    const COL_SERIALNO = 'care_nhif_claims.SerialNo';

    /**
     * the column name for the CardNo field
     */
    const COL_CARDNO = 'care_nhif_claims.CardNo';

    /**
     * the column name for the Age field
     */
    const COL_AGE = 'care_nhif_claims.Age';

    /**
     * the column name for the TelephoneNo field
     */
    const COL_TELEPHONENO = 'care_nhif_claims.TelephoneNo';

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_nhif_claims.encounter_nr';

    /**
     * the column name for the claim_status field
     */
    const COL_CLAIM_STATUS = 'care_nhif_claims.claim_status';

    /**
     * the column name for the CreatedBy field
     */
    const COL_CREATEDBY = 'care_nhif_claims.CreatedBy';

    /**
     * the column name for the DateCreated field
     */
    const COL_DATECREATED = 'care_nhif_claims.DateCreated';

    /**
     * the column name for the LastModifiedBy field
     */
    const COL_LASTMODIFIEDBY = 'care_nhif_claims.LastModifiedBy';

    /**
     * the column name for the LastModified field
     */
    const COL_LASTMODIFIED = 'care_nhif_claims.LastModified';

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
        self::TYPE_PHPNAME       => array('Folioid', 'Claimyear', 'Claimmonth', 'Foliono', 'Serialno', 'Cardno', 'Age', 'Telephoneno', 'EncounterNr', 'ClaimStatus', 'Createdby', 'Datecreated', 'Lastmodifiedby', 'Lastmodified', ),
        self::TYPE_CAMELNAME     => array('folioid', 'claimyear', 'claimmonth', 'foliono', 'serialno', 'cardno', 'age', 'telephoneno', 'encounterNr', 'claimStatus', 'createdby', 'datecreated', 'lastmodifiedby', 'lastmodified', ),
        self::TYPE_COLNAME       => array(CareNhifClaimsTableMap::COL_FOLIOID, CareNhifClaimsTableMap::COL_CLAIMYEAR, CareNhifClaimsTableMap::COL_CLAIMMONTH, CareNhifClaimsTableMap::COL_FOLIONO, CareNhifClaimsTableMap::COL_SERIALNO, CareNhifClaimsTableMap::COL_CARDNO, CareNhifClaimsTableMap::COL_AGE, CareNhifClaimsTableMap::COL_TELEPHONENO, CareNhifClaimsTableMap::COL_ENCOUNTER_NR, CareNhifClaimsTableMap::COL_CLAIM_STATUS, CareNhifClaimsTableMap::COL_CREATEDBY, CareNhifClaimsTableMap::COL_DATECREATED, CareNhifClaimsTableMap::COL_LASTMODIFIEDBY, CareNhifClaimsTableMap::COL_LASTMODIFIED, ),
        self::TYPE_FIELDNAME     => array('FolioID', 'ClaimYear', 'ClaimMonth', 'FolioNo', 'SerialNo', 'CardNo', 'Age', 'TelephoneNo', 'encounter_nr', 'claim_status', 'CreatedBy', 'DateCreated', 'LastModifiedBy', 'LastModified', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Folioid' => 0, 'Claimyear' => 1, 'Claimmonth' => 2, 'Foliono' => 3, 'Serialno' => 4, 'Cardno' => 5, 'Age' => 6, 'Telephoneno' => 7, 'EncounterNr' => 8, 'ClaimStatus' => 9, 'Createdby' => 10, 'Datecreated' => 11, 'Lastmodifiedby' => 12, 'Lastmodified' => 13, ),
        self::TYPE_CAMELNAME     => array('folioid' => 0, 'claimyear' => 1, 'claimmonth' => 2, 'foliono' => 3, 'serialno' => 4, 'cardno' => 5, 'age' => 6, 'telephoneno' => 7, 'encounterNr' => 8, 'claimStatus' => 9, 'createdby' => 10, 'datecreated' => 11, 'lastmodifiedby' => 12, 'lastmodified' => 13, ),
        self::TYPE_COLNAME       => array(CareNhifClaimsTableMap::COL_FOLIOID => 0, CareNhifClaimsTableMap::COL_CLAIMYEAR => 1, CareNhifClaimsTableMap::COL_CLAIMMONTH => 2, CareNhifClaimsTableMap::COL_FOLIONO => 3, CareNhifClaimsTableMap::COL_SERIALNO => 4, CareNhifClaimsTableMap::COL_CARDNO => 5, CareNhifClaimsTableMap::COL_AGE => 6, CareNhifClaimsTableMap::COL_TELEPHONENO => 7, CareNhifClaimsTableMap::COL_ENCOUNTER_NR => 8, CareNhifClaimsTableMap::COL_CLAIM_STATUS => 9, CareNhifClaimsTableMap::COL_CREATEDBY => 10, CareNhifClaimsTableMap::COL_DATECREATED => 11, CareNhifClaimsTableMap::COL_LASTMODIFIEDBY => 12, CareNhifClaimsTableMap::COL_LASTMODIFIED => 13, ),
        self::TYPE_FIELDNAME     => array('FolioID' => 0, 'ClaimYear' => 1, 'ClaimMonth' => 2, 'FolioNo' => 3, 'SerialNo' => 4, 'CardNo' => 5, 'Age' => 6, 'TelephoneNo' => 7, 'encounter_nr' => 8, 'claim_status' => 9, 'CreatedBy' => 10, 'DateCreated' => 11, 'LastModifiedBy' => 12, 'LastModified' => 13, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $this->setName('care_nhif_claims');
        $this->setPhpName('CareNhifClaims');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareNhifClaims');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('FolioID', 'Folioid', 'VARCHAR', false, 200, null);
        $this->addColumn('ClaimYear', 'Claimyear', 'INTEGER', false, 4, null);
        $this->addColumn('ClaimMonth', 'Claimmonth', 'INTEGER', false, 2, null);
        $this->addColumn('FolioNo', 'Foliono', 'INTEGER', false, 50, null);
        $this->addColumn('SerialNo', 'Serialno', 'VARCHAR', false, 50, null);
        $this->addColumn('CardNo', 'Cardno', 'VARCHAR', false, 50, null);
        $this->addColumn('Age', 'Age', 'INTEGER', false, 3, null);
        $this->addColumn('TelephoneNo', 'Telephoneno', 'VARCHAR', false, 50, null);
        $this->addColumn('encounter_nr', 'EncounterNr', 'BIGINT', false, 11, null);
        $this->addColumn('claim_status', 'ClaimStatus', 'VARCHAR', false, 50, null);
        $this->addColumn('CreatedBy', 'Createdby', 'VARCHAR', true, 50, null);
        $this->addColumn('DateCreated', 'Datecreated', 'TIMESTAMP', true, null, null);
        $this->addColumn('LastModifiedBy', 'Lastmodifiedby', 'VARCHAR', false, 50, null);
        $this->addColumn('LastModified', 'Lastmodified', 'VARCHAR', false, 50, null);
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
        return null;
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
        return '';
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
        return $withPrefix ? CareNhifClaimsTableMap::CLASS_DEFAULT : CareNhifClaimsTableMap::OM_CLASS;
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
     * @return array           (CareNhifClaims object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareNhifClaimsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareNhifClaimsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareNhifClaimsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareNhifClaimsTableMap::OM_CLASS;
            /** @var CareNhifClaims $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareNhifClaimsTableMap::addInstanceToPool($obj, $key);
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
            $key = CareNhifClaimsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareNhifClaimsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareNhifClaims $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareNhifClaimsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_FOLIOID);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_CLAIMYEAR);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_CLAIMMONTH);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_FOLIONO);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_SERIALNO);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_CARDNO);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_AGE);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_TELEPHONENO);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_CLAIM_STATUS);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_CREATEDBY);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_DATECREATED);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_LASTMODIFIEDBY);
            $criteria->addSelectColumn(CareNhifClaimsTableMap::COL_LASTMODIFIED);
        } else {
            $criteria->addSelectColumn($alias . '.FolioID');
            $criteria->addSelectColumn($alias . '.ClaimYear');
            $criteria->addSelectColumn($alias . '.ClaimMonth');
            $criteria->addSelectColumn($alias . '.FolioNo');
            $criteria->addSelectColumn($alias . '.SerialNo');
            $criteria->addSelectColumn($alias . '.CardNo');
            $criteria->addSelectColumn($alias . '.Age');
            $criteria->addSelectColumn($alias . '.TelephoneNo');
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.claim_status');
            $criteria->addSelectColumn($alias . '.CreatedBy');
            $criteria->addSelectColumn($alias . '.DateCreated');
            $criteria->addSelectColumn($alias . '.LastModifiedBy');
            $criteria->addSelectColumn($alias . '.LastModified');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareNhifClaimsTableMap::DATABASE_NAME)->getTable(CareNhifClaimsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareNhifClaimsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareNhifClaimsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareNhifClaimsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareNhifClaims or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareNhifClaims object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareNhifClaimsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareNhifClaims) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The CareNhifClaims object has no primary key');
        }

        $query = CareNhifClaimsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareNhifClaimsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareNhifClaimsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_nhif_claims table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareNhifClaimsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareNhifClaims or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareNhifClaims object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareNhifClaimsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareNhifClaims object
        }


        // Set the correct dbName
        $query = CareNhifClaimsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareNhifClaimsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareNhifClaimsTableMap::buildTableMap();
