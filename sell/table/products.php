<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<LINK REL="SHORTCUT ICON" HREF="images/clock.ico" />
<link rel="stylesheet" href="./css.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled </title>

<script type="text/javascript" src="jq.js"></script>
<!--cript type="text/javascript" src="scripts.js">
	
	   
	

</script-->

<style type="text/css">
@media print {

.printer{
display:none;

}

}

.cashvalue { text-align:center;
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
         <div id="categories" ><div> 
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
</div>
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
<style type="text/css">
#items { border:none; }
#items ul li input { position:absolute; right:1px; text-align:center; size:20px; }
 #qt { position:absolute; right:1px; text-align:center; size:20px; }
 #dsc { position:absolute;  text-align:center; size:20px; }
#items ul li { padding:2px; 
	text-transform:uppercase; font-size:12px;}
	
#left {position:absolute; background-image:url(../images/bgdiv.png);  width:15%;  top:40px; border-top:#000 1px solid; }
#left ul { list-style:none; border-radius:10px; padding:1px 15px; font-size:14px; text-transform:uppercase; cursor:pointer; }
#left ul li { list-style:none; display:block; border:none; background-image:url(../images/ul_li.png); font:Georgia, "Times New Roman", Times, serif; color:#003; background-color:#D3CFD8;  border:#999 thin groove; font-size:12px; padding:10px 10px 10px 10px; text-align:left; }

#left ul li:hover { background-color:#fff; background-image:url(../images/ul_li_hover.png); color:#000; text-align:left; font-size:16px; border:#999 thin groove;  }

</style>
<div id="categories">


<!--div id="left" class="search2" style="position:absolute; left:0; top:100px; border:#CCC 10px solid; height:auto; width:240px; "  >

<input type='text' id="nameenter"  name='name2' size="30"  value='' 
onkeyup="javascript: PostData1('search2.php','outsearch',this.value)" /><button style="position:relative; border-radius:10px; border:none; right:0%; color:red; background-color:#fff; top:2%; width:auto;" onclick='$(".search2").hide(); $("#showsearch").show();'>X</button>

<!--center><h3><?php echo $ct; ?><hr/></h3></center-->
<!--ul style="height:auto; " id="outsearch">
<?php

/*
//$sql=mysql_query("SELECT ct, nm,qt,pr,id FROM data WHERE ct='$ct' AND nm LIKE '%search%' ORDER BY nm; ");
$sql=mysql_query("SELECT ct, nm,qt,pr,id FROM data WHERE ct!='' AND nm LIKE 'bar%' ORDER BY nm limit 15; ");
$i=1;
while($row=mysql_fetch_array($sql)):
$name=$row['nm'];
$stock=$row['qt'];
$price=$row['pr'];
$idp=$row['id'];
	?>
	<li id="list" onclick='$("#picked").append("<li style=\"border-bottom:#fff thin solid;\" id=\"#p<?php echo $i;?>\" ><button style=\" border-radius:10px; color:red; background-color:#fff;\" onclick=\"  del(<?php echo $i;?>); setoint=(1,4);return false; \"  >X</button><?php echo $name;?><?php echo "____@";?><?php echo $price."Tsh";?><input onkeyUp=\" settoint(this.value,<?php echo $i;?>);\" quant=\"<?php echo $stock;?>\" id=\"q<?php echo $i;?>\" price=\"<?php echo $price;?>\" type=\"hidden\" value=\"ok\" name=\"<?php echo $idp."nm";?>\"/></li>" );
                $(this).remove();
    '><?php echo $name;?></li>
	
	
	<?php
	$i++;
	endwhile;
	//
	
	*/
	 ?>




</ul>
		<script type="text/ecmascript">
		    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
    }
    else {
        throw new Error("Ajax is not supported by this browser");
    }
	
			
function PostData1(page,div,data) {
	document.getElementById(div).style.display='block';
//this.page= document.getElementById('buttonpage').value;

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status == 200 && xhr.status < 300) {
				
				
                document.getElementById(div).innerHTML = xhr.responseText;
			
            }
        }
    }
  
    //var userid = document.getElementById("userid").value;
	//var dataid = document.getElementById("dataid").value;
var pagephp="files/" + page;
    // 3. Specify your action, location and Send to the server - Start 
    xhr.open('POST', pagephp);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("id=" + data);
    // 3. Specify your action, location and Send to the server - End
}
	


</script>
</div-->
						





  <form id="cashform" name="form1" action="<?php echo $PHP_SELF; ?>"  method="post"  onsubmit="return selectname();">
