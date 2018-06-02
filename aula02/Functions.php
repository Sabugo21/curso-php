<?php

function olaMundo(){

	echo 'Ola mundo <br>';
}

olaMundo();
echo '<hr>';

function olaUsuario($nome){
	echo 'Ola' . $nome . '<br>';
}

olaUsuario('Bruno');
olaUsuario('Juan');
echo '<hr>';

function olaUsuario2($nome= 'Rossi'){
	echo 'Ola' . $nome . '<br>';
}
olaUsuario2('Bruno');
olaUsuario2();
echo '<hr>';


function soma(int $num1, int $num2){
	echo $num1 + $num2 . '<br>';
}

soma(5,4);

echo '<hr>';


//(int $idade) - forca de tipagem parametros
function verificaMaiorIdade(int $idade)  : bool{
	if($idade >= 18){
		return true;
	}else{
		return false;
	}
	//return($idade>=18) ?true: false;
}

$var = verificaMaiorIdade(24);
var_dump($var);

function negrito(string $txt)  :  string{
	return '<strong>' . $txt . '</strong>';
}

$msg= '4linux - PHP';

echo negrito('4linux');

function italico(){
	global $msg;
	echo '<i>' . $msg . '</i>';
}
$msg= '4linux - PHP';
italico();

echo '<hr>';

function adicionar(&$fruta){
 ++$fruta;
}


$laranjas = 5;
echo $laranjas . '<br>';
++$laranjas;
echo $laranjas . '<br>';
adicionar($laranjas);
echo $laranjas . '<br>';
++$laranjas;
echo $laranjas . '<br>';