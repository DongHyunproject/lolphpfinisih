<?php
session_start();
$connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");
$outgoing_id=$_SESSION['unique_id'];
$sql=mysqli_query($connection,"SELECT * FROM chatapp.users" );
  $output="";

  if(mysqli_num_rows($sql)==1){
      $output .="채팅 가능한 대상이 없습니다.";
  }elseif(mysqli_num_rows($sql)>0){

	  while($row=mysqli_fetch_assoc($sql)){


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

}
  echo $output;



?>