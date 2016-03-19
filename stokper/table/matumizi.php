<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="../style.css" />
</head>

<body>


<?php require("connect.php");

if($_POST['matumizi'] !=""){
	if($_POST['amount'] !=""){
		
		mysql_query("INSERT INTO `siimshealthcenter`.`matumizi` (
`id` ,
`name` ,
`description` ,
`cost` ,
`date` ,
`time`
)
VALUES (
NULL , '$_POST[namematumizi]', '$_POST[description]', '$_POST[amount]', CURDATE( ) , CURTIME( )
);");
		
		}
	
	}
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

							$query=mysql_query("SELECT * FROM `siimshealthcenter`.`matumizi` 	where date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");
						
							$no=0;
							
							
							echo"<table id='tablequery' width='100%' style='font-size:16px; font:bold; background-color:#999999;' >
								         <th>No.</th>
							            <th align='left'>Description</th>
							            <th>name</th>
							             <th>Amount</th>
							             <th>date</th>
							            	 ";
									
							while($rows=mysql_fetch_array($query)): 
							
						 
							
							
							
							$date=$rows['date'];
							$amount=$rows['cost'];
							$id=$rows['id'];
							$name1=$rows['name'];
							$per=$rows['description'];
						
							
							$name=strtolower($name1);
							//total
							
							$no=$no+1;
								$amount1=number_format($amount);
							
								$td_color="background-color:#FFF;"; 
					
							if($no %2)
							{
							$td_color="background-color:#FFF;";
						  }
						
							echo"<tr style='$td_color border-bottom:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left' width='400px'> $per</td>
							                  <td align='lef'>$name1</td>
						                     <td align='right'>$amount1 </td>
							                  <td align='center'> $date</td>
							               						
									</tr>";
					         $cost=$cost+$amount;
								
							endwhile;
							$cost=number_format($cost);
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold; background-color:#999999;' >
							                 <th id='cost_total'></th>
											 <th align='right'>TOTAL</th>
											 <th align='right'></th>
							                 <th align='right'>$cost</th>
							                 <th align='right'></th>
										    
									</tr>";
							
							
							echo"</table>"; ?>

</body>
</html>