<?php
session_start();
$session_destory=session_destroy();
if($session_destory){
header('Location:home.php');
}

?>