<center>
<table style="width:60%; border-collapse:collapse;   " >
   
   <?php  
  
   echo " <tr align='center' style=' background:lightblue; color:#000099;'>
    <td align='center' width='50px'>No.</td>
	<td align='left' >product name</td>
	<td align='center'>unit</td>
   <td align='center'>price</td>
   <td align='center' >stock</td>
   <td align='center'>discount</td>
   <td>quanty</td>
  
   </tr>";
$menulist=mysql_query("select * from data ;");

$i=1;
$j=0;
$value="";
while($row=mysql_fetch_array($menulist)):
$name=$row['nm'];
$price=$row['pr'];
$qrem=$row['qt'];
$per=$row['per'];
$id=$row['id'];
$idnm=$id.'nm_'.$price;
$idds=$id.'ds';
$reja=$row['by'];
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
			   <td align='center' width='50px'>$per</td>
			  <td align='center' id='pricedisplay$j'  >".number_format($price)."</td>
			  <td align='center'  width='50px' >$qrem</td>
			  <td><input  id='discount$j' name='$idds' onkeyup=\"OnFocusInput ('price')\"   value='' size='10' /></td>
			  <td align='center'>
			  <input id='cashvalue$j' class='cashvalue' price='$price' ds$j='$price' reja='$reja'
			   onkeyup=\"OnFocusInput ('price')\" type='text' name='$idnm' value='' size='10' /></td>
			 
			  </tr>"; 
            
			  $i++;
			    $j++;
				
				$value.=$id."-";

				
			  }
			  
			  
	}
		  endwhile;
 $valueid=$value;
//substr($value,0,-1);
              ?> 
              
               <tr  id="" bgcolor='lightblue' height='20px'>
			  <td width='50px'></td>
			  <td ></td>
			  <td></td>
			    <td></td>
                 <td></td>
			  <td align='right'></td>
			  <td ></td>
			 
			  </tr>
			 
			 
		

<tr bgcolor='' height='100px' style='border-right:1px; '>



<td ></td>
<td ></td>
<td align='left' COLOR='white' id="bei" style="font-size:20px; width:200px; color:#990000; font-family:Georgia, "Times New Roman", Times, serif;">WHOLE SALE</td>
 <td></td>
  <td></td>
<td ></td>
<td ><input type="hidden" name="dataid" value="<?php echo $valueid; ?>" id="dataid" /><input type="hidden" name="page" value="whole_sale" id="" />
<input type="button" id="buttonpage" name="buttonpage" value ="RETAIL" onclick="PostData()" /></td>
</tr>


<tr bgcolor='lightblue' height=''>
<td ></td>
 <td></td>
<form>
<br/><br/>


     
 
   

<td  align='right' valign="top">customer name:</td>
<td><input type='text' id="nameenter"  name='name'  value='' 
onkeyup="javascript: PostData1('search.php','search',this.value)" />

<div id="search" style="width:150px; display:none;  height:100px; background:#fff;">

</div>
</td>
<td align='right'></td>
<td ></td>
<td ></td>

<tr bgcolor='lightblue' height=''>
<td ></td>
 <td></td> 




<td  align='right'>phone:</td>
<td><input type='text' name='num' value='' /></td>
<td align='right'></td>
<td ></td>
<td ></td>

</tr>	
<tr bgcolor='lightblue' height=''>
<td ></td>
 <td></td>
<td  align='right'>cash</td>
<td>:<input id='sumcash' type='text' name='phone' value='' /></td>
<td align='right'></td>
<td ></td>
<td ></td>

</tr>	

<tr bgcolor='lightblue' height=''>
<td ></td>
 <td></td>
<td align='right'>&nbsp;</td>
<td></td>
<td align='right'><input  type='submit' name='info' value='submit'/></td>
<td ></td>
<td ></td>
</tr>

<input type='hidden' name='dir' value='<?php echo $home; ?>' />
        
</table></center></form>


							
		<script type="text/ecmascript">
		    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
    }
    else {
        throw new Error("Ajax is not supported by this browser");
    }
	
	
	
	
		
function PostData1(page,div,data) {
	document.getElementById(div).style.display='block';
//this.page= document.getElementById('buttonpage').value;

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status == 200 && xhr.status < 300) {
				
				
                document.getElementById(div).innerHTML = xhr.responseText;
			
            }
        }
    }
  
    //var userid = document.getElementById("userid").value;
	//var dataid = document.getElementById("dataid").value;
var pagephp="files/" + page;
    // 3. Specify your action, location and Send to the server - Start 
    xhr.open('POST', pagephp);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("id=" + data);
    // 3. Specify your action, location and Send to the server - End
}
	
