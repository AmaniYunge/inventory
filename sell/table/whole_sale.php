
<?php 
 $userid = trim($_POST["userid"]);

  /*if ($userid == "")                // if user id is blank
     echo "you must not leave it blank"; 
  else if ($userid == "johnny")     // if user id is "johnny" (case sensitive)
    echo "'johnny' has been used, please choose another User ID";
  else                              // if user id anything else
    echo "yeah! user id \"".$userid."\" is available, you are free to use it.d";
	*/
	?>
	 <!--table width="400px" style=" background-color:#FFF; border:#F00 thin solid; font-family:Arial, Helvetica, sans-serif;">
             <caption style="color:#009; font-size:18px;">information server 1 go on</caption>
              <tr><td>project:</td><td> Sale Management System</td></tr>
              <tr><td>started:</td><td> 13-11-2013</td></tr>
              <tr><td>designer:</td><td> Petro Bilingi</td></tr>
               <tr><td>telephone:</td><td> +255 654610040</td></tr>
              <tr><td>C.E.O:</td><td> Wilfred Kishogo</td></tr>
             <tr><td>telephone:</td><td> +255 756 566 955</td></tr>
              <tr><td>email:</td><td> wilfoctechcompany@gmail.com</td></tr>
              <tr><td>place:</td><td> Der Es Salaam,Mbezi Beach</td></tr>
              </table-->
  <?php   
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("moshi_db", $connect);

//$id=$_POST['userid'];
$a=0;


/*
$a=$i;

$sql=mysql_query("SELECT * FROM data where id='$idxp[$i]' ");
while($row=mysql_fetch_array($sql)):

$name=$row['nm'];
$price=$row['pr'];
$qrem=$row['qt'];
$per=$row['per'];
$id=$row['id'];

echo $name ."<hr>".$id;

endwhile;
}*/
//}

//echo $userid."<br>";
?>

  <form id="cashform" name="form1" action="<?php echo $PHP_SELF; ?>"  method="post"  onsubmit="return selectname();">
<center>
<table style="width:70%; border-collapse:collapse;   " >
   
   <?php  
  
   echo " <tr align='center' style=' background:lightblue; color:#000099;'>
    <td align='center' width='50px'>No.</td>
	<td align='left' >product name</td>
	<td align='center'>unit</td>
   <td align='center'>price</td>
   <td align='center' >stock</td>
    <td align='center' >discount</td>
   <td>quanty</td>
  
   </tr>";
   $idxp=explode("-",$userid);
$result=count($idxp);
$value="";
$no=1; 
$j=0;
for($i=0; $i<$result; $i++){ 


$menulist=mysql_query("select * from data where id='$idxp[$i]';");



while($row=mysql_fetch_array($menulist)):

$name=$row['nm'];
$price=$row['pr'];
$qrem=$row['qt'];
$per=$row['per'];
$id=$row['id'];
$idnm=$id.'nm';
$reja=$row['by'];
//echo $s."".$result." &nbsp;id&nbsp;".$id."<br>";

    $bgcol="background-color:#fff";

	
		 if ($i%2)
		 {
		 $bgcol="background-color:#C8F2BB; color:#000;";
		 }
		
            echo " 
			  <tr style='$bgcol'>
			  <td align='center' width='50px'>$no</td>
			  <td align='left'>$name</td>
			   <td align='center'>$per</td>
			  <td align='center' id='pricedisplay$j'  >".number_format($price)."</td>
			  <td align='center' >$qrem</td>
			  <td><input  id='discount$j' name='$idds' onkeyup=\"OnFocusInput ('price')\"   value='' /></td>
			  <td align='center'>
			  <input id='cashvalue$j' class='cashvalue' price='$price' ds$j='$price' reja='$reja'
			   onkeyup=\"OnFocusInput ('price')\" type='text' name='$idnm' value='' /></td>
			 
			  </tr>"; 
			  $value.=$id."-";
			 
			    $j++;
			 // }
			  
			$no++;  
	
		  endwhile;
		  }
		 // echo $value."<br/>";
		 $valueid=$value;
//substr($value,0,-1);
		  //echo $valueid."<br/>";
 
              ?> <tr bgcolor='lightblue' height='20px'>
			  <td width='50px'></td>
			  <td ></td>
			  <td></td>
			    <td></td>
                  <td></td>
			  <td align='right'></td>
			  <td ></td>
			 
			  </tr>
			 
			 
		

<tr bgcolor='' height='100px' style='border-right:1px; '>

<td></td>
<td align='left' COLOR='white' id="bei" style="font-size:24px; color:#990000; font-family:Georgia, "Times New Roman", Times, serif;">WHOLE_SALE</td>
<td ></td>
  <td></td>
<td ></td>
<td ></td>
<td ><input type="hidden" value="<?php echo $valueid; ?>" id="dataid" /><input type="hidden" name="page" value="whole_sale" id="" />
<input type="button" id="buttonpage" value ="retail" onclick="PostData()" /></td>
</tr>


<tr bgcolor='lightblue' height=''>
<td ></td>

  <td></td>


<td  align='right'>customer name:</td>
<td><input type='text' id="nameenter"  name='name'  value='' onfocus="OnFocusInput ('price')" /></td>
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
<td  align='right'>cash:</td>
<td><input id='sumcash' type='text' name='phone' value='' /></td>
<td align='right'></td>
<td ></td>
<td ></td>

</tr>	

<tr bgcolor='lightblue' height=''>
<td ></td><td ></td>
<td align='right'>&nbsp;</td>
<td></td>
<td align='right'><input  type='submit' name='info' value='submit'/></td>
<td ></td>
<td ></td>
</tr>

<input type='hidden' name='dir' value='<?php echo $home; ?>' />
        
</table></center></form>


<form  action='<?php echo $PHP_SELF; ?>' method='post'>
<?php
echo "<button  type='submit' name='sub' value='' >back</button>
<input type='hidden' name='dir' value='$home' />
</form>";		    

?>
		
							