<?php

/**
 * Функции для первого урока
 */


/**
 * @param $num
 * Генерирует блоки для таблицы умножения,
 * построчно записывая для цифры $num
 * выражения  типа: $num  x  1  =  $num * 1;
 */

function multiTableItem($num)
{
    for ($i = 1; $i < 11; $i++) {
        echo "$num  x  $i  =  " .$num * $i . "<br>";
    }
}

/**
 * Функции 2 урок
 */

/**
 * @param $num
 * @param callable $callback
 * Генерирует блоки для таблицы умножения и
 * обрабатывает строки коллбэк функцией,
 * построчно записывая для цифры $num
 * выражения  типа: $num  x  1  =  $num * 1
 *
 */

function multiTablePaint($num, $callback)
{
    for ($i = 1; $i < 11; $i++) {
        echo call_user_func($callback, "$num  x  $i  =  " . $num * $i . "<br>");
    }
}

/**
 * @param $str
 * @return string
 * Функция обрабатывает строку, перебирая посимвольно ее.
 * Если символ, который обрабатывается входит в свод правил
 * 1 - красный,
 * 2 - зеленый,
 * 3 - желтый,
 * 4 - синий, то этот символ оборачивается в span с соответствубщим классом
 */

function paintNumbers($str)
{
    $string = '';
    for ($i = 0; $i < strlen($str); $i++) {
        switch (substr($str, $i, 1)) {
            case 1:
                $string .= "<span class='red'>" . substr($str, $i, 1) . "</span>";
                break;
            case 2:
                $string .= "<span class='green'>" . substr($str, $i, 1) . "</span>";
                break;
            case 3:
                $string .= "<span class='yellow'>" . substr($str, $i, 1) . "</span>";
                break;
            case 4:
                $string .= "<span class='blue'>" . substr($str, $i, 1) . "</span>";
                break;
            default :
                $string .= substr($str, $i, 1);
                break;
        }
    }
    return $string;
}