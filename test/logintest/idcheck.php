<?php
header("Content-Tpye: application/json; charset=UTF-8");/*컨텐트 타입의 json 형식으로 받음*/
$connection=mysqli_connect("localhost", "root","ehdgus48350","web");

$obj=json_decode($_POST["content"],false);/*컨텐트에 담긴 정보를 화면에 표시해줌,false를 해줘야 값이 화면에 잘 나옴 */

$sql="select *from  web.member where id='$obj->id'";
mysqli_query($connection,'SET NAMES utf8');
$result=$connection->query($sql);

if($result-> num_rows>0){
	/*값이 있을 경우 1이라는 값을 registration.php로 보냄*/
	echo json_encode('1');
	exit();

}else {	/*값이 없을 경우 0이라는 값을 registration.php로 보냄*/

	echo json_encode('0');
}

?>