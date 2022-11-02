<?php
	$arr = [1, 2, 43, 4, 51, 0, -3];
	
	foreach ($arr as $elem) {
		if ($elem == 0) {
			echo 'есть';
			break; 
		}
	}
?>