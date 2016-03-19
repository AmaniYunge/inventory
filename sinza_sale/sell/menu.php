<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#sell {


	background:#ff0;
	 width:100px;
	  text-align:left;
	   border-radius:5px;
	    border-bottom-color:#900;
		 border-style:groove;
		 color:#FFF;
		 min-height:20px;
		 }
</style>
<script type="text/javascript" >
function menuColor(){
 var d = document.getElementById( 'sell' ).style.backgroundColor="#000";
    //alert( d.style.backgroundColor );

}
function menuColorOut(){
 var d = document.getElementById( 'sell' ).style.backgroundColor="#00f";
    //alert( d.style.backgroundColor );

}
function chek(){
	var ok=document.getElementById('voto').value=='';
if(ok=="")
{
	alert(ok);
	document.getElementById('voto').value=="chek";
}
	// else{
	//	 document.getElementById('voto').value=='test';
	//	 }
}
</script>
</head>

<body>
<center><h1><?php echo $_POST['menu']; ?></h1></center>
<div style="position:absolute;width:300px;  left:600px; background-repeat:no-repeat;">
 <?php

 echo"<h1>". $_POST['c']."  ".$_POST['d']."  ".$_POST['e']."</h1>";

 ?>

 <form form="fm" action="" method="POST" onsubmit="return changVal();">
      <input type="hidden" name="menu" value="send">
    


      <a href="" onclick="document['fm'].submit();return false;"><h1>Click</h1></a> 
 </form>

</div>
<div style="position:absolute; left:0px; width:150px; top:10px; border-radius:10px; height:300px; background-color:#75E8E4;">
<form name="form1" action="<?php echo $PHP_SELF;?>" method="post" >
<ul type="none">
<li><a href="#" id="sell" name="menu" value="sell" onmouseover="menuColor();" onmouseout="menuColorOut();" onclick="document.['form1'].submit()">sell</a></li>
<li><button type="submit" name="menu" value="view">view</button></li>
<li><button type="submit" name="menu" value="add">add products</button></li>
<li><button type="submit" name="menu" value="edit">edit</button></li>
<li></li>
 
</ul></form>
 

</div>
</body>
</html>