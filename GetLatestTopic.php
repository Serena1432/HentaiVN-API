<?php
/*
	HentaiVN.tv API by Nico Levianth - Getting latest forum topics
	v1.0
	Copyright (C) 2016-2021 HentaiVN.net.
*/
// Allow cross-origin requests
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
// Disable error reporting (why not?)
error_reporting(0);
ini_set('display_errors', 0);
// Get HTML contents from the forum website
$html = file_get_contents("https://hentaivn.tv/forum/");
// Create objects
$info = [];
$doc = new DomDocument();
$doc->loadHTML($html);
$finder = new DomXPath($doc);
// Query the topic list
$topic_list = $finder->query("//tbody[@class='statused'][1]//tr[2]//td[@class='double']//ol[@class='olList']//li[@class='link_visit']//a[1]");
$topic_list_type = $finder->query("//tbody[@class='statused'][1]//tr[2]//td[@class='double']//ol[@class='olList']//li[@class='link_visit']//a[1]//span");
// Create JSON object
for ($i = 0;$i < count($topic_list);$i++)
{
    $info[$i]->topic_type = str_replace(array(
        "\n",
        "\r"
    ) , '', $topic_list_type[$i]->textContent);
    $i2 = intval($i) + 1;
    $info[$i]->topic_link = "https://hentaivn.tv" . $finder->evaluate("string(//tbody[@class='statused'][1]//tr[2]//td[@class='double']//ol[@class='olList']//li[@class='link_visit'][" . ($i + 1) . "]//a/@href)");
    $topicName = str_replace(array(
        "\n",
        "\r"
    ) , '', $topic_list[$i]->textContent);
    $info[$i]->topic_name = substr($topicName, strlen($info[$i]->topic_type) + 1);
	$info[$i]->topic_last_reply = str_replace(array("\n", "\r"), '', $finder->query("//tbody[@class='statused'][1]//tr[2]//td[@class='double']//ol[@class='olList']//li[@class='link_visit'][" . $i2 . "]//a[@class='lastRight']//span//strong")[0]->textContent);
}
// Return JSON object
echo json_encode($info);
?>
