<?php
error_reporting(E_COMPILE_ERROR | E_ERROR | E_CORE_ERROR);
require('./roots.php');

require($root_path . 'include/inc_environment_global.php');
//require($root_path . 'include/care_api_classes/class_tz_pharmacy.php');

define('NO_2LEVEL_CHK', 1);
require($root_path . 'include/inc_front_chain_lang.php');







//echo "<pre>"; print_r($_POST['tarehe']);echo "</pre>";
$rows=count($_POST['tarehe']);
for ($i=0; $i <$rows ; $i++) { 
  $date=date("Y-m-d H:i:s");
  $sql_sum="SELECT SUM(qty) as chartTotal FROM care_tz_nursing_chart WHERE nr=".$_POST['nr'][$i];
   $resultSum=$db->Execute($sql_sum);
   if ($rowsCharted=$resultSum->FetchRow()) {
      $chartedTotal=$rowsCharted['chartTotal'];

      //$description = $row['selian_pid'] . " " . $row['name_last'] . " " . $row['name_2'] . " " . $row['name_first'];
      
      $sqlPresc="SELECT care_encounter_prescription.total_dosage,
                        care_encounter_prescription.nr,
                        care_encounter_prescription.partcode,
                        care_encounter_prescription.encounter_nr,
                        care_encounter.pharmacy,
                        care_person.selian_pid,
                        care_person.name_last,
                        care_person.name_2,
                        care_person.name_first 
                FROM care_encounter_prescription 
                INNER JOIN care_encounter ON care_encounter.encounter_nr=care_encounter_prescription.encounter_nr
                INNER JOIN care_person ON care_person.pid=care_encounter.pid  
                WHERE care_encounter_prescription.nr=".$_POST['nr'][$i];




      $resultPresc=$db->Execute($sqlPresc);
      if ($rowPresc=$resultPresc->FetchRow()) {
        if ($_POST['nr'][$i]==$rowPresc['nr']) {
          $nowChartTotal=+$_POST['qty'][$i];
          $chartedTotal=$chartedTotal+$nowChartTotal;
          if ($chartedTotal<=$rowPresc['total_dosage']) {
                $sql_chart="INSERT INTO care_tz_nursing_chart (nr,userdate,usertime,systemdate,qty,comment,user,dose) values('".$_POST['nr'][$i]."','".$_POST['tarehe'][$i]."','".$_POST['time'][$i]."','".$date."','".$_POST['qty'][$i]."','".$_POST['comment'][$i]."','".$_POST['user'][$i]."','".$_POST['dose'][$i]."')";

                
                  $db->Execute($sql_chart);

                /* 
                We need to deduct this stock from webERP
                1. Check stock deduction is enabled on chart
                2. Check webERP API is on
                3. Pull stock balance From webERP
                4. Deduct Stock in weberp 
                5. Patient is tagged to which stock location

                transmit_to_weberp_enabled
                nurse_chart_deduct_stock 
                */

                require_once $root_path . 'include/care_api_classes/class_weberp_c2x.php';

                  if(!isset($weberp_obj)):

                    $weberp_obj = new weberp();                 


                  endif;               


                $sqlCheckWeberpApi = "SELECT value,type FROM care_config_global WHERE type IN('transmit_to_weberp_enabled','nurse_chart_deduct_stock') AND value>0";

                $resultApi = $db->Execute($sqlCheckWeberpApi);
                $isApiOn = ($resultApi->RecordCount()>1) ? true : false;

                if($isApiOn && isset($weberp_obj)):                    
                  //is stock code exist in weberp?
                   $item=$weberp_obj->get_stock_item_from_webERP($rowPresc['partcode']);
                    
                    //just to be sure weberp stock id and cmd partcode are equal
                    if ($item['stockid'] == $rowPresc['partcode'] ) :
                      //Let us check balance of stock at patient location
                      $stockBal = $weberp_obj->get_stock_balance_webERP($item['stockid']);                      

                                           
                       
                       for ($j=0; $j < sizeof($stockBal); $j++) :                     
                        
                        
                         if ($rowPresc['pharmacy'] == $stockBal[$j]['loccode']):
                          $stockBalance = $stockBal[$j]['quantity'];

                           if ($stockBalance>0 && $stockBalance>=$_POST['qty'][$i] && $_POST['qty'][$i]>0 ) :
                            // echo 'weberp balance= '.$stockBalance."<br>";
                            // echo 'qty to deduct = '.$_POST['qty'][$i];
                            $TranDate = date('Y-m-d');
                            $zero = 0.00;
                            $toDeduct = number_format($_POST['qty'][$i], 2);
                            $Quantity = $zero - $toDeduct;
                            $description = $rowPresc['selian_pid'] . " " . $rowPresc['name_last'] . " " . $rowPresc['name_2'] . " " . $rowPresc['name_first'];

                            $TranDate .= "_" . $description;

                            $adjust = $weberp_obj->stock_adjustment_in_webERP($rowPresc['partcode'], $stockBal[$j]['loccode'], $Quantity, $TranDate);                          


                            
                           endif;






                       
                          

                        
                          
                         endif;
                        
                       endfor;

                      
                       






                    endif;
                       

                     
                    





                  
                 
                  

                

                  

                             

                endif;
                
               













            
          }
        
        }    

        
      }

      
    } 

}//for loop





    

    
    
   
if(isset($_REQUEST["destination"])){
	header("Location: {$_REQUEST["destination"]}");
}else if (isset($_SERVER["HTTP_REFERER"])) {
	header("Location: {$_SERVER["HTTP_REFERER"]}");	
}

?>



