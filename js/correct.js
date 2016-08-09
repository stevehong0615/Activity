$(document).ready(function(){
function getTotal(){
	$.ajax({
	        type:"GET",
	        url:"/Activity/Create/joinCount",
	        data: {'id' : $("#id").val()},
	        dataType:"text",
	        error:function(Xhr){
	          console.log("error");
	        },
	        success:function(data){ 
	          $("#joinLiveCount").text("剩餘人數："+data);
	          
	          setInterval(getTotal, 2000);
	        }
	   });
}

getTotal();
    
});
