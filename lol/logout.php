<?php
session_start();

$con=mysqli_connect("localhost","root","ehdgus48350","lol");

$status="Offline now";
$sql=mysqli_query($con,"UPDATE lol.member SET status='$status' where loginid='{$_SESSION['loginid']}'");
if($sql){
	session_unset();
	$session_destory=session_destroy();
	$session_destory;

	if($session_destory){
		header('Location:home.php');
	}

}

?>