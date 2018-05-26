<?php

$pessoa = [
'nome' => 'Bruno',
'idade' => '36',
'email' => 'sabugo21@gmail.com',
'empresa' => 'ItCar'
];

echo '<hr>';

foreach ($pessoa as $chave => $valor){
	echo 'chave' . $chave. 'valor' . $valor . '<br>';
};

echo '<hr>';

foreach ($pessoa as $valor){
	echo 'valor' . $valor . '<br>';
};