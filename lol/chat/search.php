<?php
$connection=mysqli_connect("localhost", "root","ehdgus48350","lol");
$searchTerm=mysqli_real_escape_string($connection,$_POST['searchTerm']);

/*echo $searchTerm;*/

$output="";
$outgoing_id=$_SESSION['loginid'];
$sql=mysqli_query($connection,"SELECT *FROM lol.member WHERE member.loginid NOT IN('$outgoing_id')  ");
if(mysqli_num_rows($sql)>0){

include "data.php";
}else {
	$output="해당되는 사람이 없습니다.";
}
echo $output;
?>