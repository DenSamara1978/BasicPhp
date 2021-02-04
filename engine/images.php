<?php

require_once "../db/dbConnection.php";

function photoGallery() : string {
    $dbConnection = connectDB();
    $output = "";
    if ($dbConnection) {
        $sql = "SELECT * FROM photos ORDER BY views DESC";
        if ($result = mysqli_query($dbConnection, $sql)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $output .= '<a rel="gallery" class="photo" href="photo.php?id=' . $row["id"] . '" target="_blank"><img src="' . $row["smallPath"] . '" alt="' . $row["name"] . '" /></a>';
            }
            mysqli_free_result($result);
        }
    } else {
        $output .= "Database error!";
    }
    return $output;
}

function image(int $photoId) : array {
    $dbConnection = connectDB();
    $output = "";
    $photoName = "";
    $views = 0;
    if ($dbConnection) {
        $sql = "SELECT * FROM photos WHERE id = " . $photoId;
        if ($result = mysqli_query($dbConnection, $sql)) {
            $row = mysqli_fetch_assoc($result);
            $output .= '<img src="' . $row["originalPath"] . '" alt="' . $row["name"] . '" />';
            $photoName = $row["name"];
            $views = $row["views"];
            mysqli_free_result($result);
        }

        $sql = "UPDATE photos SET views = " . ($views + 1) . " WHERE id = " . $photoId;
        var_dump($sql);
        mysqli_query($dbConnection, $sql);
    } else {
        $output .= "Database error!";
    }
    return ["output" => $output, "name" => $photoName, "views" => $views];
}

?>
