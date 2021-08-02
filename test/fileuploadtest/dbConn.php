<?php

$db = mysqli_connect("localhost","root","ehdgus48350","testDB");

if(!$db)
{
	die("Connection failed: " . mysqli_connect_error());
}
else {
	echo "성공";
}

?>