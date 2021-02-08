<?php

require_once "../engine/images.php";

$image = getImageById($_GET["id"]);

include_once "../views/photo.php";

?>

