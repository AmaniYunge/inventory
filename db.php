<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
  <?php
  $connect=mysql_connect("localhost","root","");
							mysql_select_db("moshi_db", $connect);
							 $sqlps=mysql_query("SELECT *  FROM `moshi_db`.`ut` where id=1 limit 1 ");
 while($rows=mysql_fetch_array($sqlps)): 
								   $ps0=$rows['ps'];
								    
								   endwhile;
	 $sqlps=mysql_query("SELECT *  FROM `moshi_db`.`ut` where id=2 limit 1 ");
 while($rows=mysql_fetch_array($sqlps)): 
								   $ps1=$rows['ps'];
								    
								   endwhile;
								
								    $sqlps=mysql_query("SELECT *  FROM `moshi_db`.`ut` where id=3 limit 1 ");
 while($rows=mysql_fetch_array($sqlps)): 
								   $ps2=$rows['ps'];
			
								   endwhile;
								      $sqlps=mysql_query("SELECT *  FROM `moshi_db`.`ut` where id=4 limit 1 ");
 while($rows=mysql_fetch_array($sqlps)): 
								   $ps3=$rows['ps'];
			
								   endwhile;
								   								      $sqlps=mysql_query("SELECT *  FROM `moshi_db`.`ut` where id=5 limit 1 ");
 while($rows=mysql_fetch_array($sqlps)): 
								   $ps4=$rows['ps'];
			
								   endwhile;
								
								   ?>
</body>
</html>
	