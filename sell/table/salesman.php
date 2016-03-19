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
	?>
    
    
    
       	<form action="<?php echo $PHP_SELF;  ?>" method="post" id='notprint' >
Date:<input id="bday"  type="text" placeholder="date" name="bday" />
<!--to:<input id="to"  type="text" placeholder="date" name="to" /-->
<input type="submit" name="bnk" value="Enter" />
<input type="hidden" name="dir" value="salesman" />
<input type="hidden" name="id" value="<?php echo $_POST['id'];?>" />
</form>
<br />

    <div class="notprint">

<br/><br/>
 <button onclick="$('#dep').toggle();">ENTER RECORD<?php echo "$ba";?></button>
 <button onclick="$('#reload').toggle();">PRODUCT RELOADED<?php echo "$ba";?></button>
  <!--button onclick="$('#return').toggle();">CHANGE PRICE<?php echo "$ba";?></button-->
   <button onclick="$('#cust').toggle();">ADD CUSTOMER<?php echo "$ba";?></button>

 <button onclick="$('#trans').toggle();">ADD PRODUCT</button>
 <button onclick="printpage(1);">PRINT</button>
 
   <table width="500px"><tr><td>
       <form action="" method="post">
<table id="reload" class="notprint" style="display:none;" width="400" border="0">
  <tr>
    <td colspan="2">ENTER PRODUCT RELOADED</td>
  </tr>
  
<?php 
if($_POST['addpro'] !=''){
	mysql_query("INSERT INTO `moshi_db`.`product_sm` (
`id` ,
`name` ,
`cost`
)
VALUES (
NULL , '$_POST[product]', '$_POST[cost]'
);
");
	
	
	
	}

	


