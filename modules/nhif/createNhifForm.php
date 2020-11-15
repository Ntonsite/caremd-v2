<?php
ini_set("memory_limit", "-1");
set_time_limit(0);

require_once './roots.php';
include_once $root_path . 'include/inc_environment_global.php';
require_once $root_path . 'include/care_api_classes/class_encounter.php';
require_once $root_path . 'include/care_api_classes/class_tz_billing.php';
require_once $root_path . 'include/care_api_classes/class_nhif_claims.php';
require_once $root_path . 'include/care_api_classes/class_globalconfig.php';
require_once $root_path . 'tcpdf/tcpdf.php';
require_once $root_path . 'tcpdf/tcpdf_autoconfig.php';

$encounter_nr = $_GET['encounter_nr'];
$type = $_GET['type'];
global $db;

$enc_obj = new Encounter;
$claims_obj = new Nhif_claims;



//make tcpdf object
$pdf = new TCPDF('p','mm', 'A4');

//remove default header and footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);


//add page
$pdf->AddPage();

/*
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(190,10,"Ostech IT Engineering LTD",1,1,'C');

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(190,5,"Employee list",1,1,'C');

$pdf->SetFont('Helvetica','',10);
$pdf->Cell(30,5,"Class",1,1,'C');
$pdf->Cell(160,5,": Programming 101",1);
$pdf->Ln();

$pdf->Cell(30,5,"Teacher Name",1,'C');
$pdf->Cell(160,5,": Professor Smith",1);
$pdf->Ln();
*/






$image_file = '../../modules/nhif/images/' . 'NHIF_logo.jpg';
$pdf->Image($image_file,10,10,20);


$pdf->SetFont('Helvetica','B',14);
$pdf->Cell('','',"CONFIDENTIAL",'','','C');
$pdf->SetFont('Helvetica','',8);
$pdf->Cell('','',"Form NHIF 2A&B",'','','R');
$pdf->Ln();
$pdf->SetFont('Helvetica','',8);
$pdf->Cell('','',"Regulation 18(1)",'','','R');

$pdf->Ln();
$pdf->SetFont('Helvetica','B',14);
$pdf->Cell('','',"THE NHIF - HEALTH PROVIDER IN/OUT PATIENT CLAIM FORM",'','','C');
$pdf->Ln();

$sqlEncounterDate="SELECT encounter_date FROM care_encounter WHERE encounter_nr=".$encounter_nr;

$resultEncounterDate=$db->Execute($sqlEncounterDate);
if ($rowEncounterDate=$resultEncounterDate->FetchRow()) {
    $claims_details=$rowEncounterDate;

}

$companyName = "";
$companyAddress = "";

$companySQL = "SELECT value FROM care_config_global WHERE type = 'main_info_name'";
$companyResult = $db->Execute($companySQL);
if (@$companyResult) {
    $company = $companyResult->FetchRow();
    $companyName = $company['value'];
}

$companySQL = "SELECT value FROM care_config_global WHERE type = 'main_info_address'";
$companyResult = $db->Execute($companySQL);
if (@$companyResult) {
    $company = $companyResult->FetchRow();
    $companyAddress = $company['value'];
}



$consultation_total_cost = 0;
    $consultations = $claims_obj->GetConsultations($encounter_nr);
    foreach ($consultations as $cons) {
        $consultation_total_cost += $cons['row_amount'];
    }



 $claims_details_query = $claims_obj->ShowPendingClaimsDetails(array('in_outpatient' => $type, 'encounter_nr' => $encounter_nr)); 

if (!is_null($claims_details_query)) {
    $rowDetails=$claims_details_query->FetchRow();
    
}

//echo $rowDetails['PatientTypeCode'];

