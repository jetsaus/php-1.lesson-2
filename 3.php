<?php
/*
 * Задача №3
 *
 * Реализуйте основные 4 арифметические операции (+, -, *, /) в виде функций с
 * двумя параметрами. Обязательно используйте оператор return.
 */
    /*
     * Реализация функций
     */
    // Сложение
    function Addition($x = 0, $y = 0)
    {
        return ($x + $y);
    }
    // Вычитание
    function Substruction($x = 0, $y = 0)
    {
        return ($x - $y);
    }
    // Умножение
    function Multiplication($x = 0, $y = 0)
    {
        return ($x * $y);
    }
    // Деление
    function Division($x = 0, $y = 1)
    {
        if($y == 0) {
            echo('На \'0\' делить нельзя!');
        }else{
            return ($x / $y);
        }
    }

    // Вывод "шапки"
    echo ('<h4>Задание 3:</h4>');
    echo('<hr>');
    echo <<<TXT
        Реализуйте основные 4 арифметические операции (+, -, *, /) в виде функций с
        двумя параметрами. Обязательно используйте оператор return.
    TXT;
    echo('<hr>');
    echo <<<TXT
            Для корректного вызова в адресной строке открывшегося окна браузера необходимо ввести данные,
            например - "http://{url}/3.php?x=16&y=3"
    TXT;
    echo('<br>');

    // Передача параметров с проверкой на их наличие, т.е. то, что эти параметры были переданы скрипту через браузер
    if (empty($_GET['x'])) {
        $x = 0;
    } else {
        $x = $_GET['x'];
    }
    if (empty($_GET['y'])) {
        $y = 0;
    } else {
        $y = $_GET['y'];
    }

    echo ('$x = ' . "$x<br>");
    echo ('$y = ' . "$y<br>");
    echo ('<br>');


    /*
     * Вызов функций
     * */
    echo ("$x + $y = ");echo Addition($x, $y);echo ("<br>");
    echo ("$x - $y = ");echo Substruction($x, $y);echo ("<br>");
    echo ("$x * $y = ");echo Multiplication($x, $y);echo ("<br>");
    echo ("$x / $y = ");echo Division($x, $y);echo ("<br>");
?>
