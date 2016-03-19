<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php 
$cn=mysql_connect("localhost","root","");
mysql_select_db("moshi_db",$cn);

function chekJsValue(){
 $sql=mysql_query("select * from data;");

      while($row=mysql_fetch_array($sql)):
                $name=$row['nm'];
               $cat=$row['ct'];
				 $id=$row['id'];
				 $idnm=$id."nm";

             echo "var  $idnm=document.form1.$idnm.value;
			 if( $idnm !=''){
				 alert($name);
	alert(isNaN($idnm));
return false;	
} ";
     endwhile;	
}
function chekFormValue(){
	$sql=mysql_query("select * from data;");

      while($row=mysql_fetch_array($sql)):
                $name=$row['nm'];
                 $cat=$row['ct'];
				 $id=$row['id'];
				  $idnm=$id."nm";

             echo "$name<input type='text' name='$idnm' value='' /><br  /> ";
     endwhile;
}

?>
<script type="text/javascript">
function chek () {
var a=2;

<?php chekJsValue();?>

return true;
}

	function num()
	{ 
	
	var ck_name = /^[0-9 ]{1,100}$/;
	  if(!ck_name.test()){
		alert('not number');}
		
		
	}
</script>
</head>

<body>
<form name="form1" action="index.php" method="post" onsubmit="return chek();">
      <?php chekFormValue(); ?>
      



       <input type="submit" name="submit" value="send"  /> 
</form>
<form name="num" action="#" method="post">
<input type="text" name="num1" value="" /><br />
<input type="submit" value="check" />
</body>
</html>
