<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php 
$cn=mysql_connect("localhost","root","");
mysql_select_db("moshi_db",$cn);

function chekJs(){
 $sql=mysql_query("select * from data GROUP BY ct;");

      while($row=mysql_fetch_array($sql)):
                $name=$row['nm'];
               $cat=$row['ct'];
				 $id=$row['id'];

             echo "||document.form1.$cat.checked==true ";
     endwhile;	
}
function chekForm(){
	$sql=mysql_query("select * from data GROUP BY ct;");

      while($row=mysql_fetch_array($sql)):
                $name=$row['nm'];
                 $cat=$row['ct'];
				 $id=$row['id'];

             echo "<input type='checkbox' name='$cat' value='$cat' />$cat<br  /> ";
     endwhile;
}

?>
<script type="text/javascript">
function chek () {
var a=2;

if(a==''<?php chekJs();?>	

     
     

){alert(a);
return true;	
}
return false;
}

	
	

</script>
</head>

<body>
<form name="form1" action="index.php" method="post" onsubmit="return chek();">
      <?php chekForm(); ?>
      



       <input type="submit" name="submit" value="send"  /> 
</form>

</body>
</html>
