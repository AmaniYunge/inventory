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

<script type='text/javascript'>
         function chek() {
         var a=2;

        if(a==''<?php chekJsproducts();?>){

         return true;	
         }
         return false;
         }
         </script>
         <div id="categories"> 
  <form name="form1" action="<?php echo $PHP_SELF; ?>"  method="post" onsubmit="return chek();">
<center>
         <h1> 
         <FONT color="#000066">
  SELECT PRODUCTS        
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
             $menu=mysql_query("select * from data where   ct='$ok'  ;");
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
 

echo "<input type='hidden' name='dir' value='$home'>
 <button  type='submit' name='sub' value='' >back</button>
<input id='categories_submit' type='submit' name='order' value='submit' />
</form>
</div>";
}



 
// SHOW TOTAL









// SELET PRODUCT FOR PRICE 






else if ($_POST['order'] !="")
{
echo "<script type='text/javascript'>";

	

			echo "
			
			function selectname(){
			if(document.form1.name.value ==''){
	


     alert('enter name');      
	return false
	}
		
";
       
		  

echo "return true; 
}



";
	  
		 
 echo "</script>";
 
 ?>

<div id="categories">
  <form id="cashform" name="form1" action="<?php echo $PHP_SELF; ?>"  method="post"  onsubmit="return selectname();">
<center>
<table style="width:70%; border-collapse:collapse;   " >
   
   <?php  
  
   echo " <tr align='center' style=' background:lightblue; color:#000099;'>
    <td align='center' width='50px'>No.</td>
	<td align='left' >product name</td>
	<td align='center'>unit</td>
   <td align='center'>price</td>
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

	if($qrem != 0)
	{

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
			  <td align='center'  >".number_format($price)."</td>
			  <td align='center' >$qrem</td>
			  <td align='center'><input id='cashvalue' price='$price'  type='text' name='$idnm' value='' /></td>
			 
			  </tr>"; 
            
			  $i++;
			  }
			  
			  
	}
		  endwhile;
 
              ?> <tr bgcolor='lightblue' height='20px'>
			  <td width='50px'></td>
			  <td ></td>
			  <td></td>
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
<td ></td>
</tr>


<tr bgcolor='lightblue' height=''>
<td ></td>




<td  align='right'>name:<input type='text' name='name' value='' onfocus="OnFocusInput (this)" /></td>
<td></td>
<td align='right'></td>
<td ></td>
<td ></td>

<tr bgcolor='lightblue' height=''>
<td ></td>




<td  align='right'>phone:<input type='text' name='num' value='' /></td>
<td></td>
<td align='right'></td>
<td ></td>
<td ></td>

</tr>	
<tr bgcolor='lightblue' height=''>
<td ></td>
<td  align='right'>cash:<input id='sumcash' type='text' name='phone' value='' /></td>
<td></td>
<td align='right'></td>
<td ></td>
<td ></td>

</tr>	

<tr bgcolor='lightblue' height=''>
<td ></td>
<td align='right'>&nbsp;</td>
<td><input  type='submit' name='info' value='submit'/></td>
<td align='right'></td>
<td ></td>
<td ></td>
</tr>

<input type='hidden' name='dir' value='<?php echo $home; ?>' />
        
</table></center></form> 
		<script type="text/ecmascript">
function OnFocusInput(){

	
	var i ; 
var price = 0 ;
	var sum=0;
	// alert ( "wooo!" ) ;
	  var input = document.getElementsByTagName("input");
           for (i = 0; i < input.length; i++)
            {
                if (input[i].type == "text" && input[i].value != "" && input[i].id=="cashvalue"  )
                {
                 
                    price =input[i].getAttribute("price") * input[i].value;
					sum=sum+price;
                }
}


	document.getElementById('sumcash').value=sum;

}
</script>
<form  action='<?php echo $PHP_SELF; ?>' method='post'>
<?php
echo "<button  type='submit' name='sub' value='' >back</button>
<input type='hidden' name='dir' value='$home' />
</form>";		    



echo "</div>";


}

// SHOW TOTAL








else if($_POST['info'] !="")


