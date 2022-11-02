<?php
$arr = [23, 5, 12, 4, -1, 0 ,9];
$sum =0;

foreach($arr as $key => $val) {
    if($val < 0) {
        break;
    }
    
    $sum += $val;
}

echo $sum;
?>