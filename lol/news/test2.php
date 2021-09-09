
<!--
api key=a56718d90a8142d8adbc5b6901426646

-->
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        img{
            width:calc(100%-20px);
            height: 200px;
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
<body>

<div
<div class="jumbotron">
	<h1>LOL 뉴스</h1>
</div>

<?php
$url="https://newsapi.org/v2/everything?q=라이엇&sortBy=publishedAt&apiKey=a56718d90a8142d8adbc5b6901426646";
$response=file_get_contents($url);
$NewsData=json_decode($response);

?>
<?php
foreach ($NewsData->articles as $News){
	?>

	<div class="row Newgrid">
		<div class="col-md-3">
			<img src="<?php echo $News->urlToImage ?>">

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