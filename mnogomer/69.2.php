<?php
$ar = [[1, 2], [3, 4], [5, 6]];
$s=0;
for ($i = 0; $i < 3; $i++) {
	for ($ii = 0; $ii < 2; $ii++){
		$s += $ar[$i][$ii];
	
}
}
echo $s;
?>