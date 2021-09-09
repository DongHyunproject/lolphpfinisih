<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 1;
}
$sql = query("select * from lol.board");
$row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
$list = 10; //한 페이지에 보여줄 개수
$block_ct = 5; //블록당 보여줄 페이지 개수

$block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
$block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
$block_end = $block_start + $block_ct - 1; //블록 마지막 번호

$total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
$total_block = ceil($total_page/$block_ct); //블럭 총 개수
$start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

$sql2 = query("select * from  lol.board order by idx desc limit $start_num, $list");
/*while($board = $sql2->fetch_array()){}
	$title=$board["title"];

	$con_idx = $board["idx"];*/
	/*$reply_count = query("SELECT COUNT(*) as cnt FROM reply where con_num=$con_idx");
	$rep_count = $reply_count->fetch_array();*/

	?>