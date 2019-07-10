<?php
/*
 * Задача №4
 *
 * Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2,
 * $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием
 * операции. В зависимости от переданного значения операции выполните одну из
 * арифметических операций (используйте функции из пункта 4) и верните
 *полученное значение (используйте switch).
 */
/* Функция, выполняющая четыре математические операции: +, -, * и /
 * $arg1        -   первый операнд
 * $arg2        -   второй операнд
 * $operation   -   математическая операция
 */
    function mathOperation($arg1, $arg2, $operation)
    {
        define("MATH_ADD", '+');
        define("MATH_SUB", '-');
        define("MATH_MUL", '*');
        define("MATH_DIV", '/');
        // Подключим модуль с математическими операциями
        require_once('math.php');
        // Вызываем операции в зависимости от переданного параметра
        switch ($operation) {
            case MATH_ADD:
                return Addition($arg1, $arg2);
            case MATH_SUB:
                return Substruction($arg1, $arg2);
            case MATH_MUL:
                return Multiplication($arg1, $arg2);
            case MATH_DIV:
                if ($arg2 == 0) {
                    return ('На 0 делить нельзя!');
                } else {
                    return Division($arg1 / $arg2);
                }
            default:
                return ('Неизвестная операция!');
        }
    }

    // Вывод "шапки"
    echo ('<h4>Задание 4:</h4>');
    echo('<hr>');
    echo '<p>
            Реализуйте функцию с тремя параметрами: function mathOperation(\$arg1, \$arg2, * \$operation),
            где \$arg1, \$arg2 – значения аргументов, \$operation – строка с названием операции.
            В зависимости от переданного значения операции выполните одну из арифметических операций
            (используйте функции из пункта 3) и верните полученное значение (используйте switch).
          </p>';
    echo('<hr>');
    echo '<p>
            Для корректного вызова в адресной строке открывшегося окна браузера необходимо ввести данные, например - "http://{url}/4.php?x=16&y=3&o=+"
          <p>';

    // Передача параметров с проверкой на их наличие, т.е. то, что эти параметры были переданы скрипту через браузер
    $x = $_GET['x'] ?? 0;
    $y = $_GET['y'] ?? 0;
    $o = $_GET['o'] ?? '+';

    // Обработаем спец.символ адресной строки браузера - "+",
    // заменив в переменной математической операции " " на "+"
    if($o === ' ') {
        $o = '+';
    }

    // Вывод результатов математических операций
    echo ("X = $x<br>");
    echo ("Y = $y<br>");
    echo('<br>');
    echo ("$x $o $y = " . mathOperation($x, $y, $o));
    echo '<hr>';