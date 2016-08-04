<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>活動報名系統</title>
<link rel="stylesheet" href="/Activity/css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="/Activity/css/bootstrap.min.css" type="text/css" media="screen">
<script type="text/javascript" src="/Activity/js/jquery.js"></script>
<script type="text/javascript" src="/Activity/js/jquery.create.js"></script>
<script type="text/javascript" src="/Activity/js/bootstrap.js"></script>
<script type="text/javascript" src="/Activity/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="/Activity/css/jquery.datetimepicker.min.css">
<link rel="stylesheet" href="/Activity/css/jquery.datetimepicker.css">
<script type="text/javascript" src="/Activity/js/jquery.datetimepicker.js"></script>
<script type="text/javascript" src="/Activity/js/jquery.datetimepicker.full.js"></script>
<script>
$(document).ready(function() {
 $('#start_time').datetimepicker(); 
 $('#end_time').datetimepicker(); 
});
</script>
</head>
<body>
	<div class="container">
        <div class="box">
			<h3>建立活動</h3>
	
	    	<form action = "/Activity/Create/createActivity/"  method = "post">
	        	<table>
	            	<tr>
		                <td>活動名稱：</td>
		                <td><input type = "text" size = "50" name = "activity_name"></td>
            		</tr>
    	        	<tr>
        		        <td>人數限制：</td>
        		        <td><input type = "text" size = "20" name = "count_limit"></td>
    		    	</tr>
        		    <tr>
        		    	<td>是否攜伴：</td>
        		    	<td>
            		    	<fieldset data-role="controlgroup" data-type="horizontal">
            			    	<input type="radio" name="rdoPet" id="rdoPet0" value="0" checked="checked" />
            			     	<label for="rdoPet0">可攜伴</label>
            			     	<input type="radio" name="rdoPet" id="rdoPet1" value="1"  />
            			     	<label for="rdoPet1">不可攜伴</label>
            				</fieldset>
    			    	</td>
        		    </tr>
        		    <tr>
        		    	<td>報名開始日期時間：</td>
        		        <td>
        		            <input type="text" id="start_time" name="start_time">
        		        </td>
    		    	</tr>
    		    	<tr>
        		    	<td>報名截止日期時間：</td>
        		        <td>
        		            <input type="text" id="end_time" name="end_time">
        		        </td>
    		    	</tr>
    		    	<div>
                        <table id="mytable" width="300">
                          <tr>
                            <td width="200" class="td01">員工編號</td>
                            <td width="200" class="td01">員工姓名</td>
                          </tr>
                          <tr>
                            <td>
                            <input name="userid[]" type="text" size="12">
                            </td>
                            <td>
                            <input name="username[]" type="text" size="12">
                            </td>
                          </tr>
                        </table>
                        <br/>
                        <input type="button" value="新增一欄" onclick="add_new_data()"> 
                        <input type="button" value="減少一欄" onclick="remove_data()"><br/>
                    </div>
                	<br/>
    		    	<tr>
    		    		<td colspan="2"><input type = "submit" value = "建立活動"></td>
    		    	</tr>
    		    	<tr>
    		    	
    		    	</tr>
    			</table>
    			
        	</form>
        	
        	<h1><br/>所有活動</h1>
        	
		</div>
	</div>
</body>
</html>