 <?php 
 if($_POST['cst'] !=""){
	
	 
	 if($_POST['payid'] !=""){
	$qlsmed=mysql_query("select others,medicine from `siimshealthcenter`.`data` WHERE id='$_POST[id]' LIMIT 1");
while($rowmed=mysql_fetch_array($qlsmed)):
$addmed=$rowmed['others'];
//$add=$rowmed['medicine'];
endwhile;


//cost pay remain id date 



$addtotal=$addmed + $_POST['pay'];
mysql_query("UPDATE `siimshealthcenter`.`data` SET others = '$addtotal' WHERE  id='$_POST[id]' LIMIT 1;");
		
		}
		$querys1=mysql_query("SELECT name,id,others,age,medicine,residence FROM `siimshealthcenter`.`data` WHERE   id='$_POST[id]'  ");
							while($rowdata=mysql_fetch_array($querys1)):
							$namedata=$rowdata['name']; 
							$phonedata=$rowdata['age']; 
							$paid=$rowdata['others']; 
							$cash=$rowdata['medicine']; 
							$rec_no=$rowdata['residence']; 
							$id=$rowdata['id'];
							$remain=$cash-$paid;
						
		
	

	echo "<br/>
	<table>
	<tr><td id='head'>Name:</td><td>$namedata</td></tr>
	<tr><td> phone: </td><td>$phonedata<td/></tr>
	<tr><td> rec_No: </td><td>$rec_no<td/></tr>
	<tr><td> Paid:</td><td>".number_format( $paid)." <td /></tr>
	<tr><td>";
	
	if($remain>0){
		echo "Unpaid :</td><td>".number_format($remain);
		
		}else{
	$remain2=$remain * -1;
	if($remain2>0){
		
		echo"Change :</td><td>".number_format($remain2);
		}
	 
	} 
		echo "</td></tr><table>
		<form id='head2' action='' method='post'>
	pay:<input id='head1' name='pay' type='text' value=''>
	<input name='payid' type='hidden' value='payyer'>
		<input name='unpaid' type='hidden' value='cst'>
		<input name='id' type='hidden' value='$id'>
		<input name='remain' type='hidden' value='$remain' />
		<input name='cst' type='hidden' value='payment'>
	
	 <input type='hidden' name='dir' value='unpaid' />
	<input name='send' type='submit' value='Enter'>
	</form>
	"; 
	 
	endwhile;
	if($_POST['pay'] !=""){
		$cash1=$_POST['remain'];
		
		mysql_query("INSERT INTO `moshi_db`.`rdby` (
`id` ,
`pid` ,
`cost` ,
`date` ,
`paid` ,
`unpaid`
)
VALUES (
NULL , '$id', '$cash1', CURDATE( ) , '$_POST[pay]', '$remain'
);");


$do="";
	}

		$no=1;
							
							echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>product name $do</th>
										<th align='left'>unit</th>
							            <th>quantity</th>
							             <th>amount</th>
							            
											 ";
								
							
							
							$querys=mysql_query("select * from rdsell where custm='$_POST[id]';");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['qt'];
							
							$pid=$rows['pid'];
							$d=$rows['d'];
								//$per=$rows['per'];
							$cost=$rows['cst'];
							
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
						  
							$query=mysql_query("select * from data where id='$pid';");
							while($rows=mysql_fetch_array($query)): 
							$name=$rows['nm'];
							$per=$rows['per'];
							echo"<tr style='$td_color border-bottom:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$name</td>
							                 <td align='left'>$per</td>
							                  <td align='right'>$qt</td>	
											  <td align='right'>
											  " .$cost ."</td>	
											 					
									</tr>";	
									
									endwhile;
									$no=$no+1;
							}
					         $cost=0;
							
							endwhile;
						
							$pro_total=number_format($pro_total);
							if( $pro_total==0){
							$pro_total='';
							}
							$cost_total=number_format($cost_total);
							if($cost_total==0){
							$cost_total='';
							}
							
				
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold; color:#fff; background-color:#600' >
							                 <th id='cost_total'></th>
											
											 <th ></th>
										
										     <th id='cost_total'></th> 
											 <th >Total</th>
							                 <th id='cost_total'>".$cost_total."</td>
							                
									</tr>
									
							<tr><td colspan='5'>			
		
		
		<table id='unpaid'  >
  
   
   
     <tr bgcolor='#C9CED3'><td >date</td><td>Amount</td><td>paid</td><td> unpaid</td>
  </tr>
  ";
  $paid="";
  $cost="";
  $unpaid="";
  
  $query=mysql_query("select * from rdby where pid='$id';");
							while($rows=mysql_fetch_array($query)): 
							$paid=$rows['paid'];
							$unpaid=$rows['unpaid'];
							$cost=$rows['cost'];
    echo "<tr><td>2014-05-23</td><td>$cost</td><td>$paid</td><td>$unpaid</td></tr>";
     
    endwhile;
  
  echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
  <tr>
    
