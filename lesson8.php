<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 8</title>
</head>
<body>
<section>
    <div>
        <p>Урок 8. Задача 1: Использование форм #1</p>
    </div>
    <a href="index.php">Back</a>
</section>
<section>
    <br>
    <form action="lesson8.php" method="post">
        <lable for="a">A:</lable>
        <input id="a" type="text" name="a"><br><br>
        <lable for="b">B:</lable>
        <input id="b" type="text" name="b"><br><br>
        <lable for="c">C:</lable>
        <input id="c" type="text" name="c"><br><br>
        <lable for="d">D:</lable>
        <input id="d" type="text" name="d"><br><br>
        <lable for="e">E:</lable>
        <input id="e" type="text" name="e"><br><br>
        <lable for="f">F:</lable>
        <input id="f" type="text" name="f"><br><br>
        <lable for="g">G:</lable>
        <input id="g" type="text" name="g"><br><br>
        <input type="submit" name="submit" value="Отправить">
    </form>
</section>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
    $c = intval($_POST['c']);
    $d = intval($_POST['d']);
    $e = intval($_POST['e']);
    $f = intval($_POST['f']);
    $g = intval($_POST['g']);

    $result = array($a, $b, $c, $d, $e, $f, $g);

    echo "Вы отправили: A = $a, B = $b, C = $c, D = $d, E = $e, F = $f, G = $g" . '<br>';
    echo "Наименьшее значение = ";
    echo min($result) . '<br>';
    echo "Наибольшее значение = ";
    echo max($result) . '<br>';
    echo "Среднее арифметическое значение =  ";
    echo ($a + $b + $c + $d + $e + $f + $g) / 7;
}
