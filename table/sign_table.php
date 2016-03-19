
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css" >
div#sign {
	position:absolute;
	right:20%;
	left:30%;
	display:inline;
	
	
	
}
div#sign ul {
	list-style:none;
}
div#sign ul li{
	display:inline-block;
	height:auto;
	border:#900 thin solid;
	background-color:#87EB85;
	vertical-align:top;
	padding:10px;
	
	

}
div#sign select {
	

	width:250px;
	height:25px;
	
font-size:19px;
color:#8B386C;
border:none;	
}
div#sign option {

font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
color:#8B386C;
border:#92E0FA thin solid;
width:auto;
}
div#sign table {
	border:#999 thick solid;
	width:640px;
	border-collapse:collapse;
	
}
div#sign table tr td {
	border:#999 thin solid;
	color:#600;
	font-family:Arial, Helvetica, sans-serif;
	
	
}
div#sign table tr th {
	border:#999 thin solid;
	color:#009;
	background-color:#82BCF7;
	font-family:Arial, Helvetica, sans-serif;
	
	
}
</style>
</head>

<body>
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
							$query=mysql_query("SELECT * FROM employee  WHERE  date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");
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
							
							echo" <div id='sign'><table>
								         <th>No.</th>
							            <th>Name</th>
							            <th>sign In</th>
							             <th>sign Out</th>
							             <th>date</th>
										
							             	 ";
									
							while($rows=mysql_fetch_array($query)): 
							 
					if($no %2)
							{
							$td_colr="bgclor='#F9D2E2'";
						  }
						  else {
							$td_color="bgcolor='#FFFFF'";
							}
							
							$name=$rows['name'];
							$signin=$rows['signin'];
							$signout=$rows['signout'];
							$date=$rows['date'];
							
							
							
							$no=$no+1;
							
							
								
							
							echo"<tr $td_color >
							                  <td align='center'>$no</td>
							                  <td id='small'>$name </td>
							                  <td id='cost'>$signin </td>
						                      <td id='cost'>$signout</td>
							                  
											   <td id='cost'>$date</td>
											  						
									</tr>";
					         $cost=0;
							
							endwhile;
							echo"<tr bgcolor='#B54E3C' >
							                 <td id='cost_total'></td>
											 <td></td>
											 <td></td>
											 <td></td>
											 <td></td>
										
											 
										     
											  
									</tr>";
							
							
							echo"</table><div>";		
							
								                    
						
								
					/*	if($_POST['jina']){
							 $sql = "UPDATE data SET inpatient='$_POST[inpatient]',dressing='$_POST[dressing]' ,others='$_POST[other]' WHERE name='$_POST[jina]' ORDER BY id DESC  LIMIT 1;";
							mysql_query($sql);
							 mysql_close($connect);
							 } */
							?>
                            
</body>
</html>
