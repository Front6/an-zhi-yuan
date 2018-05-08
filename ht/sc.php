<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>已删除</title>
</head>
<body>
<?php
("Content-type: text/html;charset=utf-8");
$conn=mysqli_connect('127.0.0.1','root','fjf88888','wx') or die("<script> alert('网络错误,请稍后重试');history.back();</script>");
$sc=$_GET['sno'];
mysqli_query($conn,"delete from weixiubiao where dh='$sc'") or die ("<script> alert('数据库可能损坏,请联系管理者1246107973');history.back();</script>");
echo "<script>alert('OK!');history.back();</script>";
?>

</body>
</html>