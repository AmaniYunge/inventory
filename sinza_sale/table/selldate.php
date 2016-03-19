
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

							//$query=mysql_query("SELECT * FROM rdsell WHERE date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");
							$query=mysql_query("SELECT * FROM data where ct !=''  ");
						
							$no=1;
							
							echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>product name</th>
							            <th>unit</th>
							             <th>price</th>
							             <th>quantity</th>
							             <th>amount</th>
										 <th> profit</th>
											 ";
								
							while($rows=mysql_fetch_array($query)): 
							
						 $name=$rows['nm'];
							$by=$rows['by'];
							$sell=$rows['pr'];
							$per=$rows['per'];
							$id=$rows['id'];
							
							$pro=0;	
							$pro=$sell-$by;
							
							$querys=mysql_query("SELECT sum(cst) as cost,sum(qt) as qt FROM rdsell where pid='$id' AND date BETWEEN '$dateCheck' AND '$dateCheck1'  ");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['qt'];
							
							$pid=$rows['pid'];
							$d=$rows['d'];
							$cost=$rows['cost'];
							
							$pro=$pro*$qt;
							
							$name=strtolower($name);
							//total
							
						
							$pro_total=$pro_total+$pro;
							$cost_total=$cost_total+$cost;
							
								$td_color="background-color:#FFF;"; 
					
						
						
							$sell=number_format($sell);
							if( $sell==0){
							$sell='';
							}
							$cost=number_format($cost);
							if( $cost==0){
							$cost='';
							}
							$pro=number_format($pro);
							if( $pro==0){
							$pro='';
							}
							
							if($cost !=''){
									
						
								if($no %2)
							{
							$td_color="background-color:#fff;";
						  }
							echo"<tr style='$td_color' border-bottom:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$name </td>
							                  <td align='center'>".$per." </td>
						                     <td align='right'>".$sell."</td>
							                  <td align='right'>".$qt ." </td>
							                  <td align='right'>" .$cost ."</td>	
											  <td align='right'>" .$pro."</td>	
											 					
									</tr>";	
									$no=$no+1;
							}
					         $cost=0;
							
							endwhile;
							endwhile;
							
							$pro_total=number_format($pro_total);
							if( $pro_total==0){
							$pro_total='';
							}
							$cost_total=number_format($cost_total);
							if($cost_total==0){
							$cost_total='';
							}
							
							if($name !=""){
							echo"<tr bgcolor='#FFFFCC' align='right' height='28px' style='font-size:16px; font:bold; color:#006 ;' >
							                 <td id='cost_total'></td>
											 <td >Total</td>
											 <td id='cost_total'></td>
							                 <td id='cost_total'></td>
							                 <td id='cost_total'></td>
										     <td id='cost_total'>".$cost_total."</td>
							                 <td id='cost_total'>".$pro_total."</td>
							                
									</tr>";
									echo"</table>";	
							
							}
							else{
								echo "no data";echo"</table>";	
								}
								
							
					
							?>
