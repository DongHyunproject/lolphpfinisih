<?php
include_once 'simple_html_dom.php';

// Create DOM from URL
$html = file_get_html( 'https://search.naver.com/search.naver?where=news&sm=tab_jum&query=%EB%89%B4%EC%8A%A4' );



echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';
$imgSrc = $html->find('img',1)->src;
echo $imgSrc;
echo "<img src = $imgSrc>";



?>


