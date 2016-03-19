<?php

// connection to server
$connect=mysql_connect("localhost","root","");

// connection to database
mysql_db_query("moshi_db",$connect);

 $userid = trim($_POST["id"]);
//echo $userid;
 $idxp=explode("#",$userid);
 $dat=$idxp[0];
 $salesman=$idxp[1];
 $customer=$idxp[2];
 $costto=$idxp[3];
 if( $costto !=''){
 mysql_query("
 INSERT INTO  `moshi_db`.`record_sm` (
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
NULL ,  '$salesman',  '$customer', NULL , NULL , NULL , '$dat' ,  '$costto', NULL
);
 ");
 }
		echo "<br/>".$dt;
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
			
			
					
			
			 $sqlpp=mysql_query("SELECT idcustomer as cstm  FROM `moshi_db`.`record_sm` where idsalesman='$salesman' and date='$dat' and idcustomer!='' group by idcustomer ");
	
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
WHERE idsalesman ='$salesman' AND  date='$dat'  
AND idcustomer ='$cust_nameid' AND idproduct='$counter[$j]' group by idproduct
 ");
				 while($rowdatas3=mysql_fetch_array($sqlp3)):
				
	     $pro_qt=$rowdatas3['qut'];
		 $ct1=$rowdatas3['ct'];
		 
		  $day=$rowdatas3['date'];
		  $pro_t[$j]=$pro_t[$j]+$pro_qt;
	    $ct_t=$ct_t+$ct1;
	
	   endwhile;
	   			  
		
	    echo"<td $css>$pro_qt </td>";
	
		$pro_qt='';
	   
		  }
		 endwhile;
		 $sqlp3_=mysql_query("
		SELECT SUM( paid )  as py
FROM  `record_sm` 
WHERE idsalesman ='$salesman'
AND idcustomer ='$cust_nameid'
AND date='$dat'
GROUP BY idcustomer
		
 ");
				 while($rowdatas3_=mysql_fetch_array($sqlp3_)):
		
		  $py=$rowdatas3_['py'];
		 
	    
		$pay_t=$pay_t+$py;
	   endwhile;
	  $unpd=$ct_t-$pay_t;
		    echo"<td $css align='right'>".number_format($ct_t)."</td>
			<td $css "; ?> onclick=" var a=prompt('<?php echo  "pay amount"; ?>'); 
                           PostDatareturn('return.php','tablequery2','<?php echo "$day#$salesman#$cust_nameid#";?>'+a);"
                           
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
WHERE  idsalesman ='$salesman'
AND date='$dat' AND idproduct='$counter[$k]'
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