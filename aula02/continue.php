<?php 
//numeros de 0 a 10 pulando o 7

for($i=0; $i<=10; $i++){
	if($i==7){
		continue;
	}
	echo $i.PHP_EOL;
}

echo'_____________________________________________________'.PHP_EOL;


for($i=0; $i<=10; $i++){
	if($i==6){
		break;
}
echo $i.PHP_EOL;
}