$sql=mysql_query("select * from `moshi_db`.`product_sm` 
");  
  
 while($row=mysql_fetch_array($sql)):
 $pro=$row['name'];
  $proid=$row['id'];
 $procost=$row['cost'];
 
 echo "<tr>
    <td> $pro @".number_format($procost).":</td>
    <td><input type='text' name='".$proid."nm' value=''/></td>
  </tr>
  <tr>";

 
 endwhile; 
 
 
  
 echo "<tr>
    <td></td>
    <td></td>
  </tr>
  <tr>
 

  <tr>";
   echo "<tr>
    <td>&nbsp;</td>
    <td><input type='hidden' name='id' value='$_POST[id]'/></td>
  </tr>
  <tr>";
 ?>
  


<?php 


$salesman=$_POST['id'];
$custm=$_POST['custm'];




 if($_POST['submitload'] !=''){
$sqlw=mysql_query("select * from `moshi_db`.`product_sm` 
");  
  
 while($row=mysql_fetch_array($sqlw)):
 $pro=$row['name'];
  $proid=$row['id'];
 $procost=$row['cost'];
 $nm=$proid."nm";
 $produ=$_POST[$nm];
 
 
if($produ>0){	 
$cost=$procost* $produ;
mysql_query("INSERT INTO  `moshi_db`.`record_sm` (
`id` ,
`idsalesman` ,
`idcustomer` ,
`idproduct` ,
`qt` ,
`cost` ,
`date` ,
`paid` ,
`reloaded`
)
VALUES (
NULL ,  '$_POST[id]', NULL ,  '$proid', NULL ,  '$cost', CURDATE( ) , NULL ,  '$produ'
);");
}
endwhile; 
 }
 


/* INSERT INTO `moshi_db`.`customer_sm` (
`id` ,
`name` ,
`cost` ,
`paid` ,
`date`
)
VALUES (
NULL , 'tesha', '400000', '20000', CURDATE( )
);
 */

?>



  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submitload" value="enter"/></td>
  </tr>
</table>
<input type="hidden" name="dir" value="salesman"  />
<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>"  />
<input type="hidden" name="bnk" value="bnk"  />

</form></td><td>
    <form action="" method="post">
<table id="dep" class="notprint" style="display:none;" width="400" border="0">
  <tr>
    <td colspan="2">ENTER RECORD</td>
  </tr>
  
<?php 


if($_POST['addcust'] !=''){
	mysql_query("INSERT INTO `moshi_db`.`customer_sm` (
`id` ,
`name`
)
VALUES (
NULL , '$_POST[custname]'
);
");
	
	
	
	}	
	


$sql=mysql_query("select * from `moshi_db`.`product_sm` 
");  
  
 while($row=mysql_fetch_array($sql)):
 $pro=$row['name'];
  $proid=$row['id'];
 $procost=$row['cost'];
 
 echo "<tr>
    <td> $pro @".number_format($procost).":</td>
    <td><input type='text' name='".$proid."nm' value=''/></td>
  </tr>
  <tr>";

 
 endwhile; 
 
 
  
 echo "<tr>
    <td></td>
    <td></td>
  </tr>
  <tr>";
 
 echo "<tr>
    <td>customer name</td>
	
    <td><select name='custm' >
	<option></option>";
	
	$sql6=mysql_query("SELECT *  FROM `moshi_db`.`customer_sm` ");
	
	      while($row6=mysql_fetch_array($sql6)):
	     $cust_=$row6['name'];
		 $cust_id=$row6['id'];
	echo"<option value='$cust_id'>$cust_</option>";
	   endwhile;
	
	echo"</select></td>
  </tr>
  <tr>";
   echo "<tr>
    <td>&nbsp;</td>
    <td><input type='hidden' name='id' value='$_POST[id]'/></td>
  </tr>
  <tr>";
 ?>
  


<?php 

	
$salesman=$_POST['id'];
$custm=$_POST['custm'];




$sqlw=mysql_query("select * from `moshi_db`.`product_sm` 
");  
  
 while($row=mysql_fetch_array($sqlw)):
 $pro=$row['name'];
  $proid=$row['id'];
 $procost=$row['cost'];
 $nm=$proid."nm";;
 $produ=$_POST[$nm];
 
 
 if($custm !=''){
if( $produ>0){	 
$cost=$procost* $produ;
 mysql_query("INSERT INTO `moshi_db`.`record_sm` (
`id` ,
`idsalesman` ,
`idcustomer` ,
`idproduct` ,
`qt` ,
`cost` ,
`date`,
`paid`

)
VALUES (
NULL , '$salesman', '$custm', ' $proid', '$produ', '$cost', CURDATE( ),''
);");

 }
 }
 endwhile; 


/* INSERT INTO `moshi_db`.`customer_sm` (
`id` ,
`name` ,
`cost` ,
`paid` ,
`date`
)
VALUES (
NULL , 'tesha', '400000', '20000', CURDATE( )
);
 */

?>



  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="enter"/></td>
  </tr>
</table>
<input type="hidden" name="dir" value="salesman"  />
<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>"  />
<input type="hidden" name="bnk" value="bnk"  />

</form>
</td>
<td>


<form action="" id="trans" class="notprint" style="display:none;" method="post">
     <table  width="400" border="0">
  <tr>
    <td colspan="2">NEW PRODUCT</td>
  </tr>
  <tr>
    <td>NAME:</td>
    <td><input type="text" name="product" value=""/></td>
  </tr>
  <tr>
    <td>COST:</td>
    <td><input type="text" name="cost" value=""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="addpro" value="enter"/></td>
  </tr>
</table>

<input type="hidden" name="dir" value="salesman"  />
<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>"  />
<input type="hidden" name="bnk" value="bnk"  />
<br />

</form>
</td>
<td>


<form action="" id="cust" class="notprint" style="display:none;" method="post">
     <table  width="400" border="0">
  <tr>
    <td colspan="2">NEW CUSTOMER</td>
  </tr>
  <tr>
    <td>NAME:</td>
    <td><input type="text" name="custname" value=""/></td>
  </tr>
 
    <td>&nbsp;</td>
    <td><input type="submit" name="addcust" value="enter"/></td>
  </tr>
</table>

<input type="hidden" name="dir" value="salesman"  />
<input type="hidden" name="id" value="<?php echo $_POST['id'] ?>"  />
<input type="hidden" name="bnk" value="bnk"  />
<br />

</form>


</td>
</tr>
</table>

 </div>
<?php
	
	
	
$td_color='background:#fff;';
		
		
		$querys1=mysql_query("SELECT *  FROM salesman WHERE   id='$_POST[id]'  ");
							while($rowdata=mysql_fetch_array($querys1)):
							$namedata=$rowdata['salesman_name']; 
							$phonedata=$rowdata['phone'];
							$d=$rowdata['driver']; 
							$vihecle=$rowdata['vehicle_no'];
						
						endwhile;
		
	?>
<style type="text/css">
@media print
{
#notprint {display:none;}
.notprint {display:none;}
.print{display:block;
border:thin solid #ccc;

}
.print td {border:thin solid #ccc;}
}

#tablequery2 {
	border-collapse:collapse;
	width:100%;
	font-family:Verdana, Geneva, sans-serif;
	color:#333;
	font-size:12px;
	
	 
}

#tablequery2  td {
	border:thin solid #ccc;
	border-collapse:collapse;
	padding:5px;

}
</style>
  <div id="div1"> 


<?PHP	require("contact.php");
		echo "SALESMAN NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$namedata<BR/>
	PHONE N0__:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$phonedata<BR/>
	DRIVER NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$d<BR/>
	VIHECLE NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$vihecle<BR/>
<br/>".$dt;
		$css="style='background:#fff; border:thin #ccc solid; border-collapse:collapse;'";
		echo"<table wdth='100%' id='tablequery2' $css>
 ";
					
					
			echo "<tr  style='background:#fff; border:thin #ccc solid;'>
			<td $css>pro_name</td>";		
			$i=1;
	       $sqlp=mysql_query("SELECT *  FROM `moshi_db`.`product_sm` ");
	
	      while($rowdatas=mysql_fetch_array($sqlp)):
	     $pro_name=$rowdatas['name'];
		  $id_name=$rowdatas['id'];
	
	    echo"<td $css>$pro_name</td>";
		   $counter[$i]=$id_name;
		   
			$i++;		
	     endwhile;
		echo"<td $css>amount</td><td $css >paid</td><td $css>unpaid</td>";echo"</tr>";
			
		
					
			
			 $sqlpp=mysql_query("SELECT idcustomer as cstm  FROM `moshi_db`.`record_sm` where idsalesman='$_POST[id]' and date='$dateCheck' and idcustomer!='' group by idcustomer ");
	
	      while($rowdatasp=mysql_fetch_array($sqlpp)):
	     $cstm=$rowdatasp['cstm'];
			
			
			 $sqlp1=mysql_query("SELECT *  FROM `moshi_db`.`customer_sm` where id='$cstm' ");
	
	      while($rowdatas1=mysql_fetch_array($sqlp1)):
	     $cust_name=$rowdatas1['name'];
		 $cust_nameid=$rowdatas1['id'];
			echo "<tr  style='background:#fff; border:thin #ccc solid;'>
			<td $css>$cust_name</td>";		
			
	      for($j=1; $j<$i; $j++){
			  
		$sqlp3=mysql_query("SELECT sum(qt) as qut,sum(cost) as ct,sum(paid) as py,date
FROM `record_sm`
WHERE idsalesman ='$_POST[id]' AND  date='$dateCheck'  
AND idcustomer ='$cust_nameid' AND idproduct='$counter[$j]' group by idproduct
 ");
				 while($rowdatas3=mysql_fetch_array($sqlp3)):
				
	     $pro_qt=$rowdatas3['qut'];
		 $ct1=$rowdatas3['ct'];
		 
		  $day=$rowdatas3['date'];
		  $pro_t[$j]=$pro_t[$j]+$pro_qt;
	    $ct_t=$ct_t+$ct1;
	
	   endwhile;
	   if($pro_qt<1){
	   		$pro_qt='-';	  
	   }
	    echo"<td $css>$pro_qt </td>";
	
		$pro_qt='';
	   
		  }
		 endwhile;
		 $sqlp3_=mysql_query("
		SELECT SUM( paid )  as py
FROM  `record_sm` 
WHERE idsalesman ='$_POST[id]'
AND idcustomer ='$cust_nameid'
AND date='$dateCheck'
GROUP BY idcustomer
		
 ");
				 while($rowdatas3_=mysql_fetch_array($sqlp3_)):
		
		  $py=$rowdatas3_['py'];
		 
	    
		$pay_t=$pay_t+$py;
	   endwhile;
	  $unpd=$ct_t-$pay_t;
		    echo"<td $css align='right'>".number_format($ct_t)."</td>
			<td $css "; ?> onclick=" var a=prompt('<?php echo  "pay amount"; ?>'); 
                           PostDatareturn('return.php','tablequery2','<?php echo "$day#$_POST[id]#$cust_nameid#";?>'+a);"
                           
<?php echo " align='right'>".number_format($pay_t)."</td><td $css align='right'>".number_format($unpd)."</td></tr>";
            $ct_tsum=$ct_tsum+$ct_t;
			$unpdsum=$unpdsum+$unpd;
			$pysum=$pysum+$pay_t;
			$ct_t=0;
			$pay_t=0;
			$unpd=0;
			
		 endwhile;
		 
		 
		 		
			echo "<tr  style='background:#fff; border:thin #ccc solid;'><td $css>return</td>";		
		
	     
		  for($k=1; $k<$i; $k++){
			  
		$sqlp9=mysql_query("SELECT SUM( reloaded ) AS reloaded
FROM  `record_sm` 
WHERE  idsalesman ='$_POST[id]'
AND date='$dateCheck' AND idproduct='$counter[$k]'
GROUP BY idproduct
");
				 while($rowdatas9=mysql_fetch_array($sqlp9)):
				
	     $pro_reloaded=$rowdatas9['reloaded'];
		
		 
		 
		  $pro_tr[$k]=$pro_reloaded;
	    
	
	   endwhile;
	   			  $pro_reloaded=$pro_reloaded -$pro_t[$k];
		
	    echo"<td $css>$pro_reloaded</td>";
	
		$pro_reloaded='';
	   
		  }
		
		echo"<td $css></td><td $css></td><td $css></td>";echo"</tr>";
					
			echo "<tr  style='background:#fff; border:thin #ccc solid;'><td $css>total sold</td>";		
			$i=1;
	       $sqlp=mysql_query("SELECT *  FROM `moshi_db`.`product_sm` ");
	
	      while($rowdatas=mysql_fetch_array($sqlp)):
	     $pro_name=$rowdatas['name'];
		  $id_name=$rowdatas['id'];
	
	    echo"<td $css>$pro_t[$i]</td>";
		   $counter[$i]=$id_name;
			$i++;		
	     endwhile;
		echo"<td $css align='right'>".number_format($ct_tsum)."</td><td $css align='right'>".number_format($pysum)."</td><td $css align='right'>".number_format($unpdsum)."</td>";echo"</tr>";
			
			
			echo "<tr  style='background:#fff; border:thin #ccc solid;'><td $css>total reloaded</td>";		
		for($l=1; $l<$i;$l++){
	    echo"<td $css>$pro_tr[$l]</td>";
		   
				
		}
		echo"<td $css align='right'>".number_format($ct_tsum)."</td><td $css align='right'></td><td $css align='right'></td>";echo"</tr>";
	 echo"</table></div>";
					
	    			
	
    
					
					
					
					
					
									echo "<center><form action='' class='notprint' method='post' >
    <input type='hidden' name='dir' value='salesman' />
  <input type='submit' name='cos' value='back' />
    </form></center>";
										
			
	
	
	
	
	
	
	
 }
 
 else { 
require("contact.php");

?>
	<form action="<?php echo $PHP_SELF;  ?>" id="notprint" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="Enter" />
<input type="hidden" name="dir" value="salesman" />
</form>
<?php
							//$query=mysql_query("SELECT * FROM rdsell WHERE date BETWEEN '$dateCheck' AND '$dateCheck1'  ORDER BY id DESC");
							$query=mysql_query("SELECT * FROM data where ct !=''  ");
						
							$no=1;?>
                            <button class="notprint" onclick="$('#newbank').toggle();">NEW SALESMAN</button>

<form action="" method="post">

<table id="newbank" class="notprint" style="display:none;" width="400" border="0">
  <tr>
   
  </tr>
   <tr>
    <td>SALESMAN NAME:</td>
    <td><input type="text" name="name" value=""/></td>
  </tr>
  <tr>
    <td>DRIVER NAME:</td>
    <td><input type="text" name="dname" value=""/></td>
  </tr>
  <tr>
    <td>VEHICLE _NO:</td>
    <td><input type="text" name="vehicle" value=""/></td>
  </tr>
    <tr>
    <td>PHONE _NO:</td>
    <td><input type="text" name="phone" value=""/></td>
  </tr>
 

    <td>&nbsp;</td>
    <td><input type="submit" name="newb" value="enter"/></td>
  </tr>
</table>
<input type="hidden" name="dir" value="salesman" />
</form>
		<?PHP	
		if($_POST['name'] !=''){
		mysql_query("INSERT INTO `moshi_db`.`salesman` (
`id` ,
`salesman_name` ,
`vehicle_no` ,
`driver` ,
`phone`
)
VALUES (
NULL , '$_POST[name]', '$_POST[vehicle]', '$_POST[dname]', '$_POST[phone]'
);
");
		}
		
		echo $dt;
		
						echo"<table id='tablequery' width='100%'>
								         <th>No.</th>
							            <th align='left'>SALESMAN  NAME </th>
										 <th  align='right'>SALES-IDADI</th>
										  <th  align='right'>SALELS-SHILINGS</th>
										  <!--th  align='right'>BASIC STOP SHOP </th>
										  <th  align='right'>T455BVV EXPENSES</th-->
										  <th  align='right'>400 PROFIT MARGIN</th>
										  <th  align='right'>PHONE</th>
										   
							          
							             <th></th>
							            
											 ";
								
						
							
							 $querys1=mysql_query("SELECT * FROM salesman  ");
							while($rowdata=mysql_fetch_array($querys1)):
							$namedata=$rowdata['salesman_name'];
							$acc=$rowdata['phone'];
							$id=$rowdata['id'];
							 $cost="";
							$querys=mysql_query("SELECT sum(cost) as ct,sum(qt) as q from `moshi_db`.`record_sm` WHERE   idsalesman='$id' AND date BETWEEN '$dateCheck' AND '$dateCheck1'  group by idsalesman  ");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['q'];
							
							
							$cost=$rows['ct'];
							$cost400=$qt*400;
							 
						endwhile;
						$qt_t=$qt_t+$qt;
						 $cost_t400=$cost_t400+$cost400;
						  $cost_t=$cost_t+$cost;
							$td_color="background-color:#FFF;";
						
						
							
											  echo "<tr style='$td_color border:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$namedata</td>
											  <td align='right'>" .number_format($qt)."</td> 
											  <td align='right'>". number_format($cost). "</td>
											 <td align='right'>" .number_format($cost400) ."</td>
											
											 <td align='right'>". $acc. "</td>
											  <td align='right'>
											  <form name='cstm' action='' method='post' class='notprint'>
											  <button type='submit' name='bnk' value='$id'>view</button>
											   <input type='hidden' name='dir' value='salesman' />
											  <input type='hidden' name='id' value='$id' />
											  </form></td></tr>";	
											 					
									

									$no=$no+1;
									$qt='';
						              
					                   $cost='';
									   $cost400='';
							
							
							endwhile;
						
						
							
							
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold; color:#006 ;border:thin solid #ccc;' >
							                 <td id='cost_total'></td>
											 <td id='cost_total'></td>
											 <td id='cost_total'>" .number_format($qt_t) ."</td>
											 <td id='cost_total'>" .number_format($cost_t) ."</td>
											 <td id='cost_total'>" .number_format($cost_t400) ."</td>
											 <td id='cost_total'></td>
											<td id='cost_total'></td>
										  
											";
											// <td id='cost_total'>".number_format($change_total)
											
							                 echo"
							                
									</tr>";
									echo"</table>";	
							
							
							
 }
							?>
                   
<script type='text/javascript'>
function printpage(a){





  var divToPrint=document.getElementById('div'+a);
   
  document.getElementById('div'+a).style.top='1px';

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