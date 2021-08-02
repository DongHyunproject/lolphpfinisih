<?php

date_default_timezone_set('Asia/Seoul');

$times = mktime();
$write_date = date( "Y-m-d H:i:s");

echo "$write_date";

error_reporting( E_ALL );
ini_set( "display_errors", 1 );
$host = 'localhost';
$user = 'root';
$password = 'ehdgus48350';
$database_name = 'board';

$conn = new mysqli($host, $user, $password, $database_name);
if($conn){
    echo "성공";
}else{
    echo "실패";
}

$db_host="127.0.0.1";
$db_user="root";
$db_password="ehdgus48350";
$db_name="board";

$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(mysqli_connect_error($con)){
    echo "Mysql 접속 실패";
    "<br>";
    echo "오류 원인 : "; mysqli_connect_error();
    exit();

}
echo "Mysql 접속 성공";
mysqli_close($con);


$str = "sample";
$differTest = array(12,' ', " ",'str', false, array('12'), $str);

var_export($differTest);

//var_export 출력 결과
//array ( 0 => 12, 1 => '', 2 => ' ', 3 => 'str', 4 => false, 5 => array ( 0 => '12', ), 6 => 'sample', )


var_dump($differTest);


//var_dump 출력 결과
/*
array (size =7)
  1 => string ''        (length=0)
  2 => string ' '       (length=1)
  3 => string 'str'     (length=3)
  4 => boolean false
  5 => array (size=1)
       0 => string '12' (length=2)
  6 => string 'sample'  (length=4)
*/

print_r($differTest);

//print_r 출력 결과
//Array ( [0] => 12 [1] => [2] => [3] => str [4] => [5] => Array ( [0] => 12 ) [6] => sample )


/*$db_host="localhost";
$db_user="root";
$db_password="ehdgus48350";
$db_name="board";

$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(mysqli_connect_error($con)){
    echo "Mysql 접속 실패";
    "<br>";
    echo "오류 원인 : "; mysqli_connect_error();
    exit();

}
echo "Mysql 접속 성공";
mysqli_close($con);





$db_host = "localhost";
$db_user = "root";
$db_password = "ehdgus48350";



$con = new mysqli($db_host, $db_user, $db_password, $db_name); // DB 접속

if ($con->connect_errno) {
    echo "실패"; } // 에러 메세지 출력
else {
    echo "성공....진짜 너무힘들었다..";}*/




?>
