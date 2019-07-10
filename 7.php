<?php
/*
 * Задача №6
 *
 * Напишите функцию, которая вычисляет текущее время и возвращает его в формате
 * с правильными склонениями, например:
 * 22 часа 15 минут
 * 21 час 43 минуты
 * итд.
 * Подсказка: часы и минуты можно узнать с помощью встроенной функции PHP – date.
 */
    // Вывод "шапки"
    echo ('<title>Задание 7</title>');
    echo ('<h4>Задание 7:</h4>');

    echo('<hr>');
    echo <<<TXT
        Напишите функцию, которая вычисляет текущее время и возвращает его в формате
        с правильными склонениями, например:<br>
        22 часа 15 минут<br>
        21 час 43 минуты<br>
        и т.д.<br>
        <blockquote>Подсказка: часы и минуты можно узнать с помощью встроенной функции PHP –
        date.</blockquote>
    TXT;
    echo '<hr>';

    function decHour($hour = 0) {
        /*Функция определения правильного склонения русского языка для часов*/
        /*Исходя из постановки задачи гарантированно корректно обрабатывает интервал от 0 до 24 часов*/
        if (($hour == 1) OR ($hour == 21)) {
            $hours = "час";
        }
        elseif ((($hour >= 2) AND ($hour <= 4)) OR (($hour >= 22) AND ($hour <= 24))) {
            $hours = "часа";
        }
        else {
            $hours = "часов";
        }
        return $hours;
    }
    function decMinute($minute = 0) {
        /*Функция определения правильного склонения русского языка для минут*/
        /*Исходя из постановки задачи гарантированно корректно обрабатывает интервал от 0 до 60 минут*/
        $remDiv = $minute % 10;
        if (($remDiv == 1) AND ($minute != 11)) {
            $minutes = "минута";
        }
        elseif (($remDiv == 0) OR (($remDiv >= 5) AND ($remDiv <= 9)) OR (($minute >= 11) AND ($minute <= 14))) {
            $minutes = "минут";
        }
        else  {
            $minutes = "минуты";
        }
        return $minutes;
    }
    function myTime() {
        /*Функция вычисляет текущее время и возвращает его в формате с правильными склонениями в строковую переменную*/
        /*Проверка функций определения склонения часов и минут*/
        /*
        for ($i=0; $i<=24; $i++) {
        echo($i . ' ' . decHour($i)) . "<br>";
        }
        for ($i=0; $i<=60; $i++) {
        echo($i . ' ' . decMinute($i)) . "<br>";
        }
        */
        $strTime = '';
        $strTime .= date('G');
        $strTime .= ' ';
        $strTime .= decHour(date('G'));
        $strTime .= ' ';
        $strTime .= date('i');
        $strTime .= ' ';
        $strTime .= decMinute(date('i'));
        $strTime .= "<br>";
        return $strTime;
    }
    /*Установка временной зоны и вызов функции вычисления и отображения системного времени*/
    date_default_timezone_set('Asia/Irkutsk');
    echo ("Текущее системное время: ");
    echo myTime();
?>