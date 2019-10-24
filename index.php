<?php
// BEGIN: Lesson 2
echo '<h2><b>' . 'Lesson 2: The Basics' . '</b></h2>';

echo '<hr><br>';


// BEGIN: Lesson 2. Task 1. Comments

echo '<b>' . 'Task 1. Comments' . '</b><br><br>';

/*
 * 23 October 2019 year
 */

// Vitaliy

echo 'Hello World!';

// END: Lesson 2. Task 1. Comments


echo '<br><br><hr><br>';


// BEGIN: Lesson 2. Task 2. Variable naming

echo '<b>' . 'Task 2. Variable naming' . '</b><br><br>';

$channelName = 'CNN';

$manufacturerAddress = 'Ukraine, Kiev, st. Kovelskaya, 2';

$carColor = 'blue';

$waterTemperature = '36 C';

$phoneModel = 'Meizu M5 Note';

echo '$channelName<br>';
echo '$manufacturerAddress<br>';
echo '$carColor<br>';
echo '$waterTemperature<br>';
echo '$phoneModel<br>';

// END: Lesson 2. Task 2. Variable naming


echo '<br><hr><br>';


// BEGIN: Lesson 2. Task 3: Operators

echo '<b>' . 'Task 3: Operators' . '</b><br><br>';

$one = 3;
$two = 5;
$three = 8;

$count = $one + $two + $three;

echo $count . '<br>';

echo $result = 2 + 6 + 2 / 5 - 1 . '<br>';

// END: Lesson 2. Task 3: Operators


echo '<br><hr><br>';


// BEGIN: Lesson 2. Task 4: Copy values and copy values by reference

echo '<b>' . 'Task 4: Copy values and copy values by reference' . '</b><br><br>';

$a = 1;
$b = 2;

echo 'variable $a=' . $a . '<br>';
echo 'variable $b=' . $b . '<br>';

$c = $a;
$d = &$b;

echo 'variable $c=' . $c . '<br>';
echo 'variable $d=' . $d . '<br><br>';

$a = 3;
$b = 4;

echo 'variable $a=' . $a . '<br>';
echo 'variable $b=' . $b . '<br>';
echo 'variable $c=' . $c . '<br>';
echo 'variable $d=' . $d . '<br>';

// END: Lesson 2. Task 4: Copy values and copy values by reference


echo '<br><hr><br>';


// BEGIN: Lesson 2. Task 5: Constant

echo '<b>' . 'Task 5: Constant' . '</b><br><br>';

define('TEST1', 41);
define('TEST2', 33);

echo $result = TEST1 + TEST2 . '<br>';


// END: Lesson 2. Task 5: Constant
// END: Lesson 2


echo '<br><hr><br>';


// BEGIN: Урок 3: Типы данных

echo '<h2><b>' . 'Урок 3: Типы данных' . '</b></h2>';

echo '<hr><br>';

// BEGIN: Урок 3. Задача 1: Типы переменных

echo '<b>' . 'Задача 1: Типы переменных' . '</b><br><br>';

$a = 152;
$b = '152';
$c = 'London';
$d = array(152);
$e = 15.2;
$f = false;
$g = true;

echo 'Type of variable $a - ' . gettype($a) . '<br>';
echo 'Type of variable $b - ' . gettype($b) . '<br>';
echo 'Type of variable $c - ' . gettype($c) . '<br>';
echo 'Type of variable $d - ' . gettype($d) . '<br>';
echo 'Type of variable $e - ' . gettype($e) . '<br>';
echo 'Type of variable $f - ' . gettype($f) . '<br>';
echo 'Type of variable $g - ' . gettype($g) . '<br>';

// END: Урок 3. Задача 1: Типы переменных


echo '<br><hr><br>';


// BEGIN: Урок 3. Задача 2: Работа со строками и переменны

echo '<b>' . 'Задача 2: Работа со строками и переменны' . '</b><br><br>';

$a = 10;
$b = 5;

echo 'Дано: a = ' . $a . ', b = ' . $b . '<br>';
echo 'Результат: ' . $b . ' из ' . $a . 'ти студентов посетили лекцию.' . '<br>';

echo "Дано: a = $a , b = $b" . "<br>";
echo "Результат: $b из {$a}ти студентов посетили лекцию." . "<br>";

// END: Урок 3. Задача 2: Работа со строками и переменны


echo '<br><hr><br>';


// BEGIN: Урок 3. Задача 3: Работа со строками и переменны

echo '<b>' . 'Задача 3: Работа со строками и переменны' . '</b><br><br>';

