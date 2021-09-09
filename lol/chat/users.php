<?php



session_start();
$connection=mysqli_connect("localhost", "root","ehdgus48350","lol");
$outgoing_id=$_SESSION['loginid'];
$sql=mysqli_query($connection,"SELECT * FROM lol.member where loginid NOT IN('$outgoing_id')" );

$output="";

if(mysqli_num_rows($sql)==1){
	$output .="채팅 가능한 대상이 없습니다.";
}elseif(mysqli_num_rows($sql)>0){
	include "data.php";
	/*while($row=mysqli_fetch_assoc($sql)){
		$output .='     <a href="#">
                <div class="content">
                    <img src="/lol/'.$row['profile_img'].'" alt="" >
                    <div class="details">
                        <span> '.$row['loginid'].'</span>
                        <p> test메시지</p>

                    </div>

                </div>
            </a>'
		;*/

/*활동상태 나타내는 것
                <div class="status-dot"><i class="fas fa-circle"></i> </div>

*/


}

echo $output;



?>