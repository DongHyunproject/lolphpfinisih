<?php
include $_SERVER['DOCUMENT_ROOT']."/howtoboard/db.php";

$bno = $_GET['idx'];
$sql = query("delete from board where idx='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/howtoboard/index.php" />