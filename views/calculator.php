<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div id="main">
	    <div class="post_title"><h2>Калькулятор</h2></div>
	    <div class="gallery">
            <form method="post">
                <h3>Аргумент 1</h3>
                <input type="text" name="arg1">
                <h3>Аргумент 2</h3>
                <input type="text" name="arg2">
                <h3>Результат</h3>
                <input type="text" name="result" readonly <?= $error ? "value=\"Ошибка!\"" : ($result ? "value=" . $result : "") ?> >
                <ul>
                    <li><input type="radio" name="operation" value="addition">Сложение</li>
                    <li><input type="radio" name="operation" value="subtraction">Вычитание</li>
                    <li><input type="radio" name="operation" value="multiplication">Умножение</li>
                    <li><input type="radio" name="operation" value="division">Деление</li>
                </ul>
                <input type="submit" value="Расчитать">
            </form>
	    </div>
    </div>
</body>
</html>