{

$nameid=$_POST['name'];
$tel=$_POST['phone'];
$age=$_POST['num'];
$dt=date('d-m-Y');


echo "<div id='categories' >";

$sqltotal=mysql_query("select * from data");
echo "<center><table border='0'  style='border-collapse:collapse; width:400px; border-right:1;'><caption><h5>$dt</h5></caption>";

echo "<tr bgcolor='lightblue' style='color:#000099;'>
<td align='center'>No.</td>
<td align='left'>product</td>
<td align='center'>unit</td>
<td  align='center' > Quantity</td>
<td  align='right'>cost</td>
</tr>";
$no=1;
$total=0;


	


// INSERT INFOMMATION
$ql=mysql_query("SELECT name from `siimshealthcenter`.`employee` ORDER BY id DESC LIMIT 1");
while($rowname=mysql_fetch_array($ql)):
 $cashier=$rowname['name']; 
 endwhile;

mysql_query("INSERT INTO `siimshealthcenter`.`data` (id, name,bima, others,age,date) VALUES ('', '$nameid','$cashier','$tel','$age', CURDATE());");





while($row=mysql_fetch_array($sqltotal)):

$name=$row['nm'];
$cat=$row['ct'];
$price=$row['pr'];
$quantity=$row['qt'];
$id=$row['id'];
$per=$row['per'];
$jina=$_POST['name'];
if($_POST['name'] ==""){
$jina="costumer";
}
$idnm=$id.'nm';
$order=$_POST[$idnm];



if($order !='') {

$add=$order;
 if($quantity >= $add)
 
 {

$cost=$price*$add;
$total+=$cost;

$quantity=$quantity-$add;

mysql_query("UPDATE data SET qt = '$quantity' WHERE  id='$id' LIMIT 1;");

$query1=mysql_query("SELECT * FROM `siimshealthcenter`.`data` ORDER BY id DESC LIMIT 1 ");
				                   while($rows=mysql_fetch_array($query1)): 
								   $lastid=$rows['id'];
								   
								   endwhile;


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
NULL , '$id', '$add', '$cost', '$lastid', CURDATE( ) , CURTIME( )
);");





echo "<tr bgcolor='white' style='border-bottom:thin #ccc solid;'>
<td align='center'>$no</td>
<td align='left'>$name</td>
<td align='center'>$per</td>
<td align='center' >$add </td>
<td align='right' >".number_format($cost)."</td></tr>";
$no=$no+1;
}

}
endwhile;
$qlsmed=mysql_query("select medicine from `siimshealthcenter`.`data` WHERE id='$lastid' LIMIT 1");
while($rowmed=mysql_fetch_array($qlsmed)):
$addmed=$rowmed['medicine'];
endwhile;

$addtotal=$total + $addmed;
mysql_query("UPDATE `siimshealthcenter`.`data` SET medicine = '$addtotal' WHERE  id='$lastid' LIMIT 1;");
$totaldisplay=number_format($total);
if($totaldisplay ==0 ){
$totaldisplay="";



}
if($tel>0){
$remain=$total-$tel;
echo "<tr bgcolor='white'  style=' border-bottom:thin #ccc solid;'>
<td></td>
<td align='left'>Paid</td>
<td></td>
<td></td>
<td align='right' >";echo "<font size='4px' >".$tel."</font></td>
</tr>
<tr><td>
</td><td align='left'></td>
<td></td>
<td align='right' ></td>
</tr>

";
echo "<tr bgcolor='white'  style='border-bottom:thin #ccc solid;'>
<td></td>
<td align='left'>Unpaid</td>
<td></td>
<td></td>
<td align='right' >";echo "<font size='4px' >".$remain."</font></td>
</tr>
<tr><td>
</td><td align='left'></td>
<td></td>
<td align='right' ></td>
</tr>

";
}
echo "<tr  bgcolor='lightblue'>
<td></td>
<td align='left'>Total cost</td>
<td></td>
<td></td>
<td align='right' >";echo "<font size='4px' >".$totaldisplay."</font></td>
</tr>
<tr><td>
</td><td align='left'></td>
<td></td>
<td align='right' ></td>
</tr>

";
echo"</table> ";
?>
<form style="" action='<?php echo $PHP_SELF; ?>' method='post'>
<?php
echo "<input   type='submit' name='print' value='print' onclick='return printpage();'/><input   type='submit' name='back' value='back'/>
<input type='hidden' name='dir' value='$home' />
</form></center>";
echo "</div>";
echo "<script type='text/javascript'>
function printpage(){


alert('print');
document.getElementById('menu').style.display='none';
document.getElementById('login_top').style.display='none';
//document.getElementsByTagName('body').style.backgroundColor='#fff';
window.print();
return false;
}
</script>";

}










// SHOW ct 
 else{?>
<div id="categories">
       

<form name="form1" action="<?php echo $PHP_SELF; ?>" method="post"  onsubmit="return chek();">
         <center>
         <h1> 
         <FONT color="#000066">
          SELECT CATEGORIES
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