switch ($rowDetails['PatientTypeCode']) {
    case 'OUT':
       
       //$ward_dept_name=$enc_obj->CurrentDeptName($encounter_nr);
       $sqlDeptNr="SELECT current_dept_nr FROM care_encounter WHERE encounter_nr=".$encounter_nr;
       $sqlDeptNrResult=$db->Execute($sqlDeptNr);
       if ($rowDept=$sqlDeptNrResult->FetchRow()) {
           $sqlDeptName="SELECT name_formal FROM care_department WHERE nr=".$rowDept['current_dept_nr'];
           $resultDeptName=$db->Execute($sqlDeptName);
           if ($ward_dept_name=$resultDeptName->FetchRow()) {
               $ward_dept_name=$ward_dept_name['name_formal'];
           }
       }        


        break;
    
    default:

    $sqlDeptNr="SELECT current_ward_nr FROM care_encounter WHERE encounter_nr=".$encounter_nr;
       $sqlDeptNrResult=$db->Execute($sqlDeptNr);
       if ($rowDept=$sqlDeptNrResult->FetchRow()) {
           $sqlDeptName="SELECT ward_id FROM care_ward WHERE nr=".$rowDept['current_ward_nr'];
           $resultDeptName=$db->Execute($sqlDeptName);
           if ($ward_dept_name=$resultDeptName->FetchRow()) {
               $ward_dept_name=$ward_dept_name['ward_id'];
           }

    //$ward_dept_name=$enc_obj->CurrentWardName($encounter_nr);
        
        break;
}
}



 

  


// $tpdf->MultiCell(12,15,'','L','C',1,0);   // Left border only 
// $tpdf->MultiCell(12,15,'','LR','C',1,0);  // Left and Right border only 
// $tpdf->MultiCell(12,15,'','LRB','C',1,0); // Left,Right and Bottom border only 
// $tpdf->MultiCell(12,15,'','LRBT','C',1,0);// Full border






//$dots='.............';


$number=$claims_obj->getSerialNumber($encounter_nr, $claims_details);
$serialNumber='Serial No: '.$number;


$preliminaryDX=$claims_obj->GetDignosisCodesByType($encounter_nr, 'preliminary');
$finalDX=$claims_obj->GetDignosisCodesByType($encounter_nr, 'final');







$fill=$pdf->SetFillColor(249,249,249); // Grey
//$this -> TCPDF -> Cell(95,$cellHigh,$data,'L',0,'L',$fill,'',0,false,'T','C');


$pdf->SetFont('Helvetica','',8);
$pdf->Cell(160,'',$serialNumber,'','','R');
//$pdf->Cell(100,'',"555555",'','','R');
//Cell(w, h = 0, txt = '', border = 0, ln = 0, align = '', fill = 0, link = nil, stretch = 0, ignore_min_height = false, calign = 'T', valign = 'M') ⇒ Object

$pdf->Ln();
$pdf->SetFont('Helvetica','B',6);
$pdf->Cell(160,'','A:PARTICULARS:','','','L');
$pdf->Ln();
$pdf->SetFont('Helvetica','',8);
$pdf->Cell(33,5,'1.Name of Health Facility','','','');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(50,5,$companyName,'','C','');
$pdf->SetFont('Helvetica','',8);
$pdf->Cell(18,5,'2.Address','','','');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(60,5,$companyAddress,'','','');
//$pdf->Cell(25,5,'Morogoro','','','',$fill);

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(21,5,'3.Consultation','','','');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(20,5,number_format($consultation_total_cost),'','','');

$pdf->Ln();
$pdf->SetFont('Helvetica','',8);
$pdf->Cell(33,5,'4.Department/Ward');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(50,5,$ward_dept_name,'','C');

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(30,5,'5.Date Of Attendance');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(18,5,date('d.m.Y',strtotime($rowDetails['encounter_date'])),'','C');

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(30,5,'6.Patient File Number');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(35,5,$rowDetails['selian_pid'],'','C');

$pdf->Ln();
$pdf->SetFont('Helvetica','',8);
$pdf->Cell(33,5,'7.Name of Patient');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(50,5,$rowDetails['name_first'].' '.$rowDetails['name_last'],'','C');

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(15,5,'8.DOB:');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(18,5,$rowDetails['date_birth'],'','C');

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(12,5,'9.SEX:');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(5,5,$rowDetails['sex'],'','C');

$pdf->Ln();

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(15,5,'10.Vote:');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(18,5,$rowDetails['employee_id'],'','C');

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(33,5,'11.Physical Address');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(50,5,$claims_obj->GetPatientPhysicalAddress($rowDetails['ward'], $rowDetails['district']),'','C');

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(25,5,'12.Card Number:');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(38,5,$rowDetails['membership_nr'],'','C');

