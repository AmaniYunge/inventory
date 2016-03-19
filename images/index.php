
<html>
<body>
 
<div style=" position:absolute; border:#666 thin solid; top:250px; width:500px; left:500px; height:200; background:#fff;">
<?php 

 // store session data

$myFile = "testFile.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
///echo $theData;

?>

</div>

<div style="position:absolute; left:500px; top:0px; padding:50px; background-color:lightblue;">
<form action='<?php echo $PHP_SELF; ?>' method='post'>
<input type='text' name='user' value='' size="30" />
<input type='submit' name='sennd' value='send' />
<input type="image" src="/sell/logo.png" name="pic" />

</form>


<?php



 $pass=gethostbyaddr($_SERVER['REMOTE_ADDR']);
//gethostbyaddr($_SERVER['REMOTE_ADDR']);SerialNumber JPA7800B2 

$sw="SerialNumber 
 6WV17BS";  
$kw=0;
$strnum='SAK';
$strnum1='UC';
for($i=16; $i<23; $i++)
{
	$kw+=hexdec(ord($sw[$i]));
	$swascii+=ord($sw[$i]);
	$k=dechex(dechex(ord($sw[$i])));
	$strnum=$strnum."-".$k;
	$strnum1=$strnum1."-".ord($sw[$i]);
	}
echo "<br />".$strnum;
echo "<br />".$strnum1;
$my = "hmsak.txt";
  if (file_exists("hmsak.txt"))
      {
      echo " already exists ";
	  $fh = fopen($my, 'r')or die("can't open file");

$theData = fread($fh, filesize($my));
fclose($fh);
if($theData==$strnum){
echo "<br /> ACTIVATED";
}
      }

if($_POST['user'] ==$strnum){

$myFile = "hmsak.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData =$strnum;
fwrite($fh, $stringData);

fclose($fh);

}






/*echo "<br />".$passadd.$passascii;
echo "<br />ord pass".$passascii.",hexdec ord".$passadd;
echo "<br />password=passadd+passwascii".$password=$passadd.$passascii;
echo "<br />hexdec password + dechex ".hexdec($password).dechex($password);
echo "<br />".dechex($password);
for($i=0; $i<strlen($pass); $i++){
echo "<br />".$pass[$i];
}
echo "<br />";
for($i=0; $i<strlen($pass); $i++){

$passinline="".$pass[$i];
echo $passinline;
}

//echo chr(ord("d")) . "<br>"; // Decimal value
//echo chr(ord("d")) . "<br>"; // Octal value
//echo subtr . "<br>"; // Hex value
*/
?>
</div>
</body>
</html>