function PostData() {
this.page= document.getElementById('buttonpage').value;

    // 1. Create XHR instance - Start

    // 1. Create XHR instance - End
    
    // 2. Define what to do when XHR feed you the response from the server - Start
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status == 200 && xhr.status < 300) {
                document.getElementById('categories').innerHTML = xhr.responseText;
				switch(page){
				case 'whole_sale':
				document.getElementById('buttonpage').value="retail";
				document.getElementById('page').value="whole_sale";
				//document.getElementById('dataid').value="1-2-3-4-5-6-7-8-9";
				break;
				case 'retail':
				document.getElementById('buttonpage').value="whole_sale";
				document.getElementById('page').value="retail";
				//document.getElementById('dataid').value="10-11-12-13-14";
				break;
				
				}
				//setTimeout('rept(page)',40000);
            }
        }
    }
    // 2. Define what to do when XHR feed you the response from the server - Start

   // var userid = document.getElementById("userid").value;
	var dataid = document.getElementById("dataid").value;
var pagephp="table/"+ page + ".php";
    // 3. Specify your action, location and Send to the server - Start 
    xhr.open('POST', pagephp);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("userid=" + dataid);
    // 3. Specify your action, location and Send to the server - End
}

function rept(page){

setTimeout('PostData(page)',1000);


}
function OnFocusInput(price){

	
	var i ; 
//var price = 0 ;
var pr=0;
	var sum=0;
	// alert ( "wooo!" ) ;
	  var input = document.getElementsByTagName("input");
	  var inputzipo=input.length/2;
	
           for (i = 0; i <inputzipo;  i++)
            { 
			//id="cashvalue"+i;
			 var ds=document.getElementById("cashvalue"+i);
			  var discount=document.getElementById("discount"+i).value;
			//alert("ok");
			
                if (ds.value>0  )
                {
             var  attr=ds.getAttribute('ds'+i);
              var  valu=ds.value;
			        pr =(attr- discount) * valu;
					
					
					sum=sum+pr;
				
					//sum=document.getElementById("discount2").value;
                }
				
				//alert(pr);
document.getElementById('sumcash').value=sum;
}
	
	

}
		
		
		
		
		
		
		
		/*
function OnFocusInput(price){

	
	var i ; 
//var price = 0 ;
var pr=0;
	var sum=0;
	// alert ( "wooo!" ) ;
	  var input = document.getElementsByTagName("input");
	 var id;
           for (i = 0; i < input.length; i++)
            { 
			id="cashvalue"+i;
			//alert(id);
                if (input[i].type == "text" && input[i].value != ""  )
                {
                 
                    pr =input[i].getAttribute(price) * input[i].value;
					sum=sum+pr;
                }
}


	document.getElementById('sumcash').value=sum;

}
function reja(){

var p=document.getElementById('buttonprice').value;
var input = document.getElementsByTagName("input");



//var input = document.getElementById("cashform").getElementsByTagName("input");

switch(p){
				case 'reja' :
				/*var a=input.getAttribute('price');
				alert(a);
				b,c,y,x;
				   y="value of A&nbsp " +a+" &nbspB "+b;
                   c=a;
                   a=b;
                   b=c;


    x="value of A&nbsp " +a+" &nbspB "+b;
	          
			    document.getElementById('bei').innerHTML="REJAREJA";
			   	document.getElementById('buttonprice').value="jumla"; */ 
				//document.getElementById('nameenter').nameenter="reja";
						  
      /*     for (i = 0; i < input.length; i++)
            {
			var prreja=document.getElementById('cashvalue'+i).getAttribute('reja');
			/*var prjumla=document.getElementById('cashvalue'+i).getAttribute('price');
			var xchange=prjumla;
			prjumla=prreja;
			prreja=xchange;
			
			 document.getElementById('cashvalue'+i).setAttribute("price",prreja);
			document.getElementById('cashvalue'+i).setAttribute("reja",prjumla);*/
		/*	document.getElementById('pricedisplay'+i).innerHTML=prreja;
			
		
                }
			
				
				
			//document.getElementById('pricedisplay').innerHTML=document.getElementById("cashvalue").getAttribute("reja");
				
		/*		break;
				case 'jumla' :
				document.getElementById('bei').innerHTML="JUMLA";
					document.getElementById('buttonprice').value="reja";
						//document.getElementById('nameenter').nameenter="price";
					   var input = document.getElementsByTagName("input");
           for (i = 0; i < input.length; i++)
            {
			
				var prjumla=document.getElementById('cashvalue'+i).getAttribute('price');
		/*	var prreja=document.getElementById('cashvalue'+i).getAttribute('reja');
			var xchange=prreja;
			prreja=prjumla;
			prjumla=xchange;
			document.getElementById('cashvalue'+i).setAttribute("reja",prjumla);
			document.getElementById('cashvalue'+i).setAttribute("price",prreja);*/
		/*	document.getElementById('pricedisplay'+i).innerHTML=prjumla;
			
			
			
			
			var prreja=document.getElementById('cashvalue'+i).getAttribute('price');
			document.getElementById('cashvalue'+i).setAttribute("price",prreja);
			document.getElementById('pricedisplay'+i).innerHTML=prjumla;
			
                }
			
			
				//document.getElementById('pricedisplay').innerHTML=document.getElementById("cashvalue").getAttribute("price");
				
				break;
				
				}


return false;

}*/
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
$buttonpage=$_POST['page'];

