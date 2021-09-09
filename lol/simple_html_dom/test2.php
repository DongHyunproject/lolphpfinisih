<?php
include('simple_html_dom.php');

// Settings on top
$sitesToCheck = array(
	// id is the page ID for selector
	array( "url" => "https://www.arsenal.com/first-team/players", "selector" => "#squad"),
	array( "url" => "https://www.liverpoolfc.tv/news", "selector" => "ul[style='height:400px;']")
);
$savePath = "cachedPages/";
$emailContent = "";

// For every page to check...
foreach($sitesToCheck as $site) {
	$url = $site["url"];

	// Calculate the cachedPage name, set oldContent = "";
	$fileName = md5($url);
	$oldContent = "";

	// Get the URL's current page content
	$html = file_get_html($url);

	// Find content by querying with a selector, just like a selector engine!
	foreach($html->find($site["selector"]) as $element) {
		$currentContent = $element->plaintext;;
	}

	// If a cached file exists
	if(file_exists($savePath.$fileName)) {
		// Retrieve the old content
		$oldContent = file_get_contents($savePath.$fileName);
	}

	// If different, notify!
	if($oldContent && $currentContent != $oldContent) {
		// Here's where we can do a whoooooooooooooole lotta stuff
		// We could tweet to an address
		// We can send a simple email
		// We can text ourselves

		// Build simple email content
		$emailContent = "David, the following page has changed!\n\n".$url."\n\n";
	}

	// Save new content
	file_put_contents($savePath.$fileName,$currentContent);
}

// Send the email if there's content!
if($emailContent) {
	// Sendmail!
	mail("david@davidwalsh.name","Sites Have Changed!",$emailContent,"From: alerts@davidwalsh.name","\r\n");
	// Debug
	echo $emailContent;
}

;
/*$url = 'https://search.naver.com/search.naver?where=news&sm=tab_jum&query=%EB%89%B4%EC%8A%A4';
$html = file_get_html($url);

foreach($html->find('div.article') as $article) {
	$item['title']     = $article->find('div.title', 0)->plaintext;
	$item['intro']    = $article->find('div.intro', 0)->plaintext;
	$item['details'] = $article->find('div.details', 0)->plaintext;
	$articles[] = $item;
}*/
?>