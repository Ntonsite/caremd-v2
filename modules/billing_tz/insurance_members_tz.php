<?php

require './roots.php';

require $root_path . 'include/inc_environment_global.php';

$pageName = "Billing";

/**
 * CARE2X Integrated Hospital Information System Deployment 2.1 - 2004-10-02
 * GNU General Public License
 * Copyright 2005 Robert Meggle based on the development of Elpidio Latorilla (2002,2003,2004,2005)
 * elpidio@care2x.org, meggle@merotech.de
 *
 * See the file "copy_notice.txt" for the licence notice
 */
//define('NO_2LEVEL_CHK',1);
$thisfile = basename($_SERVER['PHP_SELF']);
$debug = FALSE;
define('LANG_FILE', 'billing.php');
$lang_tables[] = 'aufnahme.php';
require $root_path . 'include/inc_front_chain_lang.php';
require_once $root_path . 'include/care_api_classes/class_person.php';
$person_obj = New Person();
require_once $root_path . 'include/care_api_classes/class_tz_insurance.php';
$insurance_tz = New Insurance_tz;

if (@$mode && $mode == 'update') {

}
if ($debug) {
	echo "item_no:" . $item_no . "<br>";
	echo "company_id:" . $company_id . "<br>";
	echo "keyword: " . $keyword . "<br>";
}

require_once $root_path . 'main_theme/head.inc.php';
require_once $root_path . 'main_theme/header.inc.php';
require_once $root_path . 'main_theme/topHeader.inc.php';

require "gui/gui_insurance_members_tz.php";
require_once $root_path . 'main_theme/footer.inc.php';

?>