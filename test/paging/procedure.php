<?php

/*페이징을 위해서 데이터 삽입*/

error_reporting( E_ALL );
ini_set( "display_errors", 1 );

$con=mysqli_connect("localhost","root","ehdgus48350","paging");
$query="select * from paging.paging order by idx desc";

$query_run=mysqli_query($con,$query);
$row_count=mysqli_num_rows($query_run);
echo $row_count;

$paging_test="페이징test ";
$i=0;
while($i<1000){
	$i++;
	$row_count++;
	$query_add="insert into paging.paging(title) value ('$paging_test$row_count')";
	$query_paging_run=mysqli_query($con,$query_add);

}
echo $row_count."입니다";

?>