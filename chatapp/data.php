<?php
$connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");

$sql=mysqli_query($connection,"SELECT * FROM chatapp.users" );

while($row=mysqli_fetch_assoc($sql)){
	$sql2="SELECT * FROM chatapp.messages WHERE (incoming_msg_id={$row['email']}
    OR outgoing_msg_id={$row['email']}) AND (outgoing_msg_id={$row['outgoin_id']}
        OR outgoing_msg_id={$row['email']}) ";


	$output .='<a href="chat.php?email='.$row['email'].'">
				<div class="content">
					<img src="'.$row['img'].'" alt="">
						<div class="details">
					<span> '.$row['fname']. "" .$row['lname'].'  </span>
				</div>

				</div>
				<div class="status-dot"><i class="fas fa-circle"></i> </div>

			</a>';
}

?>