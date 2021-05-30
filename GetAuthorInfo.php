<?php

/*
	HentaiVN.tv API by Nico Levianth - Getting author info
	v1.0
	Copyright (C) 2016-2021 HentaiVN.net.
*/
// Allow cross-origin requests
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
if ($_GET["id"])
{
	// Disable error-reporting
    error_reporting(0);
    ini_set('display_errors', 0);
	if (isset($_GET["page"])) $page = "?page=" . $_GET["page"];
	else $page = "";
	// Get HTML contents from the website
    $html = file_get_contents("https://hentaivn.tv/tacgia=" . $_GET["name"] . ".html" . $page);
	// Create objects
    $doc = new DomDocument();
    $info = new stdClass();
    $doc->loadHTML($html);
    $finder = new DomXPath($doc);
	// Processing HTML contents
    $nodes = $finder->query("//h1[@class='bar-title']");
    $display_name = strtok(substr($nodes[0]->textContent, 21) , "▼");
    $info->display_name = substr($display_name, 0, strlen($display_name) - 1);
    $content_length = $finder->query("//li[contains(@class, 'item')]");
	// Get comic list
	if (count($content_length)) {
		for ($i = 0; $i < count($content_length); $i++)
		{
			$content = $finder->query("//li[contains(@class, 'item')][" . intval($i + 1) . "]//div[contains(@class, 'box-description')][1]");
			if (strpos($content[0]->textContent, "Tên Khác:") !== false)
			{
				$tags = $finder->query("//li[contains(@class, 'item')][" . intval($i + 1) . "]//div[contains(@class, 'box-description')][1]//p[3]//span//a[contains(@class, 'tag')][1]");
			}
			else
			{
				$tags = $finder->query("//li[contains(@class, 'item')][" . intval($i + 1) . "]//div[contains(@class, 'box-description')][1]//p[2]//span//a[contains(@class, 'tag')][1]");
			}
			$tagsArr = [];
			for ($j = 0;$j < count($tags);$j++)
			{
				array_push($tagsArr, $tags[$j]->textContent);
			}
			$info->comics[$i]->tags = $tagsArr;
			$info->comics[$i]->comic_link = "https://hentaivn.tv" . $finder->evaluate("string(//li[contains(@class, 'item')][" . intval($i + 1) . "]//div[@class='box-description']//p[@style='font-size: 18px; line-height: 22px;']//a/@href)");
			$comic = $finder->query("//li[contains(@class, 'item')][" . intval($i + 1) . "]//div[@class='box-description']//p[@style='font-size: 18px; line-height: 22px;']");
			$info->comics[$i]->comic_name = substr($comic[0]->textContent, 1);
		}
	}
	else $info->comics = [];
	// Displaying JSON object
    if ($info->display_name == null) echo '{"error": "Author is invalid"}';
    else
    {
        echo json_encode($info);
    }
}
else
{
    echo '{"error": "Author ID is invalid"}';
}
?>
