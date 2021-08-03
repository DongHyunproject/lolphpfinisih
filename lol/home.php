<?php

include  $_SERVER['DOCUMENT_ROOT']."/lol/navbar2.php";

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="cookie_style.css" /><!--쿠키 동의 css-->

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
<body onload=javascript:openPopup('cookie_popup.html')>


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
		<p> 2021-08-04, LoL Community</p>
	</div>


</div>

<!--쿠키 관련정책 배너 팝업창-->

<div class="cookie-container">
    <p>우리 "LoL Community" 사이트는 당신의 쾌적한 서비스 사용을 위해서 쿠키를 이용해서
        당신에 대한 정보를 수집할 것입니다.
        <br>이와 관련한
        <a href="#">개인정보관련정책</a>과  <a href="#">쿠키 관련 정책</a>을 확인하세요.</p>

    <button class="cookie-btn">
        동의합니다.
    </button>
</div>
<script src="Cookie_Consent_Banner.js"></script>

<!--쿠키 팝업-->

<script type="text/javascript">
    function getCookie(name)
    {
        var cookie = document.cookie;
        if (document.cookie != "") {
            var cookie_array = cookie.split("; ");
            for ( var index in cookie_array) {
                var cookie_name = cookie_array[index].split("=");
                if (cookie_name[0] == "popupYN") {
                    return cookie_name[1]; } }
        }
        return ;
    }

    function openPopup(url)
    {
        var cookieCheck = getCookie("popupYN");
        if (cookieCheck != "N") window.open(url, '', 'width=450,height=520,left=0,top=0')
    }
</script>


</body>
</html>