$a = 'Доброе утро';
$b = 'дамы';
$c = 'и господ';

echo $a . ', ' . $b . ' ' . $c . '<br>';

$string1 = " и господ";
$string2 = " дамы";
$string3 = "Доброе утро,";

$result = $string3;
$result .= $string2;
$result .= $string1;

echo $result;

// END: Урок 3. Задача 3: Работа со строками и переменны


echo '<br><hr><br>';


// BEGIN: Урок 3. Задача 4: Работа с массивами

echo '<b>' . 'Задача 4: Работа с массивами' . '</b><br><br>';

$a = array('test1.1', 'test1.2', 'test1.3', 'test1.4', 'test1.5',);
$b = ['test2.1', 'test2.2', 'test2.3', 'test2.4', 'test2.5',];

$a += ['el' => 'ogo'];
$a['element'] = 60;

unset($b[0]);

echo $a[2] . '<br>';
echo $b[2] . '<br>';

echo '<pre>';
print_r($a);
echo '</pre>';

echo '<pre>';
print_r($b);
echo '</pre>';

echo 'Массив $a имеет ' . count($a) . ' елементов<br>';
echo 'Массив $b имеет ' . count($b) . ' елементов<br>';

// END: Урок 3. Задача 4: Работа с массивами
// END: Урок 3: Типы данных


echo '<br><hr><br>';


// BEGIN: Урок 4: Условный оператор

echo '<h2><b>' . 'Урок 4: Условный оператор' . '</b></h2>';

echo '<hr><br>';


// BEGIN: Урок 4. Задача 1: Вхождение числа в диапазон

echo '<b>' . 'Задача 1: Вхождение числа в диапазон' . '</b><br><br>';

define('MIN', 10);
define('MAX', 50);

$x = 50;

if ($x == MIN or $x == MAX) {
    echo '+-<br>';
} elseif ($x < MIN or $x > MAX) {
    echo '-<br>';
} else {
    echo '+<br>';
}

// END: Урок 4. Задача 1: Вхождение числа в диапазон


echo '<br><hr><br>';


// BEGIN: Урок 4. Задача 2: Квадратное уравнение

echo '<b>' . 'Задача 2: Квадратное уравнение' . '</b><br><br>';

$a = 1;
$b = 6;
$c = 2;

$d = pow($b, 2) - (4 * $a * $c);

if ($d > 0) {
    echo 'x1 = ' . (-$b - sqrt($d)) / (2 * $a);
    echo '<br>';
    echo 'x2 = ' . (-$b + sqrt($d)) / (2 * $a);
} elseif ($d == 0) {
    echo 'x = ' . -$b / (2 * $a);
} else {
    echo 'Нет корней';
}

// END: Урок 4. Задача 2: Квадратное уравнение


echo '<br><hr><br>';


// BEGIN: Урок 4. Задача 3: Равенство чисел

echo '<b>' . 'Задача 3: Равенство чисел' . '</b><br><br>';

$a = 6;
$b = 5;
$c = 8;
echo "а = $a" . '<br>';
echo "b = $b" . '<br>';
echo "c = $c" . '<br>';

if ($a == $b || $a == $c || $b == $c) {
    echo 'Ошибка, два или бальше одинаковых значения';
} else {
    if (($a > $b && $a < $c) || ($a > $c && $a < $b)) {
        echo "Среднее число: а = $a";
    } elseif (($b > $a && $b < $c) || ($b > $c && $b < $a)) {
        echo "Среднее число: b = $b";
    } else {
        echo "Среднее число: c = $c";
    }
}

// END: Урок 4. Задача 3: Равенство чисел
// END: Урок 4: Условный оператор


echo '<br><hr><br>';


// BEGIN: Урок 5: Циклы

echo '<h2><b>' . 'Урок 5: Циклы' . '</b></h2>';

echo '<hr><br>';


// BEGIN: Урок 5. Задача 1: Сумма чисел

echo '<b>' . 'Задача 1: Сумма чисел' . '</b><br><br>';


for ($i = 1; $i <= 25; $i++) {
    $sum1 += $i;
}

echo "1) Сумма: $sum1 <br>";


$k = 1;

while ($k <= 25) {
    $sum2 += $k;
    $k++;
}

echo "2) Сумма: $sum2 <br>";

// END: Урок 5. Задача 1: Сумма чис


echo '<br><hr><br>';


// BEGIN: Урок 5. Задача 2: Квадраты чисел

echo '<b>' . 'Задача 2: Квадраты чисел' . '</b><br>';

define('N', 200);

echo "<h4>Программа находит числа, квадраты которых не больше " . N . "</h4>";

