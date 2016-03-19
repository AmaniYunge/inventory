<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<LINK REL="SHORTCUT ICON" HREF="images/clock.ico" />
<link rel="stylesheet" href="./css.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled </title>
<script type="text/javascript" src="script.js"></script>

<style type="text/css">
@media print {

.printer{
display:none;
}

}
</style>

</head>

<body bgcolor="#FFFFFF" background="images/bg.jpg">


<?php

require"connect.php";

echo $banner;
?>

<!-- SELECTED MUNE LIST    -->






<?php

if($_POST['sub'] !="")
{
 ?> 
<div id="categories">
  <form nm="form1" action="<?php echo $PHP_SELF; ?>"  method="post" onsubmit="return sto();">
<center>
         <h1> 
         <FONT color="#000066">
  ADD PRODUCTS        
   </FONT>
         </h1>
         </center>
   <?php 
 echo "<ul id='display-inline-block-example'>";
$menulist=mysql_query("select * from data group by ct;");
while($row=mysql_fetch_array($menulist)):
$catlist=$row['ct'];

    
	if($_POST[$catlist])
         {
          
$ok=$_POST[$catlist];
             echo "<li><ul>";
			 echo " <li  style='text-transform:uppercase; font:bold; color:red; background:lightblue; '>$ok</li>";
             $menu=mysql_query("select * from data where  ct='$ok';");
             while($row=mysql_fetch_array($menu)):
              $name=$row['nm'];
		
			  $id=$row['id'];
			  $idnm=$id.'nm';
              echo "<input type='checkbox' name='$idnm' value='$idnm' />$name<br/>"; 
              endwhile;
			  
              echo "</ul></li>";
			  }
			  
		  endwhile;
 
echo "</li></ul>";
 

echo $dirAddqt."
 <button  type='submit' name='sub' value='' >back</button>
<input id='categories_submit' type='submit' name='order' value='order' />
</form>
</div>";
}



 
// SHOW TOTAL









// SELET PRODUCT FOR PRICE 






else if ($_POST['order'] !="")
{
echo "<script type='text/javascript'>
function sto (){
	if(document.form1.name.value ==''){
	alert('enter your name');
	return false;
	}";
	
	

$menulistjs=mysql_query("select * from data group by ct;");
while($rows=mysql_fetch_array($menulistjs)):
$catlistjs=$rows['ct'];

    
	if($_POST[$catlistjs])
         {
            $okjs=$_POST[$catlistjs];
            
			 
            $menujs=mysql_query("select * from data where ct='$okjs';");
             while($rowjs=mysql_fetch_array($menujs)):
              $namejs=$rowjs['nm'];
			  $idjs=$rowjs['id'];
			echo "if(document.form1.coca$idjs.value ==''){
	alert('coca');
	return false;
	}";
              endwhile;
			  
			  }
			  
		  endwhile;
		  
		  
//echo "){ return true;}
echo "if(document.form1.coca1.value ==''){
	alert('$idjs');
	return false;
	}";

echo "return false; 
}
";
	  
		 
 echo "</script>";
 
 ?>

<div id="categories">
  <form name="form1" action="<?php echo $PHP_SELF; ?>"  method="post" onsubmit="return sto();">
<center>
         <h1> 
         <FONT color="#000066">
  ADD PRODUCTS        
   </FONT>
         </h1>
         </center>
<center>
<table style="width:70%; border-collapse:collapse;   " >
   
   <?php  
  
   echo " <tr align='center' style=' background:lightblue; color:#000099;'>
    <td align='center' width='50px'>No.</td>
	<td align='left' >product name</td>
	<td align='center'>unit</td>
   
   <td align='center'>stock</td>
   <td>quanty</td>
  
   </tr>";
$menulist=mysql_query("select * from data ;");

$i=1;

while($row=mysql_fetch_array($menulist)):
$name=$row['nm'];
$price=$row['pr'];
$qrem=$row['qt'];
$per=$row['per'];
$id=$row['id'];
$idnm=$id.'nm';
    $bgcol="background-color:#C8F2BB";

	if($_POST[$idnm] !="")
         {
		 if ($i%2)
		 {
		 $bgcol="background-color:#fff; color:#000;";
		 }
		
              echo " 
			  <tr style='$bgcol'>
			  <td align='center' width='50px'>$i</td>
			  <td align='left'>$name</td>
			   <td align='center'>$per</td>
			 
			  <td align='center' >$qrem</td>
			  <td align='center'><input type='text' name='$idnm' value='' /></td>
			 
			  </tr>"; 
            
			  $i++;
			  }
			  
			  

		  endwhile;
 
              echo " <tr bgcolor='lightblue' height='20px'>
			  <td ></td>
			  <td ></td>
			  <td></td>
			    <td></td>
			  <td ></td>
			
			  </tr>
			 
			 



