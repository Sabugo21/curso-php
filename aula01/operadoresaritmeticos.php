<?php

//CLI - Command line interface
// Interface de linha de comando

$nome= readline('Digite seu nome: ');
echo $nome . PHP_EOL;

$idade= readline('Digite sua idade: ');

echo "Ola, sou {$nome} e tenho {$idade} anos" . PHP_EOL; 