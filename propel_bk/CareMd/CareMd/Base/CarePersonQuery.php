<?php

namespace CareMd\CareMd\Base;

use \Exception;
use \PDO;
use CareMd\CareMd\CarePerson as ChildCarePerson;
use CareMd\CareMd\CarePersonQuery as ChildCarePersonQuery;
use CareMd\CareMd\Map\CarePersonTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'care_person' table.
 *
 *
 *
 * @method     ChildCarePersonQuery orderByPid($order = Criteria::ASC) Order by the pid column
 * @method     ChildCarePersonQuery orderBySelianPid($order = Criteria::ASC) Order by the selian_pid column
 * @method     ChildCarePersonQuery orderByDateReg($order = Criteria::ASC) Order by the date_reg column
 * @method     ChildCarePersonQuery orderByNameFirst($order = Criteria::ASC) Order by the name_first column
 * @method     ChildCarePersonQuery orderByName2($order = Criteria::ASC) Order by the name_2 column
 * @method     ChildCarePersonQuery orderByName3($order = Criteria::ASC) Order by the name_3 column
 * @method     ChildCarePersonQuery orderByNameMiddle($order = Criteria::ASC) Order by the name_middle column
 * @method     ChildCarePersonQuery orderByNameLast($order = Criteria::ASC) Order by the name_last column
 * @method     ChildCarePersonQuery orderByNameMaiden($order = Criteria::ASC) Order by the name_maiden column
 * @method     ChildCarePersonQuery orderByNameOthers($order = Criteria::ASC) Order by the name_others column
 * @method     ChildCarePersonQuery orderByEducation($order = Criteria::ASC) Order by the education column
 * @method     ChildCarePersonQuery orderByDateBirth($order = Criteria::ASC) Order by the date_birth column
 * @method     ChildCarePersonQuery orderByBloodGroup($order = Criteria::ASC) Order by the blood_group column
 * @method     ChildCarePersonQuery orderByRh($order = Criteria::ASC) Order by the rh column
 * @method     ChildCarePersonQuery orderByAddrStr($order = Criteria::ASC) Order by the addr_str column
 * @method     ChildCarePersonQuery orderByAddrStrNr($order = Criteria::ASC) Order by the addr_str_nr column
 * @method     ChildCarePersonQuery orderByAddrZip($order = Criteria::ASC) Order by the addr_zip column
 * @method     ChildCarePersonQuery orderByAddrCitytownNr($order = Criteria::ASC) Order by the addr_citytown_nr column
 * @method     ChildCarePersonQuery orderByAddrIsValid($order = Criteria::ASC) Order by the addr_is_valid column
 * @method     ChildCarePersonQuery orderByCitizenship($order = Criteria::ASC) Order by the citizenship column
 * @method     ChildCarePersonQuery orderByPhone1Code($order = Criteria::ASC) Order by the phone_1_code column
 * @method     ChildCarePersonQuery orderByPhone1Nr($order = Criteria::ASC) Order by the phone_1_nr column
 * @method     ChildCarePersonQuery orderByPhone2Code($order = Criteria::ASC) Order by the phone_2_code column
 * @method     ChildCarePersonQuery orderByPhone2Nr($order = Criteria::ASC) Order by the phone_2_nr column
 * @method     ChildCarePersonQuery orderByCellphone1Nr($order = Criteria::ASC) Order by the cellphone_1_nr column
 * @method     ChildCarePersonQuery orderByCellphone2Nr($order = Criteria::ASC) Order by the cellphone_2_nr column
 * @method     ChildCarePersonQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     ChildCarePersonQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildCarePersonQuery orderByCivilStatus($order = Criteria::ASC) Order by the civil_status column
 * @method     ChildCarePersonQuery orderBySex($order = Criteria::ASC) Order by the sex column
 * @method     ChildCarePersonQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     ChildCarePersonQuery orderByPhoto($order = Criteria::ASC) Order by the photo column
 * @method     ChildCarePersonQuery orderByPhotoFilename($order = Criteria::ASC) Order by the photo_filename column
 * @method     ChildCarePersonQuery orderByEthnicOrig($order = Criteria::ASC) Order by the ethnic_orig column
 * @method     ChildCarePersonQuery orderByOrgId($order = Criteria::ASC) Order by the org_id column
 * @method     ChildCarePersonQuery orderBySssNr($order = Criteria::ASC) Order by the sss_nr column
 * @method     ChildCarePersonQuery orderByNatIdNr($order = Criteria::ASC) Order by the nat_id_nr column
 * @method     ChildCarePersonQuery orderByReligion($order = Criteria::ASC) Order by the religion column
 * @method     ChildCarePersonQuery orderByIsFirstReg($order = Criteria::ASC) Order by the is_first_reg column
 * @method     ChildCarePersonQuery orderByRegion($order = Criteria::ASC) Order by the region column
 * @method     ChildCarePersonQuery orderByDistrict($order = Criteria::ASC) Order by the district column
 * @method     ChildCarePersonQuery orderByWard($order = Criteria::ASC) Order by the ward column
 * @method     ChildCarePersonQuery orderByMotherPid($order = Criteria::ASC) Order by the mother_pid column
 * @method     ChildCarePersonQuery orderByFatherPid($order = Criteria::ASC) Order by the father_pid column
 * @method     ChildCarePersonQuery orderByContactPerson($order = Criteria::ASC) Order by the contact_person column
 * @method     ChildCarePersonQuery orderByContactPid($order = Criteria::ASC) Order by the contact_pid column
 * @method     ChildCarePersonQuery orderByContactRelation($order = Criteria::ASC) Order by the contact_relation column
 * @method     ChildCarePersonQuery orderByDeathDate($order = Criteria::ASC) Order by the death_date column
 * @method     ChildCarePersonQuery orderByDeathEncounterNr($order = Criteria::ASC) Order by the death_encounter_nr column
 * @method     ChildCarePersonQuery orderByDeathCause($order = Criteria::ASC) Order by the death_cause column
 * @method     ChildCarePersonQuery orderByDeathCauseCode($order = Criteria::ASC) Order by the death_cause_code column
 * @method     ChildCarePersonQuery orderByDateUpdate($order = Criteria::ASC) Order by the date_update column
 * @method     ChildCarePersonQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCarePersonQuery orderByHistory($order = Criteria::ASC) Order by the history column
 * @method     ChildCarePersonQuery orderByAllergy($order = Criteria::ASC) Order by the allergy column
 * @method     ChildCarePersonQuery orderByModifyId($order = Criteria::ASC) Order by the modify_id column
 * @method     ChildCarePersonQuery orderByModifyTime($order = Criteria::ASC) Order by the modify_time column
 * @method     ChildCarePersonQuery orderByCreateId($order = Criteria::ASC) Order by the create_id column
 * @method     ChildCarePersonQuery orderByCreateTime($order = Criteria::ASC) Order by the create_time column
 * @method     ChildCarePersonQuery orderByAddrCitytownName($order = Criteria::ASC) Order by the addr_citytown_name column
 * @method     ChildCarePersonQuery orderByIsTransmit2erp($order = Criteria::ASC) Order by the is_transmit2ERP column
 * @method     ChildCarePersonQuery orderByInsuranceId($order = Criteria::ASC) Order by the insurance_ID column
 * @method     ChildCarePersonQuery orderByInsuranceHeadPid($order = Criteria::ASC) Order by the insurance_head_pid column
 * @method     ChildCarePersonQuery orderByMembershipNr($order = Criteria::ASC) Order by the membership_nr column
 * @method     ChildCarePersonQuery orderByFormNr($order = Criteria::ASC) Order by the form_nr column
 * @method     ChildCarePersonQuery orderByNhifNr($order = Criteria::ASC) Order by the nhif_nr column
 * @method     ChildCarePersonQuery orderByInsuranceSilver($order = Criteria::ASC) Order by the insurance_silver column
 * @method     ChildCarePersonQuery orderByInsuranceGold($order = Criteria::ASC) Order by the insurance_gold column
 * @method     ChildCarePersonQuery orderByInsuranceFriedkin($order = Criteria::ASC) Order by the insurance_friedkin column
 * @method     ChildCarePersonQuery orderByInsuranceSelianStuff($order = Criteria::ASC) Order by the insurance_selian_stuff column
 * @method     ChildCarePersonQuery orderByInsurancePremiumForAdults($order = Criteria::ASC) Order by the insurance_premium_for_adults column
 * @method     ChildCarePersonQuery orderByInsurancePremiumForChilds($order = Criteria::ASC) Order by the insurance_premium_for_childs column
 * @method     ChildCarePersonQuery orderByInsurancePremiumForSenior($order = Criteria::ASC) Order by the insurance_premium_for_senior column
 * @method     ChildCarePersonQuery orderByInsuranceCopaymentOpd($order = Criteria::ASC) Order by the insurance_copayment_OPD column
 * @method     ChildCarePersonQuery orderByInsuranceCopaymentIpd($order = Criteria::ASC) Order by the insurance_copayment_IPD column
 * @method     ChildCarePersonQuery orderByInsuranceCeilingByIndividual($order = Criteria::ASC) Order by the insurance_ceiling_by_individual column
 * @method     ChildCarePersonQuery orderByInsuranceCeilingByFamily($order = Criteria::ASC) Order by the insurance_ceiling_by_family column
 * @method     ChildCarePersonQuery orderByInsuranceCeilingAmount($order = Criteria::ASC) Order by the insurance_ceiling_amount column
 * @method     ChildCarePersonQuery orderByInsuranceCeilingForFamilies($order = Criteria::ASC) Order by the insurance_ceiling_for_families column
 * @method     ChildCarePersonQuery orderByNationalId($order = Criteria::ASC) Order by the national_id column
 * @method     ChildCarePersonQuery orderByEmployeeId($order = Criteria::ASC) Order by the employee_Id column
 *
 * @method     ChildCarePersonQuery groupByPid() Group by the pid column
 * @method     ChildCarePersonQuery groupBySelianPid() Group by the selian_pid column
 * @method     ChildCarePersonQuery groupByDateReg() Group by the date_reg column
 * @method     ChildCarePersonQuery groupByNameFirst() Group by the name_first column
 * @method     ChildCarePersonQuery groupByName2() Group by the name_2 column
 * @method     ChildCarePersonQuery groupByName3() Group by the name_3 column
 * @method     ChildCarePersonQuery groupByNameMiddle() Group by the name_middle column
 * @method     ChildCarePersonQuery groupByNameLast() Group by the name_last column
 * @method     ChildCarePersonQuery groupByNameMaiden() Group by the name_maiden column
 * @method     ChildCarePersonQuery groupByNameOthers() Group by the name_others column
 * @method     ChildCarePersonQuery groupByEducation() Group by the education column
 * @method     ChildCarePersonQuery groupByDateBirth() Group by the date_birth column
 * @method     ChildCarePersonQuery groupByBloodGroup() Group by the blood_group column
 * @method     ChildCarePersonQuery groupByRh() Group by the rh column
 * @method     ChildCarePersonQuery groupByAddrStr() Group by the addr_str column
 * @method     ChildCarePersonQuery groupByAddrStrNr() Group by the addr_str_nr column
 * @method     ChildCarePersonQuery groupByAddrZip() Group by the addr_zip column
 * @method     ChildCarePersonQuery groupByAddrCitytownNr() Group by the addr_citytown_nr column
 * @method     ChildCarePersonQuery groupByAddrIsValid() Group by the addr_is_valid column
 * @method     ChildCarePersonQuery groupByCitizenship() Group by the citizenship column
 * @method     ChildCarePersonQuery groupByPhone1Code() Group by the phone_1_code column
 * @method     ChildCarePersonQuery groupByPhone1Nr() Group by the phone_1_nr column
 * @method     ChildCarePersonQuery groupByPhone2Code() Group by the phone_2_code column
 * @method     ChildCarePersonQuery groupByPhone2Nr() Group by the phone_2_nr column
 * @method     ChildCarePersonQuery groupByCellphone1Nr() Group by the cellphone_1_nr column
 * @method     ChildCarePersonQuery groupByCellphone2Nr() Group by the cellphone_2_nr column
 * @method     ChildCarePersonQuery groupByFax() Group by the fax column
 * @method     ChildCarePersonQuery groupByEmail() Group by the email column
 * @method     ChildCarePersonQuery groupByCivilStatus() Group by the civil_status column
 * @method     ChildCarePersonQuery groupBySex() Group by the sex column
 * @method     ChildCarePersonQuery groupByTitle() Group by the title column
 * @method     ChildCarePersonQuery groupByPhoto() Group by the photo column
 * @method     ChildCarePersonQuery groupByPhotoFilename() Group by the photo_filename column
 * @method     ChildCarePersonQuery groupByEthnicOrig() Group by the ethnic_orig column
 * @method     ChildCarePersonQuery groupByOrgId() Group by the org_id column
 * @method     ChildCarePersonQuery groupBySssNr() Group by the sss_nr column
 * @method     ChildCarePersonQuery groupByNatIdNr() Group by the nat_id_nr column
 * @method     ChildCarePersonQuery groupByReligion() Group by the religion column
 * @method     ChildCarePersonQuery groupByIsFirstReg() Group by the is_first_reg column
 * @method     ChildCarePersonQuery groupByRegion() Group by the region column
 * @method     ChildCarePersonQuery groupByDistrict() Group by the district column
 * @method     ChildCarePersonQuery groupByWard() Group by the ward column
 * @method     ChildCarePersonQuery groupByMotherPid() Group by the mother_pid column
 * @method     ChildCarePersonQuery groupByFatherPid() Group by the father_pid column
 * @method     ChildCarePersonQuery groupByContactPerson() Group by the contact_person column
 * @method     ChildCarePersonQuery groupByContactPid() Group by the contact_pid column
 * @method     ChildCarePersonQuery groupByContactRelation() Group by the contact_relation column
 * @method     ChildCarePersonQuery groupByDeathDate() Group by the death_date column
 * @method     ChildCarePersonQuery groupByDeathEncounterNr() Group by the death_encounter_nr column
 * @method     ChildCarePersonQuery groupByDeathCause() Group by the death_cause column
 * @method     ChildCarePersonQuery groupByDeathCauseCode() Group by the death_cause_code column
 * @method     ChildCarePersonQuery groupByDateUpdate() Group by the date_update column
 * @method     ChildCarePersonQuery groupByStatus() Group by the status column
 * @method     ChildCarePersonQuery groupByHistory() Group by the history column
 * @method     ChildCarePersonQuery groupByAllergy() Group by the allergy column
 * @method     ChildCarePersonQuery groupByModifyId() Group by the modify_id column
 * @method     ChildCarePersonQuery groupByModifyTime() Group by the modify_time column
 * @method     ChildCarePersonQuery groupByCreateId() Group by the create_id column
 * @method     ChildCarePersonQuery groupByCreateTime() Group by the create_time column
 * @method     ChildCarePersonQuery groupByAddrCitytownName() Group by the addr_citytown_name column
 * @method     ChildCarePersonQuery groupByIsTransmit2erp() Group by the is_transmit2ERP column
 * @method     ChildCarePersonQuery groupByInsuranceId() Group by the insurance_ID column
 * @method     ChildCarePersonQuery groupByInsuranceHeadPid() Group by the insurance_head_pid column
 * @method     ChildCarePersonQuery groupByMembershipNr() Group by the membership_nr column
 * @method     ChildCarePersonQuery groupByFormNr() Group by the form_nr column
 * @method     ChildCarePersonQuery groupByNhifNr() Group by the nhif_nr column
 * @method     ChildCarePersonQuery groupByInsuranceSilver() Group by the insurance_silver column
 * @method     ChildCarePersonQuery groupByInsuranceGold() Group by the insurance_gold column
 * @method     ChildCarePersonQuery groupByInsuranceFriedkin() Group by the insurance_friedkin column
 * @method     ChildCarePersonQuery groupByInsuranceSelianStuff() Group by the insurance_selian_stuff column
 * @method     ChildCarePersonQuery groupByInsurancePremiumForAdults() Group by the insurance_premium_for_adults column
 * @method     ChildCarePersonQuery groupByInsurancePremiumForChilds() Group by the insurance_premium_for_childs column
 * @method     ChildCarePersonQuery groupByInsurancePremiumForSenior() Group by the insurance_premium_for_senior column
 * @method     ChildCarePersonQuery groupByInsuranceCopaymentOpd() Group by the insurance_copayment_OPD column
 * @method     ChildCarePersonQuery groupByInsuranceCopaymentIpd() Group by the insurance_copayment_IPD column
 * @method     ChildCarePersonQuery groupByInsuranceCeilingByIndividual() Group by the insurance_ceiling_by_individual column
 * @method     ChildCarePersonQuery groupByInsuranceCeilingByFamily() Group by the insurance_ceiling_by_family column
 * @method     ChildCarePersonQuery groupByInsuranceCeilingAmount() Group by the insurance_ceiling_amount column
 * @method     ChildCarePersonQuery groupByInsuranceCeilingForFamilies() Group by the insurance_ceiling_for_families column
 * @method     ChildCarePersonQuery groupByNationalId() Group by the national_id column
 * @method     ChildCarePersonQuery groupByEmployeeId() Group by the employee_Id column
 *
 * @method     ChildCarePersonQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCarePersonQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCarePersonQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCarePersonQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCarePersonQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCarePersonQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCarePerson findOne(ConnectionInterface $con = null) Return the first ChildCarePerson matching the query
 * @method     ChildCarePerson findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCarePerson matching the query, or a new ChildCarePerson object populated from the query conditions when no match is found
 *
 * @method     ChildCarePerson findOneByPid(int $pid) Return the first ChildCarePerson filtered by the pid column
 * @method     ChildCarePerson findOneBySelianPid(string $selian_pid) Return the first ChildCarePerson filtered by the selian_pid column
 * @method     ChildCarePerson findOneByDateReg(string $date_reg) Return the first ChildCarePerson filtered by the date_reg column
 * @method     ChildCarePerson findOneByNameFirst(string $name_first) Return the first ChildCarePerson filtered by the name_first column
 * @method     ChildCarePerson findOneByName2(string $name_2) Return the first ChildCarePerson filtered by the name_2 column
 * @method     ChildCarePerson findOneByName3(string $name_3) Return the first ChildCarePerson filtered by the name_3 column
 * @method     ChildCarePerson findOneByNameMiddle(string $name_middle) Return the first ChildCarePerson filtered by the name_middle column
 * @method     ChildCarePerson findOneByNameLast(string $name_last) Return the first ChildCarePerson filtered by the name_last column
 * @method     ChildCarePerson findOneByNameMaiden(string $name_maiden) Return the first ChildCarePerson filtered by the name_maiden column
 * @method     ChildCarePerson findOneByNameOthers(string $name_others) Return the first ChildCarePerson filtered by the name_others column
 * @method     ChildCarePerson findOneByEducation(string $education) Return the first ChildCarePerson filtered by the education column
 * @method     ChildCarePerson findOneByDateBirth(string $date_birth) Return the first ChildCarePerson filtered by the date_birth column
 * @method     ChildCarePerson findOneByBloodGroup(string $blood_group) Return the first ChildCarePerson filtered by the blood_group column
 * @method     ChildCarePerson findOneByRh(string $rh) Return the first ChildCarePerson filtered by the rh column
 * @method     ChildCarePerson findOneByAddrStr(string $addr_str) Return the first ChildCarePerson filtered by the addr_str column
 * @method     ChildCarePerson findOneByAddrStrNr(string $addr_str_nr) Return the first ChildCarePerson filtered by the addr_str_nr column
 * @method     ChildCarePerson findOneByAddrZip(string $addr_zip) Return the first ChildCarePerson filtered by the addr_zip column
 * @method     ChildCarePerson findOneByAddrCitytownNr(int $addr_citytown_nr) Return the first ChildCarePerson filtered by the addr_citytown_nr column
 * @method     ChildCarePerson findOneByAddrIsValid(boolean $addr_is_valid) Return the first ChildCarePerson filtered by the addr_is_valid column
 * @method     ChildCarePerson findOneByCitizenship(string $citizenship) Return the first ChildCarePerson filtered by the citizenship column
 * @method     ChildCarePerson findOneByPhone1Code(string $phone_1_code) Return the first ChildCarePerson filtered by the phone_1_code column
 * @method     ChildCarePerson findOneByPhone1Nr(string $phone_1_nr) Return the first ChildCarePerson filtered by the phone_1_nr column
 * @method     ChildCarePerson findOneByPhone2Code(string $phone_2_code) Return the first ChildCarePerson filtered by the phone_2_code column
 * @method     ChildCarePerson findOneByPhone2Nr(string $phone_2_nr) Return the first ChildCarePerson filtered by the phone_2_nr column
 * @method     ChildCarePerson findOneByCellphone1Nr(string $cellphone_1_nr) Return the first ChildCarePerson filtered by the cellphone_1_nr column
 * @method     ChildCarePerson findOneByCellphone2Nr(string $cellphone_2_nr) Return the first ChildCarePerson filtered by the cellphone_2_nr column
 * @method     ChildCarePerson findOneByFax(string $fax) Return the first ChildCarePerson filtered by the fax column
 * @method     ChildCarePerson findOneByEmail(string $email) Return the first ChildCarePerson filtered by the email column
 * @method     ChildCarePerson findOneByCivilStatus(string $civil_status) Return the first ChildCarePerson filtered by the civil_status column
 * @method     ChildCarePerson findOneBySex(string $sex) Return the first ChildCarePerson filtered by the sex column
 * @method     ChildCarePerson findOneByTitle(string $title) Return the first ChildCarePerson filtered by the title column
 * @method     ChildCarePerson findOneByPhoto(resource $photo) Return the first ChildCarePerson filtered by the photo column
 * @method     ChildCarePerson findOneByPhotoFilename(string $photo_filename) Return the first ChildCarePerson filtered by the photo_filename column
 * @method     ChildCarePerson findOneByEthnicOrig(int $ethnic_orig) Return the first ChildCarePerson filtered by the ethnic_orig column
 * @method     ChildCarePerson findOneByOrgId(string $org_id) Return the first ChildCarePerson filtered by the org_id column
 * @method     ChildCarePerson findOneBySssNr(string $sss_nr) Return the first ChildCarePerson filtered by the sss_nr column
 * @method     ChildCarePerson findOneByNatIdNr(string $nat_id_nr) Return the first ChildCarePerson filtered by the nat_id_nr column
 * @method     ChildCarePerson findOneByReligion(string $religion) Return the first ChildCarePerson filtered by the religion column
 * @method     ChildCarePerson findOneByIsFirstReg(int $is_first_reg) Return the first ChildCarePerson filtered by the is_first_reg column
 * @method     ChildCarePerson findOneByRegion(string $region) Return the first ChildCarePerson filtered by the region column
 * @method     ChildCarePerson findOneByDistrict(string $district) Return the first ChildCarePerson filtered by the district column
 * @method     ChildCarePerson findOneByWard(string $ward) Return the first ChildCarePerson filtered by the ward column
 * @method     ChildCarePerson findOneByMotherPid(int $mother_pid) Return the first ChildCarePerson filtered by the mother_pid column
 * @method     ChildCarePerson findOneByFatherPid(int $father_pid) Return the first ChildCarePerson filtered by the father_pid column
 * @method     ChildCarePerson findOneByContactPerson(string $contact_person) Return the first ChildCarePerson filtered by the contact_person column
 * @method     ChildCarePerson findOneByContactPid(int $contact_pid) Return the first ChildCarePerson filtered by the contact_pid column
 * @method     ChildCarePerson findOneByContactRelation(string $contact_relation) Return the first ChildCarePerson filtered by the contact_relation column
 * @method     ChildCarePerson findOneByDeathDate(string $death_date) Return the first ChildCarePerson filtered by the death_date column
 * @method     ChildCarePerson findOneByDeathEncounterNr(int $death_encounter_nr) Return the first ChildCarePerson filtered by the death_encounter_nr column
 * @method     ChildCarePerson findOneByDeathCause(string $death_cause) Return the first ChildCarePerson filtered by the death_cause column
 * @method     ChildCarePerson findOneByDeathCauseCode(string $death_cause_code) Return the first ChildCarePerson filtered by the death_cause_code column
 * @method     ChildCarePerson findOneByDateUpdate(string $date_update) Return the first ChildCarePerson filtered by the date_update column
 * @method     ChildCarePerson findOneByStatus(string $status) Return the first ChildCarePerson filtered by the status column
 * @method     ChildCarePerson findOneByHistory(string $history) Return the first ChildCarePerson filtered by the history column
 * @method     ChildCarePerson findOneByAllergy(string $allergy) Return the first ChildCarePerson filtered by the allergy column
 * @method     ChildCarePerson findOneByModifyId(string $modify_id) Return the first ChildCarePerson filtered by the modify_id column
 * @method     ChildCarePerson findOneByModifyTime(string $modify_time) Return the first ChildCarePerson filtered by the modify_time column
 * @method     ChildCarePerson findOneByCreateId(string $create_id) Return the first ChildCarePerson filtered by the create_id column
 * @method     ChildCarePerson findOneByCreateTime(string $create_time) Return the first ChildCarePerson filtered by the create_time column
 * @method     ChildCarePerson findOneByAddrCitytownName(string $addr_citytown_name) Return the first ChildCarePerson filtered by the addr_citytown_name column
 * @method     ChildCarePerson findOneByIsTransmit2erp(int $is_transmit2ERP) Return the first ChildCarePerson filtered by the is_transmit2ERP column
 * @method     ChildCarePerson findOneByInsuranceId(int $insurance_ID) Return the first ChildCarePerson filtered by the insurance_ID column
 * @method     ChildCarePerson findOneByInsuranceHeadPid(string $insurance_head_pid) Return the first ChildCarePerson filtered by the insurance_head_pid column
 * @method     ChildCarePerson findOneByMembershipNr(string $membership_nr) Return the first ChildCarePerson filtered by the membership_nr column
 * @method     ChildCarePerson findOneByFormNr(string $form_nr) Return the first ChildCarePerson filtered by the form_nr column
 * @method     ChildCarePerson findOneByNhifNr(string $nhif_nr) Return the first ChildCarePerson filtered by the nhif_nr column
 * @method     ChildCarePerson findOneByInsuranceSilver(int $insurance_silver) Return the first ChildCarePerson filtered by the insurance_silver column
 * @method     ChildCarePerson findOneByInsuranceGold(int $insurance_gold) Return the first ChildCarePerson filtered by the insurance_gold column
 * @method     ChildCarePerson findOneByInsuranceFriedkin(int $insurance_friedkin) Return the first ChildCarePerson filtered by the insurance_friedkin column
 * @method     ChildCarePerson findOneByInsuranceSelianStuff(int $insurance_selian_stuff) Return the first ChildCarePerson filtered by the insurance_selian_stuff column
 * @method     ChildCarePerson findOneByInsurancePremiumForAdults(int $insurance_premium_for_adults) Return the first ChildCarePerson filtered by the insurance_premium_for_adults column
 * @method     ChildCarePerson findOneByInsurancePremiumForChilds(int $insurance_premium_for_childs) Return the first ChildCarePerson filtered by the insurance_premium_for_childs column
 * @method     ChildCarePerson findOneByInsurancePremiumForSenior(int $insurance_premium_for_senior) Return the first ChildCarePerson filtered by the insurance_premium_for_senior column
 * @method     ChildCarePerson findOneByInsuranceCopaymentOpd(int $insurance_copayment_OPD) Return the first ChildCarePerson filtered by the insurance_copayment_OPD column
 * @method     ChildCarePerson findOneByInsuranceCopaymentIpd(int $insurance_copayment_IPD) Return the first ChildCarePerson filtered by the insurance_copayment_IPD column
 * @method     ChildCarePerson findOneByInsuranceCeilingByIndividual(int $insurance_ceiling_by_individual) Return the first ChildCarePerson filtered by the insurance_ceiling_by_individual column
 * @method     ChildCarePerson findOneByInsuranceCeilingByFamily(int $insurance_ceiling_by_family) Return the first ChildCarePerson filtered by the insurance_ceiling_by_family column
 * @method     ChildCarePerson findOneByInsuranceCeilingAmount(int $insurance_ceiling_amount) Return the first ChildCarePerson filtered by the insurance_ceiling_amount column
 * @method     ChildCarePerson findOneByInsuranceCeilingForFamilies(int $insurance_ceiling_for_families) Return the first ChildCarePerson filtered by the insurance_ceiling_for_families column
 * @method     ChildCarePerson findOneByNationalId(string $national_id) Return the first ChildCarePerson filtered by the national_id column
 * @method     ChildCarePerson findOneByEmployeeId(string $employee_Id) Return the first ChildCarePerson filtered by the employee_Id column *

 * @method     ChildCarePerson requirePk($key, ConnectionInterface $con = null) Return the ChildCarePerson by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOne(ConnectionInterface $con = null) Return the first ChildCarePerson matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePerson requireOneByPid(int $pid) Return the first ChildCarePerson filtered by the pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneBySelianPid(string $selian_pid) Return the first ChildCarePerson filtered by the selian_pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByDateReg(string $date_reg) Return the first ChildCarePerson filtered by the date_reg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByNameFirst(string $name_first) Return the first ChildCarePerson filtered by the name_first column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByName2(string $name_2) Return the first ChildCarePerson filtered by the name_2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByName3(string $name_3) Return the first ChildCarePerson filtered by the name_3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByNameMiddle(string $name_middle) Return the first ChildCarePerson filtered by the name_middle column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByNameLast(string $name_last) Return the first ChildCarePerson filtered by the name_last column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByNameMaiden(string $name_maiden) Return the first ChildCarePerson filtered by the name_maiden column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByNameOthers(string $name_others) Return the first ChildCarePerson filtered by the name_others column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByEducation(string $education) Return the first ChildCarePerson filtered by the education column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByDateBirth(string $date_birth) Return the first ChildCarePerson filtered by the date_birth column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByBloodGroup(string $blood_group) Return the first ChildCarePerson filtered by the blood_group column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByRh(string $rh) Return the first ChildCarePerson filtered by the rh column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByAddrStr(string $addr_str) Return the first ChildCarePerson filtered by the addr_str column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByAddrStrNr(string $addr_str_nr) Return the first ChildCarePerson filtered by the addr_str_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByAddrZip(string $addr_zip) Return the first ChildCarePerson filtered by the addr_zip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByAddrCitytownNr(int $addr_citytown_nr) Return the first ChildCarePerson filtered by the addr_citytown_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByAddrIsValid(boolean $addr_is_valid) Return the first ChildCarePerson filtered by the addr_is_valid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByCitizenship(string $citizenship) Return the first ChildCarePerson filtered by the citizenship column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByPhone1Code(string $phone_1_code) Return the first ChildCarePerson filtered by the phone_1_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByPhone1Nr(string $phone_1_nr) Return the first ChildCarePerson filtered by the phone_1_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByPhone2Code(string $phone_2_code) Return the first ChildCarePerson filtered by the phone_2_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByPhone2Nr(string $phone_2_nr) Return the first ChildCarePerson filtered by the phone_2_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByCellphone1Nr(string $cellphone_1_nr) Return the first ChildCarePerson filtered by the cellphone_1_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByCellphone2Nr(string $cellphone_2_nr) Return the first ChildCarePerson filtered by the cellphone_2_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByFax(string $fax) Return the first ChildCarePerson filtered by the fax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByEmail(string $email) Return the first ChildCarePerson filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByCivilStatus(string $civil_status) Return the first ChildCarePerson filtered by the civil_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneBySex(string $sex) Return the first ChildCarePerson filtered by the sex column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByTitle(string $title) Return the first ChildCarePerson filtered by the title column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByPhoto(resource $photo) Return the first ChildCarePerson filtered by the photo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByPhotoFilename(string $photo_filename) Return the first ChildCarePerson filtered by the photo_filename column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByEthnicOrig(int $ethnic_orig) Return the first ChildCarePerson filtered by the ethnic_orig column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByOrgId(string $org_id) Return the first ChildCarePerson filtered by the org_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneBySssNr(string $sss_nr) Return the first ChildCarePerson filtered by the sss_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByNatIdNr(string $nat_id_nr) Return the first ChildCarePerson filtered by the nat_id_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByReligion(string $religion) Return the first ChildCarePerson filtered by the religion column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByIsFirstReg(int $is_first_reg) Return the first ChildCarePerson filtered by the is_first_reg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByRegion(string $region) Return the first ChildCarePerson filtered by the region column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByDistrict(string $district) Return the first ChildCarePerson filtered by the district column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByWard(string $ward) Return the first ChildCarePerson filtered by the ward column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByMotherPid(int $mother_pid) Return the first ChildCarePerson filtered by the mother_pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByFatherPid(int $father_pid) Return the first ChildCarePerson filtered by the father_pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByContactPerson(string $contact_person) Return the first ChildCarePerson filtered by the contact_person column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByContactPid(int $contact_pid) Return the first ChildCarePerson filtered by the contact_pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByContactRelation(string $contact_relation) Return the first ChildCarePerson filtered by the contact_relation column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByDeathDate(string $death_date) Return the first ChildCarePerson filtered by the death_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByDeathEncounterNr(int $death_encounter_nr) Return the first ChildCarePerson filtered by the death_encounter_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByDeathCause(string $death_cause) Return the first ChildCarePerson filtered by the death_cause column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByDeathCauseCode(string $death_cause_code) Return the first ChildCarePerson filtered by the death_cause_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByDateUpdate(string $date_update) Return the first ChildCarePerson filtered by the date_update column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByStatus(string $status) Return the first ChildCarePerson filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByHistory(string $history) Return the first ChildCarePerson filtered by the history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByAllergy(string $allergy) Return the first ChildCarePerson filtered by the allergy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByModifyId(string $modify_id) Return the first ChildCarePerson filtered by the modify_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByModifyTime(string $modify_time) Return the first ChildCarePerson filtered by the modify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByCreateId(string $create_id) Return the first ChildCarePerson filtered by the create_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByCreateTime(string $create_time) Return the first ChildCarePerson filtered by the create_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByAddrCitytownName(string $addr_citytown_name) Return the first ChildCarePerson filtered by the addr_citytown_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByIsTransmit2erp(int $is_transmit2ERP) Return the first ChildCarePerson filtered by the is_transmit2ERP column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsuranceId(int $insurance_ID) Return the first ChildCarePerson filtered by the insurance_ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsuranceHeadPid(string $insurance_head_pid) Return the first ChildCarePerson filtered by the insurance_head_pid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByMembershipNr(string $membership_nr) Return the first ChildCarePerson filtered by the membership_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByFormNr(string $form_nr) Return the first ChildCarePerson filtered by the form_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByNhifNr(string $nhif_nr) Return the first ChildCarePerson filtered by the nhif_nr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsuranceSilver(int $insurance_silver) Return the first ChildCarePerson filtered by the insurance_silver column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsuranceGold(int $insurance_gold) Return the first ChildCarePerson filtered by the insurance_gold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsuranceFriedkin(int $insurance_friedkin) Return the first ChildCarePerson filtered by the insurance_friedkin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsuranceSelianStuff(int $insurance_selian_stuff) Return the first ChildCarePerson filtered by the insurance_selian_stuff column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsurancePremiumForAdults(int $insurance_premium_for_adults) Return the first ChildCarePerson filtered by the insurance_premium_for_adults column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsurancePremiumForChilds(int $insurance_premium_for_childs) Return the first ChildCarePerson filtered by the insurance_premium_for_childs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsurancePremiumForSenior(int $insurance_premium_for_senior) Return the first ChildCarePerson filtered by the insurance_premium_for_senior column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsuranceCopaymentOpd(int $insurance_copayment_OPD) Return the first ChildCarePerson filtered by the insurance_copayment_OPD column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsuranceCopaymentIpd(int $insurance_copayment_IPD) Return the first ChildCarePerson filtered by the insurance_copayment_IPD column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsuranceCeilingByIndividual(int $insurance_ceiling_by_individual) Return the first ChildCarePerson filtered by the insurance_ceiling_by_individual column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsuranceCeilingByFamily(int $insurance_ceiling_by_family) Return the first ChildCarePerson filtered by the insurance_ceiling_by_family column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsuranceCeilingAmount(int $insurance_ceiling_amount) Return the first ChildCarePerson filtered by the insurance_ceiling_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByInsuranceCeilingForFamilies(int $insurance_ceiling_for_families) Return the first ChildCarePerson filtered by the insurance_ceiling_for_families column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByNationalId(string $national_id) Return the first ChildCarePerson filtered by the national_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCarePerson requireOneByEmployeeId(string $employee_Id) Return the first ChildCarePerson filtered by the employee_Id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCarePerson[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCarePerson objects based on current ModelCriteria
 * @method     ChildCarePerson[]|ObjectCollection findByPid(int $pid) Return ChildCarePerson objects filtered by the pid column
 * @method     ChildCarePerson[]|ObjectCollection findBySelianPid(string $selian_pid) Return ChildCarePerson objects filtered by the selian_pid column
 * @method     ChildCarePerson[]|ObjectCollection findByDateReg(string $date_reg) Return ChildCarePerson objects filtered by the date_reg column
 * @method     ChildCarePerson[]|ObjectCollection findByNameFirst(string $name_first) Return ChildCarePerson objects filtered by the name_first column
 * @method     ChildCarePerson[]|ObjectCollection findByName2(string $name_2) Return ChildCarePerson objects filtered by the name_2 column
 * @method     ChildCarePerson[]|ObjectCollection findByName3(string $name_3) Return ChildCarePerson objects filtered by the name_3 column
 * @method     ChildCarePerson[]|ObjectCollection findByNameMiddle(string $name_middle) Return ChildCarePerson objects filtered by the name_middle column
 * @method     ChildCarePerson[]|ObjectCollection findByNameLast(string $name_last) Return ChildCarePerson objects filtered by the name_last column
 * @method     ChildCarePerson[]|ObjectCollection findByNameMaiden(string $name_maiden) Return ChildCarePerson objects filtered by the name_maiden column
 * @method     ChildCarePerson[]|ObjectCollection findByNameOthers(string $name_others) Return ChildCarePerson objects filtered by the name_others column
 * @method     ChildCarePerson[]|ObjectCollection findByEducation(string $education) Return ChildCarePerson objects filtered by the education column
 * @method     ChildCarePerson[]|ObjectCollection findByDateBirth(string $date_birth) Return ChildCarePerson objects filtered by the date_birth column
 * @method     ChildCarePerson[]|ObjectCollection findByBloodGroup(string $blood_group) Return ChildCarePerson objects filtered by the blood_group column
 * @method     ChildCarePerson[]|ObjectCollection findByRh(string $rh) Return ChildCarePerson objects filtered by the rh column
 * @method     ChildCarePerson[]|ObjectCollection findByAddrStr(string $addr_str) Return ChildCarePerson objects filtered by the addr_str column
 * @method     ChildCarePerson[]|ObjectCollection findByAddrStrNr(string $addr_str_nr) Return ChildCarePerson objects filtered by the addr_str_nr column
 * @method     ChildCarePerson[]|ObjectCollection findByAddrZip(string $addr_zip) Return ChildCarePerson objects filtered by the addr_zip column
 * @method     ChildCarePerson[]|ObjectCollection findByAddrCitytownNr(int $addr_citytown_nr) Return ChildCarePerson objects filtered by the addr_citytown_nr column
 * @method     ChildCarePerson[]|ObjectCollection findByAddrIsValid(boolean $addr_is_valid) Return ChildCarePerson objects filtered by the addr_is_valid column
 * @method     ChildCarePerson[]|ObjectCollection findByCitizenship(string $citizenship) Return ChildCarePerson objects filtered by the citizenship column
 * @method     ChildCarePerson[]|ObjectCollection findByPhone1Code(string $phone_1_code) Return ChildCarePerson objects filtered by the phone_1_code column
 * @method     ChildCarePerson[]|ObjectCollection findByPhone1Nr(string $phone_1_nr) Return ChildCarePerson objects filtered by the phone_1_nr column
 * @method     ChildCarePerson[]|ObjectCollection findByPhone2Code(string $phone_2_code) Return ChildCarePerson objects filtered by the phone_2_code column
 * @method     ChildCarePerson[]|ObjectCollection findByPhone2Nr(string $phone_2_nr) Return ChildCarePerson objects filtered by the phone_2_nr column
 * @method     ChildCarePerson[]|ObjectCollection findByCellphone1Nr(string $cellphone_1_nr) Return ChildCarePerson objects filtered by the cellphone_1_nr column
 * @method     ChildCarePerson[]|ObjectCollection findByCellphone2Nr(string $cellphone_2_nr) Return ChildCarePerson objects filtered by the cellphone_2_nr column
 * @method     ChildCarePerson[]|ObjectCollection findByFax(string $fax) Return ChildCarePerson objects filtered by the fax column
 * @method     ChildCarePerson[]|ObjectCollection findByEmail(string $email) Return ChildCarePerson objects filtered by the email column
 * @method     ChildCarePerson[]|ObjectCollection findByCivilStatus(string $civil_status) Return ChildCarePerson objects filtered by the civil_status column
 * @method     ChildCarePerson[]|ObjectCollection findBySex(string $sex) Return ChildCarePerson objects filtered by the sex column
 * @method     ChildCarePerson[]|ObjectCollection findByTitle(string $title) Return ChildCarePerson objects filtered by the title column
 * @method     ChildCarePerson[]|ObjectCollection findByPhoto(resource $photo) Return ChildCarePerson objects filtered by the photo column
 * @method     ChildCarePerson[]|ObjectCollection findByPhotoFilename(string $photo_filename) Return ChildCarePerson objects filtered by the photo_filename column
 * @method     ChildCarePerson[]|ObjectCollection findByEthnicOrig(int $ethnic_orig) Return ChildCarePerson objects filtered by the ethnic_orig column
 * @method     ChildCarePerson[]|ObjectCollection findByOrgId(string $org_id) Return ChildCarePerson objects filtered by the org_id column
 * @method     ChildCarePerson[]|ObjectCollection findBySssNr(string $sss_nr) Return ChildCarePerson objects filtered by the sss_nr column
 * @method     ChildCarePerson[]|ObjectCollection findByNatIdNr(string $nat_id_nr) Return ChildCarePerson objects filtered by the nat_id_nr column
 * @method     ChildCarePerson[]|ObjectCollection findByReligion(string $religion) Return ChildCarePerson objects filtered by the religion column
 * @method     ChildCarePerson[]|ObjectCollection findByIsFirstReg(int $is_first_reg) Return ChildCarePerson objects filtered by the is_first_reg column
 * @method     ChildCarePerson[]|ObjectCollection findByRegion(string $region) Return ChildCarePerson objects filtered by the region column
 * @method     ChildCarePerson[]|ObjectCollection findByDistrict(string $district) Return ChildCarePerson objects filtered by the district column
 * @method     ChildCarePerson[]|ObjectCollection findByWard(string $ward) Return ChildCarePerson objects filtered by the ward column
 * @method     ChildCarePerson[]|ObjectCollection findByMotherPid(int $mother_pid) Return ChildCarePerson objects filtered by the mother_pid column
 * @method     ChildCarePerson[]|ObjectCollection findByFatherPid(int $father_pid) Return ChildCarePerson objects filtered by the father_pid column
 * @method     ChildCarePerson[]|ObjectCollection findByContactPerson(string $contact_person) Return ChildCarePerson objects filtered by the contact_person column
 * @method     ChildCarePerson[]|ObjectCollection findByContactPid(int $contact_pid) Return ChildCarePerson objects filtered by the contact_pid column
 * @method     ChildCarePerson[]|ObjectCollection findByContactRelation(string $contact_relation) Return ChildCarePerson objects filtered by the contact_relation column
 * @method     ChildCarePerson[]|ObjectCollection findByDeathDate(string $death_date) Return ChildCarePerson objects filtered by the death_date column
 * @method     ChildCarePerson[]|ObjectCollection findByDeathEncounterNr(int $death_encounter_nr) Return ChildCarePerson objects filtered by the death_encounter_nr column
 * @method     ChildCarePerson[]|ObjectCollection findByDeathCause(string $death_cause) Return ChildCarePerson objects filtered by the death_cause column
 * @method     ChildCarePerson[]|ObjectCollection findByDeathCauseCode(string $death_cause_code) Return ChildCarePerson objects filtered by the death_cause_code column
 * @method     ChildCarePerson[]|ObjectCollection findByDateUpdate(string $date_update) Return ChildCarePerson objects filtered by the date_update column
 * @method     ChildCarePerson[]|ObjectCollection findByStatus(string $status) Return ChildCarePerson objects filtered by the status column
 * @method     ChildCarePerson[]|ObjectCollection findByHistory(string $history) Return ChildCarePerson objects filtered by the history column
 * @method     ChildCarePerson[]|ObjectCollection findByAllergy(string $allergy) Return ChildCarePerson objects filtered by the allergy column
 * @method     ChildCarePerson[]|ObjectCollection findByModifyId(string $modify_id) Return ChildCarePerson objects filtered by the modify_id column
 * @method     ChildCarePerson[]|ObjectCollection findByModifyTime(string $modify_time) Return ChildCarePerson objects filtered by the modify_time column
 * @method     ChildCarePerson[]|ObjectCollection findByCreateId(string $create_id) Return ChildCarePerson objects filtered by the create_id column
 * @method     ChildCarePerson[]|ObjectCollection findByCreateTime(string $create_time) Return ChildCarePerson objects filtered by the create_time column
 * @method     ChildCarePerson[]|ObjectCollection findByAddrCitytownName(string $addr_citytown_name) Return ChildCarePerson objects filtered by the addr_citytown_name column
 * @method     ChildCarePerson[]|ObjectCollection findByIsTransmit2erp(int $is_transmit2ERP) Return ChildCarePerson objects filtered by the is_transmit2ERP column
 * @method     ChildCarePerson[]|ObjectCollection findByInsuranceId(int $insurance_ID) Return ChildCarePerson objects filtered by the insurance_ID column
 * @method     ChildCarePerson[]|ObjectCollection findByInsuranceHeadPid(string $insurance_head_pid) Return ChildCarePerson objects filtered by the insurance_head_pid column
 * @method     ChildCarePerson[]|ObjectCollection findByMembershipNr(string $membership_nr) Return ChildCarePerson objects filtered by the membership_nr column
 * @method     ChildCarePerson[]|ObjectCollection findByFormNr(string $form_nr) Return ChildCarePerson objects filtered by the form_nr column
 * @method     ChildCarePerson[]|ObjectCollection findByNhifNr(string $nhif_nr) Return ChildCarePerson objects filtered by the nhif_nr column
 * @method     ChildCarePerson[]|ObjectCollection findByInsuranceSilver(int $insurance_silver) Return ChildCarePerson objects filtered by the insurance_silver column
 * @method     ChildCarePerson[]|ObjectCollection findByInsuranceGold(int $insurance_gold) Return ChildCarePerson objects filtered by the insurance_gold column
 * @method     ChildCarePerson[]|ObjectCollection findByInsuranceFriedkin(int $insurance_friedkin) Return ChildCarePerson objects filtered by the insurance_friedkin column
 * @method     ChildCarePerson[]|ObjectCollection findByInsuranceSelianStuff(int $insurance_selian_stuff) Return ChildCarePerson objects filtered by the insurance_selian_stuff column
 * @method     ChildCarePerson[]|ObjectCollection findByInsurancePremiumForAdults(int $insurance_premium_for_adults) Return ChildCarePerson objects filtered by the insurance_premium_for_adults column
 * @method     ChildCarePerson[]|ObjectCollection findByInsurancePremiumForChilds(int $insurance_premium_for_childs) Return ChildCarePerson objects filtered by the insurance_premium_for_childs column
 * @method     ChildCarePerson[]|ObjectCollection findByInsurancePremiumForSenior(int $insurance_premium_for_senior) Return ChildCarePerson objects filtered by the insurance_premium_for_senior column
 * @method     ChildCarePerson[]|ObjectCollection findByInsuranceCopaymentOpd(int $insurance_copayment_OPD) Return ChildCarePerson objects filtered by the insurance_copayment_OPD column
 * @method     ChildCarePerson[]|ObjectCollection findByInsuranceCopaymentIpd(int $insurance_copayment_IPD) Return ChildCarePerson objects filtered by the insurance_copayment_IPD column
 * @method     ChildCarePerson[]|ObjectCollection findByInsuranceCeilingByIndividual(int $insurance_ceiling_by_individual) Return ChildCarePerson objects filtered by the insurance_ceiling_by_individual column
 * @method     ChildCarePerson[]|ObjectCollection findByInsuranceCeilingByFamily(int $insurance_ceiling_by_family) Return ChildCarePerson objects filtered by the insurance_ceiling_by_family column
 * @method     ChildCarePerson[]|ObjectCollection findByInsuranceCeilingAmount(int $insurance_ceiling_amount) Return ChildCarePerson objects filtered by the insurance_ceiling_amount column
 * @method     ChildCarePerson[]|ObjectCollection findByInsuranceCeilingForFamilies(int $insurance_ceiling_for_families) Return ChildCarePerson objects filtered by the insurance_ceiling_for_families column
 * @method     ChildCarePerson[]|ObjectCollection findByNationalId(string $national_id) Return ChildCarePerson objects filtered by the national_id column
 * @method     ChildCarePerson[]|ObjectCollection findByEmployeeId(string $employee_Id) Return ChildCarePerson objects filtered by the employee_Id column
 * @method     ChildCarePerson[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CarePersonQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CareMd\CareMd\Base\CarePersonQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CareMd\\CareMd\\CarePerson', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCarePersonQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCarePersonQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCarePersonQuery) {
            return $criteria;
        }
        $query = new ChildCarePersonQuery();
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
     * @return ChildCarePerson|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CarePersonTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CarePersonTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCarePerson A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT pid, selian_pid, date_reg, name_first, name_2, name_3, name_middle, name_last, name_maiden, name_others, education, date_birth, blood_group, rh, addr_str, addr_str_nr, addr_zip, addr_citytown_nr, addr_is_valid, citizenship, phone_1_code, phone_1_nr, phone_2_code, phone_2_nr, cellphone_1_nr, cellphone_2_nr, fax, email, civil_status, sex, title, photo, photo_filename, ethnic_orig, org_id, sss_nr, nat_id_nr, religion, is_first_reg, region, district, ward, mother_pid, father_pid, contact_person, contact_pid, contact_relation, death_date, death_encounter_nr, death_cause, death_cause_code, date_update, status, history, allergy, modify_id, modify_time, create_id, create_time, addr_citytown_name, is_transmit2ERP, insurance_ID, insurance_head_pid, membership_nr, form_nr, nhif_nr, insurance_silver, insurance_gold, insurance_friedkin, insurance_selian_stuff, insurance_premium_for_adults, insurance_premium_for_childs, insurance_premium_for_senior, insurance_copayment_OPD, insurance_copayment_IPD, insurance_ceiling_by_individual, insurance_ceiling_by_family, insurance_ceiling_amount, insurance_ceiling_for_families, national_id, employee_Id FROM care_person WHERE pid = :p0';
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
            /** @var ChildCarePerson $obj */
            $obj = new ChildCarePerson();
            $obj->hydrate($row);
            CarePersonTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCarePerson|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CarePersonTableMap::COL_PID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CarePersonTableMap::COL_PID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the pid column
     *
     * Example usage:
     * <code>
     * $query->filterByPid(1234); // WHERE pid = 1234
     * $query->filterByPid(array(12, 34)); // WHERE pid IN (12, 34)
     * $query->filterByPid(array('min' => 12)); // WHERE pid > 12
     * </code>
     *
     * @param     mixed $pid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_PID, $pid, $comparison);
    }

    /**
     * Filter the query on the selian_pid column
     *
     * Example usage:
     * <code>
     * $query->filterBySelianPid(1234); // WHERE selian_pid = 1234
     * $query->filterBySelianPid(array(12, 34)); // WHERE selian_pid IN (12, 34)
     * $query->filterBySelianPid(array('min' => 12)); // WHERE selian_pid > 12
     * </code>
     *
     * @param     mixed $selianPid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterBySelianPid($selianPid = null, $comparison = null)
    {
        if (is_array($selianPid)) {
            $useMinMax = false;
            if (isset($selianPid['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_SELIAN_PID, $selianPid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($selianPid['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_SELIAN_PID, $selianPid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_SELIAN_PID, $selianPid, $comparison);
    }

    /**
     * Filter the query on the date_reg column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReg('2011-03-14'); // WHERE date_reg = '2011-03-14'
     * $query->filterByDateReg('now'); // WHERE date_reg = '2011-03-14'
     * $query->filterByDateReg(array('max' => 'yesterday')); // WHERE date_reg > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateReg The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByDateReg($dateReg = null, $comparison = null)
    {
        if (is_array($dateReg)) {
            $useMinMax = false;
            if (isset($dateReg['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_DATE_REG, $dateReg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateReg['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_DATE_REG, $dateReg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_DATE_REG, $dateReg, $comparison);
    }

    /**
     * Filter the query on the name_first column
     *
     * Example usage:
     * <code>
     * $query->filterByNameFirst('fooValue');   // WHERE name_first = 'fooValue'
     * $query->filterByNameFirst('%fooValue%', Criteria::LIKE); // WHERE name_first LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameFirst The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByNameFirst($nameFirst = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameFirst)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_NAME_FIRST, $nameFirst, $comparison);
    }

    /**
     * Filter the query on the name_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByName2('fooValue');   // WHERE name_2 = 'fooValue'
     * $query->filterByName2('%fooValue%', Criteria::LIKE); // WHERE name_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByName2($name2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_NAME_2, $name2, $comparison);
    }

    /**
     * Filter the query on the name_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByName3('fooValue');   // WHERE name_3 = 'fooValue'
     * $query->filterByName3('%fooValue%', Criteria::LIKE); // WHERE name_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByName3($name3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_NAME_3, $name3, $comparison);
    }

    /**
     * Filter the query on the name_middle column
     *
     * Example usage:
     * <code>
     * $query->filterByNameMiddle('fooValue');   // WHERE name_middle = 'fooValue'
     * $query->filterByNameMiddle('%fooValue%', Criteria::LIKE); // WHERE name_middle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameMiddle The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByNameMiddle($nameMiddle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameMiddle)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_NAME_MIDDLE, $nameMiddle, $comparison);
    }

    /**
     * Filter the query on the name_last column
     *
     * Example usage:
     * <code>
     * $query->filterByNameLast('fooValue');   // WHERE name_last = 'fooValue'
     * $query->filterByNameLast('%fooValue%', Criteria::LIKE); // WHERE name_last LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameLast The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByNameLast($nameLast = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameLast)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_NAME_LAST, $nameLast, $comparison);
    }

    /**
     * Filter the query on the name_maiden column
     *
     * Example usage:
     * <code>
     * $query->filterByNameMaiden('fooValue');   // WHERE name_maiden = 'fooValue'
     * $query->filterByNameMaiden('%fooValue%', Criteria::LIKE); // WHERE name_maiden LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameMaiden The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByNameMaiden($nameMaiden = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameMaiden)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_NAME_MAIDEN, $nameMaiden, $comparison);
    }

    /**
     * Filter the query on the name_others column
     *
     * Example usage:
     * <code>
     * $query->filterByNameOthers('fooValue');   // WHERE name_others = 'fooValue'
     * $query->filterByNameOthers('%fooValue%', Criteria::LIKE); // WHERE name_others LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameOthers The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByNameOthers($nameOthers = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameOthers)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_NAME_OTHERS, $nameOthers, $comparison);
    }

    /**
     * Filter the query on the education column
     *
     * Example usage:
     * <code>
     * $query->filterByEducation('fooValue');   // WHERE education = 'fooValue'
     * $query->filterByEducation('%fooValue%', Criteria::LIKE); // WHERE education LIKE '%fooValue%'
     * </code>
     *
     * @param     string $education The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByEducation($education = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($education)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_EDUCATION, $education, $comparison);
    }

    /**
     * Filter the query on the date_birth column
     *
     * Example usage:
     * <code>
     * $query->filterByDateBirth('2011-03-14'); // WHERE date_birth = '2011-03-14'
     * $query->filterByDateBirth('now'); // WHERE date_birth = '2011-03-14'
     * $query->filterByDateBirth(array('max' => 'yesterday')); // WHERE date_birth > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateBirth The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByDateBirth($dateBirth = null, $comparison = null)
    {
        if (is_array($dateBirth)) {
            $useMinMax = false;
            if (isset($dateBirth['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_DATE_BIRTH, $dateBirth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateBirth['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_DATE_BIRTH, $dateBirth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_DATE_BIRTH, $dateBirth, $comparison);
    }

    /**
     * Filter the query on the blood_group column
     *
     * Example usage:
     * <code>
     * $query->filterByBloodGroup('fooValue');   // WHERE blood_group = 'fooValue'
     * $query->filterByBloodGroup('%fooValue%', Criteria::LIKE); // WHERE blood_group LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloodGroup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByBloodGroup($bloodGroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloodGroup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_BLOOD_GROUP, $bloodGroup, $comparison);
    }

    /**
     * Filter the query on the rh column
     *
     * Example usage:
     * <code>
     * $query->filterByRh('fooValue');   // WHERE rh = 'fooValue'
     * $query->filterByRh('%fooValue%', Criteria::LIKE); // WHERE rh LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rh The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByRh($rh = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rh)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_RH, $rh, $comparison);
    }

    /**
     * Filter the query on the addr_str column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrStr('fooValue');   // WHERE addr_str = 'fooValue'
     * $query->filterByAddrStr('%fooValue%', Criteria::LIKE); // WHERE addr_str LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrStr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByAddrStr($addrStr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrStr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_ADDR_STR, $addrStr, $comparison);
    }

    /**
     * Filter the query on the addr_str_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrStrNr('fooValue');   // WHERE addr_str_nr = 'fooValue'
     * $query->filterByAddrStrNr('%fooValue%', Criteria::LIKE); // WHERE addr_str_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrStrNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByAddrStrNr($addrStrNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrStrNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_ADDR_STR_NR, $addrStrNr, $comparison);
    }

    /**
     * Filter the query on the addr_zip column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrZip('fooValue');   // WHERE addr_zip = 'fooValue'
     * $query->filterByAddrZip('%fooValue%', Criteria::LIKE); // WHERE addr_zip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrZip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByAddrZip($addrZip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrZip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_ADDR_ZIP, $addrZip, $comparison);
    }

    /**
     * Filter the query on the addr_citytown_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrCitytownNr(1234); // WHERE addr_citytown_nr = 1234
     * $query->filterByAddrCitytownNr(array(12, 34)); // WHERE addr_citytown_nr IN (12, 34)
     * $query->filterByAddrCitytownNr(array('min' => 12)); // WHERE addr_citytown_nr > 12
     * </code>
     *
     * @param     mixed $addrCitytownNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByAddrCitytownNr($addrCitytownNr = null, $comparison = null)
    {
        if (is_array($addrCitytownNr)) {
            $useMinMax = false;
            if (isset($addrCitytownNr['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_ADDR_CITYTOWN_NR, $addrCitytownNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addrCitytownNr['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_ADDR_CITYTOWN_NR, $addrCitytownNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_ADDR_CITYTOWN_NR, $addrCitytownNr, $comparison);
    }

    /**
     * Filter the query on the addr_is_valid column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrIsValid(true); // WHERE addr_is_valid = true
     * $query->filterByAddrIsValid('yes'); // WHERE addr_is_valid = true
     * </code>
     *
     * @param     boolean|string $addrIsValid The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByAddrIsValid($addrIsValid = null, $comparison = null)
    {
        if (is_string($addrIsValid)) {
            $addrIsValid = in_array(strtolower($addrIsValid), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_ADDR_IS_VALID, $addrIsValid, $comparison);
    }

    /**
     * Filter the query on the citizenship column
     *
     * Example usage:
     * <code>
     * $query->filterByCitizenship('fooValue');   // WHERE citizenship = 'fooValue'
     * $query->filterByCitizenship('%fooValue%', Criteria::LIKE); // WHERE citizenship LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citizenship The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByCitizenship($citizenship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citizenship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_CITIZENSHIP, $citizenship, $comparison);
    }

    /**
     * Filter the query on the phone_1_code column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone1Code('fooValue');   // WHERE phone_1_code = 'fooValue'
     * $query->filterByPhone1Code('%fooValue%', Criteria::LIKE); // WHERE phone_1_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone1Code The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByPhone1Code($phone1Code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone1Code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_PHONE_1_CODE, $phone1Code, $comparison);
    }

    /**
     * Filter the query on the phone_1_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone1Nr('fooValue');   // WHERE phone_1_nr = 'fooValue'
     * $query->filterByPhone1Nr('%fooValue%', Criteria::LIKE); // WHERE phone_1_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone1Nr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByPhone1Nr($phone1Nr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone1Nr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_PHONE_1_NR, $phone1Nr, $comparison);
    }

    /**
     * Filter the query on the phone_2_code column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone2Code('fooValue');   // WHERE phone_2_code = 'fooValue'
     * $query->filterByPhone2Code('%fooValue%', Criteria::LIKE); // WHERE phone_2_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone2Code The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByPhone2Code($phone2Code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone2Code)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_PHONE_2_CODE, $phone2Code, $comparison);
    }

    /**
     * Filter the query on the phone_2_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone2Nr('fooValue');   // WHERE phone_2_nr = 'fooValue'
     * $query->filterByPhone2Nr('%fooValue%', Criteria::LIKE); // WHERE phone_2_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone2Nr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByPhone2Nr($phone2Nr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone2Nr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_PHONE_2_NR, $phone2Nr, $comparison);
    }

    /**
     * Filter the query on the cellphone_1_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByCellphone1Nr('fooValue');   // WHERE cellphone_1_nr = 'fooValue'
     * $query->filterByCellphone1Nr('%fooValue%', Criteria::LIKE); // WHERE cellphone_1_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cellphone1Nr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByCellphone1Nr($cellphone1Nr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cellphone1Nr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_CELLPHONE_1_NR, $cellphone1Nr, $comparison);
    }

    /**
     * Filter the query on the cellphone_2_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByCellphone2Nr('fooValue');   // WHERE cellphone_2_nr = 'fooValue'
     * $query->filterByCellphone2Nr('%fooValue%', Criteria::LIKE); // WHERE cellphone_2_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cellphone2Nr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByCellphone2Nr($cellphone2Nr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cellphone2Nr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_CELLPHONE_2_NR, $cellphone2Nr, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%', Criteria::LIKE); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the civil_status column
     *
     * Example usage:
     * <code>
     * $query->filterByCivilStatus('fooValue');   // WHERE civil_status = 'fooValue'
     * $query->filterByCivilStatus('%fooValue%', Criteria::LIKE); // WHERE civil_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $civilStatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByCivilStatus($civilStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($civilStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_CIVIL_STATUS, $civilStatus, $comparison);
    }

    /**
     * Filter the query on the sex column
     *
     * Example usage:
     * <code>
     * $query->filterBySex('fooValue');   // WHERE sex = 'fooValue'
     * $query->filterBySex('%fooValue%', Criteria::LIKE); // WHERE sex LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sex The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterBySex($sex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sex)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_SEX, $sex, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%', Criteria::LIKE); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the photo column
     *
     * @param     mixed $photo The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByPhoto($photo = null, $comparison = null)
    {

        return $this->addUsingAlias(CarePersonTableMap::COL_PHOTO, $photo, $comparison);
    }

    /**
     * Filter the query on the photo_filename column
     *
     * Example usage:
     * <code>
     * $query->filterByPhotoFilename('fooValue');   // WHERE photo_filename = 'fooValue'
     * $query->filterByPhotoFilename('%fooValue%', Criteria::LIKE); // WHERE photo_filename LIKE '%fooValue%'
     * </code>
     *
     * @param     string $photoFilename The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByPhotoFilename($photoFilename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($photoFilename)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_PHOTO_FILENAME, $photoFilename, $comparison);
    }

    /**
     * Filter the query on the ethnic_orig column
     *
     * Example usage:
     * <code>
     * $query->filterByEthnicOrig(1234); // WHERE ethnic_orig = 1234
     * $query->filterByEthnicOrig(array(12, 34)); // WHERE ethnic_orig IN (12, 34)
     * $query->filterByEthnicOrig(array('min' => 12)); // WHERE ethnic_orig > 12
     * </code>
     *
     * @param     mixed $ethnicOrig The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByEthnicOrig($ethnicOrig = null, $comparison = null)
    {
        if (is_array($ethnicOrig)) {
            $useMinMax = false;
            if (isset($ethnicOrig['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_ETHNIC_ORIG, $ethnicOrig['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ethnicOrig['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_ETHNIC_ORIG, $ethnicOrig['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_ETHNIC_ORIG, $ethnicOrig, $comparison);
    }

    /**
     * Filter the query on the org_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOrgId('fooValue');   // WHERE org_id = 'fooValue'
     * $query->filterByOrgId('%fooValue%', Criteria::LIKE); // WHERE org_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $orgId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByOrgId($orgId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($orgId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_ORG_ID, $orgId, $comparison);
    }

    /**
     * Filter the query on the sss_nr column
     *
     * Example usage:
     * <code>
     * $query->filterBySssNr('fooValue');   // WHERE sss_nr = 'fooValue'
     * $query->filterBySssNr('%fooValue%', Criteria::LIKE); // WHERE sss_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sssNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterBySssNr($sssNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sssNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_SSS_NR, $sssNr, $comparison);
    }

    /**
     * Filter the query on the nat_id_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByNatIdNr('fooValue');   // WHERE nat_id_nr = 'fooValue'
     * $query->filterByNatIdNr('%fooValue%', Criteria::LIKE); // WHERE nat_id_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $natIdNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByNatIdNr($natIdNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($natIdNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_NAT_ID_NR, $natIdNr, $comparison);
    }

    /**
     * Filter the query on the religion column
     *
     * Example usage:
     * <code>
     * $query->filterByReligion('fooValue');   // WHERE religion = 'fooValue'
     * $query->filterByReligion('%fooValue%', Criteria::LIKE); // WHERE religion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $religion The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByReligion($religion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($religion)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_RELIGION, $religion, $comparison);
    }

    /**
     * Filter the query on the is_first_reg column
     *
     * Example usage:
     * <code>
     * $query->filterByIsFirstReg(1234); // WHERE is_first_reg = 1234
     * $query->filterByIsFirstReg(array(12, 34)); // WHERE is_first_reg IN (12, 34)
     * $query->filterByIsFirstReg(array('min' => 12)); // WHERE is_first_reg > 12
     * </code>
     *
     * @param     mixed $isFirstReg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByIsFirstReg($isFirstReg = null, $comparison = null)
    {
        if (is_array($isFirstReg)) {
            $useMinMax = false;
            if (isset($isFirstReg['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_IS_FIRST_REG, $isFirstReg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isFirstReg['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_IS_FIRST_REG, $isFirstReg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_IS_FIRST_REG, $isFirstReg, $comparison);
    }

    /**
     * Filter the query on the region column
     *
     * Example usage:
     * <code>
     * $query->filterByRegion('fooValue');   // WHERE region = 'fooValue'
     * $query->filterByRegion('%fooValue%', Criteria::LIKE); // WHERE region LIKE '%fooValue%'
     * </code>
     *
     * @param     string $region The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByRegion($region = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($region)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_REGION, $region, $comparison);
    }

    /**
     * Filter the query on the district column
     *
     * Example usage:
     * <code>
     * $query->filterByDistrict('fooValue');   // WHERE district = 'fooValue'
     * $query->filterByDistrict('%fooValue%', Criteria::LIKE); // WHERE district LIKE '%fooValue%'
     * </code>
     *
     * @param     string $district The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByDistrict($district = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($district)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_DISTRICT, $district, $comparison);
    }

    /**
     * Filter the query on the ward column
     *
     * Example usage:
     * <code>
     * $query->filterByWard('fooValue');   // WHERE ward = 'fooValue'
     * $query->filterByWard('%fooValue%', Criteria::LIKE); // WHERE ward LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ward The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByWard($ward = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ward)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_WARD, $ward, $comparison);
    }

    /**
     * Filter the query on the mother_pid column
     *
     * Example usage:
     * <code>
     * $query->filterByMotherPid(1234); // WHERE mother_pid = 1234
     * $query->filterByMotherPid(array(12, 34)); // WHERE mother_pid IN (12, 34)
     * $query->filterByMotherPid(array('min' => 12)); // WHERE mother_pid > 12
     * </code>
     *
     * @param     mixed $motherPid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByMotherPid($motherPid = null, $comparison = null)
    {
        if (is_array($motherPid)) {
            $useMinMax = false;
            if (isset($motherPid['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_MOTHER_PID, $motherPid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($motherPid['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_MOTHER_PID, $motherPid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_MOTHER_PID, $motherPid, $comparison);
    }

    /**
     * Filter the query on the father_pid column
     *
     * Example usage:
     * <code>
     * $query->filterByFatherPid(1234); // WHERE father_pid = 1234
     * $query->filterByFatherPid(array(12, 34)); // WHERE father_pid IN (12, 34)
     * $query->filterByFatherPid(array('min' => 12)); // WHERE father_pid > 12
     * </code>
     *
     * @param     mixed $fatherPid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByFatherPid($fatherPid = null, $comparison = null)
    {
        if (is_array($fatherPid)) {
            $useMinMax = false;
            if (isset($fatherPid['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_FATHER_PID, $fatherPid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fatherPid['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_FATHER_PID, $fatherPid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_FATHER_PID, $fatherPid, $comparison);
    }

    /**
     * Filter the query on the contact_person column
     *
     * Example usage:
     * <code>
     * $query->filterByContactPerson('fooValue');   // WHERE contact_person = 'fooValue'
     * $query->filterByContactPerson('%fooValue%', Criteria::LIKE); // WHERE contact_person LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactPerson The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByContactPerson($contactPerson = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactPerson)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_CONTACT_PERSON, $contactPerson, $comparison);
    }

    /**
     * Filter the query on the contact_pid column
     *
     * Example usage:
     * <code>
     * $query->filterByContactPid(1234); // WHERE contact_pid = 1234
     * $query->filterByContactPid(array(12, 34)); // WHERE contact_pid IN (12, 34)
     * $query->filterByContactPid(array('min' => 12)); // WHERE contact_pid > 12
     * </code>
     *
     * @param     mixed $contactPid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByContactPid($contactPid = null, $comparison = null)
    {
        if (is_array($contactPid)) {
            $useMinMax = false;
            if (isset($contactPid['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_CONTACT_PID, $contactPid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contactPid['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_CONTACT_PID, $contactPid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_CONTACT_PID, $contactPid, $comparison);
    }

    /**
     * Filter the query on the contact_relation column
     *
     * Example usage:
     * <code>
     * $query->filterByContactRelation('fooValue');   // WHERE contact_relation = 'fooValue'
     * $query->filterByContactRelation('%fooValue%', Criteria::LIKE); // WHERE contact_relation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactRelation The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByContactRelation($contactRelation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactRelation)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_CONTACT_RELATION, $contactRelation, $comparison);
    }

    /**
     * Filter the query on the death_date column
     *
     * Example usage:
     * <code>
     * $query->filterByDeathDate('2011-03-14'); // WHERE death_date = '2011-03-14'
     * $query->filterByDeathDate('now'); // WHERE death_date = '2011-03-14'
     * $query->filterByDeathDate(array('max' => 'yesterday')); // WHERE death_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $deathDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByDeathDate($deathDate = null, $comparison = null)
    {
        if (is_array($deathDate)) {
            $useMinMax = false;
            if (isset($deathDate['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_DEATH_DATE, $deathDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deathDate['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_DEATH_DATE, $deathDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_DEATH_DATE, $deathDate, $comparison);
    }

    /**
     * Filter the query on the death_encounter_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByDeathEncounterNr(1234); // WHERE death_encounter_nr = 1234
     * $query->filterByDeathEncounterNr(array(12, 34)); // WHERE death_encounter_nr IN (12, 34)
     * $query->filterByDeathEncounterNr(array('min' => 12)); // WHERE death_encounter_nr > 12
     * </code>
     *
     * @param     mixed $deathEncounterNr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByDeathEncounterNr($deathEncounterNr = null, $comparison = null)
    {
        if (is_array($deathEncounterNr)) {
            $useMinMax = false;
            if (isset($deathEncounterNr['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_DEATH_ENCOUNTER_NR, $deathEncounterNr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deathEncounterNr['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_DEATH_ENCOUNTER_NR, $deathEncounterNr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_DEATH_ENCOUNTER_NR, $deathEncounterNr, $comparison);
    }

    /**
     * Filter the query on the death_cause column
     *
     * Example usage:
     * <code>
     * $query->filterByDeathCause('fooValue');   // WHERE death_cause = 'fooValue'
     * $query->filterByDeathCause('%fooValue%', Criteria::LIKE); // WHERE death_cause LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deathCause The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByDeathCause($deathCause = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deathCause)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_DEATH_CAUSE, $deathCause, $comparison);
    }

    /**
     * Filter the query on the death_cause_code column
     *
     * Example usage:
     * <code>
     * $query->filterByDeathCauseCode('fooValue');   // WHERE death_cause_code = 'fooValue'
     * $query->filterByDeathCauseCode('%fooValue%', Criteria::LIKE); // WHERE death_cause_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deathCauseCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByDeathCauseCode($deathCauseCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deathCauseCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_DEATH_CAUSE_CODE, $deathCauseCode, $comparison);
    }

    /**
     * Filter the query on the date_update column
     *
     * Example usage:
     * <code>
     * $query->filterByDateUpdate('2011-03-14'); // WHERE date_update = '2011-03-14'
     * $query->filterByDateUpdate('now'); // WHERE date_update = '2011-03-14'
     * $query->filterByDateUpdate(array('max' => 'yesterday')); // WHERE date_update > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateUpdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByDateUpdate($dateUpdate = null, $comparison = null)
    {
        if (is_array($dateUpdate)) {
            $useMinMax = false;
            if (isset($dateUpdate['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_DATE_UPDATE, $dateUpdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateUpdate['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_DATE_UPDATE, $dateUpdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_DATE_UPDATE, $dateUpdate, $comparison);
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
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByHistory($history = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($history)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_HISTORY, $history, $comparison);
    }

    /**
     * Filter the query on the allergy column
     *
     * Example usage:
     * <code>
     * $query->filterByAllergy('fooValue');   // WHERE allergy = 'fooValue'
     * $query->filterByAllergy('%fooValue%', Criteria::LIKE); // WHERE allergy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $allergy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByAllergy($allergy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($allergy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_ALLERGY, $allergy, $comparison);
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
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByModifyId($modifyId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifyId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_MODIFY_ID, $modifyId, $comparison);
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
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByModifyTime($modifyTime = null, $comparison = null)
    {
        if (is_array($modifyTime)) {
            $useMinMax = false;
            if (isset($modifyTime['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_MODIFY_TIME, $modifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifyTime['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_MODIFY_TIME, $modifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_MODIFY_TIME, $modifyTime, $comparison);
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
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByCreateId($createId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_CREATE_ID, $createId, $comparison);
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
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByCreateTime($createTime = null, $comparison = null)
    {
        if (is_array($createTime)) {
            $useMinMax = false;
            if (isset($createTime['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_CREATE_TIME, $createTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createTime['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_CREATE_TIME, $createTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_CREATE_TIME, $createTime, $comparison);
    }

    /**
     * Filter the query on the addr_citytown_name column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrCitytownName('fooValue');   // WHERE addr_citytown_name = 'fooValue'
     * $query->filterByAddrCitytownName('%fooValue%', Criteria::LIKE); // WHERE addr_citytown_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrCitytownName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByAddrCitytownName($addrCitytownName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrCitytownName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_ADDR_CITYTOWN_NAME, $addrCitytownName, $comparison);
    }

    /**
     * Filter the query on the is_transmit2ERP column
     *
     * Example usage:
     * <code>
     * $query->filterByIsTransmit2erp(1234); // WHERE is_transmit2ERP = 1234
     * $query->filterByIsTransmit2erp(array(12, 34)); // WHERE is_transmit2ERP IN (12, 34)
     * $query->filterByIsTransmit2erp(array('min' => 12)); // WHERE is_transmit2ERP > 12
     * </code>
     *
     * @param     mixed $isTransmit2erp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByIsTransmit2erp($isTransmit2erp = null, $comparison = null)
    {
        if (is_array($isTransmit2erp)) {
            $useMinMax = false;
            if (isset($isTransmit2erp['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_IS_TRANSMIT2ERP, $isTransmit2erp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isTransmit2erp['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_IS_TRANSMIT2ERP, $isTransmit2erp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_IS_TRANSMIT2ERP, $isTransmit2erp, $comparison);
    }

    /**
     * Filter the query on the insurance_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceId(1234); // WHERE insurance_ID = 1234
     * $query->filterByInsuranceId(array(12, 34)); // WHERE insurance_ID IN (12, 34)
     * $query->filterByInsuranceId(array('min' => 12)); // WHERE insurance_ID > 12
     * </code>
     *
     * @param     mixed $insuranceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsuranceId($insuranceId = null, $comparison = null)
    {
        if (is_array($insuranceId)) {
            $useMinMax = false;
            if (isset($insuranceId['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_ID, $insuranceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceId['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_ID, $insuranceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_ID, $insuranceId, $comparison);
    }

    /**
     * Filter the query on the insurance_head_pid column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceHeadPid(1234); // WHERE insurance_head_pid = 1234
     * $query->filterByInsuranceHeadPid(array(12, 34)); // WHERE insurance_head_pid IN (12, 34)
     * $query->filterByInsuranceHeadPid(array('min' => 12)); // WHERE insurance_head_pid > 12
     * </code>
     *
     * @param     mixed $insuranceHeadPid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsuranceHeadPid($insuranceHeadPid = null, $comparison = null)
    {
        if (is_array($insuranceHeadPid)) {
            $useMinMax = false;
            if (isset($insuranceHeadPid['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_HEAD_PID, $insuranceHeadPid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceHeadPid['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_HEAD_PID, $insuranceHeadPid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_HEAD_PID, $insuranceHeadPid, $comparison);
    }

    /**
     * Filter the query on the membership_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByMembershipNr('fooValue');   // WHERE membership_nr = 'fooValue'
     * $query->filterByMembershipNr('%fooValue%', Criteria::LIKE); // WHERE membership_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $membershipNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByMembershipNr($membershipNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($membershipNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_MEMBERSHIP_NR, $membershipNr, $comparison);
    }

    /**
     * Filter the query on the form_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByFormNr('fooValue');   // WHERE form_nr = 'fooValue'
     * $query->filterByFormNr('%fooValue%', Criteria::LIKE); // WHERE form_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $formNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByFormNr($formNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($formNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_FORM_NR, $formNr, $comparison);
    }

    /**
     * Filter the query on the nhif_nr column
     *
     * Example usage:
     * <code>
     * $query->filterByNhifNr('fooValue');   // WHERE nhif_nr = 'fooValue'
     * $query->filterByNhifNr('%fooValue%', Criteria::LIKE); // WHERE nhif_nr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nhifNr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByNhifNr($nhifNr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nhifNr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_NHIF_NR, $nhifNr, $comparison);
    }

    /**
     * Filter the query on the insurance_silver column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceSilver(1234); // WHERE insurance_silver = 1234
     * $query->filterByInsuranceSilver(array(12, 34)); // WHERE insurance_silver IN (12, 34)
     * $query->filterByInsuranceSilver(array('min' => 12)); // WHERE insurance_silver > 12
     * </code>
     *
     * @param     mixed $insuranceSilver The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsuranceSilver($insuranceSilver = null, $comparison = null)
    {
        if (is_array($insuranceSilver)) {
            $useMinMax = false;
            if (isset($insuranceSilver['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_SILVER, $insuranceSilver['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceSilver['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_SILVER, $insuranceSilver['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_SILVER, $insuranceSilver, $comparison);
    }

    /**
     * Filter the query on the insurance_gold column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceGold(1234); // WHERE insurance_gold = 1234
     * $query->filterByInsuranceGold(array(12, 34)); // WHERE insurance_gold IN (12, 34)
     * $query->filterByInsuranceGold(array('min' => 12)); // WHERE insurance_gold > 12
     * </code>
     *
     * @param     mixed $insuranceGold The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsuranceGold($insuranceGold = null, $comparison = null)
    {
        if (is_array($insuranceGold)) {
            $useMinMax = false;
            if (isset($insuranceGold['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_GOLD, $insuranceGold['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceGold['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_GOLD, $insuranceGold['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_GOLD, $insuranceGold, $comparison);
    }

    /**
     * Filter the query on the insurance_friedkin column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceFriedkin(1234); // WHERE insurance_friedkin = 1234
     * $query->filterByInsuranceFriedkin(array(12, 34)); // WHERE insurance_friedkin IN (12, 34)
     * $query->filterByInsuranceFriedkin(array('min' => 12)); // WHERE insurance_friedkin > 12
     * </code>
     *
     * @param     mixed $insuranceFriedkin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsuranceFriedkin($insuranceFriedkin = null, $comparison = null)
    {
        if (is_array($insuranceFriedkin)) {
            $useMinMax = false;
            if (isset($insuranceFriedkin['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_FRIEDKIN, $insuranceFriedkin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceFriedkin['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_FRIEDKIN, $insuranceFriedkin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_FRIEDKIN, $insuranceFriedkin, $comparison);
    }

    /**
     * Filter the query on the insurance_selian_stuff column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceSelianStuff(1234); // WHERE insurance_selian_stuff = 1234
     * $query->filterByInsuranceSelianStuff(array(12, 34)); // WHERE insurance_selian_stuff IN (12, 34)
     * $query->filterByInsuranceSelianStuff(array('min' => 12)); // WHERE insurance_selian_stuff > 12
     * </code>
     *
     * @param     mixed $insuranceSelianStuff The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsuranceSelianStuff($insuranceSelianStuff = null, $comparison = null)
    {
        if (is_array($insuranceSelianStuff)) {
            $useMinMax = false;
            if (isset($insuranceSelianStuff['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_SELIAN_STUFF, $insuranceSelianStuff['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceSelianStuff['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_SELIAN_STUFF, $insuranceSelianStuff['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_SELIAN_STUFF, $insuranceSelianStuff, $comparison);
    }

    /**
     * Filter the query on the insurance_premium_for_adults column
     *
     * Example usage:
     * <code>
     * $query->filterByInsurancePremiumForAdults(1234); // WHERE insurance_premium_for_adults = 1234
     * $query->filterByInsurancePremiumForAdults(array(12, 34)); // WHERE insurance_premium_for_adults IN (12, 34)
     * $query->filterByInsurancePremiumForAdults(array('min' => 12)); // WHERE insurance_premium_for_adults > 12
     * </code>
     *
     * @param     mixed $insurancePremiumForAdults The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsurancePremiumForAdults($insurancePremiumForAdults = null, $comparison = null)
    {
        if (is_array($insurancePremiumForAdults)) {
            $useMinMax = false;
            if (isset($insurancePremiumForAdults['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_ADULTS, $insurancePremiumForAdults['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insurancePremiumForAdults['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_ADULTS, $insurancePremiumForAdults['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_ADULTS, $insurancePremiumForAdults, $comparison);
    }

    /**
     * Filter the query on the insurance_premium_for_childs column
     *
     * Example usage:
     * <code>
     * $query->filterByInsurancePremiumForChilds(1234); // WHERE insurance_premium_for_childs = 1234
     * $query->filterByInsurancePremiumForChilds(array(12, 34)); // WHERE insurance_premium_for_childs IN (12, 34)
     * $query->filterByInsurancePremiumForChilds(array('min' => 12)); // WHERE insurance_premium_for_childs > 12
     * </code>
     *
     * @param     mixed $insurancePremiumForChilds The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsurancePremiumForChilds($insurancePremiumForChilds = null, $comparison = null)
    {
        if (is_array($insurancePremiumForChilds)) {
            $useMinMax = false;
            if (isset($insurancePremiumForChilds['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_CHILDS, $insurancePremiumForChilds['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insurancePremiumForChilds['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_CHILDS, $insurancePremiumForChilds['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_CHILDS, $insurancePremiumForChilds, $comparison);
    }

    /**
     * Filter the query on the insurance_premium_for_senior column
     *
     * Example usage:
     * <code>
     * $query->filterByInsurancePremiumForSenior(1234); // WHERE insurance_premium_for_senior = 1234
     * $query->filterByInsurancePremiumForSenior(array(12, 34)); // WHERE insurance_premium_for_senior IN (12, 34)
     * $query->filterByInsurancePremiumForSenior(array('min' => 12)); // WHERE insurance_premium_for_senior > 12
     * </code>
     *
     * @param     mixed $insurancePremiumForSenior The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsurancePremiumForSenior($insurancePremiumForSenior = null, $comparison = null)
    {
        if (is_array($insurancePremiumForSenior)) {
            $useMinMax = false;
            if (isset($insurancePremiumForSenior['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_SENIOR, $insurancePremiumForSenior['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insurancePremiumForSenior['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_SENIOR, $insurancePremiumForSenior['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_PREMIUM_FOR_SENIOR, $insurancePremiumForSenior, $comparison);
    }

    /**
     * Filter the query on the insurance_copayment_OPD column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceCopaymentOpd(1234); // WHERE insurance_copayment_OPD = 1234
     * $query->filterByInsuranceCopaymentOpd(array(12, 34)); // WHERE insurance_copayment_OPD IN (12, 34)
     * $query->filterByInsuranceCopaymentOpd(array('min' => 12)); // WHERE insurance_copayment_OPD > 12
     * </code>
     *
     * @param     mixed $insuranceCopaymentOpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsuranceCopaymentOpd($insuranceCopaymentOpd = null, $comparison = null)
    {
        if (is_array($insuranceCopaymentOpd)) {
            $useMinMax = false;
            if (isset($insuranceCopaymentOpd['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_COPAYMENT_OPD, $insuranceCopaymentOpd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceCopaymentOpd['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_COPAYMENT_OPD, $insuranceCopaymentOpd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_COPAYMENT_OPD, $insuranceCopaymentOpd, $comparison);
    }

    /**
     * Filter the query on the insurance_copayment_IPD column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceCopaymentIpd(1234); // WHERE insurance_copayment_IPD = 1234
     * $query->filterByInsuranceCopaymentIpd(array(12, 34)); // WHERE insurance_copayment_IPD IN (12, 34)
     * $query->filterByInsuranceCopaymentIpd(array('min' => 12)); // WHERE insurance_copayment_IPD > 12
     * </code>
     *
     * @param     mixed $insuranceCopaymentIpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsuranceCopaymentIpd($insuranceCopaymentIpd = null, $comparison = null)
    {
        if (is_array($insuranceCopaymentIpd)) {
            $useMinMax = false;
            if (isset($insuranceCopaymentIpd['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_COPAYMENT_IPD, $insuranceCopaymentIpd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceCopaymentIpd['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_COPAYMENT_IPD, $insuranceCopaymentIpd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_COPAYMENT_IPD, $insuranceCopaymentIpd, $comparison);
    }

    /**
     * Filter the query on the insurance_ceiling_by_individual column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceCeilingByIndividual(1234); // WHERE insurance_ceiling_by_individual = 1234
     * $query->filterByInsuranceCeilingByIndividual(array(12, 34)); // WHERE insurance_ceiling_by_individual IN (12, 34)
     * $query->filterByInsuranceCeilingByIndividual(array('min' => 12)); // WHERE insurance_ceiling_by_individual > 12
     * </code>
     *
     * @param     mixed $insuranceCeilingByIndividual The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsuranceCeilingByIndividual($insuranceCeilingByIndividual = null, $comparison = null)
    {
        if (is_array($insuranceCeilingByIndividual)) {
            $useMinMax = false;
            if (isset($insuranceCeilingByIndividual['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_CEILING_BY_INDIVIDUAL, $insuranceCeilingByIndividual['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceCeilingByIndividual['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_CEILING_BY_INDIVIDUAL, $insuranceCeilingByIndividual['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_CEILING_BY_INDIVIDUAL, $insuranceCeilingByIndividual, $comparison);
    }

    /**
     * Filter the query on the insurance_ceiling_by_family column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceCeilingByFamily(1234); // WHERE insurance_ceiling_by_family = 1234
     * $query->filterByInsuranceCeilingByFamily(array(12, 34)); // WHERE insurance_ceiling_by_family IN (12, 34)
     * $query->filterByInsuranceCeilingByFamily(array('min' => 12)); // WHERE insurance_ceiling_by_family > 12
     * </code>
     *
     * @param     mixed $insuranceCeilingByFamily The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsuranceCeilingByFamily($insuranceCeilingByFamily = null, $comparison = null)
    {
        if (is_array($insuranceCeilingByFamily)) {
            $useMinMax = false;
            if (isset($insuranceCeilingByFamily['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_CEILING_BY_FAMILY, $insuranceCeilingByFamily['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceCeilingByFamily['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_CEILING_BY_FAMILY, $insuranceCeilingByFamily['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_CEILING_BY_FAMILY, $insuranceCeilingByFamily, $comparison);
    }

    /**
     * Filter the query on the insurance_ceiling_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceCeilingAmount(1234); // WHERE insurance_ceiling_amount = 1234
     * $query->filterByInsuranceCeilingAmount(array(12, 34)); // WHERE insurance_ceiling_amount IN (12, 34)
     * $query->filterByInsuranceCeilingAmount(array('min' => 12)); // WHERE insurance_ceiling_amount > 12
     * </code>
     *
     * @param     mixed $insuranceCeilingAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsuranceCeilingAmount($insuranceCeilingAmount = null, $comparison = null)
    {
        if (is_array($insuranceCeilingAmount)) {
            $useMinMax = false;
            if (isset($insuranceCeilingAmount['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_CEILING_AMOUNT, $insuranceCeilingAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceCeilingAmount['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_CEILING_AMOUNT, $insuranceCeilingAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_CEILING_AMOUNT, $insuranceCeilingAmount, $comparison);
    }

    /**
     * Filter the query on the insurance_ceiling_for_families column
     *
     * Example usage:
     * <code>
     * $query->filterByInsuranceCeilingForFamilies(1234); // WHERE insurance_ceiling_for_families = 1234
     * $query->filterByInsuranceCeilingForFamilies(array(12, 34)); // WHERE insurance_ceiling_for_families IN (12, 34)
     * $query->filterByInsuranceCeilingForFamilies(array('min' => 12)); // WHERE insurance_ceiling_for_families > 12
     * </code>
     *
     * @param     mixed $insuranceCeilingForFamilies The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByInsuranceCeilingForFamilies($insuranceCeilingForFamilies = null, $comparison = null)
    {
        if (is_array($insuranceCeilingForFamilies)) {
            $useMinMax = false;
            if (isset($insuranceCeilingForFamilies['min'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_CEILING_FOR_FAMILIES, $insuranceCeilingForFamilies['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insuranceCeilingForFamilies['max'])) {
                $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_CEILING_FOR_FAMILIES, $insuranceCeilingForFamilies['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_INSURANCE_CEILING_FOR_FAMILIES, $insuranceCeilingForFamilies, $comparison);
    }

    /**
     * Filter the query on the national_id column
     *
     * Example usage:
     * <code>
     * $query->filterByNationalId('fooValue');   // WHERE national_id = 'fooValue'
     * $query->filterByNationalId('%fooValue%', Criteria::LIKE); // WHERE national_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nationalId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByNationalId($nationalId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nationalId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_NATIONAL_ID, $nationalId, $comparison);
    }

    /**
     * Filter the query on the employee_Id column
     *
     * Example usage:
     * <code>
     * $query->filterByEmployeeId('fooValue');   // WHERE employee_Id = 'fooValue'
     * $query->filterByEmployeeId('%fooValue%', Criteria::LIKE); // WHERE employee_Id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $employeeId The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function filterByEmployeeId($employeeId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($employeeId)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CarePersonTableMap::COL_EMPLOYEE_ID, $employeeId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCarePerson $carePerson Object to remove from the list of results
     *
     * @return $this|ChildCarePersonQuery The current query, for fluid interface
     */
    public function prune($carePerson = null)
    {
        if ($carePerson) {
            $this->addUsingAlias(CarePersonTableMap::COL_PID, $carePerson->getPid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the care_person table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CarePersonTableMap::clearInstancePool();
            CarePersonTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CarePersonTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CarePersonTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CarePersonTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CarePersonTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CarePersonQuery
