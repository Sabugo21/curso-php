<?php

$num=0;

echo '-------------------';
while($num <=10){

//par quando resto da divisao por 2é 0;
if($num % 2 ==0){
	echo $num.PHP_EOL;
}	
$num++;
}
//$num ++2;  Incrementa de 2 em 2

echo'------------------------------';

$num=0;

while($num<=50){
	//Multiplo de 5 quando resto da divisao por 5 é 0;
if($num % 5==0){
	echo $num.PHP_EOL;
}
$num++;
}
