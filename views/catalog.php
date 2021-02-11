<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div id="main">
	    <div class="post_title"><h2>Каталог товаров</h2></div>
	    <div class="gallery">
        <?php foreach($products as $product) {
                echo '<div class="catalogCard">';
                    echo '<h5>' . $product['title'] . '</h5>';
                    echo '<img src="' . $product["smallPath"] . '" alt="' . $product['title'] .'" />';
                    echo '<p>' . $product['description'] . '</p>';
                    echo '<a href="/product.php?id=' . $product['id'] . '" class="productButton">Подробнее</a>';
                echo '</div>';
            } ?>
	    </div>
    </div>
</body>
</html>