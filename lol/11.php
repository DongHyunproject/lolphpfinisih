
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>

<form name = 'frm' action="12.php" onsubmit="return confirm('Do you really want to submit the form?');">
    <input type='text' name="test"   value='test'>

    <input type='submit'    value='SUBMIT'>
</form>
<!--<script>
   confirm("어떤 값이 나올까요. 확인을 눌러보세요.");
    if(con_test == true){
        document.write("확인을 누르셨군요");
    }
    else if(con_test == false){
        document.write("취소를 누르셨군요.");
    }

</script>
-->
<?php

// 서울 시간 세팅
echo date("Y-m-d H:i:s") . "\n";

error_reporting( E_ALL );
ini_set( "display_errors", 1 );
echo "file upload program<br />";
echo "select the file<br />";

?>
<form method="post" action="/lol/12.php" enctype="multipart/form-data">
	<input type="file" size=100 name="uploads"><hr>
	<input type="submit" value="send">

</form>
</body>
</html>