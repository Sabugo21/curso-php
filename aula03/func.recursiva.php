<?php

function fatorial($x){
		echo $x .'<br>';
		return $x * fatorial($x -1);
}
echo fatorial(4);