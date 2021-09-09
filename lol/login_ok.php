<?php
session_start();
/*include_once "config.php";*/
$connection=mysqli_connect("localhost", "root","ehdgus48350","lol");

$loginid =  $_POST['loginid'];
$password = $_POST['password'];
$password_hash=hash("sha256",$password);


if(!empty($loginid)&&!empty($password)){
	$sql=mysqli_query($connection, "SELECT * FROM lol.member where loginid='{$loginid}' AND password='{$password_hash}'");
	if(mysqli_num_rows($sql)>0){
		$row=mysqli_fetch_assoc($sql);
		$_SESSION['loginid']=$loginid;
		$_SESSION['email']=$row['email'];


		if(isset($_SESSION['loginid'])&& isset($_SESSION['email'])){

			$status="Active now";
			mysqli_query($connection,"UPDATE lol.member SET status='{$status}' where loginid='{$loginid}'");

			echo "로그인 성공했습니다";
                   }else {
                       echo "세션문제가 발생했습니다. ".$_SESSION['email'].$_SESSION['loginid'];
                   }



	}else {
		echo "이메일 or 비밀번호가 틀렸습니다";
	}
}else {
	echo "모든 입력칸을 입력하세요";
}
?>