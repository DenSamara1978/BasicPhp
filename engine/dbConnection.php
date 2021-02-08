<?php

include_once __DIR__ . "/../config/db.php";

function connectDB() {
    static $dbConnection;
    if (is_null($dbConnection)) {
        $dbConnection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
    }
    return $dbConnection;
}

function sqlQueryAllRecords(string $sql) {
    $result = mysqli_query(connectDB(), $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function sqlQueryOneRecord(string $sql) {
    return sqlQueryAllRecords($sql)[0];
}

function sqlExecute(string $sql) {
    mysqli_query(connectDB(), $sql);
}

?>
