<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<LINK REL="SHORTCUT ICON" HREF="images/logoicon.ico" />

<title>Sales Management</title>
<head>

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
                
                <script>
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
		
function PostDatareturn(page,div,data) {
	//document.getElementById(div).style.display='block';

  //document.getElementById(div).innerHTML = "opppppppp";
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status == 200 && xhr.status < 300) {
			
                document.getElementById(div).innerHTML = xhr.responseText;
			
            }
        }
    }

    //var userid = document.getElementById("userid").value;
	//var dataid = document.getElementById("dataid").value;
var pagephp=page;
    // 3. Specify your action, location and Send to the server - Start 
    xhr.open('POST', pagephp);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("id=" + data);
    // 3. Specify your action, location and Send to the server - End
}
</script>

                
                
                
	<script type="text/javascript">
	
$(document).ready(function(){
	// hidden
$("#login_body").animate({'right':'3%'},600);
$("#recTable").hide();
$("#contact").hide();
$("#recinfo").hide();
$("#recTable").fadeIn('slow');
$("#light").delay(900).animate({'left':'30%'},1000).delay(1000).fadeOut("slow").delay(1000).fadeIn("slow").animate({'left':'3%'},1000);
document.getElementById("logo").innerHTML="<img src='images/logopng.png' /><br />&nbsp;&nbsp;&nbsp;&nbsp;Designer &nbsp;&nbsp;&nbsp;&nbsp;+255 654 610 040";

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
<?PHP require("configSystem.php");?>
<style type="text/css" >

div#menu {
margin-left:10px;
position:absolute;
top:0px;
width:900px;
}
div#copyright { display: none; }
@media print
{
#notprint {display:none;}
.notprint {display:none;}
#print{display:block;
color:#000;}
th { color:#000;}
}
#hid {display:none;}
#unpaid {
	border-collapse:collapse;
	border:#000 thin solid;
	background:#FFF;
	width:40%;
	
	
	
	
	}
	
	
	#unpaid td { border: thin #CCC solid;}
</style>


<body id="bgimg" bgcolor="#EDE9CB">

<?php
if($home==1 || $open=='ok'){
?>
     <div id="login_top"><br /><br />
	 


        <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $user.$_POST['use']; ?>&nbsp;&nbsp;&nbsp;
			    
                 <?php logout(); ?>
			  </span>
	       </h1>
           
		</center>
     </div>

<div id="login_body">
<br /><br />
<?php 
menuTab();
echo "<div id='recTable'>"; 
//formInfo(); 
require("table/products.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>

    
	      
	</div>
    


<?php
}
else if($_POST['dir']=='stock'){
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
echo "<div id='recTable'>"; 
//formInfo(); 
require("table/stock.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>

    
	      
	</div>
    






<?php
}

else if($_POST['dir']=='debit'){
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
<H2>DEBIT</H2>
   <br />
   
   <?PHP


//dateDebit();  
//formInfo(); 
 
//require("table/matumizi.php"); 
require("table/debit.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>

    
	      
	</div>
    






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

require("table/bank.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>
      
	</div>

<?php
}


else if($_POST['dir']=='salesman'){
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
<h1>SALESMAN</h1>

   <?PHP

require("table/salesman.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>
      
	</div>

<?php
}

else if($_POST['dir']=='tbl'){
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
<h1>TBL</h1>

   <?PHP

require("table/tbl.php"); 
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

require("table/wadai.php"); 
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

require("table/wadaiwa.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>
      
	</div>

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
dateImport();
require("table/matumizi1.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>

    
	      
	</div>
    






<?php
}
else if($_POST['dir']=='cst'){
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
dateCheckcst();
echo "<div id='returm'>";
require("table/costumer.php");
echo "</div>"; 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>

    
	      
	</div>
    






<?php
}
else if($_POST['dir']=='unpaid'){
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
echo "<div id='sell'><H2>UNPAID CUSTOMER </H2>"; 
//formInfo(); 
//dateCheckunpaid();
require("table/unpaid.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>

    
	      
	</div>
    






<?php
}
else if($_POST['dir']=='add'){
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
echo "<div id='recTable'>"; 
//formInfo(); 
require("table/addproducts.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>

    
	      
	</div>
    




<?php
}

           
                             //USER RECEPTION
							 
else if($_POST['dir']=='qwe'){
?>
                    <div id="login_top"><br /><br />

 <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $_POST['user']; ?>&nbsp;&nbsp;&nbsp;
			    
                 <?php logout(); ?>
			  </span>
	       </h1>
		</center>

                   </div>
				   
                  <div id="login_body">
				   
                           <?php menuTab();labInfo(); echo "<div id='recTable'>"; 
//formInfo(); 

echo $t.$cd;
echo "</div>";
echo "<div di='sell'>";
dateCheck();
require("table/selldate.php"); 
echo "</div>";

echo "<div id='contact'>"; 

contact(); 

echo "</div>"?>

<?php
}
 
else if($_POST['dir']=='asd'){
?>
     <div id="login_top"><br /><br />
	 


        <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $_POST['user']; ?>&nbsp;&nbsp;&nbsp;
			    
                 <?php logout(); ?>
			  </span>
	       </h1>
		</center>
     </div>

<div id="login_body">
<br /><br />
<?php 
menuTab();
echo "<div id='recTable'>"; 
//formInfo(); 
require("table/productsaddition.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>
     
	      
	</div>
    




<?php
}
 
else if($_POST['dir']=="zxc"){
?>
     <div id="login_top"><br /><br />
	 


        <center>
            <h1>&nbsp;&nbsp;&nbsp;
			  <span style="font-size:12px; text-transform:lowercase;"><?php echo $_POST['user']; ?>&nbsp;&nbsp;&nbsp;
			    
                 <?php logout(); ?>
			  </span>
	       </h1>
		</center>
     </div>

<div id="login_body">
<br /><br />
<?php 
menuTab();
echo "<div id='recTable'>"; 
//formInfo(); 
require("table/newproducts.php"); 
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
			    
                 <?php logout(); ?>
			  </span>
	       </h1>
		</center>
     </div>

<div id="login_body">
<br /><br />
<?php 
menuTab();
echo "<div id='recTable'>"; 
//formInfo(); 
require("table/sign.php"); 
echo $t.$cd;
echo "</div>";
echo "<div id='contact'>"; 
contact(); 
echo "</div>"?>
    
	</div>
    




<?php
}
else if($_POST['username'] =='out'){

 $connect=mysql_connect("localhost","root","");
							mysql_select_db("siimshealthcenter", $connect);
							if($_POST['username'] =='out'){
	                        $sql="UPDATE `siimshealthcenter`.`employee` SET `signout` = CURTIME( ) ORDER BY id DESC LIMIT 1;";
mysql_query($sql);}
?>
<script type="text/javascript">
document.location="../index.php";
</script>
<?php }
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
							 <td><input type="text" name="user" value="" /></td>
							 <td>password</td>
							 <td><input type="password" name="dir"  /></td>
							 <td><input type="submit" name="submit" value="Logn In" /></td>
                        </tr>
                    </table>        
                            </center>	
                         </form>    
          
	
    


                      <div id='light'>
                         <p id="logo" ></p>
                        </div></div><?php }echo $t.$cd;?><div id="copyright">Copyright &copy; 2013 <a href="http://apycom.com/">Apycom jQuery Menus</a></div>

  

 

  


  




</body>
</html>
