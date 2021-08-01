<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>

<?php





echo "confirm file information <br />";
$uploaddir  = '';

$uploadfile = $uploaddir.basename($_FILES['uploads']['name']);
/*$test=__DIR__.$uploadfile;*/
if(move_uploaded_file($_FILES['uploads']['tmp_name'],$uploadfile)){
	echo "파일이 업로드 되었습니다. <br /> ";
	print_r($_FILES );
	echo "<img src ={$_FILES['uploads']['name']}> <p>";
	echo "1. file name : {$_FILES['uploads']['name']}<br />";
	echo "2. file type : {$_FILES['uploads']['type']}<br />";
	echo "3. file size : {$_FILES['uploads']['size']} byte <br />";
	echo "4. temporary file size : {$_FILES['uploads']['size']}<br />";
	echo "5. temporary file name : {$_FILES['uploads']['tmp_name']}<br />";
	/*	echo "6.경로 :$test<br />";*/


} else {
    $_FILES['uploads']['error'];
	echo "파일 업로드 실패 !! 다시 시도해주세요.<br />";
}
?>


</body>
</html>