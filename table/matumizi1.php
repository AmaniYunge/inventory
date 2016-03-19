<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

   <br /> <br /> <br />
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


						
							$no=0;
							
							echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>Product Name</th>
							            <th>Unit</th>
							             <th>Quantity</th>
										 <th>Product from</th>
							             <th>Date</th>
							            	 ";
								$querytbl=mysql_query("SELECT product_from FROM `moshi_db`.`rdsell` where import !='' AND date BETWEEN '$dateCheck' AND '$dateCheck1'  GROUP BY product_from ");
								while($rowsl=mysql_fetch_array($querytbl)): 
								$pfrom=$rowsl['product_from'];
									

							$query=mysql_query("SELECT * FROM `moshi_db`.`rdsell` where import !='' AND date BETWEEN '$dateCheck' AND '$dateCheck1' AND product_from='$pfrom'  ORDER BY id DESC");	
							while($rows=mysql_fetch_array($query)): 
							
						 
							
							
							
							$date=$rows['date'];
							$quantity=$rows['import'];
							$id=$rows['pid'];
							$pf=$rows['product_from'];
							//
							//$per=$rows['per'];
							
							$qt=$qt+$quantity;
							$query1=mysql_query("SELECT nm,per FROM `moshi_db`.`data` where id=$id ");
							while($rows=mysql_fetch_array($query1)):
							$name1=$rows['nm'];
							$ct=$rows['per'];
							$name=strtolower($name1);
						
							//total
							
							$no=$no+1;
							
							
								$td_color="background-color:#FFF;"; 
					
							if($no %2)
							{
							$td_color="background-color:#B0FFB0;";
						  }
						
							echo"<tr style='$td_color' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$name </td>
							                  <td align='center'>$ct</td>
						                     <td align='right'>$quantity </td>
											 <td align='right'>$pf </td>
							                  <td align='right'> $date</td>
							               						
									</tr>";
					         $cost=0;
								endwhile;
							
							endwhile;
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold;  ;' >
							                 <th id='cost_total'></th>
											 <th align='right'></th>
											 <th align='right'></th>
							                 <th align='right'>$qt</th>
							                 <th align='right'></th>
											  <th align='right'></th>
										    
									</tr>";
									$qt=0;
								endwhile;
							
							echo"</table>"; ?>

</body>
</html>