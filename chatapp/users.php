<?php
session_start();
$connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");

$sql=mysqli_query($connection,"SELECT * FROM chatapp.users" );



?>