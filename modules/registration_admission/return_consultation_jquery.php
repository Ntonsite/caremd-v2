<?php

require('./roots.php');
require($root_path . 'include/inc_environment_global.php');
require_once($root_path . 'include/inc_environment_global.php');
include_once($root_path . 'include/care_api_classes/class_prescription.php');

//$_SESSION['item_array']=NULL;
if (isset($_POST['id'])) {
	if ($_POST['patientid']) {
		$sqlRegDate="SELECT date_reg FROM care_person WHERE pid=".$_POST['patientid'];
		$resultDateReg=$db->Execute($sqlRegDate);
		$row=$resultDateReg->FetchRow();
		if($row['date_reg']==date('Y-m-d')){
			$new=true;
		}else{
			$new=false;
		}

		if ($new) {
			$sqlConsNew="SELECT item_id,item_description FROM care_tz_drugsandservices WHERE purchasing_class='service' AND item_number='cons0'".$_POST['id']."' AND unit_price>0";
			$newResult=$db->Execute($sqlConsNew);
			$rowConsLIst=$newResult->FetchRow();			
		}else{
			$sqlConsNew="SELECT item_id,item_description FROM care_tz_drugsandservices WHERE purchasing_class='service' AND item_number LIKE 'cons0'".$_POST['id']."%' ";
			$newResult=$db->Execute($sqlConsNew);
			$rowConsLIst=$newResult->FetchRow();

		}

	}
}
?>

