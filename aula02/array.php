<?php

//ARRAY
//[0]= valor
//[1]= valor2

//$arr= ['valor1', 'Valor2'];
//$arr[3]=123;
//$arr[3]= 456;
//echo no array não funciona

 //$arr=['Bruno', 36, 'sabugo21@gmail.com', '1,67'];

//print_r($arr); //funciona
//var_dump($arr); //funciona

//echo $arr[0] . '<br>';
//echo $arr[1] . '<br>';
//echo $arr[2] . '<br>';
//echo $arr[3] . '<br>';

//echo '<hr>';

//for ($i=0; $i < 4; $i++) { 
//	echo $arr[$i] . '<br>';
//}

echo '<hr>';

//Array associativo

$pessoa=[
'nome'  =>'Bruno',
//0 =>'Bruno',
'idade' => 36,
'cep' => '09190-370',
//2 => '09190-370',
'altura' => '1.67',
//3 => '1,67'
];
print_r($pessoa);