echo "<div id='categories' >";

$sqltotal=mysql_query("select * from data");
echo "<div id='print'>
<h3>

<table border='0' id='tab'  style='border-collapse:collapse; width:300px; border-right:1; font-size:19;'>

<caption>";
require("contact.php");
echo"<h3>TIN:.<BR/>

CUSTOMER&nbsp;: ".strtoupper($nameid)." <br/>";
$random_figure = md5(uniqid(rand()));
$figure = substr($random_figure,1,6);
 $rec_no= date("Y/m/d-").strtoupper($figure);

echo "REC_No &nbsp; &nbsp;".$rec_no."</caption>";

echo "<tr bgcolor='lightblue' style='color:#000099; font-size:20px;'>
<td align='center'>No.</td>
<td align='left'>product</td>

<td  align='center' > Qty</td>
<td  align='right'>cost</td>
</tr>";
$no=1;
$total=0;


	


// INSERT INFOMMATION
$ql=mysql_query("SELECT name from `siimshealthcenter`.`employee` where name='cashier1' OR name='cashier2' ORDER BY id DESC LIMIT 1");
while($rowname=mysql_fetch_array($ql)):
 $cashier=$rowname['name']; 
 endwhile;

mysql_query("INSERT INTO `siimshealthcenter`.`data` (id, name,bima, others,age,date,residence) VALUES ('', '$nameid','$cashier','$tel','$age', CURDATE(),'$rec_no');");





while($row=mysql_fetch_array($sqltotal)):

$name=$row['nm'];
$cat=$row['ct'];
$price=$row['pr'];
$reja=$row['by'];
$quantity=$row['qt'];
$id=$row['id'];
$per=$row['per'];
$buyprice=$row['buyprice'];
$jina=$_POST['name'];
if($_POST['name'] ==""){
$jina="costumer";
}
$idnm=$id.'nm_'.$price;
$idds=$id.'ds';
$order=$_POST[$idnm];
$orders=$_POST[$idds];
$profit=0;


if($order>0) {

$add=$order;
 if($quantity >= $add)
 
 {

if("retail"==$buttonpage){
$cost=($reja-$orders)*$add;
$profit1=$reja-$buyprice;
$profit=$profit1*$add;

}
else{
	
$cost=($price-$orders)*$add;
if($price>$buyprice){
$profit1=$price-$buyprice;
}
$profit=$profit1*$add;
}
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
`time`,
`profit`
)
VALUES (
NULL , '$id', '$add', '$cost', '$lastid', CURDATE( ) , CURTIME( ),'$orders'
);");





echo "<tr bgcolor='white' style='border-bottom:thin #ccc solid; font-size:20px;'>
<td align='center'>$no</td>
<td align='left'>$name</td>

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
if($tel==$total){}else{
echo "<tr bgcolor='white'  style=' border-bottom:thin #ccc solid;'>
<td></td>
<td align='left'>Paid</td>

<td></td>
<td align='right' >";echo "<font  >".number_format($tel)."</font></td>
</tr>
<tr><td>
</td><td align='left'></td>

<td align='right' ></td>
</tr>

";
}


if($remain>0){
echo "<tr bgcolor='white'  style='border-bottom:thin #ccc solid;'>
<td></td>
<td align='left'>Unpaid</td>
<td></td>

<td align='right' >";echo "<font  >".number_format($remain)."</font></td>
</tr>
";
}
if($remain<0){
$remain=$remain * -1;
echo "<tr bgcolor='white'  style='border-bottom:thin #ccc solid;'>
<td></td>
<td align='left'>Change</td>
<td></td>

<td align='right' >";echo "<font  >".number_format($remain)."</font></td>
</tr>
";
}
echo "<tr>

<td>
</td><td align='left'></td>

<td align='right' ></td>
</tr>

";
}

echo "<tr  bgcolor='lightblue'>
<td></td>
<td align='left'>Total cost</td>

<td></td>
<td align='right' >";echo "<font  >".$totaldisplay."</font></td>
</tr>
<tr><td>
</td><td align='left'></td>
<td></td>
<td align='right' ></td>
</tr>

";
echo"</table>


