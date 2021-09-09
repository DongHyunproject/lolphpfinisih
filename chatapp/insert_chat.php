<?php

session_start();
if(isset($_SESSION['unique_id'])){
	$connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");
	$outgoing_id=mysqli_real_escape_string($connection,$_POST['outgoing_id']);
	$incoming_id=mysqli_real_escape_string($connection,$_POST['incoming_id']);
	$message=mysqli_real_escape_string($connection,$_POST['message']);

	if(!empty($message)){
		$sql=mysqli_query($connection,"insert into chatapp.messages(incoming_msg_id, outgoing_msg_id, msg) values ('$incoming_id','$outgoing_id','$message')");
	}


}else {

	header("location:login.php");
}

?>