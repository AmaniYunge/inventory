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
$dt= "today&nbsp;&nbsp;".  date("Y-m-d")."<br />";
}
 
 if($_POST['bnk'] !=""){
	
  $query=mysql_query("select * from `moshi_db`.`wadaicret` where wadai_name='$_POST[id]' ORDER BY id DESC LIMIT 1;");
							while($rows=mysql_fetch_array($query)): 
							
							$balance=$rows['balance'];
   
    endwhile;
	 
	 
		
		if($_POST['transd']!='' && $_POST['transamt']!=''){
			
		mysql_query("INSERT INTO `moshi_db`.`wadaicret` (
`id` ,
`detail` ,
`pokea` ,
`lipa` ,
`balance` ,
`date` ,
`wadai_name`
)
VALUES (
NULL , '$_POST[transd]',NULL ,'$_POST[transamt]', NULL , CURDATE( ) , '$_POST[id]'
);
");

  
$as=$_POST['transamt'];	
	
//$balance=// $balance + $_POST['depst'] ;
$balance= $balance - $as; 
mysql_query("UPDATE `moshi_db`.`wadaicret` SET `balance` = '$balance' WHERE `wadaicret`.`wadai_name` ='$_POST[id]'  ORDER BY id DESC LIMIT 1 ;");
			

			}
		
	if($_POST['depst']!='' && $_POST['depsamt']!=''){
			
		mysql_query("INSERT INTO `moshi_db`.`wadaicret` (
`id` ,
`detail` ,
`pokea` ,
`lipa` ,
`balance` ,
`date` ,
`wadai_name`
)
VALUES (
NULL , '$_POST[depst]', '$_POST[depsamt]', NULL , NULL , CURDATE( ) , '$_POST[id]'
);
");

  
$as=$_POST['depsamt'];	
	
//$balance=// $balance + $_POST['depst'] ;
$balance= $balance + $as; 
mysql_query("UPDATE `moshi_db`.`wadaicret` SET `balance` = '$balance' WHERE `wadaicret`.`wadai_name` ='$_POST[id]'  ORDER BY id DESC LIMIT 1 ;");
				
	}
		
		
		$querys1=mysql_query("SELECT *  FROM wadaicret_name WHERE   id='$_POST[id]'  ");
							while($rowdata=mysql_fetch_array($querys1)):
							$namedata=$rowdata['name']; 
							$phonedata=$rowdata['detail']; 
						
					endwhile;	
		
	?>
 <button onclick="$('#dep').toggle();">RECIEVED </button> <button onclick="$('#trans').toggle();">RETURN</button>
        <button onclick="printpage(1);">PRINT</button>
   
    <div id="div1">
    <table width="500px"><tr><td>
    <form action="" method="post">


<table id="dep" style="display:none;" width="200" border="0">
  <tr>
    <td colspan="2">RECIEVED </td>
  </tr>
  <tr>
    <td>Detail:</td>
    <td><input type="text" name="depst" value=""/></td>
  </tr>
  <tr>
    <td>quanty:</td>
    <td><input type="text" name="depsamt" value=""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="enter"/></td>
  </tr>
</table>
<input type="hidden" name="dir" value="wadai"  />
<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>"  />
<input type="hidden" name="bnk" value="bnk"  />

</form>
</td>
<td>
<form action="" method="post">
     <table id="trans" style="display:none;" width="200" border="0">
  <tr>
    <td colspan="2">RETURN</td>
  </tr>
  <tr>
    <td>Detail:</td>
    <td><input type="text" name="transd" value=""/></td>
  </tr>
  <tr>
    <td>Quanty:</td>
    <td><input type="text" name="transamt" value=""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="transfer" value="enter"/></td>
  </tr>
</table>
<input type="hidden" name="dir" value="wadai"  />
<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>"  />
<input type="hidden" name="bnk" value="bnk"  />
</form>
</td>
</tr>

    
    
    <?php

	echo "<br/>
	
	<table>
	<h5 style='' >
Mrs. LIPINA MICHAEL MREMA<br/>
P.O.BOX 22312,<BR/>
Mob:0715446990/
     07677446990.<BR/>
	 SHEKILANGO/REM PLOT NO. 05<BR/>
DAR ES SALAAM.<BR/>
</h5>
	<table>
	<tr><td id='head'> Name:</td><td>$namedata</td></tr>
	<tr><td> Detail: </td><td>$phonedata<td/></tr>

	<table>
		
	"; 
	 ?>
  
    

     
     
    
	
	
<?PHP 	

		$no=1;
							
			datewadai();?>



<?PHP			
		echo "<br/>".$dt;
		echo"<table id='tablequery'  >
  
   
   
     <tr bgcolor='#C9CED3'><td >DATE</td><td>DETAIL</td><td>RECIEVED</td><td> RETURN</td><td>BALANCE</td>
  </tr>
  ";
  $paid="";
  $cost="";
  $unpaid="";
  $td_color="background-color:#FFF;"; 
  $query=mysql_query("select * from wadaicret where wadai_name='$_POST[id]' AND date BETWEEN '$dateCheck' AND '$dateCheck1' ;");
							while($rows=mysql_fetch_array($query)): 
							$date=$rows['date'];
							$detail=$rows['detail'];
							$deposit=$rows['pokea'];
							$transfer=$rows['lipa'];
							$balance=$rows['balance'];
    echo "<tr style='$td_color border-bottom:thin #ccc solid;' ><td>$date</td><td>$detail</td><td>".number_format($deposit).
	"</td><td>".number_format($transfer)."</td><td>".number_format($balance)."</td></tr>";
     
    endwhile;
  
  echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
  <tr>
    
</table>
</div>
";
									
									
	
									echo "<center><form action='' method='post' >
    <input type='hidden' name='dir' value='wadai' />
  <input type='submit' name='cos' value='back' />
    </form></center>";
										
			
	
	
	
	
	
	
	
 }
 
 else { 
 
							//$query=mysql_query("SELECT * FROM rdsell WHERE date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");
							$query=mysql_query("SELECT * FROM data where ct !=''  ");
						
							$no=1;?>
                            <button onclick="$('#newbank').toggle();">ADD NEW NAME</button>

<form action="" method="post">

<table id="newbank" style="display:none;" width="400" border="0">
  <tr>
   
  </tr>
  <tr>
    <td>ADD NAME:</td>
    <td><input type="text" name="bname" value=""/></td>
  </tr>
  <tr>
    <td>DETAIL:</td>
    <td><input type="text" name="acc" value=""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="newb" value="enter"/></td>
  </tr>
</table>
<input type="hidden" name="dir" value="wadai" />
</form>
		<?PHP	
		if($_POST['bname'] !='' && $_POST['acc'] !=''){
		mysql_query("INSERT INTO `moshi_db`.`wadaicret_name` (
`id` ,
`name` ,
`detail`
)
VALUES (
'', '$_POST[bname]', '$_POST[acc]'
);
");
//NULL , '', '');

		}
		
		
		
						echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>Name </th>
										 <th  align='right'>Recieved</th>
										  <th  align='right'>return</th>
										   
							         
							             <th></th>
							            
											 ";
								
						
							
							 $querys1=mysql_query("SELECT * FROM wadaicret_name   ");
							while($rowdata=mysql_fetch_array($querys1)):
							$namedata=$rowdata['name'];
							$acc=$rowdata['detail'];
							$id=$rowdata['id'];
						
							$querys=mysql_query("SELECT * from `moshi_db`.`wadaicret` WHERE   wadai_name='$id' ORDER BY id DESC LIMIT 1  ");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['detail'];
							$lipa=$rows['lipa'];
							$pokea=$rows['pokea'];
							$balance=$rows['balance'];
							 
						endwhile;
						 $cost=$cost+$balance;
							$td_color="background-color:#FFF;";
						
						
							
											  echo "<tr style='$td_color border-bottom:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$namedata</td>
											  <td align='right'>" .number_format($lipa) ."</td> <td align='right'>" .number_format($balance) ."</td>
											 
											  <td align='right'>
											  <form name='cstm' action='' method='post'>
											  <button type='submit' name='bnk' value='$id'>view</button>
											   <input type='hidden' name='dir' value='wadai' />
											  <input type='hidden' name='id' value='$id' />
											  </form></td></tr>";	
											 					
									

									$no=$no+1;
									
							 $balance="";
					       
							
							
							endwhile;
						
						
							
							
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold; color:#006 ;' >
							                 <td id='cost_total'></td>
											 <td >Total</td>
											     <td id='cost_total'></td>
										      <td id='cost_total'>" .number_format($cost) ."</td>
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