KARIBU TENA!</h3></div> ";
?>
<form style="" action='<?php echo $PHP_SELF; ?>' method='post'>
<?php
echo "<input  id='notprint'  type='submit' name='print' value='print' onclick='return printpage();'/><input  id='notprint'  type='submit' name='back' value='back'/>
<input type='hidden' name='dir' value='$home' />
</form>";
echo "</div>";
echo "<script type='text/javascript'>
function printpage(){

/*
alert('print');
document.getElementById('menu').style.display='none';
document.getElementById('login_top').style.display='none';
document.getElementById('categories').style.left='10px';
document.getElementById('categories').style.top='10px';
//document.getElementsByTagName('body').style.backgroundColor='#fff';
window.print();
*/
  var divToPrint=document.getElementById('print');
  document.getElementById('categories').style.top='1px';
//window.print();


 newWin= window.open('');
 newWin.document.write(divToPrint.outerHTML); 
  //divToPrint.style.pageBreakAfter = (print) ? 'always':'';
  newWin.print(); 

  newWin.close();
 document.location='index.php';
return false;
}
</script>";

}










// SHOW ct 
 else{?>

<!--form name="form1" action="<?php echo $PHP_SELF; ?>" method="post"  onsubmit="return chek();"-->
      
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
   
         <?php 
		 
		 //chekFormAdd();
		 
		 ?>
         </ul> 
         <br  />
         <style type="text/css">
#items { border:none; }
#items ul li input { position:absolute; right:1px; text-align:center; size:20px; }
 #qt { position:absolute; right:1px; text-align:center; size:20px; }
 #dsc { position:absolute;  text-align:center; size:20px; }
#items ul li { padding:2px; 
	text-transform:uppercase; font-size:12px;}
	
#left {position:absolute; background-image:url(../images/bgdiv.png);  width:15%;  top:40px; border-top:#000 1px solid; }
#left ul { list-style:none; border-radius:10px; padding:1px 15px; font-size:14px; text-transform:uppercase; cursor:pointer; }
#left ul li { list-style:none; display:block; border:none; background-image:url(../images/ul_li.png); font:Georgia, "Times New Roman", Times, serif; color:#003; background-color:#D3CFD8;  border:#999 thin groove; font-size:12px; padding:10px 10px 10px 10px; text-align:left; }

#left ul li:hover { background-color:#fff; background-image:url(../images/ul_li_hover.png); color:#000; text-align:left; font-size:16px; border:#999 thin groove;  }

</style>
<!--link rel="stylesheet" type="text/css" href="../styles/style.css" /-->
<script type="text/javascript" src="../js/jq.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	<?php 
	$cnt=mysql_connect("localhost","root","");
	mysql_select_db("moshi_db",$cnt);
$sqlc=mysql_query("SELECT ct FROM data WHERE ct !='' GROUP BY ct;");
$c=1;
while($row=mysql_fetch_array($sqlc)):
$sqc=$row['ct'];
	?>
		                      $(".left<?php echo $c; ?>").hide();
							  <?php
							  $c++;
							   endwhile; 
							 

	$sqlcat=mysql_query("SELECT ct FROM data WHERE   ct !='' GROUP BY ct;");
$class=1;
while($row=mysql_fetch_array($sqlcat)):
$ct=$row['ct'];
	?>

	$("#showdiv<?php echo $class; ?>").click(function(e){
			<?php 
	
$sqlc=mysql_query("SELECT ct FROM data WHERE  ct !='' GROUP BY ct;");
$c=1;
while($row=mysql_fetch_array($sqlc)):
$sqc=$row['ct'];
	?>
		                      $(".left<?php echo $c; ?>").hide();
							  <?php
							  $c++;
							   endwhile; 
							 ?>		 
                             $(".left<?php echo $class; ?>").show(500);
                             $(".left<?php echo $class; ?>").offset({left:340,top:e.pageY});

                             });

<?php 
$class++;

endwhile; ?>
/*
	$("#showdiv"+1).click(function(e){
		                      $(".left2").hide();
							  $(".left3").hide();
							 
                             $(".left"+1).show(500);
                             $(".left"+1).offset({left:340,top:e.pageY});

                             });
	$("#showdiv"+2).click(function(e){
		                     $(".left1").hide();
							   $(".left3").hide();
							   
                             $(".left"+2).show(500);
                             $(".left"+2).offset({left:340,top:e.pageY});

                             });	
   $("#showdiv"+3).click(function(e){
		                      $(".left1").hide();
							  $(".left2").hide();
                             $(".left"+3).show(500);
                             $(".left"+3).offset({left:340,top:e.pageY});

                             });				*/	 
	 });
	 
	
	 
	 
	 
	 
	 
