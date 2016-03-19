 <?php 
 if($_POST['cst'] !=""){
	
 }
 
 else { 
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
							$no=1;
							
							echo "<br/><br/><h3>cashier No._1</h3>";
							
							echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>customer name</th>
										  <th align='left'>phone</th>
										 <th  align='right'>paid</th>
										  <th  align='right'>remain</th>
							            <th  align='right'>cost</th>
							             <th></th>
							            
											 ";
								
							$total1=0;
							$totalremain=0;
							$totalpaid=0;
							
							$querys=mysql_query("select (select name from siimshealthcenter.data where id=custm) as name,(select medicine from siimshealthcenter.data where id=custm) as medicine,(select others from siimshealthcenter.data where id=custm) as cashier2,(select age from siimshealthcenter.data where id=custm) as phone ,(select bima from siimshealthcenter.data where id=custm) as cashier from rdsell where date BETWEEN '$dateCheck' AND '$dateCheck1'GROUP BY custm HAVING cashier='cashier1';");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['qt'];
							 $name=$rows['name'];
							$paid=$rows['cashier2'];
							$phone=$rows['phone'];
							
							$cost=$rows['medicine'];
							$remain=$cost-$paid;
							$totalremain=$totalremain+$remain;
							$totalpaid=	$totalpaid+$paid;
							$total1=$total1+$cost;
							
							
							//total
							
						
							
								$td_color="background-color:#FFF;"; 
					
						
						
							
							$cost=number_format($cost);
							if( $cost==0){
							$cost='';
							}
							$remaind=number_format($remain);
							if( $remain==0){
							$remain='';
							}
							
							$pay=number_format($paid);
							if( $remain==0){
							$remain='';
							}
							
							if($name !=''){
									
						
								if($no %2)
							{
							$td_color="background-color:#FFF;";
						  }
						  $name=strtolower($name);
							echo"<tr style='$td_color border-bottom:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$name</td>
											  <td align='left'>$phone</td>
							                <td align='right'>" .$pay."</td>	
											<td align='right'>" .$remaind ."</td>	
							                  <td align='right'>" .$cost ."</td>	
											  <td align='right'>
											  </td>	
											 					
									</tr>";	
									$no=$no+1;
							}
					         $cost=0;
							 $remain=0;
							
							endwhile;
							
						
							$cost_total=number_format($total1);
							if( $total1==0){
							$cost_total='';
							}
							
							
							
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold; color:#FFF; background:#600;' >
							                 <th id='cost_total'></th>
											  <th >Total</th>
											 <th >Total</th>
											  <th id='cost_total' >".number_format($totalpaid)."</th>
											  <th id='cost_total' >".number_format($totalremain)."</th>									
										     <th id='cost_total' >".$cost_total."</th>
							                 <th id='cost_total'></th>
							                
									</tr>";
									echo"</table>";	
							
							
								
							
							
							echo "<br/><br/><br/>";
							
							echo "<h3>cashier No._2</h3>";
							
							
							$no=1;
							
								echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>customer name</th>
										 <th align='left'>phone</th>
										 <th  align='right'>paid</th>
										  <th  align='right'>remain</th>
							            <th  align='right'>cost</th>
							             <th></th>
							            
											 ";
								
							$total2=0;
							$totalpaid=0;
							$totalremain=0;
							
						$querys=mysql_query("select (select name from siimshealthcenter.data where id=custm) as name,(select medicine from siimshealthcenter.data where id=custm) as medicine,(select others from siimshealthcenter.data where id=custm) as cashier2,(select age from siimshealthcenter.data where id=custm) as phone ,(select bima from siimshealthcenter.data where id=custm) as cashier from rdsell where date BETWEEN '$dateCheck' AND '$dateCheck1'GROUP BY custm HAVING cashier='cashier2';");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['qt'];
							 $name=$rows['name'];
							  $phone=$rows['phone'];
							$paid=$rows['cashier2'];
							
							$cost=$rows['medicine'];
							$remain=$cost-$paid;
							$totalremain=$totalremain+$remain;
							$totalpaid=	$totalpaid+$paid;
							$total2=$total2+$cost;
							
							
							//total
							
						
							
								$td_color="background-color:#FFF;"; 
					
						
						
							
							$cost=number_format($cost);
							if( $cost==0){
							$cost='';
							}
							$remaind=number_format($remain);
							if( $remain==0){
							$remain='';
							}
							
							$pay=number_format($paid);
							if( $remain==0){
							$remain='';
							}
							
							if($name !=''){
									
						
								if($no %2)
							{
							$td_color="background-color:#FFF;";
						  }
						  $name=strtolower($name);
							echo"<tr style='$td_color border-bottom:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$name</td>
											     <td align='left'>$phone</td>
							                <td align='right'>" .$pay."</td>	
											<td align='right'>" .$remaind ."</td>	
							                  <td align='right'>" .$cost ."</td>	
											  <td align='right'>
											  </td>	
											 					
									</tr>";	
									$no=$no+1;
							}
					         $cost=0;
							 $remain=0;
							
							endwhile;
							
						
							$cost_total=number_format($total2);
							if( $total2==0){
							$cost_total='';
							}
							
							
							
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold; color:#FFF; background:#600;' >
							                 <th id='cost_total'></th>
											  <th ></th>
											 <th >Total</th>
											 <th id='cost_total' >".number_format($totalpaid)."</th>
											  <th id='cost_total' >".number_format($totalremain)."</th>									
										     <th id='cost_total' >".$cost_total."</th>
							                 <th id='cost_total'></th>
							                
									</tr>";
									echo"</table>";	
							
							
								
							
							
							echo "<br/><br/><br/>";
						
							
							
								$total3=$total1+$total2;
										$total3=number_format($total3);
							echo "<h4>Total &nbsp;&nbsp; $total3</h4>";
								
 }
							?>
