<?php

switch ($_POST['operation']){
    case "addition":
        $result = $_POST['arg1'] + $_POST['arg2'];
        break;
    case "subtraction":
        $result = $_POST['arg1'] - $_POST['arg2'];
        break;
    case "multiplication":
        $result = $_POST['arg1'] * $_POST['arg2'];
        break;
    case "division":
        if ($_POST['arg2']) {
            $result = $_POST['arg1'] / $_POST['arg2'];
        } else {
            $error = 1;
        }
        break;
}

include_once "../views/calculator.php";
?>
