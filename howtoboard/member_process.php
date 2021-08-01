

<?php
require_once('../db/db.php');

switch ($_GET['mode']){
	case 'register':
		$id = $_POST['id'];
		$userid = $_POST['userid'];
		$pw1 = $_POST['pw1'];
		$pw2 = $_POST['pw2'];

		$email = $_POST['email'];


		break;
}
?>