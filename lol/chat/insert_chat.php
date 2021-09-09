<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
session_start();
if(isset($_SESSION['loginid'])){
	$connection=mysqli_connect("localhost", "root","ehdgus48350","lol");
	$outgoing_id=mysqli_real_escape_string($connection,$_POST['outgoing_id']);
	$incoming_id=mysqli_real_escape_string($connection,$_POST['incoming_id']);
	$message=mysqli_real_escape_string($connection,$_POST['message']);

	if(!empty($message)){
		$sql=mysqli_query($connection,"insert into lol.messages(incoming_msg_id, outgoing_msg_id, msg) values ('$incoming_id','$outgoing_id','$message')");
	}


}else {

	header("location:../lol/login.php");
}

?>