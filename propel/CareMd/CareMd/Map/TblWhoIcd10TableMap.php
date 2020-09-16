<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\TblWhoIcd10;
use CareMd\CareMd\TblWhoIcd10Query;
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
 * This class defines the structure of the 'tbl_who_icd10' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblWhoIcd10TableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.TblWhoIcd10TableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tbl_who_icd10';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\TblWhoIcd10';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.TblWhoIcd10';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 15;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 15;

    /**
     * the column name for the Ebene field
     */
    const COL_EBENE = 'tbl_who_icd10.Ebene';

    /**
     * the column name for the Ort field
     */
    const COL_ORT = 'tbl_who_icd10.Ort';

    /**
     * the column name for the Art field
     */
    const COL_ART = 'tbl_who_icd10.Art';

    /**
     * the column name for the Generiert field
     */
    const COL_GENERIERT = 'tbl_who_icd10.Generiert';

    /**
     * the column name for the KapNr field
     */
    const COL_KAPNR = 'tbl_who_icd10.KapNr';

    /**
     * the column name for the GrVon field
     */
    const COL_GRVON = 'tbl_who_icd10.GrVon';

    /**
     * the column name for the Code field
     */
    const COL_CODE = 'tbl_who_icd10.Code';

    /**
     * the column name for the NormCode field
     */
    const COL_NORMCODE = 'tbl_who_icd10.NormCode';

    /**
     * the column name for the CodeOhnePunkt field
     */
    const COL_CODEOHNEPUNKT = 'tbl_who_icd10.CodeOhnePunkt';

    /**
     * the column name for the Titel field
     */
    const COL_TITEL = 'tbl_who_icd10.Titel';

    /**
     * the column name for the MortL1 field
     */
    const COL_MORTL1 = 'tbl_who_icd10.MortL1';

    /**
     * the column name for the MortL2 field
     */
    const COL_MORTL2 = 'tbl_who_icd10.MortL2';

    /**
     * the column name for the MortL3 field
     */
    const COL_MORTL3 = 'tbl_who_icd10.MortL3';

    /**
     * the column name for the MortL4 field
     */
    const COL_MORTL4 = 'tbl_who_icd10.MortL4';

    /**
     * the column name for the MorbL field
     */
    const COL_MORBL = 'tbl_who_icd10.MorbL';

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
        self::TYPE_PHPNAME       => array('Ebene', 'Ort', 'Art', 'Generiert', 'Kapnr', 'Grvon', 'Code', 'Normcode', 'Codeohnepunkt', 'Titel', 'Mortl1', 'Mortl2', 'Mortl3', 'Mortl4', 'Morbl', ),
        self::TYPE_CAMELNAME     => array('ebene', 'ort', 'art', 'generiert', 'kapnr', 'grvon', 'code', 'normcode', 'codeohnepunkt', 'titel', 'mortl1', 'mortl2', 'mortl3', 'mortl4', 'morbl', ),
        self::TYPE_COLNAME       => array(TblWhoIcd10TableMap::COL_EBENE, TblWhoIcd10TableMap::COL_ORT, TblWhoIcd10TableMap::COL_ART, TblWhoIcd10TableMap::COL_GENERIERT, TblWhoIcd10TableMap::COL_KAPNR, TblWhoIcd10TableMap::COL_GRVON, TblWhoIcd10TableMap::COL_CODE, TblWhoIcd10TableMap::COL_NORMCODE, TblWhoIcd10TableMap::COL_CODEOHNEPUNKT, TblWhoIcd10TableMap::COL_TITEL, TblWhoIcd10TableMap::COL_MORTL1, TblWhoIcd10TableMap::COL_MORTL2, TblWhoIcd10TableMap::COL_MORTL3, TblWhoIcd10TableMap::COL_MORTL4, TblWhoIcd10TableMap::COL_MORBL, ),
        self::TYPE_FIELDNAME     => array('Ebene', 'Ort', 'Art', 'Generiert', 'KapNr', 'GrVon', 'Code', 'NormCode', 'CodeOhnePunkt', 'Titel', 'MortL1', 'MortL2', 'MortL3', 'MortL4', 'MorbL', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Ebene' => 0, 'Ort' => 1, 'Art' => 2, 'Generiert' => 3, 'Kapnr' => 4, 'Grvon' => 5, 'Code' => 6, 'Normcode' => 7, 'Codeohnepunkt' => 8, 'Titel' => 9, 'Mortl1' => 10, 'Mortl2' => 11, 'Mortl3' => 12, 'Mortl4' => 13, 'Morbl' => 14, ),
        self::TYPE_CAMELNAME     => array('ebene' => 0, 'ort' => 1, 'art' => 2, 'generiert' => 3, 'kapnr' => 4, 'grvon' => 5, 'code' => 6, 'normcode' => 7, 'codeohnepunkt' => 8, 'titel' => 9, 'mortl1' => 10, 'mortl2' => 11, 'mortl3' => 12, 'mortl4' => 13, 'morbl' => 14, ),
        self::TYPE_COLNAME       => array(TblWhoIcd10TableMap::COL_EBENE => 0, TblWhoIcd10TableMap::COL_ORT => 1, TblWhoIcd10TableMap::COL_ART => 2, TblWhoIcd10TableMap::COL_GENERIERT => 3, TblWhoIcd10TableMap::COL_KAPNR => 4, TblWhoIcd10TableMap::COL_GRVON => 5, TblWhoIcd10TableMap::COL_CODE => 6, TblWhoIcd10TableMap::COL_NORMCODE => 7, TblWhoIcd10TableMap::COL_CODEOHNEPUNKT => 8, TblWhoIcd10TableMap::COL_TITEL => 9, TblWhoIcd10TableMap::COL_MORTL1 => 10, TblWhoIcd10TableMap::COL_MORTL2 => 11, TblWhoIcd10TableMap::COL_MORTL3 => 12, TblWhoIcd10TableMap::COL_MORTL4 => 13, TblWhoIcd10TableMap::COL_MORBL => 14, ),
        self::TYPE_FIELDNAME     => array('Ebene' => 0, 'Ort' => 1, 'Art' => 2, 'Generiert' => 3, 'KapNr' => 4, 'GrVon' => 5, 'Code' => 6, 'NormCode' => 7, 'CodeOhnePunkt' => 8, 'Titel' => 9, 'MortL1' => 10, 'MortL2' => 11, 'MortL3' => 12, 'MortL4' => 13, 'MorbL' => 14, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $this->setName('tbl_who_icd10');
        $this->setPhpName('TblWhoIcd10');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\TblWhoIcd10');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('Ebene', 'Ebene', 'VARCHAR', true, 255, '');
        $this->addColumn('Ort', 'Ort', 'VARCHAR', true, 255, '');
        $this->addColumn('Art', 'Art', 'VARCHAR', true, 255, '');
        $this->addColumn('Generiert', 'Generiert', 'VARCHAR', true, 255, '');
        $this->addColumn('KapNr', 'Kapnr', 'VARCHAR', true, 255, '');
        $this->addColumn('GrVon', 'Grvon', 'VARCHAR', true, 255, '');
        $this->addColumn('Code', 'Code', 'VARCHAR', true, 255, '');
        $this->addColumn('NormCode', 'Normcode', 'VARCHAR', true, 255, '');
        $this->addColumn('CodeOhnePunkt', 'Codeohnepunkt', 'VARCHAR', true, 255, '');
        $this->addColumn('Titel', 'Titel', 'VARCHAR', true, 255, '');
        $this->addColumn('MortL1', 'Mortl1', 'VARCHAR', true, 255, '');
        $this->addColumn('MortL2', 'Mortl2', 'VARCHAR', true, 255, '');
        $this->addColumn('MortL3', 'Mortl3', 'VARCHAR', true, 255, '');
        $this->addColumn('MortL4', 'Mortl4', 'VARCHAR', true, 255, '');
        $this->addColumn('MorbL', 'Morbl', 'VARCHAR', true, 255, '');
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
        return $withPrefix ? TblWhoIcd10TableMap::CLASS_DEFAULT : TblWhoIcd10TableMap::OM_CLASS;
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
     * @return array           (TblWhoIcd10 object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblWhoIcd10TableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblWhoIcd10TableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblWhoIcd10TableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblWhoIcd10TableMap::OM_CLASS;
            /** @var TblWhoIcd10 $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblWhoIcd10TableMap::addInstanceToPool($obj, $key);
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
            $key = TblWhoIcd10TableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblWhoIcd10TableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TblWhoIcd10 $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblWhoIcd10TableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_EBENE);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_ORT);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_ART);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_GENERIERT);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_KAPNR);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_GRVON);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_CODE);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_NORMCODE);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_CODEOHNEPUNKT);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_TITEL);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_MORTL1);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_MORTL2);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_MORTL3);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_MORTL4);
            $criteria->addSelectColumn(TblWhoIcd10TableMap::COL_MORBL);
        } else {
            $criteria->addSelectColumn($alias . '.Ebene');
            $criteria->addSelectColumn($alias . '.Ort');
            $criteria->addSelectColumn($alias . '.Art');
            $criteria->addSelectColumn($alias . '.Generiert');
            $criteria->addSelectColumn($alias . '.KapNr');
            $criteria->addSelectColumn($alias . '.GrVon');
            $criteria->addSelectColumn($alias . '.Code');
            $criteria->addSelectColumn($alias . '.NormCode');
            $criteria->addSelectColumn($alias . '.CodeOhnePunkt');
            $criteria->addSelectColumn($alias . '.Titel');
            $criteria->addSelectColumn($alias . '.MortL1');
            $criteria->addSelectColumn($alias . '.MortL2');
            $criteria->addSelectColumn($alias . '.MortL3');
            $criteria->addSelectColumn($alias . '.MortL4');
            $criteria->addSelectColumn($alias . '.MorbL');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblWhoIcd10TableMap::DATABASE_NAME)->getTable(TblWhoIcd10TableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblWhoIcd10TableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblWhoIcd10TableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblWhoIcd10TableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TblWhoIcd10 or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TblWhoIcd10 object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblWhoIcd10TableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\TblWhoIcd10) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The TblWhoIcd10 object has no primary key');
        }

        $query = TblWhoIcd10Query::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblWhoIcd10TableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblWhoIcd10TableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tbl_who_icd10 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblWhoIcd10Query::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TblWhoIcd10 or Criteria object.
     *
     * @param mixed               $criteria Criteria or TblWhoIcd10 object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblWhoIcd10TableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TblWhoIcd10 object
        }


        // Set the correct dbName
        $query = TblWhoIcd10Query::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblWhoIcd10TableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblWhoIcd10TableMap::buildTableMap();
