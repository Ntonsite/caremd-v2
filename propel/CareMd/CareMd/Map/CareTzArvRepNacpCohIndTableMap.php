<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareTzArvRepNacpCohInd;
use CareMd\CareMd\CareTzArvRepNacpCohIndQuery;
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
 * This class defines the structure of the 'care_tz_arv_rep_nacp_coh_ind' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareTzArvRepNacpCohIndTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareTzArvRepNacpCohIndTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_tz_arv_rep_nacp_coh_ind';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareTzArvRepNacpCohInd';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareTzArvRepNacpCohInd';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the indicator_id field
     */
    const COL_INDICATOR_ID = 'care_tz_arv_rep_nacp_coh_ind.indicator_id';

    /**
     * the column name for the indicator_description field
     */
    const COL_INDICATOR_DESCRIPTION = 'care_tz_arv_rep_nacp_coh_ind.indicator_description';

    /**
     * the column name for the numerator_description field
     */
    const COL_NUMERATOR_DESCRIPTION = 'care_tz_arv_rep_nacp_coh_ind.numerator_description';

    /**
     * the column name for the denominator_description field
     */
    const COL_DENOMINATOR_DESCRIPTION = 'care_tz_arv_rep_nacp_coh_ind.denominator_description';

    /**
     * the column name for the numerator_formula field
     */
    const COL_NUMERATOR_FORMULA = 'care_tz_arv_rep_nacp_coh_ind.numerator_formula';

    /**
     * the column name for the denominator_formula field
     */
    const COL_DENOMINATOR_FORMULA = 'care_tz_arv_rep_nacp_coh_ind.denominator_formula';

    /**
     * the column name for the age_group field
     */
    const COL_AGE_GROUP = 'care_tz_arv_rep_nacp_coh_ind.age_group';

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
        self::TYPE_PHPNAME       => array('IndicatorId', 'IndicatorDescription', 'NumeratorDescription', 'DenominatorDescription', 'NumeratorFormula', 'DenominatorFormula', 'AgeGroup', ),
        self::TYPE_CAMELNAME     => array('indicatorId', 'indicatorDescription', 'numeratorDescription', 'denominatorDescription', 'numeratorFormula', 'denominatorFormula', 'ageGroup', ),
        self::TYPE_COLNAME       => array(CareTzArvRepNacpCohIndTableMap::COL_INDICATOR_ID, CareTzArvRepNacpCohIndTableMap::COL_INDICATOR_DESCRIPTION, CareTzArvRepNacpCohIndTableMap::COL_NUMERATOR_DESCRIPTION, CareTzArvRepNacpCohIndTableMap::COL_DENOMINATOR_DESCRIPTION, CareTzArvRepNacpCohIndTableMap::COL_NUMERATOR_FORMULA, CareTzArvRepNacpCohIndTableMap::COL_DENOMINATOR_FORMULA, CareTzArvRepNacpCohIndTableMap::COL_AGE_GROUP, ),
        self::TYPE_FIELDNAME     => array('indicator_id', 'indicator_description', 'numerator_description', 'denominator_description', 'numerator_formula', 'denominator_formula', 'age_group', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IndicatorId' => 0, 'IndicatorDescription' => 1, 'NumeratorDescription' => 2, 'DenominatorDescription' => 3, 'NumeratorFormula' => 4, 'DenominatorFormula' => 5, 'AgeGroup' => 6, ),
        self::TYPE_CAMELNAME     => array('indicatorId' => 0, 'indicatorDescription' => 1, 'numeratorDescription' => 2, 'denominatorDescription' => 3, 'numeratorFormula' => 4, 'denominatorFormula' => 5, 'ageGroup' => 6, ),
        self::TYPE_COLNAME       => array(CareTzArvRepNacpCohIndTableMap::COL_INDICATOR_ID => 0, CareTzArvRepNacpCohIndTableMap::COL_INDICATOR_DESCRIPTION => 1, CareTzArvRepNacpCohIndTableMap::COL_NUMERATOR_DESCRIPTION => 2, CareTzArvRepNacpCohIndTableMap::COL_DENOMINATOR_DESCRIPTION => 3, CareTzArvRepNacpCohIndTableMap::COL_NUMERATOR_FORMULA => 4, CareTzArvRepNacpCohIndTableMap::COL_DENOMINATOR_FORMULA => 5, CareTzArvRepNacpCohIndTableMap::COL_AGE_GROUP => 6, ),
        self::TYPE_FIELDNAME     => array('indicator_id' => 0, 'indicator_description' => 1, 'numerator_description' => 2, 'denominator_description' => 3, 'numerator_formula' => 4, 'denominator_formula' => 5, 'age_group' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
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
        $this->setName('care_tz_arv_rep_nacp_coh_ind');
        $this->setPhpName('CareTzArvRepNacpCohInd');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareTzArvRepNacpCohInd');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('indicator_id', 'IndicatorId', 'INTEGER', false, null, null);
        $this->addColumn('indicator_description', 'IndicatorDescription', 'VARCHAR', false, 510, null);
        $this->addColumn('numerator_description', 'NumeratorDescription', 'VARCHAR', false, 510, null);
        $this->addColumn('denominator_description', 'DenominatorDescription', 'VARCHAR', false, 510, null);
        $this->addColumn('numerator_formula', 'NumeratorFormula', 'VARCHAR', false, 100, null);
        $this->addColumn('denominator_formula', 'DenominatorFormula', 'VARCHAR', false, 100, null);
        $this->addColumn('age_group', 'AgeGroup', 'VARCHAR', false, 100, null);
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
        return $withPrefix ? CareTzArvRepNacpCohIndTableMap::CLASS_DEFAULT : CareTzArvRepNacpCohIndTableMap::OM_CLASS;
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
     * @return array           (CareTzArvRepNacpCohInd object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareTzArvRepNacpCohIndTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareTzArvRepNacpCohIndTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareTzArvRepNacpCohIndTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareTzArvRepNacpCohIndTableMap::OM_CLASS;
            /** @var CareTzArvRepNacpCohInd $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareTzArvRepNacpCohIndTableMap::addInstanceToPool($obj, $key);
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
            $key = CareTzArvRepNacpCohIndTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareTzArvRepNacpCohIndTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareTzArvRepNacpCohInd $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareTzArvRepNacpCohIndTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareTzArvRepNacpCohIndTableMap::COL_INDICATOR_ID);
            $criteria->addSelectColumn(CareTzArvRepNacpCohIndTableMap::COL_INDICATOR_DESCRIPTION);
            $criteria->addSelectColumn(CareTzArvRepNacpCohIndTableMap::COL_NUMERATOR_DESCRIPTION);
            $criteria->addSelectColumn(CareTzArvRepNacpCohIndTableMap::COL_DENOMINATOR_DESCRIPTION);
            $criteria->addSelectColumn(CareTzArvRepNacpCohIndTableMap::COL_NUMERATOR_FORMULA);
            $criteria->addSelectColumn(CareTzArvRepNacpCohIndTableMap::COL_DENOMINATOR_FORMULA);
            $criteria->addSelectColumn(CareTzArvRepNacpCohIndTableMap::COL_AGE_GROUP);
        } else {
            $criteria->addSelectColumn($alias . '.indicator_id');
            $criteria->addSelectColumn($alias . '.indicator_description');
            $criteria->addSelectColumn($alias . '.numerator_description');
            $criteria->addSelectColumn($alias . '.denominator_description');
            $criteria->addSelectColumn($alias . '.numerator_formula');
            $criteria->addSelectColumn($alias . '.denominator_formula');
            $criteria->addSelectColumn($alias . '.age_group');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareTzArvRepNacpCohIndTableMap::DATABASE_NAME)->getTable(CareTzArvRepNacpCohIndTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareTzArvRepNacpCohIndTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareTzArvRepNacpCohIndTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareTzArvRepNacpCohIndTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareTzArvRepNacpCohInd or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareTzArvRepNacpCohInd object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRepNacpCohIndTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareTzArvRepNacpCohInd) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The CareTzArvRepNacpCohInd object has no primary key');
        }

        $query = CareTzArvRepNacpCohIndQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareTzArvRepNacpCohIndTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareTzArvRepNacpCohIndTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_tz_arv_rep_nacp_coh_ind table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareTzArvRepNacpCohIndQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareTzArvRepNacpCohInd or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareTzArvRepNacpCohInd object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareTzArvRepNacpCohIndTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareTzArvRepNacpCohInd object
        }


        // Set the correct dbName
        $query = CareTzArvRepNacpCohIndQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareTzArvRepNacpCohIndTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareTzArvRepNacpCohIndTableMap::buildTableMap();
