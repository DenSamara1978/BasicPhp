<?php

function photoGallery(string $path) {
    $fileList = scandir($path . "imgSmall");
    foreach ($fileList as $file) {
        if (is_file("../public/imgSmall/" . $file)) {
		    echo '<a rel="gallery" class="photo" href="imgBig/' . $file . '" target="_blank"><img src="imgSmall/' . $file . '" alt="photo" /></a>';
        }
    }
}

?>
