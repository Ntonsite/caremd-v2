<?php

/*
 * @package care_api
 */
/**
 */
/**
 *  GUI person registration data show methods.
 * Dependencies:
 * assumes the following files are in the given path
 *
 *  Note this class should be instantiated only after a "$db" adodb  connector object  has been established by an adodb instance
 * @author Elpidio Latorilla
 * @version beta 2.0.0
 * @copyright 2002,2003,2004,2005 Elpidio Latorilla
 * @package care_api
 */

require_once $root_path . 'include/care_api_classes/class_person.php';

$thisfile = basename($_SERVER['PHP_SELF']);

class GuiPersonShow extends Person {
	# Language files to be loaded

	var $langfile = array('prompt.php', 'person.php', 'aufnahme.php');

	# Filename of script to run in fallback state (when something goes wrong)
	var $fallbackfile = '';

	# Default path for fotos. Make sure that this directory exists!
	var $default_photo_path = 'fotos/registration';
	var $photo_filename = 'nopic';

	# The PID
	var $pid = 0;

	# The text holder in front of output block
	var $pretext = '';

	# The text holder after the output block
	var $posttext = '';

	# Current encounter number
	var $current_encounter = 0;

	# Person data in array
	var $data = array();

	# Person data object
	var $data_obj;

	# Person object
	var $person_obj;

	# Flag if data is loaded
	var $is_loaded;

	/**
	 * Constructor
	 */

	function __construct($pid = 0, $filename = '', $fallbackfile = '') {

		global $thisfile, $root_path;

		if (empty($filename)) {
			$this->thisfile = $thisfile;
		} else {
			$this->thisfile = $filename;
		}

		if (!empty($fallbackfile)) {
			$this->$fallbackfile = $fallbackfile;
		}

		if (!empty($this->default_photo_path)) {
			$this->default_photo_path = $root_path . $this->default_photo_path;
		}

		include_once $root_path . 'include/care_api_classes/class_person.php';
		$this->person_obj = new Person($pid);

		if ($pid) {
			$this->pid = $pid;
			return $this->_load();
		}
	}

	/**
	 * Sets the file name of the script to run when something goes wrong
	 */
	function setFallbackFile($target) {
		$this->fallbackfile = $target;
	}

	/**
	 * Sets the PID valuec
	 */
	function setPID($nr = 0) {
		$person_obj = new Person($this->pid);

		$this->pid = $nr;
		$person_obj->setPID($nr);
		return $this->_load();
	}

	/**
	 * Returns the death data
	 */
	function DeathDate() {
		$person_obj = new Person($this->pid);
		if (@$this->data['death_date']) {
			return $this->data['death_date'];
		} else {
			return $person_obj->DeathDate();
		}

	}

	/**
	 * Returns Insurance ID
	 */
	function insurance_id() {

	}

	/**
	 * # Gets the encounter number if person is currently admitted
	 */
	function EncounterCurrent() {
		global $root_path;
		if ($this->current_encounter) {
			return $this->current_encounter;
		} else {
			return $this->current_encounter = $this->person_obj->CurrentEncounter($this->pid);
		}
	}

	/**
	 * (pre)Loads the person registration data.
	 *
	 * Can be checked if data is loaded with the $this->is_loaded variable
	 * @private
	 */
	function _load() {
		$person_obj = new Person($this->pid);
		if ($this->data_obj = $person_obj->getAllInfoObject()) {
			$this->data = $this->data_obj->FetchRow();
			return $this->is_loaded = TRUE;
		} else {
			return $this->is_loaded = FALSE;
		}
	}

	/**
	 * Function to generate demographic data dynamically depending on the global config
	 */
	function createTR($ld_text, $input_val, $colspan = 1) {

		echo '<tr>
				<td bgColor="#eeeeee" ><FONT SIZE=-1  FACE="Arial,verdana,sans serif">' . $ld_text . ':
				</td>
				<td colspan=' . $colspan . ' bgcolor="#ffffee"><FONT SIZE=-1  FACE="Arial,verdana,sans serif" color="#990000"><b>'
			. $input_val . '
				</td>
			</tr>';
	}

