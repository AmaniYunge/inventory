<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reception</title>
<style type="text/css">
#txtbox {
	height:28px;
	font-size:19px;
 
}
</style>
</head>
  
<body >

<script type="text/javascript">
function success(){
	if(document.rec.nm.value==""){
		alert("enter product name");
		return false;
		}
		if(document.rec.per.value==""){
		alert("enter  unit ");
		return false;
		}
		if(document.rec.by.value==""){
		alert("enter buy price");
		return false;
		}
		if(document.rec.pr.value==""){
		alert("enter sell price");
		return false;
		}
		if(document.rec.qr.value==""){
		alert("enter quantity");
		return false;
		}
		if(document.rec.ct.value==""){
		alert("enter category");
		return false;
		}
		if(document.rec.buyprice.value==""){
		alert("enter buy price");
		return false;
		}
	
	return true;
}
</script>
<?php 
$nm=$_POST['nm'];
$ct=$_POST['ct'];
$per=$_POST['per'];//ct
$pr=$_POST['pr'];
$qt=$_POST['qt'];
$by=$_POST['by'];
$pf=$_POST['pf'];
$buyprice=$_POST['buyprice'];
$nm=str_replace(" ","_",$nm);
$ct=str_replace(" ","_",$ct);
if($_POST['newprod'] !=""){
mysql_query("INSERT INTO `moshi_db`.`data` (
`id` ,
`nm` ,
`ct` ,
`per` ,
`pr` ,
`qt` ,
`d` ,
`t` ,
`by`,
`buyprice`
)
VALUES (
NULL , '$nm', '$ct', '$per', '$pr', '$qt', CURDATE(), CURTIME( ) , '$by','$buyprice'
);
");

$ql=mysql_query("SELECT id from `moshi_db`.`data` ORDER BY id  DESC LIMIT 1");
while($row=mysql_fetch_array($ql)):

$pid=$row['id'];

endwhile;

mysql_query("INSERT INTO `moshi_db`.`rdsell` (
`id` ,
`pid` ,
`qt` ,
`cst` ,
`custm` ,
`date` ,
`time` ,
`cashier` ,
`profit` ,
`import`,
`product_from`
)
VALUES (
NULL , '$pid', NULL , NULL , NULL , CURDATE( ) , CURTIME( ) , NULL , NULL , '$qt','$pf'
);
");


	//mysql_query("INSERT INTO data(id,nm,ct,per,pr,qr,d,t,by) VAVULES(NULL,'$nm','$ct','$per','$pr','$qr',CURDATE(),CURTIME(),'$by'); ");
	}


?>
<div style=" position:absolute; left:30%;  top:70px;  font-family:Arial, Helvetica, sans-serif; color:#3D257A;">
<form name="rec" action="<?php echo $PHP_SELF; ?>" method="post" >
        
  
 
         <fieldset style="width:400px; padding-left:70px; background-color:#99C7E8; border:1px #FFFFFF solid;  border-radius:8px; " >
            <legend><h3 style="color:#006">New Product</h3></legend>
                <center> <table  style="font-size:18px;font-family:Arial, Helvetica, sans-serif; color:#006; ">
                   <colgroup>
	                     <col align="left" />
	                     <col align="left"  />
	               </colgroup>
                   <tr>
	                   
					  <td >Product name<br /><input id="txtbox"  type="text" name="nm" value="" size="35" /></td>
		           </tr>
		           
                    <tr>
		            
					<td>Unit<br /><input id="txtbox" type="text" name="per"  value="" size="35" /></td>
		        </tr>
                <tr>
	                  <td>Purchase Price <br /><input id="txtbox" type="text" name="buyprice" value="" size="35" /></td>
		          </tr>
                     <tr>
                
		          <tr>
	                  <td> Whole Sale Price<br /><input id="txtbox" type="text" name="pr" value="" size="35" /></td>
		          </tr>
                     <tr>
	                 
					  <td> Retail Price<br /><input style="height:30px; " id="txtbox" type="text" name="by"  value="" size="35" /></td>
		          </tr>
		         <tr>
	              
					<td>Quantity<br /><input id="txtbox" type="text" name="qt"  value="" size="35" /></td>
		         </tr>
		  
				 <tr>
		            
					<td>Category<br /><input id="txtbox" type="text" name="ct"  value="" size="35" /></td>
		        </tr>
                 <tr>
		            
					<td>Product From<br /><input id="txtbox" type="text" name="pf"  value="" size="35" /></td>
		        </tr>
		        <tr>
		           <td align="left"><br /><input type="submit" name="newprod" value="Save" onclick="return success();" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				  </tr> 
				  <tr>
				  <td ></td>
                  </tr>
         </table> </center>
                      
      </fieldset>
    	 <input type="hidden" name="dir" value="zxc" /> 
           </form> 
           
           </div>
</body>
</html>