<?php
    $arr = array(1,-2,3,-1,-2,5);
    $sum = 0;

    foreach($arr as $t )
    if($t > 0)
    $sum+= $t;
    print($sum);
?>