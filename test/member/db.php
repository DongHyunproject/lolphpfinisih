<?php
session_start();

//한글 깨짐 방지 위한 utf-8인코딩
header('Content_Type: text/html; charset=utf_8;');

$db=new mysqli("localhost","root","ehdgus48350","bbs");
$db->set_charset("utf8");

function query($query)
{
	global $db;
	return $db->query($query);

}

?>