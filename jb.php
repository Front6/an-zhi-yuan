<!doctype html> 
<html> 
<head>
<meta charset="utf-8"> 
<title>正在提交</title> 
</head>
 <?php
 header("Content-type: text/html;charset=utf-8");
 if ($_POST['name']==''||$_POST['dh']==''||$_POST['zz']==""||$_POST['wt']==""){
 echo "<script>alert('所有项均为必填项,请重新填写');history.back();</script>";
 }
 else if (strlen($_POST['dh'])>11||strlen($_POST['dh'])<4){
 echo "<script>alert('电话必须是4-11位');history.back();</script>";
 }
 else{
	$connID = mysqli_connect('127.0.0.1','root','fjf88888') or die("<script> alert('网络错误,请重新提交');history.back();</script>");
	mysqli_select_db($connID,'wx') or die("<script> alert('网络错误,请重新提交');history.back();</script>");
	$name = $_POST['name'];
	$dh = $_POST['dh'];
	$zz = $_POST['zz'];
	$wt= $_POST['wt'];
	mysqli_query($connID,"insert into weixiubiao(name,dh,zz,wt) values('$name','$dh','$zz','$wt')") or die("<script> alert('提交失败,请重新提交'); history.back();</script>");
	echo "<script> alert('提交成功,请等待师傅联系');</script>";
	echo '<h1 align="center">提交成功,请等待师傅联系</h1>';
	mysqli_close($connID);
 }
	?>
</html>
