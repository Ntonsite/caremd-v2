<?php

require './roots.php';

require $root_path . 'include/inc_environment_global.php';
/**
 * CARE2X Integrated Hospital Information System Deployment 2.1 - 2004-10-02
 * GNU General Public License
 * Copyright 2005 Robert Meggle based on the development of Elpidio Latorilla (2002,2003,2004,2005)
 * elpidio@care2x.org, meggle@merotech.de
 *
 * See the file "copy_notice.txt" for the licence notice
 */
//define('NO_2LEVEL_CHK',1);
$lang_tables[] = 'billing.php';
$lang_tables[] = 'aufnahme.php';
require $root_path . 'include/inc_front_chain_lang.php';
require_once $root_path . 'include/care_api_classes/class_tz_insurance.php';
$insurance_tz = New Insurance_tz();
$this_insurance = $insurance_tz->GetInsuranceAsArray($id);
if ($mode == 'update') {
	//Error checking
	if (strlen(trim($name)) < 3) {
		$error['name'] = true;
	}

	if (strlen(trim($contact)) < 3) {
		$error['contact'] = true;
	}

	if (!$insurance) {
		$error['insurance'] = true;
	}

	if (!$error) {
		if ($insurance_tz->UpdateInsuranceCompany($_POST)) {
			header("location: insurance_company_tz.php");
		}

	}
	$this_insurance = $_POST;
}

require "gui/gui_insurance_company_tz_delete.php";
?>