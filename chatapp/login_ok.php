<?php
session_start();
/*include_once "config.php";*/
$connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");

$email =  $_POST['email'];
$password = $_POST['password'];
$password_hash=hash("sha256",$password);


if(!empty($email)&&!empty($password)){
	$sql=mysqli_query($connection, "SELECT * FROM chatapp.users where email='{$email}' AND password='{$password_hash}'");
	if(mysqli_num_rows($sql)>0){
		$row=mysqli_fetch_assoc($sql);
		$sql_status=mysqli_query($connection,"update  chatapp.users set status= ('활동중') where email='$email'");
		$_SESSION['unique_id']=$row['email']; /*다른 php파일에서 이 아이뒤를 쓸거임.*/

		echo "로그인 성공했습니다";

	}else {
		echo "이메일 or 비밀번호가 틀렸습니다";
	}
}else {
	echo "모든 입력칸을 입력하세요";
}
?>