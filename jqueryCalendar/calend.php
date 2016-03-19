<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="jquery-1.6.2.min.js"></script>
<script src="jquery-ui-1.8.15.custom.min.js"></script>
<link rel="stylesheet" href="jquery/jqueryCalendar.css">
<script>
                jQuery(function() {
                                jQuery( "#bday" ).datepicker();
								 jQuery( "#to" ).datepicker();
								
								$("h1").html("<h1><img src='../sell/images/cont3.png' /><?php echo $_POST['bday']."to".$_POST['to']; ?></h1>").fadeIn("slow").delay(2000).fadeOut("slow");
                });
				
				</script>
</head>

<body>
<form action="<?php echo $PHP_SELF;  ?>" method="post">
from<input id="bday"  type="text" placeholder="date" name="bday" />
to:<input id="to"  type="text" placeholder="date" name="to" />
<input type="submit" name="send" value="send" />
</form>
<?php
$date=$_POST['bday'];
if($date){
$datemysql=$date[6].$date[7].$date[8].$date[9]."-".$date[0].$date[1]."-".$date[3].$date[4];
echo $datemysql;
}
?>

<h1>1</h1>


</body>
</html>
