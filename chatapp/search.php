<?php
$connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");
$searchTerm=mysqli_real_escape_string($connection,$_POST['searchTerm']);
echo $searchTerm;
$output="";

$sql=mysqli_query($connection,"SELECT * FROM chatapp.users WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%'");
if(mysqli_num_rows($sql)>0){
	include "data.php";
	/*$output="해당되는 사람";*/
}else {
	$output="해당되는 사람이 없습니다.";
}
echo $output;
?>