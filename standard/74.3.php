<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach($arr as $num) {
$sum += pow($num, 2);
}

$result = sqrt($sum);
echo $result;
?>