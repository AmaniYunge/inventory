<?php require("configSystem.php");

$data=$_REQUEST["name"];
$data=explode("&",$data);
$name=explode("=",$data[0]);
$passid=explode("=",$data[1]);
$idset=explode("=",$data[2]);
//$fun=explode("=",$data[0]);


$query="UPDATE `moshi_db`.`ut` SET nm='$name[1]', ps='$passid[1]' WHERE id='$idset[1]'";
mysql_query($query);
?>

<html>
<body>
 <table id="tablequery">
                                <tr><th>position</th><th>name</th><th>password</th><tr>
                                <?php $sql=mysql_query("SELECT * FROM `moshi_db`.`ut`  ");
								while($row=mysql_fetch_array($sql)):
								$username=$row['nm'];
								$userpt=$row['pt'];
								$userpss=$row['ps'];
								$userid=$row['id'];
								
								echo "<tr><td>$userpt</td><td>$username</td><td>$userpss</td><td>"; ?>
								
								
								<button onclick='selected("editsign.php","#tablequery","<?php echo $userid; ?>");'>edit</button></td></tr>
								
								<?php endwhile; ?>
								</table>
								
								
								</body>
								</html>