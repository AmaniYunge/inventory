 <?php

 $date=$_POST['bday'];
 $date1=$_POST['to'];

$datemysql=$date[6].$date[7].$date[8].$date[9]."-".$date[0].$date[1]."-".$date[3].$date[4];
$datemysqlto=$date1[6].$date1[7].$date1[8].$date1[9]."-".$date1[0].$date1[1]."-".$date1[3].$date1[4];
if($date){
 $dateCheck=$datemysql;
 if(!$date1){
	  $dateCheck1= $dateCheck;
	  $dt= "Date&nbsp;&nbsp;". $datemysql."<br />";
	 
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
		
	if($_POST['dtelpay']!='' && $_POST['payd']!=''){
			
		mysql_query("INSERT INTO `moshi_db`.`debit` (
`id` ,
`payment` ,
`detail` ,
`date` ,
`accname`
)
VALUES (
NULL , '$_POST[payd]', '$_POST[dtelpay]', CURDATE( ) , '$_POST[id]'
);");

  
$as=$_POST['depsamt'];	
	
;
$balance= $balance + $as; 
mysql_query("UPDATE `moshi_db`.`bank` SET `balance` = '$balance' WHERE `bank`.`bankname` ='$_POST[id]'  ORDER BY id DESC LIMIT 1 ;");
				
	}
		
		
		$querys1=mysql_query("SELECT *  FROM acc_name WHERE   id='$_POST[id]'  ");
							while($rowdata=mysql_fetch_array($querys1)):
							$namedata=$rowdata['name']; 
							$phonedata=$rowdata['detail']; 
						
						
		
	?>
 <button onclick="$('#dep').toggle();">PAYMENT<?php echo "$ba";?></button>
  <button onclick="printpage(1);">PRINT</button>
  <!--button onclick="$('#trans').toggle();">TRANSFER</button-->
    <table width="500px"><tr><td>
    <form action="" method="post">
<table id="dep" style="display:none;" width="200" border="0">
  <tr>
    <td colspan="2">payment</td>
  </tr>
  <tr>
    <td>Detail:</td>
    <td><input type="text" name="dtelpay" value=""/></td>
  </tr>
  <tr>
    <td>Amount:</td>
    <td><input type="text" name="payd" value=""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="enter"/></td>
  </tr>
</table>
<input type="hidden" name="dir" value="debit"  />
<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>"  />
<input type="hidden" name="bnk" value="bnk"  />

</form>	
</td>
<td>

</td>
</tr>
</table>
    
    
    <?php
dateDebitacc();
	echo "<br/>
	<div id='div1'>";
	require"contact.php";
echo "<h5>
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
		echo"<table id='tablequery' class='tabprint' style='width:100%; border:thin solid #ccc; border-collapse:collapse;'   >
  
   
   
     <tr bgcolor='#C9CED3'><td >DATE</td><td>DETAILS</td><td>PAYMENT</td>
  </tr>
  ";
  $paid="";
  $cost="";
  $unpaid="";
  $td_color="background-color:#FFF;"; 
  $query=mysql_query("select * from debit where accname='$_POST[id]' AND date BETWEEN '$dateCheck' AND '$dateCheck1' ;");
							while($rows=mysql_fetch_array($query)): 
							$date=$rows['date'];
							$detail=$rows['detail'];
							$payment=$rows['payment'];
							$cost1=$cost1+$payment;
    echo "<tr style='$td_color border-bottom:thin #ccc solid;' ><td>$date</td><td>$detail</td><td>".number_format($payment).
	"</td></tr>";
     
    endwhile;
  
  echo "<tr><td>&nbsp;</td><td>Total</td><td>".number_format($cost1)."</td></tr>
  <tr>
    
</table></div>";
									
									
	
									echo "<center><form action='' method='post' >
    <input type='hidden' name='dir' value='debit' />
  <input type='submit' name='cos' value='back' />
    </form></center>";
										
			
	
	
	
	
	
	
	
 }
 
 else if($_POST['group']!='') { 
 
							//$query=mysql_query("SELECT * FROM rdsell WHERE date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");
							$query=mysql_query("SELECT * FROM data where ct !=''  ");
						
							$no=1;?>

		<?PHP
		
		
		
		
	
	?>	
	<form action="<?php echo $PHP_SELF;  ?>" id="notprint" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
  <input type='hidden' name='group' value='<?php echo $_POST['group']; ?>' />
<input type="hidden" name="dir" value="debit" />
</form>
<?php
		 require"contact.php";
		
		echo $dt;
		
						echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>Account Name </th>
										 <th  align='right'>Payments</th>
										  <th  align='right'>Account Group</th>
										   
							         
							             <th></th>
							            
											 ";
								
						
							
							 $querys1=mysql_query("SELECT * FROM acc_name where detail='$_POST[group]'   ");
							while($rowdata=mysql_fetch_array($querys1)):
							$namedata=$rowdata['name'];
							$acc=$rowdata['detail'];
							$id=$rowdata['id'];
							 $balance="";$td_color="background-color:#FFF;";
							$querys=mysql_query("SELECT sum(payment) as payment from `moshi_db`.`debit` WHERE   accname='$id'  AND date BETWEEN '$dateCheck' AND '$dateCheck1' GROUP BY accname  ");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['detail'];
							
							
							$balance=$rows['payment'];
							 
						
							
						
						
									$no=$no+1;
									
						
					       
							 $cost=$cost+$balance;
							endwhile;
							
											  echo "<tr style='$td_color border-bottom:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$namedata</td>
											  <td align='right'>" .number_format($balance) ."</td> <td align='right'>". $acc. "</td>
											 
											  <td align='right'>
											  <form name='cstm' action='' method='post'>
											  <button type='submit' name='bnk' value='$id'>view</button>
											   <input type='hidden' name='dir' value='debit' />
											  <input type='hidden' name='id' value='$id' />
											  </form></td></tr>";	
											 					
									

						
							endwhile;
						
						echo"<tr  align='right' height='28px' style='font-size:16px; font:bold; color:#006 ;' >
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
 else{
		 require"contact.php";			
		if($_POST['aname'] !='' && $_POST['dtel'] !=''){
		mysql_query("INSERT INTO `moshi_db`.`acc_name` (
`id` ,
`name` ,
`detail`
)
VALUES (
NULL , '$_POST[aname]', '$_POST[dtel]'
);");
}			?>	
      <button  id="notprint" onclick="$('#newbank').toggle();">CREATE ACCOUNT</button>

<form action="" id="notprint" method="post">

<table id="newbank" style="display:none;" width="400" border="0">
  <tr>
   
  </tr>
  <tr>
    <td>ACCOUNT NAME:</td>
    <td><input type="text" name="aname" value=""/></td>
  </tr>
  <tr>
    <td>ACCOUNT GROUP:</td>
    <td><input type="text" name="dtel" value=""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="newa" value="enter"/></td>
  </tr>
</table>
<input type="hidden" name="dir" value="debit" />
</form>
	<form action="<?php echo $PHP_SELF;  ?>" id="notprint" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
  <input type='hidden' name='group' value='' />
<input type="hidden" name="dir" value="debit" />
</form>
<?php
		echo $dt;
			
							echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>Account Group </th>
									
										  <th  align='right'>Total cost</th>
										   
							         
							             <th></th>
							            
											 ";
								
						
								 $querys4=mysql_query("SELECT detail
FROM `acc_name`
GROUP BY detail;");   	

                            while($rowdata4=mysql_fetch_array($querys4)):
							$group=$rowdata4['detail'];
							
							 $querys2=mysql_query("SELECT * FROM `acc_name` WHERE detail = '$group';");

							while($rowdata2=mysql_fetch_array($querys2)):
						$groupid=$rowdata2['id'];
							
							 $querys3=mysql_query("SELECT sum(payment) as payment FROM `debit` where accname=$groupid AND date BETWEEN '$dateCheck' AND '$dateCheck1' group by accname;");
							while($rowdata3=mysql_fetch_array($querys3)):
							$pay=$rowdata3['payment'];
							//$groupid=$rowdata3['id'];
							$payt=$payt+$pay;
							
							endwhile; 
							
							
							
							endwhile;
							
							
							$td_color="background-color:#FFF;";
							
						
						
									$no=$no+1;
									
						
					      
							
											  echo "<tr style='$td_color border-bottom:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$group</td>
											   <td align='right'>". number_format($payt). "</td>
											 
											  <td align='right'>
											  <form name='cstm' action='' method='post'>
											  <button type='submit' name='group' value='$group'>view</button>
											   <input type='hidden' name='dir' value='debit' />
											  <input type='hidden' name='id' value='$id' />
											  </form></td></tr>";	
									$acctotal=$acctotal+$payt;		 					
									$payt=0;

						
							endwhile;
							
							
							
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold; color:#006 ;' >
							                 <td id='cost_total'></td>
											 <td >Total</td>
											     <td id='cost_total'>" .number_format($acctotal) ."</td>
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