<tr bgcolor='lightblue' >
<td ></td>
<td align='right'><button  type='reset' name='rest' value='' >clear</button></td>
<td><input  type='submit' name='info' value='submit'/></td>

<td ></td>
<td ></td>
</tr>".
$dirAddqt
        
."</table></center></form> ";?>
		
<form style="" action='<?php echo $PHP_SELF; ?>' method='post'>
<?php
echo "<button  type='submit' name='sub' value='' >back</button>
".
$dirAddqt
        
."
</form>";		    



echo "</div>";


}

// SHOW TOTAL








else if($_POST['info'] !="")


{







echo "<div id='categories' >";?>
<center>
         <h1> 
         <FONT color="#000066">
  SAVED!        
   </FONT>
         </h1>
         </center>
<?php

echo "<center>
<table border='0'  style='border-collapse:collapse; width:600px; border-right:1;'>";

echo "<tr bgcolor='lightblue' style='color:#000099;'>
<td align='center'>No.</td>
<td align='left'>product name</td>
<td  align='center' >unit</td>
<td align='center'>stock</td>
</tr>";
$no=1;


// INSERT INFOMMATION


//mysql_query("INSERT INTO rdby (id, nm, tel, email,payment,delivery,date) VALUES ('', '$order', '$tel', '$email','$payment','$delivery', CURDATE());");




$sqltotal=mysql_query("select * from data");
while($row=mysql_fetch_array($sqltotal)):

$name=$row['nm'];
$cat=$row['ct'];
$price=$row['pr'];
$per=$row['per'];
$quantity=$row['qt'];
$id=$row['id'];

$idnm=$id.'nm';
$order=$_POST[$idnm];

	
if($order !='') {

$add=$order;
 



$quantity=$quantity+$add;

mysql_query("UPDATE data SET qt = '$quantity' WHERE  id='$id' LIMIT 1;");

/*
mysql_query("INSERT INTO `moshi_db`.`rdsell` (
`id` ,
`pid` ,
`qt` ,
`cst` ,
`custm` ,
`date` ,
`time`
)
VALUES (
NULL , '$id', '$add', '$cost', '$jina', CURDATE( ) , CURTIME( )
);");


*/
$bgcol="background-color:#C8F2BB";
 if ($no%2)
		 {
		 $bgcol="background-color:#fff; color:#000;";
		 }
echo "<tr style='$bgcol'>
<td align='center'>$no</td>
<td align='left'>$name</td>
<td align='center' >$per</td>
<td align='center' >$quantity </td>
</tr>";
$no=$no+1;


}
endwhile;

echo "<tr  bgcolor='lightblue'>
<td></td>
<td align='left'></td>
<td></td>
<td align='right' >";echo "<font size='4px' ></font></td>
</tr>
<tr>
<tr bgcolor='lightblue' height='20px'>
			  <td ></td>
			  <td ></td>
			  <td></td>
			    <td></td>
			 
			 
			  </tr>

";
echo"</table> ";?>
<form style="" action='<?php echo $PHP_SELF; ?>' method='post'>
<?php
echo "<input   type='submit' name='back' value='back'/>
".
$dirAddqt
        
."
</form></center>";
echo "</div>";

}










// SHOW ct 
 else{?>
<div id="categories">
       

<form name="form1" action="<?php echo $PHP_SELF; ?>" method="post"  onsubmit="return chek();">
         <center>
         <h1> 
         <FONT color="#000066">
          ADD PRODUCTS
         </FONT>
         </h1>

         </center>
         <ul id='display-inline-block-example'>
         <script type='text/javascript'>
         function chek () {
         var a=2;

        if(a==''<?php chekJs();?>){

         return true;	
         }
         return false;
         }
         </script>
   
         <?php chekFormAdd();?>
         </ul> 
         <br  />
         <br  />

         <input type="hidden" name="dir" value="<?php echo $home; ?>" />
         <center>
         <input id="ct_submit" type="submit" name="sub" value="submit" />
         </center>
        <br />

</form>
</div>
         <?php } ?>





  
</body>
</html>
