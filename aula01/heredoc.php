<?php
//heredoc

$nome= 'Bruno Rossi';
$idade= 36;
$prof= 'desenvolvedor';
$prof2= 'programador Front End';

$frase= <<< TXT
Meu nome é {$nome} e eu tenho {$idade} anos, trabalho como {$prof} e tambem {$prof2}.
TXT;

echo $frase;