<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 3.0//EN" "html.dtd">
<HTML>

<?php
require './roots.php';
require $root_path . 'include/inc_environment_global.php';
$pageName = "Patient";

/**
 * CARE2X Integrated Hospital Information System version deployment 1.1 (mysql) 2004-01-11
 * GNU General Public License
 * Copyright 2002,2003,2004,2005 Elpidio Latorilla
 * , elpidio@care2x.org
 *
 * See the file "copy_notice.txt" for the licence notice
 */
//$db->debug=1;

define('SHOW_DOC_2', 1); # Define to 1 to  show the 2nd doctor-on-duty
if (!defined('DOC_CHANGE_TIME')) {
	define('DOC_CHANGE_TIME', '7.30');
}
$lang_tables[] = 'prompt.php';
define('LANG_FILE', 'nursing.php');
//define('NO_2LEVEL_CHK',1);
$local_user = 'ck_pflege_user';
require $root_path . 'include/inc_front_chain_lang.php';

if (empty($_COOKIE[$local_user . $sid])) {
	$edit = 0;
	include $root_path . "language/" . $lang . "/lang_" . $lang . "_" . LANG_FILE;
}

$dept_nr = $_GET['dept_nr'];
$dept = $_GET['dept'];

$breakfile = 'amb_clinic_patients_pass.php' . URL_APPEND . '&dept_nr=' . $dept_nr . '&dept=' . urlencode($dept);
?>


    <HEAD>
        <TITLE> - </TITLE>
        <meta name="Description" content="Hospital and Healthcare Integrated Information System - CARE2x">
        <meta name="Author" content="Timo Hasselwander from merotech">
        <meta name="Generator" content="various: Quanta, AceHTML 4 Freeware, NuSphere, PHP Coder">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

        <script language="javascript" >
<!--
            function gethelp(x, s, x1, x2, x3, x4)
            {
                if (!x)
                    x = "";
                urlholder = "../../main/help-router.php<?php echo URL_APPEND; ?>&helpidx=" + x + "&src=" + s + "&x1=" + x1 + "&x2=" + x2 + "&x3=" + x3 + "&x4=" + x4;
                helpwin = window.open(urlholder, "helpwin", "width=790,height=540,menubar=no,resizable=yes,scrollbars=yes");
                window.helpwin.moveTo(0, 0);
            }
// -->
        </script>

        <script type="text/javascript">
