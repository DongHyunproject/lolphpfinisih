<?php
/*
error_reporting( E_ALL );
ini_set( "display_errors", 1 );*/

$connection=mysqli_connect("localhost", "root","ehdgus48350","lol");
$outgoing_id=$_SESSION['loginid'];
$searchTerm=$_POST['searchTerm'];
$sql=mysqli_query($connection,"SELECT * FROM lol.member where loginid   like '%$searchTerm%' and loginid not in ('$outgoing_id')" );


while($row=mysqli_fetch_array($sql)){
	$sql2 = "SELECT * FROM lol.messages WHERE (incoming_msg_id = {$row['loginid']}
                OR outgoing_msg_id = {$row['loginid']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_idx DESC LIMIT 1";
/*	echo "참여자 아뒤 : ".$row['loginid'];*/
/*echo $sql2;*/
/*	echo $outgoing_id;*/

/*	echo $row['loginid'];*/


	$query2 = mysqli_query($connection, $sql2);
	$row2 = mysqli_fetch_assoc($query2);
	if(mysqli_num_rows($query2) > 0) {
		$result = $row2['msg'];
	}
	else {
/*		$result ="No message available";*/

	}


	(strlen($result)>20) ? $msg= substr($result, 0 ,28) :$msg=$result;
	($row['status']=="Offline now") ? $offline="offline" : $offline="";
	/*design2.css 부분
	.users-list a .status-dot.offline{
	color:#ccc;
	 *
	 * */

	$output .='<a href="chat.php?loginid='.$row['loginid'].'">
				<div class="content">
					<img src="/lol/'.$row['profile_img'].'" alt="">
						<div class="details">
					<span> '.$row['loginid'].'  </span>
			                        <p>'. $msg .'</p>

				</div>

				</div>
				<div class="status-dot '.$offline.' "><i class="fas fa-circle"></i> </div>

			</a>';
}

?>