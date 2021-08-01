<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["x"], false);
$conn = new mysqli("localhost", "root", "a123456&", "web");
mysqli_query ($conn, 'SET NAMES utf8');
$boardtitle = addslashes($obj->boardtitle);
$boardcontents = addslashes($obj->boardcontents);
$nickname = addslashes($obj->nickname);
$date = addslashes($obj->date);
$starttime = addslashes($obj->starttime);
$stmt = $conn->prepare("INSERT INTO $obj->table(0,boardtitle,boardcontents,nickname,date,starttime);/*todo*/
VALUES ('$boardtitle','$boardcontents','$nickname','$date','$starttime')");
$stmt->execute();
$sql = "select *from board where web.board.boardtitle ='$boardtitle' and web.board.boardcontents ='$boardcontents'
and web.board.nickname ='$nickname' and date ='$date'";
$res = $conn->query($sql);
if($res->num_rows > 0) {
    echo json_encode('1');
    exit();
} else {
    echo json_encode('0');
}
?>