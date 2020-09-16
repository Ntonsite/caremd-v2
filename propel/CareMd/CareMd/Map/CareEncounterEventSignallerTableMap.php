<?php

namespace CareMd\CareMd\Map;

use CareMd\CareMd\CareEncounterEventSignaller;
use CareMd\CareMd\CareEncounterEventSignallerQuery;
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
 * This class defines the structure of the 'care_encounter_event_signaller' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CareEncounterEventSignallerTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CareMd.CareMd.Map.CareEncounterEventSignallerTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'care_encounter_event_signaller';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CareMd\\CareMd\\CareEncounterEventSignaller';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CareMd.CareMd.CareEncounterEventSignaller';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 45;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 45;

    /**
     * the column name for the encounter_nr field
     */
    const COL_ENCOUNTER_NR = 'care_encounter_event_signaller.encounter_nr';

    /**
     * the column name for the yellow field
     */
    const COL_YELLOW = 'care_encounter_event_signaller.yellow';

    /**
     * the column name for the black field
     */
    const COL_BLACK = 'care_encounter_event_signaller.black';

    /**
     * the column name for the blue_pale field
     */
    const COL_BLUE_PALE = 'care_encounter_event_signaller.blue_pale';

    /**
     * the column name for the brown field
     */
    const COL_BROWN = 'care_encounter_event_signaller.brown';

    /**
     * the column name for the pink field
     */
    const COL_PINK = 'care_encounter_event_signaller.pink';

    /**
     * the column name for the yellow_pale field
     */
    const COL_YELLOW_PALE = 'care_encounter_event_signaller.yellow_pale';

    /**
     * the column name for the red field
     */
    const COL_RED = 'care_encounter_event_signaller.red';

    /**
     * the column name for the green_pale field
     */
    const COL_GREEN_PALE = 'care_encounter_event_signaller.green_pale';

    /**
     * the column name for the violet field
     */
    const COL_VIOLET = 'care_encounter_event_signaller.violet';

    /**
     * the column name for the blue field
     */
    const COL_BLUE = 'care_encounter_event_signaller.blue';

    /**
     * the column name for the biege field
     */
    const COL_BIEGE = 'care_encounter_event_signaller.biege';

    /**
     * the column name for the orange field
     */
    const COL_ORANGE = 'care_encounter_event_signaller.orange';

    /**
     * the column name for the green_1 field
     */
    const COL_GREEN_1 = 'care_encounter_event_signaller.green_1';

    /**
     * the column name for the green_2 field
     */
    const COL_GREEN_2 = 'care_encounter_event_signaller.green_2';

    /**
     * the column name for the green_3 field
     */
    const COL_GREEN_3 = 'care_encounter_event_signaller.green_3';

    /**
     * the column name for the green_4 field
     */
    const COL_GREEN_4 = 'care_encounter_event_signaller.green_4';

    /**
     * the column name for the green_5 field
     */
    const COL_GREEN_5 = 'care_encounter_event_signaller.green_5';

    /**
     * the column name for the green_6 field
     */
    const COL_GREEN_6 = 'care_encounter_event_signaller.green_6';

    /**
     * the column name for the green_7 field
     */
    const COL_GREEN_7 = 'care_encounter_event_signaller.green_7';

    /**
     * the column name for the rose_1 field
     */
    const COL_ROSE_1 = 'care_encounter_event_signaller.rose_1';

    /**
     * the column name for the rose_2 field
     */
    const COL_ROSE_2 = 'care_encounter_event_signaller.rose_2';

    /**
     * the column name for the rose_3 field
     */
    const COL_ROSE_3 = 'care_encounter_event_signaller.rose_3';

    /**
     * the column name for the rose_4 field
     */
    const COL_ROSE_4 = 'care_encounter_event_signaller.rose_4';

    /**
     * the column name for the rose_5 field
     */
    const COL_ROSE_5 = 'care_encounter_event_signaller.rose_5';

    /**
     * the column name for the rose_6 field
     */
    const COL_ROSE_6 = 'care_encounter_event_signaller.rose_6';

    /**
     * the column name for the rose_7 field
     */
    const COL_ROSE_7 = 'care_encounter_event_signaller.rose_7';

    /**
     * the column name for the rose_8 field
     */
    const COL_ROSE_8 = 'care_encounter_event_signaller.rose_8';

    /**
     * the column name for the rose_9 field
     */
    const COL_ROSE_9 = 'care_encounter_event_signaller.rose_9';

    /**
     * the column name for the rose_10 field
     */
    const COL_ROSE_10 = 'care_encounter_event_signaller.rose_10';

    /**
     * the column name for the rose_11 field
     */
    const COL_ROSE_11 = 'care_encounter_event_signaller.rose_11';

    /**
     * the column name for the rose_12 field
     */
    const COL_ROSE_12 = 'care_encounter_event_signaller.rose_12';

    /**
     * the column name for the rose_13 field
     */
    const COL_ROSE_13 = 'care_encounter_event_signaller.rose_13';

    /**
     * the column name for the rose_14 field
     */
    const COL_ROSE_14 = 'care_encounter_event_signaller.rose_14';

    /**
     * the column name for the rose_15 field
     */
    const COL_ROSE_15 = 'care_encounter_event_signaller.rose_15';

    /**
     * the column name for the rose_16 field
     */
    const COL_ROSE_16 = 'care_encounter_event_signaller.rose_16';

    /**
     * the column name for the rose_17 field
     */
    const COL_ROSE_17 = 'care_encounter_event_signaller.rose_17';

    /**
     * the column name for the rose_18 field
     */
    const COL_ROSE_18 = 'care_encounter_event_signaller.rose_18';

    /**
     * the column name for the rose_19 field
     */
    const COL_ROSE_19 = 'care_encounter_event_signaller.rose_19';

    /**
     * the column name for the rose_20 field
     */
    const COL_ROSE_20 = 'care_encounter_event_signaller.rose_20';

    /**
     * the column name for the rose_21 field
     */
    const COL_ROSE_21 = 'care_encounter_event_signaller.rose_21';

    /**
     * the column name for the rose_22 field
     */
    const COL_ROSE_22 = 'care_encounter_event_signaller.rose_22';

    /**
     * the column name for the rose_23 field
     */
    const COL_ROSE_23 = 'care_encounter_event_signaller.rose_23';

    /**
     * the column name for the rose_24 field
     */
    const COL_ROSE_24 = 'care_encounter_event_signaller.rose_24';

    /**
     * the column name for the maroon field
     */
    const COL_MAROON = 'care_encounter_event_signaller.maroon';

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
        self::TYPE_PHPNAME       => array('EncounterNr', 'Yellow', 'Black', 'BluePale', 'Brown', 'Pink', 'YellowPale', 'Red', 'GreenPale', 'Violet', 'Blue', 'Biege', 'Orange', 'Green1', 'Green2', 'Green3', 'Green4', 'Green5', 'Green6', 'Green7', 'Rose1', 'Rose2', 'Rose3', 'Rose4', 'Rose5', 'Rose6', 'Rose7', 'Rose8', 'Rose9', 'Rose10', 'Rose11', 'Rose12', 'Rose13', 'Rose14', 'Rose15', 'Rose16', 'Rose17', 'Rose18', 'Rose19', 'Rose20', 'Rose21', 'Rose22', 'Rose23', 'Rose24', 'Maroon', ),
        self::TYPE_CAMELNAME     => array('encounterNr', 'yellow', 'black', 'bluePale', 'brown', 'pink', 'yellowPale', 'red', 'greenPale', 'violet', 'blue', 'biege', 'orange', 'green1', 'green2', 'green3', 'green4', 'green5', 'green6', 'green7', 'rose1', 'rose2', 'rose3', 'rose4', 'rose5', 'rose6', 'rose7', 'rose8', 'rose9', 'rose10', 'rose11', 'rose12', 'rose13', 'rose14', 'rose15', 'rose16', 'rose17', 'rose18', 'rose19', 'rose20', 'rose21', 'rose22', 'rose23', 'rose24', 'maroon', ),
        self::TYPE_COLNAME       => array(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR, CareEncounterEventSignallerTableMap::COL_YELLOW, CareEncounterEventSignallerTableMap::COL_BLACK, CareEncounterEventSignallerTableMap::COL_BLUE_PALE, CareEncounterEventSignallerTableMap::COL_BROWN, CareEncounterEventSignallerTableMap::COL_PINK, CareEncounterEventSignallerTableMap::COL_YELLOW_PALE, CareEncounterEventSignallerTableMap::COL_RED, CareEncounterEventSignallerTableMap::COL_GREEN_PALE, CareEncounterEventSignallerTableMap::COL_VIOLET, CareEncounterEventSignallerTableMap::COL_BLUE, CareEncounterEventSignallerTableMap::COL_BIEGE, CareEncounterEventSignallerTableMap::COL_ORANGE, CareEncounterEventSignallerTableMap::COL_GREEN_1, CareEncounterEventSignallerTableMap::COL_GREEN_2, CareEncounterEventSignallerTableMap::COL_GREEN_3, CareEncounterEventSignallerTableMap::COL_GREEN_4, CareEncounterEventSignallerTableMap::COL_GREEN_5, CareEncounterEventSignallerTableMap::COL_GREEN_6, CareEncounterEventSignallerTableMap::COL_GREEN_7, CareEncounterEventSignallerTableMap::COL_ROSE_1, CareEncounterEventSignallerTableMap::COL_ROSE_2, CareEncounterEventSignallerTableMap::COL_ROSE_3, CareEncounterEventSignallerTableMap::COL_ROSE_4, CareEncounterEventSignallerTableMap::COL_ROSE_5, CareEncounterEventSignallerTableMap::COL_ROSE_6, CareEncounterEventSignallerTableMap::COL_ROSE_7, CareEncounterEventSignallerTableMap::COL_ROSE_8, CareEncounterEventSignallerTableMap::COL_ROSE_9, CareEncounterEventSignallerTableMap::COL_ROSE_10, CareEncounterEventSignallerTableMap::COL_ROSE_11, CareEncounterEventSignallerTableMap::COL_ROSE_12, CareEncounterEventSignallerTableMap::COL_ROSE_13, CareEncounterEventSignallerTableMap::COL_ROSE_14, CareEncounterEventSignallerTableMap::COL_ROSE_15, CareEncounterEventSignallerTableMap::COL_ROSE_16, CareEncounterEventSignallerTableMap::COL_ROSE_17, CareEncounterEventSignallerTableMap::COL_ROSE_18, CareEncounterEventSignallerTableMap::COL_ROSE_19, CareEncounterEventSignallerTableMap::COL_ROSE_20, CareEncounterEventSignallerTableMap::COL_ROSE_21, CareEncounterEventSignallerTableMap::COL_ROSE_22, CareEncounterEventSignallerTableMap::COL_ROSE_23, CareEncounterEventSignallerTableMap::COL_ROSE_24, CareEncounterEventSignallerTableMap::COL_MAROON, ),
        self::TYPE_FIELDNAME     => array('encounter_nr', 'yellow', 'black', 'blue_pale', 'brown', 'pink', 'yellow_pale', 'red', 'green_pale', 'violet', 'blue', 'biege', 'orange', 'green_1', 'green_2', 'green_3', 'green_4', 'green_5', 'green_6', 'green_7', 'rose_1', 'rose_2', 'rose_3', 'rose_4', 'rose_5', 'rose_6', 'rose_7', 'rose_8', 'rose_9', 'rose_10', 'rose_11', 'rose_12', 'rose_13', 'rose_14', 'rose_15', 'rose_16', 'rose_17', 'rose_18', 'rose_19', 'rose_20', 'rose_21', 'rose_22', 'rose_23', 'rose_24', 'maroon', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('EncounterNr' => 0, 'Yellow' => 1, 'Black' => 2, 'BluePale' => 3, 'Brown' => 4, 'Pink' => 5, 'YellowPale' => 6, 'Red' => 7, 'GreenPale' => 8, 'Violet' => 9, 'Blue' => 10, 'Biege' => 11, 'Orange' => 12, 'Green1' => 13, 'Green2' => 14, 'Green3' => 15, 'Green4' => 16, 'Green5' => 17, 'Green6' => 18, 'Green7' => 19, 'Rose1' => 20, 'Rose2' => 21, 'Rose3' => 22, 'Rose4' => 23, 'Rose5' => 24, 'Rose6' => 25, 'Rose7' => 26, 'Rose8' => 27, 'Rose9' => 28, 'Rose10' => 29, 'Rose11' => 30, 'Rose12' => 31, 'Rose13' => 32, 'Rose14' => 33, 'Rose15' => 34, 'Rose16' => 35, 'Rose17' => 36, 'Rose18' => 37, 'Rose19' => 38, 'Rose20' => 39, 'Rose21' => 40, 'Rose22' => 41, 'Rose23' => 42, 'Rose24' => 43, 'Maroon' => 44, ),
        self::TYPE_CAMELNAME     => array('encounterNr' => 0, 'yellow' => 1, 'black' => 2, 'bluePale' => 3, 'brown' => 4, 'pink' => 5, 'yellowPale' => 6, 'red' => 7, 'greenPale' => 8, 'violet' => 9, 'blue' => 10, 'biege' => 11, 'orange' => 12, 'green1' => 13, 'green2' => 14, 'green3' => 15, 'green4' => 16, 'green5' => 17, 'green6' => 18, 'green7' => 19, 'rose1' => 20, 'rose2' => 21, 'rose3' => 22, 'rose4' => 23, 'rose5' => 24, 'rose6' => 25, 'rose7' => 26, 'rose8' => 27, 'rose9' => 28, 'rose10' => 29, 'rose11' => 30, 'rose12' => 31, 'rose13' => 32, 'rose14' => 33, 'rose15' => 34, 'rose16' => 35, 'rose17' => 36, 'rose18' => 37, 'rose19' => 38, 'rose20' => 39, 'rose21' => 40, 'rose22' => 41, 'rose23' => 42, 'rose24' => 43, 'maroon' => 44, ),
        self::TYPE_COLNAME       => array(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR => 0, CareEncounterEventSignallerTableMap::COL_YELLOW => 1, CareEncounterEventSignallerTableMap::COL_BLACK => 2, CareEncounterEventSignallerTableMap::COL_BLUE_PALE => 3, CareEncounterEventSignallerTableMap::COL_BROWN => 4, CareEncounterEventSignallerTableMap::COL_PINK => 5, CareEncounterEventSignallerTableMap::COL_YELLOW_PALE => 6, CareEncounterEventSignallerTableMap::COL_RED => 7, CareEncounterEventSignallerTableMap::COL_GREEN_PALE => 8, CareEncounterEventSignallerTableMap::COL_VIOLET => 9, CareEncounterEventSignallerTableMap::COL_BLUE => 10, CareEncounterEventSignallerTableMap::COL_BIEGE => 11, CareEncounterEventSignallerTableMap::COL_ORANGE => 12, CareEncounterEventSignallerTableMap::COL_GREEN_1 => 13, CareEncounterEventSignallerTableMap::COL_GREEN_2 => 14, CareEncounterEventSignallerTableMap::COL_GREEN_3 => 15, CareEncounterEventSignallerTableMap::COL_GREEN_4 => 16, CareEncounterEventSignallerTableMap::COL_GREEN_5 => 17, CareEncounterEventSignallerTableMap::COL_GREEN_6 => 18, CareEncounterEventSignallerTableMap::COL_GREEN_7 => 19, CareEncounterEventSignallerTableMap::COL_ROSE_1 => 20, CareEncounterEventSignallerTableMap::COL_ROSE_2 => 21, CareEncounterEventSignallerTableMap::COL_ROSE_3 => 22, CareEncounterEventSignallerTableMap::COL_ROSE_4 => 23, CareEncounterEventSignallerTableMap::COL_ROSE_5 => 24, CareEncounterEventSignallerTableMap::COL_ROSE_6 => 25, CareEncounterEventSignallerTableMap::COL_ROSE_7 => 26, CareEncounterEventSignallerTableMap::COL_ROSE_8 => 27, CareEncounterEventSignallerTableMap::COL_ROSE_9 => 28, CareEncounterEventSignallerTableMap::COL_ROSE_10 => 29, CareEncounterEventSignallerTableMap::COL_ROSE_11 => 30, CareEncounterEventSignallerTableMap::COL_ROSE_12 => 31, CareEncounterEventSignallerTableMap::COL_ROSE_13 => 32, CareEncounterEventSignallerTableMap::COL_ROSE_14 => 33, CareEncounterEventSignallerTableMap::COL_ROSE_15 => 34, CareEncounterEventSignallerTableMap::COL_ROSE_16 => 35, CareEncounterEventSignallerTableMap::COL_ROSE_17 => 36, CareEncounterEventSignallerTableMap::COL_ROSE_18 => 37, CareEncounterEventSignallerTableMap::COL_ROSE_19 => 38, CareEncounterEventSignallerTableMap::COL_ROSE_20 => 39, CareEncounterEventSignallerTableMap::COL_ROSE_21 => 40, CareEncounterEventSignallerTableMap::COL_ROSE_22 => 41, CareEncounterEventSignallerTableMap::COL_ROSE_23 => 42, CareEncounterEventSignallerTableMap::COL_ROSE_24 => 43, CareEncounterEventSignallerTableMap::COL_MAROON => 44, ),
        self::TYPE_FIELDNAME     => array('encounter_nr' => 0, 'yellow' => 1, 'black' => 2, 'blue_pale' => 3, 'brown' => 4, 'pink' => 5, 'yellow_pale' => 6, 'red' => 7, 'green_pale' => 8, 'violet' => 9, 'blue' => 10, 'biege' => 11, 'orange' => 12, 'green_1' => 13, 'green_2' => 14, 'green_3' => 15, 'green_4' => 16, 'green_5' => 17, 'green_6' => 18, 'green_7' => 19, 'rose_1' => 20, 'rose_2' => 21, 'rose_3' => 22, 'rose_4' => 23, 'rose_5' => 24, 'rose_6' => 25, 'rose_7' => 26, 'rose_8' => 27, 'rose_9' => 28, 'rose_10' => 29, 'rose_11' => 30, 'rose_12' => 31, 'rose_13' => 32, 'rose_14' => 33, 'rose_15' => 34, 'rose_16' => 35, 'rose_17' => 36, 'rose_18' => 37, 'rose_19' => 38, 'rose_20' => 39, 'rose_21' => 40, 'rose_22' => 41, 'rose_23' => 42, 'rose_24' => 43, 'maroon' => 44, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, )
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
        $this->setName('care_encounter_event_signaller');
        $this->setPhpName('CareEncounterEventSignaller');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\CareMd\\CareMd\\CareEncounterEventSignaller');
        $this->setPackage('CareMd.CareMd');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('encounter_nr', 'EncounterNr', 'INTEGER', true, 10, 0);
        $this->addColumn('yellow', 'Yellow', 'BOOLEAN', true, 1, false);
        $this->addColumn('black', 'Black', 'BOOLEAN', true, 1, false);
        $this->addColumn('blue_pale', 'BluePale', 'BOOLEAN', true, 1, false);
        $this->addColumn('brown', 'Brown', 'BOOLEAN', true, 1, false);
        $this->addColumn('pink', 'Pink', 'BOOLEAN', true, 1, false);
        $this->addColumn('yellow_pale', 'YellowPale', 'BOOLEAN', true, 1, false);
        $this->addColumn('red', 'Red', 'BOOLEAN', true, 1, false);
        $this->addColumn('green_pale', 'GreenPale', 'BOOLEAN', true, 1, false);
        $this->addColumn('violet', 'Violet', 'BOOLEAN', true, 1, false);
        $this->addColumn('blue', 'Blue', 'BOOLEAN', true, 1, false);
        $this->addColumn('biege', 'Biege', 'BOOLEAN', true, 1, false);
        $this->addColumn('orange', 'Orange', 'BOOLEAN', true, 1, false);
        $this->addColumn('green_1', 'Green1', 'BOOLEAN', true, 1, false);
        $this->addColumn('green_2', 'Green2', 'BOOLEAN', true, 1, false);
        $this->addColumn('green_3', 'Green3', 'BOOLEAN', true, 1, false);
        $this->addColumn('green_4', 'Green4', 'BOOLEAN', true, 1, false);
        $this->addColumn('green_5', 'Green5', 'BOOLEAN', true, 1, false);
        $this->addColumn('green_6', 'Green6', 'BOOLEAN', true, 1, false);
        $this->addColumn('green_7', 'Green7', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_1', 'Rose1', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_2', 'Rose2', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_3', 'Rose3', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_4', 'Rose4', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_5', 'Rose5', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_6', 'Rose6', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_7', 'Rose7', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_8', 'Rose8', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_9', 'Rose9', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_10', 'Rose10', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_11', 'Rose11', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_12', 'Rose12', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_13', 'Rose13', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_14', 'Rose14', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_15', 'Rose15', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_16', 'Rose16', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_17', 'Rose17', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_18', 'Rose18', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_19', 'Rose19', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_20', 'Rose20', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_21', 'Rose21', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_22', 'Rose22', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_23', 'Rose23', 'BOOLEAN', true, 1, false);
        $this->addColumn('rose_24', 'Rose24', 'BOOLEAN', true, 1, false);
        $this->addColumn('maroon', 'Maroon', 'BOOLEAN', true, 1, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('EncounterNr', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CareEncounterEventSignallerTableMap::CLASS_DEFAULT : CareEncounterEventSignallerTableMap::OM_CLASS;
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
     * @return array           (CareEncounterEventSignaller object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CareEncounterEventSignallerTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CareEncounterEventSignallerTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CareEncounterEventSignallerTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CareEncounterEventSignallerTableMap::OM_CLASS;
            /** @var CareEncounterEventSignaller $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CareEncounterEventSignallerTableMap::addInstanceToPool($obj, $key);
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
            $key = CareEncounterEventSignallerTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CareEncounterEventSignallerTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var CareEncounterEventSignaller $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CareEncounterEventSignallerTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_YELLOW);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_BLACK);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_BLUE_PALE);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_BROWN);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_PINK);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_YELLOW_PALE);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_RED);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_GREEN_PALE);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_VIOLET);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_BLUE);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_BIEGE);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ORANGE);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_GREEN_1);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_GREEN_2);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_GREEN_3);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_GREEN_4);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_GREEN_5);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_GREEN_6);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_GREEN_7);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_1);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_2);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_3);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_4);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_5);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_6);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_7);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_8);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_9);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_10);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_11);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_12);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_13);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_14);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_15);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_16);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_17);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_18);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_19);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_20);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_21);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_22);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_23);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_ROSE_24);
            $criteria->addSelectColumn(CareEncounterEventSignallerTableMap::COL_MAROON);
        } else {
            $criteria->addSelectColumn($alias . '.encounter_nr');
            $criteria->addSelectColumn($alias . '.yellow');
            $criteria->addSelectColumn($alias . '.black');
            $criteria->addSelectColumn($alias . '.blue_pale');
            $criteria->addSelectColumn($alias . '.brown');
            $criteria->addSelectColumn($alias . '.pink');
            $criteria->addSelectColumn($alias . '.yellow_pale');
            $criteria->addSelectColumn($alias . '.red');
            $criteria->addSelectColumn($alias . '.green_pale');
            $criteria->addSelectColumn($alias . '.violet');
            $criteria->addSelectColumn($alias . '.blue');
            $criteria->addSelectColumn($alias . '.biege');
            $criteria->addSelectColumn($alias . '.orange');
            $criteria->addSelectColumn($alias . '.green_1');
            $criteria->addSelectColumn($alias . '.green_2');
            $criteria->addSelectColumn($alias . '.green_3');
            $criteria->addSelectColumn($alias . '.green_4');
            $criteria->addSelectColumn($alias . '.green_5');
            $criteria->addSelectColumn($alias . '.green_6');
            $criteria->addSelectColumn($alias . '.green_7');
            $criteria->addSelectColumn($alias . '.rose_1');
            $criteria->addSelectColumn($alias . '.rose_2');
            $criteria->addSelectColumn($alias . '.rose_3');
            $criteria->addSelectColumn($alias . '.rose_4');
            $criteria->addSelectColumn($alias . '.rose_5');
            $criteria->addSelectColumn($alias . '.rose_6');
            $criteria->addSelectColumn($alias . '.rose_7');
            $criteria->addSelectColumn($alias . '.rose_8');
            $criteria->addSelectColumn($alias . '.rose_9');
            $criteria->addSelectColumn($alias . '.rose_10');
            $criteria->addSelectColumn($alias . '.rose_11');
            $criteria->addSelectColumn($alias . '.rose_12');
            $criteria->addSelectColumn($alias . '.rose_13');
            $criteria->addSelectColumn($alias . '.rose_14');
            $criteria->addSelectColumn($alias . '.rose_15');
            $criteria->addSelectColumn($alias . '.rose_16');
            $criteria->addSelectColumn($alias . '.rose_17');
            $criteria->addSelectColumn($alias . '.rose_18');
            $criteria->addSelectColumn($alias . '.rose_19');
            $criteria->addSelectColumn($alias . '.rose_20');
            $criteria->addSelectColumn($alias . '.rose_21');
            $criteria->addSelectColumn($alias . '.rose_22');
            $criteria->addSelectColumn($alias . '.rose_23');
            $criteria->addSelectColumn($alias . '.rose_24');
            $criteria->addSelectColumn($alias . '.maroon');
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
        return Propel::getServiceContainer()->getDatabaseMap(CareEncounterEventSignallerTableMap::DATABASE_NAME)->getTable(CareEncounterEventSignallerTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CareEncounterEventSignallerTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CareEncounterEventSignallerTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CareEncounterEventSignallerTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a CareEncounterEventSignaller or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CareEncounterEventSignaller object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterEventSignallerTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CareMd\CareMd\CareEncounterEventSignaller) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CareEncounterEventSignallerTableMap::DATABASE_NAME);
            $criteria->add(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR, (array) $values, Criteria::IN);
        }

        $query = CareEncounterEventSignallerQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CareEncounterEventSignallerTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CareEncounterEventSignallerTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the care_encounter_event_signaller table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CareEncounterEventSignallerQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CareEncounterEventSignaller or Criteria object.
     *
     * @param mixed               $criteria Criteria or CareEncounterEventSignaller object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterEventSignallerTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CareEncounterEventSignaller object
        }


        // Set the correct dbName
        $query = CareEncounterEventSignallerQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CareEncounterEventSignallerTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CareEncounterEventSignallerTableMap::buildTableMap();
