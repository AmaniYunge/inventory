<?php

// connection to server
$connect=mysql_connect("localhost","root","");

// connection to database
mysql_db_query("siimshealthcenter",$connect);

 $userid = trim($_POST["id"]);
?>
<style>
#selec li{
	list-style:none;
	text-transform:lowercase;
	cursor:pointer;
	}
	#selec li: hover {
		background:#666;
 
  color:#fff;
	}
</style>

<ul id="selec">
<?php
$menulist=mysql_query("select name from data where name like '".$userid."%' group by name limit 5;");




while($row=mysql_fetch_array($menulist)):
$nam=$row['name'];
?>
<li onclick="javascript: document.getElementById('nameenter').value='<?php echo $nam; ?>'; document.getElementById('search').style.display='none';">
<?php echo $nam; ?></li>
<?php 

endwhile;
?>
</ul>
