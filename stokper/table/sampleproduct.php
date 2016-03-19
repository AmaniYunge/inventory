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
       echo "<script type='text/javascript'>
       
	   function sto (){
		 
            if(document.form1.order.value==''";
            $menulistjs=mysql_query("select * from data group by ct;");
            while($rows=mysql_fetch_array($menulistjs)):
            $catlistjs=$rows['ct'];

    
	   if($_POST[$catlistjs])
         {
            $okjs=$_POST[$catlistjs];
       
            $menujs=mysql_query("select * from data where nm REGEXP '^[a-z]' AND  ct='$okjs';");
             while($rowjs=mysql_fetch_array($menujs)):
              $id=$rowjs['id'];
			  $namejs=$rowjs['nm'];
			echo "|| document.form1.$id.checked ==true";
              endwhile;
			  
			  }
			  
		  endwhile;
		  
		  
echo "){

return true;
}

return false; 
}
";
	  
		 
 echo "</script>";
 
 ?>
<div id="categories">
  <form nm="form1" action="<?php echo $PHP_SELF; ?>"  method="post" onsubmit="return sto();">
<center><h1><FONT color="#000066">SELECT PRODUCTS </FONT></h1></center>
   <?php 
 echo "<ul id='display-inline-block-example'>";
$menulist=mysql_query("select * from data group by ct;");
while($row=mysql_fetch_array($menulist)):
$catlist=$row['ct'];
$detail=$row['detail'];
    
	if($_POST[$catlist])
         {
            $ok=$_POST[$catlist];
            
			  echo "<li style='text-transform:capitalize; border:4px #ccc solid; background:#fff; padding:2px 2px 2px 2px;'>
			   <!--img src='images/$image' width='195px' height='150px' margin='' align='center' -->
			   <h3>$catlist</h3>";
			    echo" <p style='font-size:11px;'>";
            $menu=mysql_query("select * from data where nm REGEXP '^[a-z]' AND  ct='$ok';");
             while($row=mysql_fetch_array($menu)):
              $name=$row['nm'];
			  $image=$row['image'];
			  $quantity=$row['qt'];
			  $price=$row['pr'];
			  $detail=$row['detail'];
			  $id=$row['id'];
			  
              
             
			 
			
			   echo "<input type='checkbox' name='$id' value='$id' />$name<br/>";
              endwhile;
			  echo "</p></li>"; 
			  }
			  
		  endwhile;
 
echo "</ul>";
 

echo "<input type='hidden' name='dir' value='123' />
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
<table style="width:70%; border-collapse:collapse;   " >
   
   <?php  
  
   echo " <tr align='center' style=' background:lightblue; color:#000099;'>
    <td align='center'>number</td>
	<td align='left' >product name</td>
   <td align='right'>change price</td>
   <td align='right'>add quantity</td>
   <td></td>
  
   </tr>";
$menulist=mysql_query("select * from data ;");

$i=1;

while($row=mysql_fetch_array($menulist)):
$name=$row['nm'];
$price=$row['pr'];
$qrem=$row['qt'];
$id=$row['id'];
    $bgcol="background-color:#C8F2BB";

	if($qrem != 0)
	{

	if($_POST[$id] !="")
         {
		 if ($i%2)
		 {
		 $bgcol="background-color:#fff; color:#000;";
		 }
		
              echo " 
			  <tr style='$bgcol'>
			  <td align='center'>$i</td>
			  <td align='left'>$name</td>
			  <td align='right'  ><input type='text' name='$id' value='' /></td>
			  <td align='right' ><input type='text' name='$id' value='' /></td>
			  <td align='center'></td>
			 
			  </tr>"; 
            
			  $i++;
			  }
			  
			  
	}
		  endwhile;
 
              echo " <tr bgcolor='lightblue' height='20px'>
			  <td></td>
			  <td ></td>
			  <td></td>
			  <td align='right'></td>
			  <td ></td>
			 
			  </tr>
			 
			 
		

<tr bgcolor='' height='100px' style='border-right:1px;'>

