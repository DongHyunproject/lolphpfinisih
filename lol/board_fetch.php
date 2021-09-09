
</strong>

<!DOCTYPE html>

<html lang="en">
<head>

	<style>
        ul
	</style>


</head>
<body>

</body>

</html>


<?php

$connect = new PDO("mysql:host=localhost; dbname=lol", "root", "ehdgus48350");

/*function get_total_row($connect)
{
  $query = "
  SELECT * FROM tbl_webslesson_post
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  return $statement->rowCount();
}

$total_record = get_total_row($connect);*/

$limit = '10';
$page = 1;
if($_POST['page'] > 1)
{
	$start = (($_POST['page'] - 1) * $limit);
	$page = $_POST['page'];
}
else
{
	$start = 0;
}

$query = "
SELECT * FROM lol.board
";

if($_POST['query'] != '')
{
	$query .= '
  WHERE title LIKE "%'.str_replace(' ', '%', $_POST['query']).'%" 
  ';
}

$query .= 'ORDER BY idx desc ';

$filter_query = $query . 'LIMIT '.$start.', '.$limit.'';

$statement = $connect->prepare($query);
$statement->execute();
$total_data = $statement->rowCount();

$statement = $connect->prepare($filter_query);
$statement->execute();
$result = $statement->fetchAll();
$total_filter_data = $statement->rowCount();

$output = '
<div class="container " style="margin-top: 100px; width:1000px; text-align: center " >
<div class="inner" style="display: inline-block">


<label style="float: left">총 게시물 수 :  '.$total_data.'</label>
<table class="table table-bordered">
  <tr>
    <th>글번호</th>
    <th>이미지</th>
        <th>제목</th>
        <th>글쓴이</th>
          <th>조회수</th>
  </tr>
  </div>
  </div>
';
if($total_data > 0)
{
	foreach($result as $row)
	{
		$output .= '

    <tr style="text-align: center">
      <td width="10%" >'.$row["idx"].'</td>
      <td  width="10%">
            <img src="'.$row["img"].'" width="100" height="100" alt="image">
      </td>
   
     <td width="45%">
     <a href="/lol/board_read.php?idx='.$row["idx"].'">'.$row["title"].'</a></td>
     </td>

      <td width="15%">'.$row["writer"].'</td>
      <td width="20%">'.$row["count"].'</td>


    </tr>
    ';
	}
}
else
{
	$output .= '
  <tr>
    <td colspan="2" align="center">해당하는 데이터가 없습니다.</td>
  </tr>
  ';
}

$output .= '
</table>
<br />
<div align="center" class="outer" style="text-align: center">
  <div class="inner" style="display: inline-block">
  <ul class="pagination" style="background-color: white">
';

$total_links = ceil($total_data/$limit);/* 10001개의 데이터가 있을 떄, 10로 나누면 100.1이 나오는데, ceil 반올림 함수로 101개의 블럭을 생성*/
$previous_link = '';
$next_link = '';
$page_link = '';

//echo $total_links;

if($total_links > 9)
{
	if($page < 10)
	{
		for($count = 1; $count <= 10; $count++)
		{
			$page_array[] = $count;
		}
		$page_array[] = '...';
		$page_array[] = $total_links;
	}
	else
	{
		$end_limit = $total_links - 10;
/*		echo $end_limit;*/
		if($page > $end_limit)
		{
			$page_array[] = 1;
			$page_array[] = '...';
			for($count = $end_limit; $count <= $total_links; $count++)
			{
				$page_array[] = $count;
			}
		}
		else
		{
			$page_array[] = 1;
			$page_array[] = '...';
			for($count = $page - 3; $count <= $page + 3; $count++)
			{
				$page_array[] = $count;
			}
			$page_array[] = '...';
			$page_array[] = $total_links;
		}
	}
}
else
{
	for($count = 1; $count <= $total_links; $count++)
	{
		$page_array[] = $count;
	}
}

for($count = 0; $count < count($page_array); $count++)
{
	if($page == $page_array[$count])
	{
		$page_link .= '
    <li class="page-item active">
      <a class="page-link" href="#">'.$page_array[$count].' <span class="sr-only">(current)</span></a><!--sr-only는  -->
    </li>
    ';

		$previous_id = $page_array[$count] - 1;
		if($previous_id > 0)
		{
			$previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$previous_id.'">이전페이지</a></li>';
		}
		else
		{
	/*		$previous_link = '
      <li class="page-item disabled">
        <a class="page-link" href="#">이전페이지</a>
      </li>
      ';*/
		}
		$next_id = $page_array[$count] + 1;
		if($next_id > $total_links)
		{
			$next_link = '
     
        ';
		}

		else
		{
			$next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$next_id.'">다음</a></li>';
		}
	}
	else
	{
		if($page_array[$count] == '...')
		{
			$page_link .= '
      <li class="page-item disabled">
          <a class="page-link" href="#">...</a>
      </li>
      ';
		}
		else
		{
			$page_link .= '
      <li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$page_array[$count].'">'.$page_array[$count].'</a></li>
      ';
		}
	}
}

$output .= $previous_link . $page_link . $next_link;
$output .= '
  </ul>
</div>
</div>
';

echo $output;

?>