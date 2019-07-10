<?php
/*
 * Реализация функций четырех математических операций: +, -, *, /
 */
// Сложение
function addition($x = 0, $y = 0)
{
    return ($x + $y);
}
// Вычитание
function substruction($x = 0, $y = 0)
{
    return ($x - $y);
}
// Умножение
function multiplication($x = 0, $y = 0)
{
    return ($x * $y);
}
// Деление
function division($x = 0, $y = 1)
{
    if($y != 0) {
        return ($x / $y);
    }
}