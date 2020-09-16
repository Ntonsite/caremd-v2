<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	error_reporting(E_COMPILE_ERROR | E_ERROR | E_CORE_ERROR);
require('./roots.php');

require($root_path . 'include/inc_environment_global.php');
//require($root_path . 'include/care_api_classes/class_tz_pharmacy.php');

define('NO_2LEVEL_CHK', 1);
require($root_path . 'include/inc_front_chain_lang.php');

 

$presc_nr=array();
if (isset($_POST['issue'])) {//issue button is pressed
	foreach ($_POST as $key => $value) {
		if (substr($key, 0,7)=='checked') {
			$presc_nr['nr']=substr($key, 8);
			$todayDose=$_POST['todayDose_'.$presc_nr['nr']];
			$prescriptionNr=$_POST['nr_'.$presc_nr['nr']];
      $today=date('Y-m-d');
      $article_item_number=$_POST['article_'.$presc_nr['nr']];
      $supply=$_POST['supply_'.$presc_nr['nr']];

      if ($supply>0) {
          $supHasValue='ELSE '.$supply;
          }

                         
            


            
            /*
            PATIENT WILL BE GIVEN  DOSAGE FOR SINGLE DAY ONLY. IF THE DRUG IS ALREADY GIVEN TODAY IT WILL BE CLOSED UNTIL TOMORROW. WRITTEN BY ISRAEL PASCAL.
            */

            $sqlPresExpanded="SELECT cep.nr,cep.article_item_number,ce.current_ward_nr,cw.name,(CASE WHEN ds.sub_class='syrup' THEN '1' WHEN ds.sub_class='suspension' THEN '1' WHEN ds.sub_class='bottle' THEN '1' WHEN ds.sub_class='tabs' THEN dosage*times_per_day WHEN ds.sub_class='tablet' THEN dosage*times_per_day WHEN ds.sub_class='tablets' THEN dosage*times_per_day WHEN ds.sub_class='caps' THEN dosage*times_per_day WHEN ds.sub_class='capsule' THEN dosage*times_per_day WHEN ds.sub_class='capsules'THEN dosage*times_per_day WHEN ds.sub_class='injections' THEN dosage*times_per_day WHEN ds.sub_class='injection' THEN dosage*times_per_day $supHasValue END ) as qtyIssued FROM care_encounter_prescription cep INNER JOIN care_encounter ce ON cep.encounter_nr=ce.encounter_nr INNER JOIN care_tz_drugsandservices ds ON ds.item_id=cep.article_item_number INNER JOIN care_ward cw ON cw.nr=ce.current_ward_nr  WHERE ce.current_ward_nr='".$_POST['ward_nr']."' AND cep.article_item_number='".$article_item_number."' AND ce.is_discharged='0' AND cep.is_disabled<>1 AND ds.purchasing_class IN('drug_list','supplies')";








            

            

           $resultExpanded=$db->Execute($sqlPresExpanded);

           $_SESSION['today']=$today;
           $_SESSION['user']=$_POST['user'];

           
             
           
          
           while ($rowsExapanded=$resultExpanded->FetchRow()) {    

            
            
            
                      //echo $rowsExapanded['nr'].'<br>';



                

            $sqlCheckGiven="SELECT disp.prescriptionNr,disp.dateIssued FROM care_tz_ward_dispensed as disp  WHERE dateIssued='".$_SESSION['today']."' AND prescriptionNr=".$rowsExapanded['nr']." AND wardNr='".$rowsExapanded['current_ward_nr']."' ";








            $resultCheckGiven=$db->Execute($sqlCheckGiven);



            if ($resultCheckGiven->RecordCount()<1) {
              // if ($_SESSION['supplyQTY']>0) {
              //   $rowsExapanded['qtyIssued']=$_SESSION['supplyQTY'];
              // }

              if ($rowsExapanded['qtyIssued']>0) {               
              
            	$sqlInsert="INSERT INTO care_tz_ward_dispensed(wardNr,wardName,prescriptionNr,qtyIssued,dateIssued,is_issued,issuer)values('".$rowsExapanded['current_ward_nr']."','".$rowsExapanded['name']."','".$rowsExapanded['nr']."','".$rowsExapanded['qtyIssued']."','".$_SESSION['today']."','1','".$_SESSION['user']."') ";
              $db->Execute($sqlInsert);           







            	
              }           	
            }

           }
           





		}

	}
	
}












if(isset($_REQUEST["destination"])){
	header("Location: {$_REQUEST["destination"]}");
}else if (isset($_SERVER["HTTP_REFERER"])) {
	header("Location: {$_SERVER["HTTP_REFERER"]}");	
}

require_once $root_path . 'main_theme/head.inc.php';
require_once $root_path . 'main_theme/header.inc.php';
require_once $root_path . 'main_theme/topHeader.inc.php';



	?>







</body>
</html>