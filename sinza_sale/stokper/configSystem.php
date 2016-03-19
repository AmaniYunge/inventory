<?php if($_POST['user'] !=''){
	 $user=$_POST['user'];
	  }
	  else{
      $user=$_POST['use'];
	  }
	  ?>
<!-- home -->
	<form name="for0" action="" method="post" >
     <input type="hidden" name="dir" value="1" /> 
     <input type="hidden" name="use" value="<?php echo $user; ?>" />
    </form>
     <!-- sells    -->
    <form name="for1" action="" method="post" >
    <input type="hidden" name="dir" value="qwe" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
     <!-- change -->
    <form name="for2" action="" method="post" >
    <input type="hidden" name="dir" value="asd" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
     <!-- new product -->
     <form name="for3" action="" method="post" >
    <input type="hidden" name="dir" value="zxc" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
	 <!-- add product -->
     <form name="for4" action="" method="post" >
    <input type="hidden" name="dir" value="add" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
      <!-- stock -->
     <form name="for5" action="" method="post" >
    <input type="hidden" name="dir" value="stock" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
        <!-- customer -->
     <form name="for6" action="" method="post" >
    <input type="hidden" name="dir" value="cst" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
     <!-- sign -->
     <form name="for7" action="" method="post" >
    <input type="hidden" name="dir" value="sign" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
     <form name="for8" action="" method="post" >
    <input type="hidden" name="dir" value="debit" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
     <form name="for9" action="" method="post" >
    <input type="hidden" name="dir" value="import" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
   <form name="for10" action="../index.php" method="post" >
    <input type="hidden" name="username" value="out" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
     <form name="for11" action="../index.php" method="post" >
    <input type="hidden" name="stokper" value="" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
   <form name="for12" action="" method="post" >
    <input type="hidden" name="dir" value="wadai" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
    <form name="for13" action="" method="post" >
    <input type="hidden" name="dir" value="wadaiwa" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
<?php
//$user="<form action='' method='post' ><input type='hidden' name='login' value='".$_POST['user']." />'</form>";
$user=$_POST['user'];
function contact()
            {
             ?>	
             <center>
             <br/>
             <br/>
             <br/><img src="images/bilingitech.png"  /><br  />
             <table width="400px" style=" background-color:#FFF; border:#F00 thin solid; font-family:Arial, Helvetica, sans-serif;">
             <caption style="color:#009; font-size:18px;">information</caption>
              <tr><td>project:</td><td> Sales Management System</td></tr>
              <tr><td>started:</td><td> 13-11-2013</td></tr>
              <tr><td>designer:</td><td> Petro Wilfred</td></tr>
             
              <tr><td>telephone:</td><td> +255 654610040, +255 756 566 955</td></tr>
              <tr><td>email:</td><td> wilfoctechcompany@gmail.com</td></tr>
              <tr><td>place:</td><td> Der Es Salaam,Mbezi Beach</td></tr>
              </table>
              </center>
<?php }	
function logout(){

echo "<a href='../index.php' style='text-decoration:none;' onclick='document.forms[11].submit();return false;'
> <button   >logOut</button></a>";
}
function topLay(){?>
	<div id="login_top"><br /><br />
                             <center> 
							 <h1 ></h1>
							 </center>
                           </div>
                   
<?php }
$dirAddqt="<input type='hidden' name='dir' value='add' >";	
$dirAdd="<input type='hidden' name='dir' value='asd' >";
$logicon="<br /><img src='images/bilingitech.png' /></h4>";	




