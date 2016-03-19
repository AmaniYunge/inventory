<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<LINK REL="SHORTCUT ICON" HREF="images/logoicon.ico" />

<title>Sale Management</title>
<link type="text/css" rel="stylesheet" href="style.css" />
<link type="text/css" href="menu.css" rel="stylesheet" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="menu.js"></script>
    <script src="jqueryCalendar/jquery-1.6.2.min.js"></script>
<script src="jqueryCalendar/jquery-ui-1.8.15.custom.min.js"></script>
<link rel="stylesheet" href="jqueryCalendar/jquery/jqueryCalendar.css">
<script>
                jQuery(function() {
                                jQuery( "#bday" ).datepicker();
								 jQuery( "#to" ).datepicker();
								
							//$("h1").html("<h1><img src='../sell/images/cont3.png' /></h1>").fadeIn("slow").delay(2000).fadeOut("slow");
                });
				
				</script>
	<script type="text/javascript">
	
$(document).ready(function(){
	var sl="<h1>	Sale Management system </h1>";
	// hidden
$("#login_body").animate({'right':'2%'},600);
$("#recTable").hide();
$("#contact").hide();
$("#recinfo").hide();
$("#recTable").fadeIn('slow');
$("#light").delay(900).animate({'left':'30%'},1000).delay(1000).fadeOut("slow").delay(1000).fadeIn("slow").animate({'left':'3%'},1000);
document.getElementById("logo").innerHTML= sl+"<br />&nbsp;&nbsp;&nbsp;&nbsp;Designer &nbsp;&nbsp;&nbsp;Petro Bilingi	&nbsp;+255 654 610 040&nbsp;&nbsp;&nbsp;&nbsp;Wilfred kishogo +255756566955";

  //view table
$("span.cnt").click( function(){
$("#recTable").hide();
$("#contact").hide();
$("#recinfo").show('slow');

});

// form
$("span.wks").click( function(){
$("#recinfo").hide();
$("#contact").hide();
$("#recTable").show('fast');
});
// contact
$("span.cont").click( function(){

$("#recTable").hide();
$("#recinfo").hide();
$("#contact").show('slow');
});

});


</script>
</head>
<style type="text/css" >

div#menu {
margin-left:10px;
position:absolute;
top:0px;
}
div#copyright { display: none; }
</style>


<body id="bgimg">


<?PHP
require("db.php");
 require("configSystem.php");


								   
	 



if($_POST['dir']=="debit"){
?>
                        <div id="login_top"><br /><br />

 <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $_POST['user']; ?>&nbsp;&nbsp;&nbsp;
			    
                 <a href="" style="text-decoration:none;"> <button   >logOut</button></a>
			  </span>
	       </h1>
		</center>

                   </div>
				   
                  <div id="login_body">
				   
                           <?php menuTab();labInfo(); echo "<div id='recTable'>"; 
//formInfo(); 

echo $t.$cd;
echo "</div>";
echo "<div di='sell'><H2>DEBIT</H2><fieldset>"; ?>


<?php

require("sell/table/debit.php"); 
echo "</div></fieldset>";

echo "<div id='contact'>"; 

contact(); 

echo "</div>"?>

<?php
}




