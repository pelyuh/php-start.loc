<?php
echo '<b>' . 'Lesson 2: The Basics' . '</b>';

echo '<br><br><hr><br>';


// BEGIN: Task 1. Comments

echo '<b>' . 'Task 1. Comments' . '</b><br><br>';

/*
 * 23 October 2019 year
 */

// Vitaliy

echo 'Hello World!';

// END: Task 1. Comments


echo '<br><br><hr><br>';


// BEGIN: Task 2. Variable naming

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

// END: Task 2. Variable naming


echo '<br><hr><br>';


// BEGIN: Task 3: Operators

echo '<b>' . 'Task 3: Operators' . '</b><br><br>';

$one = 3;
$two = 5;
$three = 8;

$count = $one + $two + $three;

echo $count . '<br>';

echo $result = 2+6+2/5-1 . '<br>';

// END: Task 3: Operators


echo '<br><hr><br>';


// BEGIN: Task 4: Copy values and copy values by reference

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

// END: Task 4: Copy values and copy values by reference


echo '<br><hr><br>';




