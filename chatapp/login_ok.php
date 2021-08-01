<?php
session_start();
/*include_once "config.php";*/
$connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");

$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

if(!empty($email)&&!empty($password)){
	$sql=mysqli_query($connection, "SELECT * FROM chatapp.users where email='{$email}' AND password='{$password}'");
	if(mysqli_num_rows($sql)>0){
		$row=mysqli_fetch_assoc($sql);
		$_SESSION['unique_id']=$row['nuique_id']; /*다른 php파일에서 이 아이뒤를 쓸거임.*/

		echo "success";

	}else {
		echo "이메일 or 비밀번호가 틀렸습니다";
	}
}else {
	echo "모든 입력칸을 입력하세요";
}
?>