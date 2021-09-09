<?php
include  $_SERVER['DOCUMENT_ROOT']."/lol/navbar2.php";


session_start();
?>
<!--
api key=a56718d90a8142d8adbc5b6901426646

-->
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
        img{
            width:300px;
            height: 300px;
        }

        .Newgrid{
            margin:10px;
            border: 1px solid lightgrey;

        }


	</style>
	<meta charset="UTF-8">
	<title>Title</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body >

<div
<div class="jumbotron" >
	<h1>News(라이엇)</h1>
</div>
<form action="riot_news_api.php" method="post"  enctype="multipart/form-data">
    <div class="form-group">

        <input style="width: 500px; margin-left: 50px" type="text" name="news_keyword"  required class="form-control" placeholder="검색할 뉴스 키워드를 입력하세요. ">

    </div>
<?php
$news_keyword=$_POST['news_keyword'];

if(isset($news_keyword)){
	$news_keyword=$_POST['news_keyword'];
}else {
 $news_keyword="라이엇";
}

$url="https://newsapi.org/v2/everything?q='.$news_keyword.'&sortBy=publishedAt&apiKey=a56718d90a8142d8adbc5b6901426646";
$response=file_get_contents($url);
$NewsData=json_decode($response);

?>
<?php
foreach ($NewsData->articles as $News){
	?>

	<div class="row Newgrid" style="margin: 50px">
		<div class="col-md-3">
			<img src="<?php echo $News->urlToImage ?>" alt="">

		</div>
		<div class="col-md-9">
			<h2 style="color: red">제목:<a href="<?php echo $News->url;?>"><?php echo $News->title ?></a>  </h2>
			<h5> <?php echo $News->description ?> </h5><!--기사내용-->
			<!-- <h6> <?php /*echo $News->author */?> </h6>
		<p> <?php /*echo $News->content */?> </p>

		<h6> <?php /*echo $News->publishAt */?> </h6>-->


		</div>


	</div>
	<?php
}



?>


</body>
</html>