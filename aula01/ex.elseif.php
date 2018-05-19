<?php

$nota= readline( 'Digite sua nota: ');
$frequencia= readline ('Digite sua frequencia: ');

if($nota>= 7 && $frequencia>=8){
	echo 'Aprovado';
} else if($nota>=5 && $nota<7 && $frequencia>=8){
	echo 'Recuperacao';
}else {
	echo 'Reprovado';
}