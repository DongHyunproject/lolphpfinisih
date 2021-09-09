<?php

session_start();
if(isset($_SESSION['unique_id'])){
	$connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");
	$outgoing_id=mysqli_real_escape_string($connection,$_POST['outgoing_id']);
	$incoming_id=mysqli_real_escape_string($connection,$_POST['incoming_id']);
$output="";
$sql="SELECT * FROM chatapp.messages  
LEFT JOIN chatapp.users ON chatapp.users.email=messages.incoming_msg_id
where (outgoing_msg_id='$outgoing_id' AND incoming_msg_id='$incoming_id')
OR (outgoing_msg_id='$incoming_id' AND incoming_msg_id='$outgoing_id') ORDER BY msg_id asc" ;
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
                      <img src="'.$row['img'].'" alt="">
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

	header("location:login.php");
}

?>