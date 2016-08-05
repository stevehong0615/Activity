<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>活動報名系統</title>
<link rel="stylesheet" href="/Activity/css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="/Activity/css/bootstrap.min.css" type="text/css" media="screen">
<link rel="stylesheet" href="/Activity/css/jquery.datetimepicker.min.css">
<link rel="stylesheet" href="/Activity/css/jquery.datetimepicker.css">
<script type="text/javascript" src="/Activity/js/jquery.js"></script>
<script type="text/javascript" src="/Activity/js/jquery.create.js"></script>
<script type="text/javascript" src="/Activity/js/bootstrap.js"></script>
<script type="text/javascript" src="/Activity/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Activity/js/jquery.datetimepicker.js"></script>
<script type="text/javascript" src="/Activity/js/jquery.datetimepicker.full.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
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
	                        <table id="addUserTable" width="300">
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
	    			</table>
	        	</form>
	        </div>
			
	        <h1><br/>所有活動</h1>
	    	<table class="table">
	    		<tr>
	    			<th>活動名稱</th>
	    			<th>人數限制</th>
	    			<th>是否攜伴</th>
	    			<th>開始時間</th>
	    			<th>結束時間</th>
	    			<th>已報名人數</th>
	    			<th>報名網址</th>
	    		</tr>
	    		<?php foreach($data as $key=>$value){ ?>
	    		<tr>
	    			<td><?php echo $value['activity_name']; ?></td>
	    			<td><?php echo $value['count']; ?></td>
	    			<td>
	    				<?php 
	    					if($value['carry']==1){
	    						echo "不可攜伴";
	    					}
	    					else{
	    						echo "可攜伴";
	    					}
	    				?>
	    			</td>
	    			<td><?php echo $value['created_time']; ?></td>
	    			<td><?php echo $value['end_time']; ?></td>
	    			<td></td>
	    			<td><a href="https://lab-stevehong0615.c9users.io/Activity/User/joinActivity/<?php echo $value['url']; ?>"><?php echo $value['url']; ?></a></td>
	    		<tr>
	    		<?php } ?>
	    	</table>
    	</div>
    </div>
</body>
</html>