<td></td>
<td align='left' COLOR='white'><font color='#ff0000' >ENTER CUSTOMER NAME</font></td>
<td ></td>
<td ></td>
<td ></td>
</tr>


<tr bgcolor='lightblue' height=''>
<td ></td>
<td  align='right'>name:</td>
<td><input type='text' name='name' value='' /></td>
<td align='right'></td>
<td ></td>

</tr>	


<tr bgcolor='lightblue' height=''>
<td ></td>
<td align='right'><button  type='reset' name='rest' value='' >clear</button></td>
<td><input  type='submit' name='info' value='submit'/></td>
<td align='right'></td>
<td ></td>

</tr>

<input type='hidden' name='dir' value='123' />
        
</table></center></form> ";?>
		
<form style="" action='<?php echo $PHP_SELF; ?>' method='post'>
<?php
echo "<button  type='submit' name='sub' value='' >back</button>
<input type='hidden' name='dir' value='123' />
</form>";		    



echo "</div>";


}

// SHOW TOTAL








else if($_POST['info'] !="")


{







echo "<div id='categories' >";
$jina=$_POST['name'];
$sqltotal=mysql_query("select * from data");
echo "<center><table border='0'  style='border-collapse:collapse; width:600px; border-right:1;'><caption><h1>$jina</h1></caption>";

echo "<tr bgcolor='lightblue' style='color:#000099;'><td align='center'>number</td><td align='left'>name</td><td  align='center' > Quantity</td><td  align='right'>price</td></tr>";
$no=1;
$total=0;

$orname=$_POST['nm'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	$delivery=$_POST['delivery'];
	$payment=$_POST['payment'];
	
	


// INSERT INFOMMATION


mysql_query("INSERT INTO info (id, nm, tel, email,payment,delivery,date) VALUES ('', '$order', '$tel', '$email','$payment','$delivery', CURDATE());");





while($row=mysql_fetch_array($sqltotal)):

$name=$row['nm'];
$cat=$row['ct'];
$price=$row['pr'];
$quantity=$row['qt'];
$order=$row['id'];



	if($quantiy > $_POST[$order])
	{
	
	$_POST[$order] ='';
	
	}

if($_POST[$order] !='') {
	
	
	

$add=$_POST[$order];
 if($quantity > $add)
 
 {
		
		
		
		
		
$cost=$price*$add;
$total+=$cost;

$quantity=$quantity-$add;

mysql_query("UPDATE data SET qt = '$quantity' WHERE  id='$id' LIMIT 1;");


mysql_query("INSERT INTO  sellrecord (
id ,
nm,
nameorder ,
ct ,
qt ,
cost ,
date ,
time
)
VALUES (
NULL ,  '$name',  '$order',  '$cat',  '$add',  '$cost', CURDATE( ) , CURTIME( )
);");







$bgcol="background-color:#C8F2BB";
 if ($no%2)
		 {
		 $bgcol="background-color:#fff; color:#000;";
		 }
echo "<tr style='$bgcol'><td align='center'>$no</td><td align='left'>$name</td><td align='center' >$add </td><td align='right' >".number_format($cost)."</td></tr>";
$no=$no+1;
}

}
endwhile;
$totaldisplay=number_format($total);
if($totaldisplay ==0 ){
$totaldisplay="";



}
echo "<tr  bgcolor='lightblue'><td></td><td align='left'>Total</td><td></td><td align='right' >";echo "<font size='4px' >".$totaldisplay."</font></td></tr>
<tr><td>





</td><td align='left'>

</td><td></td><td align='right' ></td></tr>

";
echo"</table> ";?>
<form style="" action='<?php echo $PHP_SELF; ?>' method='post'>
<?php
echo "<input   type='submit' name='back' value='back'/>
<input type='hidden' name='dir' value='123' />
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
          SELECT CATEGORIES ADD PRODUCTs
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
   
         <?php chekForm();?>
         </ul> 
         <br  />
         <br  />

         <input type="hidden" name="dir" value="123" />
         <center>
         <input id="ct_submit" type="submit" name="sub" value="submit" />
         </center>
        <br />

</form>
</div>
         <?php } ?>





  
</body>
</html>
