<?php
/*
 * Реализация функций четырех математических операций: +, -, *, /
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
    if($y != 0) {
        return ($x / $y);
    }
}