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

<div id='categories' >
<button onclick="printpage(0);">print</button>
						<div id='div0' >
<center>
         <h1  > 
                  <FONT color="#000066">
  STOCK        
   </FONT>
         </h1>
         </center>
<?php

echo "<center>
<table border='0'  style='border-collapse:collapse; width:100%; border-right:1; background-color:#F3F3F3;'>";

echo "<tr bgcolor='lightblue' style='font-family:Tahoma, Geneva, sans-serif; font-size:12px; color:F00; text-transform:uppercase;''>
<td align='center' >categories</td>
<td align='center'>No.</td>

<td align='left' >product name</td>
<td  align='left' >unit</td>
<td align='center' >stock</td>
<td align='right' >purchased price</td>
<td align='right'>sell price</td>
<td align='right' >purchased cost</td>
<td align='right' >sell cost</td>
</tr>
<tr>

";



// INSERT INFOMMATION


//mysql_query("INSERT INTO rdby (id, nm, tel, email,payment,delivery,date) VALUES ('', '$order', '$tel', '$email','$payment','$delivery', CURDATE());");

$totalproduct=0;	
$e=1;
$sqltotals=mysql_query("select ct from data group by ct ");
while($row=mysql_fetch_array($sqltotals)):
$cat=$row['ct'];
if($cat !=""){		
echo "
<tr><td colspan='10'>
<table border='0' id='div$e'  style='border-collapse:collapse; border:none; width:100%;'>

<tr style='height:24px; background-color:#F3F3F3; border-top:#C8F2BB thin solid;' >
<td align='center' style='width:150px;  text-transform:uppercase'><button onclick='printpage($e);'>$cat</button></td>
<!--td align='left'style='visibility:hidden;'></td>
<td align='left' style='visibility:hidden;'></td>
<td align='center'style='visibility:hidden;''></td>
<td align='center' style='visibility:hidden;'> </td>
<td align='center'style='visibility:hidden;''></td>
<td align='center' style='visibility:hidden;'> </td>
<td align='center' style='visibility:hidden;'> </td>
<td align='center' style='visibility:hidden;'> </td>
<td align='center' style='visibility:hidden;'> </td-->

<td align='center'>No.</td>

<td align='left' >product name</td>
<td  align='left'  >unit</td>
<td align='center' >stock</td>
<td align='right' >purchased price</td>
<td align='right'>sell price</td>
<td align='right' >purchased cost</td>
<td align='right' >sell cost</td>
</tr>

";
$e=$e+1;
$sqltotal=mysql_query("select * from data where ct='$cat'");
$no=1;
$totalqt=0;
while($row=mysql_fetch_array($sqltotal)):

$name=$row['nm'];

$price=$row['pr'];
$by=$row['buyprice'];
$per=$row['per'];
$quantity=$row['qt'];
$id=$row['id'];
$cost=$quantity*$price;
$costby=$quantity*$by;
$bgcol="background-color:#C8F2BB";
// if ($no%2)
	//	 {
//		 $bgcol="background-color:#fff; color:#000;";
	//	 }
echo"<tr>
<td align='left'style='visibility:hidden; background:#fff;'></td>
<td align='left'>$no .</td>
<td align='left' style='border-bottom:#ccc thin solid;background-color:#fff;'>$name</td>
<td align='left' style='border-bottom:#ccc thin solid;background-color:#fff;'>$per</td>
<td align='center'style='border-bottom:#ccc thin solid;background-color:#fff;' >$quantity </td>
<td align='right'style='border-bottom:#ccc thin solid;background-color:#fff;' > $by</td>
<td align='right'style='border-bottom:#ccc thin solid;background-color:#fff;' > $price</td>
<td align='right'style='border-bottom:#ccc thin solid;background-color:#fff;' >".number_format($costby)."</td>
<td align='right'style='border-bottom:#ccc thin solid;background-color:#fff;' >".number_format($cost)."</td>
</tr>";

$totalproduct=$totalproduct+$quantity;
$totalfullcost=$totalfullcost+$cost;
$totalfullcostby=$totalfullcostby+$costby;
$no=$no+1;
$totalqt=$totalqt+$quantity;
$cat1=$cat;
$totalcost=$totalcost+$cost;
$totalcostby=$totalcostby+$costby;
endwhile;
}

if($cat1 !=''){
echo"

<tr> 
<td align='left'style='visibility:hidden; background:#fff;'></td>
<td align='center'></td>
<td align='left' style='border-bottom:#fff thin solid;background-color:#fff;'></td>
<td align='center' style='border-bottom:#fff thin solid;background-color:#fff;'>total $cat1</td>
<td align='center' style='border-bottom:#fff thin solid;background-color:#fff;' >".number_format($totalqt)." </td>
<td align='center' style='border-bottom:#fff thin solid;background-color:#fff;' > </td>
<td align='center' style='border-bottom:#fff thin solid;background-color:#fff;' >total cost </td>
<td align='right' style='border-bottom:#fff thin solid;background-color:#fff;' >".number_format($totalcostby)." </td>
<td align='right' style='border-bottom:#fff thin solid;background-color:#fff;' >".number_format($totalcost)." </td>



</tr></table></td></tr>
<tr style='bacground:#fff; height='25px' width:100%;><td colspan='10'>&nbsp;</td></tr>

";
}
$totalcost=0;
$totalcostby=0;
endwhile;

echo "<tr  bgcolor='lightblue'>
<td style='visibility:hidden;'></td>
<td></td>
<td align='left'></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td align='right' >";echo "<font size='4px' ></font></td>
</tr>
<tr>
<tr  bgcolor='lightblue' height='20px'>
			  <td ></td>
			  <td ></td>
			  <td></td>
			    <td></td>
			     <td></td>
			    <td></td>
			     <td>total stock cost</td>
				 <td align='right'>".number_format($totalfullcostby)."</td>
<td  align='right'>".number_format($totalfullcost)."</td>
			  </tr>

";
echo"</table> ";?>

<?php
echo "</center></div>";
echo "</div>";
?>
                   
<script type='text/javascript'>
function printpage(a){





/*
document.getElementById('menu').style.display='none';
document.getElementById('login_top').style.display='none';
document.getElementById('categories').style.left='10px';
document.getElementById('categories').style.top='10px';
//document.getElementsByTagName('body').style.backgroundColor='#fff';
window.print();
*/
  var divToPrint=document.getElementById('div'+a);
   
  document.getElementById('div'+a).style.top='1px';
  //alert('div'+a);
 // document.getElementById('tablequery').style.width='100%';
  // document.getElementById('tablequery').style.borderCollapse='collapse';

//window.print();


 newWin= window.open('');
 newWin.document.write(divToPrint.outerHTML); 
  //divToPrint.style.pageBreakAfter = (tab) ? 'always':'';
  newWin.print(); 

  newWin.close();
 //document.location='index.php';
 // document.getElementById('tablequery').style.width='100%';
return false;
}
</script>