<?php
	$arr = [];
    $k = 2; 
	
	for ($i = 0; $i < 4; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$array[$i][$j] = $k; 
			$k+=2; 
		}
	}
	
	var_dump($arr);
?>