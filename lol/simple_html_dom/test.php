<?php
include_once 'simple_html_dom.php';
// Create DOM from URL or file
// Dump contents (without tags) from HTML

$html = file_get_html('https://www.google.com/search?q=%EB%A6%AC%EA%B7%B8+%EC%98%A4%EB%B8%8C+%EB%A0%88%EC%A0%84%EB%93%9C&source=lnms&tbm=nws&sa=X&ved=2ahUKEwjf2PXgr7XyAhXOMd4KHd5mDG0Q_AUoA3oECAEQBQ&biw=1536&bih=722');
/*
 * https://search.naver.com/search.naver?where=news&sm=tab_pge&query=%EB%A6%AC%EA%B7%B8%20%EC%98%A4%EB%B8%8C%20%EB%A0%88%EC%A0%84%EB%93%9C&sort=0&photo=0&field=0&pd=0&ds=&de=&cluster_rank=18&mynews=0&office_type=0&office_section_code=0&news_office_checked=&nso=so:r,p:all,a:all&start=11
 * */
// 화면 전체를 복사해서 들고오기
$str = $html;
// Print it!
echo $html;
// Find all images

foreach($html->find('img') as $element ) {

	echo $element->src.'<br>';//이미지 파일 이름
	echo "$element";//이미지




}

// Find all links
foreach($html->find('a') as $element){

    echo $element->href . '<br>';}

// Find all links
foreach($html->find('author') as $element){

    echo $element->href . '<br>';}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<head profile="https://www.w3.org/2005/10/profile">

	<link rel="icon" type="image/png" href="https://example.com/myicon.png">

	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>



</body>
</html>

<!--<img src="https://search.pstatic.net/common/?src=http%3A%2F%2Fblogfiles.naver.net%2FMjAyMTAyMDZfMSAg%2FMDAxNjEyNjE0MTE0NzYy.1J99lNQa-aL9FOKqxSjo8iZB23nEH3uN1jALu8Vi00og.PqSsXeNdK79c5_-sRsMXaIZJ2btneNfVoZmJCqj3tNcg.JPEG.arok-yera%2F1.jpg&type=a340">
-->