<?php
$a = [
	[
		[1, 2],
		[3, 4],
	],
	[
		[5, 6],
		[7, 8],
	],
];

$su=0;
	
	for ($i = 0; $i < 2; $i++) {
		for ($ii = 0; $ii < 2; $ii++){
			for ($iii = 0; $iii < 2; $iii++){
			$su += $a[$i][$ii][$iii];
	
		}
	}
}
echo $su;
?>