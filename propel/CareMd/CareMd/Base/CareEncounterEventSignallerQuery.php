<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CareEncounterEventSignaller as ChildCareEncounterEventSignaller;
use CareMd\CareMd\CareEncounterEventSignallerQuery as ChildCareEncounterEventSignallerQuery;
use CareMd\CareMd\Map\CareEncounterEventSignallerTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_encounter_event_signaller' table.
 *
 *
 *
 * @method     ChildCareEncounterEventSignallerQuery orderByEncounterNr($order = Criteria::ASC) Order by the encounter_nr column
 * @method     ChildCareEncounterEventSignallerQuery orderByYellow($order = Criteria::ASC) Order by the yellow column
 * @method     ChildCareEncounterEventSignallerQuery orderByBlack($order = Criteria::ASC) Order by the black column
 * @method     ChildCareEncounterEventSignallerQuery orderByBluePale($order = Criteria::ASC) Order by the blue_pale column
 * @method     ChildCareEncounterEventSignallerQuery orderByBrown($order = Criteria::ASC) Order by the brown column
 * @method     ChildCareEncounterEventSignallerQuery orderByPink($order = Criteria::ASC) Order by the pink column
 * @method     ChildCareEncounterEventSignallerQuery orderByYellowPale($order = Criteria::ASC) Order by the yellow_pale column
 * @method     ChildCareEncounterEventSignallerQuery orderByRed($order = Criteria::ASC) Order by the red column
 * @method     ChildCareEncounterEventSignallerQuery orderByGreenPale($order = Criteria::ASC) Order by the green_pale column
 * @method     ChildCareEncounterEventSignallerQuery orderByViolet($order = Criteria::ASC) Order by the violet column
 * @method     ChildCareEncounterEventSignallerQuery orderByBlue($order = Criteria::ASC) Order by the blue column
 * @method     ChildCareEncounterEventSignallerQuery orderByBiege($order = Criteria::ASC) Order by the biege column
 * @method     ChildCareEncounterEventSignallerQuery orderByOrange($order = Criteria::ASC) Order by the orange column
 * @method     ChildCareEncounterEventSignallerQuery orderByGreen1($order = Criteria::ASC) Order by the green_1 column
 * @method     ChildCareEncounterEventSignallerQuery orderByGreen2($order = Criteria::ASC) Order by the green_2 column
 * @method     ChildCareEncounterEventSignallerQuery orderByGreen3($order = Criteria::ASC) Order by the green_3 column
 * @method     ChildCareEncounterEventSignallerQuery orderByGreen4($order = Criteria::ASC) Order by the green_4 column
 * @method     ChildCareEncounterEventSignallerQuery orderByGreen5($order = Criteria::ASC) Order by the green_5 column
 * @method     ChildCareEncounterEventSignallerQuery orderByGreen6($order = Criteria::ASC) Order by the green_6 column
 * @method     ChildCareEncounterEventSignallerQuery orderByGreen7($order = Criteria::ASC) Order by the green_7 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose1($order = Criteria::ASC) Order by the rose_1 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose2($order = Criteria::ASC) Order by the rose_2 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose3($order = Criteria::ASC) Order by the rose_3 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose4($order = Criteria::ASC) Order by the rose_4 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose5($order = Criteria::ASC) Order by the rose_5 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose6($order = Criteria::ASC) Order by the rose_6 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose7($order = Criteria::ASC) Order by the rose_7 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose8($order = Criteria::ASC) Order by the rose_8 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose9($order = Criteria::ASC) Order by the rose_9 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose10($order = Criteria::ASC) Order by the rose_10 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose11($order = Criteria::ASC) Order by the rose_11 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose12($order = Criteria::ASC) Order by the rose_12 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose13($order = Criteria::ASC) Order by the rose_13 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose14($order = Criteria::ASC) Order by the rose_14 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose15($order = Criteria::ASC) Order by the rose_15 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose16($order = Criteria::ASC) Order by the rose_16 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose17($order = Criteria::ASC) Order by the rose_17 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose18($order = Criteria::ASC) Order by the rose_18 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose19($order = Criteria::ASC) Order by the rose_19 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose20($order = Criteria::ASC) Order by the rose_20 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose21($order = Criteria::ASC) Order by the rose_21 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose22($order = Criteria::ASC) Order by the rose_22 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose23($order = Criteria::ASC) Order by the rose_23 column
 * @method     ChildCareEncounterEventSignallerQuery orderByRose24($order = Criteria::ASC) Order by the rose_24 column
 * @method     ChildCareEncounterEventSignallerQuery orderByMaroon($order = Criteria::ASC) Order by the maroon column
 *
 * @method     ChildCareEncounterEventSignallerQuery groupByEncounterNr() Group by the encounter_nr column
 * @method     ChildCareEncounterEventSignallerQuery groupByYellow() Group by the yellow column
 * @method     ChildCareEncounterEventSignallerQuery groupByBlack() Group by the black column
 * @method     ChildCareEncounterEventSignallerQuery groupByBluePale() Group by the blue_pale column
 * @method     ChildCareEncounterEventSignallerQuery groupByBrown() Group by the brown column
 * @method     ChildCareEncounterEventSignallerQuery groupByPink() Group by the pink column
 * @method     ChildCareEncounterEventSignallerQuery groupByYellowPale() Group by the yellow_pale column
 * @method     ChildCareEncounterEventSignallerQuery groupByRed() Group by the red column
 * @method     ChildCareEncounterEventSignallerQuery groupByGreenPale() Group by the green_pale column
 * @method     ChildCareEncounterEventSignallerQuery groupByViolet() Group by the violet column
 * @method     ChildCareEncounterEventSignallerQuery groupByBlue() Group by the blue column
 * @method     ChildCareEncounterEventSignallerQuery groupByBiege() Group by the biege column
 * @method     ChildCareEncounterEventSignallerQuery groupByOrange() Group by the orange column
 * @method     ChildCareEncounterEventSignallerQuery groupByGreen1() Group by the green_1 column
 * @method     ChildCareEncounterEventSignallerQuery groupByGreen2() Group by the green_2 column
 * @method     ChildCareEncounterEventSignallerQuery groupByGreen3() Group by the green_3 column
 * @method     ChildCareEncounterEventSignallerQuery groupByGreen4() Group by the green_4 column
 * @method     ChildCareEncounterEventSignallerQuery groupByGreen5() Group by the green_5 column
 * @method     ChildCareEncounterEventSignallerQuery groupByGreen6() Group by the green_6 column
 * @method     ChildCareEncounterEventSignallerQuery groupByGreen7() Group by the green_7 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose1() Group by the rose_1 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose2() Group by the rose_2 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose3() Group by the rose_3 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose4() Group by the rose_4 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose5() Group by the rose_5 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose6() Group by the rose_6 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose7() Group by the rose_7 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose8() Group by the rose_8 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose9() Group by the rose_9 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose10() Group by the rose_10 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose11() Group by the rose_11 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose12() Group by the rose_12 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose13() Group by the rose_13 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose14() Group by the rose_14 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose15() Group by the rose_15 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose16() Group by the rose_16 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose17() Group by the rose_17 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose18() Group by the rose_18 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose19() Group by the rose_19 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose20() Group by the rose_20 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose21() Group by the rose_21 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose22() Group by the rose_22 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose23() Group by the rose_23 column
 * @method     ChildCareEncounterEventSignallerQuery groupByRose24() Group by the rose_24 column
 * @method     ChildCareEncounterEventSignallerQuery groupByMaroon() Group by the maroon column
 *
 * @method     ChildCareEncounterEventSignallerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCareEncounterEventSignallerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCareEncounterEventSignallerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCareEncounterEventSignallerQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCareEncounterEventSignallerQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCareEncounterEventSignallerQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCareEncounterEventSignaller findOne(ConnectionInterface $con = null) Return the first ChildCareEncounterEventSignaller matching the query
 * @method     ChildCareEncounterEventSignaller findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCareEncounterEventSignaller matching the query, or a new ChildCareEncounterEventSignaller object populated from the query conditions when no match is found
 *
 * @method     ChildCareEncounterEventSignaller findOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterEventSignaller filtered by the encounter_nr column
 * @method     ChildCareEncounterEventSignaller findOneByYellow(boolean $yellow) Return the first ChildCareEncounterEventSignaller filtered by the yellow column
 * @method     ChildCareEncounterEventSignaller findOneByBlack(boolean $black) Return the first ChildCareEncounterEventSignaller filtered by the black column
 * @method     ChildCareEncounterEventSignaller findOneByBluePale(boolean $blue_pale) Return the first ChildCareEncounterEventSignaller filtered by the blue_pale column
 * @method     ChildCareEncounterEventSignaller findOneByBrown(boolean $brown) Return the first ChildCareEncounterEventSignaller filtered by the brown column
 * @method     ChildCareEncounterEventSignaller findOneByPink(boolean $pink) Return the first ChildCareEncounterEventSignaller filtered by the pink column
 * @method     ChildCareEncounterEventSignaller findOneByYellowPale(boolean $yellow_pale) Return the first ChildCareEncounterEventSignaller filtered by the yellow_pale column
 * @method     ChildCareEncounterEventSignaller findOneByRed(boolean $red) Return the first ChildCareEncounterEventSignaller filtered by the red column
 * @method     ChildCareEncounterEventSignaller findOneByGreenPale(boolean $green_pale) Return the first ChildCareEncounterEventSignaller filtered by the green_pale column
 * @method     ChildCareEncounterEventSignaller findOneByViolet(boolean $violet) Return the first ChildCareEncounterEventSignaller filtered by the violet column
 * @method     ChildCareEncounterEventSignaller findOneByBlue(boolean $blue) Return the first ChildCareEncounterEventSignaller filtered by the blue column
 * @method     ChildCareEncounterEventSignaller findOneByBiege(boolean $biege) Return the first ChildCareEncounterEventSignaller filtered by the biege column
 * @method     ChildCareEncounterEventSignaller findOneByOrange(boolean $orange) Return the first ChildCareEncounterEventSignaller filtered by the orange column
 * @method     ChildCareEncounterEventSignaller findOneByGreen1(boolean $green_1) Return the first ChildCareEncounterEventSignaller filtered by the green_1 column
 * @method     ChildCareEncounterEventSignaller findOneByGreen2(boolean $green_2) Return the first ChildCareEncounterEventSignaller filtered by the green_2 column
 * @method     ChildCareEncounterEventSignaller findOneByGreen3(boolean $green_3) Return the first ChildCareEncounterEventSignaller filtered by the green_3 column
 * @method     ChildCareEncounterEventSignaller findOneByGreen4(boolean $green_4) Return the first ChildCareEncounterEventSignaller filtered by the green_4 column
 * @method     ChildCareEncounterEventSignaller findOneByGreen5(boolean $green_5) Return the first ChildCareEncounterEventSignaller filtered by the green_5 column
 * @method     ChildCareEncounterEventSignaller findOneByGreen6(boolean $green_6) Return the first ChildCareEncounterEventSignaller filtered by the green_6 column
 * @method     ChildCareEncounterEventSignaller findOneByGreen7(boolean $green_7) Return the first ChildCareEncounterEventSignaller filtered by the green_7 column
 * @method     ChildCareEncounterEventSignaller findOneByRose1(boolean $rose_1) Return the first ChildCareEncounterEventSignaller filtered by the rose_1 column
 * @method     ChildCareEncounterEventSignaller findOneByRose2(boolean $rose_2) Return the first ChildCareEncounterEventSignaller filtered by the rose_2 column
 * @method     ChildCareEncounterEventSignaller findOneByRose3(boolean $rose_3) Return the first ChildCareEncounterEventSignaller filtered by the rose_3 column
 * @method     ChildCareEncounterEventSignaller findOneByRose4(boolean $rose_4) Return the first ChildCareEncounterEventSignaller filtered by the rose_4 column
 * @method     ChildCareEncounterEventSignaller findOneByRose5(boolean $rose_5) Return the first ChildCareEncounterEventSignaller filtered by the rose_5 column
 * @method     ChildCareEncounterEventSignaller findOneByRose6(boolean $rose_6) Return the first ChildCareEncounterEventSignaller filtered by the rose_6 column
 * @method     ChildCareEncounterEventSignaller findOneByRose7(boolean $rose_7) Return the first ChildCareEncounterEventSignaller filtered by the rose_7 column
 * @method     ChildCareEncounterEventSignaller findOneByRose8(boolean $rose_8) Return the first ChildCareEncounterEventSignaller filtered by the rose_8 column
 * @method     ChildCareEncounterEventSignaller findOneByRose9(boolean $rose_9) Return the first ChildCareEncounterEventSignaller filtered by the rose_9 column
 * @method     ChildCareEncounterEventSignaller findOneByRose10(boolean $rose_10) Return the first ChildCareEncounterEventSignaller filtered by the rose_10 column
 * @method     ChildCareEncounterEventSignaller findOneByRose11(boolean $rose_11) Return the first ChildCareEncounterEventSignaller filtered by the rose_11 column
 * @method     ChildCareEncounterEventSignaller findOneByRose12(boolean $rose_12) Return the first ChildCareEncounterEventSignaller filtered by the rose_12 column
 * @method     ChildCareEncounterEventSignaller findOneByRose13(boolean $rose_13) Return the first ChildCareEncounterEventSignaller filtered by the rose_13 column
 * @method     ChildCareEncounterEventSignaller findOneByRose14(boolean $rose_14) Return the first ChildCareEncounterEventSignaller filtered by the rose_14 column
 * @method     ChildCareEncounterEventSignaller findOneByRose15(boolean $rose_15) Return the first ChildCareEncounterEventSignaller filtered by the rose_15 column
 * @method     ChildCareEncounterEventSignaller findOneByRose16(boolean $rose_16) Return the first ChildCareEncounterEventSignaller filtered by the rose_16 column
 * @method     ChildCareEncounterEventSignaller findOneByRose17(boolean $rose_17) Return the first ChildCareEncounterEventSignaller filtered by the rose_17 column
 * @method     ChildCareEncounterEventSignaller findOneByRose18(boolean $rose_18) Return the first ChildCareEncounterEventSignaller filtered by the rose_18 column
 * @method     ChildCareEncounterEventSignaller findOneByRose19(boolean $rose_19) Return the first ChildCareEncounterEventSignaller filtered by the rose_19 column
 * @method     ChildCareEncounterEventSignaller findOneByRose20(boolean $rose_20) Return the first ChildCareEncounterEventSignaller filtered by the rose_20 column
 * @method     ChildCareEncounterEventSignaller findOneByRose21(boolean $rose_21) Return the first ChildCareEncounterEventSignaller filtered by the rose_21 column
 * @method     ChildCareEncounterEventSignaller findOneByRose22(boolean $rose_22) Return the first ChildCareEncounterEventSignaller filtered by the rose_22 column
 * @method     ChildCareEncounterEventSignaller findOneByRose23(boolean $rose_23) Return the first ChildCareEncounterEventSignaller filtered by the rose_23 column
 * @method     ChildCareEncounterEventSignaller findOneByRose24(boolean $rose_24) Return the first ChildCareEncounterEventSignaller filtered by the rose_24 column
 * @method     ChildCareEncounterEventSignaller findOneByMaroon(boolean $maroon) Return the first ChildCareEncounterEventSignaller filtered by the maroon column *

 * @method     ChildCareEncounterEventSignaller requirePk($key, ConnectionInterface $con = null) Return the ChildCareEncounterEventSignaller by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOne(ConnectionInterface $con = null) Return the first ChildCareEncounterEventSignaller matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterEventSignaller requireOneByEncounterNr(int $encounter_nr) Return the first ChildCareEncounterEventSignaller filtered by the encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByYellow(boolean $yellow) Return the first ChildCareEncounterEventSignaller filtered by the yellow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByBlack(boolean $black) Return the first ChildCareEncounterEventSignaller filtered by the black column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByBluePale(boolean $blue_pale) Return the first ChildCareEncounterEventSignaller filtered by the blue_pale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByBrown(boolean $brown) Return the first ChildCareEncounterEventSignaller filtered by the brown column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByPink(boolean $pink) Return the first ChildCareEncounterEventSignaller filtered by the pink column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByYellowPale(boolean $yellow_pale) Return the first ChildCareEncounterEventSignaller filtered by the yellow_pale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRed(boolean $red) Return the first ChildCareEncounterEventSignaller filtered by the red column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByGreenPale(boolean $green_pale) Return the first ChildCareEncounterEventSignaller filtered by the green_pale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByViolet(boolean $violet) Return the first ChildCareEncounterEventSignaller filtered by the violet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByBlue(boolean $blue) Return the first ChildCareEncounterEventSignaller filtered by the blue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByBiege(boolean $biege) Return the first ChildCareEncounterEventSignaller filtered by the biege column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByOrange(boolean $orange) Return the first ChildCareEncounterEventSignaller filtered by the orange column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByGreen1(boolean $green_1) Return the first ChildCareEncounterEventSignaller filtered by the green_1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByGreen2(boolean $green_2) Return the first ChildCareEncounterEventSignaller filtered by the green_2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByGreen3(boolean $green_3) Return the first ChildCareEncounterEventSignaller filtered by the green_3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByGreen4(boolean $green_4) Return the first ChildCareEncounterEventSignaller filtered by the green_4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByGreen5(boolean $green_5) Return the first ChildCareEncounterEventSignaller filtered by the green_5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByGreen6(boolean $green_6) Return the first ChildCareEncounterEventSignaller filtered by the green_6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByGreen7(boolean $green_7) Return the first ChildCareEncounterEventSignaller filtered by the green_7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose1(boolean $rose_1) Return the first ChildCareEncounterEventSignaller filtered by the rose_1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose2(boolean $rose_2) Return the first ChildCareEncounterEventSignaller filtered by the rose_2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose3(boolean $rose_3) Return the first ChildCareEncounterEventSignaller filtered by the rose_3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose4(boolean $rose_4) Return the first ChildCareEncounterEventSignaller filtered by the rose_4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose5(boolean $rose_5) Return the first ChildCareEncounterEventSignaller filtered by the rose_5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose6(boolean $rose_6) Return the first ChildCareEncounterEventSignaller filtered by the rose_6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose7(boolean $rose_7) Return the first ChildCareEncounterEventSignaller filtered by the rose_7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose8(boolean $rose_8) Return the first ChildCareEncounterEventSignaller filtered by the rose_8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose9(boolean $rose_9) Return the first ChildCareEncounterEventSignaller filtered by the rose_9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose10(boolean $rose_10) Return the first ChildCareEncounterEventSignaller filtered by the rose_10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose11(boolean $rose_11) Return the first ChildCareEncounterEventSignaller filtered by the rose_11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose12(boolean $rose_12) Return the first ChildCareEncounterEventSignaller filtered by the rose_12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose13(boolean $rose_13) Return the first ChildCareEncounterEventSignaller filtered by the rose_13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose14(boolean $rose_14) Return the first ChildCareEncounterEventSignaller filtered by the rose_14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose15(boolean $rose_15) Return the first ChildCareEncounterEventSignaller filtered by the rose_15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose16(boolean $rose_16) Return the first ChildCareEncounterEventSignaller filtered by the rose_16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose17(boolean $rose_17) Return the first ChildCareEncounterEventSignaller filtered by the rose_17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose18(boolean $rose_18) Return the first ChildCareEncounterEventSignaller filtered by the rose_18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose19(boolean $rose_19) Return the first ChildCareEncounterEventSignaller filtered by the rose_19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose20(boolean $rose_20) Return the first ChildCareEncounterEventSignaller filtered by the rose_20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose21(boolean $rose_21) Return the first ChildCareEncounterEventSignaller filtered by the rose_21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose22(boolean $rose_22) Return the first ChildCareEncounterEventSignaller filtered by the rose_22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose23(boolean $rose_23) Return the first ChildCareEncounterEventSignaller filtered by the rose_23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByRose24(boolean $rose_24) Return the first ChildCareEncounterEventSignaller filtered by the rose_24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCareEncounterEventSignaller requireOneByMaroon(boolean $maroon) Return the first ChildCareEncounterEventSignaller filtered by the maroon column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCareEncounterEventSignaller objects based on current ModelCriteria
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByEncounterNr(int $encounter_nr) Return ChildCareEncounterEventSignaller objects filtered by the encounter_nr column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByYellow(boolean $yellow) Return ChildCareEncounterEventSignaller objects filtered by the yellow column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByBlack(boolean $black) Return ChildCareEncounterEventSignaller objects filtered by the black column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByBluePale(boolean $blue_pale) Return ChildCareEncounterEventSignaller objects filtered by the blue_pale column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByBrown(boolean $brown) Return ChildCareEncounterEventSignaller objects filtered by the brown column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByPink(boolean $pink) Return ChildCareEncounterEventSignaller objects filtered by the pink column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByYellowPale(boolean $yellow_pale) Return ChildCareEncounterEventSignaller objects filtered by the yellow_pale column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRed(boolean $red) Return ChildCareEncounterEventSignaller objects filtered by the red column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByGreenPale(boolean $green_pale) Return ChildCareEncounterEventSignaller objects filtered by the green_pale column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByViolet(boolean $violet) Return ChildCareEncounterEventSignaller objects filtered by the violet column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByBlue(boolean $blue) Return ChildCareEncounterEventSignaller objects filtered by the blue column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByBiege(boolean $biege) Return ChildCareEncounterEventSignaller objects filtered by the biege column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByOrange(boolean $orange) Return ChildCareEncounterEventSignaller objects filtered by the orange column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByGreen1(boolean $green_1) Return ChildCareEncounterEventSignaller objects filtered by the green_1 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByGreen2(boolean $green_2) Return ChildCareEncounterEventSignaller objects filtered by the green_2 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByGreen3(boolean $green_3) Return ChildCareEncounterEventSignaller objects filtered by the green_3 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByGreen4(boolean $green_4) Return ChildCareEncounterEventSignaller objects filtered by the green_4 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByGreen5(boolean $green_5) Return ChildCareEncounterEventSignaller objects filtered by the green_5 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByGreen6(boolean $green_6) Return ChildCareEncounterEventSignaller objects filtered by the green_6 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByGreen7(boolean $green_7) Return ChildCareEncounterEventSignaller objects filtered by the green_7 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose1(boolean $rose_1) Return ChildCareEncounterEventSignaller objects filtered by the rose_1 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose2(boolean $rose_2) Return ChildCareEncounterEventSignaller objects filtered by the rose_2 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose3(boolean $rose_3) Return ChildCareEncounterEventSignaller objects filtered by the rose_3 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose4(boolean $rose_4) Return ChildCareEncounterEventSignaller objects filtered by the rose_4 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose5(boolean $rose_5) Return ChildCareEncounterEventSignaller objects filtered by the rose_5 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose6(boolean $rose_6) Return ChildCareEncounterEventSignaller objects filtered by the rose_6 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose7(boolean $rose_7) Return ChildCareEncounterEventSignaller objects filtered by the rose_7 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose8(boolean $rose_8) Return ChildCareEncounterEventSignaller objects filtered by the rose_8 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose9(boolean $rose_9) Return ChildCareEncounterEventSignaller objects filtered by the rose_9 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose10(boolean $rose_10) Return ChildCareEncounterEventSignaller objects filtered by the rose_10 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose11(boolean $rose_11) Return ChildCareEncounterEventSignaller objects filtered by the rose_11 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose12(boolean $rose_12) Return ChildCareEncounterEventSignaller objects filtered by the rose_12 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose13(boolean $rose_13) Return ChildCareEncounterEventSignaller objects filtered by the rose_13 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose14(boolean $rose_14) Return ChildCareEncounterEventSignaller objects filtered by the rose_14 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose15(boolean $rose_15) Return ChildCareEncounterEventSignaller objects filtered by the rose_15 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose16(boolean $rose_16) Return ChildCareEncounterEventSignaller objects filtered by the rose_16 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose17(boolean $rose_17) Return ChildCareEncounterEventSignaller objects filtered by the rose_17 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose18(boolean $rose_18) Return ChildCareEncounterEventSignaller objects filtered by the rose_18 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose19(boolean $rose_19) Return ChildCareEncounterEventSignaller objects filtered by the rose_19 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose20(boolean $rose_20) Return ChildCareEncounterEventSignaller objects filtered by the rose_20 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose21(boolean $rose_21) Return ChildCareEncounterEventSignaller objects filtered by the rose_21 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose22(boolean $rose_22) Return ChildCareEncounterEventSignaller objects filtered by the rose_22 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose23(boolean $rose_23) Return ChildCareEncounterEventSignaller objects filtered by the rose_23 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByRose24(boolean $rose_24) Return ChildCareEncounterEventSignaller objects filtered by the rose_24 column
 * @method     ChildCareEncounterEventSignaller[]|ObjectCollection findByMaroon(boolean $maroon) Return ChildCareEncounterEventSignaller objects filtered by the maroon column
 * @method     ChildCareEncounterEventSignaller[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CareEncounterEventSignallerQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CareEncounterEventSignallerQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CareEncounterEventSignaller', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCareEncounterEventSignallerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCareEncounterEventSignallerQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCareEncounterEventSignallerQuery) {
            return $criteria;
        }
        $query = new ChildCareEncounterEventSignallerQuery();
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
     * @return ChildCareEncounterEventSignaller|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CareEncounterEventSignallerTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CareEncounterEventSignallerTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCareEncounterEventSignaller A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT encounter_nr, yellow, black, blue_pale, brown, pink, yellow_pale, red, green_pale, violet, blue, biege, orange, green_1, green_2, green_3, green_4, green_5, green_6, green_7, rose_1, rose_2, rose_3, rose_4, rose_5, rose_6, rose_7, rose_8, rose_9, rose_10, rose_11, rose_12, rose_13, rose_14, rose_15, rose_16, rose_17, rose_18, rose_19, rose_20, rose_21, rose_22, rose_23, rose_24, maroon FROM care_encounter_event_signaller WHERE encounter_nr = :p0';
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
            /** @var ChildCareEncounterEventSignaller $obj */
            $obj = new ChildCareEncounterEventSignaller();
            $obj->hydrate($row);
            CareEncounterEventSignallerTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCareEncounterEventSignaller|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR, $keys, Criteria::IN);
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
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByEncounterNr($encounterNr = null, $comparison = null)
    {
        if (is_array($encounterNr)) {
            $useMinMax = false;
            if (isset($encounterNr['min'])) {
                $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR, $encounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encounterNr['max'])) {
                $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR, $encounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR, $encounterNr, $comparison);
    }

    /**
     * Filter the query on the yellow column
     *
     * Example usage:
     * <code>
     * $query->filterByYellow(true); // WHERE yellow = true
     * $query->filterByYellow('yes'); // WHERE yellow = true
     * </code>
     *
     * @param     boolean|string $yellow The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByYellow($yellow = null, $comparison = null)
    {
        if (is_string($yellow)) {
            $yellow = in_array(strtolower($yellow), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_YELLOW, $yellow, $comparison);
    }

    /**
     * Filter the query on the black column
     *
     * Example usage:
     * <code>
     * $query->filterByBlack(true); // WHERE black = true
     * $query->filterByBlack('yes'); // WHERE black = true
     * </code>
     *
     * @param     boolean|string $black The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByBlack($black = null, $comparison = null)
    {
        if (is_string($black)) {
            $black = in_array(strtolower($black), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_BLACK, $black, $comparison);
    }

    /**
     * Filter the query on the blue_pale column
     *
     * Example usage:
     * <code>
     * $query->filterByBluePale(true); // WHERE blue_pale = true
     * $query->filterByBluePale('yes'); // WHERE blue_pale = true
     * </code>
     *
     * @param     boolean|string $bluePale The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByBluePale($bluePale = null, $comparison = null)
    {
        if (is_string($bluePale)) {
            $bluePale = in_array(strtolower($bluePale), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_BLUE_PALE, $bluePale, $comparison);
    }

    /**
     * Filter the query on the brown column
     *
     * Example usage:
     * <code>
     * $query->filterByBrown(true); // WHERE brown = true
     * $query->filterByBrown('yes'); // WHERE brown = true
     * </code>
     *
     * @param     boolean|string $brown The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByBrown($brown = null, $comparison = null)
    {
        if (is_string($brown)) {
            $brown = in_array(strtolower($brown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_BROWN, $brown, $comparison);
    }

    /**
     * Filter the query on the pink column
     *
     * Example usage:
     * <code>
     * $query->filterByPink(true); // WHERE pink = true
     * $query->filterByPink('yes'); // WHERE pink = true
     * </code>
     *
     * @param     boolean|string $pink The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByPink($pink = null, $comparison = null)
    {
        if (is_string($pink)) {
            $pink = in_array(strtolower($pink), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_PINK, $pink, $comparison);
    }

    /**
     * Filter the query on the yellow_pale column
     *
     * Example usage:
     * <code>
     * $query->filterByYellowPale(true); // WHERE yellow_pale = true
     * $query->filterByYellowPale('yes'); // WHERE yellow_pale = true
     * </code>
     *
     * @param     boolean|string $yellowPale The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByYellowPale($yellowPale = null, $comparison = null)
    {
        if (is_string($yellowPale)) {
            $yellowPale = in_array(strtolower($yellowPale), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_YELLOW_PALE, $yellowPale, $comparison);
    }

    /**
     * Filter the query on the red column
     *
     * Example usage:
     * <code>
     * $query->filterByRed(true); // WHERE red = true
     * $query->filterByRed('yes'); // WHERE red = true
     * </code>
     *
     * @param     boolean|string $red The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRed($red = null, $comparison = null)
    {
        if (is_string($red)) {
            $red = in_array(strtolower($red), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_RED, $red, $comparison);
    }

    /**
     * Filter the query on the green_pale column
     *
     * Example usage:
     * <code>
     * $query->filterByGreenPale(true); // WHERE green_pale = true
     * $query->filterByGreenPale('yes'); // WHERE green_pale = true
     * </code>
     *
     * @param     boolean|string $greenPale The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByGreenPale($greenPale = null, $comparison = null)
    {
        if (is_string($greenPale)) {
            $greenPale = in_array(strtolower($greenPale), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_GREEN_PALE, $greenPale, $comparison);
    }

    /**
     * Filter the query on the violet column
     *
     * Example usage:
     * <code>
     * $query->filterByViolet(true); // WHERE violet = true
     * $query->filterByViolet('yes'); // WHERE violet = true
     * </code>
     *
     * @param     boolean|string $violet The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByViolet($violet = null, $comparison = null)
    {
        if (is_string($violet)) {
            $violet = in_array(strtolower($violet), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_VIOLET, $violet, $comparison);
    }

    /**
     * Filter the query on the blue column
     *
     * Example usage:
     * <code>
     * $query->filterByBlue(true); // WHERE blue = true
     * $query->filterByBlue('yes'); // WHERE blue = true
     * </code>
     *
     * @param     boolean|string $blue The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByBlue($blue = null, $comparison = null)
    {
        if (is_string($blue)) {
            $blue = in_array(strtolower($blue), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_BLUE, $blue, $comparison);
    }

    /**
     * Filter the query on the biege column
     *
     * Example usage:
     * <code>
     * $query->filterByBiege(true); // WHERE biege = true
     * $query->filterByBiege('yes'); // WHERE biege = true
     * </code>
     *
     * @param     boolean|string $biege The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByBiege($biege = null, $comparison = null)
    {
        if (is_string($biege)) {
            $biege = in_array(strtolower($biege), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_BIEGE, $biege, $comparison);
    }

    /**
     * Filter the query on the orange column
     *
     * Example usage:
     * <code>
     * $query->filterByOrange(true); // WHERE orange = true
     * $query->filterByOrange('yes'); // WHERE orange = true
     * </code>
     *
     * @param     boolean|string $orange The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByOrange($orange = null, $comparison = null)
    {
        if (is_string($orange)) {
            $orange = in_array(strtolower($orange), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ORANGE, $orange, $comparison);
    }

    /**
     * Filter the query on the green_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByGreen1(true); // WHERE green_1 = true
     * $query->filterByGreen1('yes'); // WHERE green_1 = true
     * </code>
     *
     * @param     boolean|string $green1 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByGreen1($green1 = null, $comparison = null)
    {
        if (is_string($green1)) {
            $green1 = in_array(strtolower($green1), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_GREEN_1, $green1, $comparison);
    }

    /**
     * Filter the query on the green_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByGreen2(true); // WHERE green_2 = true
     * $query->filterByGreen2('yes'); // WHERE green_2 = true
     * </code>
     *
     * @param     boolean|string $green2 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByGreen2($green2 = null, $comparison = null)
    {
        if (is_string($green2)) {
            $green2 = in_array(strtolower($green2), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_GREEN_2, $green2, $comparison);
    }

    /**
     * Filter the query on the green_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByGreen3(true); // WHERE green_3 = true
     * $query->filterByGreen3('yes'); // WHERE green_3 = true
     * </code>
     *
     * @param     boolean|string $green3 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByGreen3($green3 = null, $comparison = null)
    {
        if (is_string($green3)) {
            $green3 = in_array(strtolower($green3), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_GREEN_3, $green3, $comparison);
    }

    /**
     * Filter the query on the green_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByGreen4(true); // WHERE green_4 = true
     * $query->filterByGreen4('yes'); // WHERE green_4 = true
     * </code>
     *
     * @param     boolean|string $green4 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByGreen4($green4 = null, $comparison = null)
    {
        if (is_string($green4)) {
            $green4 = in_array(strtolower($green4), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_GREEN_4, $green4, $comparison);
    }

    /**
     * Filter the query on the green_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByGreen5(true); // WHERE green_5 = true
     * $query->filterByGreen5('yes'); // WHERE green_5 = true
     * </code>
     *
     * @param     boolean|string $green5 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByGreen5($green5 = null, $comparison = null)
    {
        if (is_string($green5)) {
            $green5 = in_array(strtolower($green5), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_GREEN_5, $green5, $comparison);
    }

    /**
     * Filter the query on the green_6 column
     *
     * Example usage:
     * <code>
     * $query->filterByGreen6(true); // WHERE green_6 = true
     * $query->filterByGreen6('yes'); // WHERE green_6 = true
     * </code>
     *
     * @param     boolean|string $green6 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByGreen6($green6 = null, $comparison = null)
    {
        if (is_string($green6)) {
            $green6 = in_array(strtolower($green6), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_GREEN_6, $green6, $comparison);
    }

    /**
     * Filter the query on the green_7 column
     *
     * Example usage:
     * <code>
     * $query->filterByGreen7(true); // WHERE green_7 = true
     * $query->filterByGreen7('yes'); // WHERE green_7 = true
     * </code>
     *
     * @param     boolean|string $green7 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByGreen7($green7 = null, $comparison = null)
    {
        if (is_string($green7)) {
            $green7 = in_array(strtolower($green7), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_GREEN_7, $green7, $comparison);
    }

    /**
     * Filter the query on the rose_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose1(true); // WHERE rose_1 = true
     * $query->filterByRose1('yes'); // WHERE rose_1 = true
     * </code>
     *
     * @param     boolean|string $rose1 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose1($rose1 = null, $comparison = null)
    {
        if (is_string($rose1)) {
            $rose1 = in_array(strtolower($rose1), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_1, $rose1, $comparison);
    }

    /**
     * Filter the query on the rose_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose2(true); // WHERE rose_2 = true
     * $query->filterByRose2('yes'); // WHERE rose_2 = true
     * </code>
     *
     * @param     boolean|string $rose2 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose2($rose2 = null, $comparison = null)
    {
        if (is_string($rose2)) {
            $rose2 = in_array(strtolower($rose2), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_2, $rose2, $comparison);
    }

    /**
     * Filter the query on the rose_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose3(true); // WHERE rose_3 = true
     * $query->filterByRose3('yes'); // WHERE rose_3 = true
     * </code>
     *
     * @param     boolean|string $rose3 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose3($rose3 = null, $comparison = null)
    {
        if (is_string($rose3)) {
            $rose3 = in_array(strtolower($rose3), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_3, $rose3, $comparison);
    }

    /**
     * Filter the query on the rose_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose4(true); // WHERE rose_4 = true
     * $query->filterByRose4('yes'); // WHERE rose_4 = true
     * </code>
     *
     * @param     boolean|string $rose4 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose4($rose4 = null, $comparison = null)
    {
        if (is_string($rose4)) {
            $rose4 = in_array(strtolower($rose4), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_4, $rose4, $comparison);
    }

    /**
     * Filter the query on the rose_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose5(true); // WHERE rose_5 = true
     * $query->filterByRose5('yes'); // WHERE rose_5 = true
     * </code>
     *
     * @param     boolean|string $rose5 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose5($rose5 = null, $comparison = null)
    {
        if (is_string($rose5)) {
            $rose5 = in_array(strtolower($rose5), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_5, $rose5, $comparison);
    }

    /**
     * Filter the query on the rose_6 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose6(true); // WHERE rose_6 = true
     * $query->filterByRose6('yes'); // WHERE rose_6 = true
     * </code>
     *
     * @param     boolean|string $rose6 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose6($rose6 = null, $comparison = null)
    {
        if (is_string($rose6)) {
            $rose6 = in_array(strtolower($rose6), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_6, $rose6, $comparison);
    }

    /**
     * Filter the query on the rose_7 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose7(true); // WHERE rose_7 = true
     * $query->filterByRose7('yes'); // WHERE rose_7 = true
     * </code>
     *
     * @param     boolean|string $rose7 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose7($rose7 = null, $comparison = null)
    {
        if (is_string($rose7)) {
            $rose7 = in_array(strtolower($rose7), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_7, $rose7, $comparison);
    }

    /**
     * Filter the query on the rose_8 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose8(true); // WHERE rose_8 = true
     * $query->filterByRose8('yes'); // WHERE rose_8 = true
     * </code>
     *
     * @param     boolean|string $rose8 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose8($rose8 = null, $comparison = null)
    {
        if (is_string($rose8)) {
            $rose8 = in_array(strtolower($rose8), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_8, $rose8, $comparison);
    }

    /**
     * Filter the query on the rose_9 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose9(true); // WHERE rose_9 = true
     * $query->filterByRose9('yes'); // WHERE rose_9 = true
     * </code>
     *
     * @param     boolean|string $rose9 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose9($rose9 = null, $comparison = null)
    {
        if (is_string($rose9)) {
            $rose9 = in_array(strtolower($rose9), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_9, $rose9, $comparison);
    }

    /**
     * Filter the query on the rose_10 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose10(true); // WHERE rose_10 = true
     * $query->filterByRose10('yes'); // WHERE rose_10 = true
     * </code>
     *
     * @param     boolean|string $rose10 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose10($rose10 = null, $comparison = null)
    {
        if (is_string($rose10)) {
            $rose10 = in_array(strtolower($rose10), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_10, $rose10, $comparison);
    }

    /**
     * Filter the query on the rose_11 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose11(true); // WHERE rose_11 = true
     * $query->filterByRose11('yes'); // WHERE rose_11 = true
     * </code>
     *
     * @param     boolean|string $rose11 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose11($rose11 = null, $comparison = null)
    {
        if (is_string($rose11)) {
            $rose11 = in_array(strtolower($rose11), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_11, $rose11, $comparison);
    }

    /**
     * Filter the query on the rose_12 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose12(true); // WHERE rose_12 = true
     * $query->filterByRose12('yes'); // WHERE rose_12 = true
     * </code>
     *
     * @param     boolean|string $rose12 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose12($rose12 = null, $comparison = null)
    {
        if (is_string($rose12)) {
            $rose12 = in_array(strtolower($rose12), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_12, $rose12, $comparison);
    }

    /**
     * Filter the query on the rose_13 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose13(true); // WHERE rose_13 = true
     * $query->filterByRose13('yes'); // WHERE rose_13 = true
     * </code>
     *
     * @param     boolean|string $rose13 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose13($rose13 = null, $comparison = null)
    {
        if (is_string($rose13)) {
            $rose13 = in_array(strtolower($rose13), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_13, $rose13, $comparison);
    }

    /**
     * Filter the query on the rose_14 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose14(true); // WHERE rose_14 = true
     * $query->filterByRose14('yes'); // WHERE rose_14 = true
     * </code>
     *
     * @param     boolean|string $rose14 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose14($rose14 = null, $comparison = null)
    {
        if (is_string($rose14)) {
            $rose14 = in_array(strtolower($rose14), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_14, $rose14, $comparison);
    }

    /**
     * Filter the query on the rose_15 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose15(true); // WHERE rose_15 = true
     * $query->filterByRose15('yes'); // WHERE rose_15 = true
     * </code>
     *
     * @param     boolean|string $rose15 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose15($rose15 = null, $comparison = null)
    {
        if (is_string($rose15)) {
            $rose15 = in_array(strtolower($rose15), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_15, $rose15, $comparison);
    }

    /**
     * Filter the query on the rose_16 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose16(true); // WHERE rose_16 = true
     * $query->filterByRose16('yes'); // WHERE rose_16 = true
     * </code>
     *
     * @param     boolean|string $rose16 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose16($rose16 = null, $comparison = null)
    {
        if (is_string($rose16)) {
            $rose16 = in_array(strtolower($rose16), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_16, $rose16, $comparison);
    }

    /**
     * Filter the query on the rose_17 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose17(true); // WHERE rose_17 = true
     * $query->filterByRose17('yes'); // WHERE rose_17 = true
     * </code>
     *
     * @param     boolean|string $rose17 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose17($rose17 = null, $comparison = null)
    {
        if (is_string($rose17)) {
            $rose17 = in_array(strtolower($rose17), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_17, $rose17, $comparison);
    }

    /**
     * Filter the query on the rose_18 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose18(true); // WHERE rose_18 = true
     * $query->filterByRose18('yes'); // WHERE rose_18 = true
     * </code>
     *
     * @param     boolean|string $rose18 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose18($rose18 = null, $comparison = null)
    {
        if (is_string($rose18)) {
            $rose18 = in_array(strtolower($rose18), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_18, $rose18, $comparison);
    }

    /**
     * Filter the query on the rose_19 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose19(true); // WHERE rose_19 = true
     * $query->filterByRose19('yes'); // WHERE rose_19 = true
     * </code>
     *
     * @param     boolean|string $rose19 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose19($rose19 = null, $comparison = null)
    {
        if (is_string($rose19)) {
            $rose19 = in_array(strtolower($rose19), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_19, $rose19, $comparison);
    }

    /**
     * Filter the query on the rose_20 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose20(true); // WHERE rose_20 = true
     * $query->filterByRose20('yes'); // WHERE rose_20 = true
     * </code>
     *
     * @param     boolean|string $rose20 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose20($rose20 = null, $comparison = null)
    {
        if (is_string($rose20)) {
            $rose20 = in_array(strtolower($rose20), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_20, $rose20, $comparison);
    }

    /**
     * Filter the query on the rose_21 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose21(true); // WHERE rose_21 = true
     * $query->filterByRose21('yes'); // WHERE rose_21 = true
     * </code>
     *
     * @param     boolean|string $rose21 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose21($rose21 = null, $comparison = null)
    {
        if (is_string($rose21)) {
            $rose21 = in_array(strtolower($rose21), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_21, $rose21, $comparison);
    }

    /**
     * Filter the query on the rose_22 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose22(true); // WHERE rose_22 = true
     * $query->filterByRose22('yes'); // WHERE rose_22 = true
     * </code>
     *
     * @param     boolean|string $rose22 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose22($rose22 = null, $comparison = null)
    {
        if (is_string($rose22)) {
            $rose22 = in_array(strtolower($rose22), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_22, $rose22, $comparison);
    }

    /**
     * Filter the query on the rose_23 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose23(true); // WHERE rose_23 = true
     * $query->filterByRose23('yes'); // WHERE rose_23 = true
     * </code>
     *
     * @param     boolean|string $rose23 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose23($rose23 = null, $comparison = null)
    {
        if (is_string($rose23)) {
            $rose23 = in_array(strtolower($rose23), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_23, $rose23, $comparison);
    }

    /**
     * Filter the query on the rose_24 column
     *
     * Example usage:
     * <code>
     * $query->filterByRose24(true); // WHERE rose_24 = true
     * $query->filterByRose24('yes'); // WHERE rose_24 = true
     * </code>
     *
     * @param     boolean|string $rose24 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByRose24($rose24 = null, $comparison = null)
    {
        if (is_string($rose24)) {
            $rose24 = in_array(strtolower($rose24), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ROSE_24, $rose24, $comparison);
    }

    /**
     * Filter the query on the maroon column
     *
     * Example usage:
     * <code>
     * $query->filterByMaroon(true); // WHERE maroon = true
     * $query->filterByMaroon('yes'); // WHERE maroon = true
     * </code>
     *
     * @param     boolean|string $maroon The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function filterByMaroon($maroon = null, $comparison = null)
    {
        if (is_string($maroon)) {
            $maroon = in_array(strtolower($maroon), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_MAROON, $maroon, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCareEncounterEventSignaller $careEncounterEventSignaller Object to remove from the list of results
     *
     * @return $this|ChildCareEncounterEventSignallerQuery The current query, for fluid interface
     */
    public function prune($careEncounterEventSignaller = null)
    {
        if ($careEncounterEventSignaller) {
            $this->addUsingAlias(CareEncounterEventSignallerTableMap::COL_ENCOUNTER_NR, $careEncounterEventSignaller->getEncounterNr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_encounter_event_signaller table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterEventSignallerTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CareEncounterEventSignallerTableMap::clearInstancePool();
            CareEncounterEventSignallerTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CareEncounterEventSignallerTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CareEncounterEventSignallerTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CareEncounterEventSignallerTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CareEncounterEventSignallerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CareEncounterEventSignallerQuery
