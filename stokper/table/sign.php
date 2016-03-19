<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

if($_POST['signin'] !=""){
	mysql_query("INSERT INTO  `moshi_db`.`sign` (
`id` ,
`userid` ,
`in` ,
`out` ,
`date`
)
VALUES (
NULL ,  '$_POST[name]', CURTIME( ) , NULL , CURDATE( )
);");
	
	
	
	}
	if($_POST['deletename'] !=""){
		mysql_query("DELETE FROM employee WHERE id='$_POST[deletename]' LIMIT 1;");
		
	}
	if($_POST['employee'] !=''){
			mysql_query("INSERT INTO employee (nm) VALUES ('$_POST[employee]');"); 
		}
	
if($_POST['signout'] !=""){
mysql_query("UPDATE  `moshi_db`.`sign` SET  `out` = CURTIME( ) WHERE `sign`.`out` IS NULL AND `sign`.`userid` ='$_POST[name]'  ORDER BY id DESC LIMIT 1 ;");
}
function signout(){
$sql=mysql_query("select * from employee;");
while($row=mysql_fetch_array($sql)):
$name=$row['nm'];
$id=$row['id'];
echo "<option value='$id'>$name</option>";
endwhile;
}
function signin(){
$sql=mysql_query("select * from employee;");
while($row=mysql_fetch_array($sql)):
$name=$row['nm'];
$id=$row['id'];
echo "<option value='$id'>$name</option>";
endwhile;
}
?>
<div id="sign">

<ul><li>
<form action="" method="post">
<h2><select name="name">
<option></option>
<?php signin(); ?>
</select><br />
<input type="hidden" name="signin" value="signin" />
<input type="hidden" name="dir" value="sign" />
<button type="submit"  name="in" value="in" />
<img height="25px" src="images/buttonin.png" />
</button></h2>
</form>
</li>

<li>
<form action="" method="post">
<h2><select name="name">
<option></option>
<?php signout(); ?>
</select><br />
<input type="hidden" name="signout" value="signin" />
<input type="hidden" name="dir" value="sign" />
<button type="submit"  name="out" value="in" />
<img height="25px" src="images/buttonout.png" />
</button></h2>
</form>
</li>

</ul>

<?PHP 
						$query=mysql_query("SELECT * FROM sign    ORDER BY id DESC");
							echo"<table>
								         <th></th>
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
							
							$nameid=$rows['userid'];
							$signin=$rows['in'];
							$signout=$rows['out'];
							$date=$rows['date'];
					
							
								$querys=mysql_query("SELECT nm FROM employee WHERE id='$nameid' ");	
							while($row=mysql_fetch_array($querys)):
							$name=$row['nm']; 
							echo"<tr $td_color >
							                  <td align='center'>$no</td>
							                  <td id='small'>$name </td>
							                  <td id='cost'>$signin </td>
						                      <td id='cost'>$signout</td>
							                  
											   <td id='cost'>$date</td>						
									</tr>";
					         $cost=0;
							endwhile;
							endwhile;
							echo"<tr bgcolor='#B54E3C' >
							                 <td id='cost_total'></td>
											 <td></td>
											 <td></td>
											 <td></td>
											 <td></td>
											 
										     
											  
									</tr>";
							
							
							echo"</table>";		
							
								?>
                                </div>
                                <div >
                                <form name="" action="" method="post">
                                new name:<input type="text" name="employee" value="" /> <input type="submit" name="entername"  value="enter"/>
                                <br /><br /><br />
                                delete name:<select name="deletename">
                                <option></option>
                                <?php signin(); ?>
                                </select>
                               
                                 <input type="submit" name="signreg"  value="delete"/>
                                 <input type="hidden" name="dir" value="sign" />
                                </form>
                                </div>
</body>
</html>