<?php
$nota= readline ('Digite sua nota');
$frequencia= readline ('Digite sua frequencia');


switch (true){
	
	case ($nota>=7 && $frequencia>=8):
	echo 'Voce esta aprovado'.PHP_EOL;
	break;

	case ($nota>=5 && $nota<7 && $frequencia>=8):
	echo 'Voce esta de recuperacao'.PHP_EOL;
	break;

	default:
	echo 'Reprovado'.PHP_EOL;
	break;
}

