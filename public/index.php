<?php

require_once "../engine/images.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div id="main">
	    <div class="post_title"><h2>Моя галерея</h2></div>
	    <div class="gallery">
            <?= photoGallery("./"); ?>
	    </div>
    </div>
</body>
</html>