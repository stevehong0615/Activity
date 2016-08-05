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
    </div>
</body>
</html>