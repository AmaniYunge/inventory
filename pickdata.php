<html>
<style type="text/css">
#items { border:none; }
#items ul li input { position:absolute; right:1px; text-align:center; height:22px;}
#items ul li { padding:2px; 
	text-transform:uppercase; font-size:12px;}
</style>
<!--link rel="stylesheet" type="text/css" href="styles/style.css" /-->
<script type="text/javascript" src="../js/jq.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	<?php 
	$cnt=mysql_connect("localhost","root","");
	mysql_select_db("moshi_db",$cnt);
$sqlc=mysql_query("SELECT ct FROM data WHERE ct !='' GROUP BY ct;");
$c=1;
while($row=mysql_fetch_array($sqlc)):
$sqc=$row['ct'];
	?>
		                      $(".left<?php echo $c; ?>").hide();
							  <?php
							  $c++;
							   endwhile; 
							 

	$sqlcat=mysql_query("SELECT ct FROM data WHERE   ct !='' GROUP BY ct;");
$class=1;
while($row=mysql_fetch_array($sqlcat)):
$ct=$row['ct'];
	?>

	$("#showdiv<?php echo $class; ?>").click(function(e){
			<?php 
	
$sqlc=mysql_query("SELECT ct FROM data WHERE  ct !='' GROUP BY ct;");
$c=1;
while($row=mysql_fetch_array($sqlc)):
$sqc=$row['ct'];
	?>
		                      $(".left<?php echo $c; ?>").hide();
							  <?php
							  $c++;
							   endwhile; 
							 ?>		 
                             $(".left<?php echo $class; ?>").show(500);
                             $(".left<?php echo $class; ?>").offset({left:270,top:e.pageY});

                             });

<?php 
$class++;

endwhile; ?>
/*
	$("#showdiv"+1).click(function(e){
		                      $(".left2").hide();
							  $(".left3").hide();
							 
                             $(".left"+1).show(500);
                             $(".left"+1).offset({left:340,top:e.pageY});

                             });
	$("#showdiv"+2).click(function(e){
		                     $(".left1").hide();
							   $(".left3").hide();
							   
                             $(".left"+2).show(500);
                             $(".left"+2).offset({left:340,top:e.pageY});

                             });	
   $("#showdiv"+3).click(function(e){
		                      $(".left1").hide();
							  $(".left2").hide();
                             $(".left"+3).show(500);
                             $(".left"+3).offset({left:340,top:e.pageY});

                             });				*/	 
	 });
	 
	
	 
	 
	 
	 
	 
function del(p){
	//alert(p);
	this.p=p;
	var rem="#p"+p;
	//alert(rem);
	document.getElementById(rem).innerHTML="";
	
	}
	function showthis(no){
		$(".left2").fadeOut(500); 
		alert(clientX);
	$(".left"+no).fadeIn(500);
	$(".left"+no).show();
		
		
		}
		function settoint(a,id){
			
			var stock=document.getElementById("q"+id).getAttribute("quant");
			var setstringtoint=parseInt(a);
			//setstringtoint=setstringtoint*1;
			if(setstringtoint!=parseInt(a)) {setstringtoint=0;
			
			
			document.getElementById("q"+id).value="";
			}
			//alert(stock);
			if(stock<setstringtoint){document.getElementById("q"+id).value=stock;}
			var inputs=document.getElementById("quantity").getElementsByTagName("input");
			//var sum="";
			var len=inputs.length-1;
				var i ; 
//var price = 0 ;
//alert ( len) ;
var price=0;
	var sum=0;
	// alert ( "wooo!" ) ;
	  var input = document.getElementsByTagName("input");
	 var id;
           for (i = 0; i <len; i++)
            { 
			//id="cashvalue"+i;
			//alert(id);
                if (inputs[i].type == "text" && inputs[i].value != ""  )
                {
                
                    price =inputs[i].getAttribute("price") * inputs[i].value;
					sum=sum+price;
					// alert ( sum+" "+price ) ;
                }
}
                 var str = $( "#quantity" ).serialize();
				document.getElementById("sum").value=sum;
			
			
			}
		
</script>
<body>

<div id="left" style="position:absolute; left:1%;  height:auto; width:230px; background-color:#fff; border:#ccc 10px solid;">
<ul >

<?php 
$sql=mysql_query("SELECT  ct FROM data WHERE  ct !='' GROUP BY ct;");
$i=1;
while($row=mysql_fetch_array($sql)):
$cat=$row['ct'];
if($cat==""){}else{
	?>
	<li id="showdiv<?php echo $i;?>" > <span style="text-transform:uppercase;">  
   <?php echo $cat;?>
  </span> 
 
   </li>
	




	<?php
	$i++;}
	endwhile;

	 ?>
</ul>
</div>
<?php //require("cnt.php"); 

$sqlcat=mysql_query("SELECT ct FROM data WHERE  ct !='' GROUP BY ct;");
$class=1;
while($row=mysql_fetch_array($sqlcat)):
$ct=$row['ct'];

?>
<div style="position:absolute; width:100%; ">   
<div id="left" class="left<?php echo $class; ?>" style="position:absolute; left:250px; border:#CCC 10px solid; height:auto; width:240px; "  >
<button style="position:relative; border-radius:10px; border:none; right:0%; color:red; background-color:#fff; top:2%; width:auto;" onclick='$(".left<?php echo $class; ?>").hide();'>X</button>
<center><h3><?php echo $ct; ?><hr/></h3></center>
<ul style="overflow:scroll;height:500px; ">
<?php 
$sql=mysql_query("SELECT ct, nm,qt,pr,id FROM data WHERE ct='$ct' AND nm REGEXP '^[a-z]' ORDER BY nm; ");
$i=1;
while($row=mysql_fetch_array($sql)):
$name=$row['nm'];
$stock=$row['qt'];
$price=$row['pr'];
$idp=$row['id'];
	?>
	<li id="list" onclick='$("#picked").append("<li id=\"#p<?php echo $i;?>\" ><button style=\" border-radius:10px; color:red; background-color:#fff;\" onclick=\"  del(<?php echo $i;?>); setoint=(1,4);return false; \"  >X</button><?php echo $name;?><?php echo "____@";?><?php echo $price."Tsh";?><input onkeyUp=\" settoint(this.value,<?php echo $i;?>);\" quant=\"<?php echo $stock;?>\" id=\"q<?php echo $i;?>\" price=\"<?php echo $price;?>\" type=\"text\" value=\"\" name=\"<?php echo $idp;?>\"/></li>" );
                $(this).remove();
    '><?php echo $name;?></li>
	
	
	<?php
	$i++;
	endwhile;
	//
	 ?>




</ul>
</div>

<?php 
$class++;
endwhile;
?>




</div>
<div id="items" style="position:absolute; top:0; left:540px;  height:auto; width:500px; background-color:#fff; ">
<form id="quantity">
<ul style="list-style:none; border:#ccc 10px solid; width:100%; position:absolute;  padding:0; text-align:left; " id="left"><li id="picked"></li>
<br/><hr/>

<li ><button class="css_btn_class"  onclick=" var ob=$('#quantity').serialize()+'&user_id='+$('#user_id').val()+'&patient_id='+$('#patient_id').val(); selected('med_payment.php','#page',ob); return false;">submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total<input id="sum" type="text" value=""
 name="sum"/></li></ul>
 </form>
</div>
</div>
</body>
</html>