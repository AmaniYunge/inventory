
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
	   $d_="&nbsp;&nbsp;". $datemysql."<br />";
	 
	 }
	 else { 
	 $dateCheck1=$datemysqlto;
	 echo "from&nbsp;&nbsp;". $datemysql."&nbsp;&nbspto&nbsp;&nbsp ".$datemysqlto."<br />";
	 $d_="from&nbsp;&nbsp;". $datemysql."&nbsp;&nbspto&nbsp;&nbsp ".$datemysqlto."<br />";
	 }

 }
else { 
$dateCheck= date("Y-m-d"); $dateCheck1= date("Y-m-d");
echo "today&nbsp;&nbsp;".  date("Y-m-d")."<br />";
$d_=date("Y-m-d")."<br />";
//$d_="iiiiininiin";
}

							//$query=mysql_query("SELECT * FROM rdsell WHERE date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");printpage(0);
						
						
							
							$totalimportcost=0;
							echo"
							<button onclick=' $(\"#divd\").hide();$(\"#div0\").show();'>veiw all</button><button onclick='$(\"#divo\").hide();$(\"#divd\").show(); '>veiw categories</button><button onclick='printpage(0);' id='notprint'>print</button>";
							
							echo"<div id='divd' style='display:none;'>";
							
							echo"
							
							
							
							<table id='tablequery' width='100%' style='border:none;border-collapse:collapse; background:#fff;'>
								   ";
		
		
		$e=1;									 $sqltotals=mysql_query("select ct from data  group by ct ");
