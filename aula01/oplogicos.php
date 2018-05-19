<?php

echo '<pre>';
echo 'operador AND && <br>';

echo 'true and true ';
var_dump(true AND true );
echo 'true and false ';
var_dump(true && true );
echo 'true and false ';
var_dump(true && false );
echo 'false and true ';
var_dump(false && true );
echo 'false and false ';
var_dump(false AND false );


echo '<pre>';
echo 'operador OR || <br>';

echo 'true || true ';
var_dump(true || true );
echo 'true || false ';
var_dump(true || true );
echo 'true || false ';
var_dump(true || false );
echo 'false || true ';
var_dump(false || true );
echo 'false || false ';
var_dump(false || false );

echo '<pre>';
echo 'operador XOR <br>';

echo 'true XOR true ';
var_dump(true XOR true);
echo 'true XOR false ';
var_dump(true XOR true);
echo 'true XOR false ';
var_dump(true XOR false);
echo 'false XOR true ';
var_dump(false XOR true);
echo 'false XOR false ';
var_dump(false XOR false);

echo '<pre>';
echo 'Operadores de negacao! <br>';
echo '!false ';
var_dump(!false);
echo 'true ';
var_dump(!true);