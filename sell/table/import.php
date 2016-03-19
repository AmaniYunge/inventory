<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$date=$_POST['bday'];
 $date1=$_POST['to'];
require("contact.php");
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
							$query=mysql_query("SELECT * FROM `moshi_db`.`rdsell` where date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");
						
							$no=0;
							
							echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>Product Name</th>
							            <th>category</th>
							             <th>quantity</th>
										 <th>product from</th>
							             <th>date</th>
							            	 ";
									
							while($rows=mysql_fetch_array($query)): 
							
						 
							
							
							
							$date=$rows['date'];
							$quantity=$rows['import'];
							$id=$rows['id'];
							$name_id=$rows['pid'];
							$per=$rows['per'];
							$pf=$rows['product_from'];
							$query2=mysql_query("SELECT name FROM `moshi_db`.`data` where id='$pid' ");
						
							while($rows=mysql_fetch_array($query2)): 
							$name1=$rows['name'];
						 
							
							
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
							                  <td align='left'>$name1 </td>
							                  <td align='right'>$per</td>
						                     <td align='right'>$quantity </td>
											    <td align='center'>$pf </td>
							                  <td align='right'> $date</td>
							               						
									</tr>";
					         $cost=0;
							
							endwhile;
							endwhile;
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold;  ;' >
							                 <th id='cost_total'></th>
											 <th align='right'></th>
											 <th align='right'></th>
							                 <th align='right'></th>
											  <th align='right'></th>
							                 <th align='right'></th>
										    
									</tr>";
							
							
							echo "</table>"; 
							
							
							?> 
</body>
</html>
