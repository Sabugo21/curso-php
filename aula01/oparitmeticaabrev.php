<?php

$num1= readline ('Digite o primeiro numero: ');

$num= 10;

$num += $num1;
echo 'adicao:' . $num . PHP_EOL;

$num -= $num1;
echo 'subtracao:' . $num . PHP_EOL;

$num *= $num1;
echo 'multiplicacao:' . $num . PHP_EOL;

$num /= $num1;
echo 'divisao:' . $num . PHP_EOL;

$num %= $num1;
echo 'modu:' . $num . PHP_EOL;
