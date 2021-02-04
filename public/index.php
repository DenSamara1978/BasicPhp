<?php

require_once "../engine/images.php";
$gallery = photoGallery();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photo gallery</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div id="main">
	    <div class="post_title"><h2>Моя галерея</h2></div>
	    <div class="gallery">
            <?= $gallery ?>
	    </div>
    </div>
</body>
</html>