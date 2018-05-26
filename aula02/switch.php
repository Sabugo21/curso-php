<?php

//Swicth

$op= readline('Digite uma opcao');

switch($op){
	case 1:
	echo 'Voce digitou a opcao 1'.PHP_EOL;
	break;

	case 2:
	echo 'Voce digitou a opcao 2'.PHP_EOL;
	break;

	case 3:
	echo 'Voce digitou a opcao 3'.PHP_EOL;
	break;

	case 4:
	echo 'Voce digitou a opcao 4'.PHP_EOL;
	break;

	case 5:
	echo 'Voce digitou a opcao 5'.PHP_EOL;
}

switch (true){
	case ($op > 0 && $op <5):
	echo 'Seu numero esta entre 0 e 5'.PHP_EOL;
	break;

	case ($op > 5 && $op < 10):
	echo 'Seu numero esta entre 5 e 10'.PHP_EOL;
	break;

	case ($op > 10 && $op < 15):
	echo 'Seu numero esta entre 10 e 15'.PHP_EOL;
	break;
}