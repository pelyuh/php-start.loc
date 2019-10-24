<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 8 Task 2</title>
</head>
<body>
<section>
    <div>
        <p>Урок 8. Задача 2: Использование форм #2</p>
    </div>
    <a href="index.php">Back</a>
</section>
<section>
    <br>
    <form action="lesson8_task2.php" method="post">
        <lable for="name">Name:</lable>
        <input id="name" type="text" name="name"><br><br>
        <lable for="gender">Gender:</lable>
        <br>
        <input id="gender" type="radio" name="gender" value="man" title="Man" checked>Man<br>
        <input id="gender" type="radio" name="gender" value="woman" title="Woman">Woman<br><br>
        <input type="submit" name="submit" value="Отправить">
    </form>
</section>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    if ($_POST['gender'] == 'man') {
        echo "Добро пожаловать, мистер {$_POST['name']}!";
    } else {
        echo "Добро пожаловать, миссис {$_POST['name']}!";
    }
}