$pdf->Ln();

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(33,5,'13.Occupation:');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(20,5,'','','C');

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(40,5,'14.Preliminary Diagnosis Code');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(33,5,'',$preliminaryDX,'C');

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(33,5,'15.Final Diagnosis Code');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(33,5,$finalDX,'C');
$pdf->Ln();
$pdf->Cell(33,5,'B: COST OF SERVICE','C');
$pdf->Ln();
$pdf->SetFont('Helvetica','B',12);
$pdf->Cell(100,5,"Description",1,'C','',$fill);
$pdf->Cell(30,5,"Item Code",1,'','',$fill);
$pdf->Cell(15,5,"Qty",1,'','',$fill);
$pdf->Cell(25,5,"Unit Price",1,'','',$fill);
$pdf->Cell(25,5,"Amount",1,'','',$fill);
$pdf->Ln();


//consultation
if ($consultation_total_cost > 0){

     $pdf->SetFont('Helvetica','',12);
     $pdf->Cell(195,5,"CONSULTATIONS",1,'C','',$fill);
     $pdf->Ln();

    foreach ($consultations as $consultation){

      $pdf->Cell(100,5,$consultation['description'],1,'C','');
      
      $pdf->Cell(30,5,$consultation['nhif_item_code'],1,'','');
      $pdf->Cell(15,5,number_format($consultation['amount']),1,'','');
      $pdf->Cell(25,5,number_format($consultation['price']),1,'','');
      $pdf->Cell(25,5,number_format($consultation['row_amount']),1,'','');
      $pdf->Ln(); 


    }
    $pdf->Cell(170,5,'SUB TOTAL',1,'C','');
    $pdf->Cell(25,5,number_format($consultation_total_cost),1,'','');  

}
$pdf->Ln(); 

//Investigation
$investigation_total_cost = 0;

$investigations = $claims_obj->GetInvestigations($encounter_nr);
foreach ($investigations as $investigation) {
    $investigation_total_cost += $investigation['row_amount'];
  }

  if ($investigation_total_cost > 0){
     $pdf->SetFont('Helvetica','',12);
     $pdf->Cell(195,5,"INVESTIGATIONS",1,'C','',$fill);
     $pdf->Ln();
    foreach ($investigations as $investigation){

      $pdf->Cell(100,5,$investigation['description'],1,'C','');
      $pdf->Cell(30,5,$investigation_total_cost['nhif_item_code'],1,'','');
      $pdf->Cell(15,5,number_format($investigation['amount']),1,'','');
      $pdf->Cell(25,5,number_format($investigation['price']),1,'','');
      $pdf->Cell(25,5,number_format($investigation['row_amount']),1,'','');
      $pdf->Ln();

    }

    $pdf->Cell(170,5,'SUB TOTAL',1,'C','');
    $pdf->Cell(25,5,number_format($investigation_total_cost),1,'','');  

  }

   $pdf->Ln();


  $drugs_total_cost = 0;
  $medicines = $claims_obj->GetMedicines($encounter_nr);
  
  foreach ($medicines as $medicine) {
    $drugs_total_cost += $medicine['row_amount'];
  }

     


     if ($drugs_total_cost > 0){
     $pdf->SetFont('Helvetica','',12);
     $pdf->Cell(195,5,"MEDICINES",1,'C','',$fill);
     $pdf->Ln();
     

     foreach ($medicines as $medicine){

      $pdf->Cell(100,5,$medicine['description'],1,'C','');
      
      $pdf->Cell(30,5,$medicine['nhif_item_code'],1,'','');
      $pdf->Cell(15,5,number_format($medicine['amount']),1,'','');
      $pdf->Cell(25,5,number_format($medicine['price']),1,'','');
      $pdf->Cell(25,5,number_format($medicine['row_amount']),1,'','');
      $pdf->Ln(); 


    }

    $pdf->Cell(170,5,'SUB TOTAL',1,'C','');
    $pdf->Cell(25,5,number_format($drugs_total_cost),1,'','');


  }

  $pdf->Ln();


  $procedure_total_cost = 0;
  $procedures = $claims_obj->GetProcedures($encounter_nr);
  foreach ($procedures as $procedure) {
    $procedure_total_cost += $procedure['row_amount'];
  }


  if ($procedure_total_cost > 0){
     $pdf->SetFont('Helvetica','',12);
     $pdf->Cell(195,5,"PROCEDURES",1,'C','',$fill);
     $pdf->Ln();

     foreach ($procedures as $procedure){
      $pdf->Cell(100,5,$procedure['description'],1,'C','');
      
      $pdf->Cell(30,5,$procedure['nhif_item_code'],1,'','');
      $pdf->Cell(15,5,number_format($procedure['amount']),1,'','');
      $pdf->Cell(25,5,number_format($procedure['price']),1,'','');
      $pdf->Cell(25,5,number_format($procedure['row_amount']),1,'','');
      $pdf->Ln();

     }

     $pdf->Cell(170,5,'SUB TOTAL',1,'C','');
     $pdf->Cell(25,5,number_format($procedure_total_cost),1,'','');




  }
