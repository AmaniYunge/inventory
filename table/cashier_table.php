
 <?php  
$date=$_POST['bday'];
 $date1=$_POST['to'];

$datemysql=$date[6].$date[7].$date[8].$date[9]."-".$date[0].$date[1]."-".$date[3].$date[4];
$datemysqlto=$date1[6].$date1[7].$date1[8].$date1[9]."-".$date1[0].$date1[1]."-".$date1[3].$date1[4];
if($date){
 $dateCheck=$datemysql;
 if(!$date1){
	  $dateCheck1= $dateCheck;
	   echo "date&nbsp;&nbsp;". $datemysql."<br />";
	 
	 }
	 else { 
	 $dateCheck1=$datemysqlto;
	 echo "from&nbsp;&nbsp;". $datemysql."&nbsp;&nbspto&nbsp;&nbsp ".$datemysqlto."<br />";
	 }

 }
else { 
$dateCheck= date("Y-m-d"); $dateCheck1= date("Y-m-d");
echo "today&nbsp;&nbsp;".  date("Y-m-d")."<br />";
}

                         $db="siimshealthcenter";
						
$lc='localhost';$rt='root';$mc='';$cnnt=mysql_connect($lc,$rt,"");mysql_select_db($db, $cnnt);
							$query=mysql_query("SELECT * FROM data WHERE bima='' AND  date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");
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
							
							echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>Name</th>
							            <th>consultation</th>
							             <th>lab</th>
							             <th>medicine</th>
							             <th>dressing</th>
										 <th>inpatient</th>
										 <th>others</th>
							             <th>total cost</th> 	 ";
									
							while($rows=mysql_fetch_array($query)): 
							
						 
							
							
							
							$lab=$rows['lab'];
							$doctor=$rows['doctor'];
							$id=$rows['id'];
							$name1=$rows['name'];
							$dressing=$rows['dressing'];
							$medicine=$rows['medicine'];	
							$other=$rows['others'];
							$bima=$rows['bima'];
							$age=$rows['age'];
							$dental=$rows['detal'];
							$recidence=$rows['recidence'];
							$inpatient=$rows['inpatient'];
							
							$name=strtolower($name1);
							//total
							$doctor_total=$doctor_total+$doctor;
							$lab_total=$lab_total+$lab;
							$medicine_total=$medicine_total+$medicine;
							$other_total=$other_total+$other;
                            $dressing_total=$dressing_total+$dressing;
							$inpatient_total=$inpatient_total+$inpatient;
							$dental_total=$dental_total+$dental;
							
							$cost=$doctor+$lab+$medicine+$dressing+$other+$inpatient;
							$cost_total=$cost_total+$cost;
							
							$no=$no+1;
							
							
								$td_color="background-color:#FFF;"; 
					
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
							echo"<tr style='$td_color' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$name </td>
							                  <td align='right'>".$dc." </td>
						                     <td align='right'>".$lb." </td>
							                  <td align='right'>".$mc ." </td>
							                  <td align='right'>" .$dr ."</td>	
											  <td align='right'>" .$ip ."</td>	
											 
											   <td align='right'>" .$ot."</td>
											   <td align='right'>" .$ct ."</td>						
									</tr>";
					         $cost=0;
							
							endwhile;
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold;  ;' >
							                 <th id='cost_total'></th>
											 <th align='right'>Total</th>
											 <th align='right'>".number_format( $doctor_total)."</th>
							                 <th align='right'>".number_format( $lab_total)."</th>
							                 <th align='right'>".number_format($medicine_total)."</th>
										     <th align='right'>".number_format( $dressing_total)."</th>
							                 <th align='right'>".number_format( $inpatient_total)."</th>
							                <th align='right'>".number_format( $other_total)."</th> 
										    
										     
											 <th align='right'>".number_format($cost_total)."<th>  
									</tr>";
							
							
							echo"</table>";		
							
								                    
						
					/*			
						if($_POST['jina']){
							 $sql = "UPDATE data SET inpatient='$_POST[inpatient]',dressing='$_POST[dressing]' ,others='$_POST[other]' WHERE name='$_POST[jina]' ORDER BY id DESC  LIMIT 1;"; 
							mysql_query($sql);
							 mysql_close($cnnt);
							 }*/
							?>
