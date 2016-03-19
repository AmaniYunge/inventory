<?php 
mysql_close($cnnt);
$connect=mysql_connect("localhost","root","");

// connection to database
mysql_db_query("sell_db",$connect);




if($_POST['submit'] !="")
{

 ?>
<div id="categories">
  <form action="<?php echo $PHP_SELF; ?>"  method="post">

   <?php 
 echo "<center><ul id='display-inline-block-example'>";
$menulist=mysql_query("select categories from data group by categories;");
while($row=mysql_fetch_array($menulist)):
$catlist=$row['categories'];
    
	if($_POST[$catlist])
         {
            $ok=$_POST[$catlist];
             echo "<li><ul>";
			 echo " <li  style='text-transform:uppercase; font:bold; color:red; background:lightblue; '>$ok</li>";
            $menu=mysql_query("select name from data where name REGEXP '^[a-z]' AND  categories='$ok';");
             while($row=mysql_fetch_array($menu)):
              $name=$row['name'];
               echo "<li><input type='checkbox' name='$name' value='$name' />$name</li>"; 
              endwhile;
			  
              echo "</ul></li>";
			  }
			  
		  endwhile;
 
echo "</li></ul></center>";
 

echo "<button  type='submit' name='submit' value='' >Back</button><input id='categories_submit' type='submit' name='price' value='price' /></form></div>";
}



// SELET PRODUCT FOR PRICE 




else if ($_POST['price'] !="")
{

 ?>
<div id="categories">
  <form action="<?php echo $PHP_SELF; ?>"  method="post">
<table class="printer" width="100%" style="border-collapse:collapse;   " >
   
   <?php  
  
   echo " <tr align='center' style=' background:lightblue; color:#000099;'><td align='left' >name</td><td align='right'>price</td><td>quantity remain</td><td>quantity</td></tr>";
$menulist=mysql_query("select * from data ;");

$i=1;

while($row=mysql_fetch_array($menulist)):
$name=$row['name'];
$price=$row['price'];
$qrem=$row['quantity'];
    $bgcol="background-color:#C8F2BB";

	if($qrem <= 0)
	{
	$_POST[$name] ='';
	
	}
	
	
	if($_POST[$name] !="")
         {
		 if ($i%2)
		 {
		 $bgcol="";
		 }
		
              echo "<tr style='$bgcol'><td>$name</td><td align='right' >$price</td><td align='center'>$qrem</td><td align='center'><input type='text' name='$name' value='' /></td></tr>"; 
            
			  $i++;
			  }
		  endwhile;
 
              echo "<tr bgcolor='lightblue' height='20px'><td></td><td></td><td align='right'></td><td align='center'></td></tr>"; 
            


echo "</table><button  type='submit' name='submit' value='' >Back</button><input id='categories_submit' type='submit' name='total' value='Save' /></form>";
echo "</div>";


}

// SHOW TOTAL








else if($_POST['total'] !="")


{

echo "<div id='categories'>";
$sqltotal=mysql_query("select * from data");
echo "<table border='0' width='100%' style='border-collapse:collapse;'><caption>";

echo "<tr bgcolor='lightblue' style='color:#000099;'><td align='center'>number</td><td align='left'>name</td><td  align='center'> Quantity</td><td align='right'>price</td></tr>";
$no=1;
$total=0;
while($row=mysql_fetch_array($sqltotal)):
$id=$row['id'];
$name=$row['name'];
$cat=$row['categories'];
$price=$row['price'];
$quantity=$row['quantity'];
if( $quantity <= $_POST[$name] )
{
$_POST[$name]='';
}

if($_POST[$name] !='') {

$add=$_POST[$name];
 if($quantity < 0){
		 $quantity=0;
		 $add="";
		 }
$cost=$price*$add;
$total+=$cost;

$quantity=$quantity-$add;

mysql_query("UPDATE data SET quantity = '$quantity' WHERE  id='$id' LIMIT 1;");


mysql_query("INSERT INTO sellrecord (id, name, categories, quantity,cost, date, time) VALUES (NULL, '$name', '$cat', '$add','$cost', CURDATE(), CURTIME());");





$bgcol="background-color:#C8F2BB";
 if ($no%2)
		 {
		 $bgcol="";
		 }
echo "<tr style='$bgcol'><td align='center'>$no</td><td>$name</td><td align='center'>$add </td><td align='right'>".number_format($cost)."</td></tr>";
$no=$no+1;
}

endwhile;
$totaldisplay=number_format($total);
if($totaldisplay ==0 ){
$totaldisplay="";

}
echo "<tr  bgcolor='lightblue'><td></td><td align='left'>Total</td><td></td><td align='right' >";echo "<font size='6px' >".$totaldisplay."</font></td></tr>";

echo"</table>";
echo "<form action='workers.php'><input id='categories_submit' type='submit' name='save' value='Back' /><a style='text-decoration:none;' href='javascript:window.print()'>Print Receipt</a></form>";
echo "</div>";

}




// SHOW CATEGORIES 




else
{
?>
<div id="categories">
<form name="form1" action="<?php echo $PHP_SELF; ?>" method="post" >
<ul id='display-inline-block-example'>


<?php   
$menu=mysql_query("select categories ,count(categories) as num from data group by categories;");



while($row=mysql_fetch_array($menu)):

$cat=$row['categories'];
$num=$row['num'];
echo "<li style='text-transform:uppercase;'><input size='' type='checkbox' name='$cat' value='$cat' >$cat&nbsp;(<span style='color:#ff0000;'>$num</span>)</li>";


endwhile;
echo "</ul>";
?>




</table>
<br  />
<br  />
<br  />

<input id="categories_submit" type="submit" name="submit" value="submit" />
<br />

</div>
<?php }



 ?>
