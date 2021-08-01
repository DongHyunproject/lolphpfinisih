<?php
$str = $_POST['text1'];
if ($str != null){
	$result = "당신은 '{$str}'이라고 썼습니다.";
} else {
	$result = "아무것도 쓴 것이 없습니다.";
}
?>
<!DOCTYPE html>
<html lang="ko">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>sample page</title>
</head>

<body>
<h1>Hello PHP!</h1>
<div><?php echo $result; ?></div>
<form method="post" action="/test/test2.php">
    <input type="text" name="text1">
    <input type="submit">
</form>


<?php
/*youtube 하는법*/
/*$url = 'https://www.youtube.com/watch?v=X6sxSfGz2bI';*/
preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $str, $matches);
$id = $matches[1];
$width = '400px';
$height = '450px';
?>
<iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
        src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
        frameborder="0" allowfullscreen>

</iframe>


</body>
</html>