else if($_POST['dir']=='bank'){
?>
     <div id="login_top">
     
	 


        <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $user; ?>&nbsp;&nbsp;&nbsp;
			    
                 <?php logout(); ?>
			  </span>
	       </h1>
		</center>
     </div>

<div id="login_body">
 
<br /><br />
<?php 
menuTab();
echo "<div id='sell'>";
?>
<script type="text/javascript">
function edit() {

        if(document.form2.namematumizi.value!=""){

         return true;	
         }
		 
		 alert("enter name");
         return false;
        	
	
	
	
}

</script>
<!--form action="" name="form2" method="post" onsubmit="return edit();">
 &nbsp;&nbsp;Description:&nbsp;<input type="text" name="description"value="" size="30" />
              &nbsp;&nbsp;Name:&nbsp;<input type="text" name="namematumizi"value="" size="30" />
              &nbsp;&nbsp;Amount:&nbsp;<input type="text" name="amount"value="" size="30" />
             <input type="hidden" name="dir"value="debit" size="30" />
              &nbsp;&nbsp;<input type="submit" name="matumizi"value=" Enter" size="30" />
</form-->
<h1>BANK</h1>

   <?PHP

require("sell/table/bank.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>
      
	</div>

<?php
}
else if($_POST['dir']=='wadai'){
?>
     <div id="login_top">
     
	 


        <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $user; ?>&nbsp;&nbsp;&nbsp;
			    
                 <?php logout(); ?>
			  </span>
	       </h1>
		</center>
     </div>

<div id="login_body">
 
<br /><br />
<?php 
menuTab();
echo "<div id='sell'>";
?>
<script type="text/javascript">
function edit() {

        if(document.form2.namematumizi.value!=""){

         return true;	
         }
		 
		 alert("enter name");
         return false;
        	
	
	
	
}

</script>
<!--form action="" name="form2" method="post" onsubmit="return edit();">
 &nbsp;&nbsp;Description:&nbsp;<input type="text" name="description"value="" size="30" />
              &nbsp;&nbsp;Name:&nbsp;<input type="text" name="namematumizi"value="" size="30" />
              &nbsp;&nbsp;Amount:&nbsp;<input type="text" name="amount"value="" size="30" />
             <input type="hidden" name="dir"value="debit" size="30" />
              &nbsp;&nbsp;<input type="submit" name="matumizi"value=" Enter" size="30" />
</form-->
<h1>WADAI</h1>

   <?PHP

require("sell/table/wadai.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>
      
	</div>

<?php
}

else if($_POST['dir']=='wadaiwa'){
?>
     <div id="login_top">
     
	 


        <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $user; ?>&nbsp;&nbsp;&nbsp;
			    
                 <?php logout(); ?>
			  </span>
	       </h1>
		</center>
     </div>

<div id="login_body">
 
<br /><br />
<?php 
menuTab();
echo "<div id='sell'>";
?>
<script type="text/javascript">
function edit() {

        if(document.form2.namematumizi.value!=""){

         return true;	
         }
		 
		 alert("enter name");
         return false;
        	
	
	
	
}

</script>
<!--form action="" name="form2" method="post" onsubmit="return edit();">
 &nbsp;&nbsp;Description:&nbsp;<input type="text" name="description"value="" size="30" />
              &nbsp;&nbsp;Name:&nbsp;<input type="text" name="namematumizi"value="" size="30" />
              &nbsp;&nbsp;Amount:&nbsp;<input type="text" name="amount"value="" size="30" />
             <input type="hidden" name="dir"value="debit" size="30" />
              &nbsp;&nbsp;<input type="submit" name="matumizi"value=" Enter" size="30" />
</form-->
<h1>WADAIWA</h1>

   <?PHP

require("sell/table/wadaiwa.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>
      

	</div>

<?php
}



else if($_POST['dir']=="bima"){
?>
                        <div id="login_top"><br /><br />

 <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $_POST['user']; ?>&nbsp;&nbsp;&nbsp;
			    
                 <a href="" style="text-decoration:none;"> <button   >logOut</button></a>
			  </span>
	       </h1>
		</center>

                   </div>
				   
                  <div id="login_body">
				   
                           <?php menuTab();labInfo(); echo "<div id='recTable'>"; 
//formInfo(); 

echo $t.$cd;
echo "</div>";
echo "<div di='sell'><H2>CASHIER REPORT</H2><fieldset>";
dateCheckbima();
require("sell/table/costumeradmin.php"); 
echo "</div></fieldset>";

echo "<div id='contact'>"; 

contact(); 

echo "</div>"?>

<?php
}

else if($_POST['dir']=="unpaid"){
?>
                        <div id="login_top"><br /><br />

 <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $_POST['user']; ?>&nbsp;&nbsp;&nbsp;
			    
                 <a href="" style="text-decoration:none;"> <button   >logOut</button></a>
			  </span>
	       </h1>
		</center>

                   </div>
				   
                  <div id="login_body">
				   
                           <?php menuTab();labInfo(); echo "<div id='recTable'>"; 
//formInfo(); 

echo $t.$cd;
echo "</div>";
echo "<div di='sell'><H2>UNPAID CUSTOMER </H2><fieldset>";
//dateCheckunpaid();
require("sell/table/adminiunpaid.php"); 
echo "</div></fieldset>";

echo "<div id='contact'>"; 

contact(); 

echo "</div>"?>

<?php
}

else if(($_POST['dir']==$ps1 && $_POST['user']=='med') || $_POST['dir']=='med' || $_POST['dir']==$ps2 ){
	$home=1;
	if($_POST['dir']==$ps1){
	 $cashier="cashier1";
	 }
	
	 else{
	 $cashier="cashier2";
	 }
	$connect=mysql_connect("localhost","root","");
							mysql_select_db("siimshealthcenter", $connect);
	 $sql="INSERT INTO `siimshealthcenter`.`employee` (
`id` ,
`name` ,
`signin` ,
`signout` ,
`date` ,
`comment`
)
VALUES (
NULL , '$cashier', CURTIME( ) , NULL , CURDATE( ) , NULL
);
";
mysql_query($sql);
	 
?>
<script type="text/javascript">
document.location="sell/index.php";
</script>
<?php
}

else if(($_POST['dir']=='2377' && $_POST['user']=='lab') || $_POST['dir']=='lab'||($_POST['dir']==$ps3 && $_POST['user']=='med2') ){
?>


<script type="text/javascript">
document.location="stokper/index.php";
</script>


     <!--div id="login_top"><br /><br />
	 


        <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $user; ?>&nbsp;&nbsp;&nbsp;
			    
                 <a href="" style="text-decoration:none;"> <button   >logOut</button></a>
			  </span>
	       </h1>
		</center>
     </div>

<div id="login_body">
<br /><br />
                           <?php labInfo(); echo "<div id='recTable'>"; 
//formInfo(); 

echo $t.$cd;
echo "</div>";
echo "<div di='sell'><h1>LABORATORY</h1> <form action='' method='post'>
          <fieldset>";
		  
		  if($_POST['namelab'] !=''){
			  
			mysql_query("UPDATE `siimshealthcenter`.`data` SET `lab` = '$_POST[labcost]' WHERE `data`.`id` ='$_POST[namelab]' LIMIT 1 ;");  
			  
		  }
		  
		  
		  
		  
            ?>
	 Name:<select id="txtbox" name="namelab" ><option></option>
			                       <?php 
								   	$connect=mysql_connect("localhost","root","");
							mysql_select_db("siimshealthcenter", $connect);
							$query=mysql_query("SELECT * FROM data WHERE name REGEXP '^[a-z]' And date=CURDATE() ");
				                   while($rows=mysql_fetch_array($query)): 
								   $name=$rows['name'];
								    $id=$rows['id'];
								   
								  echo "<option value='$id' >$name</option>";
								   
								   
								   
								   endwhile;
								   
								   ?> 
								   
			  </select> &nbsp;&nbsp;Cost:&nbsp;<input type="text" name="labcost"value="" size="30" />Tsh.
             <input type="hidden" name="dir"value="lab" size="30" />
              &nbsp;&nbsp;<input type="submit" name="medsub"value=" Enter" size="30" />





<?php

echo "<fieldset>";

require("table/lab_table.php"); 
echo "</div></fieldset>";

echo "<div id='contact'>"; 

contact(); 

echo "</div-->"?>

<?php
}

else if(($_POST['dir']==$ps4) && ($_POST['user']=='cashier3') || (($_POST['dir']=='cash'))){

         
	 
	 $cashier="cashier3";
	
	$connect=mysql_connect("localhost","root","");
							mysql_select_db("siimshealthcenter", $connect);
	 $sql="INSERT INTO `siimshealthcenter`.`employee` (
`id` ,
`name` ,
`signin` ,
`signout` ,
`date` ,
`comment`
)
VALUES (
NULL , '$cashier', CURTIME( ) , NULL , CURDATE( ) , NULL
);
";
mysql_query($sql);
	 
?>
-->
<script type="text/javascript">
document.location="cashier3/index.php";
</script>
}
else if($_POST['dir']=='add'){
?>
     <div id="login_top"><br /><br />
	 


        <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $user; ?>&nbsp;&nbsp;&nbsp;
			    
                 <a href="" style="text-decoration:none;"> <button   >logOut</button></a>
			  </span>
	       </h1>
		</center>
     </div>

<div id="login_body">
<br /><br />
<?php 
                menuTabreception();labInfo(); echo "<div id='recTable'>"; 
//formInfo(); 

echo $t.$cd;
echo "</div>";
echo "<div di='sell'><fieldset>";
 dateCheckdiagnoses();
require("table/diagnoses.php"); 
echo "</div></fieldset>";

echo "<div id='contact'>"; 

contact(); 

echo "</div>"?>

<?php
}				  
                             //USER RECEPTION
else if(($_POST['dir']=='qwe') || ($_POST['dir']==$ps0)){
?>
                    <div id="login_top"><br /><br />

 <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $_POST['user']; ?>&nbsp;&nbsp;&nbsp;
			    
                 <a href="" style="text-decoration:none;"> <button   >logOut</button></a>
			  </span>
	       </h1>
		</center>

                   </div>
				   
                  <div id="login_body">
				   
                           <?php menuTab();labInfo(); echo "<div id='recTable'>"; 
//formInfo(); 

echo $t.$cd;
echo "</div>";
echo "<div di='sell'><fieldset>";
dateCheck();
require("sell/table/selldate.php"); 
echo "</div></fieldset>";

echo "<div id='contact'>"; 

contact(); 

echo "</div>"?>

<?php
}							 
else if($_POST['dir']=='diagnoses'){
?>
                    <div id="login_top"><br /><br />

 <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $_POST['user']; ?>&nbsp;&nbsp;&nbsp;
			    
                 <a href="" style="text-decoration:none;"> <button   >logOut</button></a>
			  </span>
	       </h1>
		</center>

                   </div>
				   
                  <div id="login_body">
				   
                           <?php menuTab();labInfo(); echo "<div id='recTable'>"; 
//formInfo(); 

echo $t.$cd;
echo "</div>";
echo "<div di='sell'><H2></H2>";
 //dateCheckstatisticdiagnoses();
require("sell/table/stock.php"); 
echo "</div>";

echo "<div id='contact'>"; 

contact(); 

echo "</div>"?>

<?php
}
 
else if($_POST['dir']=='matumizi'){
?>
                    <div id="login_top"><br /><br />

 <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $_POST['user']; ?>&nbsp;&nbsp;&nbsp;
			    
                 <a href="" style="text-decoration:none;"> <button   >logOut</button></a>
			  </span>
	       </h1>
		</center>

                   </div>
				   
                  <div id="login_body">
				   
                           <?php menuTabmatumizi();labInfo(); echo "<div id='recTable'>"; 
//formInfo(); 

echo $t.$cd;
echo "</div>";
echo "<div di='sell'><H2>DEBIT</H2>";?>
<!-- -->
<script type="text/javascript">
function edit() {

        if(document.form2.namematumizi.value!=""){

         return true;	
         }
         return false;
        	
	
	
	
}

</script>
<form action="" name="form2" method="post" onsubmit="return edit();">
 &nbsp;&nbsp;Description:&nbsp;<input type="text" name="description"value="" size="30" />
              &nbsp;&nbsp;Name:&nbsp;<input type="text" name="namematumizi"value="" size="30" />
              &nbsp;&nbsp;Amount:&nbsp;<input type="text" name="amount"value="" size="30" />
             <input type="hidden" name="dir"value="matumizi" size="30" />
              &nbsp;&nbsp;<input type="submit" name="matumizi"value=" Enter" size="30" />
</form>

   <br /> <br /> <br />
<?php 
datematumizi();
require("table/matumizi.php"); 
echo "</div>";

echo "<div id='contact'>"; 

contact(); 

echo "</div>"?>

<?php
}
else if(($_POST['user']=="reception" && $_POST['dir']=='2000') ||($_POST['dir']=='recp')){
?>
     <div id="login_top"><br /><br />
	 


        <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $_POST['user']; ?>&nbsp;&nbsp;&nbsp;
			    
                 <a href="" style="text-decoration:none;"> <button   >logOut</button></a>
			  </span>
	       </h1>
		</center>
     </div>

<div id="login_body">
<br /><br />
<?php 
menuTabreception();
 echo "<div id='recTable'>"; 
//formInfo(); 

echo $t.$cd;
echo "</div>";
echo "<div di='sell'><h1>RECEPTION</h1> <form action='' method='post'>
          <fieldset>";
		  

$connect=mysql_connect("localhost","root","");
							mysql_select_db("siimshealthcenter", $connect);
							
							
$sqlS = "INSERT INTO data (doctor, date,name,age,bima,residence,sex,time) VALUES ('$_POST[doctor]', CURDATE(),'$_POST[nm]','$_POST[age]','$_POST[bima]','$_POST[place]','$_POST[sex]',CURTIME());"; //,'$_POST[dressing]','$_POST[medicine]','$_POST[bima]','$_POST[age]','$_POST[recidence]');"; 
							


						 if($_POST['nm']!=""){
							
							mysql_query($sqlS);
						
							}
							

?>

<form name="rec" action="" method="post" >
        
  
 
         <fieldset style="width:40%; padding-left:70px;  border-radius:8px; " >
            <legend><h3 style="color:#006">information</h3></legend>
                <center> <table  style="font-size:18px;font-family:Arial, Helvetica, sans-serif; color:#006; width:100%; ">
                   <colgroup>
	                     <col align="left" />
	                     <col align="left"  />
	               </colgroup>
                   <tr>
	                   
					  <td >Name<br /><input style="height:25px; width:200px; " id="txtbox"  type="text" name="nm" value="" size="30" /></td>
                      <td>Residence<br /><input style="height:25px; width:200px; " id="txtbox" type="text" name="place"  value="" size="30" /></td>
		           </tr>
		           
                    <tr>
		            
					<td>Age<br /><input style="height:25px; width:200px; " id="txtbox" type="text" name="age"  value="" size="30" /></td>
                     <td>Sex<br /><select style="height:25px; width:200px; " id="txtbox"  name="sex"   ><option></option><option value="M">MALE</option><option value="F">FEMALE</option></select></td>
		         
		        </tr>
                   <tr>
	                 
					  <td>consultation<br /><input style="height:25px; width:200px; " id="txtbox" type="text" name="doctor"  value=""  /></td>
                      <td>Bima<br /> <select style="height:25px; width:200px; " id="txtbox"  name="bima"   >
			  <option></option>
			  <option value="NMB BANK">NMB BANK</option>
			   <option value="NBC BANK">NBC BANK</option>
			    <option value="TANESCO">TANESCO</option>
				 <option value="KK SECURITY">KK SECURITY</option>
				  <option value="ACB BANK">ACB BANK</option>
				   <option value="STANIC BANK">STANIC BANK</option>
				    <option value="STRATEGIS">STRATEGIS</option>
					 <option value="MAZAO">MAZAO</option>
					  <option value="BINAFSI">BINAFSI</option>
					   <option value="TCC">TCC</option>
					    <option value="TBL">TBL</option>
						<option value="CRDB & AAR">CRDB & AAR</option> 
						<option value="ITV">ITV</option>
						<option value="SUMATRA">SUMATRA</option>
						<option value="JUBILEE">JUBILEE</option>
			  </select></td>
		          </tr>
		         
		       
		        <tr>
		           <td align="left"></td><td ><br /><input type="submit" name="newprod" value="Enter" /></td>
				  </tr> 
				  
				  
               
         </table><br /><br /> </center>
                      
      </fieldset>
    	 <input type="hidden" name="dir" value="recp" /> 
           </form>
           
           <div style="position:absolute; right:5%; top:180px;">
           
           <?php 

		$connect=mysql_connect("localhost","root","");
		mysql_select_db("siimshealthcenter", $connect);
		if($_POST['signname']!=""){
							$sqlsign = "INSERT INTO employee (name,signin,date,comment) VALUES ('$_POST[signname]',CURTIME(), CURDATE(),'r');"; 
							mysql_query($sqlsign);
							 
							
							}
							
					if($_POST['out'] !=""){		
							
							
		
		mysql_query("UPDATE employee SET signout = CURTIME( ) WHERE id ='$_POST[out]' ;");
	
					}
		?>
           
           <form name="rec" action="<?php echo $PHP_SELF; ?>" method="post" >
        
  
 
         <fieldset style="width:40%; padding-left:70px;  border-radius:8px; height:300px; " >
            <legend><h3 style="color:#006">signIn/signOut</h3></legend>
                <center> <table  style="font-size:18px;font-family:Arial, Helvetica, sans-serif; color:#006; width:100%; ">
                   <colgroup>
	                     <col align="left" />
	                     <col align="left"  />
	               </colgroup>
                   
                    <tr>
		            
					<td>nameIn<br /><input style="height:25px; width:200px; " id="txtbox" type="text" name="signname"  value="" size="30" /></td>
                     <td>nameOut<br /><select style="height:25px; width:200px; " id="txtbox"  name="out"   ><option></option>
                     
                    <?php 
					
		$connect=mysql_connect("localhost","root","");
		mysql_select_db("siimshealthcenter", $connect);
                     $query=mysql_query("SELECT * FROM employee WHERE date=CURDATE() ;");
				                   while($rows=mysql_fetch_array($query)): 
								   $name=$rows['name'];
								    $id=$rows['id'];
								   
								  echo "<option value='$id' >$name</option>";
								   
								   
								   
								   endwhile;
								   
								   ?> 
								   
                     
                     
                     </select></td>
		         
		        </tr>
		       
		        <tr>
		           <td align="left"><br /><input type="submit" name="signin" value="SignIn" /></td><td ><br /><input type="submit" name="signout" value="SignOut" /></td>
				  </tr> 
				  
				  
               
         </table><br /><br /> </center>
             <input type="hidden" name="dir"value="recp"  />          
      </fieldset>
      </form>
           </div>
           
           
            <?php
		  if($_POST['namerecp'] !=''){
			  
			mysql_query("UPDATE `siimshealthcenter`.`data` SET `doctor` = '$_POST[recpcost]' WHERE `data`.`id` ='$_POST[namerecp]' LIMIT 1 ;");  
			  
		  }
		  
		  
		  
		  
            ?>
            <br />
	<form action="" method="post"> Name:<select id="txtbox" name="namerecp" ><option></option>
			                       <?php 
								   	$connect=mysql_connect("localhost","root","");
							mysql_select_db("siimshealthcenter", $connect);
							$query=mysql_query("SELECT * FROM data WHERE name REGEXP '^[a-z]' And date=CURDATE() ");
				                   while($rows=mysql_fetch_array($query)): 
								   $name=$rows['name'];
								    $id=$rows['id'];
								   
								  echo "<option value='$id' >$name</option>";
								   
								   
								   
								   endwhile;
								   
								   ?> 
								   
			  </select> &nbsp;&nbsp;Cost:&nbsp; <input type="text" name="recpcost"value="" size="30" />Tsh.
             <input type="hidden" name="dir"value="recp" size="30" />
              &nbsp;&nbsp; <input type="submit" name="medsub"value=" Enter" size="30" />

</form>
<br />


<?php

echo "<fieldset>";

require("table/recp_table.php"); 
echo "</div></fieldset>";

echo "<div id='contact'>"; 

contact(); 

echo "</div>"?>

<?php
}
else if($_POST['dir']=='import'){
?>
     <div id="login_top"><br /><br />
	 


        <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $user; ?>&nbsp;&nbsp;&nbsp;
			    
                 <?php logout(); ?>
			  </span>
	       </h1>
		</center>
     </div>

<div id="login_body">
<br /><br />
<?php 
menuTab();
echo "<div id='sell'>";  
//formInfo(); 
dataImport();
require("table/matumizi1.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>

    
	      
	</div>
    






<?php
}

else if($_POST['dir']=="sign"){
?>
     <div id="login_top"><br /><br />
	 


        <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $_POST['user']; ?>&nbsp;&nbsp;&nbsp;
			    
                 <a href="" style="text-decoration:none;"> <button   >logOut</button></a>
			  </span>
	       </h1>
		</center>
     </div>

<div id="login_body">
<br /><br />
<?php 
menuTab();
echo "<div id='recTable'><H2>signIn/signOut</H2>"; 
dateChecksign();
require("table/sign_table.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>";?>
    
	</div>
    




<?php
}

//LOGIN
else {
topLay();
                           
?>


                         <div  id="login_body">
                               <form action="<?php echo $PHP_SELF; ?>" method="post">
                               <center>
                                    <!--img src="images/bg1.jpg" align="middle" width="400px" height="300px" /--><br /><br /> 


<br />
<br />

<br />
                  <table style="background:#CCCCFF ; border:#75A2EC thin solid;">
                 
                         <tr>
	                         <td>name</td>  
							 <td><select name="user"><option></option><option value="administrator">Administrator</option>
                             <!--option value="reception">Reception</option>
                             <option value="lab">Laboratory</option>
                             <option value="cash">cashier</option-->
                             <option value="med">Cashier1</option>
                             <option value="med">Cashier2</option>
                             <!--option value="cashier3">Cashier3</option-->
                             <option value="med2">Stockeeper</option>
                             </select></td>
							 <td>password</td>
							 <td><input type="password" name="dir" value="" /></td>
							 <td><input type="submit" name="submit" value="Logn In" /></td>
                        </tr>
                    </table>        
                            </center>	
                         </form>    
          

    


                      <div id='light'>
                         <p id="logo" ></p>
                        </div></div><?php $connect=mysql_connect("localhost","root","");
							mysql_select_db("siimshealthcenter", $connect);
							if($_POST['username'] =='out'){
	                        $sql="UPDATE `siimshealthcenter`.`employee` SET `signout` = CURTIME( ) ORDER BY id DESC LIMIT 1;";
mysql_query($sql);}}echo $t.$cd; ?><div id="copyright">Copyright &copy; 2013 <a href="http://apycom.com/">Apycom jQuery Menus</a></div>

  

 

  


  




</body>
</html>
