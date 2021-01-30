<?php

// Task 1
echo "Devidable by 3: ";
$value = 0;
$first = true;
while (++$value <= 100) {
    if ($value % 3 == 0) {
        if (!$first) {
            echo ", ";
        }
        echo $value;
        $first = false;
    }
}
echo ".<br><br>";

// Task 2
$value = 0;
do {
    if ($value == 0){
        echo $value . " - ноль.<BR>";
    } else {
        if ($value % 2 == 0) {
            echo $value . " - четное число.<BR>";
        } else {
            echo $value . " - нечетное число.<BR>";
        }
    }
} while ( ++$value <= 10);
echo "<br><br>";

// Task 3
$citiesInRegion = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Сасово", "Ряжск"],
];

foreach ($citiesInRegion as $region => $cities) {
    echo $region . ":<BR>";
    $first = true;
    foreach ($cities as $city) {
        if ($first) {
            $first = false;
        } else {
            echo ", ";
        }
        echo $city;
    }
    echo ".<BR>";
}
echo "<br><br>";

// Task 4
$translit = [
    "а" => "a",
    "б" => "b",
    "в" => "v",
    "г" => "g",
    "д" => "d",
    "е" => "e",
    "ё" => "yo",
    "ж" => "zh",
    "з" => "z",
    "и" => "i",
    "й" => "j",
    "к" => "k",
    "л" => "l",
    "м" => "m",
    "н" => "n",
    "о" => "o",
    "п" => "p",
    "р" => "r",
    "с" => "s",
    "т" => "t",
    "у" => "u",
    "ф" => "f",
    "х" => "h",
    "ц" => "ts",
    "ч" => "ch",
    "ш" => "sh",
    "щ" => "shch",
    "ъ" => "''",
    "ы" => "y",
    "ь" => "'",
    "э" => "e",
    "ю" => "yu",
    "я" => "ya",
];

function transliterate(string $value, array& $translitTable): string {
    $output = "";
    $symNumber = 0;
    while (true) {
        $symbol = mb_substr($value, $symNumber++, 1);
        if (!$symbol) {
            break;
        }
        if (array_key_exists($symbol, $translitTable)) {
            $symbol = $translitTable[$symbol];
        }
        $output .= $symbol;
    }
    return $output;
}

$translitted = transliterate("примерный текст", $translit);
echo $translitted;
echo "<br><br>";

// Task 5
function spaceToUnderline(string $value): string {
    $output = "";
    $symNumber = 0;
    while (true) {
        $symbol = mb_substr($value, $symNumber++, 1);
        if (!$symbol) {
            break;
        }
        if ($symbol == " ") {
            $symbol = "_";
        }
        $output .= $symbol;
    }
    return $output;
}

$translitted = spaceToUnderline("примерный текст", $translit);
echo $translitted;
echo "<br><br>";


// Task 7
for ($value = 0; $value < 10; print($value++ . " ")) {}
echo "<br><br>";


// Task 8
foreach ($citiesInRegion as $region => $cities) {
    echo $region . ":<BR>";
    $first = true;
    foreach ($cities as $city) {
        if (mb_strtolower(mb_substr($city, 0, 1)) == "к") {
            if ($first) {
                $first = false;
            } else {
                echo ", ";
            }
            echo $city;
        }
    }
    if ($first) {
        echo "отсутствуют";
    }
    echo ".<BR>";
}
echo "<br><br>";


// Task 9
function normalizeTextForUrl(string $value, array& $translitTable): string {
    $output = "";
    $symNumber = 0;
    $value = mb_strtolower($value);
    while (true) {
        $symbol = mb_substr($value, $symNumber++, 1);
        if (!$symbol) {
            break;
        }
        if (array_key_exists($symbol, $translitTable)) {
            $symbol = $translitTable[$symbol];
        } elseif ($symbol == " ") {
            $symbol = "_";
        }
        $output .= $symbol;
    }
    return $output;
}

$translitted = normalizeTextForUrl("Примерный текст", $translit);
echo $translitted;
echo "<br><br>";


?>