<?php
require $root_path . 'include/inc_checkdate_lang.php';
?>
        </script>
        <script language="javascript" src="<?php echo $root_path; ?>js/setdatetime.js"></script>
        <script language="javascript" src="<?php echo $root_path; ?>js/checkdate.js"></script>
        <script language="javascript" src="<?php echo $root_path; ?>js/dtpick_care2x.js"></script>

        <link rel="stylesheet" href="../../css/themes/default/default.css" type="text/css">
        <script language="javascript" src="../../js/hilitebu.js"></script>

        <STYLE TYPE="text/css">
            A:link  {color: #000066;}
            A:hover {color: #cc0033;}
            A:active {color: #cc0000;}
            A:visited {color: #000066;}
            A:visited:active {color: #cc0000;}
            A:visited:hover {color: #cc0033;}
        </style>
        <script language="JavaScript">
            <!--
        function popPic(pid, nm) {

                if (pid != "")
                    regpicwindow = window.open("../../main/pop_reg_pic.php?sid=<?php echo $sid . "&lang=" . $lang ?>&pid=" + pid + "&nm=" + nm, "regpicwin", "toolbar=no,scrollbars,width=180,height=250");

            }
            // -->
        </script>

        <script language="javascript">


<!--
            function closewin()
            {
                location.href = 'startframe.php?sid=<?php echo $sid . "&lang=" . $lang ?>';
            }


            function open_drug_services() {
                urlholder = "<?php echo $root_path; ?>/modules/pharmacy_tz/pharmacy_tz_pending_prescriptions.php<?php echo URL_APPEND; ?>&target=search&task=newprescription&back_path=billing";
                patientwin = window.open(urlholder, "Ziel", "width=750,height=550,status=yes,menubar=no,resizable=yes,scrollbars=yes");
                patientwin.moveTo(0, 0);
                patientwin.resizeTo(screen.availWidth, screen.availHeight);
            }
            function open_lab_request() {
                urlholder = "<?php echo $root_path; ?>modules/laboratory/labor_test_request_pass.php?<?php echo URL_APPEND; ?>&target=chemlabor&user_origin=bill";
                patientwin = window.open(urlholder, "Ziel", "width=750,height=550,status=yes,menubar=no,resizable=yes,scrollbars=yes");
                patientwin.moveTo(0, 0);
                patientwin.resizeTo(screen.availWidth, screen.availHeight);
            }
// -->
        </script>



    </HEAD>

    <?php
$pageName = "Patient";

require_once $root_path . 'main_theme/head.inc.php';
require_once $root_path . 'main_theme/header.inc.php';
require_once $root_path . 'main_theme/topHeader.inc.php';

?>
    <BODY bgcolor=#ffffff link=#000066 alink=#cc0000 vlink=#000066  >





        <table width=100% border=0 cellspacing=0 height=100%>
            <tbody class="main">
                <tr>
                    <td  valign="top" align="middle" height="35">
                        <table cellspacing="0"  class="titlebar" border=0>
                            <tr valign=top  class="titlebar" >
                                <td bgcolor="#99ccff" >
                                    &nbsp;&nbsp;<font color="#330066"><?php echo 'Radiology Requests for ' . $dept; ?></font>

                                </td>
                                <td bgcolor="#99ccff" align=right><a
                                        href="javascript:window.history.back()"><img src="../../gui/img/control/default/en/en_back2.gif" border=0 width="110" height="24" alt="" style="filter:alpha(opacity=70)" onMouseover="hilite(this, 1)" onMouseOut="hilite(this, 0)" ></a><a
                                        href="javascript:gethelp('billing_overview.php','Pharmacy')"><img src="../../gui/img/control/default/en/en_hilfe-r.gif" border=0 width="75" height="24" alt="" style="filter:alpha(opacity=70)" onMouseover="hilite(this, 1)" onMouseOut="hilite(this, 0)"></a><a
                                        href="<?php echo $breakfile; ?>"><img src="../../gui/img/control/default/en/en_close2.gif" border=0 width="103" height="24" alt="" style="filter:alpha(opacity=70)" onMouseover="hilite(this, 1)" onMouseOut="hilite(this, 0)"></a>  </td>
                            </tr>
                        </table>		</td>
                </tr>

                <tr>
                    <td bgcolor=#ffffff valign=top>

                        <br>
                        <blockquote>
                            <TABLE cellSpacing=0  width=800 class="submenu_frame" cellpadding="0">
                                <TBODY>
                                    <?php
include_once $root_path . 'include/inc_date_format_functions.php';

if (isset($_GET['prescr_date'])) {
	$prescr_date = $_GET['prescr_date'];
	//echo 'Date set: '.$prescr_date;
} else {
	$prescr_date = formatDate2Local(date('Y-m-d'), $date_format);
}

echo '<tr class="titlebar" bgcolor="#99ccff"><td><font color="#330066">Radiology Requests for ' . $prescr_date . '</font></td></tr>';
echo '<tr class="titlebar" bgcolor="#99ccff"><td>&nbsp;</td></tr>';
?>





                                    <TR>
                                        <TD>
                                            <TABLE cellSpacing=1 cellPadding=3 width=800>
                                                <TBODY class="submenu">

                                                    <tr>

                                                        <td class="submenu_item"><?php echo $LDPatientID ?></td>
                                                        <td class="submenu_item"><?php echo $LDLastName . ', ' . $LDName ?></td>
                                                        <td class="submenu_item">Age</td>
                                                        <td class="submenu_item"><?php echo $LDTestRequest ?></td>
                                                        <td class="submenu_item"><?php echo $LDRequestTime ?></td>
                                                        <td class="submenu_item"><?php echo $LDRequestedBy ?></td>

                                                    </tr>

                                                <form name="deptform" method="GET" action="">

<?php
//			include_once($root_path.'include/inc_date_format_functions.php');
//
//			if (isset($_GET['prescr_date']))
//			{
//				$prescr_date = $_GET['prescr_date'];
//				//echo 'Date set: '.$prescr_date;
//
//			}
//			else
//			{
//				$prescr_date = formatDate2Local(date('Y-m-d'),$date_format);
//
//
//			}

$coreObjOuter = new Core;

$sqlOuter = "select * from care_encounter where current_dept_nr=$dept_nr and
                                       DATE_FORMAT(encounter_date,  '%d/%m/%Y' ) like '$prescr_date%'";

$coreObjOuter->result = $db->Execute($sqlOuter);

foreach ($coreObjOuter->result as $rowEncounter) {

	echo '<TR  height=1>
                        <TD colSpan=7 class="vspace"><IMG height=1 src="../../gui/img/common/default/pixel.gif" width=5></TD>
                      </TR>';

	echo '<tr>';

	//data person
	$pid = $rowEncounter['pid'];
	echo '<td>' . $pid . '</td>';

	$sqlPerson = "select * from care_person where pid=$pid";
	$coreObjInner->result = $db->Execute($sqlPerson);
	$rowPerson = $coreObjInner->result->FetchRow();
	$name_last = $rowPerson['name_last'];
	$name_first = $rowPerson['name_first'];
	$date_birth = $rowPerson['date_birth'];
	$age = date('Y') - date('Y', strtotime($date_birth));

	echo '<td>' . $name_last . ', ' . $name_first . '</td>';
	echo "<td>" . $age . "<td>";

	//encounter nr
	$encounterNr = $rowEncounter['encounter_nr'];
	//echo 'Encounter nr: '.$encounterNr.'<br> ';
	//data prescription
	//$sqlInner = "select * from care_encounter_prescription where encounter_nr = $encounterNr";

	$dateSQL = substr($prescr_date, 6, 4) . '-' . substr($prescr_date, 3, 2) . '-' . substr($prescr_date, 0, 2);

	$crit .= " and prescribe_date = '$dateSQL' ";

	$sqlInner = "select * from care_test_request_radio INNER JOIN care_tz_drugsandservices ON care_tz_drugsandservices.item_id=care_test_request_radio.test_request" .
		" where encounter_nr = $encounterNr and purchasing_class='xray'";

	$coreObjInner->result = $db->Execute($sqlInner);

	$prescr = '';

	foreach ($coreObjInner->result as $rowPrescr) {

		if ($prescr == '') {
			$prescr .= '<td>';
		} else {
			$prescr .= '<tr><td>&nbsp;</td><td>&nbsp;</td><td>';
		}

		$article = $rowPrescr['item_description'];

		$modify_time = $rowPrescr['modify_time'];

		$prescriber = $rowPrescr['send_doctor'];

		$prescr .= $article . '</td><td>' . $modify_time . '</td><td>' . $prescriber;

		$prescr .= '</td></tr>';
	}

	if ($prescr == '') {
		$prescr .= '<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
	}

	echo $prescr;
}
?>
                                                    <input type="hidden" name="dept" value="<?php echo $dept ?>">
                                                    <input type="hidden" name="dept_nr" value="<?php echo $dept_nr ?>">






                                                    </TBODY>
                                                    </TABLE>
                                                    </TD>
                                                    </TR>






                                                    </TBODY>
                                                    </TABLE>

                                                    <p>
                                                        <a href="<?php echo $breakfile ?>"><img src="../../gui/img/control/default/en/en_close2.gif" border=0 width="103" height="24" alt="" style="filter:alpha(opacity=70)" onMouseover="hilite(this, 1)" onMouseOut="hilite(this, 0)"></a>

                                                        <input type="image" src="../../gui/img/control/default/en/en_savedisc.gif" value="button"  name="save">
                                                        <br><br><br>

                                                        <input name="prescr_date" type="text" id="datepicker" size="15" maxlength=10 value="<?php {
	echo $prescr_date;
}
?>"
                                                               onFocus="this.select();"
                                                               onBlur="IsValidDate(this, 'dd/MM/yyyy')"
                                                               onKeyUp="setDate(this, 'dd/MM/yyyy', 'en');">
                                                        <a href="javascript:show_calendar('deptform.prescr_date','dd/MM/yyyy')">
                                                           <!--  <img <?php echo createComIcon($root_path, 'show-calendar.gif', '0', 'absmiddle'); ?>> --></a>


                                                        <font size=1>[
<?php
$dfbuffer = "LD_" . strtr($date_format, ".-/", "phs");
echo $$dfbuffer;
?>
                                                        ] </font><br>

                                                        <input type="submit" name="setTime" value="show">

                                                </form>

                                                <p>
                                                    </blockquote>
                                                    </td>
                                                    </tr>

                                                <tr valign=top >
                                                    <td bgcolor=#cccccc>
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="1" bgcolor="#cfcfcf">
                                                            <tr>
                                                                <td align="center">
                                                                    <table width="100%" bgcolor="#ffffff" cellspacing=0 cellpadding=5>

                                                                        <tr>
                                                                            <td>
                                                                                <div class="copyright">
                                                                                    <script language="JavaScript">
                                                                                        <!-- Script Begin
                                                                                    function openCreditsWindow() {

                                                                                            urlholder = "../../language/$lang/$lang_credits.php?lang=$lang";
                                                                                            creditswin = window.open(urlholder, "creditswin", "width=500,height=600,menubar=no,resizable=yes,scrollbars=yes");

                                                                                        }
                                                                                        //  Script End -->
                                                                                    </script>


                                                                                    <a href="http://www.care2x.org" target=_new>CARE2X 3rd Generation pre-deployment 3.3</a> :: <a href="../../legal_gnu_gpl.htm" target=_new> License</a> ::
                                                                                    <a href=mailto:care2x@care2x.org>Contact</a>  :: <a href="../../language/en/en_privacy.htm" target="pp"> Our Privacy Policy </a> ::
                                                                                    <a href="../../docs/show_legal.php?lang=$lang" target="lgl"> Legal </a> ::
                                                                                    <a href="javascript:openCreditsWindow()"> Credits </a> ::.<br>

                                                                                </div>
                                                                            </td>
                                                                        <tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>

                                                </tr>

                                </tbody>
                            </table>
                            </BODY>
                            </HTML>
<?php require_once $root_path . 'main_theme/footer.inc.php';?>
