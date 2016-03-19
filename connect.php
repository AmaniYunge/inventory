 

<?php

// connection to server
$connect=mysql_connect("localhost","root","yunge");

// connection to database
mysql_db_query("moshi_db",$connect);
?>

<script type="text/javascript" src="js/slide.js"></script>
<script type="text/javascript">
function pass(){
var password=document.petro.pass.value;


if(password=="123"){
        document.location.href="menu.php";
   }
}

</script>


<script type="text/javascript" >
$(document).ready(function()
{


$("div#categories li").slideDown(1500);


//Document Click


//$("div#categories li").animate({height:"+110px"},"fast");
/*$("body").load(function (){

});

*/


});
</script>




<script type="text/javascript" >
function login()

{
var pass=document.form1.pass.value;
var user=document.form1.user.value;
var passuser=pass+user;
<?php

$sql=mysql_query("SELECT * FROM user ;");
while($row=mysql_fetch_array($sql)):


$user=$row['usercode'];
$pass=$row['passcode'];
$name=$row['page'];


?>

if (pass=="<?php echo $pass;?>" )
{
    if(user=="<?php echo $user;?>")
 
        {
          document.location.href="<?php echo $name; ?>";
         }
}


<?php
endwhile;


?>


}




</script>
<?PHP 
$tody=mysql_query("SELECT DATE_FORMAT(NOW(),'%W %D %b %Y ') as date");
while($rowdate=mysql_fetch_array($tody)):
$date=$rowdate['date'];



endwhile;


//ADMIN LOGNIN

$admin=mysql_query("SELECT ps FROM ut;");
while($log=mysql_fetch_array($admin)):
$user=$log['nm'];
$pass=$log['ps'];

endwhile;
/*

$banner="<div id='categoriestop'>
<p align='justify'>ONLINE SHOPPING<span style='font-size:12px; color:#990000;'>&nbsp;&nbsp;$date</span>
 

</p>

<div style='position:absolute; right:5%; top:10px; font-size:12px;'>
      <form name='petro'  action='javascript:pass();' method='post >
         <table align='center'> 
		     <tr> 
			   <td>
                      user:
			  </td>
			  <td>
			  <input type='text' name='user' value='' />	
			  </td>	    
        <td>
		password:
		</td>
		<td>
		<input type='password'  name='pass' value='' />
		</td>
		<td>
		<input   type='submit' name='login' value='submit'/>
		</td>
		</tr>

</table>
 

</form>
</div>
";

 */



?>
