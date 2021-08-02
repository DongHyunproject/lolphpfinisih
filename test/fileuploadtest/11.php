
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>


<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
echo "file upload program<br />";
echo "select the file<br />";
?>
<form method="post" action="12.php" enctype="multipart/form-data">
	<input type="file" size=100 name="uploads"><hr>
	<input type="submit" value="send">

</form>
</body>
</html>