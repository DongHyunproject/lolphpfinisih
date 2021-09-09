<?php

/*페이징을 위해서 데이터 삽입*/

error_reporting( E_ALL );
ini_set( "display_errors", 1 );

$con=mysqli_connect("localhost","root","ehdgus48350","lol");
$query="select * from lol.board order by idx desc";

$query_run=mysqli_query($con,$query);
$row_count=mysqli_num_rows($query_run);
echo $row_count;

$paging_test_yaso="페이징test 야스오";
$paging_test_asho="페이징test 애쉬";
$paging_test_vain="페이징test 베인";

$image_yaso="yaso.png";
$image_ash="ash.jpg";
$image_vain="vain.jpg";
$i=0;
$write_date=date("Y-m-d h:i:s");
while($i<5000){
	$i++;
	$row_count++;
	$query_add="insert into lol.board(title, content, img, writer, wrtie_date) 
values ('$paging_test_vain$row_count','$paging_test_vain$row_count','$image_vain','nova','$write_date')";
	$query_paging_run=mysqli_query($con,$query_add);

}
echo $row_count."입니다";

?>