while($row=mysql_fetch_array($sqltotals)):
$cat=$row['ct'];
if($cat !=""){
			echo"
			<tr><td colspan='12'>
			
			<table id='div$e'  style='border:none; border-collapse:collapse; width:100%;'>
			<tr  align='right' height='17px' style='font-size:12px; background-color:#fff; font:bold; color:#006; border:thin solid #ccc;' >
							                
							      
										 <th style='border:thin solid #ccc; width:100px; ' align='left'>
											 <button onclick='printpage($e)'>$cat</button>
											 </th> 
							            <th align='center' style='border:thin solid #ccc;width:155px;' align='left'>product name</th>
							            <th align='center' style='border:thin solid#ccc;'>unit</th>
										<th align='center' style='border:thin solid #ccc;'>opening stock</th>
										<th align='center' style='border:thin solid #ccc;'>purchased stock</th>
										
										<th align='center' style='border:thin solid #ccc;'>sold stock</th>
										<th align='center' style='border:thin solid #ccc;'>closing stock</th>
										<th align='center' style='border:thin solid #ccc;'>purchase price</th>
							             <th align='center' style='border:thin solid #ccc;'>sell price</th>
										 <th align='center' style='border:thin solid #ccc;'>purchased cost</th>
										  <th align='center' style='border:thin solid #ccc;'>product cost</th>
							             <th align='center' style='border:thin solid #ccc;'> profit</th>
										  
										
											 </tr>";
									$e=$e+1;$no=1;
									$imp_t=0;
							$cost_t=0;
							$pro_t=0;
								$query=mysql_query("SELECT * FROM data where ct='$cat' and nm regexp '^[a-z]' order by nm  ");	
							while($rows=mysql_fetch_array($query)): 
							
						 $name=$rows['nm'];
							$by=$rows['by'];
							$sell=$rows['pr'];
							$per=$rows['per'];
							$id=$rows['id'];
							$stock=$rows['qt'];
						
							$buyprice=$rows['buyprice'];
							
							
							$querys=mysql_query("SELECT sum(cst) as cost,sum(qt) as qt,sum(import) as import,sum(profit) as profit FROM rdsell where pid='$id' AND date BETWEEN '$dateCheck' AND '$dateCheck1'  ");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['qt'];
							
							$pid=$rows['pid'];
							$d=$rows['d'];
							$cost=$rows['cost'];
							$profit=$rows['profit'];
							$import=$rows['import'];
							
							$importcost=$import*$buyprice;
							$totalimportcost+=$importcost;
							$importcost=number_format($importcost);
							$name=strtolower($name);
							//total
							$pro="";	
							if($sell>$buyprice){
							$pro=$sell-$buyprice;
							$pro=$qt*$pro;
							}
						
							$pro_total=$pro_total+$pro;
							$cost_total=$cost_total+$cost;
							$profit_total=$profit_total+$profit;
							$pro_t=$pro_t+$pro;
							$cost_t=$cost_t+$cost;
							$imp_t=$imp_t+$importcost;
							
								$td_color="background-color:#FFF;"; 
					
						
						
							$sell=number_format($sell);
							if( $sell==0){
							$sell='';
							}
							$cost=number_format($cost);
							if( $cost==0){
							$cost='';
							}
							$profit1=number_format($profit);
							if( $profit1==0){
							$profit1='';
							}
							if( $importcost==0){
							$importcost='';
							}
						
								if($no %2)
							{
							$td_color="background-color:#FFF;";
						  }
					$querys_=mysql_query("SELECT sum(cst) as cost,sum(qt) as qt,sum(import) as import,sum(profit) as profit FROM rdsell where pid='$id' AND date BETWEEN '2014-01-01' AND '$dateCheck1'  ");
							while($rows_=mysql_fetch_array($querys_)): 
							$qt_=$rows_['qt'];
							$import_=$rows_['import'];
							$stock_=$import_-$qt_;
						     	$org=0;
							$org=$stock_+$qt;
							$org=$org-$import;
							 if($org<=0){$org="";}
							 if($org==$stock){$org=$stock;}
							
						  endwhile;
						
						
						// 	SET STOCK  ondoa alama ya /*  na */ hapo chini
						
						
						
						
						
						  
						  /*
						  								mysql_query("INSERT INTO  `moshi_db`.`rdsell` (
`id` ,
`pid` ,
`qt` ,
`cst` ,
`custm` ,
`date` ,
`time` ,
`cashier` ,
`import` ,
`profit` ,
`product_from`
)
VALUES (
NULL ,  '$id',  '', NULL , NULL ,  '2014-06-01', NULL , NULL ,  '$stock', NULL , NULL
);

");
	*/						
		
						  $original=$stock+$qt;
						  if($import>0){
							  $original=$original-$import;
							  }
							  if($original<0){
								  
								  $original="";
								  }
								  if($qt<0){
								  
								  $qt="";
								  }
							echo"<tr style='$td_color border:thin #ccc solid;' >
							                  <td style='border:thin solid #ccc;' align='center'>$no</td>
							                  <td style='border:thin solid #ccc;' align='left'>$name </td>
							                  <td style='border:thin solid #ccc;' align='center'>".$per." </td>
						                       <td style='border:thin solid #000;' align='center'>".$org."</td>
							                  <td style='border:thin solid #000;' align='center'>".$import ." </td>
											    
							                  <td style='border:thin solid #000;' align='center'>" .$qt ."</td>	
											   <td style='border:thin solid #000;' align='center'>".$stock_."</td>	
											    <td style='border:thin solid #ccc;' align='right'>" .number_format($buyprice)."</td>
											    <td style='border:thin solid #ccc;' align='right'>" .$sell ."</td>
									<td style='border:thin solid #ccc;' align='right'>".$importcost ." </td>	
													 <td style='border:thin solid #ccc;' align='right'>" .$cost ."</td> 
												  <td style='border:thin solid #ccc;' align='right'>" .number_format($pro)."</td>
												  
												  	
												
											 					
									</tr>";	
									$no=$no+1;
						
					         $cost=0;
							
							endwhile;
							endwhile;
	echo"<tr  align='right' height='28px' style='font-size:16px; background-color:#D8EBE7; font:bold; color:#006; border:thin solid #ff0;' >
							                 <td style='border:thin solid #ccc;' id='cost_total'></td>
											 <td style='border:thin solid #ccc;' ></td>
											 <td style='border:thin solid #ccc;' id='cost_total'></td>
							                 <td style='border:thin solid #ccc;' id='cost_total'></td>
							                 <td style='border:thin solid #ccc;' id='cost_total'></td>
											   <td style='border:thin solid #ccc;' id='cost_total'></td>
											  <td style='border:thin solid #ccc;' id='cost_total'></td>
							              
							                 <td style='border:thin solid #ccc;' id='cost_total'></td>
											   <td style='border:thin solid #ccc;' id='cost_total'>Total</td>
							<td style='border:thin solid #ccc;' id='cost_total'>".number_format($imp_t)."</td>
											   <td style='border:thin solid #ccc;' id='cost_total'>".number_format($cost_t)."</td>
							              <td style='border:thin solid #ccc;' id='cost_total'>".number_format($pro_t)."</td>
							                
									</tr></table></td></tr>";
                             }
							endwhile;
							
							$pro_total=number_format($pro_total);
							if( $pro_total==0){
							$pro_total='';
							}
							$cost_total=number_format($cost_total);
							if($cost_total==0){
							$cost_total='';
							}
								$profit_total=number_format($profit_total);
							if($profit_total<0){
							$profit_total='';
							}
							
							if($name !=""){
							echo"<tr  align='right' height='28px' style='font-size:14px; background-color:#fff; font:bold; color:#006; border:thin solid #ccc;' >
							                 <th style='border:thin solid #ccc;' id='cost_total'></th>
											 <th style='border:thin solid #ccc;' ></th>
											 <th style='border:thin solid #ccc;' id='cost_total'></th>
							                 <th style='border:thin solid #ccc;' id='cost_total'></th>
							                 <th style='border:thin solid #ccc;' id='cost_total'></th>
											   <th style='border:thin solid #ccc;' id='cost_total'></th>
											  <th style='border:thin solid #ccc;' id='cost_total'></th>
							              
							                 <th style='border:thin solid #ccc;' id='cost_total'></th>
											   <th style='border:thin solid #ccc;' id='cost_total'>Total</th>
							<th style='border:thin solid #ccc;' id='cost_total'>".number_format($totalimportcost)."</th>
											   <th style='border:thin solid #ccc;' id='cost_total'>".$cost_total."</th>
							              <th style='border:thin solid #ccc;' id='cost_total'>".$profit_total."</th>
							                
									</tr>";
									echo"</table>";	
							
							}
							else{
								echo "no data";echo"</table>";	
								}
							echo "</div>
							
							<div id='div0' style='' >";
	
							
					
						
                            
							$query=mysql_query("SELECT * FROM data where ct !=''  and nm regexp '^[a-z]' order by nm ");
						
							$no=1;
							$totalimportcost=0;
							
							echo"
							<center><h3>SALES REPORT <br/> date $d_ </h3></center>
							
							
							<table id='tablequery' width='100%' style='border:thin solid #000; border-collapse:collapse;'>
								    <tr style='border:thin solid #000;'>    <th>No.</th>
							            <th style='border:thin solid #000;' align='left'>product name</th>
							            <th style='border:thin solid #000;'>unit</th>
										<th style='border:thin solid #000;'>opening stock</th>
										<th style='border:thin solid #000;'>purchased stock</th>
										
										<th style='border:thin solid #000;'>sold stock</th>
										<th style='border:thin solid #000;'>closing stock</th>
										<th style='border:thin solid #000;'>purchase price</th>
							             <th style='border:thin solid #000;'>sell price</th>
										 <th style='border:thin solid #000;'>purchased cost</th>
										  <th style='border:thin solid #000;'>product cost</th>
							             <th style='border:thin solid #000;'> profit</th>
										  
										
											 </tr>";
								
							while($rows=mysql_fetch_array($query)): 
							
						 $name=$rows['nm'];
							$by=$rows['by'];
							$sell=$rows['pr'];
							$per=$rows['per'];
							$id=$rows['id'];
							$stock=$rows['qt'];
						
							$buyprice=$rows['buyprice'];
							
							
							$querys=mysql_query("SELECT sum(cst) as cost,sum(qt) as qt,sum(import) as import,sum(profit) as profit FROM rdsell where pid='$id' AND date BETWEEN '$dateCheck' AND '$dateCheck1'  ");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['qt'];
							
							$pid=$rows['pid'];
							$d=$rows['d'];
							$cost=$rows['cost'];
							$profit=$rows['profit'];
							$import=$rows['import'];
							
							$importcost=$import*$buyprice;
							$totalimportcost+=$importcost;
							$importcost=number_format($importcost);
							$name=strtolower($name);
							//total
							$pro="";	
							if($sell>$buyprice){
							$pro=$sell-$buyprice;
							$pro=$qt*$pro;
							}
						
							$pro_total=$pro_total+$pro;
							$cost_total=$cost_total+$cost;
							$profit_total=$profit_total+$profit;
							
								$td_color="background-color:#FFF;"; 
					
						
						
							$sell=number_format($sell);
							if( $sell==0){
							$sell='';
							}
							$cost=number_format($cost);
							if( $cost==0){
							$cost='';
							}
							$profit1=number_format($profit);
							if( $profit1==0){
							$profit1='';
							}
							if( $importcost==0){
							$importcost='';
							}
						
								if($no %2)
							{
							$td_color="background-color:#FFF;";
						  }
						  
						    	$querys_=mysql_query("SELECT sum(cst) as cost,sum(qt) as qt,sum(import) as import,sum(profit) as profit FROM rdsell where pid='$id' AND date BETWEEN '2014-01-01' AND '$dateCheck1'  ");
							while($rows_=mysql_fetch_array($querys_)): 
							$qt_=$rows_['qt'];
							$import_=$rows_['import'];
							$stock_=$import_-$qt_;
						     	$org=0;
							$org=$stock_+$qt;
							$org=$org-$import;
							 if($org<=0){$org="";}
							 if($org==$stock){$org=$stock;}
							
						  endwhile;
						  
						  /*
						  								mysql_query("INSERT INTO  `moshi_db`.`rdsell` (
`id` ,
`pid` ,
`qt` ,
`cst` ,
`custm` ,
`date` ,
`time` ,
`cashier` ,
`import` ,
`profit` ,
`product_from`
)
VALUES (
NULL ,  '$id',  '', NULL , NULL ,  '2014-06-01', NULL , NULL ,  '$stock', NULL , NULL
);

");
	*/						
		
						  $original=$stock+$qt;
						  if($import>0){
							  $original=$original-$import;
							  }
							  if($original<0){
								  
								  $original="";
								  }
								  if($qt<0){
								  
								  $qt="";
								  }
							echo"<tr style='$td_color border:thin #000 solid;' >
							                  <td style='border:thin solid #000;' align='center'>$no</td>
							                  <td style='border:thin solid #000;' align='left'>$name </td>
							                  <td style='border:thin solid #000;' align='center'>".$per." </td>
						                     <td style='border:thin solid #000;' align='center'>".$org."</td>
							                  <td style='border:thin solid #000;' align='center'>".$import." </td>
											    
							                  <td style='border:thin solid #000;' align='center'>" .$qt ."</td>	
											   <td style='border:thin solid #000;' align='center'>".$stock_."</td>	
											    <td style='border:thin solid #000;' align='right'>" .number_format($buyprice)."</td>
											    <td style='border:thin solid #000;' align='right'>" .$sell ."</td>
												<td style='border:thin solid #000;' align='right'>".$importcost ." </td>	
													 <td style='border:thin solid #000;' align='right'>" .$cost ."</td> 
												  <td style='border:thin solid #000;' align='right'>" .$pro."</td>
												  
												  	
												
											 					
									</tr>";	
									$no=$no+1;
						
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
								$profit_total=number_format($profit_total);
							if($profit_total<0){
							$profit_total='';
							}
							
							if($name !=""){
							echo"<tr  align='right' height='28px' style='font-size:16px; background-color:#570D21; font:bold; color:#FFFFFF; border:thin solid #000;' >
							                 <th style='border:thin solid #000;' id='cost_total'></th>
											 <th style='border:thin solid #000;' ></th>
											 <th style='border:thin solid #000;' id='cost_total'></th>
							                 <th style='border:thin solid #000;' id='cost_total'></th>
							                 <th style='border:thin solid #000;' id='cost_total'></th>
											   <th style='border:thin solid #000;' id='cost_total'></th>
											  <th style='border:thin solid #000;' id='cost_total'></th>
							              
							                 <th style='border:thin solid #000;' id='cost_total'></th>
											   <th style='border:thin solid #000;' id='cost_total'>Total</th>
											     <th style='border:thin solid #000;' id='cost_total'>".number_format($totalimportcost)."</th>
											   <th style='border:thin solid #000;' id='cost_total'>".$cost_total."</th>
							              <th style='border:thin solid #000;' id='cost_total'>".$profit_total."</th>
							                
									</tr>";
									echo"</table>";	
							
							}
							else{
								echo "no data";echo"</table>";	
								}
							echo "</div>";
	
							
					
							?>
                          
<script type='text/javascript'>
function printpage(a){

//alert(a);

  var divToPrint=document.getElementById('div'+a);
  document.getElementById('div'+a).style.top='1px';
 document.getElementById('tablequery').style.width='100%';
   document.getElementById('tablequery').style.borderCollapse='collapse';



 newWin= window.open('');
 newWin.document.write(divToPrint.outerHTML); 

  newWin.print(); 

  newWin.close();

return false;
}
</script>