<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no"/>
<title>安之源售后管理 </title>

<link rel="stylesheet" type="text/css" href="css/demo.css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="resources/assets/i/favicon.png">
  <link rel="stylesheet" href="resources/assets/css/amazeui.min.css"/>
</head>
<script> 
</script>
<body>
<div class="container">
	<div id="page">
    <h1>安之源售后管理</h1>
    <p>高端大气上档次的售后管理</p>
<?php
("Content-type: text/html;charset=utf-8");
if ($_POST['yid']=='azy'&&$_POST['pwd']=='azyjsq'){
	$connID = mysqli_connect('127.0.0.1','root','fjf88888')or die("网络错误,请联系管理员1246107973");
	mysqli_query($connID,"set names utf8");
	mysqli_select_db($connID,'wx')or die("数据库可能被攻击,请联系管理员1246107973");
	$sql = "select * from weixiubiao";
	$cxjg = mysqli_query($connID,$sql);
	while($row=mysqli_fetch_array($cxjg)){
		$rows[]=$row;
	}
	foreach ($rows as $key=>$value){
		$name[$key]=$value['name'];
		$dh[$key]=$value['dh'];
		$zz[$key]=$value['zz'];
		$wt[$key]=$value['wt'];
	}
	echo '<table id="table">
			<thead>
			<tr>
			<th>姓名</th>
			<th>电话</th>
			<th>住址</th>
			<th>问题</th>
            		<th></th>
			</tr>
			</thead>
			<tbody>';
		 foreach ($name as $key=>$value){
				echo '
				<tr>
				<td> '.$value.'</td>
				<td> '.$dh[$key].'</td>
				<td> '.$zz[$key].'</td>
				<td> '.$wt[$key].'</td>
               <td><a onClick=\"return confirm("确认已解决吗？")"
			   href="sc.php?sno='.$dh[$key].'">已解决</a>
			    </td>
				</tr>
				';
	 }
	 echo'
			</tbody>
			</table>';

}
else echo "<script>alert('账号或密码错误,请重新输入');history.back();</script>";
?>
</div>
</div>
<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	  $('#table').basictable();

	  $('#table-breakpoint').basictable({
		breakpoint: 768
	  });

	  $('#table-swap-axis').basictable({
		swapAxis: true
	  });

	  $('#table-force-off').basictable({
		forceResponsive: true
	  });

	  $('#table-no-resize').basictable({
		noResize: true
	  });

	  $('#table-two-axis').basictable();

	  $('#table-max-height').basictable({
		tableWrapper: true
	  });
	});
  </script>
</body>
</html>