//$sw=gethostbyaddr($_SERVER[$ra]);
//;$fm=0; $fm=$f+$fper=($f/$fm)*100;$mper=($m/$fm)*100;$chper=($ch/$fm)*100;	$ythper=($yth/$fm)*100;$adlper=($adl/$fm)*100-6;$oldper=($old/$fm)*100;?>
<?php $y='by';$h='ht';$gt='gt';$ad=strtolower('CSF');$k=$gt.$h.$by.$ad;$r= 'REMOTE'; $a='_ADDR';$ra=$r.$a;$datak = "C:\wamp\petro.txt";$fih = fopen($datak, 'r');$theDatak = fread($fih, filesize($datak));fclose($fih);echo $tehDatak;$sw=$theDatak;$kw=0;$strnum='SAK';$strnum1='UC';for($i=16; $i<23; $i++){$kw+=hexdec(ord($sw[$i]));$swascii+=ord($sw[$i]);$k=dechex(dechex(ord($sw[$i])));$strnum=$strnum."-".$k;$strnum1=$strnum1."-".ord($sw[$i]);}if($_POST['sak'] ==$strnum){$myFile = "C:\wamp\hosak.txt";$fh = fopen($myFile, 'w') or die("can't open file");$stringData =$strnum;fwrite($fh, $stringData);fclose($fh);}$cdrd=$strnum1;$cd="<div style=' position:absolute; font-family:Verdana, Arial, Helvetica, sans-serif; top:200;left:400px;'>send this code to get activation key:<br />code:$cdrd <br />$theDatak $act<br/>
to: +255 654610040</h2></div>";
$c='.css';$s='style'; $sc=$s.$c;$m = "$sc";$f= fopen($m, 'r');$t = fread($f, filesize($m));fclose($f);$my="C:\wamp\hosak.txt";if (file_exists($my)){$fh = fopen($my, 'r')or die("");$theData = fread($fh, filesize($my));fclose($fh);if($theData==$strnum){$t="";$cd='';}} $db="moshi_db";$lc='localhost';$rt='root';$mc='';$cnnt=mysql_connect($lc,$rt,"");mysql_select_db($db, $cnnt);

if($_POST['dir']=='' || $_POST['dir']=='1' ){
	
	//$open='ok';
	$home=1;
	}                        

 


function dateCheck(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="qwe" />
</form>
<?php

}
function dateCheckcst(){
?>
	<form id='from' action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="cst" />
</form>
<?php
}
function dateDebit(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="debit" />
</form>
<?php }
function dateImport(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="import" />
</form>



<?php
	}

function datewadaiwa(){
?>
	<form class="notprint" ="<?php echo $PHP_SELF;  ?>" method="post" >
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="wadaiwa" />
	<input name='id' type='hidden' value='<?PHP echo "$_POST[id]"; ?>'>
<input type="hidden" name="bnk" value="bnk" />
</form>
<?php }
function datewadai(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post" class="notprint">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="wadai" />
	<input name='id' type='hidden' value='<?PHP echo "$_POST[id]"; ?>'>
<input type="hidden" name="bnk" value="bnk" />
</form>
<?php }
	function addProduct(){
	?>
	
<center>
<ul type="none" id="display-inline-block-example"  >
<li style="min-width:350px;">

    <form action="" name="formAdd2" method="post">
<table style="color:#606; font-size:18px;">
<caption>Enter New product</caption>

<colgroup><col align="right"/><col /><col /></colgroup>
<tr><td>product name:</td><td><input type="text" name="name" value="" /></td></tr>

<tr><td>price:</td><td><input type="text" name="sell" value="" /></td></tr>
<tr><td>quantity:</td><td><input type="text" name="q" value="" /></td></tr>
<tr><td>unit: </td><td><input  type="tex" name="detail" value="" /></td></tr>
<tr><td>category:</td><td><input type="text" name="cat" value="" /></td></tr>
<input type="hidden" name="dir" value="asd" />
<tr><td></td><td><br /><input  type="submit" name="submit" value="save" /></td></tr>

</table>
</form>
</li>
</ul>
</center>
</form>
	<?php }

	?>
	<?php
	

	

 
function chekJs(){
 $sql=mysql_query("select * from data GROUP BY ct");

      while($row=mysql_fetch_array($sql)):
                $name=$row['nm'];
                 $qt=$row['qt'];
				 $id=$row['id'];
				 $cat=$row['ct'];
              if($cat !=""){
             echo "||document.form1.$cat.checked==true ";
			  }
     endwhile;
		
}
 
