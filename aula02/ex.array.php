<?php

$pessoa[] = readline('nome');
$pessoa[] = readline('idade');
$pessoa[] = readline('email');
$pessoa[] = readline('empresa');

//print_r($pessoa);

for ($i=0; $i <4 ; $i++) { 
	echo $pessoa[$i] . PHP_EOL;
}

$pessoa['nome'] = readline('nome');
$pessoa['idade'] = readline('idade');
$pessoa['email'] = readline('email');
$pessoa['empresa'] = readline('empresa');

echo (