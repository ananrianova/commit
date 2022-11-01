<?php
	$a = 17;
    $b = 2;
    $rest = $a % $b;
	
	if ($rest === 0) {
		echo 'число четное';
	} else {
		echo 'число нечетное, остаток ='.$rest;
	}
?>