	/**
	 * Displays the GUI showing the data
	 */
	function display($pid) {
		global $root_path, $dbf_nodate, $newdata;

		$validdata = TRUE;

		if (!empty($pid)) {
			$this->pid = $pid;
		}

		# Load the language tables
		$lang_tables = $this->langfile;
		include $root_path . 'include/inc_load_lang_tables.php';

		include_once $root_path . 'include/inc_date_format_functions.php';

		include_once $root_path . 'include/care_api_classes/class_insurance.php';
		$pinsure_obj = new PersonInsurance($this->pid);

		# Get the global config for person???s registration form
		include_once $root_path . 'include/care_api_classes/class_globalconfig.php';

		$GLOBAL_CONFIG = array();

		$glob_obj = new GlobalConfig($GLOBAL_CONFIG);
		$glob_obj->getConfig('person_%');
		//extract($GLOBAL_CONFIG);

		if (empty($this->pid)) {

			$validdata = FALSE;
		} else {

			//if($data_obj=&$this->person_obj->getAllInfoObject()){
			//	$this->data=$data_obj->FetchRow();

			if ($this->is_loaded) {
				extract($this->data);

				# Get related insurance data
				$p_insurance = $pinsure_obj->getPersonInsuranceObject($this->pid);

				if ($p_insurance == FALSE) {
					$insurance_show = true;
				} else {
					if (!$p_insurance->RecordCount()) {
						$insurance_show = true;
					} elseif ($p_insurance->RecordCount() == 1) {
						$buffer = $p_insurance->FetchRow();
						extract($buffer);

						$insurance_show = true;
						# Get insurace firm name
						$insurance_firm_name = $pinsure_obj->getFirmName($insurance_firm_id);
					} else {
						$insurance_show = FALSE;
					}
				}
				$insurance_class_nr = $insurance_class_nr ?? 0;

				$insurance_class_info = $pinsure_obj->getInsuranceClassInfo($insurance_class_nr);

				# Check if person is currently admitted
				$this->current_encounter = $this->person_obj->CurrentEncounter($this->pid);

				# update the record???s history
				if (empty($newdata)) {
					@$this->person_obj->setHistorySeen($_SESSION['sess_user_name']);
				}

				# Check whether config foto path exists, else use default path
				$GLOBAL_CONFIG['person_foto_path'] = @$GLOBAL_CONFIG['person_foto_path'] ? $GLOBAL_CONFIG['person_foto_path'] : "";

				$photo_path = (is_dir($root_path . $GLOBAL_CONFIG['person_foto_path'])) ? $GLOBAL_CONFIG['person_foto_path'] : $this->default_photo_path;
			} else {
				$validdata = FALSE;
			}
		}

		if ($validdata) {

			include_once $root_path . 'include/inc_photo_filename_resolve.php';

			############ Here starts the GUI output ##################
			# load config options
			include_once $root_path . 'include/care_api_classes/class_multi.php';
			$multi = new multi;
			?>
            <table border=0 cellspacing=1 cellpadding=3 width="600">
                <tr>
                    <td bgColor="#eeeeee">
                        <FONT SIZE=-1  FACE="Arial"><?php echo $LDRegistryNr ?>:
                    </td>
                    <td width="30%"  bgcolor="#ffffee">
                        <FONT SIZE=-1  FACE="Arial" color="#800000">
                        <?php
if ($pid) {
				if (IS_TANZANIAN) {
					echo $this->showPID($pid);
				} else {
					echo $pid;
				}
			}
			?><br>
                        <?php
//                        if (file_exists($root_path . 'cache/barcodes/pn_' . $pid . '.png')) {
			//                            echo '<img src="' . $root_path . 'cache/barcodes/pn_' . $pid . '.png" border=0 width=180 height=35>';
			//                        } else {
			//                            echo "<img src='" . $root_path . "classes/barcode/image.php?code=" . $pid . "&style=68&type=I25&width=180&height=50&xres=2&font=5&label=2&form_file=pn' border=0 width=0 height=0>";
			//                            echo "<img src='" . $root_path . "classes/barcode/image.php?code=" . $pid . "&style=68&type=I25&width=180&height=50&xres=2&font=5' border=0 width=180  height=35>";
			//                        }
			?>
                    </td>
                    <td valign="top" rowspan=6 align="center" bgcolor="#ffffee" >
                        <FONT SIZE=-1  FACE="Arial"><img <?php echo $img_source; ?>>
                    </td>
                </tr>
                <tr>
                    <td  bgColor="#eeeeee">
                        <FONT SIZE=-1  FACE="Arial"><?php echo $LDFileNr ?>:
                    </td>
                    <td  bgcolor="#ffffee">
                        <FONT SIZE=-1  FACE="Arial" color="#800000"><b><?php echo $selian_pid ?>
                    </td>
                </tr>
                <tr>
                    <td  bgColor="#eeeeee">
                        <FONT SIZE=-1  FACE="Arial"><?php echo $LDRegTime ?>:
                    </td>
                    <td  bgcolor="#ffffee">
                        <FONT SIZE=-1  FACE="Arial" color="#800000"><b><?php echo convertTimeToLocal(formatDate2Local($date_reg, $date_format, 0, 1)); ?>
                    </td>
                </tr>

                <tr>
                    <td bgColor="#eeeeee">
                        <FONT SIZE=-1  FACE="Arial">
                        <?php echo $LDRegDate; ?>:
                    </td>
                    <td bgcolor="#ffffee">
                        <FONT SIZE=-1  FACE="Arial" color="#800000">
                        <b><?php echo formatDate2Local($date_reg, $date_format); ?>
                            <input name="date_reg" type="hidden" value="<?php echo $date_reg ?>">
                            </td>
                            </tr>

                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial"><?php echo $LDTitle ?>:
                                </td>
                                <td  bgcolor="#ffffee">
                                    <FONT SIZE=-1  FACE="Arial" color="#990000">
                                    <b><?php echo $title ?>
                                </td>
                            </tr>

                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial">
                                    <?php echo $LDLastName; ?>:
                                </td>
                                <td  bgcolor="#ffffee">
                                    <FONT SIZE=-1  FACE="Arial" color="#990000">
                                    <b><?php echo $name_last; ?></b>
                                </td>
                            </tr>

                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial">
                                    <?php echo $LDFirstName ?>:
                                </td>
                                <td bgcolor="#ffffee">
                                    <FONT SIZE=-1  FACE="Arial" color="#990000">
                                    <b><?php echo $name_first; ?></b>
                                    <?php
# If person is dead show a black cross
			if ($death_date && $death_date != $dbf_nodate && $death_date != '1980-01-01') {
				echo '&nbsp;<img ' . createComIcon($root_path, 'blackcross_sm.gif', '0') . '>';
			}

			?>
                                </td>
                            </tr>
                            <?php
if (empty($GLOBAL_CONFIG['person_name_2_hide']) && @$name_2) {
				$this->createTR($LDName2, $name_2);
			}
			if (empty($GLOBAL_CONFIG['person_name_3_hide']) && @$name_3) {
				$this->createTR($LDName3, $name_3);
			}
			if (empty($GLOBAL_CONFIG['person_name_middle_hide']) && @$name_middle) {
				$this->createTR($LDNameMid, $name_middle);
			}
			if (empty($GLOBAL_CONFIG['person_name_maiden_hide']) && @$name_maiden) {
				$this->createTR($LDNameMaiden, $tribe_name);
			}
			if (empty($GLOBAL_CONFIG['person_name_others_hide']) && @$name_others) {
				$this->createTR($LDNameOthers, $name_others);
			}
			?>
                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial">
                                    <?php echo $LDBday ?>:
                                </td>
                                <td  bgcolor="#ffffee">
                                    <FONT SIZE=-1  FACE="Arial"  color="#990000">
                                    <b><?php echo formatDate2Local($date_birth, $date_format); ?></b>
                                    <?php
# If person is dead show a black cross
			if ($death_date && $death_date != $dbf_nodate && $death_date != '1980-01-01') {
				echo '&nbsp;<img ' . createComIcon($root_path, 'blackcross_sm.gif', '0') . '>&nbsp;<font color="#000000">' . formatDate2Local($death_date, $date_format) . '</font>';
			}
			?>
                                </td>
                                <td bgcolor="#ffffee">
                                    <FONT SIZE=-1  FACE="Arial" color="#990000"><b>
                                        <?php echo $LDSex ?>: <?php
if ($sex == "m") {
				echo $LDMale;
			} elseif ($sex == "f") {
				echo $LDFemale
				;
			}
			?>
                                </td>
                            </tr>

                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial"><?php echo $LDBloodGroup ?>:
                                </td>
                                <td bgcolor="#ffffee">
                                    <FONT SIZE=-1  FACE="Arial" color="#990000"><b>
                                        <?php
$buf = 'LD' . trim($blood_group);
			echo @$$buf ? $$buf : '';

			?>
                                </td>
                                <td bgcolor="#ffffee">
                                    <FONT SIZE=-1  FACE="Arial" color="#990000"><b>
                                        <?php
echo $LDRHfactor . $rh;
			?>
                                </td>
                            </tr>
                            <?php if ($allergy): ?>

                                <style>

                                    .alergic {
                                        -webkit-animation: alergic-anim 1s infinite;  /* Safari 4+ */
                                        -moz-animation: alergic-anim 1s infinite;  /* Fx 5+ */
                                        -o-animation: alergic-anim 1s infinite;  /* Opera 12+ */
                                        animation: alergic-anim 1s infinite;  /* IE 10+, Fx 29+ */
                                    }

                                    @-webkit-keyframes alergic-anim {
                                        0%, 49% {
                                            background-color: #FFFFEE;
                                            color: #990000;
                                            padding: 5px;
                                        }

                                        50%, 100% {
                                            background-color: #e50000;
                                            color: #fff;
                                            padding: 5px;
                                        }
                                    }

                                </style>
                                <tr>
                                    <td bgColor="#eeeeee" >
                                        <FONT  FACE="Arial" >
                                        <?php echo 'Allergy' ?>:
                                    </td>
                                    <td bgcolor="#ffffee" class="alergic">
                                        <FONT SIZE=-1  FACE="Arial">
                                        <b><?php echo $allergy; ?></b>
                                    </td>
                                </tr>
                            <?php else: ?>
                                <tr>
                                    <td bgColor="#eeeeee">
                                        <FONT SIZE=-1  FACE="Arial">
                                        <?php echo 'Allergy' ?>:
                                    </td>
                                    <td bgcolor="#ffffee">
                                        <FONT SIZE=-1  FACE="Arial" color="#990000">
                                        <b><?php echo $allergy; ?></b>
                                    </td>
                                </tr>
                            <?php endif?>

                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial">
                                    <?php echo $LDCivilStatus ?>:
                                </td>
                                <td colspan=2 bgcolor="#ffffee">
                                    <FONT SIZE=-1  FACE="Arial" color="#990000"><b>
                                        <?php
if ($civil_status == "single") {
				echo $LDSingle;
			} elseif ($civil_status == "married") {
				echo $LDMarried;
			} elseif ($civil_status == "divorced") {
				echo $LDDivorced;
			} elseif ($civil_status == "widowed") {
				echo $LDWidowed;
			} elseif ($civil_status == "separated") {
				echo $LDSeparated
				;
			}
			?>
                                </td>
                            </tr>

                            <?php
global $db;
			if ($insurance_ID != 0) {

				$coreObj = new \stdClass();

				$coreObj->sql = "SELECT name FROM care_tz_company WHERE id=$insurance_ID";
				if ($ergebnis = $db->Execute($coreObj->sql)) {
					$row = $ergebnis->FetchRow();
					$insurance_name = $row['name'];
				} else {
					$insurance_name = 'Invalid Insurance Company';
				}
			} else {
				$insurance_name = 'Cash-Patient';
			}
			?>

                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial">
                                    <?php echo $LDInsurance; ?>:
                                </td>
                                <td><FONT SIZE=-1  FACE="Arial" color="#990000"><b>
                                    <?php echo $insurance_name; ?></td>
                                <?php

//verification permission start here
$userId = $_SESSION['sess_login_userid'];

$sql_roleid="SELECT care_user_roles.permission FROM care_users 
                    INNER JOIN care_user_roles 
                    ON care_users.role_id=care_user_roles.role_id
             WHERE care_users.login_id='".$userId."'";


$result_roleid=$db->Execute($sql_roleid);

$row=$result_roleid->FetchRow();



$userPermissions = explode(" ", $row['permission']);

$userPermissions = str_replace('_a_1_', '', $userPermissions);
$userPermissions = str_replace('_a_2_', '', $userPermissions);
$userPermissions = str_replace('_a_3_', '', $userPermissions);
$userPermissions = str_replace('_a_4_', '', $userPermissions);


$allow_verification=false;




foreach ( $userPermissions as $permission) {
	

	if ($permission=="nhif_verification" || $permission=="System_Admin" || $permission=="_a_0_all") {
		$allow_verification=true;



		
	}
	
}

?>
<input type="hidden" id="allowVerification" value="<?php echo $allow_verification; ?>">
<?php

//verification permission end here                                









if (mb_substr($insurance_name,0,4) == 'NHIF' && $glob_obj->getConfigValue("validate_nhif") === "1") {
//                                    echo '<script type="text/javascript">'
				//                                    . 'hide_links(); </script>';
				$nhif_full_name = "";
				$nhif_card_status = "";
				$nhif_authorization_status = "";
				$nhif_authorization_number = "";
				$nhif_latest_authorization = "";
				$nhif_remarks = "";
				$nhif_visit_type = "";
				$SchemeName = "";
				$ProductCode = "";
				$ProductName = "";

//
				if (isset($this->current_encounter) && $this->current_encounter) {
					if ($this->current_encounter > 0) {

						$this->sql = "SELECT nhif_full_name, nhif_card_status, nhif_authorization_status, nhif_authorization_number, nhif_latest_authorization, nhif_visit_type, nhif_remarks  FROM care_encounter WHERE encounter_nr ='" . $this->current_encounter . "'";

						$encounterRow = $db->Execute($this->sql);

						while ($d_row = $encounterRow->FetchRow()) {
							$nhif_full_name = $d_row['nhif_full_name'];
							$nhif_card_status = $d_row['nhif_card_status'];
							$nhif_authorization_status = $d_row['nhif_authorization_status'];
							$nhif_authorization_number = $d_row['nhif_authorization_number'];
							$nhif_latest_authorization = $d_row['nhif_latest_authorization'];
							$nhif_remarks = $d_row['nhif_remarks'];
							$nhif_visit_type = $d_row['nhif_visit_type'];
						}

					}
				}

				?>
                                    <td rowspan=7>
                                    <table class="verify">

                                        <tr>
                                            <td class="adm_item">Visit Type</td>

                                            <td colspan="2" class="uVisitType adm_input">
                                                <input name="uVisitType"  type="radio" value="1">Normal&nbsp;&nbsp;
                                                <input name="uVisitType"  type="radio" value="2">Emergency&nbsp;&nbsp;
                                                <input name="uVisitType"  type="radio" value="3">Referral&nbsp;&nbsp;
                                                <input name="uVisitType"  type="radio" value="4">Follow-up
                                            </td>
                                        </tr>

                                        <tr class="referalInputs">
                                            <td>&nbsp;</td>
                                        </tr>

                                        <tr  class="referalInputs">
                                            <td class="adm_item">
                                                Referrer Number:
                                            </td>
                                            <td colspan=2 class="adm_input">

                                                <input name="referrer_number" class="referrer_number" type="text" size="20" value="">
                                            </td>

                                        </tr>

                                    </table>
                                    

                                    <br>
                                    <?php
echo "<div><input id=\"authorize_btn\" type=\"button\" value=\"Authorize NHIF Card\" onClick = \"verify_card('$membership_nr')\"/>"
					. "<p class=\"card_fname\"><b FONT SIZE=-1  FACE=\"Arial\" color=\"#990000\">Full Name:  </b><span id=\"nhif_full_name\">" . $nhif_full_name . "</span></p>"
					. "<p class=\"card_status\"><b FONT SIZE=-1  FACE=\"Arial\" color=\"#990000\">Card Status:  </b><span id=\"nhif_card_status\">" . $nhif_card_status . "</span></p>"
					. "<p class=\"authorization\"><b FONT SIZE=-1  FACE=\"Arial\" color=\"#990000\">Authorization: </b><span id=\"nhif_authorization_status\">" . $nhif_authorization_status . "</span></p>"
					. "<p class=\"authorization_no\"><b FONT SIZE=-1  FACE=\"Arial\" color=\"#990000\">Authorization No: </b><span id=\"nhif_authorization_number\">" . $nhif_authorization_number . "</span></p>"
					. "<p class=\"nhif_remarks\"><b FONT SIZE=-1  FACE=\"Arial\" color=\"#990000\">Remarks: </b><span id=\"nhif_remarks\">" . $nhif_remarks . "</span></p>"
					. "<p class=\"latest_authorization\"><b FONT SIZE=-1  FACE=\"Arial\" color=\"#990000\">Latest Authorization: </b><span id=\"nhif_latest_authorization\">" . $nhif_latest_authorization . "</span></p>"
					. "<p class=\"SchemeName\"><b FONT SIZE=-1  FACE=\"Arial\" color=\"#990000\">Scheme Name: </b><span id=\"SchemeName\">" . $SchemeName . "</span></p>"
					. "<p class=\"ProductCode\"><b FONT SIZE=-1  FACE=\"Arial\" color=\"#990000\">Product Code: </b><span id=\"ProductCode\">" . $ProductCode . "</span></p>"
					. "<p class=\"ProductName\"><b FONT SIZE=-1  FACE=\"Arial\" color=\"#990000\">Product Name: </b><span id=\"ProductName\">" . $ProductName . "</span></p></div></td>";

			}
			?>
                            </tr>
                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial">
                                    <?php echo $LDMembership_nr; ?>:
                                </td>
                                <td><FONT SIZE=-1  FACE="Arial" color="#990000"><b>
                                    <?php echo $membership_nr; ?></td>
                            </tr>
                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial">
                                    <?php echo $LDForm_nr; ?>:
                                </td>
                                <td><FONT SIZE=-1  FACE="Arial" color="#990000"><b>
                                    <?php echo $form_nr; ?></td>
                            </tr>

                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial">
                                    <?php echo $LDAddress ?>:
                                </td>
                                <td bgcolor="#ffffee">
                                    <FONT SIZE=-1  FACE="Arial" color="#990000"><b>
                                        &nbsp;&nbsp;&nbsp;<?php echo $LDZipCode ?>: <?php echo $addr_zip; ?>
                                </td>
                            </tr>

                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial">
                                    &nbsp;&nbsp;&nbsp;<?php echo $LDTownCity ?>:
                                </td>
                                <td bgcolor="#ffffee">
                                    <FONT SIZE=-1  FACE="Arial" color="#990000"><b>


                                        <?php echo $citizenship; ?> <?php //echo $addr_citytown_name;    ?><?php //echo $addr_citytown_nr;    ?>

                                </td>

                            </tr>
                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial">
                                    &nbsp;&nbsp;&nbsp;<?php echo 'Region' ?>:
                                </td>
                                <td bgcolor="#ffffee" colspan=2>
                                    <FONT SIZE=-1  FACE="Arial" color="#990000">
                                    <b><?php echo ($region > 0) ? $multi->GetRegionName($region) : $region; ?>
                                </td>
                            </tr>
                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial">
                                    &nbsp;&nbsp;&nbsp;<?php echo 'District' ?>:
                                </td>
                                <td bgcolor="#ffffee" colspan=2>
                                    <FONT SIZE=-1  FACE="Arial" color="#990000">
                                    <b><?php
echo ($district > 0) ? $multi->GetDistrictName($district) : $district;

			?>
                                </td>
                            </tr>
                            <tr>
                                <td bgColor="#eeeeee">
                                    <FONT SIZE=-1  FACE="Arial">
                                    &nbsp;&nbsp;&nbsp;<?php echo 'Ward' ?>:
                                </td>
                                <td bgcolor="#ffffee" colspan=2>
                                    <FONT SIZE=-1  FACE="Arial" color="#990000">
                                    <b><?php echo ($ward > 0) ? $multi->GetWardName($ward) : $ward; ?>
                                </td>
                            </tr>

                            <?php
if (empty($GLOBAL_CONFIG['person_insurance_1_nr_hide']) && @$insurance_show && @$insurance_nr) {
				$this->createTR($LDInsuranceNr, $insurance_nr, 2);
				$buffer = $insurance_class_info['LD_var'];
				if (isset($$buffer) && !empty($$buffer)) {
					$this->createTR($LDInsuranceClass, $$buffer, 2);
				} else {
					$this->createTR($LDInsuranceClass, $insurance_class_info['name'], 2);
				}

				$this->createTR($LDInsuranceCo . ' 1', $insurance_firm_name, 2);
			}
			if (empty($GLOBAL_CONFIG['person_phone_1_nr_hide']) && @$phone_1_nr) {
				$this->createTR($LDPhone . ' 1', $phone_1_nr, 2);
			}
			if (empty($GLOBAL_CONFIG['person_phone_2_nr_hide']) && @$phone_2_nr) {
				$this->createTR($LDPhone . ' 2', $phone_2_nr, 2);
			}
			if (empty($GLOBAL_CONFIG['person_cellphone_1_nr_hide']) && @$cellphone_1_nr) {
				$this->createTR($LDCellPhone . ' 1', $cellphone_1_nr, 2);
			}
			if (empty($GLOBAL_CONFIG['person_cellphone_2_nr_hide']) && @$cellphone_2_nr) {
				$this->createTR($LDCellPhone . ' 2', $cellphone_2_nr, 2);
			}
			if (empty($GLOBAL_CONFIG['person_fax_hide']) && @$fax) {
				$this->createTR($LDFax, $fax, 2);
			}

			if (empty($GLOBAL_CONFIG['person_email_hide']) && @$email) {

			}

			//if (!$GLOBAL_CONFIG['person_citizenship_hide']&&$citizenship){
			//$this->createTR($LDCitizenship,$citizenship,2);
			//}
			if (empty($GLOBAL_CONFIG['person_sss_nr_hide']) && @$sss_nr) {
				$this->createTR('District', $district_name, 2);
			}
			if (empty($GLOBAL_CONFIG['person_nat_id_nr_hide']) && @$nat_id_nr) {
//			$this->createTR('Ward',$ward_name,2);
			}
			if (empty($GLOBAL_CONFIG['person_religion_hide']) && @$religion) {
				$this->createTR($LDReligion, $name, 2);
			}

			if (empty($GLOBAL_CONFIG['person_insurance_hide']) && @$insurance_ID) {
//			$this->createTR($LDInsurance,$insurance_ID,2);
			}

			if (empty($GLOBAL_CONFIG['person_ethnic_orig_hide']) && @$ethnic_orig) {
				$this->createTR($LDEthnicOrigin, $ethnic_orig_txt, 2);
			}
			$sql = 'SELECT modify_id, create_id FROM care_person where pid="' . $pid . '"';
			$result = $db->Execute($sql);
			$row = $result->FetchRow();
			if (@$row['modify_id'] && $row['modify_id'] == '') {
				$modifyid = $row['create_id'];
			} else {
				$modifyid = $row['modify_id'];
			}
			?>
                            <tr>
                                <td bgcolor="#eeeeee">
                            <nobr><FONT  SIZE=2  FACE="Arial"><?php echo $LDRegBy ?>:</nobr>
                    </td>

                    <td colspan=2 bgcolor="#ffffee">
                        <FONT  SIZE=2  FACE="Arial" color="#990000"><b><?php echo $modifyid ?> </b></FONT>
                    </td>
                </tr>
            </table>
            <?php
} else {
			echo 'Invalid PID number or the data is not available from the databank! Please report this to <a  href="mailto:care2x@care2x.org">info@care2x.org</a>. Thank you.';
		}
	}

}

?>
