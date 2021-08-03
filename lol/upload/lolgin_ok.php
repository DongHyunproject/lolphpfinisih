<?php
session_start();
/*include_once "config.php";*/
$connection=mysqli_connect("localhost", "root","ehdgus48350","lol");

$loginid =  $_POST['loginid'];
$password = $_POST['password'];
$password_hash=hash("sha256",$password);


if(!empty($email)&&!empty($password)){
	$sql=mysqli_query($connection, "SELECT * FROM lol.member where loginid='{$loginid}' AND password='{$password_hash}'");
	if(mysqli_num_rows($sql)>0){
		$row=mysqli_fetch_assoc($sql);
		$_SESSION['unique_id']=$row['nuique_id']; /*다른 php파일에서 이 아이뒤를 쓸거임.*/

		echo "로그인 성공했습니다";

	}else {
		echo "이메일 or 비밀번호가 틀렸습니다";
	}
}else {
	echo "모든 입력칸을 입력하세요";
}
?>