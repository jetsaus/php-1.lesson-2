<?php
/*
 * Задача №2
 *
 * Присвойте переменной $а значение в промежутке [0..15].
 * С помощью оператора switch организуйте вывод чисел от $a до 15
 */
    echo ('<h4>Задание 2:</h4>');
    echo('<hr>');
    echo '<p>
            Присвойте переменной \$а значение в промежутке [0..15].
            С помощью оператора switch организуйте вывод чисел от \$a до 15
          </p>';
    echo('<hr>');
    echo '<p>
            Для корректного вызова в адресной строке открывшегося окна браузера необходимо ввести данные,
            например - "http://{url}/2.php?a=7"
          </p>';

    // Передача параметров с проверкой на их наличие, т.е. то, что эти параметры были переданы скрипту через браузер
    $a = $_GET['a'] ?? 0;
    
    echo ('$a = ' . "$a<br>");
    echo ('<br>');
    // Проверим вхождение переменной в диапазон 0..15
    if(($a >= 0) && ($a <= 15)) {
        echo('Вывод значений от $a до 15:<br>');
        switch ($a) {
            case 0:
                echo('$a = ' . "0<br>");
            case 1:
                echo('$a = ' . "1<br>");
            case 2:
                echo('$a = ' . "2<br>");
            case 3:
                echo('$a = ' . "3<br>");
            case 4:
                echo('$a = ' . "4<br>");
            case 5:
                echo('$a = ' . "5<br>");
            case 6:
                echo('$a = ' . "6<br>");
            case 7:
                echo('$a = ' . "7<br>");
            case 8:
                echo('$a = ' . "8<br>");
            case 9:
                echo('$a = ' . "9<br>");
            case 10:
                echo('$a = ' . "10<br>");
            case 11:
                echo('$a = ' . "11<br>");
            case 12:
                echo('$a = ' . "12<br>");
            case 13:
                echo('$a = ' . "13<br>");
            case 14:
                echo('$a = ' . "14<br>");
            case 15:
                echo('$a = ' . "15<br>");
        }
    } else {
        echo("\$a = $a и не входит в заданный диапазон [0..15]");
    }
    echo('<hr>');