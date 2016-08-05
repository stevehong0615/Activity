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
	            <form method="post" action="https://lab-stevehong0615.c9users.io/Activity/User/addJoinList/<?php echo $data['url']?>">
	            <?php foreach($data as $key=>$value): ?>
				<h1>活動名稱：<?php echo $value['activity_name']; ?></h1>
    	    	<P>人數限制： <?php echo $value['count']; ?><P>
    	    	    <?php if($value['carry'] == 1){ ?>
    	    	        <P>是否攜伴：不可攜伴</P>
    	    	    <?php } else { ?>
    	    	        <P>
    	    	            是否攜伴：可攜伴->請輸入攜伴人數<input type="text" size="20" name="newCarryCount">
    	    	        </P>
    	    	    <?php } ?>
    			<p>開始時間：<?php echo $value['created_time']; ?></p>
    			<p>結束時間：<?php echo $value['end_time']; ?></p>
    	    	<?php endforeach; ?>
    	    	<input type = "submit" value = "參加活動">
            </div>
    	</div>
    </div>
</body>
</html>