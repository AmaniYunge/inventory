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
  MAKE CHANGES        
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
 

echo " $dirAdd 
<button  type='submit' name='sub' value='' >back</button>
<input id='categories_submit' type='submit' name='order' value='submit' />
</form>
</div>";
}



 
// SHOW TOTAL









// SELET PRODUCT FOR PRICE 






else if ($_POST['order'] !="")
{
?>

<div id="categories">
  <form name="form1" action="<?php echo $PHP_SELF; ?>"  method="post" onsubmit="return sto();">
<center>
         <h1> 
         <FONT color="#000066">
           MAKE CHANGES
         </FONT>
         </h1>
         </center>
<center>
<table style="width:70%; border-collapse:collapse;" >
   
   <?php  
  
   echo " <tr align='center' style=' background:lightblue; color:#000099;'>
    <td align='center'>no.</td>
	<td align='left' >product name</td>
   <td align='center'>category</td>
   <td align='center'>unity</td>
   <td>buy price</td>
   <td>sell price</td>
   </tr>";

$i=1;

	$menulist=mysql_query("select * from data ;");
while($row=mysql_fetch_array($menulist)):
$name=$row['nm'];
$price=$row['pr'];
$qrem=$row['qt'];
$id=$row['id'];
$cat=$row['ct'];
$by=$row['by'];
$per=$row['per'];
  
  $idnm=$id.'nm';
if($_POST[$idnm] !=""){

$idper=$id.'per';
$idct=$id.'ct';
$idby=$id.'by';
$idpr=$id.'pr';
    $bgcol="background-color:#C8F2BB";

	
		 if ($i%2)
		 {
		 $bgcol="background-color:#fff; color:#000;";
		 }
		
              echo " 
			  <tr style='$bgcol'>
			  <td align='center'>$i</td>
			  <td align='left'><input type='text' name='$idnm' value='$name' /></td>
			  <td align='center' ><input type='text' name='$idct' value='$cat' /></td>
			  <td align='center' ><input type='text' name='$idper' value='$per' /></td>
			  <td align='center'><input align='right' type='text' name='$idby' value='$by' /></td>
			  <td align='center'><input align='right' type='text' name='$idpr' value='$price' /></td>
			  </tr>"; 
            
			  $i++;
			
			  
}
		  endwhile;

              echo " <tr bgcolor='lightblue' height='20px'>
			  <td></td>
			  <td ></td>
			  <td></td>
			  <td align='right'></td>
			  <td ></td>
			  <td align='center'></td>
			  </tr>
			 
			 
		


<tr bgcolor='lightblue' height=''>
<td ></td>
<td align='right'></td>
<td></td>
<td ><input  type='submit' name='info' value='submit'/></td>
<td ></td>
 <td ></td>
</tr>
$dirAdd
        
</table></center></form> ";?>
		
<form style="" action='<?php echo $PHP_SELF; ?>' method='post'>
<?php
echo "<button  type='submit' name='sub' value='' >back</button>
$dirAdd
</form>";		    



echo "</div>";


}

// SHOW TOTAL








else if($_POST['info'] !="")


{







echo "<div id='categories' >";
echo "<center>
         <h1> 
         <FONT color='#000066'>
          saved!
         </FONT>
         </h1>
         </center>";


echo "<center><table border='0'  style='border-collapse:collapse; width:600px; border-right:1;'><caption><h1>$jina</h1></caption>";

echo "<tr bgcolor='lightblue' style='color:#000099;'>
<td align='center'>No.</td>
<td >Name</td>
<td  > Category</td>
<td >Unity</td>
<td align='right'>Buy price</td>
<td align='right'>Sell price</td>
</tr>";
$no=1;




// INSERT INFOMMATION




$sqltotal=mysql_query("select * from data");
while($row=mysql_fetch_array($sqltotal)):


$id=$row['id'];
$idnm=$id.'nm';
$idct=$id.'ct';
$idper=$id.'per';
$idby=$id.'by';
$idpr=$id.'pr';
if($_POST[$idnm] !=""){
$idnm=$_POST[$idnm];
$idct=$_POST[$idct];
$idper=$_POST[$idper];
$idby=$_POST[$idby];
$idpr=$_POST[$idpr];

//mysql_query("UPDATE data SET nm='$idnm',ct='$idct',per='$idper',by='$idby',pr='$idpr' WHERE  id='$id' LIMIT 1;");
mysql_query("UPDATE  `moshi_db`.`data` SET  `nm` =  '$idnm',
`ct` =  '$idct',
`per` =  '$idper',
`pr` =  '$idpr',

`by` =  '$idby' WHERE  `data`.`id` ='$id' LIMIT 1 ;");



$bgcol="background-color:#C8F2BB";
 if ($no%2)
		 {
		 $bgcol="background-color:#fff; color:#000;";
		 }
echo "<tr style='$bgcol'>
<td align='center'>$no</td>
<td >$idnm </td>
<td align='center' >$idct </td>
<td  >$idper </td>
<td align='right' >".number_format($idby)."</td>
<td align='right'>".number_format($idpr)."</td>
</tr>";
$no=$no+1;

}

endwhile;


echo "<tr  bgcolor='lightblue'>
<td></td>
<td align='left'></td>
<td></td>
<td align='right' ></td>
<td></td>
<td></td>
</tr>";
echo"</table> ";?>
<form style="" action='<?php echo $PHP_SELF; ?>' method='post'>
<?php
echo "<input   type='submit' name='back' value='back'/>
$dirAdd
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
          MAKE CHANGE
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
<?php echo $dirAdd ; ?>
         <center>
         <input id="ct_submit" type="submit" name="sub" value="submit" />
         </center>
        <br />

</form>
</div>
         <?php } ?>





  
</body>
</html>