function del(p){
	//alert(p);
	this.p=p;
	var rem="#p"+p;
	//alert(rem);
	//document.getElementById(rem).innerHTML="";
	$(rem).remove();
	//alert("ddd");
	settointdsc();
	}
	function showthis(no){
		$(".left2").fadeOut(500); 
		alert(clientX);
	$(".left"+no).fadeIn(500);
	$(".left"+no).show();
		
		
		}
		
			function settointdsc(){
			    var input = document.getElementById("items").getElementsByTagName("input");
	            var inputzipo=(input.length-4)/2;
	            //alert ( inputzipo ) ;
					//alert("vvv");
			    var str2 = $( ".qt" ).serialize();
				var str = $( ".dsc" ).serialize();
				var sum=0;
				var arrstr2=str2.split('&');
				var arrstr=str.split('&');
				for(var i=0; i<inputzipo; i++ ){
				var arrdsc=arrstr[i].split('=');
				var arridprice=arrstr2[i].split('=');
				
				var arrprice=arridprice[0].split('_');
				var sumcash=arrprice[1]-arrdsc[1];
				sum=sum+(arridprice[1]*sumcash);
				}
			   // $("#customer").val(sum);
				$("#sumcash").val( sum );

					}
		function settoint(a,id){
			
			var stock=document.getElementById("cashvalue"+id).getAttribute("stock");
			var setstringtoint=parseInt(a);
			setstringtoint=setstringtoint/1;
			if(setstringtoint!=parseInt(a)) {setstringtoint=0;
			
			
			document.getElementById("cashvalue"+id).value="";
			}
			
			if(stock<setstringtoint){document.getElementById("cashvalue"+id).value=stock;}
			
		
	settointdsc();
			
	
	var i ; 
//var price = 0 ;
var pr=0;
	var sum=0;
 //alert ( "wooo!" ) ;
	  var input = document.getElementById("items").getElementsByTagName("input");
	  var inputzipo=(input.length-4)/2;
	//alert ( inputzipo ) ;
	//alert ( "wooo!" ) ;
           for (i = 1; i <inputzipo;  i++)
            { 
		
			//id="cashvalue"+i;
			 var ds=document.getElementById("cashvalue")[i].value;
			alert(ds);
			  //var discount=document.getElementById("discount"+i).value;
			//alert(discount);
			//	alert (ds.value ) ; 
                if (ds.value>0  )
                {
             var  attr=ds.getAttribute('ds'+i);
              var  valu=ds.value;
			        pr =(attr- discount) * valu;
					
					
					sum=sum+pr;
				
					//sum=document.getElementById("discount2").value;
                }
				
				//alert(pr);
document.getElementById('sumcash').value=sum;
}
	
			}
function OnFocusInput(){

	
	var i ; 
//var price = 0 ;
var pr=0;
	var sum=0;
 //alert ( "wooo!" ) ;
	  var input = document.getElementsByTagName("input");
	  var inputzipo=(input.length - 2)/2;
	
           for (i = 0; i <inputzipo;  i++)
            { 
			//id="cashvalue"+i;
			 var ds=document.getElementById("cashvalue"+i);
			  var discount=document.getElementById("discount"+i).value;
			//alert("ok");
			
                if (ds.value>0  )
                {
             var  attr=ds.getAttribute('ds'+i);
              var  valu=ds.value;
			        pr =(attr- discount) * valu;
					
					
					sum=sum+pr;
				
					//sum=document.getElementById("discount2").value;
                }
				
				//alert(pr);
document.getElementById('sumcash').value=sum;
}
	
	

}
		
		
					
			
								
		    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
    }
    else {
        throw new Error("Ajax is not supported by this browser");
    }
function PostData() {
this.page= document.getElementById('buttonpage').value;

    // 1. Create XHR instance - Start

    // 1. Create XHR instance - End
    
    // 2. Define what to do when XHR feed you the response from the server - Start
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status == 200 && xhr.status < 300) {
                document.getElementById('items').innerHTML = xhr.responseText;
				switch(page){
				case 'whole_sale':
				document.getElementById('buttonpage').value="retail";
				document.getElementById('page').value="whole_sale";
				//document.getElementById('dataid').value="1-2-3-4-5-6-7-8-9";
				break;
				case 'retail':
				document.getElementById('buttonpage').value="whole_sale";
				document.getElementById('page').value="retail";
				//document.getElementById('dataid').value="10-11-12-13-14";
				break;
				
				}
				//setTimeout('rept(page)',40000);
            }
        }
    }
    // 2. Define what to do when XHR feed you the response from the server - Start

   // var userid = document.getElementById("userid").value;
	var dataid = document.getElementById("dataid").value;
