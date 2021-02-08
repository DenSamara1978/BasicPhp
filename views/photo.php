<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photo gallery - <?= $image['name'] ?> </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div id="main">
	    <div class="post_title"><h2>Моя галерея - <?= $image['name'] ?></h2></div>
	    <div class="photo">
            <img src="<?= $image["originalPath"] ?>" alt="<?= $image['name'] ?>" />;
	    </div>
	    <div class="post_views"><h2>Просмотров - <?= $image['views'] ?></h2></div>
    </div>
</body>
</html>