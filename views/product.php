<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog - <?= $product['title'] ?> </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div id="main">
	    <div class="post_title"><h2><?= $product['title'] ?></h2></div>
	    <div class="productCard">
            <p><?= $product['description'] ?></p>
            <img src="<?= $product["originalPath"] ?>" alt="<?= $product['title'] ?>" />
	    </div>
    </div>
</body>
</html>