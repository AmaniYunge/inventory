
	
 <?php 

 $data=$_REQUEST["name"];
 $data=explode("&",$data);


 $dateCheck=$data[0];
$datemysqlto=$data[1];
if($dateCheck !=""){

 if($datemysqlto !=""){
	
	 }
	 else { 
	$datemysqlto =$dateCheck;	 
	 }

 }
else { 

$dateCheck= date("Y-m-d"); $datemysqlto= date("Y-m-d");


 }

require("cnt.php");	
							
							
							$tatol=0; 
							$cost=0;
							$cost_total=0;
							$lab_total=0;
							$dental_total=0;
							$dressing_total=0;
							$medicine_total=0;
							$other_total=0;
							$medicine_total=0;
							$doctor_total=0;
							$cashier_total=0;
							$inpatient_total=0;
							
							$no=0;
				echo "<!--div id='left'><ul ><li onclick='\$(\"#left\").hide();'  >all bima</li> ";		
$sq=mysql_query("SELECT * FROM `bima_list`");
	while($row=mysql_fetch_array($sq)):
	$bima=$row['bima_name'];
	$bima_id=$row['bima_id'];
	
	        echo "<li onclick='\$(\"#left\").hide();'  >$bima</li> "; 
			
	 endwhile;
	echo "</ul>
	</div-->";



							echo"<table id='tfhover' class='tftable1' width='100%'><tr style='text-transform:uppercase; '>
							<caption><h3>CASH $dateCheck to $datemysqlto</h3></caption>
								         <th>No.</th>
							            <th align='left'>Name</th>
							            <th>reception</th>
							             <th>laboratory</th>
							             <th>medicine</th>
							             <th>injection/dressing</th>
										 <th>inpatient</th>
										 
							             <th>total cost</th>
										 <th>unpaid</th>
										 <th>paid</th>
										 
										 
										 
										  </tr>	 ";
							$query=mysql_query("SELECT sum(lab_cost) as lab,sum(med_cost) as medicine,sum(rec_cost) as doctor, sum(injection_cost) as inj,sum(theater_cost) as theater,sum(inpatient_cost) as inpatient,patient_id  FROM record WHERE record_date BETWEEN '$dateCheck' AND '$datemysqlto'  GROUP BY patient_id ORDER BY record_id DESC ");		
							while($rows=mysql_fetch_array($query)): 
							
						 
							
							
							
							$lab=$rows['lab'];
							$doctor=$rows['doctor'];
							$id=$rows['patient_id'];
							
							$dressing=$rows['inj'];
							$medicine=$rows['medicine'];	
							$other=$rows['theater'];
							$bima=$rows['bima'];
							$age=$rows['age'];
							$dental=$rows['detal'];
							$recidence=$rows['recidence'];
							$inpatient=$rows['inpatient'];
								$quer=mysql_query("SELECT * FROM patient WHERE patient_id='$id' AND bima=''");
							while($row=mysql_fetch_array($quer)): 
							
							$name1=$row['patient_name'];
							$name=strtoupper($name1);
							
							
							//total
							$doctor_total=$doctor_total+$doctor;
							$lab_total=$lab_total+$lab;
							$medicine_total=$medicine_total+$medicine;
							$other_total=$other_total+$other;
                            $dressing_total=$dressing_total+$dressing;
							$inpatient_total=$inpatient_total+$inpatient;
							$dental_total=$dental_total+$dental;
							
							$cost=$doctor+$lab+$medicine+$dressing+$other+$inpatient;
							$cost_total1=$cost_total1+$cost;
							
							
	/*	SUM( rec_cost ) as rec,
 SUM( med_cost ) as med,
  SUM( injection_cost ) as inj,
   SUM( inpatient_cost ) as inp,
    SUM( lab_cost ) as lab,	
	
	
	*/		
			$no=$no+1;
					$unpaidsql=mysql_query(" SELECT 
SUM( rec_cost ) as rec,
 SUM( med_cost ) as med,
  SUM( injection_cost ) as inj,
   SUM( inpatient_cost ) as inp,
    SUM( lab_cost ) as lab
	

FROM `record`
WHERE patient_id ='$id'
GROUP BY patient_id");
while($rowa=mysql_fetch_array($unpaidsql)):

  //$paid=$rowa['paid'];
   $reca=$rowa['rec'];
    $laba=$rowa['lab'];
	 $meda=$rowa['med'];
	  $inja=$rowa['inj'];
	   $inpa=$rowa['inp'];
endwhile;




$totaly=mysql_query(" SELECT SUM( other_cost ) AS paid
FROM `record`
WHERE patient_id = '$id'
GROUP BY patient_id");
while($rowf=mysql_fetch_array($totaly)):

  $paid=$rowf['paid'];
  
endwhile;
$unpaid=$reca+$laba+$meda+$inja+$inpa-$paid;
				
								//$td_color="background-color:#FFF;"; 
					
							if($no %2)
							{
							$td_color="";
						  }
							$dc=number_format($doctor);
							if( $dc==0){
							$dc='';
							}
							$mc=number_format($medicine);
							if( $mc==0){
							$mc='';
							}
							$dr=number_format($dressing);
							if( $dr==0){
							$dr='';
							}
							$ip=number_format($inpatient);
							if( $ip==0){
							$ip='';
							}
							$ot= number_format($other);
							if( $ot==0){
							$ot='';
							}
							$ct=number_format($cost);
							if( $ct==0){
							$ct='';
							}
							$lb=number_format($lab);
							if( $lb==0){
							$lb='';
							}
							$un=number_format($unpaid);
							if( $un==0){
							$un='';
							$paid=$cost;
							}
							$cost_totalunpaid=$cost_totalunpaid+$unpaid;
							$paid_cost=$cost-$unpaid;
		                    $other_totalpaid=$other_totalpaid+$paid_cost;					
					         ?>
							<tr 
                            onclick='sendata("selected.php","#mainbody","","<?php echo $id; ?>");
 
if("laboratory"==$("#dept").val())
{ 
sendata("ul_lab_patient.php","#topp","","");
}
else if("recption"==$("#dept").val())
{
 sendata("ul_recp_patient.php","#topp","","");
 }
 else if("medicine"==$("#dept").val())
{
 sendata("ul_med_patient.php","#topp","","");
 }
 else if("doctor"==$("#dept").val())
{
 sendata("ul_patient.php","#topp","","");
 }
  else if("cashier"==$("#dept").val())
{
 sendata("ul_cash_patient.php","#topp","","");
 }
  else if("injection"==$("#dept").val())
{
 sendata("ul_inj_patient.php","#topp","","");
 }
  else if("clinic"==$("#dept").val())
{
 sendata("ul_clinic_patient.php","#topp","","");
 }
  else if("tb_hiv"==$("#dept").val())
{
 sendata("ul_tb_hiv_patient.php","#topp","","");
 }
else{}


' 
 >
              <?php if($paid_cost<0){
				  $paid_cost=0;
				  
				  }
							                echo"<td align='center'>$no</td>
							                  <td align='left'>$name  </td>
							                  <td align='right'>".$dc." </td>
						                     <td align='right'>".$lb." </td>
							                  <td align='right'>".$mc ." </td>
							                  <td align='right'>" .$dr ."</td>	
											  <td align='right'>" .$ip ."</td>	
											 
											   <td align='right'>" .$ct."</td>
											   <td align='right'>" .$un ."</td>
											   <td align='right'>" .number_format($paid_cost) ."</td>
											  						
									</tr>";
					         $cost=0;
							endwhile;
							endwhile;
								echo"<tr  align='right' height='28px' style='background-color:#C8C9EA; '   >
				 <th id='cost_total'></th>
				 <th align='right' style='font-size:18px; font:bold; '>Total</th>
	            <th align='right' style='font-size:18px; font:bold; '>".number_format( $doctor_total)."</th>
	            <th align='right' style='font-size:18px; font:bold; '>".number_format( $lab_total)."</th>
	            <th align='right' style='font-size:18px; font:bold; '>".number_format($medicine_total)."</th>
			     <th align='right' style='font-size:18px; font:bold; '>".number_format( $dressing_total)."</th>
	            <th align='right' style='font-size:18px; font:bold; '>".number_format( $inpatient_total)."</th>
		        <th align='right' style='font-size:18px; font:bold; '>".number_format( $cost_total1)."</th>
				 <th align='right' style='font-size:18px; font:bold; '>".number_format($cost_totalunpaid)."</th>  						     
                <th align='right' style='font-size:18px; font:bold; '>".number_format($other_totalpaid)."</th>
				
				</tr></table>";		
							
							
							
							
							$doctor_total=0;
							$lab_total=0;
	                        $medicine_total=0;
			                $dressing_total=0;
	                        $inpatient_total=0;
		                    $other_total=0;
										     
							
							
							
							
							
							
							
							
								echo"<table id='tfhover' class='tftable1' width='100%'><tr style='text-transform:uppercase; '>
							<caption><h3>BIMA</h3></caption>
								          <th>No.</th>
							            <th align='left'>Name</th>
							            <th>reception</th>
							             <th>laboratory</th>
							             <th>medicine</th>
							             <th>injection/dressing</th>
										 <th>inpatient</th>
										 
							             <th>total cost</th>
										 <th>unpaid</th>
										 <th>paid</th>
										 
										 </tr>	 ";
								$query=mysql_query("SELECT  sum(lab_cost) as lab,sum(med_cost) as medicine,sum(rec_cost) as doctor, sum(injection_cost) as inj,sum(theater_cost) as theater,sum(inpatient_cost) as inpatient,patient_id  FROM record WHERE record_date BETWEEN '$dateCheck' AND '$datemysqlto'  GROUP BY patient_id ORDER BY record_id DESC ");
							while($rows=mysql_fetch_array($query)): 
							
						 
							
							
							
							
							$lab=$rows['lab'];
							$doctor=$rows['doctor'];
							$id=$rows['patient_id'];
							
							$dressing=$rows['inj'];
							$medicine=$rows['medicine'];	
							$other=$rows['theater'];
							$bima=$rows['bima'];
							$age=$rows['age'];
							$dental=$rows['detal'];
							$recidence=$rows['recidence'];
							$inpatient=$rows['inpatient'];
								$quer=mysql_query("SELECT patient_name FROM patient WHERE patient_id='$id' AND bima !='';");
							while($row=mysql_fetch_array($quer)): 
							
							$name1=$row['patient_name'];
							$name=strtoupper($name1);
							
							
							//total
							$doctor_total=$doctor_total+$doctor;
							$lab_total=$lab_total+$lab;
							$medicine_total=$medicine_total+$medicine;
							$other_total=$other_total+$other;
                            $dressing_total=$dressing_total+$dressing;
							$inpatient_total=$inpatient_total+$inpatient;
							$dental_total=$dental_total+$dental;
							
							$cost=$doctor+$lab+$medicine+$dressing+$other+$inpatient;
							$cost_total2=$cost_total2+$cost;
							
	/*	SUM( rec_cost ) as rec,
 SUM( med_cost ) as med,
  SUM( injection_cost ) as inj,
   SUM( inpatient_cost ) as inp,
    SUM( lab_cost ) as lab,	
	
	
	*/		
			$no=$no+1;
					$unpaidsql=mysql_query(" SELECT 
SUM( rec_cost ) as rec,
 SUM( med_cost ) as med,
  SUM( injection_cost ) as inj,
   SUM( inpatient_cost ) as inp,
    SUM( lab_cost ) as lab
	

FROM `record`
WHERE patient_id ='$id'
GROUP BY patient_id");
while($rowa=mysql_fetch_array($unpaidsql)):

  //$paid=$rowa['paid'];
   $reca=$rowa['rec'];
    $laba=$rowa['lab'];
	 $meda=$rowa['med'];
	  $inja=$rowa['inj'];
	   $inpa=$rowa['inp'];
endwhile;




$totaly=mysql_query(" SELECT SUM( other_cost ) AS paid
FROM `record`
WHERE patient_id = '$id'
GROUP BY patient_id");
while($rowf=mysql_fetch_array($totaly)):

  $paid2=$rowf['paid'];
  
endwhile;
$unpaid2=$reca+$laba+$meda+$inja+$inpa-$paid2;
							
							
								//$td_color="background-color:#FFF;"; 
					
							if($no %2)
							{
							$td_color="";
						  }
							$dc=number_format($doctor);
							if( $dc==0){
							$dc='';
							}
							$mc=number_format($medicine);
							if( $mc==0){
							$mc='';
							}
							$dr=number_format($dressing);
							if( $dr==0){
							$dr='';
							}
							$ip=number_format($inpatient);
							if( $ip==0){
							$ip='';
							}
							$ot= number_format($other);
							if( $ot==0){
							$ot='';
							}
							$ct=number_format($cost);
							if( $ct==0){
							$ct='';
							}
							$lb=number_format($lab);
							if( $lb==0){
							$lb='';
							}
							$un=number_format($unpaid2);
							if( $un==0){
							$un='';
							$paid2=$cost;
							}
							$cost_totalunpaid2=$cost_totalunpaid2+$unpaid2;
							$paid2_cost=$cost-$unpaid2;
		                    $other_totalpaid2=$other_totalpaid2+$paid2_cost;					
					          
							echo"<tr align='right' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$name  </td>
							                  <td align='right'> </td>
						                     <td align='right'> </td>
							                  <td align='right'> </td>
							                  <td align='right'></td>	
											  <td align='right'></td>	
											 
											   <td align='right'></td>
											   <td align='right'></td>
											   <td align='right'></td>
											  						
									</tr>";
					         $cost=0;
							endwhile;
							endwhile;
				echo"<tr  align='right' height='28px' style='background-color:#C8C9EA; '   >
				 <th id='cost_total'></th>
				 <th align='right' style='font-size:18px; font:bold; '></th>
	            <th align='right' style='font-size:18px; font:bold; '></th>
	            <th align='right' style='font-size:18px; font:bold; '></th>
	            <th align='right' style='font-size:18px; font:bold; '></th>
			     <th align='right' style='font-size:18px; font:bold; '></th>
	            <th align='right' style='font-size:18px; font:bold; '></th>
		        <th align='right' style='font-size:18px; font:bold; '></th>
				 <th align='right' style='font-size:18px; font:bold; '></th>  						     
                <th align='right' style='font-size:18px; font:bold; '></th>
				
				</tr></table>";		
								                    
$cost_total=$cost_total1+$cost_total2;							?>
                          