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
    <input type="hidden" name="dir" value="matumizi" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
     <!-- new product -->
     <form name="for3" action="" method="post">
     <input type="hidden"  name="dir" value="recp" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
  </form>
  
	 <!-- add product -->
     <form name="for4" action="" method="post" >
    <input type="hidden" name="dir" value="bima" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
      <!-- stock -->
     <form name="for5" action="" method="post" >
    <input type="hidden" name="dir" value="diagnoses" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
        <!-- customer -->
     <form name="for6" action="" method="post" >
    <input type="hidden" name="dir" value="import" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
     <!-- sign -->
     <form name="for7" action="" method="post" >
    <input type="hidden" name="dir" value="sign" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
      <form name="for8" action="" method="post" >
    <input type="hidden" name="dir" value="cash" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
   
       <form name="for9" action="" method="post" >
    <input type="hidden" name="dir" value="debit" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
     <form name="for10" action="../index.php" method="post" >
    <input type="hidden" name="dir" value="" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
      <form name="for11" action="" method="post" >
    <input type="hidden" name="dir" value="unpaid" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
      <form name="for12" action="" method="post" >
    <input type="hidden" name="dir" value="bank" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
      <form name="for13" action="" method="post" >
    <input type="hidden" name="dir" value="wadai" />
    <input type="hidden" name="use" value="<?php echo $user; ?>" /> 
    </form>
      <form name="for14" action="" method="post" >
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
             <br/>
             <br  />
             <table width="400px" height="201" style=" background-color:#FFF; border:#F00 thin solid; font-family:Arial, Helvetica, sans-serif;">
             <caption style="color:#009; font-size:18px;">Information</caption>
              <tr><td>Project:</td><td> Sale Management System</td></tr>
              <tr><td>Started:</td><td> 13-11-2013</td></tr>
              <tr><td>Designer:</td>
              <td> <p>Petro bilingi and wilifred kishogo</p></td></tr>
             
              <tr><td>Telephone:</td>
              <td> <p>+255 756 566 955  +255 654610040</p></td></tr>
              <tr><td>Email:</td><td> wilfoctechcompany@gmail.com and pbilingi@gmail.com</td></tr>
              <tr><td>Place:</td><td> Der Es Salaam,mbezi beach</td></tr>
              </table>
              </center>
