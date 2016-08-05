
function add_new_data() {
    //先取得目前的row數
    var num = document.getElementById("addUserTable").rows.length;
    //建立新的tr 因為是從0開始算 所以目前的row數剛好為目前要增加的第幾個tr
    var Tr = document.getElementById("addUserTable").insertRow(num);
    //建立新的td 而Tr.cells.length就是這個tr目前的td數
    Td = Tr.insertCell(Tr.cells.length);
    //而這個就是要填入td中的innerHTML
    Td.innerHTML='<input name="userid[]" type="text" size="12">';
    //這裡也可以用不同的變數來辨別不同的td (我是用同一個比較省事XD)
    Td = Tr.insertCell(Tr.cells.length);
    Td.innerHTML='<input name="username[]" type="text" size="12">';
    //這樣就好囉 記得td數目要一樣 不然會亂掉~
}

function remove_data() {
    //先取得目前的row數
    var num = document.getElementById("addUserTable").rows.length;
    //防止把標題跟原本的第一個刪除XD
    if(num >2)
    {
    //刪除最後一個
    document.getElementById("addUserTable").deleteRow(-1);
    }
}


$(document).ready(function() {
	var now = new Date();
	minDate= new Date();
	var year = now.getFullYear();
	var month = now.getMonth()+1;
	var day = now.getDay();
	var hour = now.getHours();
	var min = now.getMinutes();
	//var sec = '00';
	if(month < 10){
		month = '0' + month;
	}
	if(day < 10){
		day = '0' + day;
	}
	if(hour < 10){
		hour = '0' + hour;
	}
	if(hour > 12){
		hour = hour-12;
		hour = '0' + (hour);
	}
	if(min < 10){
		min = '0' + min;
	}
	
	$('#start_time').val(year+"/"+month+"/"+day+" "+hour+":"+min);
	$('#end_time').val(year+"/"+month+"/"+day+" "+hour+":"+min);
});


$(document).ready(function() {
	$('#start_time').datetimepicker(); 
	$('#end_time').datetimepicker(); 
});