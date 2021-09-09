
<?php
session_start();
$con=mysqli_connect("localhost","root","ehdgus48350","lol");
$password=$_POST['password'];
$password_hash=hash("sha256",$password);
$email=$_POST['email'];

	$loginid = $_SESSION['loginid'];


	if ( ! empty( $loginid ) && ! empty( $password_hash ) ) {



		$sql = mysqli_query( $con, "(delete from lol.member where loginid='{$loginid}' AND password='{$password_hash})'" );




			}
	else {

		echo "<script>
		alert('비밀번호가 틀렸습니다');
		location.href='home.php';</script>";
 }

?>