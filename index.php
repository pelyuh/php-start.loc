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

echo $result = 2+6+2/5-1 . '<br>';

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


// BEGIN: Lesson 3

echo '<h2><b>' . 'Lesson 3. Data type' . '</b></h2>';

echo '<hr><br>';

// BEGIN: Lesson 3. Task 1. Variables types

echo '<b>' . 'Task 1. Variables types' . '</b><br><br>';

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

// END: Lesson 3. Task 1. Variables types


echo '<br><hr><br>';


// BEGIN: Lesson 3. Task 2. Work with strings and variables

echo '<b>' . ' Task 2. Work with strings and variables' . '</b><br><br>';

$a = 10;
$b = 5;

echo 'Дано: a = ' . $a . ', b = ' . $b . '<br>';
echo 'Результат: ' . $b .' из ' . $a . 'ти студентов посетили лекцию.' . '<br>';

echo "Дано: a = $a , b = $b" . "<br>";
echo "Результат: $b из {$a}ти студентов посетили лекцию." . "<br>";

// END: Lesson 3. Task 2. Work with strings and variables


echo '<br><hr><br>';


// BEGIN: Lesson 3. Task 3. Work with strings and variables

echo '<b>' . ' Task 3. Work with strings and variables' . '</b><br><br>';

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

// END: Lesson 3. Task 3. Work with strings and variables


echo '<br><hr><br>';


// BEGIN: Lesson 3. Task 4. Work with arrays

echo '<b>' . ' Task 4. Work with arrays' . '</b><br><br>';

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

// END: Lesson 3. Task 4. Work with arrays


echo '<br><hr><br>';