var pagephp="table/"+ page + ".php";
    // 3. Specify your action, location and Send to the server - Start 
    xhr.open('POST', pagephp);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("userid=" + dataid);
    // 3. Specify your action, location and Send to the server - End
}

function rept(page){

setTimeout('PostData(page)',1000);


}
function OnFocusInput(price){

/*	
	var i ; 
//var price = 0 ;
var pr=0;
	var sum=0;
	// alert ( "wooo!" ) ;
	  var input = document.getElementsByTagName("input");
	 var id;
           for (i = 0; i < input.length; i++)
            { 
			id="cashvalue"+i;
			//alert(id);
                if (input[i].type == "text" && input[i].value != ""  )
                {
                 
                    pr =input[i].getAttribute(price) * input[i].value;
					sum=sum+pr;
                }
}


	//document.getElementById('sumcash').value=sum;
*/
}
		
	function entername(){
		
		if(document.getElementById('name').value==''){ alert('enter name'); return false;}
		return true;
		}	
</script>
<div style="position:absolute; top:100px;">
<div id="left" style="position:absolute; left:1%;  height:auto; width:230px; background-color:#fff; border:#ccc 10px solid;">
<ul >
<li id="showsearch" style="display:none" onclick="$('.search2').show();">search</li>
<?php 
$sql=mysql_query("SELECT  ct FROM data WHERE  ct !='' GROUP BY ct;");
$i=1;
while($row=mysql_fetch_array($sql)):
$cat=$row['ct'];
if($cat==""){}else{
	?>
	<li id="showdiv<?php echo $i;?>" > <span style="text-transform:uppercase;">  
   <?php echo $cat;?>
  </span> 
 
   </li>
	




	<?php
	$i++;}
	endwhile;

	 ?>
</ul>
</div>
<?php //require("cnt.php"); 

$sqlcat=mysql_query("SELECT ct FROM data WHERE  ct !='' GROUP BY ct;");
$class=1;
while($row=mysql_fetch_array($sqlcat)):
$ct=$row['ct'];

?>
<div style="position:absolute; width:100%;  ">   
<div id="left" class="left<?php echo $class; ?>" style="position:absolute; left:250px; border:#CCC 10px solid; height:auto; width:240px; "  >
<button style="position:relative; border-radius:10px; border:none; right:0%; color:red; background-color:#fff; top:2%; width:auto;" onclick='$(".left<?php echo $class; ?>").hide();'>X</button>
<center><h3><?php echo $ct; ?><hr/></h3></center>
<ul style="overflow:scroll;height:500px; ">
<?php 
$sql=mysql_query("SELECT ct, nm,qt,pr,id FROM data WHERE ct='$ct' AND nm REGEXP '^[a-z]' ORDER BY nm; ");
$i=1;
while($row=mysql_fetch_array($sql)):
$name=$row['nm'];
$stock=$row['qt'];
$price=$row['pr'];
$idp=$row['id'];
	?>
	<!--li id="list" onclick='$("#picked").append("<li style=\"border-bottom:#fff thin solid;\" id=\"#p<?php echo $i;?>\" ><button style=\" border-radius:10px; color:red; background-color:#fff;\" onclick=\"  del(<?php echo $i;?>); setoint=(1,4);return false; \"  >X</button><?php echo $name;?><?php echo "____@";?><?php echo $price."Tsh";?><input onkeyUp=\" settoint(this.value,<?php echo $i;?>);\" quant=\"<?php echo $stock;?>\" id=\"q<?php echo $i;?>\" price=\"<?php echo $price;?>\" type=\"hidden\" value=\"ok\" name=\"<?php echo $idp."nm";?>\"/></li>" );
                $(this).remove();
    '><?php echo $name;?></li-->
	
	<li id="list" onclick='$("#picked").append("<li id=\"p<?php echo $idp;?>\" ><button style=\" border-radius:10px; color:red; background-color:#fff;\" onclick=\"   del(<?php echo $idp;?>);  return false; \"  >X</button><?php echo $name."&nbsp;&nbsp;@".$price;?><input class=\"dsc\" onkeyUp=\" settointdsc();\"  id=\"discount<?php echo "$idp";?>\" name=\"<?php echo $idp."ds";?>\" size=\"5\" style=\"padding-right:60px;\" placeholder=\"discount\"  value=\"\" type=\"\" /><input onkeyUp=\" settoint(this.value,<?php echo $idp;?>); \" placeholder=\"quantity\" stock=\"<?php echo $stock;?>\" id=\"cashvalue<?php echo $idp;?>\" price=\"<?php echo $price;?>\" type=\"text\" value=\"\" name=\"<?php echo $idp."nm_".$price;?>\" class=\"qt\" size=\"5\"/><hr/>" );
   $(this).remove();             
    '><?php echo $name;?></li>
	<?php
	$i++;
	endwhile;
	//
	 ?>