for ($i = 1; N > ($k = $i * $i); $i++) {
    echo "Число $i. Его квадрат: {$k}";
    echo '<br>';
}

// END: Урок 5. Задача 2: Квадраты чисел


echo '<br><hr><br>';


// BEGIN: Урок 5. Задача 3: Меню на сай

echo '<b>' . 'Задача 3: Меню на сай' . '</b><br>';

$menu = ['Кнопка 10', 'Кнопка 5', 'Кнопка 9', 'Кнопка 4', 'Кнопка 8', 'Кнопка 3', 'Кнопка 7', 'Кнопка 2', 'Кнопка 6', 'Кнопка 1',];

natsort($menu);

echo '<ul>';
foreach ($menu as $value) {
    echo "<li><a href=\"#\">$value</a></li>";
}
echo '</ul>';

// END: Урок 5. Задача 3: Меню на сай
// END: Урок 5: Циклы


echo '<br><hr><br>';


// BEGIN: Урок 6: Пользовательские функции

echo '<h2><b>' . 'Урок 6: Пользовательские функции' . '</b></h2>';

echo '<hr><br>';


// BEGIN: Урок 6. Задача 1: Информация о товарах в корзине

echo '<b>' . 'Задача 1: Информация о товарах в корзине' . '</b><br><br>';

$products = array(
    array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
    array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
    array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
);

function totalPrice($products)
{
    $totalPrice = 0;
    $totalQuantity = 0;

    foreach ($products as $product) {
        $totalQuantity += $product['quantity'];
        $totalPrice += $product['price'] * $product['quantity'];
    }

    return array('totalQuantity' => $totalQuantity, 'totalPrice' => $totalPrice);
}

$products = totalPrice($products);

echo "Общая сумма покупок равна $ {$products['totalPrice']} <br>";
echo "Общее количество выбранных товаров {$products['totalQuantity']} <br>";


// END: Урок 6. Задача 1: Информация о товарах в корзине


echo '<br><hr><br>';


// BEGIN: Урок 6. Задача 2: Квадратное уравнение

echo '<b>' . 'Задача 2: Квадратное уравнение' . '</b><br><br>';

$a = 1;
$b = 6;
$c = 2;

function quote($a, $b, $c)
{
    $d = pow($b, 2) - (4 * $a * $c);

    if ($d > 0) {
        $x1 = (-$b - sqrt($d)) / (2 * $a);
        $x2 = (-$b + sqrt($d)) / (2 * $a);
        $result = [$x1, $x2];

        echo '<pre>';
        print_r($result);
        echo '</pre>';

    } elseif ($d == 0) {
        $x = -$b / (2 * $a);
        $result = [$x];

        echo '<pre>';
        print_r($result);
        echo '</pre>';

    } else {
        echo 'False';
    }
}

quote($a, $b, $c);

// END: Урок 6. Задача 2: Квадратное уравнение


echo '<br><hr><br>';


// BEGIN: Урок 6. Задача 3: Удаление отрицательных элементов из массива (вариант 1)

echo '<b>' . 'Задача 3: Удаление отрицательных элементов из массива (вариант 1)' . '</b><br><br>';

$digits = array(2, -10, -2, 4, 5, 1, 6, 200, 1.6, 95);

echo '<pre>';
print_r($digits);
echo '</pre>';

function deleteNegtives($digits)
{
    $digits;
    foreach ($digits as $key => $digit) {
        if ($digit < 0) {
            unset($digits[$key]);
        }
    }
    return $digits;
}

$digits = deleteNegtives($digits);

echo '<pre>';
print_r($digits);
echo '</pre>';

// END: Урок 6. Задача 3: Удаление отрицательных элементов из массива (вариант 1)


echo '<br><hr><br>';


// BEGIN: Урок 6. Задача 4: Удаление отрицательных элементов из массива (вариант 2) (передача по ссылку)

echo '<b>' . 'Задача 4: Удаление отрицательных элементов из массива (вариант 2)' . '</b><br><br>';

$digits2 = array(2, -10, -2, 4, 5, 1, 6, 200, 1.6, 95);

echo '<pre>';
print_r($digits2);
echo '</pre>';

function deleteNegtives2(&$digits2)
{
    foreach ($digits2 as $key => $digit) {
        if ($digit < 0) {
            unset($digits2[$key]);
        }
    }
}

deleteNegtives2($digits2);

echo '<pre>';
print_r($digits2);
echo '</pre>';

// END: Урок 6. Задача 4: Удаление отрицательных элементов из массива (вариант 2)