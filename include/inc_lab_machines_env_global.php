<?php

#
# Definitions for tanzanian clinics
#
define('IS_TANZANIAN', true);  // If TRUE use tanzanian modifications, else use standard care2x
define('PID_PREFIX', 00);    // Prefix for filenumbers (xx/00/00/01) Ex: 20/00/00/01

define('CURRENT_STOCK_ID', 1);


#
# Page generation time measurement
# define to 1 to measure page generation time
#
define('USE_PAGE_GEN_TIME', 1);


#
# Doctors on duty change time
# Define the time when the doc-on-duty will change in 24 hours H.M format (eg. 3 PM = 15.00, 12 PM = 0.00)
#
define('DOC_CHANGE_TIME', '7.30');

#
# Nurse on duty change time
# Define the time when the nurse-on-duty will change in 24 hours H.M format (eg. 3 PM = 15.00, 12 PM = 0.00)
#
define('NOC_CHANGE_TIME', '7.30');

#
# Html output base 64 encryption
# Define to TRUE if you want to send the html output in base64 encrypted form
#
define('ENCRYPT_PAGE_BASE64', FALSE);

#
# SQL "no-date" values for different database types
#Define the "no-date" values for the db date field
#
define('NODATE_MYSQL', '0000-00-00');
define('NODATE_POSTGRE', '0001-01-01');
define('NODATE_ORACLE', '0001-01-01');
define('NODATE_DEFAULT', '0000-00-00');

#
# Admission module�s extended tabs. Care2x >= 2.0.2
# Define to TRUE for extended tabs mode
#
define('ADMISSION_EXT_TABS', FALSE);

#
# Template theme for Care2x`s own template object
# Set the default template theme
#
$template_theme = 'biju';
//$template_theme='default';
#
# Set the template path
#
//if ($_GET['root_path'] || $_POST['root_path']) die();
//require('roots.php');
$template_path = $root_path . 'gui/html_template/';

#
# ---------- Do not edit below this ---------------------------------------------
# Load the html page encryptor
#
if (defined('ENCRYPT_PAGE_BASE64') && ENCRYPT_PAGE_BASE64) {
    include_once($root_path . 'classes/html_encryptor/csource.php');
}

#
# globalize the POST, GET, & COOKIE variables
#
require_once($root_path . 'include/inc_vars_resolve.php');

if (!ini_get('register_globals')) {
    $superglobals = array($_SERVER, $_ENV,
        $_FILES, $_COOKIE, $_POST, $_GET);
    if (isset($_SESSION)) {
        array_unshift($superglobals, $_SESSION);
    }
    foreach ($superglobals as $superglobal) {
        extract($superglobal, EXTR_SKIP);
    }
}
#
# Set global defines
#
if (!defined('LANG_DEFAULT')) {
    define('LANG_DEFAULT', 'en');
}

#
# Establish db connection
#
require_once($root_path . 'include/inc_db_makelink.php');
#
# Page generation time start
#
if (defined('USE_PAGE_GEN_TIME') && USE_PAGE_GEN_TIME) {
    include($root_path . 'classes/ladezeit/ladezeitclass.php');
    $pgt = new ladezeit();
    $pgt->start();
}
//echo URL_APPEND; echo URL_REDIRECT_APPEND;
#
# Template align tags, default values
#
$TP_ALIGN = 'left'; # template variable for document direction
$TP_ANTIALIGN = 'right';
$TP_DIR = 'ltr';

#
# Function to return the <html> or <html dir-rtl> tag
#

function html_ret_rtl($lang) {
    global $TP_ALIGN, $TP_ANTIALIGN, $TP_DIR;
    if (($lang == 'ar') || ($lang == 'fa')) {
        $TP_ANTIALIGN = $TP_ALIGN;
        $TP_ALIGN = 'right';
        $TP_DIR = 'rtl';
        return '<HTML dir=rtl>';
    } else {
        return '<HTML>';
    }
}

#
# Function to echo the returned value from function html_ret_rtl()
#

function html_rtl($lang) {
    echo html_ret_rtl($lang);
}

?>