$pdf->Ln();

  $supplies_total_cost = 0;
  $supplies = $claims_obj->GetSupplies($encounter_nr);
  foreach ($supplies as $supply) {
    $supplies_total_cost += $supply['row_amount'];
  }

  if ($supplies_total_cost > 0){

    $pdf->SetFont('Helvetica','',12);
     $pdf->Cell(195,5,"SUPPLIES/SERVICES",1,'C','',$fill);
     $pdf->Ln();


     foreach ($supplies as $supply){

      $pdf->Cell(100,5,$supply['description'],1,'C','');      
      $pdf->Cell(30,5,$supply['nhif_item_code'],1,'','');
      $pdf->Cell(15,5,number_format($supply['amount']),1,'','');
      $pdf->Cell(25,5,number_format($supply['price']),1,'','');
      $pdf->Cell(25,5,number_format($supply['row_amount']),1,'','');
      $pdf->Ln();


     }

     $pdf->Cell(170,5,'SUB TOTAL',1,'C','');
     $pdf->Cell(25,5,number_format($supplies_total_cost),1,'','');

  }


  $pdf->Ln();


 $grandtotal = number_format($consultation_total_cost + $investigation_total_cost + $drugs_total_cost + $procedure_total_cost + $supplies_total_cost);



     $pdf->Cell(170,5,'GRAND TOTAL',1,'C','');
     $pdf->Cell(25,5,$grandtotal,1,'','');
     $pdf->Ln();

     //echo $encounter_nr; die;

  $doctor = $claims_obj->GetDignosisDocName($encounter_nr);
  $docUser = $claims_obj->GetDocUser($doctor);
  $qDetailsRow=$claims_obj->GetqualificationDetails($doctor);  
  $doctorQualificationName=$qDetailsRow['sname'];





$pdf->SetFont('Helvetica','',8);
$pdf->Cell(41,5,'C: Name of attending clinician','','','');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(34,5,$doctor,'B','C','');

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(20,5,'Qualification','','','');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(34,5,$doctorQualificationName,'B','C','');
$pdf->SetFont('Helvetica','',8);
$pdf->Cell(20,5,'Signature','','','');
$pdf->Cell(34,5,'','B','C','');
$pdf->Ln();
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(160,'','D: Claimant Certification:','','','L');
$pdf->Ln();
$pdf->SetFont('Helvetica','',8);
$pdf->Cell(75,5,'I certify that I received the above named services. Name:','','','L');
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(50,5,$rowDetails['name_first'].' '.$rowDetails['name_last'],'B','C');
$pdf->SetFont('Helvetica','',8);
$pdf->Cell(20,5,'Signature','','','');
$pdf->Cell(20,5,'','B','','');
$pdf->Ln();
$pdf->SetFont('Helvetica','B',8);
$pdf->Cell(8,5,'NB:','','','');
$pdf->Cell(160,5,'Fill in Triplicate and please submit the original form on monthly basis, and the claim be attached with Monthly Report.','','','L');
$pdf->Ln();
$pdf->Cell(160,5,'Any falsified information may subject you to prosecution in accordance with NHIF Act No. 8 of 1999.','','','L');




$save = @$_GET['save'] ? $_GET['save'] : "";

if (@$save) {
	$pdf->Output(__DIR__ . '/uploads/nhifForm' . $encounter_nr . '.pdf', 'F');
  //$pdf->Output('./uploads/nhifForm'.$encounter_nr.'pdf', 'D');

   //check file existance
   $filePath='./uploads/nhifForm' . $encounter_nr . '.pdf';


   $file = file($filePath);
   $endfile= trim($file[count($file) - 1]);
   $n="%%EOF";


   if ($endfile === $n) {
     $status="good";
   } else {
     $status="corrupted";
   }



   if (file_exists($filePath) && $status === "good") {
     echo "file created";
   }else{
    echo "no file";
   }

   





} else {
	$pdf->Output('nhifFrom.pdf', 'I');
}






?>