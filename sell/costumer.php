 <?php 
 
 require("connect.php");
 $data=$_REQUEST['id'];
$data1=$data;
//echo"<h1>$data1</h1>";
$data=explode("@",$data);

$cst=$data[0];
$qtidvalue=$data[1];
$returnvalue=$data[2];
	  $qe=mysql_query("SELECT * from `moshi_db`.`rdsell` where id='$qtidvalue' ;");
	  while($rowret=mysql_fetch_array($qe)):
	  $returnid=$rowret['id'];
	  $returnqt=$rowret['qt'];
	  $returncst=$rowret['cst'];
	  $returncustm=$rowret['custm'];
	  $returnpid=$rowret['pid'];
	  $qes=mysql_query("SELECT * from `siimshealthcenter`.`data` where id='$returncustm' ;");
	  while($rowrets=mysql_fetch_array($qes)):
	  $med=$rowrets['medicine'];
	   $other=$rowrets['others'];
	  endwhile;
	   $qess=mysql_query("SELECT * from `moshi_db`.`data` where id='$returnpid' ;");
	  while($rowretss=mysql_fetch_array($qess)):
	  $addqt=$rowretss['qt'];
	  
	  endwhile;
	  
	  endwhile;
	  $upd=$returnqt-$returnvalue;
	  
	  if(0<=$upd){
	   $addqt=$addqt+$returnvalue;
       $cst1=($returncst/$returnqt);
	   $remacost=$upd*$cst1;
	   $retcost=$returnvalue*$cst1;
	   $med=$med-$retcost;
	   $other=$other-$retcost;
	  
	   $sq = 'UPDATE `moshi_db`.`data` SET `qt` = '.$addqt.' WHERE `data`.`id` ='.$returnpid .' LIMIT 1;'; 
	  $sql = 'UPDATE `moshi_db`.`rdsell` SET `qt` = '.$upd.' WHERE `rdsell`.`id` ='.$qtidvalue .' LIMIT 1;'; 
	  $sql2 = 'UPDATE `moshi_db`.`rdsell` SET `cst` = '.$remacost.' WHERE `rdsell`.`id` ='.$qtidvalue .' LIMIT 1;'; 
	   if(0<=$med){
	  $sql3 = 'UPDATE `siimshealthcenter`.`data` SET `medicine` = '.$med.' WHERE `data`.`id` ='.$returncustm .' LIMIT 1;'; 
	    if(0<=$other){
		   $sql4 = 'UPDATE `siimshealthcenter`.`data` SET `others` = '.$other.' WHERE `data`.`id` ='.$returncustm .' LIMIT 1;';   
	   }
	   
	   }
	  mysql_query($sq);
	  mysql_query($sql);
	   mysql_query($sql2);
	    mysql_query($sql3);
		 mysql_query($sql4);
	
	  }
	  

	  
	  
	  
	 $querys1=mysql_query(" SELECT d.name,d.id, sum( d.medicine ) AS cash, sum( d.others ) AS paid, (
sum( d.medicine ) - sum( d.others )
) AS unpaid
FROM `siimshealthcenter`.`data` AS d
WHERE d.name = '$cst'
GROUP BY name ");
							while($rowdata=mysql_fetch_array($querys1)):
							$id_=$rowdata['id'];
							//$remain=$rowdata['unpaid'];
				endwhile;
						 if($_POST['payid'] !=""){
	$qlsmed=mysql_query("select others,medicine from `siimshealthcenter`.`data` WHERE id='$id_' LIMIT 1");
while($rowmed=mysql_fetch_array($qlsmed)):
$addmed=$rowmed['others'];

endwhile;


$addtotal=$addmed + $_POST['pay'];
mysql_query("UPDATE `siimshealthcenter`.`data` SET others = '$addtotal' WHERE  id='$id_' LIMIT 1;");
		
		}
		
			
	 
	 $querys1=mysql_query(" SELECT d.name,d.id,d.age, sum( d.medicine ) AS cash, sum( d.others ) AS paid, (
sum( d.medicine ) - sum( d.others )
) AS unpaid
FROM `siimshealthcenter`.`data` AS d
WHERE d.name = '$cst'
GROUP BY name ");
							while($rowdata=mysql_fetch_array($querys1)):
							$namedata=$rowdata['name']; 
							$phonedata=$rowdata['age']; 
							$paid=$rowdata['paid']; 
							$cash=$rowdata['cash']; 
						
							$id_=$rowdata['id'];
							$remain=$rowdata['unpaid'];
						 
						
		
		endwhile;
	if($_POST['pay'] !=""){
		$cash1=$_POST['remain'];
		$cashbalance=$_POST['remain']-$_POST['pay'];
		
		mysql_query("INSERT INTO `moshi_db`.`rdby` (
`id` ,
`pid` ,
`cost` ,
`date` ,
`paid` ,
`unpaid`
)
VALUES (
NULL , '$id_', '$cash1', CURDATE( ) , '$_POST[pay]', '$cashbalance'
);");


$do="";
	}	
	
	echo "<br/>
	<table>
	<tr><td id='head'>Name:</td><td>$namedata </td></tr>
	<tr><td> phone: </td><td>$phonedata <td/></tr>
	
	<!--tr><td> Paid:</td><td>".number_format( $paid)." <td /></tr-->
	<tr><td>";
	
	if($remain>0){
		echo "Unpaid :</td><td>".number_format($remain);
		
		}else{
	$remain2=$remain * -1;
	if($remain2>0){
		
		echo"Change :</td><td>".number_format($remain2);
		}
	 
	} 
		echo "</td></tr><table>
		<!--form id='head2' action='' method='post'>
	pay:<input id='head1' name='pay' type='text' value=''>
	<input name='payid' type='hidden' value='payyer'>
		<input name='unpaid' type='hidden' value='cst'>
		<input name='id' type='hidden' value='$id_'>
		<input name='remain' type='hidden' value='$remain' />
		<input name='cst' type='hidden' value='$cst'>
	
	 <input type='hidden' name='dir' value='unpaid' />
	<input name='send' type='submit' value='Enter'>
	</form>";
	
	
		echo " <table id='unpaid' style='color:#000; font-size:12px;'  >
  
   
   
     <tr bgcolor='#C9CED3'><td >date</td><td>Amount</td><td>paid</td><td> unpaid</td>
  </tr>
  ";
  $paid="";
  $cost="";
  $unpaid="";
  $querys0=mysql_query("SELECT  id
FROM `siimshealthcenter`.`data` 
WHERE name = '$cst' ORDER BY id DESC  ");
							while($rowdata=mysql_fetch_array($querys0)):
									$id=$rowdata['id'];
								 
					
  $query=mysql_query("select * from rdby where pid='$id';");
							while($rows=mysql_fetch_array($query)): 
							$paid=$rows['paid'];
							$unpaid=$rows['unpaid'];
							$cost=$rows['cost'];
							$date=$rows['date'];
    echo "<tr><td>$date</td><td>$cost</td><td>$paid</td><td>$unpaid</td></tr>";
     
    endwhile;
	endwhile;
  
  echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
  <tr>
    
</table-->"; 
	

	
	 
	 

	
		$querys0=mysql_query("SELECT  id,residence
FROM `siimshealthcenter`.`data` 
WHERE name = '$cst'   ORDER BY id DESC ");
							while($rowdata=mysql_fetch_array($querys0)):
									$recid=$rowdata['id'];
									 $rec_no=$rowdata['residence']; 
							
									
		

		$no=1;
							
							echo"<table id='tablequery' width='100%'>
							<caption style='color:#000; font-size:14px;'> rec_No: $rec_no</caption>
								         <th>No.</th>
							            <th align='left' width='300px'>product name $do</th>
										<th align='left'>unit</th>
							            <th>quantity</th>
							             <th>amount</th>
							            
											 ";
								
							
							
							$querys=mysql_query("select * from rdsell where custm='$recid';");
							while($rows=mysql_fetch_array($querys)): 
							$qt=$rows['qt'];
							$qtid=$rows['id'];
							$pid=$rows['pid'];
							$d=$rows['d'];
								//$per=$rows['per'];
							$cost=$rows['cst'];
							
							$pro=$pro*$qt;
							
							$name=strtolower($name);
							//total
							
						
							$pro_total=$pro_total+$pro;
							$cost_total=$cost_total+$cost;
							
								$td_color="background-color:#FFF;"; 
					
						
						
							$sell=number_format($sell);
							if( $sell==0){
							$sell='';
							}
							$cost=number_format($cost);
							if( $cost==0){
							$cost='';
							}
							$pro=number_format($pro);
							if( $pro==0){
							$pro='';
							}
							
							if($cost !=''){
									
						
								if($no %2)
							{
							$td_color="background-color:#fff;";
						  }
						  
							$query=mysql_query("select * from data where id='$pid';");
							while($rows=mysql_fetch_array($query)): 
							$name=$rows['nm'];
							$per=$rows['per'];
							echo"<tr style='$td_color border-bottom:thin #ccc solid;' >
							                  <td align='center'>$no</td>
							                  <td align='left'>$name</td>
							                 <td align='left'>$per</td>
							                  <td align='right'";
											  ?>
                                                 onmouseenter="this.style.Cursor='pointer';";
                                              onclick=" var a=prompt(<?php echo $qt; ?>); 
                                              PostDatareturn('costumer.php','sell','<?php echo "$cst@$qtid@";?>'+a);";
                                             
                                              <?php
											  echo "> $qt</td>	
											  <td align='right'>
											  " .$cost ."</td>	
											 					
									</tr>";	
									
									endwhile;
									$no=$no+1;
							}
					         $cost=0;
							
							endwhile;
							
						
							$pro_total=number_format($pro_total);
							if( $pro_total==0){
							$pro_total='';
							}
							$cost_total=number_format($cost_total);
							if($cost_total==0){
							$cost_total='';
							}
							
				
							echo"<tr  align='right' height='28px' style='font-size:16px; font:bold; color:#fff; background-color:#600' >
							                 <th id='cost_total'></th>
											
											 <th ></th>
										
										     <th id='cost_total'></th> 
											 <th >Total</th>
							                 <th id='cost_total'>".$cost_total."</td>
							                
									</tr>
									
							<tr><td colspan='5'>			
		
		
		
</td></tr>
									
									
									
									
									
									
									
									
									
									";
									echo"</table>";
									
									
									$cost_total=0;
									endwhile;
									
									
	
									echo "<center><form action='' method='post' >
    <input type='hidden' name='dir' value='cst' />
  <input type='submit' name='cos' value='back' />
    </form></center>";
										
			
	
	
	
	
	
	
	
 
 
?>
                         
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
	function PostData(page,div,data){
		alert("ok");
		
		}	
function PostDatareturn(page,div,data) {
	//document.getElementById(div).style.display='block';
//this.page= document.getElementById('buttonpage').value;
alert("ok");
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
