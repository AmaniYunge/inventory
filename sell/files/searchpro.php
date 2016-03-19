<?php 


// connection to server
$connect=mysql_connect("localhost","root","");

// connection to database
mysql_db_query("moshi_db",$connect);

 $userid = trim($_POST["id"]);
//$sql=mysql_query("SELECT ct, nm,qt,pr,id FROM data WHERE ct='$ct' AND nm LIKE '%".$userid."%' ORDER BY nm; ");
$sql=mysql_query("SELECT ct, nm,qt,pr,id FROM data WHERE ct!='' AND nm LIKE '".$userid."%' ORDER BY nm limit 13; ");
$i=1;
$j=1;
while($row=mysql_fetch_array($sql)):
$name=$row['nm'];
$stock=$row['qt'];
$price=$row['pr'];
$idp=$row['id'];
if(0<$stock){
	
	?>
    
	<!--li id="list" onclick='$("#picked").append("<li style=\"border-bottom:#fff thin solid;\" id=\"#p<?php echo $i;?>\" ><button style=\" border-radius:10px; color:red; background-color:#fff;\" onclick=\"  del(<?php echo $i;?>); setoint=(1,4);return false; \"  >X</button><?php echo $name;?><?php echo "____@";?><?php echo $price."Tsh";?><input onkeyUp=\" settoint(this.value,<?php echo $i;?>);\" quant=\"<?php echo $stock;?>\" id=\"q<?php echo $i;?>\" price=\"<?php echo $price;?>\" type=\"hidden\" value=\"ok\" name=\"<?php echo $idp."nm";?>\"/></li>" );
            
    '><?php echo $name;?></li-->
	<li id="list" onclick='$("#picked").append("<li id=\"p<?php echo $idp;?>\" ><button style=\" border-radius:10px; color:red; background-color:#fff;\" onclick=\"   del(<?php echo $idp;?>);  return false; \"  >X</button><?php echo $name."&nbsp;&nbsp;@".$price;?><input class=\"dsc\" onkeyUp=\" settointdsc();\"  id=\"discount<?php echo "$idp";?>\" name=\"<?php echo $idp."ds";?>\" size=\"5\" style=\"padding-right:60px;\" placeholder=\"discount\"  value=\"\" type=\"\" /><input onkeyUp=\" settoint(this.value,<?php echo $idp;?>); \" placeholder=\"quantity\" stock=\"<?php echo $stock;?>\" id=\"cashvalue<?php echo $idp;?>\" price=\"<?php echo $price;?>\" type=\"text\" value=\"\" name=\"<?php echo $idp."nm_".$price;?>\" class=\"qt\" size=\"5\"/><hr/>" );
   $(this).remove();             
    '><?php echo $name;?></li>
		<!--li id="list" onclick='$("#picked").append("<li style=\"border-bottom:#fff thin solid;\" id=\"#p<?php echo $i;?>\" ><button style=\" border-radius:10px; color:red; background-color:#fff;\" onclick=\"  del(<?php echo $i;?>); setoint=(1,4);return false; \"  >X</button><?php echo $name;?><?php echo "____@";?><?php echo $price."Tsh";?><input onkeyUp=\" settoint(this.value,<?php echo $i;?>);\" quant=\"<?php echo $stock;?>\" id=\"q<?php echo $i;?>\" price=\"<?php echo $price;?>\" type=\"hidden\" value=\"ok\" name=\"<?php echo $idp."nm";?>\"/></li>" );
                $(this).remove();
    '><?php echo $name;?></li-->
	<?php
}
	$i++;
	endwhile;
	//
	
	
	 ?>
