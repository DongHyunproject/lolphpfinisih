<?php

include $_SERVER['DOCUMENT_ROOT']."/howtoboard/db.php";

//각 변수에 write.php에서 input name값들을 저장한다
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$date =date("Y-m-d ",strtotime ("+9 hours"));
if($username && $userpw && $title && $content){
	$sql = query("insert into board(name,pw,title,content,date) values('".$username."','".$userpw."','".$title."','".$content."','".$date."')");
	echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='/howtoboard/index.php';</script>";
}else{
	echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
?>
<?php /*

 $date =date("Y-m-d H:i:s",strtotime ("+9 hours"));

echo $date;*/?>
