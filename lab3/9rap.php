<?php

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // Значение переменной $key равно 2;
$key1= array_search('red', $array);   // Значение переменной $key равно 1;

echo $key . "</br>";
echo $key1;
?>