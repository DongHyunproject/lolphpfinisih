<?php

$connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");
if(!$connection){
	echo "database disconnected" .mysqli_connect_error();
}else {
 echo " 성공";
}
?>