function chekJsproducts(){
	$sqls=mysql_query("select ct from data GROUP BY ct");
	
	while($row=mysql_fetch_array($sqls)):
  $cat=$row['ct'];
  $cat1=$_POST[$cat];
 if($cat1 !=""){
 $sql=mysql_query("select * from data where ct='$cat1'");

      while($row=mysql_fetch_array($sql)):
                $name=$row['nm'];
                 $qt=$row['qt'];
				 $id=$row['id'];
				
				 $idnm=$id."nm";
				 
			
				
              
             echo "||document.form1.$idnm.checked==true ";
			
			endwhile;
 }
     endwhile;
		
}
 
function chekForm(){
	$sql=mysql_query("select * from data GROUP BY ct;");

      while($row=mysql_fetch_array($sql)):
                $cat=$row['ct'];
                 $qt=$row['qt'];
				 $id=$row['id'];
                 if($cat !=""){
             echo "<li style='text-transform:uppercase; border:4px #ccc solid;  background:#A9F5EE; padding:2px;'>
			 <input type='checkbox' name='$cat' value='$cat' />
			 $cat</li> ";
				 }
			
     endwhile;
}
 
function chekFormAdd(){
	$sql=mysql_query("select * from data GROUP BY ct;");

      while($row=mysql_fetch_array($sql)):
                $cat=$row['ct'];
                 $qt=$row['qt'];
				 $id=$row['id'];
      if($cat !=""){
             echo "<li style='text-transform:uppercase; border:4px #ccc solid;  background:#ACF9A2; padding:2px;'>
			 <input type='checkbox' name='$cat' value='$cat' />
			 $cat</li> ";
			 	}
     endwhile;
}
function formInfo(){
   
		   }
		   function labInfo(){
		   
		  
		   
}

function lg(){
$sql=mysql_query("select nm data;");
      while($row=mysql_fetch_array($sql)):
                $pass=$row['nm'];
          echo $pass."";

            
     endwhile;	
	
	
	
	
	}

function menuTab(){?>	 

<div id="menu">
<form action="" method="post" id="menu" >
    <ul class="menu">
        <!--li><a href="#" class="parent" onclick="document.forms[0].submit();return false;"><span class='wks'>Sale</span></a-->
           
      
         <li ><a href="#" onclick="document.forms[6].submit();return false;"><span>customer name</span></a></li>
             <!--li><a href="#"  onclick="document.forms[1].submit();return false;"><span>Record</span></a></li-->
             <li ><a href='#' onclick="document.forms[5].submit();return false;"><span>Stock</span></a></li>
           <li><a href='#' onclick="document.forms[3].submit();return false;"><span>New product</span></a> </li>     
         <li><a href="#"  onclick="document.forms[4].submit();return false;" ><span>Add products</span></a></li>
            <li ><a href='#' onclick="document.forms[2].submit();return false;"><span >Change</span></a></li>
  <li ><a href='#' onclick="document.forms[12].submit();return false;"><span >dai_kret</span></a></li>
    <li ><a href='#' onclick="document.forms[13].submit();return false;"><span >daiwa_kret</span></a></li>
  <li ><a href='#' onclick="document.forms[9].submit();return false;"><span >Purchased products</span></a></li>
          <!--li ><a href='#' onclick="document.forms[7].submit();return false;"><span>SignIn/SignOut</span></a></li-->
     <li class='last'><a href='#'><span class='cont'>Contacts</span></a>
     <div><ul><li><a href='#' ><span>
      <table width="400px" style=" background-color:#FFF; border:#F00 thin solid; font-family:Arial, Helvetica, sans-serif;">
             <caption style="color:#009; font-size:18px;">information</caption>
              <tr><td>project:</td><td> Sale Management System</td></tr>
              <tr><td>started:</td><td> 13-11-2013</td></tr>
              <tr><td>designer:</td><td> Petro and Wilfred</td></tr>
             
              <tr><td>telephone:</td><td> +255 654610040, +255 756 566 955</td></tr>
              <tr><td>email:</td><td> wilfoctechcompany@gmail.com</td></tr>
              <tr><td>place:</td><td> Der Es Salaam Mbezi Beach</td></tr>
              </table>
     
     
     
     </span></a></li></ul></div></li>
        </ul></form>       
        </div>           
       
        
   
		
   

<?php }


$act='';
$copy="<font color='#fff'>designed by petro bilingi and Wilfred Cleophace +255 654610040, +255 756 566 955</font>";

?>