</ul>
</div>















<?php 
$class++;
endwhile;
?>


<div id="left" class="search2" style="position:absolute; left:250px; border:#CCC 10px solid; height:auto; width:240px; "  >

<input type='text' id="nameenter"  name='name2' size="30"  value='' 
onkeyup="javascript: PostData1('searchpro.php','outsearch',this.value)" /><button style="position:relative; border-radius:10px; border:none; right:0%; color:red; background-color:#fff; top:2%; width:auto;" onclick='$(".search2").hide(); $("#showsearch").show();'>X</button>

<!--center><h3><?php echo $ct; ?><hr/></h3></center-->
<ul style="height:auto; " id="outsearch">
<?php

/*
//$sql=mysql_query("SELECT ct, nm,qt,pr,id FROM data WHERE ct='$ct' AND nm LIKE '%search%' ORDER BY nm; ");
$sql=mysql_query("SELECT ct, nm,qt,pr,id FROM data WHERE ct!='' AND nm LIKE 'bar%' ORDER BY nm limit 15; ");
$i=1;
while($row=mysql_fetch_array($sql)):
$name=$row['nm'];
$stock=$row['qt'];
$price=$row['pr'];
$idp=$row['id'];
	?>
	<li id="list" onclick='$("#picked").append("<li style=\"border-bottom:#fff thin solid;\" id=\"#p<?php echo $i;?>\" ><button style=\" border-radius:10px; color:red; background-color:#fff;\" onclick=\"  del(<?php echo $i;?>); setoint=(1,4);return false; \"  >X</button><?php echo $name;?><?php echo "____@";?><?php echo $price."Tsh";?><input onkeyUp=\" settoint(this.value,<?php echo $i;?>);\" quant=\"<?php echo $stock;?>\" id=\"q<?php echo $i;?>\" price=\"<?php echo $price;?>\" type=\"hidden\" value=\"ok\" name=\"<?php echo $idp."nm";?>\"/></li>" );
                $(this).remove();
    '><?php echo $name;?></li>
	
	
	<?php
	$i++;
	endwhile;
	//
	
	*/
	 ?>




</ul>
		<script type="text/ecmascript">
		    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
    }
    else {
        throw new Error("Ajax is not supported by this browser");
    }
	
			
function PostData1(page,div,data) {
	document.getElementById(div).style.display='block';
//this.page= document.getElementById('buttonpage').value;

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status == 200 && xhr.status < 300) {
				
				
                document.getElementById(div).innerHTML = xhr.responseText;
			
            }
        }
    }
  
    //var userid = document.getElementById("userid").value;
	//var dataid = document.getElementById("dataid").value;
var pagephp="files/" + page;
    // 3. Specify your action, location and Send to the server - Start 
    xhr.open('POST', pagephp);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("id=" + data);
    // 3. Specify your action, location and Send to the server - End
}
	


</script>
</div>
						


</div>
<div id="items" style="position:absolute; top:0; left:540px;  height:auto; width:500px; background-color:#fff; ">
<!--WHOLE_SALE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dataid" value="" id="dataid" /><input type="hidden" name="page" value="whole_sale" id="" />
<input align="right" type="button" id="buttonpage" name="buttonpage" value ="RETAIL" onclick="PostData()" /-->
<form action="" method="post" id="quantity">

<ul style="list-style:none; border:#ccc 10px solid; width:100%; position:absolute; color:#000;  padding:0; text-align:left; " id="left">

<li id="picked"></li>
<br/><hr/>

<li >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total cost:<input id="sumcash" type="text" name="phone" value=""
/><br/><hr/></li>
 <li >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;customer name:<input id="customer" type="text" name="name" value=""
/><br/><br/><hr/></li>
  <li >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phone No_:<input id="phone" type="text" name="num" value=""
/><br/><br/><hr/></li>
 <li><button class="css_btn_class" type="submit" onclick="if($('#customer').val()==''){
 alert('Enter customer nsme');
 return false;
 
 
 
 }" name="info" value="order" >submit</button></li>
 </ul><input type="hidden" name="dir" value="<?php echo $home; ?>" />
 </form>
</div>
</div>
         <br  />

         <!-- return entername();
         onclick=" var ob=$('#quantity').serialize()+'&user_id='+$('#user_id').val()+'&patient_id='+$('#patient_id').val(); selected('med_payment.php','#page',ob); return false;"
         input type="hidden" name="dir" value="<?php echo $home; ?>" />
         <center><input id="ct_submit" type="submit" name="sub" value="submit" />
         </center>
        <br />

</form-->

         <?php } ?>





  
</body>
</html>
