<?php

$idade= 18;
$temHabilitacao= true;

if ($idade >=18 && $temHabilitacao){
	echo 'Pode dirigir';
} else if($idade >= 18){
	echo 'Ńão pode dirigir, mas pode tirar habilitacao'; 
} else{
	echo 'Não pode dirigir e nem tirar habilitacao';
}



