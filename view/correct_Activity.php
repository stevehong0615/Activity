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
<script type="text/javascript" src="/Activity/js/correct.js"></script>
</head>
<body>
    <div class="container">
		<div class="row">
	        <div class="box">
	            <form method="post" action="/Activity/User/addJoinList/">
	            <?php foreach($data as $key=>$value): ?>
		            <input type="text" style="display:none" id = "id" name="id" value="<?php echo $value['id']; ?>">
					<h1>活動名稱：<?php echo $value['activity_name']; ?></h1>
	    	    	<P>人數限制： <?php echo $value['count']; ?><P>
	    	    	<P id="joinLiveCount"></p>	
	    	    	
		    	    <?php if($value['carry'] == 1){ ?>
		    	        <P>是否攜伴：不可攜伴<input type="text" style="display:none" name="newCarryCount" value="0"></P>
		    	    <?php } else { ?>
		    	        <P>
		    	            是否攜伴：可攜伴->請輸入攜伴人數<input type="text" size="20" name="newCarryCount">
		    	        </P>
		    	    <?php } ?>
		    	    
	    			<p>開始時間：<?php echo $value['created_time']; ?></p>
	    			<p>結束時間：<?php echo $value['end_time']; ?></p>
    	    	<?php endforeach; ?>
    	    	<p>員工編號：<input type = "text" size = "20" name = "user_id"></p>
    	    	<p>員工姓名：<input type = "text" size = "20" name = "user_name"></p>
    	    	<input type = "submit" value = "參加活動">
    	    	</form>
            </div>
    	</div>
    </div>
</body>
</html>