<?php

// connection to server
$connect=mysql_connect("localhost","root","");

// connection to database
mysql_db_query("moshi_db",$connect);

 $userid = trim($_POST["id"]);
echo $userid;
/*
echo "<h5 id='dontshow' >";
require("sell\table\contact.php");

	echo "</h5>";		
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
			
		
					
			
			 $sqlpp=mysql_query("SELECT idcustomer as cstm  FROM `moshi_db`.`record_sm` where idsalesman='$_POST[id]' and date='$dateCheck1' group by idcustomer ");
	
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
		  $py=$rowdatas3['py'];
		  $day=$rowdatas3['date'];
		  $pro_t[$j]=$pro_t[$j]+$pro_qt;
	    $ct_t=$ct_t+$ct1;
	   endwhile;
	  $unpd=$ct_t-$py;
	    echo"<td $css>$pro_qt </td>";
	
		$pro_qt='';
	   
		  }
		 endwhile;
		    echo"<td $css>".number_format($ct_t)."</td>
			<td $css "; ?> onclick=" var a=prompt('<?php echo  "\pay amount\']"; ?>'); 
                           PostDatareturn('return.php','tablequery2','<?php echo "";?>'+a);"
                           
<?php echo ">".number_format($py)."</td><td $css>".number_format($unpd)."</td></tr>";
            $ct_tsum=$ct_tsum+$ct_t;
			$unpdsum=$unpdsum+$unpd;
			$pysum=$pysum+$py;
			$ct_t=0;
		 endwhile;
		 
		 
		 		
			echo "<tr  style='background:#fff; border:thin #ccc solid;'><td $css>return</td>";		
			$i=1;
	       $sqlp=mysql_query("SELECT *  FROM `moshi_db`.`product_sm` ");
	
	      while($rowdatas=mysql_fetch_array($sqlp)):
	     $pro_name=$rowdatas['name'];
		  $id_name=$rowdatas['id'];
	
	    echo"<td $css>0</td>";
		   $counter[$i]=$id_name;
			$i++;		
	     endwhile;
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
		echo"<td $css>".number_format($ct_tsum)."</td><td $css>".number_format($pysum)."</td><td $css>".number_format($unpdsum)."</td>";echo"</tr>";
			
	
	 echo"</table>";
	 
	 */