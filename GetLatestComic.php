<?php
/*
	HentaiVN.tv API by Nico Levianth - Getting latest comics
	v1.0
	Copyright (C) 2016-2021 HentaiVN.net.
*/

// Allow cross-origin requests
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
// Disable error reporting (why not?)
error_reporting(0);
ini_set('display_errors', 0);
// Get HTML contents from the main website
$html = file_get_contents("https://hentaivn.tv");
$info = [];
$doc = new DomDocument();
// Load HTML contents to an object
$doc->loadHTML($html);
$finder = new DomXPath($doc);
// Querying comic list
$comic_list = $finder->query("//ul[@class='page-item']//li[@class='item']//ul//span[@class='box-description']//a//h2");
$comic_list_chap = $finder->query("//ul[@class='page-item']//li[@class='item']//ul//a//span[@class='info-detail_2']//b");
// Creating JSON object
for ($i = 0; $i < count($comic_list); $i++)
{
    $info[$i]->comic_link = "https://hentaivn.tv" . $finder->evaluate("string(//ul[@class='page-item']//li[@class='item'][" . intval($i + 1) . "]//ul//span[@class='box-description']//a/@href)");
    $info[$i]->comic_name = $comic_list[$i]->textContent . " - " . $comic_list_chap[$i]->textContent;
}
// Returning JSON object
echo json_encode($info);
?>
