<?php
$id_to_main = $_POST['id_to_main'];
$pswd1 = $_POST['pswd1'];
$pswd1_to_main = $_POST['pswd1_to_main'];

?>


<!DOCTYPE html>
<!--소개글-->
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        .carousel-inner{

        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
    </style>


</head>
<body>
<p> "<?php echo $id_to_main ?>님이 로그인 하셨습니다."</p>

<ul>
    <li><a  onclick="location.
    href='edit.html'"
            class="active" href="/howtoboard/Main.php">Home</a></li>
    <li><a  onclick="location.href='list.html'"

            href="#news">Community</a></li>board
    <li><a href="#contact" onclick="location.href='tt2.html'">영상</a></li>
<!--    <li><a href="#contact" onclick="location.href='../test/tt2.html'">파티원구함</a></li>
-->    <li><a href="#about" onclick="location.href='tt2.html'">전적검색</a></li>
    <ul>   <button type="button" class="btn btn-dark" style="float: right;"
                   onclick="location.href='real_login.html'">로그인</button>



        <button type="button" class="btn btn-dark" style="float: right;"
                onclick="location.href='login.html'">회원가입</button>

    </ul>


</ul>

<div class="jumbotron text-center">
    <h1>LoL Community</h1>
    <p></p>
</div>


<!--content-->


<!--carousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/image/kaisa.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/image/biago.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/image/yaso.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--carousel-->

<!--footer-->
<div>
    <div class=text-center>
        <hr/>
        <p> 2020-04-20, LoL Community</p>
    </div>


</div>>


</body>
</html>