 <?php
 $date=$_POST['bday'];
 $date1=$_POST['to'];

$datemysql=$date[6].$date[7].$date[8].$date[9]."-".$date[0].$date[1]."-".$date[3].$date[4];
$datemysqlto=$date1[6].$date1[7].$date1[8].$date1[9]."-".$date1[0].$date1[1]."-".$date1[3].$date1[4];
if($date){
 $dateCheck=$datemysql;
 if(!$date1){
	  $dateCheck1= $dateCheck;
	  $dt= "date&nbsp;&nbsp;". $datemysql."<br />";
	 
	 }
	 else { 
	 $dateCheck1=$datemysqlto;
	$dt= "from&nbsp;&nbsp;". $datemysql."&nbsp;&nbspto&nbsp;&nbsp ".$datemysqlto."<br />";
	 }

 }
else { 
$dateCheck= date("Y-m-d"); $dateCheck1= date("Y-m-d");
$dt= "Date&nbsp;&nbsp;".  date("Y-m-d")."<br />";
}
 
 if($_POST['bnk'] !=""){
	
  $query=mysql_query("select * from `moshi_db`.`bank` where bankname='$_POST[id]' ORDER BY id DESC LIMIT 1;");
							while($rows=mysql_fetch_array($query)): 
							
							$balance=$rows['balance'];
   
    endwhile;
	 
	 if($_POST['payid'] !=""){
	$qlsmed=mysql_query("select others,medicine from `siimshealthcenter`.`data` WHERE id='$_POST[id]' LIMIT 1");
while($rowmed=mysql_fetch_array($qlsmed)):
$addmed=$rowmed['others'];
//$add=$rowmed['medicine'];
endwhile;


//cost pay remain id date 



$addtotal=$addmed + $_POST['pay'];
mysql_query("UPDATE `siimshealthcenter`.`data` SET others = '$addtotal' WHERE  id='$_POST[id]' LIMIT 1;");
		
		}
		
		if($_POST['transd']!='' && $_POST['transamt']!=''){
			
		mysql_query("INSERT INTO `moshi_db`.`bank` (
`id` ,
`detail` ,
`deposit` ,
`transfer` ,
`balance` ,
`date` ,
`bankname`
)
VALUES (
NULL , '$_POST[transd]',NULL ,'$_POST[transamt]', NULL , CURDATE( ) , '$_POST[id]'
);
");

  
$as=$_POST['transamt'];	
	
//$balance=// $balance + $_POST['depst'] ;
$balance= $balance - $as; 
mysql_query("UPDATE `moshi_db`.`bank` SET `balance` = '$balance' WHERE `bank`.`bankname` ='$_POST[id]'  ORDER BY id DESC LIMIT 1 ;");
			

			}
		
	if($_POST['depst']!='' && $_POST['depsamt']!=''){
			
		mysql_query("INSERT INTO `moshi_db`.`bank` (
`id` ,
`detail` ,
`deposit` ,
`transfer` ,
`balance` ,
`date` ,
`bankname`
)
VALUES (
NULL , '$_POST[depst]', '$_POST[depsamt]', NULL , NULL , CURDATE( ) , '$_POST[id]'
);
");

  
$as=$_POST['depsamt'];	
	
//$balance=// $balance + $_POST['depst'] ;
$balance= $balance + $as; 
mysql_query("UPDATE `moshi_db`.`bank` SET `balance` = '$balance' WHERE `bank`.`bankname` ='$_POST[id]'  ORDER BY id DESC LIMIT 1 ;");
				
	}
		
		
		$querys1=mysql_query("SELECT *  FROM bank_name WHERE   id='$_POST[id]'  ");
							while($rowdata=mysql_fetch_array($querys1)):
							$namedata=$rowdata['name']; 
							$phonedata=$rowdata['acc_no']; 
						
						
		
	?>
    <div class="notprint">
 <button onclick="$('#dep').toggle();">DEPOSIT<?php echo "$ba";?></button> 
 <button onclick="$('#trans').toggle();">TRANSFER</button>
 <button onclick="printpage(1);">PRINT</button>
  <?php echo dateBank();?>
 </div>
  <div id="div1"> 
    <table width="500px"><tr><td>
    <form action="" method="post">
<table id="dep" class="notprint" style="display:none;" width="200" border="0">
  <tr>
    <td colspan="2">DEPOSIT</td>
  </tr>
  <tr>
    <td>Detail:</td>
    <td><input type="text" name="depst" value=""/></td>
  </tr>
  <tr>
    <td>Amount:</td>
    <td><input type="text" name="depsamt" value=""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="enter"/></td>
  </tr>
</table>
<input type="hidden" name="dir" value="bank"  />
<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>"  />
<input type="hidden" name="bnk" value="bnk"  />

</form>
</td>
<td>
<form action="" id="trans" class="notprint" style="display:none;" method="post">
     <table  width="200" border="0">
  <tr>
    <td colspan="2">TRANSFER</td>
  </tr>
  <tr>
    <td>Detail:</td>
    <td><input type="text" name="transd" value=""/></td>
  </tr>
  <tr>
    <td>Amount:</td>
    <td><input type="text" name="transamt" value=""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="transfer" value="enter"/></td>
  </tr>
</table>

<input type="hidden" name="dir" value="bank"  />
<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>"  />
<input type="hidden" name="bnk" value="bnk"  />
<br />

</form>
</td>
</tr>

  
    </table>
    <?php

	echo "<br/>
	
	<table width='100%'>
<br/>
	<h5 style='' >
Mrs. LIPINA MICHAEL MREMA<br/>
P.O.BOX 22312,<BR/>
Mob:0715446990/
     07677446990.<BR/>
	 SHEKILANGO/REM PLOT NO. 05<BR/>
DAR ES SALAAM.<BR/><BR/>
 Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$namedata<BR/>
	 Detail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$phonedata<BR/>


</h5>";
 
 	endwhile;
	 ?>
  
    

     
     
    
	
	
<?PHP 	if($_POST['pay'] !=""){
		$cash1=$_POST['remain'];
		
		mysql_query("INSERT INTO `moshi_db`.`rdby` (
`id` ,
`pid` ,
`cost` ,
`date` ,
`paid` ,
`unpaid`
)
VALUES (
NULL , '$id', '$cash1', CURDATE( ) , '$_POST[pay]', '$remain'
);");


$do="";
	}

		$no=1;
						
			?>

<style>
.tabprint td { border:thin solid #ccc;}
</style>
<?PHP			
		echo "<br/>".$dt;
		echo"<table id='tablequery' class='tabprint' style='width:100%; border:thin solid #ccc; border-collapse:collapse;'  >
  
   
   
     <tr bgcolor='#C9CED3' style='border:thin solid #ccc;'><td >DATE</td><td>DETAILS</td><td>DEPOSIT</td><td> TRANSFER</td><td>BALANCE</td>
  </tr>
  ";
  $paid="";
  $cost="";
  $unpaid="";
  $td_color="background-color:#FFF;"; 
  $query=mysql_query("select * from bank where bankname='$_POST[id]' AND date BETWEEN '$dateCheck' AND '$dateCheck1' ;");
							while($rows=mysql_fetch_array($query)): 
							$date=$rows['date'];
							$detail=$rows['detail'];
							$deposit=$rows['deposit'];
							$transfer=$rows['transfer'];
							$balance=$rows['balance'];
    echo "<tr style='$td_color border:thin #ccc solid;' ><td>$date</td><td>$detail</td><td>".number_format($deposit).
	"</td><td>".number_format($transfer)."</td><td>".number_format($balance)."</td></tr>";
     
    endwhile;
  
  echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
  <tr>
    
</table></div>";
									
									echo "<center><form action='' class='notprint' method='post' >
    <input type='hidden' name='dir' value='bank' />
  <input type='submit' name='cos' value='back' />
    </form></center>";
										
			
	
	
	
	
	
	
	
 }
 
 else { 
 require("contact.php");

							//$query=mysql_query("SELECT * FROM rdsell WHERE date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");
							$query=mysql_query("SELECT * FROM data where ct !=''  ");
						
							$no=1;?>
                            <button class="notprint" onclick="$('#newbank').toggle();">NEW BANK</button>

<form action="" id="notprint" method="post">

<table id="newbank" class="notprint" style="display:none;" width="200" border="0">
  <tr>
   
  </tr>
  <tr>
    <td>BANK NAME:</td>
    <td><input type="text" name="bname" value=""/></td>
  </tr>
  <tr>
    <td>ACCOUNT_No:</td>
    <td><input type="text" name="acc" value=""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="newb" value="enter"/></td>
  </tr>
</table>
<input type="hidden" name="dir" value="bank" />
</form>
		<?PHP	
		if($_POST['bname'] !='' && $_POST['acc'] !=''){
		mysql_query("INSERT INTO `moshi_db`.`bank_name` (
`id` ,
`name` ,
`acc_no`
)
VALUES (
NULL , '$_POST[bname]', '$_POST[acc]'
);");
		}
		
		
		
						echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>Bank Name </th>
										 <th  align='right'>Balance</th>
										  <th  align='right'>Acc_No</th>
										   
							         
							             <th></th>
							            
											 ";
								
						
							
							 $querys1=mysql_query("SELECT * FROM bank_name   ");
							while($rowdata=mysql_fetch_array($querys1)):
							$namedata=$rowdata['name'];
							$acc=$rowdata['acc_no'];
							$id=$rowdata['id'];
							 $balance="";
							$querys=mysql_query("SELECT * from `moshi_db`.`bank` WHERE   bankname='$id'  ");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['detail'];
							
							
							$balance=$rows['balance'];
							 
						endwhile;
						 $cost=$cost+$balance;
							$td_color="background-color:#FFF;";
						
						
							
											  echo "<tr style='$td_color border:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$namedata</td>
											  <td align='right'>" .number_format($balance) ."</td> <td align='right'>". $acc. "</td>
											 
											  <td align='right'>
											  <form name='cstm' action='' method='post' class='notprint'>
											  <button type='submit' name='bnk' value='$id'>view</button>
											   <input type='hidden' name='dir' value='bank' />
											  <input type='hidden' name='id' value='$id' />
											  </form></td></tr>";	
											 					
									

									$no=$no+1;
									
						
					       
							
							
							endwhile;
						
						
							
							
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold; color:#006 ;border:thin solid #ccc;' >
							                 <td id='cost_total'></td>
											 <td >Total</td>
											     <td id='cost_total'>" .number_format($cost) ."</td>
										      <td id='cost_total'></td>
											  <td id='cost_total'></td>";
											// <td id='cost_total'>".number_format($change_total)
											
							                 echo"
							                
									</tr>";
									echo"</table>";	
							
							
							
 }
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