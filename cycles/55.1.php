<?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
$flag = false;
	foreach ($arr as $elem) {
		if ($elem === 'c') {
			$flag = true;
			break;
		}
	}

	if ($flag === true) {
		echo 'да';
	} else {
		echo 'нет';
	}

?>