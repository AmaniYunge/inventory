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

<?php 
$connect=mysql_connect("localhost","root","");
							mysql_select_db("siimshealthcenter", $connect);
							
							
$sqlS = "INSERT INTO data (doctor, date,name,age,bima,residence,sex,time) VALUES ('$_POST[doctor]', CURDATE(),'$_POST[nm]','$_POST[age]','$_POST[bima]','$_POST[place]','$_POST[sex]',CURTIME());"; //,'$_POST[dressing]','$_POST[medicine]','$_POST[bima]','$_POST[age]','$_POST[recidence]');"; 
							


						 if($_POST['nm']!=""){
							
							mysql_query($sqlS);
						
							}
							

?>
<div style=" position:absolute; left:30%;  top:70px;  font-family:Arial, Helvetica, sans-serif; color:#3D257A;">
<form name="rec" action="<?php echo $PHP_SELF; ?>" method="post" >
        
  
 
         <fieldset style="width:400px; padding-left:70px; background-color:#99C7E8; border:1px #FFFFFF solid;  border-radius:8px; " >
            <legend><h3 style="color:#006">information</h3></legend>
                <center> <table  style="font-size:18px;font-family:Arial, Helvetica, sans-serif; color:#006; ">
                   <colgroup>
	                     <col align="left" />
	                     <col align="left"  />
	               </colgroup>
                   <tr>
	                   
					  <td >Name<br /><input id="txtbox"  type="text" name="nm" value="" size="30" /></td>
                      <td>Residence<br /><input id="txtbox" type="text" name="place"  value="" size="30" /></td>
		           </tr>
		           
                    <tr>
		            
					<td>Age<br /><input id="txtbox" type="text" name="age"  value="" size="30" /></td>
                     <td>Sex<br /><select id="txtbox"  name="sex"   ><option></option><option value="M">MALE</option><option value="F">FEMALE</option></select></td>
		         
		        </tr>
                   <tr>
	                 
					  <td>consultation<br /><input style="height:30px; " id="txtbox" type="text" name="doctor"  value="" size="30" /></td>
                      <td>Bima<br /> <select id="txtbox"  name="bima"   >
			  <option></option>
			  <option>NMB BANK</option>
			   <option>NBC BANK</option>
			    <option>TANESCO</option>
				 <option>KK SECURITY</option>
				  <option>ACB BANK</option>
				   <option>STANIC BANK</option>
				    <option>STRATEGIS</option>
					 <option>MAZAO</option>
					  <option>BINAFSI</option>
					   <option>TCC</option>
					    <option>TBL</option>
						<option>CRDB & AAR</option> 
						<option>ITV</option>
						<option>SUMATRA</option>
						<option>JUBILEE</option>
			  </select></td>
		          </tr>
		         
		       
		        <tr>
		           <td align="left"></td><td ><br /><input type="submit" name="newprod" value="Enter" /></td>
				  </tr> 
				  
				  
               
         </table> </center>
                      
      </fieldset>
    	 <input type="hidden" name="dir" value="recp" /> 
           </form> 
           
           </div>
           
</body>
</html>