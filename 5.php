<?php
    // Описание переменных
    $title = '<title>Задание 5</title>';     // Title страницы
    $encoding = '<meta charset="UTF-8">';                   // Кодировка
    $date = date('d.m.Y');                                  // Дата
    $year = date('Y');                                      // Год

    // Вывод в браузер(генерация)
    echo $encoding;
    echo $title;
    echo '<hr>';

    // Вывод "шапки"
    echo ('<h4>Задание 5:</h4>');
    echo '<hr>';
    echo '<p>
            Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести
            текущий год в подвале при помощи встроенных функций PHP.
          </p>';
    echo '<hr>';

    // Контент
    echo '<p>
            Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Рекламных, текст
            заглавных подзаголовок большой дороге на берегу прямо своих он залетают. Несколько алфавит бросил текст
            взгляд пунктуация то инициал ее скатился. Лучше свою диких букв сбить, языкового ты предложения рекламных            возвращайся риторический рот домах города они! Знаках от всех рыбного ему осталось эта одна букв пор
            предложения.
          </p>';

    // Подвал
    echo '<hr>';
    echo "Дата формирования страницы: $date<br>";
    echo "<b><i>Год формирования страницы: $year</i></b><br>";
    echo '<hr>';