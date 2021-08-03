<?php


$connection=mysqli_connect("localhost", "root","ehdgus48350","web");
$id=$_POST['id'];
$nickname=$_POST['nickname'];
$password=$_POST['password'];

$password_hash=hash("sha256",$password);



$query="insert into web.member(id, nickname, password) values ('$id','$nickname','$password_hash')";
$query_run=mysqli_query($connection,$query);
if($query_run){
/*	header("location: /test/logintest/login.php");*/
	echo "<script>location.href='login.php'</script>";



}else {
 echo "데이터 전송중에 문제 발생";
}


?>