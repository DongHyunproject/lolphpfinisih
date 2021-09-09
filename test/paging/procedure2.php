<?php

/*페이징을 위해서 데이터 삽입*/

error_reporting( E_ALL );
ini_set( "display_errors", 1 );

$con=mysqli_connect("localhost","root","ehdgus48350","lol");
$query="select * from lol.board order by idx desc";

$query_run=mysqli_query($con,$query);
$row_count=mysqli_num_rows($query_run);
echo $row_count;
$yaso="레오나";
$paging_test=" 페이징 test 시작 ";
$write_date=date("Y-m-d h:i:s");
$i=0;
while($i<50000){
	$i++;
	$row_count++;
	$query_add="insert into lol.board(title, content, img, writer, wrtie_date, update_date)
 value ('$yaso$paging_test$row_count','$yaso$paging_test$row_count,','Leona.jpg','leona','$write_date','$write_date')";
	$query_paging_run=mysqli_query($con,$query_add);

}
echo $row_count."입니다";

?>