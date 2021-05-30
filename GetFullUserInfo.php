<?php
/*
	HentaiVN.tv API by Nico Levianth - Getting user information
	v1.0
	Copyright (C) 2016-2021 HentaiVN.net.
*/
// Allow cross-origin request
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
if ($_GET["id"])
{
    // Disable error reporting (why not?)
    error_reporting(0);
    ini_set('display_errors', 0);
    // Get HTML contents from the website
    $html = file_get_contents("https://hentaivn.tv/user-" . $_GET["id"]);
    $info = new stdClass();
    // Create objects
    $doc = new DomDocument();
    $doc->loadHTML($html);
    $finder = new DomXPath($doc);
    // Process HTML contents to objects
    $nodes = $finder->query("//*[contains(@class, 'wall-name')]//h2");
    $info->display_name = $nodes[0]->textContent;
    // Check if user is valid
    if ($info->display_name == null) echo '{"error": "Invalid user"}';
    else
    {
        // Get user avatar
        $info->avatar = $finder->evaluate("string(//div[@class='wall-avatar']//img/@src)");
        $information = $finder->query("//*[contains(@class, 'wall-name')]");
        // Get the additional information
        $info->additional_info = $information[0]->textContent;
        $infoData = $finder->query("//*[contains(@class, 'info-row')]//div[contains(@class, 'col-2')]");
        if (strpos($html, "Thành viên nhóm:") || strpos($html, "Trưởng nhóm:"))
        {
            $info->group = $infoData[0]->textContent;
            $info->gender = $infoData[1]->textContent;
            $info->birth_date = $infoData[2]->textContent;
            $info->joined = $infoData[3]->textContent;
            $info->comments = $infoData[4]->textContent;
            $info->likes = $infoData[5]->textContent;
            $info->yen = $infoData[6]->textContent;
            $info->introduction = $infoData[8]->textContent;
        }
        else
        {
            $info->group = "none";
            $info->gender = $infoData[0]->textContent;
            $info->birth_date = $infoData[1]->textContent;
            $info->joined = $infoData[2]->textContent;
            $info->comments = $infoData[3]->textContent;
            $info->likes = $infoData[4]->textContent;
            $info->yen = $infoData[5]->textContent;
            $info->introduction = $infoData[7]->textContent;
        }
        $content = $finder->query("//*[contains(@class, 'item remove_')][1]//div[contains(@class, 'box-description')][1]");
		// Check whether the user has latest comic or not
        $comic_list = $finder->query("//*[contains(@class, 'item remove_')]//div[contains(@class, 'box-description')]//h2");
        if (substr($comic_list[0]->textContent, 1))
        {
			if (strpos($content[0]->textContent, "Tên Khác:") !== false)
			{
				$tags = $finder->query("//*[contains(@class, 'item remove_')][1]//div[contains(@class, 'box-description')][1]//p//span//a[contains(@class, 'tag')][1]");
			}
			else
			{
				$tags = $finder->query("//*[contains(@class, 'item remove_')][1]//div[contains(@class, 'box-description')][1]//p//span//a[contains(@class, 'tag')][1]");
			}
			$tagString = "";
			for ($i = 0;$i < count($tags);$i++)
			{
				$tagString = $tagString . '' . $tags[$i]->textContent . ', ';
			}
            $info->latest_comic = substr($comic_list[0]->textContent, 1);
            $info->tags = substr($tagString, 0, strlen($tagString) - 2);
            $info->comic_link = "https://hentaivn.tv" . $finder->evaluate("string(//*[contains(@class, 'item remove_')]//div[contains(@class, 'box-description')]//h2//a/@href)");
        }
		// Return the JSON object
        echo json_encode($info);
    }
}
else
{
	// Return the error
    echo '{"error": "Invalid user ID"}';
}
?>