</table>
</td></tr>
									
									
									
									
									
									
									
									
									
									";
									echo"</table>";
									
									
	
									echo "<center><form action='' method='post' >
    <input type='hidden' name='dir' value='cst' />
  <input type='submit' name='cos' value='back' />
    </form></center>";
										
			
	
	
	
	
	
	
	
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

							//$query=mysql_query("SELECT * FROM rdsell WHERE date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");
							$query=mysql_query("SELECT * FROM data where ct !=''  ");
						
							$no=1;
							
							echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>customer name</th>
										 <th  align='right'>paid</th>
										  <th  align='right'>unpaid</th>
										   <th  align='right'>change</th>
							            <th  align='right'>cost</th>
							             <th></th>
							            
											 ";
								
							
							 $change_total=0;
							$querys=mysql_query("SELECT sum(cst) as cost,custm FROM rdsell   GROUP BY custm  ");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['qt'];
							$name=$rows['custm'];
							$pid=$rows['pid'];
							$d=$rows['d'];
							$cost=$rows['cost'];
							
							$pro=$pro*$qt;
							
							
							//total
							$remain=0;
							
						$querys1=mysql_query("SELECT name,medicine,others FROM `siimshealthcenter`.`data` WHERE   id='$name'  ");
							while($rowdata=mysql_fetch_array($querys1)):
							$namedata=$rowdata['name'];
							$full=$rowdata['medicine'];
							$paid=$rowdata['others'];
							$remain=$full-$paid;
							
							$pro_total=$pro_total+$pro;
							//$cost_total=$cost_total+$cost;
							
								$td_color="background-color:#FFF;"; 
					
						
						
							$sell=number_format($sell);
							if( $sell==0){
							$sell='';
							}
							/* $cost=number_format($cost);
							if( $cost==0){
							$cost='';
							}
							*/
							$pro=number_format($pro);
							if( $pro==0){
							$pro='';
							}
							$paidd=number_format($paid);
							if( $paid==0){
							$paidd='';
							}
							$remaind=$remain;
							if( $remain==0){
							$remaind='';
							}
							
							if($cost !=''){
									
						
								if($no %2)
							{
							$td_color="background-color:#FFF;";
						  }
						  $namedata=strtolower($namedata);
						  if($remain>0){
						  $remain_total=$remain_total+$remain;
						  }
						//$paid_total=$paid_total+$paid;
						
							/*echo"<tr style='$td_color border-bottom:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$namedata</td>
											  <td align='right'>" .$paidd ."</td>";
											 
											  if($remaind>0){
												 
							                echo " <td align='right'>" .number_format($remaind) ."</td>";
											 }
											  else{
												   echo " <td align='right'></td>";
												  } */
											  if($remaind >0){
												 
												  $cost_total=$cost_total+$cost;
												  $paid_total=$paid_total+$paid;
												  $remaind=$remaind * 1; 
												  $change_total= $change_total+$remaind;
											
							                      $cost=number_format($cost);
							                      if( $cost==0){
							                      $cost='';
							                       }
							
											  echo "<tr style='$td_color border-bottom:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$namedata</td>
											  <td align='right'>" .$paidd ."</td> <td align='right'>" .number_format($remaind) ."</td>
											  <td></td>
											 <td align='right'>" .$cost ."</td>
											  <td align='right'>
											  <form name='cstm' action='' method='post'>
											  <button type='submit' name='cst' value='$name'>view</button>
											   <input type='hidden' name='dir' value='unpaid' />
											  <input type='hidden' name='id' value='$name' />
											  </form></td></tr>";	
											 					
									

											  											  }
																						  //else{
												   //echo " <td align='right'></td>";
												 // }
							                 /* echo " <td align='right'>" .$cost ."</td>	
											  <td align='right'>
											  <form name='cstm' action='' method='post'>
											  <button type='submit' name='cst' value='$name'>view</button>
											  <input type='hidden' name='dir' value='cst' />
											  </form></td>	
											 					
									</tr>";	*/
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
							$remain_total=number_format($remain_total);
							$paid_total=number_format($paid_total);
							if($cost_total==0){
							$cost_total='';
							}
							
							if($name !=""){
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold; color:#006 ;' >
							                 <td id='cost_total'></td>
											 <td >Total</td>
											     <td id='cost_total'>".$paid_total."</td>
										      <td id='cost_total'>".$remain_total."</td>
											  <td id='cost_total'></td>";
											// <td id='cost_total'>".number_format($change_total)
											echo "</td>
											 
										     <td id='cost_total'>".$cost_total."</td>
							                 <td id='cost_total'></td>
							                
									</tr>";
									echo"</table>";	
							
							}
							else{
								echo "no data";echo"</table>";	
								}
								
							
 }
							?>
