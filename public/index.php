<?php

// Task 1
$a = 100;
$b = 102;

if (($a < 0) && ($b < 0)) {
    echo $a * $b;
} else if (($a >= 0) && ($b >= 0)) {
    echo $a - $b;
} else {
    echo $a + $b;
}

// Task 3
function add(int $arg1, int $arg2) : int {
    return $arg1 + $arg2;
};

function sub(int $arg1, int $arg2) : int {
    return $arg1 - $arg2;
};

function mul(int $arg1, int $arg2) : int {
    return $arg1 * $arg2;
}

function div(int $arg1, int $arg2) : int {
    return $arg1 / $arg2;
}

// Task 4
function mathOperation(int $arg1, int $arg2, string $operation): int {
    switch ($operation) {
        case "add":
            return add($arg1, $arg2);
            break;
        case "sub":
            return sub($arg1, $arg2);
            break;
        case "mul":
            return mul($arg1, $arg2);
            break;
        case "div":
            return div($arg1, $arg2);
            break;
    }
}

// Task 5

$year = date('Y');
echo "<h1>Title</h1>";
echo "<footer>{$year}</footer>";


// Task 6
function myPow(int $arg, int $pow): int {
    if ($pow < 0) {
        return 0;
    }
    if ($pow == 0) {
        return 1;
    }
    return $arg * myPow($arg, $pow - 1);
}

$pow23 = myPow(2, 3);
echo "2 ** 3 = {$pow23}";

?>
