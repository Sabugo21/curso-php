<?php

$num1= 10;
$num2= '10';

echo '<pre>';
//igual ==
var_dump($num1 == $num2);
//diferente!=
var_dump($num1 != $num2);
//Nao identico !==
var_dump($num1 !== $num2);
//maior >
var_dump($num1 > $num2);
//maior ou igual >=
var_dump($num1 >= $num2);
//Menor <
var_dump($num1 > $num2);
//menor ou igual >=
var_dump($num1 >= $num2);

echo 'operador Spaceship <br>';
//$a <=> $b
var_dump(1<=>0);
var_dump(1<=>1);
var_dump(1<=>2);