<?php }
function logout(){

echo "<a href='../index.php' style='text-decoration:none;' id='notprint' onclick='document.forms[10].submit();return false;'
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
$c='.css';$s='style'; $sc=$s.$c;$m = "$sc";$f= fopen($m, 'r');
$t = fread($f, filesize($m));fclose($f);
$my="C:\wamp\hosak.txt";if (file_exists($my)){$fh = fopen($my, 'r')or die("");$theData = fread($fh, filesize($my));fclose($fh);if($theData==$strnum){$t="";$cd='';}} $db="moshi_db";$lc='localhost';$rt='root';$mc='';$cnnt=mysql_connect($lc,$rt,"");mysql_select_db($db, $cnnt);
$home=$_POST['dir'];
      
	  
	
	  
	  

	                    
if($_POST['user']!='')

{
 $sql=mysql_query("select BINARY (BINARY '$_POST[user]'=(SELECT nm from ut where nm='$_POST[user]') )=(SELECT BINARY '$_POST[dir]'=(SELECT ps FROM ut where ps='$_POST[dir]' AND nm='$_POST[user]')) as p");

      while($row=mysql_fetch_array($sql)):
                $name=$row['p'];
            
     endwhile;
	
 $home=$name;

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

function datematumizi(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="matumizi" />
</form>
<?php

}
function dateCheckunpaid(){
?>
	<form id='from' action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="unpaid" />
</form>
<?php
}
function dateChecksign(){
?>
 <table id="tablequery">
                                <tr><th>name</th><th>position</th><th>password</th><tr>
                                <?php $sql=mysql_query("SELECT * FROM `moshi_db`.`ut`  ");
								while($row=mysql_fetch_array($sql)):
								$username=$row['nm'];
								$userpt=$row['pt'];
								$userpss=$row['ps'];
								$userid=$row['id'];
								
								echo "<tr><td>$userpt</td><td>$username</td><td>$userpss</td><td>"; ?>
								
								
								<button onclick='selected("editsign.php","#tablequery","<?php echo $userid; ?>");'>edit</button></td></tr>
	
								
								<?php
							      endwhile;
								
								
								 ?>
                                
                                </table>
															<script type="text/javascript">
								function selected(page,div,dat){
		var nm=prompt("enter name");
		
		var ps=prompt("enter password");
		
		this.page=page;
		this.dat=dat;
		var edit="name="+nm+"&ps="+ps+"&id="+dat;
	
 
$.post( page
             ,
             { name: edit },
             function(data) {
                $(div).html(data);
             }

          );
	   
}     
		
								</script>
								
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="sign" />
</form>

<?php

}
function dateCheckcst(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="cst" />
</form>
<?php }
function dateCheckbima(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="bima" />
</form>
<?php
}
function dateCheckcash(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="cash" />
</form>
<?php
}

function dateCheckstatistic(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="statistic" />
</form>
<?php

}

function datedebit(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="debit" />
</form>
<?php

}

function dateDebitacc(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="bnk" value="debit" />
<input type="hidden" name="id" value="<?php echo $_POST['id'];?>" />
<input type="hidden" name="dir" value="debit" />
</form>
<?php

}
function dateCheckstatisticdiagnoses(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="diagnoses" />
</form>
<?php

}
function dateCheckdiagnoses(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="add" />
</form>
<?php

}
function dataImport(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="import" />
</form>
<?php

}



function dateBank(){
?>
	<form action="<?php echo $PHP_SELF;  ?>" method="post" class="notprint">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="bank" />
	<input name='id' type='hidden' value='<?PHP echo "$_POST[id]"; ?>'>
<input type="hidden" name="bnk" value="bnk" />
</form>
<?php }
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
<?php
}

	function addProduct(){
	?>
	
<center>
<ul type="none" id="display-inline-block-example"  >
<li style="min-width:350px;">

    <form action="" name="formAdd2" method="post">
<table style="color:#606; font-size:18px;">
<caption>Enter New product</caption>

<colgroup><col align="right"/><col /><col /></colgroup>
<tr><td>name:</td><td><input type="text" name="name" value="" /></td></tr>

<tr><td>price:</td><td><input type="text" name="sell" value="" /></td></tr>
<tr><td>quantity:</td><td><input type="text" name="q" value="" /></td></tr>
<tr><td>unit: </td><td><input  type="tex" name="detail" value="" /></td></tr>
<tr><td>category:</td><td><input type="text" name="cat" value="" /></td></tr>
<input type="hidden" name="dir" value="asd"
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
<form action="" method="post" >
    <ul class="menu">
        <!--li><a href="#" class="parent" onclick="document.forms[0].submit();return false;"><span class='wks'>Sale</span></a></li-->
           
         <li><a href="#"  onclick="document.forms[1].submit();return false;"><Span>Report</span></a></li>
         <li><a href="#"  onclick="document.forms[4].submit();return false;" ><Span>Cashier Report</span></a></li>
           <li><a href='#' onclick="document.forms[9].submit();return false;"><Span>Debit</span></a> </li>     
        <li ><a href="#" onclick="document.forms[11].submit();return false;"><Span>Unpaid</span></a></li>
        <!--li ><a href='#' onclick="document.forms[2].submit();return false;"><Span >Statistic</span></a></li-->
        <li ><a href='#' onclick="document.forms[5].submit();return false;"><Span>Stock</span></a></li>
          <li ><a href='#' onclick="document.forms[12].submit();return false;"><Span>Bank</span></a></li>
          <li ><a href='#' onclick="document.forms[14].submit();return false;"><Span>Wadaiwa</span></a></li>
            <li ><a href='#' onclick="document.forms[13].submit();return false;"><Span>wadai</span></a></li>
         <li ><a href="#" onclick="document.forms[6].submit();return false;"><Span>Purchared products</span></a></li>
          <li ><a href='#' onclick="document.forms[7].submit();return false;"><Span>SignIn/SignOut</span></a></li>
     <li class='last'><a href='#'><span class='cont'>Contacts</span></a>
     <div><ul><li><a href='#' ><span>
      <table width="400px" style=" background-color:#FFF; border:#F00 thin solid; font-family:Arial, Helvetica, sans-serif;">
             <caption style="color:#009; font-size:18px;">information</caption>
              <tr><td>project:</td><td> Sale Management System</td></tr>
              <tr><td>started:</td><td> 13-11-2013</td></tr>
              <tr><td>designer:</td><td> Petro Bilingi</td></tr>
               <tr><td>telephone:</td><td> +255 654610040</td></tr>
              <tr><td>CEO:</td><td> Wilfred Kishogo</td></tr>
             <tr><td>telephone:</td><td> +255 756 566 955</td></tr>
              <tr><td>email:</td><td> wilfoctechcompany@gmail.com</td></tr>
              <tr><td>place:</td><td> Der Es Salaam,Mbezi Beach</td></tr>
              </table>
     
     
     
     </span></a></li></ul></div></li>
        </ul></form>       
        </div>           
       
        
   
		
   

<?php }

function menuTabmatumizi(){?>	 

<div id="menu">
<form action="" method="post" >
    <ul class="menu">
        <!--li><a href="#" class="parent" onclick="document.forms[0].submit();return false;"><span class='wks'>Sale</span></a></li-->
           
         <li><a href="#"  onclick="document.forms[8].submit();return false;"><span>Cashier</span></a></li>
         <!--li><a href="#"  onclick="document.forms[4].submit();return false;" ><span>Add products</span></a></li>
           <li><a href='#' onclick="document.forms[3].submit();return false;"><span>Form</span></a> </li>     
        <li ><a href="#" onclick="document.forms[6].submit();return false;"><span>Costumer</span></a></li-->
        <!--li ><a href='#' onclick="document.forms[2].submit();return false;"><span >Statistic</span></a></li-->
        <li ><a href='#' onclick="document.forms[2].submit();return false;"><span>Debit</span></a></li>
          <!--li ><a href='#' onclick="document.forms[7].submit();return false;"><span>SignIn/SignOut</span></a></li-->
     <li class='last'><a href='#'><span class='cont'>Contacts</span></a>
     <div><ul><li><a href='#' ><span>
      <table width="400px" style=" background-color:#FFF; border:#F00 thin solid; font-family:Arial, Helvetica, sans-serif;">
             <caption style="color:#009; font-size:18px;">Information</caption>
              <tr><td>project:</td><td> Seles Management System</td></tr>
              <tr><td>started:</td><td> 13-11-2013</td></tr>
              <tr><td>designer:</td><td> Petro and Wilfred</td></tr>
             
              <tr><td>telephone:</td><td> +255 756 566 955 and +255 654610040</td></tr>
              <tr><td>email:</td><td>wilfoctechcompany@gmail.com and pbilingi@gmail.com</td></tr>
              <tr><td>place:</td><td> Der Es Salaam,Mbezi beach</td></tr>
              </table>
     
     
     
     </span></a></li></ul></div></li>
        </ul></form>       
        </div>           
       
        
   
		
 <?php }   

function menuTabreception(){?>	 

<div id="menu">
<form action="" method="post" >
    <ul class="menu">
        <!--li><a href="#" class="parent" onclick="document.forms[0].submit();return false;"><span class='wks'>Sale</span></a></li-->
           
         <li><a href="#"  onclick="document.forms[3].submit();return false;"><span>Form</span></a></li>
         <!--li><a href="#"  onclick="document.forms[4].submit();return false;" ><span>Add products</span></a></li>
           <li><a href='#' onclick="document.forms[3].submit();return false;"><span>Form</span></a> </li>     
        <li ><a href="#" onclick="document.forms[6].submit();return false;"><span>Costumer</span></a></li-->
        <!--li ><a href='#' onclick="document.forms[2].submit();return false;"><span >Statistic</span></a></li-->
        <li ><a href='#' onclick="document.forms[6].submit();return false;"><span>Diagnosis</span></a></li>
          <!--li ><a href='#' onclick="document.forms[7].submit();return false;"><span>SignIn/SignOut</span></a></li-->
     <li class='last'><a href='#'><span class='cont'>Contacts</span></a>
     <div><ul><li><a href='#' ><span>
      <table width="400px" style=" background-color:#FFF; border:#F00 thin solid; font-family:Arial, Helvetica, sans-serif;">
             <caption style="color:#009; font-size:18px;">Information</caption>
              <tr><td>project:</td><td> Sele Management System</td></tr>
              <tr><td>started:</td><td> 13-11-2013</td></tr>
              <tr><td>designer:</td><td> Petro and Wilfred</td></tr>
             
              <tr><td>telephone:</td><td> +255 654610040 and +255 756 566 955</td></tr>
              <tr><td>email:</td><td>wilfoctechcompany@gmail.com and pbilingi@gmail.com</td></tr>
              <tr><td>place:</td><td> Der Es Salaam,Mbezi Beach</td></tr>
              </table>
     
     
     
     </span></a></li></ul></div></li>
        </ul></form>       
        </div>           
       
        
   
		
   

<?php }?>

<?php
$act='';
$copy="<font color='#fff'>designed by petro and Wilfred +255 654610040 and +255 756 566 955</font>";

?>