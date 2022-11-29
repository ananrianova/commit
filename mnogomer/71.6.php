<?php
	$arr = [];
    $k=1;
	for ($i = 0; $i < 2; $i++) {
		for ($j = 0; $j < 2; $j++) {
		for ($t = 0; $t < 2; $t++) {
			$ARR[$i][$j][$t] = $k;
			$k++;
		}
	}
}
	
	var_dump($arr);
?>