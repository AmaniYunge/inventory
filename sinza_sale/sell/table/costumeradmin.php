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
	  $from="date&nbsp;&nbsp;". $datemysql;
	   echo "date&nbsp;&nbsp;". $datemysql."<br />";
	 
	 }
	 else { 
	 $dateCheck1=$datemysqlto;
	 $from="from&nbsp;&nbsp;". $datemysql."&nbsp;&nbspto&nbsp;&nbsp ".$datemysqlto;
	 echo "from&nbsp;&nbsp;". $datemysql."&nbsp;&nbspto&nbsp;&nbsp ".$datemysqlto."<br />";
	 }

 }
else { 
$dateCheck= date("Y-m-d"); $dateCheck1= date("Y-m-d");
echo "today&nbsp;&nbsp;".  date("Y-m-d")."<br />";
$from="&nbsp;&nbsp;".  date("Y-m-d");
}
							$no=1;
							
							echo "<br/><br/><h3>cashier No._1</h3>";
							
							echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>customer name</th>
										  <th align='left'>phone</th>
										 <th  align='right'>paid</th>
										  <th  align='right'>unpaid</th>
										   <th  align='right'>change</th>
							            <th  align='right'>cost</th>
							             <th></th>
							            
											 ";
								
							$total1=0;
							$totalremain=0;
							$totalpaid=0;
							$change_total1=0;
							
							$querys=mysql_query("select (select name from siimshealthcenter.data where id=custm) as name,(select medicine from siimshealthcenter.data where id=custm) as medicine,(select others from siimshealthcenter.data where id=custm) as cashier2,(select age from siimshealthcenter.data where id=custm) as phone ,(select bima from siimshealthcenter.data where id=custm) as cashier from rdsell where date BETWEEN '$dateCheck' AND '$dateCheck1'GROUP BY custm HAVING cashier='cashier1';");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['qt'];
							 $name=$rows['name'];
							$paid=$rows['cashier2'];
							$phone=$rows['phone'];
							
							$cost=$rows['medicine'];
							$remain=$cost-$paid;
							if($remain>0){
							$totalremain=$totalremain+$remain;
							}
							$totalpaid=	$totalpaid+$paid;
							$total1=$total1+$cost;
							
							
							//total
							
						
							
								$td_color="background-color:#FFF;"; 
					
						
						
							
							$cost=number_format($cost);
							if( $cost==0){
							$cost='';
							}
							$remaind=$remain;
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
							                <td align='right'>" .$pay."</td>";	
											
											
											  if($remaind>0){
												 
							                echo " <td align='right'>" .number_format($remaind) ."</td>";
											  }
											  else{
												   echo " <td align='right'></td>";
												  }
											  if($remaind < 0){
												  $remaind=$remaind * -1; 
												  $change_total1= $change_total1+$remaind;
											
							  
							
											  echo " <td align='right'>" .number_format($remaind) ."</td>";
											  }else{
												   echo " <td align='right'></td>";
												  }	
							                  echo "<td align='right'>" .$cost ."</td>	
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
											  <th ></th>
											 <th >Total</th>
											  <th align='right' id='cost_total' >".number_format($totalpaid)."</th>
											  <th  align='right' id='cost_total' >".number_format($totalremain)."</th>
											   <th align='right'>".number_format($change_total1)."</th>									
										     <th align='right' id='cost_total' >".$cost_total."</th>
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
										  <th  align='right'>unpaid</th>
										  <th  align='right'>change</th>
							            <th  align='right'>cost</th>
							             <th></th>
							            
											 ";
								
							$total2=0;
							$totalpaid1=0;
							$totalremain1=0;
							$change_total2=0;
							
						$querys=mysql_query("select (select name from siimshealthcenter.data where id=custm) as name,(select medicine from siimshealthcenter.data where id=custm) as medicine,(select others from siimshealthcenter.data where id=custm) as cashier2,(select age from siimshealthcenter.data where id=custm) as phone ,(select bima from siimshealthcenter.data where id=custm) as cashier from rdsell where date BETWEEN '$dateCheck' AND '$dateCheck1'GROUP BY custm HAVING cashier='cashier2';");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['qt'];
							 $name=$rows['name'];
							  $phone=$rows['phone'];
							$paid=$rows['cashier2'];
							
							$cost=$rows['medicine'];
							$remain=$cost-$paid;
							if($remain>0){
							$totalremain1=$totalremain1+$remain;
							}
							$totalpaid1=	$totalpaid1+$paid;
							$total2=$total2+$cost;
							
							
							//total
							
						
							
								$td_color="background-color:#FFF;"; 
					
						
						
							
							$cost=number_format($cost);
							if( $cost==0){
							$cost='';
							}
							$remaind=$remain;
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
							                <td align='right'>" .$pay."</td>	";
											
											  if($remaind>0){
												 
							                echo " <td align='right'>" .number_format($remaind) ."</td>";
											  }
											  else{
												   echo " <td align='right'></td>";
												  }
											  if($remaind < 0){
												  $remaind=$remaind * -1; 
												  $change_total2= $change_total2+$remaind;
											
							  
							
											  echo " <td align='right'>" .number_format($remaind) ."</td>";
											  }else{
												   echo " <td align='right'></td>";
												  }		
							                 echo" <td align='right'>" .$cost ."</td>	
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
											 <th align='right' id='cost_total' >".number_format($totalpaid1)."</th>
											  <th align='right' id='cost_total' >".number_format($totalremain1)."</th>
											    <th align='right' >".number_format($change_total2)."</th>									
										     <th align='right' id='cost_total' >".$cost_total."</th>
							                 <th id='cost_total'></th>
							                
									</tr>";
									echo"</table>";	
							
							
								
							
							
							echo "<br/><br/><br/>";
							
							
									
							echo "<!--h3>cashier No._3</h3>";
							
							
							$no=1;
							
								echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>customer name</th>
										 <th align='left'>phone</th>
										 <th  align='right'>paid</th>
										  <th  align='right'>unpaid</th>
										    <th  align='right'>change</th>
							            <th  align='right'>cost</th>
							             <th></th-->
							            
											 ";
								
							$total3=0;
							$totalpaid2=0;
							$totalremain2=0;
							$change_total3=0;
						$querys=mysql_query("select (select name from siimshealthcenter.data where id=custm) as name,(select medicine from siimshealthcenter.data where id=custm) as medicine,(select others from siimshealthcenter.data where id=custm) as cashier3,(select age from siimshealthcenter.data where id=custm) as phone ,(select bima from siimshealthcenter.data where id=custm) as cashier from rdsell where date BETWEEN '$dateCheck' AND '$dateCheck1'GROUP BY custm HAVING cashier='cashier3';");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['qt'];
							 $name=$rows['name'];
							  $phone=$rows['phone'];
							$paid=$rows['cashier3'];
							
							$cost=$rows['medicine'];
							$remain=$cost-$paid;
							if($remain>0){
							$totalremain2=$totalremain2+$remain;
							}
							$totalpaid2=	$totalpaid2+$paid;
							$total3=$total3+$cost;
							
							
							//total
							
						
							
								$td_color="background-color:#FFF;"; 
					
						
						
							
							$cost=number_format($cost);
							if( $cost==0){
							$cost='';
							}
							$remaind=$remain;
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
							echo"<!--tr style='$td_color border-bottom:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$name</td>
											     <td align='left'>$phone</td>
							                <td align='right'>" .$pay."</td>";	
											 if($remaind>0){
												 
							                echo " <td align='right'>" .number_format($remaind) ."</td>";
											  }
											  else{
												   echo " <td align='right'></td>";
												  }
											  if($remaind < 0){
												  $remaind=$remaind * -1; 
												  $change_total3= $change_total3+$remaind;
											
							  
							
											  echo " <td align='right'>" .number_format($remaind) ."</td>";
											  }else{
												   echo " <td align='right'></td>";
												  }	
							                  echo "<td align='right'>" .$cost ."</td>	
											  <td align='right'>
											  </td>	
											 					
									</tr-->";	
									$no=$no+1;
							}
					         $cost=0;
							 $remain=0;
							
							endwhile;
							
						
							$cost_total=number_format($total3);
							if( $total3==0){
							$cost_total='';
							}
							
							
							
							echo"<!--tr  align='right' height='28px' style='font-size:16px; font:bold; color:#FFF; background:#600;' >
							                 <th id='cost_total'></th>
											  <th ></th>
											 <th >Total</th>
											 <th align='right' id='cost_total' >".number_format($totalpaid2)."</th>
											  <th align='right' id='cost_total' >".number_format($totalremain2)."</th>
											  <th align='right' id='cost_total' >".number_format($change_total3)."</th>									
										     <th align='right' id='cost_total' >".$cost_total."</th>
							                 <th id='cost_total'></th>
							                
									</tr-->";
									echo"</table>";	
							
							
								
							
							
							echo "<br/><br/><br/>";
						$query=mysql_query("SELECT * FROM `moshi_db`.`debit` 	where date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");
						
							$no=0;
							$totalamount=0;
						
									
							while($rows=mysql_fetch_array($query)): 
							
							
							$amount=$rows['payment'];
							$id=$rows['id'];
						
						
							
								$totalamount=$totalamount+$amount;
							endwhile;
							    // $totalpd=$totalpaid1+$totalremain1
								$total4=$total1+$total2+$total3;
								$totalpaid3=$totalpaid+$totalpaid1+$totalpaid2;
									$totalremain3=$totalremain+$totalremain1+$totalpaid2;
										$total4=number_format($total4);
										$totalbalance=0;
										//$totalbalance=$totalpaid3 - $totalamount;
										
										
							
							$query=mysql_query("SELECT * FROM `siimshealthcenter`.`data` 	");
								$totalallamount=0;
								$totalallamountremain=0;
							while($rows=mysql_fetch_array($query)):
							
							$allamount=$rows['medicine'];
				             $allamountremain=$rows['others'];
								$totalallamount=$totalallamount + $allamount;
								$totalallamountremain=$totalallamountremain +  $allamountremain;
								
							$querycost=mysql_query("SELECT * FROM `moshi_db`.`debit` 	");
							 $allcost=0;
							while($rows=mysql_fetch_array($querycost)):
                             $cost=$rows['payment'];

                            $allcost=$allcost+$cost;
                             endwhile;

							endwhile;
							$qu=mysql_query("SELECT sum(profit) as profit FROM `moshi_db`.`rdsell` 	where date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");                             while($rows=mysql_fetch_array($qu)):
						
						$totalprofit=$rows['profit'];
						
						endwhile;
						$quz=mysql_query("SELECT sum(medicine) as medicine  FROM `siimshealthcenter`.`data` 	where date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");                             while($rowz=mysql_fetch_array($quz)):
						
						$totalcostz=$rowz['medicine'];
						endwhile;
							$remaintotal=$totalremain+$totalremain1+$totalremain2;
							$change_total=$change_total1+$change_total2+$change_total3;
							$totalbalance=$totalallamountremain-$allcost;
							 if($change_total>0){
								 $totalbalance=$totalbalance-$change_total;
								 }
							//$remaintotal=$totalallamount-$totalallamountremain;
							
									/*	echo "<h4>Total paid &nbsp;&nbsp; $totalpaid3</h4>";
										echo "<h4>Total remain &nbsp;&nbsp; $totalremain3</h4>";
									   echo "<h4>Total &nbsp;&nbsp; $totalamount</h4>";
										echo "<h4>Total debit &nbsp;&nbsp; $total3</h4>"; 
										*/?>
			<table width="400px" style=" background-color:#FFF; border:#F00 thin solid; font-family:Arial, Helvetica, sans-serif;">
             <caption style="color:#009; font-size:18px;">information <?php echo $from; ?></caption>
              <tr bgcolor="#CCCCCC"><td>Total Cash </td><td align="right"><?php echo number_format($totalpaid3); ?></td></tr>
               <tr bgcolor="#CCCCCC"><td>Total products Cost</td><td align="right"><?php echo number_format($totalcostz); ?></td></tr>
              
              <tr bgcolor="#CCCCCC"><td>Total Expediture</td><td align="right"><?php echo number_format($totalamount); ?></td></tr>
             
              <tr bgcolor="#CCCCCC"><td>Available Cash - Cashier</td><td align="right"><?php echo number_format($totalbalance); ?></td></tr>
               <!--tr bgcolor="#CCCCCC"><td>Profit</td><td align="right"><?php echo number_format($totalprofit); ?></td></tr-->
              
			  
			  <?php
			  
			  $remain=0;
							
						$querys1=mysql_query("SELECT medicine,others FROM `siimshealthcenter`.`data`   ");
							while($rowdata=mysql_fetch_array($querys1)):
						
							$full=$rowdata['medicine'];
							$paid=$rowdata['others'];
							$remain=$full-$paid;
						
						  if($remain>0){
						  $remain_totale=$remain_totale+$remain;
						  }
				 	
							endwhile;
			  
			  
			  
			   if($remain_totale>0){ 
			  echo" <tr bgcolor='#CCCCCC'><td>Total unpaid </td><td align='right'>". number_format($remaintotal) ."</td></tr>";
             }
			 if($change_total>0){
            echo" <tr bgcolor='#CCCCCC'><td>Total change </td><td align='right'>". number_format($change_total) ."</td></tr>";
			 }
            ?>
              </table>
     
     <?php
							           
								
 }
							?>
