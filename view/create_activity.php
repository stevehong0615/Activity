<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>活動報名系統</title>
</head>
<body>
	<div data-role = "header" data-position = "fixed">
		<h3>建立活動</h3>
		<div data-role="navbar" style="text-align:center ; margin:auto;">
		    <form action = "/Activity/Create/createActivity/" method = "post">
		        <table>
		            <tr>
		                <td style="color:#FFFFFF">活動名稱：</td>
                    </tr>
                    <tr>
        		        <td><input type = "text" size = "50" name = "activity_name"></td><br>
        	        </tr>
        	        <tr>
        		        <td style="color:#FFFFFF">人數限制：</td>
        		        <td><input type = "text" size = "50" name = "count_limit"></td><br>
        		    </tr>
        		    <tr>
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
        		        <td>
        		            <input type="datetime-local" name="created_time">
        		        </td>
        		    </tr>
        		    <tr>
        		        <td>
        		            <input type="datetime-local" name="end_time">
        		        </td>
        		    </tr>
        		    <tr>
        		        <td><input type = "submit" value = "建立活動"></td>
        		     </tr>
        		</table>
            </form>
		</div>
	</div>
</body>
</html>