<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
session_start();
if(isset($_SESSION['loginid'])){
	$connection=mysqli_connect("localhost", "root","ehdgus48350","lol");
	$outgoing_id=mysqli_real_escape_string($connection,$_POST['outgoing_id']);
	$incoming_id=mysqli_real_escape_string($connection,$_POST['incoming_id']);
	$output="";
	$sql="SELECT * FROM lol.messages
LEFT JOIN lol.member ON  lol.member.loginid=messages.outgoing_msg_id
where (outgoing_msg_id='$outgoing_id' AND incoming_msg_id='$incoming_id')
OR (outgoing_msg_id='$incoming_id' AND incoming_msg_id='$outgoing_id') ORDER BY msg_idx asc" ;
	$query=mysqli_query($connection,$sql);
	if(mysqli_num_rows($query)>0){
		while($row=mysqli_fetch_assoc($query)){
			if($row['outgoing_msg_id']=== $outgoing_id){/*보내는 메시지아이뒤가 같으면 보내는 사람*/
				$output .=' <div class="chat outgoing">
                          <div class="details">
                              <p> '. $row['msg'].'</p>
                          </div>
                      </div>';

			}
			else {
				/*같지 않으면, 받는 사람*/
				$output .=' <div class="chat incoming">
					<img src="/lol/'.$row['profile_img'].'" alt="">
                      <div class="details">
 <p> '. $row['msg'].'</p>                   
    </div>
                  </div>
	        ';
			}
		}
		echo $output;
	}


}else {

	header("location:/lol/login.php");
}

?>