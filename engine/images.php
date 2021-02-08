<?php

require_once "dbConnection.php";

function getPhotoGallery() {
    return sqlQueryAllRecords("SELECT * FROM photos ORDER BY views DESC");
}

function getImageById(int $photoId) {
    $image = sqlQueryOneRecord("SELECT * FROM photos WHERE id = " . $photoId);
    if ($image) {
        sqlExecute("UPDATE photos SET views = " . ($image['views'] + 1) . " WHERE id = " . $photoId);
    }
    return $image;
}

?>
