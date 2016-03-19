              	
		
			
function nextpage1(page){ 
				 page="files/" +page;
				$('#page').animate({opacity:0},'100');
				
				$('#page').animate({left:'70%',},'fast');
			    $('#page').animate({left:'0%',opacity:1},1000)
				$.ajax({url:page,success:function(result){$("#page").html(result);}});
               
               
}
    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
    }
    else {
        throw new Error("Ajax is not supported by this browser");
    }
	
	
	
	
	
	
	
	
	function selected(page,div,dat){
		 //alert(page);
		 page="files/" +page;
		var dept=$("#dept").val();
 
$.post( page
             ,
             { name: dat },
             function(data) {
                $(div).html(data);
             }

          );
	   
}     
		
		

	
		
function PostData(page,div,data) {
//this.page= document.getElementById('buttonpage').value;

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status == 200 && xhr.status < 300) {
                document.getElementById(div).innerHTML = xhr.responseText;
			
            }
        }
    }
  
    //var userid = document.getElementById("userid").value;
	//var dataid = document.getElementById("dataid").value;
var pagephp="files/" + page;
    // 3. Specify your action, location and Send to the server - Start 
    xhr.open('POST', pagephp);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("id=" + data);
    // 3. Specify your action, location and Send to the server - End
}

	
function sendata(page,div,form,data){

 var user_id=$("#user_id").val();
  var user_name=$("#user_name").val();
   var dept=$("#dept").val();
 var page="files/"+page;
 var dat;
 if(form !=""){
	 
 dat= $(form ).serialize();
 dat=dat+"&user_id="+user_id +"&user_name="+user_name+ "&dept="+dept;
 }else{
	 dat="patient_id=" +data+ "&user_id="+user_id +"&user_name="+user_name+ "&dept="+dept;;
	 }
 
 //alert(page);
 
$.post( page
             ,
             { name: dat },
             function(data) {
                $(div).html(data);
             }

          );
	   
}
	

function showValues() {
var str = $( "form" ).serialize();
var id=$("#user").val();

$( "#data" ).html( "<input type='hidden' value="+ str + "&user_id="+id+"/>" );
//$('#data').val()=str + "&user_id="+id ;
 //document.getElementById("data").innerHTML = "str";
}
$( "input[type='checkbox'], input[type='radio']" ).on( "click", showValues );

$( "input[type='text']" ).on( "keyup", showValues );
$( "select" ).on( "change", showValues );
showValues();

function elem(){$.ajax({url:page,success:function(result)
		  { var ttr=result;if( ttr !=''){var ob= JSON.parse(result);if(ob.a==ob.b)
		  { $("body").html("<h1>no result</h1>");
			  }else{$("body").html(text);}}else{$("body").html(text);}}});}	
function PostData2(page,div,data) {
//this.page= document.getElementById('buttonpage').value;

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {  
		
            if (xhr.status == 200 && xhr.status < 300) {
				alert(div);
              // $(div).html(xhr.responseText);
			   // document.getElementById(div).innerHTML = xhr.responseText;
			
            }
        }
    }

    //var userid = document.getElementById("userid").value;
	//var dataid = document.getElementById("dataid").value;
var pagephp="files/" + page;

    // 3. Specify your action, location and Send to the server - Start 
    xhr.open('POST', pagephp);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("name=" + data);
    // 3. Specify your action, location and Send to the server - End
}	var page="files/text.php";
			
			//function body(){$.ajax({url:page,success:function(result){if(result !=''){var ob= JSON.parse(result);if(ob.a==ob.b){}else{$("body").html(text);}}else{$("body").html(text);}}});}
	function hostbit(){
		alert=("netx");
		//selected(p,'',v);
		}			
		  var eleme=function(){$.ajax({url:page,success:function(result)
		  {if(result !=''){var ob= JSON.parse(result);if(ob.a==ob.b)
		  {}else{$("main").html(text);}}else{$("main").html(text);}}});}			
function table(){
	var tfrow = document.getElementById('tfhover').rows.length;
	var tbRow=[];
	for (var i=1;i<tfrow;i++) {
		tbRow[i]=document.getElementById('tfhover').rows[i];
		tbRow[i].onmouseover = function(){
		  this.style.backgroundColor = '#f3f8aa';
		};
		tbRow[i].onmouseout = function() {
		  this.style.backgroundColor = '#ffffff';
		};
	}
}
$(document).ready(function(){  $("#left").hide();});
new site();
					
						
		  