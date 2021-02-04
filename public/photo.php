<?php

require_once "../engine/images.php";

$photoId = $_GET["id"];
$result = image($photoId);
$photo = $result["output"];
$photoName = $result["name"];
$photoViews = $result["views"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photo gallery - <?= $photoName ?> </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div id="main">
	    <div class="post_title"><h2>Моя галерея - <?= $photoName ?></h2></div>
	    <div class="photo">
            <?= $photo ?>
	    </div>
	    <div class="post_views"><h2>Просмотров - <?= $photoViews ?></h2></div>
    </div>
</body>
</html>